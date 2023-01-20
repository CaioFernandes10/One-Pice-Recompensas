<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

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



Route::get('/',[\App\Http\Controllers\homeController::class, 'index'])->name('paginas.home');


Route::get('/recompensas',[\App\Http\Controllers\recompensaController::class, 'index'])->name('paginas.recompensa');
Route::POST('/',[\App\Http\Controllers\dadosController::class, 'index'])->name('paginas.dados');


