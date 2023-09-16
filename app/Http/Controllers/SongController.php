<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return Song::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        return Song::with('album', 'artist')->findOrFail($id);
    }

    public function search(Request $request) {
        $searchTerm = $request->query('q');
        if (!$searchTerm) {
            return response()->json(['message' => 'Missing search term ?q='], 400);
        }
        // search:
        $songs = Song::whereHas('artist', function ($artist) use ($searchTerm) {
            $artist->where('name', 'LIKE', '%' . $searchTerm . '%');
        })->orWhereHas('album', function ($album) use ($searchTerm) {
            $album->where('title', 'LIKE', '%' . $searchTerm . '%');
        })->orWhere('title', 'LIKE', '%' . $searchTerm . '%')
            ->with('album', 'artist')
            ->get();

        if (!$songs->count()) {
            return response()->json(['message' => 'Nothing found'], 404);
        }
        return $songs;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
}
