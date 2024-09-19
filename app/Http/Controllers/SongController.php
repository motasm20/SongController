<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongController extends Controller {

    public $songs = [ 'Living on a prayer', 'Nothing else matters', 'Thunderstruck', 'Back in black', 'Ace of spades' ];

    public function index() {
        return view( 'index', [ 'songs' => $this->songs ] );
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

    public function store( Request $request, $index ) {
        //
    }

    /**
    * Display the specified resource.
    */

    public function show( $index ) {
        return view( 'show', [ 'song' => $this->songs[ $index ] ] );
    }

    /**
    * Show the form for editing the specified resource.
    */

    public function edit( $index ) {
        return view( 'edit', [ 'song' => $this->songs[ $index ], 'index' => $index ] );
    }

    /**
    * Update the specified resource in storage.
    */

    public function update( Request $request, $index ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    */

    public function destroy() {
        //
    }
}