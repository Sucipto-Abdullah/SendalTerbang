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
        Schema::create('rate_proyek', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer(('idProyek'));
            $table->date('tanggal');

            $table->foreign('idProyek')->references('id')->on('proyek')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rate_proyek');
    }
};
