<?php

namespace App\Http\Controllers\Api;

use App\Models\Desawisata;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\DesawisataResource;

class DesawisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        //get all desa$desawisata
        $desawisata = Desawisata::all();

        //return collection of Desawisata as a resource
        return new DesawisataResource($desawisata);
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
    public function show(Desawisata $desawisata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Desawisata $desawisata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Desawisata $desawisata)
    {
        //
    }
}
