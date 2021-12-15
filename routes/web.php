<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Auth\EmailVerificationRequest;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user.login');
});

Route::get('/clientes/turnos/:id', [\App\Http\Controllers\TurnosController::class, 'mostrar'])
->name('turnos.mostrar');

Route::get('/clientes/turnosprueba', [\App\Http\Controllers\TurnosController::class, 'misTurnos'])
->name('turnos.misTurnos');

Route::resource('clientes', \App\Http\Controllers\ClientesController::class);

Route::post('/clientes', [\App\Http\Controllers\ClientesController::class, 'inicio'])->name('clientes.inicio');

Route::post('/clientes/nuevo', [\App\Http\Controllers\ClientesController::class, 'store'])->name('clientes.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

