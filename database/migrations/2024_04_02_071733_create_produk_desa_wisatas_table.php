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
        Schema::create('produk_desa_wisata', function (Blueprint $table) {
            $table->id();
            $table->text('deskripsi');
            $table->string('nama',50);
            $table->text('gambar_sampul');
            $table->string('harga',10);
            $table->foreignId('id_desa_wisata');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk_desa_wisata');
    }
};
