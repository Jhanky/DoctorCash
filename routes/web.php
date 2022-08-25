<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\NivelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
Auth::routes();

Route::get('/', function() { return view('auth.login'); } );

/* Dashboard */
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [NivelController::class, 'mostrarPorcentajes']);

/* Preguntas */
Route::get('/preguntas/responder', [PreguntaController::class, 'mostraPreguntas']);
Route::post('/preguntas', [PreguntaController::class, 'guardarEnBd']);
Route::get('/ok', function () { return view('ok'); }); //Esta pagina de muestra durante 2 segundos y luego se redirecciona "dashboar"

/* Usuario */
Route::get('/perfil', [UserController::class, 'perfil']);
Route::post('/registro', [RegisterController::class, 'registrarUser']);




