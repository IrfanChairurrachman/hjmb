<?php namespace App\Database\Seeds;
 
class AdminSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            'username'  => 'admin',
            'name'      => 'Admin',
            'email'     => 'admin@example.com',
            'password'  => 'admin123',
        ];
        $this->db->table('users')->insert($data);
    }
} 