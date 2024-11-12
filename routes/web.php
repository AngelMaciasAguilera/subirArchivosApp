<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubirContolador;


Route::get('/', function () {
    return view('welcome');
});



Route::get('/',[SubirContolador::class, 'index']) -> name('subir.index'); //Este es el nombre de la ruta, que luego llamare
Route::post('subir',[SubirContolador::class, 'subir'])->name('subir.subir');