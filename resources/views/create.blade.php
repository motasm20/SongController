@extends('layouts.app')

<h1>New Song</h1>

<form action="{{ route('songs.store') }}" method="POST">
    @csrf
    <input style="color: #000000;" type="text" name="title" placeholder="Liedje" required>
    <input style="color: #000000;" type="text" name="singer" placeholder="Zanger" required>
    <button type="submit">Toevoegen</button>
</form>
