<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Permissions extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => [
                'type'           => 'VARCHAR',
                'constraint'     => 36,
                'null'           => false,
            ],
            'name'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'null'           => false,
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'null'           => false,
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('permissions');

        $this->db->query('SET FOREIGN_KEY_CHECKS=0');
        // Tambahkan pernyataan SQL di atas untuk menonaktifkan pengecekan foreign key

        // Tambahkan pernyataan SQL di bawah untuk mengaktifkan kembali pengecekan foreign key
        $this->db->query('SET FOREIGN_KEY_CHECKS=1');
    }

    public function down()
    {
        $this->forge->dropTable('permissions');
    }
}
