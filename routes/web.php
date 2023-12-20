<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Projek_uasController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource("/", Projek_uasController::class);
Route::resource("/gol", Projek_uasController::class);