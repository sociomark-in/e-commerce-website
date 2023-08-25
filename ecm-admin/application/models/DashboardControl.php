<?php
class DashboardControl extends CI_Model
{
    public $menu = "";
    public function __construct()
    {
        parent::__construct();
    }

    public function menu_options()
    {
        $master = [];

        $parentMenu = $this->db->get_where('ecm_menu_mgmt', array('enable' => 'true', 'parent_id' => '0'))->result();
        // for ($i = 0; $i < count($parentMenu); $i++) {
        foreach ($parentMenu as $parentKey => $parentValue) {
            $parentValue = (array)$parentValue;
            $master[$parentValue['identifier']] = [];
            $master[$parentValue['identifier']] = $parentValue;
            $this->db->order_by("priority", "asc");
            $childMenu = $this->db->get_where('ecm_menu_mgmt', array('enable' => 'true', 'parent_id' => $parentValue['id']))->result();
            $i = 0;
            foreach ($childMenu as $key => $value) {
                $value = (array)$value;
                $master[$parentValue['identifier']][$parentValue['type']][$i] = $value;
                $i++;
            }
        }
        $this->menu = json_encode($master);
        return $this->menu;
    }

    public function load_modules()
    {
        $modules = [
            [
                "name" => "",
                "enable" => true
            ]
        ];
    }
}
