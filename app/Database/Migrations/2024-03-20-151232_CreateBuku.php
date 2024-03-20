<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBuku extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'judul_buku' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
                'null' => false,
            ],
            'id_kategori' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => false,
            ],
            'pengarang' => [
                'type' => 'VARCHAR',
                'constraint' => 64,
                'null' => false,
            ],
            'penerbit' => [
                'type' => 'VARCHAR',
                'constraint' => 64,
                'null' => false,
            ],
            'tahun_terbit' => [
                'type' => 'YEAR',
                'constraint' => 4,
                'null' => false,
            ],
            'isbn' => [
                'type' => 'VARCHAR',
                'constraint' => 64,
                'null' => false,
            ],
            'stok' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => false,
            ],
            'dipinjam' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => false,
            ],
            'dibooking' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => false,
            ],
            'image' => [
                'type' => 'VARCHAR',
                'constraint' => 256,
                'null' => true,
                'default' => 'book-default-cover.jpg'
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('buku');
    }

    public function down()
    {
        $this->forge->dropTable('buku');
    }
}
