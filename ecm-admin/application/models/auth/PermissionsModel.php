<?php
class PermissionsModel extends CI_Model
{
    /**
     * allow
     * 
     * To Be Added in the __construct() of a Controller Class
     * Allow Perticular Controller to a User or Set of Users
     *
     * @param  array $userdata
     * @return bool
     */
    public function allow(array $userdata): bool
    {
        if (array_key_exists('group', $userdata)) {
            return true;
        } elseif (array_key_exists('role', $userdata)) {
            return true;
        } elseif (array_key_exists('username', $userdata)) {
            return true;
        } else {
            return false;
        }
    }

    public function has_permission($group)
    {
        exit('No direct script access allowed');
    }
}
