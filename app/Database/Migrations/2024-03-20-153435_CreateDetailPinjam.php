<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDetailPinjam extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'no_pinjam' => [
                'type' => 'VARCHAR',
                'constraint' => 12,
                'null' => false,
            ],
            'id_buku' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => false,
            ],
            'denda' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => false,
            ],
        ]);
        $this->forge->addKey('no_pinjam', true);
        $this->forge->createTable('detail_pinjam');
    }

    public function down()
    {
        $this->forge->dropTable('detail_pinjam');
    }
}
