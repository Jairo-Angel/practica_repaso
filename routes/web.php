<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ControladorVistas;
use App\Http\Controllers\Controladorbd;
use App\Http\Controllers\ControladorAutores;
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

Route::get('/', [ControladorVistas::class,'showPrincipal'])->name('apodoPrincipal');

Route::get('/Registro', [ControladorVistas::class,'showRegistro'])->name('apodoRegistro');

Route::get('/Registro_autores', [ControladorVistas::class,'showRegistro_autores'])->name('apodoRegistro_autores');

Route::get('/Libros', [ControladorVistas::class,'showLibros'])->name('apodoLibro');

Route::get('/Autores', [ControladorVistas::class,'showAutores'])->name('apodoAutor');

//Route::post('GuardarLibro', [ControladorVistas::class,'procesarLibro'])->name('guarda');

//Route::post('GuardarAutor', [ControladorVistas::class,'procesarAutor'])->name('guarda_autor');

//Create

Route::get('libro/create', [Controladorbd::class,'create'])->name('libro.create');

//Store

Route::post('libro', [Controladorbd::class,'store'])->name('libro.store');

Route::get('libro', [Controladorbd::class,'index'])->name('libro.index');
//Edit
Route::get('libro/{id}/edit', [Controladorbd::class,'edit'])->name('libro.edit');
//Update
Route::put('libro/{id}', [Controladorbd::class,'update'])->name('libro.update');
//show
Route::get('libro/{id}/show', [Controladorbd::class,'show'])->name('libro.show');
//Destroy
Route::delete('libro/{id}', [Controladorbd::class,'destroy'])->name('libro.destroy');

Route::get('libro/create', [Controladorbd::class,'create'])->name('libro.create');

//Store

Route::post('autor', [ControladorAutores::class,'store'])->name('autor.store');

Route::get('autor', [ControladorAutores::class,'index'])->name('autor.index');
//Edit
Route::get('autor/{id}/edit', [ControladorAutores::class,'edit'])->name('autor.edit');
//Update
Route::put('autor/{id}', [ControladorAutores::class,'update'])->name('autor.update');
//show
Route::get('autor/{id}/show', [ControladorAutores::class,'show'])->name('autor.show');
//Destroy
Route::delete('autor/{id}', [ControladorAutores::class,'destroy'])->name('autor.destroy');

Route::get('autor/create', [ControladorAutores::class,'create'])->name('autor.create');

