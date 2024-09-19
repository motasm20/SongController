@extends('layouts.app')

@section('content')
<div style="text-align: center;">
    <h1>{{ $song->title }}</h1>
    <h2>Zanger: {{ $song->singer }}</h2>

    <div style="margin-top: 20px;">
        <a href="{{ route('songs.edit', $song->id) }}" style="padding: 10px 20px; background-color: #007bff; color: white; border-radius: 5px; text-decoration: none;">Bewerken</a>

        <form action="{{ route('songs.destroy', $song->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" style="color: red; border: none; background: none; cursor: pointer;">Verwijderen</button>
        </form>
        
        <br><br>
        <a href="{{ route('songs.index') }}" style="padding: 10px 20px; background-color: #6c757d; color: white; border-radius: 5px; text-decoration: none;">Terug naar Lijst</a>
    </div>
</div>
@endsection
