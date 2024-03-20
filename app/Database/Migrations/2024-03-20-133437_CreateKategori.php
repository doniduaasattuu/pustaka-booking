<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKategori extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'kategori' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
                'null' => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('kategori');
    }

    public function down()
    {
        $this->forge->dropTable('kategori');
    }
}
