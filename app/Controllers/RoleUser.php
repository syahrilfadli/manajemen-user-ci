<?php

namespace App\Controllers;

use App\Models\RoleUserModel;

class RoleUser extends BaseController
{
    public function index()
    {
        $roleUserModel = new RoleUserModel();
        $role_user = $roleUserModel->findAll();

        // Tampilkan view atau lakukan operasi lain dengan data $role_user
    }
}
