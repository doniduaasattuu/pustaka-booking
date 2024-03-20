<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Seed extends Seeder
{
    public function run()
    {
        $db = \Config\Database::connect();
        $tables = ['kategori', 'users', 'role'];

        foreach ($tables as $table) {
            $builder = $db->table($table);
            $builder->emptyTable();
        }

        $this->call('RoleSeeder');
        $this->call('UserSeeder');
    }
}
