<?php

use Illuminate\Support\Facades\Route;


Route::get('/clientes/turnos/:id', [\App\Http\Controllers\TurnosController::class, 'mostrar'])
    ->name('turnos.mostrar');

Route::get('/clientes/turnosdia', [\App\Http\Controllers\TurnosController::class, 'turnosDia'])
    ->name('turnosDia.misTurnos');

Route::get('/clientes/turnosprueba', [\App\Http\Controllers\TurnosController::class, 'misTurnos'])
    ->name('turnos.misTurnos');

Route::get('/clientes/sus/{id}', [\App\Http\Controllers\SuscripcionController::class, 'mostrarSuscripcion'])
    ->name('suscripcion.mostrarSuscripcion');

Route::post('/clientes/ed', [\App\Http\Controllers\SuscripcionController::class, 'agregarSuscripcion'])
    ->name('suscripcion.agregarSuscripcion');

Route::get('/clientes/ed', [\App\Http\Controllers\SuscripcionController::class, 'editarSuscripcion'])
    ->name('suscripcion.editarSuscripcion');

Route::get('/clientes/rutinas', [\App\Http\Controllers\RutinasController::class, 'mostrar'])
    ->name('rutinas.mostrar');

Route::post('/clientes/rutinas', [\App\Http\Controllers\RutinasController::class, 'insertar'])
    ->name('rutinas.insertar');

Route::put('/clientes/rutinas/mod', [\App\Http\Controllers\RutinasController::class, 'modificar'])
    ->name('rutinas.modificar');

Route::delete('/clientes/rutinas', [\App\Http\Controllers\RutinasController::class, 'borrar'])
    ->name('rutinas.borrar');

Route::get('/clientes/marcas', [\App\Http\Controllers\RutinasController::class, 'marcas'])
    ->name('rutinas.marcas');

Route::post('/clientes/marcas', [\App\Http\Controllers\RutinasController::class, 'insertarMarca'])
    ->name('rutinas.insertarMarca');

Route::post('/clientes/susc', [\App\Http\Controllers\SuscripcionController::class, 'modificarSuscripcion'])
    ->name('suscripcion.modificarSuscripcion');

Route::post('/clientes/turnosprueba', [\App\Http\Controllers\TurnosController::class, 'agregarTurno'])
    ->name('turnos.agregarTurno');

Route::get('/clientes/admin', [\App\Http\Controllers\ClientesController::class, 'administrar'])
    ->name('clientes.administrar');

Route::get('/clientes/desafios', [\App\Http\Controllers\RutinasController::class, 'desafios'])
    ->name('rutinas.desafios');

Route::post('/clientes/desafios', [\App\Http\Controllers\RutinasController::class, 'insertarDesafio'])
    ->name('rutinas.insertarDesafio');

Route::delete('/clientes/desafios', [\App\Http\Controllers\RutinasController::class, 'eliminarDesafio'])
    ->name('rutinas.eliminarDesafio');

Route::resource('clientes', \App\Http\Controllers\ClientesController::class);

Route::post('/clientes', [\App\Http\Controllers\ClientesController::class, 'inicio'])->name('clientes.inicio');

Route::post('/clientes/nuevo', [\App\Http\Controllers\ClientesController::class, 'store'])->name('clientes.store');
