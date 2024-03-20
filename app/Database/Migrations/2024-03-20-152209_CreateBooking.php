<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBooking extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_booking' => [
                'type' => 'VARCHAR',
                'constraint' => 12,
                'null' => false,
            ],
            'tgl_booking' => [
                'type' => 'DATE',
                'null' => false,
            ],
            'batas_ambil' => [
                'type' => 'DATE',
                'null' => false,
            ],
            'id_user' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
        ]);
        $this->forge->addKey('id_booking', true);
        $this->forge->createTable('booking');
    }

    public function down()
    {
        $this->forge->dropTable('booking');
    }
}
