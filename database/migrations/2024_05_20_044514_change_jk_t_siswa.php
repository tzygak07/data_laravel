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
        Schema::table('t_kelas', function(Blueprint$table){
            $table->renameColumn('nama_walkel', 'nama_wali_kelas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_kelas', function(Blueprint$table){
            $table->renameColumn('nama_wali_kelas', 'nama_walkel');
        }); 
    }
};
