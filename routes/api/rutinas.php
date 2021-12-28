<?php

use Illuminate\Support\Facades\Route;

Route::post('/rutinas', [\App\Http\Controllers\RutinasController::class, 'renderUpsert'])
    ->name('rutinas.post');

Route::delete('/rutinas/{id}', [\App\Http\Controllers\RutinasController::class, 'renderDelete'])
    ->name('rutinas.delete');
