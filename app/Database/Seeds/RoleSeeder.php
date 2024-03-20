<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'role' => 'Administrator',
            ],
            [
                'id' => 2,
                'role' => 'User',
            ],
        ];

        $this->db->table('role')->insertBatch($data);
    }
}
