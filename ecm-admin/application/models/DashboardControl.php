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
        $menuOptions = [
            'users' => [
                'enable' => true,
                'type' => 'dropdown',
                'text' => 'Users',
                'dropdown' => [
                    'customers' => [
                        'enable' => true,
                        'type' => 'single',
                        'text' => "Customers",
                        'url' => '/customers/all'
                    ],
                    'vendors' => [
                        'enable' => true,
                        'type' => 'single',
                        'text' => "Vendors",
                        'url' => '/vendors/all'
                    ]
                ]
            ],
            'enquiries' => [
                'enable' => true,
                'type' => 'dropdown',
                'text' => 'Enquiries',
                'dropdown' => [
                    'customers' => [
                        'enable' => true,
                        'type' => 'single',
                        'text' => "Franchise Enquiries",
                        'url' => '/enquiries/franchise/all'
                    ],
                    'vendors' => [
                        'enable' => true,
                        'type' => 'single',
                        'text' => "General Enquiries",
                        'url' => '/enquiries/general/all'
                    ]
                ]
            ],
            'promotional' => [
                'enable' => true,
                'type' => 'dropdown',
                'text' => 'Promotional',
                'dropdown' => [
                    'coupons' => [
                        'enable' => true,
                        'type' => 'single',
                        'text' => "All Coupons",
                        'url' => '/enquiries/franchise/all'
                    ],
                    'offers' => [
                        'enable' => true,
                        'type' => 'single',
                        'text' => "All Offers",
                        'url' => '/enquiries/general/all'
                    ]
                ]
            ],
            'categories' => [
                'enable' => true,
                'type' => 'single',
                'text' => "Categories",
                'url' => 'categories'
            ],
            'master' => [
                'enable' => true,
                'type' => 'dropdown',
                'text' => 'Master',
                'dropdown' => [
                    'products' => [
                        'enable' => true,
                        'type' => 'single',
                        'text' => "Products",
                        'url' => '/products'
                    ],
                    'leads' => [
                        'enable' => true,
                        'type' => 'single',
                        'text' => "Leads",
                        'url' => '/leads'
                    ],
                ]
            ],
            'reviews' => [
                'enable' => true,
                'type' => 'single',
                'text' => "Reviews",
                'url' => '/reviews'
            ],
            'brands' => [
                'enable' => true,
                'type' => 'single',
                'text' => "Brands",
                'url' => '/brands'
            ],
            'orders-invoices' => [
                'enable' => true,
                'type' => 'dropdown',
                'text' => 'Orders & Invoices',
                'dropdown' => [
                    'orders' => [
                        'enable' => true,
                        'type' => 'single',
                        'text' => "All Orders",
                        'url' => '/orders'
                    ],
                    'invoices' => [
                        'enable' => true,
                        'type' => 'single',
                        'text' => "All Invoices",
                        'url' => '/invoices'
                    ]
                ]
            ],
        ];

        $parentMenu = $this->db->get_where('ecm_menu_mgmt', array('enable' => 'true', 'parent_id' => '0'))->result();
        for ($i=0; $i < count($parentMenu); $i++) { 
            $parentMenu[$i] = (array)$parentMenu[$i];
            $childMenu = $this->db->get_where('ecm_menu_mgmt', array('enable' => 'true', 'parent_id' => $parentMenu[$i]['id']))->result();
            echo '<pre>';
            print_r((array)$childMenu);
            die;
        }
        $this->menu = json_encode($menuOptions);
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
