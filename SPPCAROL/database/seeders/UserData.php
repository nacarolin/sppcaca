<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'admin',
                'password' => bcrypt('admin'),
                'nama' => 'Admin',
                'level' => 'admin'
            ],
            [
                'username' => 'carol',
                'password' => bcrypt('1234'),
                'nama' => 'Carol',
                'level' => 'siswa'
            ]
        ];

        foreach ($user as $key => $value){
            User::create($value);
        }
    }
}
