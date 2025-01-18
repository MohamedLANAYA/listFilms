<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;

Route::get('/films', [FilmController::class, 'showPhotoFilms']);
Route::get('/detail/{pic}', [FilmController::class, 'showDetails']);
