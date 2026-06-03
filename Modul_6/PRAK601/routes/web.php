<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

Route::get('/', [WebController::class, 'index']);
Route::get('/profil', [WebController::class, 'profil']);
Route::get('/detail/{id}', [WebController::class, 'detail']);