<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desawisata extends Model
{
    use HasFactory;
    protected $table = 'tb_desawisata';
    public $timestamps = false;

    protected $fillable = [
        'gambar', 
        'alamat', 
        'nama', 
        'deskripsi', 
        'maps', 
        'kategori', 
        'kabupaten'
    ];
    public function berita()
    {
        return $this->belongsTo(Berita::class);
    }
}
