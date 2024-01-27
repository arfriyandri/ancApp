<?php

namespace Database\Seeders;

use App\Models\RekamMedisPasien;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyRekamMedisPasien extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'id_bidans' => '1',
                'id_pasiens' => '1',
                'berat_badan' => '68',
                'jumlah_janin' => '1',
                'keluhan' => 'Mual Ringan',
                'tfu' => '24', // Tinggi Fundus Uteri dalam cm
                'uk' => '24', //usia kehamilan dalam mgg
                'hb' => '11', //satuan gram/desiLiter (mg/dL)
            ],
        ];

        foreach ($userData as $key => $val) {
            RekamMedisPasien::create($val);
        }
    }
}
