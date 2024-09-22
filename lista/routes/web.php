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