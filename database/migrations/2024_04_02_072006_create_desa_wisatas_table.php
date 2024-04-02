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
        Schema::create('desa_wisata', function (Blueprint $table) {
            $table->id();
            $table->string('nama',25);
            $table->text('deskripsi');
            $table->string('gambar_sampul',15);
            $table->text('alamat');
            $table->text('maps');
            $table->foreignId('id_kategori_desa_wisata');
            $table->foreignId('id_kabupaten');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('desa_wisata');
    }
};
