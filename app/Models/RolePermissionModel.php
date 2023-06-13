<?php

namespace App\Models;

use CodeIgniter\Model;

class RolePermissionModel extends Model
{
    protected $table = 'role_permission';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'role_id', 'permission_id', 'created_at', 'updated_at'];

    protected $uuids = true; // Mengaktifkan penggunaan UUID

}
