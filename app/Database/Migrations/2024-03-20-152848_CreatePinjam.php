<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePinjam extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'no_pinjam' => [
                'type' => 'VARCHAR',
                'constraint' => 12,
                'null' => false,
            ],
            'tgl_pinjam' => [
                'type' => 'DATE',
                'null' => false,
            ],
            'id_booking' => [
                'type' => 'VARCHAR',
                'constraint' => 12,
                'null' => false,
            ],
            'id_user' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'tgl_kembali' => [
                'type' => 'DATE',
                'null' => false,
            ],
            'tgl_pengembalian' => [
                'type' => 'DATE',
                'null' => false,
            ],
            'status' => [
                'type' => 'ENUM("Pinjam", "Kembali")',
                'default' => 'Pinjam',
            ],
            'total_denda' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
        ]);
        $this->forge->addKey('no_pinjam', true);
        $this->forge->createTable('pinjam');
    }

    public function down()
    {
        $this->forge->dropTable('pinjam');
    }
}
