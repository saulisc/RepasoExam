<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

Route::get('/',[ControladorVistas::class,('showHome')]) -> name('home');
Route::get('formulario',[ControladorVistas::class,('showRegistro')]) -> name('formulario');

Route::post('procesarFormulario',[ControladorVistas::class,('procesarFormulario')]) -> name('procesarFormulario');