<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'       => 'John Doe',
                'email'      => 'john@example.com',
                'password'   => password_hash('123456', PASSWORD_DEFAULT), // Secure password hashing
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'       => 'Jane Doe',
                'email'      => 'jane@example.com',
                'password'   => password_hash('password123', PASSWORD_DEFAULT),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        // Insert data into the users table
        $this->db->table('usertable')->insertBatch($data);
    }
}
