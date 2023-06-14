<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use Ramsey\Uuid\Uuid;

class Users extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $users = $userModel->findAll();
        return view('users/index', ['users' => $users]);
    }

    public function create()
    {
        return view('users/create');
    }

    public function store()
    {
        $userModel = new UserModel();

        $data = [
            'id' => Uuid::uuid4()->toString(), // Generate UUID
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $userModel->insert($data);

        return redirect()->to(site_url('/'));
    }

    public function edit($uuid)
    {
        var_dump($uuid);
        $userModel = new UserModel();
        $user = $userModel->where('id', $uuid)->first();

        return view('users/edit', ['user' => $user]);

    }

    public function update($uuid)
    {
        $userModel = new UserModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $userModel->update($uuid, $data);

        return redirect()->to(site_url('/'));
    }

    public function delete($uuid)
    {
        $userModel = new UserModel();

        $userModel->delete($uuid);

        return redirect()->to(site_url('users'));
    }
}
