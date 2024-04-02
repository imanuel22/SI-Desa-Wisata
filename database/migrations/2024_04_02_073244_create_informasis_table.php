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
        Schema::create('informasi', function (Blueprint $table) {
            $table->id();
            $table->text('gambar');
            $table->text('alamat');
            $table->string('nama',25);
            $table->string('no_telp',15);
            $table->string('no_wa',15);
            $table->string('website',100);
            $table->string('instagram',100);
            $table->string('facebook',100);
            $table->string('email',100);
            $table->foreignId('id_desa_wisata');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi');
    }
};
