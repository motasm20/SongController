<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

Route::get('/songs', [SongController::class, 'index']);
Route::get('/songs/create', [SongController::class, 'create']);
Route::get('/songs/{index}', [SongController::class, 'show']);
Route::get('/songs/{index}/edit', [SongController::class, 'edit']);
