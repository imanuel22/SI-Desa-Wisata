<?php

namespace Database\Seeders;

use App\Models\Desawisata;
use App\Models\Berita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Desawisata::create([
            'id_desawisata'=>'1',
            'gambar'=>'test.webp', 
            'alamat'=>'test', 
            'nama'=>'test 1', 
            'deskripsi'=>'test 1', 
            'maps'=>'test 1', 
            'kategori'=>'Maju', 
            'kabupaten'=>'Denpasar',
        ]);
        Desawisata::create([
            'id_desawisata'=>'2',
            'gambar'=>'test.webp', 
            'alamat'=>'test', 
            'nama'=>'test 2', 
            'deskripsi'=>'test 2', 
            'maps'=>'test 2', 
            'kategori'=>'Mandiri', 
            'kabupaten'=>'Klungkung',
        ]);

        Berita::create([
            'id_berita' => '1',
            'judul' => 'berita 1',
            'gambar' => 'berita1.webp',
            'penulis' => 'penulis 1',
            'isi_berita' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A maiores praesentium debitis inventore. Animi eligendi soluta repudiandae eos alias minima?',
            'slug' => 'berita-1',
            'tgl_upload' => '2024-04-03',
            'id_desawisata' => '1',
        ]);

        Berita::create([
            'id_berita' => '2',
            'judul' => 'berita 2',
            'gambar' => 'berita2.webp',
            'penulis' => 'penulis 2',
            'isi_berita' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A maiores praesentium debitis inventore. Animi eligendi soluta repudiandae eos alias minima?',
            'slug' => 'berita-2',
            'tgl_upload' => '2024-04-04',
            'id_desawisata' => '1',
        ]);

        Berita::create([
            'id_berita' => '3',
            'judul' => 'berita 3',
            'gambar' => 'berita3.webp',
            'penulis' => 'penulis 1',
            'isi_berita' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A maiores praesentium debitis inventore. Animi eligendi soluta repudiandae eos alias minima?',
            'slug' => 'berita-3',
            'tgl_upload' => '2024-04-05',
            'id_desawisata' => '2',
        ]);

    }
}
