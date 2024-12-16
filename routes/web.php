<?php

use App\Http\Controllers\IncidenciaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/incidencias', [IncidenciaController::class, 'index']);
//Aquí seguimos
