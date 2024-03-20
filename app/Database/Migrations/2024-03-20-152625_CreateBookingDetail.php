<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBookingDetail extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_booking' => [
                'type' => 'VARCHAR',
                'constraint' => 12,
                'null' => false,
            ],
            'id_buku' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('booking_detail');
    }

    public function down()
    {
        $this->forge->dropTable('booking_detail');
    }
}
