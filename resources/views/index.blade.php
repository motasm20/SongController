@extends('layouts.app')

@section('content')
<div style="text-align: center;">
    <h1>Songs</h1>
    <ul>
        @foreach ($songs as $index => $song)
            <li><a href="{{ url('/songs/' . $index) }}">{{ $song }}</a></li>
        @endforeach
    </ul>
</div>
@endsection
