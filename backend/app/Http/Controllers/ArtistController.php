<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function index()
    {
        return Artist::all();
    }

    public function show(Artist $artist)
    {
        return $artist;
    }

    public function store(Request $request)
    {
        return Artist::create($request->all());
    }

    public function update(Request $request, Artist $artist)
    {
        $artist->update($request->all());
        return $artist;
    }

    public function destroy(Artist $artist)
    {
        $artist->delete();

        return $artist;
    }
}
