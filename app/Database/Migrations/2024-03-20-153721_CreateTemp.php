<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTemp extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'tgl_booking' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'id_user' => [
                'type' => 'VARCHAR',
                'constraint' => 12,
                'null' => false,
            ],
            'email_user' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
                'null' => true,
            ],
            'id_buku' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'judul_buku' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'image' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'penulis' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
                'null' => false,
            ],
            'penerbit' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
                'null' => false,
            ],
            'tahun_terbit' => [
                'type' => 'YEAR',
                'constraint' => 4,
                'null' => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('temp');
    }

    public function down()
    {
        $this->forge->dropTable('temp');
    }
}
