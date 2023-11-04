<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirectorioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/directorio', [DirectorioController::class, 'mostrarDirectorio'])->name('directorio');

Route::get('directorio/crear-entrada', [DirectorioController::class, 'crearEntrada'])->name('crearEntrada');

Route::get('directorio/buscar-entrada', [DirectorioController::class, 'buscarEntrada'])->name('buscarEntrada');

