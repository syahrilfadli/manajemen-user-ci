<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PermissionsModel;

class Permissions extends BaseController
{
    public function index()
    {
        $permissionsModel = new PermissionsModel();
        $permissions = $permissionsModel->findAll();

        return view('permissions', ['permissions' => $permissions]);
    }

}
