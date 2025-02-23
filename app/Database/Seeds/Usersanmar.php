<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usersanmar extends Seeder
{
    public function run()
    {
        // Data user yang akan dimasukkan
        $data = [[
            'username' => 'admin',
            'password' => password_hash('adminanmar123++', PASSWORD_BCRYPT), // Hash password
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'username' => 'faisal',
            'password' => password_hash('faisal', PASSWORD_BCRYPT), // Hash password
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
    ];

        // Menyisipkan data ke dalam tabel users
        $this->db->table('users')->insert($data);
    }
}
