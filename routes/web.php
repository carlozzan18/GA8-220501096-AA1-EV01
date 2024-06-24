<?php

use App\Http\Controllers\GeneroController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\InterpreteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',[IndexController::class,'inicio']);
Route::resource('/generos',GeneroController::class)->names('genero.files');
Route::resource('/interpretes',InterpreteController::class)->names('interprete.files');;
