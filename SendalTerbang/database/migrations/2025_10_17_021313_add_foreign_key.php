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
        Schema::table('proyek', function (Blueprint $table) {

            $table->foreign('kelompok')->
                    references('id')->on('kelompok');
        });

        // Schema::table('anggota_kelompok', function (Blueprint $table) {

        //     $table->foreign('mahasiswa')->
        //             references('id')->on('mahasiswa');
        //     $table->foreign('kelompok')->
        //             references('id')->on('kelompok');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
