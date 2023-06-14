<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'name', 'email', 'password', 'token', 'created_at', 'updated_at'];
    
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';

    protected $uuids = true; // Mengaktifkan penggunaan UUID
    
//     public function find($uuid)
// {
//     return $this->where('id', $uuid)->first();
// }


    public function roles()
    {
        return $this->belongsToMany('App\Models\Users\RoleModel', 'role_user', 'user_id', 'role_id');
    }
}
?>