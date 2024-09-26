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
        
<<<<<<< HEAD
        $validatedData = $request->validate([
            'title' => 'required|string|max:100',
            'singer' => 'nullable|string',
        ]);
        
        Song::create($validatedData);
        
=======
        Song::create([
            'title' => $request->input('title'),
            'singer' => $request->input('singer'),
        ]);
>>>>>>> 9b4f50ddc632997303448288f9b737cbc01901ac
        return redirect()->route('songs.index');
    }

    /**
    * Display the specified resource.
    */

    public function show( $id ) {
<<<<<<< HEAD
        $song = Song::find($id); // Haal een specifiek nummer van het id
=======
        $song = Song::find($id); // Haal een specifiek nummer op op basis van het id
>>>>>>> 9b4f50ddc632997303448288f9b737cbc01901ac
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
<<<<<<< HEAD
        $validatedData = $request->validate([
            'title' => 'required|string|max:100',
            'singer' => 'string|max:255',
        ]);

        Song::findOrFail($id)->update($validatedData);
        // $song = Song::find($id);
        // $song->title = $request->input('title');
        // $song->singer = $request->input('singer');
        // $song->save();
=======
        $song = Song::find($id);
        $song->title = $request->input('title');
        $song->singer = $request->input('singer');
        $song->save();
>>>>>>> 9b4f50ddc632997303448288f9b737cbc01901ac
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