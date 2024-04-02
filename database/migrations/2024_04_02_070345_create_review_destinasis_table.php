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
        Schema::create('review_destinasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_destinasi_wisata');
            $table->foreignId('id_wisatawan');
            $table->integer('rating');
            $table->text('review');
            // $table->dateTime('tgl_upload');//sudah ada di created_at
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('review_destinasi');
    }
};
