<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalPasien extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable = [
        'id',
        'id_bidans',
        'id_pasiens',
        'tanggal',
        'waktu',
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'id_pasiens');
    }

    public function bidan()
    {
        return $this->belongsTo(Bidan::class, 'id_bidans');
    }
}
