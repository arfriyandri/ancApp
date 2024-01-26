<?php

namespace Database\Seeders;

use App\Models\Pasien;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyPasien extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'id_bidan' => '1',
                'name' => 'Jahora',
                'username' => '5272',
                'password' => bcrypt('12345'),
                'alamat' => 'Kuripan',
                'pekerjaan' => 'IRT',
                'umur' => '22',
                'agama' => 'islam',
                'tinggi_badan' => '168',
                'nomor_hp' => '0856',
            ],
        ];

        foreach ($userData as $key => $val) {
            Pasien::create($val);
        }
    }
}
