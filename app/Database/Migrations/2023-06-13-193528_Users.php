<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsers extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'varchar',
                'constraint' => 36,
                'null' => false,
            ],
            'name' => [
                'type' => 'varchar',
                'constraint' => 255,
                'null' => false,
            ],
            'email' => [
                'type' => 'varchar',
                'constraint' => 255,
                'null' => false,
            ],
            'password' => [
                'type' => 'varchar',
                'constraint' => 255,
                'null' => false,
            ],
            'token' => [
                'type' => 'varchar',
                'constraint' => 255,
                'null' => true,
            ],
            'created_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('users');
        $this->db->query('SET FOREIGN_KEY_CHECKS=0');
        // Tambahkan pernyataan SQL di atas untuk menonaktifkan pengecekan foreign key

        // Tambahkan pernyataan SQL di bawah untuk mengaktifkan kembali pengecekan foreign key
        $this->db->query('SET FOREIGN_KEY_CHECKS=1');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
