<?php

namespace Database\Seeders;

use App\Models\Bidan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyBidan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Siti',
                'username' => 'bidan',
                'alamat' => 'Kuripan',
                'password' => bcrypt('12345')
            ],
        ];

        foreach ($userData as $key => $val) {
            Bidan::create($val);
        }
    }
}
