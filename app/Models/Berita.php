<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Berita extends Model
{
    use HasFactory,Sluggable;
    protected $table = 'tb_berita';
    public $timestamps = false;
    protected $fillable = [
        'judul',
        'gambar',
        'penulis',
        'isi_berita',
        'slug',
        'tgl_upload',
        'id_desawisata'
    ];

    public function desawisata(){
        return $this->hasMany(Desawisata::class);
    }

    public function getRouteKeyName():mixed
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
