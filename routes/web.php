<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [TareaController::class, 'index']);
Route::resource('tareas', TareaController::class);
