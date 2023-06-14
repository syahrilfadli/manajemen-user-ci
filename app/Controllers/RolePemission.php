<?php

namespace App\Controllers;

use App\Models\RolePermissionModel;

class RolePermission extends BaseController
{
    public function index()
{
    $rolePermissionModel = new RolePermissionModel();
    $rolePermissions = $rolePermissionModel->findAll();

    return view('role_permission', ['rolePermissions' => $rolePermissions]);
}
}
