
@extends('layouts.app')

@section('content')
<h1>Edit Song</h1>

<form action="{{ route('songs.update', $song->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input style="color: #000000;" type="text" name="title" value="{{ $song->title }}" required>
    <input style="color: #000000;" type="text" name="singer" value="{{ $song->singer }}">
    <button type="submit">Bijwerken</button>
</form>
@endsection
