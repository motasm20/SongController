<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller {


    public function index() {
        $songs = Song::all();                       //$songs = Song::select('title','id')->get();
    return view('index', [ 'songs' => $songs ]);
    }

    /**
    * Show the form for creating a new resource.
    */

    public function create() {
        return view( 'create' );
    }

    /**
    * Store a newly created resource in storage.
    **/

    public function store( Request $request ) {
        
        $request->validate([
            'title' => 'required|string|max:100',
            'singer' => 'nullable|string',
        ]);
        
        Song::create([
            'title' => $request->input('title'),
            'singer' => $request->input('singer'),
        ]);
        
        return redirect()->route('songs.index');
    }

    /**
    * Display the specified resource.
    */

    public function show( $id ) {
        $song = Song::find($id); // Haal een specifiek nummer op op basis van het id
        return view('show', [ 'song' => $song ] );
    }

    /**
    * Show the form for editing the specified resource.
    */

    public function edit( $id ) {
        $song = Song::find($id);
        return view( 'edit', [ 'song' => $song ] );
    }

    /**
    * Update the specified resource in storage.
    */

    public function update( Request $request, $id ) {
        $request->validate([
            'title' => 'required|string|max:100',
            'singer' => 'nullable|string',
        ]);

        $song = Song::find($id);
        $song->title = $request->input('title');
        $song->singer = $request->input('singer');
        $song->save();
        return redirect()->route('songs.index');
    }

    /**
    * Remove the specified resource from storage.
    */

    public function destroy($id) {
        $song = Song::find($id);
        $song->delete();
        return redirect()->route('songs.index');
    }
}