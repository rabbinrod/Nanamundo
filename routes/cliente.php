<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cliente\ServiceController;
use App\Http\Controllers\Cliente\HijoController;
use App\Http\Controllers\Cliente\DireccionController;

Route::redirect('', 'cliente/services');

/*Route::get('services', ClienteService::class)->middleware('can:Leer Servicios')->name('services.index');*/
Route::resource('services', ServiceController::class)->names('services');
Route::resource('hijos', HijoController::class)->names('hijos');
Route::resource('direcciones', DireccionController::class)->names('direcciones');