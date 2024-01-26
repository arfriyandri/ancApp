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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_bidan')->constrained('bidans');
            $table->string('name'); //Nama Lengkap
            $table->string('username'); //NIK
            $table->string('password');
            $table->string('alamat');
            $table->string('pekerjaan');
            $table->integer('umur');
            $table->string('agama');
            $table->float('tinggi_badan');
            $table->string('nomor_hp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
