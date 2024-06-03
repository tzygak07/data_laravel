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
        Schema::create('t_percobaan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap', 50);
            $table->string('nama_ibu', 50);
            $table->string('nama_bapak', 50);
            $table->string('umur',2);
            $table->string('alamat', 50);
            $table->string('nomer_telepon', 15);
            $table->string('kelas', 20);
            $table->string('jurusan', 20);
            $table->string('email', 50);
            $table->string('hobi', 20);
            $table->string('merk_hp', 50);
            $table->string('pelajaran_fav', 20);
            $table->string('hewan_peliharaan', 20);
            $table->string('status', 50);
            $table->string('merk_laptop', 50);
            $table->string('cita_cita', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_percobaan');
    }
};
