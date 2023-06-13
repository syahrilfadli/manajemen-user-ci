<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\BaseModel;

class RoleUserModel extends BaseModel
{
    protected $table = 'role_user';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'user_id', 'role_id', 'created_at', 'updated_at'];
}
