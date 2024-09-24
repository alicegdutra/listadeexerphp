<?php

use App\Http\Controllers\ExerciciosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/exer1', [ExerciciosController::class, 'mostrarExer1']);
Route::post('/respexer1', [ExerciciosController::class, 'calcularExer1']);

Route::get('/exer2', [ExerciciosController::class, 'mostrarExer2']);
Route::post('/respexer2', [ExerciciosController::class, 'calcularExer2']);

Route::get('/exer3', [ExerciciosController::class, 'mostrarExer3']);
Route::post('/respexer3', [ExerciciosController::class, 'calcularExer3']);

Route::get('/exer4', [ExerciciosController::class, 'mostrarExer4']);
Route::post('/respexer4', [ExerciciosController::class, 'calcularExer4']);

Route::get('/exer5', [ExerciciosController::class, 'mostrarExer5']);
Route::post('/respexer5', [ExerciciosController::class, 'calcularExer5']);

Route::get('/exer6', [ExerciciosController::class, 'mostrarExer6']);
Route::post('/respexer6', [ExerciciosController::class, 'calcularExer6']);

Route::get('/exer7', [ExerciciosController::class, 'mostrarExer7']);
Route::post('/respexer7', [ExerciciosController::class, 'calcularExer7']);

Route::get('/exer8', [ExerciciosController::class, 'mostrarExer8']);
Route::post('/respexer8', [ExerciciosController::class, 'calcularExer8']);

Route::get('/exer9', [ExerciciosController::class, 'mostrarExer9']);
Route::post('/respexer9', [ExerciciosController::class, 'calcularExer9']);

Route::get('/exer10', [ExerciciosController::class, 'mostrarExer10']);
Route::post('/respexer10', [ExerciciosController::class, 'calcularExer10']);

Route::get('/exer11', [ExerciciosController::class, 'mostrarExer11']);
Route::post('/respexer11', [ExerciciosController::class, 'calcularExer11']);