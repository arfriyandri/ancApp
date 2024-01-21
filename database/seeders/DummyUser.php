<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'admin',
                'username' => 'admin',
                'role' => 'admin',
                'password' => bcrypt('12345')
            ],

            [
                'name' => 'bidan',
                'username' => 'bidan',
                'role' => 'bidan',
                'password' => bcrypt('12345')
            ],

            [
                'name' => 'pasien',
                'username' => 'pasien',
                'role' => 'pasien',
                'password' => bcrypt('12345')
            ]
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }

    }
}
