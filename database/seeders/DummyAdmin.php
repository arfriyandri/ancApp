<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyAdmin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'username' => 'admin',
                'role' => 'admin',
                'password' => bcrypt('12345')
            ],
        ];

        foreach ($userData as $key => $val) {
            Admin::create($val);
        }

    }
}
