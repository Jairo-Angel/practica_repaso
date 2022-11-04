<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ControladorVistas;
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

Route::get('/Principal', [ControladorVistas::class,'showPrincipal'])->name('apodoPrincipal');

Route::get('/Registro', [ControladorVistas::class,'showRegistro'])->name('apodoRegistro');

Route::post('GuardarLibro', [ControladorVistas::class,'procesarLibro'])->name('guarda');

Route::get('/Prueba',function() {
    view('prueba');
});