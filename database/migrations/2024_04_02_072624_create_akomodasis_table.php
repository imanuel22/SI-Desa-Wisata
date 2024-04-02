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
        Schema::create('akomodasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama',50);
            $table->text('gambar_sampul');
            $table->string('kategori',50);
            $table->foreignId('id_desa_wisata');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akomodasi');
    }
};
