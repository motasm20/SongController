@extends('layouts.app')

<h1>Edit Song</h1>

<form action="{{ url('/songs') }}" method="GET">
    @csrf
    
    <label for="song">Song Naam:</label>
    <input style="color: #000000;" type="text"  name="song" value="{{ $song }}" required>
    
    <button type="submit">opslaan</button>
</form>

