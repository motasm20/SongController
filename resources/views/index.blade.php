@extends('layouts.app')

@section('content')
<div style="text-align: center;">
    <h1>Songs</h1>
    <ul>
        @foreach ($songs as $id => $song)
            <li><a href="{{ url('/songs/' . $song->id) }}">{{ $song->title }}</a></li>
        @endforeach
    </ul>
</div>
@endsection
