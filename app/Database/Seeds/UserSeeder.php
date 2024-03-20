<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nama' => 'Doni Darmawan',
            'alamat' => 'Kp.Pengkolan, Ds.Kalijaya, Kec.Cikarang Barat, Kab.Bekasi',
            'email' => 'doni.duaasattuu@gmail.com',
            'image' => 'doni.png',
            'password' => 'rahasia',
            'role_id' => 'admin',
            'is_active' => 0,
            'tanggal_input' => 20032024,
        ];

        $this->db->table('users')->insert($data);
    }
}
