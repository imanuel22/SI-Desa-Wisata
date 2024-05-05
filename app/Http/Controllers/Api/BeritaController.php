<?php

namespace App\Http\Controllers\Api;

use App\Models\Berita;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\BeritaResource;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get all berita
        $berita = Berita::all();

        //return collection of berita as a resource
        return new BeritaResource($berita);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        //
    }
}
