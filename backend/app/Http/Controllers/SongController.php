<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index()
    {
        return Song::all();
    }

    public function show(Song $song)
    {
        return $song;
    }

    public function store(Request $request)
    {
        return Song::create($request->all());
    }

    public function update(Request $request, Song $song)
    {
        $song->update($request->all());
        return $song;
    }

    public function destroy(Song $song)
    {
        $song->delete();

        return $song;
    }
}
