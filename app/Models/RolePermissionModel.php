<?php

namespace App\Models;

use App\Models\BaseModel;

class RolePermissionModel extends BaseModel
{
    protected $table = 'role_permission';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'role_id', 'permission_id', 'created_at', 'updated_at'];

    protected $uuids = true; // Mengaktifkan penggunaan UUID

}
