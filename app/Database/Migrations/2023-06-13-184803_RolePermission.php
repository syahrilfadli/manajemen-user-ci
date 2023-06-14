<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RolePermission extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => [
                'type'           => 'VARCHAR',
                'constraint'     => 36,
                'null'           => false,
            ],
            'role_id'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 36,
                'null'           => false,
            ],
            'permission_id' => [
                'type'           => 'VARCHAR',
                'constraint'     => 36,
                'null'           => false,
            ],
            'created_at'    => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at'    => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('role_permission');
        $this->db->query('SET FOREIGN_KEY_CHECKS=0');
        // Tambahkan pernyataan SQL di atas untuk menonaktifkan pengecekan foreign key

        // Tambahkan pernyataan SQL di bawah untuk mengaktifkan kembali pengecekan foreign key
        $this->db->query('SET FOREIGN_KEY_CHECKS=1');
    }

    public function down()
    {
        $this->forge->dropTable('role_permission');
    }
}
