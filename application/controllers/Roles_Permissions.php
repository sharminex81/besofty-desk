<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles_Permissions extends CI_Controller
{
    /**
     * Permissions constructor.
     */
    function __construct()
    {
        parent::__construct();
    }

    /**
     * Fetch all permissions
     */
    public function assign()
    {
        $permissions['role'] = Roles_model::details($this->uri->segment(3));
        $permissions['permissions'] = Permissions_model::getPermissions();
        $permissions['permission'] = Roles_Permissions_model::getAssignPermissions($permissions['role']->id);
        //var_dump($permissions['permission']); die();
        $permissions['permission_names'] = [];

        //$content['header'] = $this->load->view('common/header', '', true);
        //$content['navbar'] = $this->load->view('common/navbar', '', true);

        foreach($permissions['permission'] as $permission)
        {
            $permissions['permission_names'] = Roles_Permissions_model::getAssignPermissionsName($permission);
            $permissions['arrays'] =  (array) $permissions['permission_names'];
            var_dump((array) $permissions['arrays']);
            //var_dump($permissions['permission_names']);
            //$content['placeholder'] = $this->load->view('users/roles_permissions', $permissions, true);
        }
        //$content['header'] = $this->load->view('common/header', '', true);
        //$content['navbar'] = $this->load->view('common/navbar', '', true);
        //$content['placeholder'] = $this->load->view('users/roles_permissions', $permissions, true);
        //$content['footer'] = $this->load->view('common/footer', '', true);
        //$this->load->view('dashboard/dashboard', $content);
    }

    /**
     * To assign permissions to role
     */
    public function assignPermission()
    {
        $rolePermission = Roles_Permissions_model::add();
        var_dump($rolePermission); die();
    }

    /**
     * Fetch all assign permissions
     */
    public function getAssignPermissions()
    {
        $permissions = Roles_Permissions_model::getAssignPermissions();
        //var_dump(explode(',', $permissions->permission_id)); die();
        //var_dump(Roles_Permissions_model::getAssignPermissionsName(explode(',', $permissions->permission_id)));
    }


}