<?php

namespace Database\Seeders;

use App\Models\JadwalPasien;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyJadwalPasien extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JadwalPasien::create([
            'id_bidans' => 1,
            'id_pasiens' => 1,
            'tanggal' => '2024-01-28',
            'waktu' => '10:30:00',
        ]);
    }
}
