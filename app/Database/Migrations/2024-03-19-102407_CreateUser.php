<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
                'null' => false,
            ],
            'alamat' => [
                'type' => 'TEXT',
                'null' => false,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
                'null' => false,
            ],
            'image' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
                'null' => false,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 256,
                'null' => false,
            ],
            'role_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => false,
            ],
            'is_active' => [
                'type' => 'INT',
                'constraint' => 1,
                'null' => false,
            ],
            'tanggal_input' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => false,
            ],

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
