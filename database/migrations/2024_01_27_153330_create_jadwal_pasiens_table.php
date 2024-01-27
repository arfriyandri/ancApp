<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jadwal_pasiens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_bidans')->constrained('bidans');
            $table->foreignId('id_pasiens')->constrained('pasiens');
            $table->date('tanggal');
            $table->time('waktu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_pasiens');
    }
};
