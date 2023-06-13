<?php

namespace App\Models;

use App\Models\BaseModel;

class PermissionsModel extends BaseModel
{
    protected $table = 'permissions';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'name', 'created_at', 'updated_at'];

    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';

    protected $uuids = true; // Mengaktifkan penggunaan UUID

    
    public function roles()
    {
        return $this->belongsToMany('App\Models\Users\RoleModel', 'role_permission', 'permission_id', 'role_id');
    }
}
