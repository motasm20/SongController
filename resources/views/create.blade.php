@extends('layouts.app')

<h1>New Song</h1>

<form action="{{ url('/index') }}" method="GET">
    @csrf
    <label for="song">Song Naam:</label>
    <input type="text" id="song" name="song" required>
    
    <button type="submit">toevoegen</button>
</form>
