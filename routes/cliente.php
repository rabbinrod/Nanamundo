<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cliente\ServiceController;

Route::redirect('', 'cliente/services');

/*Route::get('services', ClienteService::class)->middleware('can:Leer Servicios')->name('services.index');*/
Route::resource('services', ServiceController::class)->names('services');