<?php

namespace App\Models;

use App\Models\BaseModel;


class RolesModel extends BaseModel
{
    protected $table = 'roles';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'name', 'created_at', 'updated_at'];

    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';

    protected $uuids = true; // Mengaktifkan penggunaan UUID

    public function users()
    {
        return $this->belongsToMany('App\Models\Users\UserModel', 'role_user', 'role_id', 'user_id');
    }

    public function permissions()
    {
        return $this->belongsToMany('App\Models\Users\PermissionModel', 'role_permission', 'role_id', 'permission_id');
    }
}
