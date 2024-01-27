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
        Schema::create('rekam_medis_pasiens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_bidans')->constrained('bidans');
            $table->foreignId('id_pasiens')->constrained('pasiens');
            $table->integer('berat_badan');
            $table->float('jumlah_janin');
            $table->string('keluhan');
            $table->string('tfu'); // Tinggi Fundus Uteri dalam cm
            $table->string('uk'); //usia kehamilan dalam mgg
            $table->string('hb'); //satuan gram/desiLiter (mg/dL)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekam_medis_pasiens');
    }
};
