<?php

namespace App\Controllers;

use App\Models\RolesModel;

class Roles extends BaseController
{
    public function index()
    {
        
        $rolesModel = new RolesModel();
        $roles = $rolesModel->findAll();    

    return view('roles', ['roles' => $roles]);
        // Tampilkan view atau lakukan operasi lain dengan data $roles
    }
}
