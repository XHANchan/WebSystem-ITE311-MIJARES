<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'       => 'Chistian R. Mijares',
                'email'      => 'christian.admin@lms.com',
                'password'   => password_hash('admin123', PASSWORD_DEFAULT),
                'role'       => 'admin',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'       => 'Prof. Maria Clara',
                'email'      => 'Clara.instructor@lms.com',
                'password'   => password_hash('instructor123', PASSWORD_DEFAULT),
                'role'       => 'instructor',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'       => 'Drake Palma',
                'email'      => 'Drake.student@lms.com',
                'password'   => password_hash('student123', PASSWORD_DEFAULT),
                'role'       => 'student',
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ];

        // Using Query Builder
        $this->db->table('users')->insertBatch($data);
    }
}