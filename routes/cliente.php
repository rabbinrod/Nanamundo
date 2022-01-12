<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ClienteService;


Route::redirect('', 'cliente/services');
Route::get('services', ClienteService::class)->middleware('can:Leer Servicios')->name('services.index');