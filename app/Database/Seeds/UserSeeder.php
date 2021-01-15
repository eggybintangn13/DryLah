<?php namespace App\Database\Seeds;

class UserSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_user'     => 'Owner',
                'email'         => 'owner@drylah.com',
                'no_hp'         =>  '08321382131',
                'password'      =>  'owner',
                'level'         => '1',
                'foto_user'       => 'user.png'
                
            ],
            [
                'nama_user'     => 'Admin',
                'email'         => 'admin@drylah.com',
                'no_hp'         =>  '08321382131',
                'password'      =>  'admin',
                'level'         => '2',
                'foto_user'       => 'user.png'
                
            ],
            [
                'nama_user'     => 'Cust',
                'email'         => 'cust@drylah.com',
                'no_hp'         =>  '08321382131',
                'password'      =>  'cust',
                'level'         => '3',
                'foto_user'       => 'user.png'
            ]
        ];
        $this->db->table('tbl_user')->insertBatch($data);
    }
} 