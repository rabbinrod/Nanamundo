<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ServiceController;
use App\Http\Livewire\ServiceCita;
use App\Http\Livewire\CreateOrder;
use GuzzleHttp\Middleware;
use App\Http\Livewire\ShoppingCart;

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

Route::get('/', HomeController::class)->name('home');

Route::get('preguntas-frecuentes', function () { return view('welcome.faqs');
})->name('faqs');

Route::get('acercade', function () { return view('welcome.about');
})->name('about');

Route::get('contactanos', function () { return view('welcome.contact-us');
})->name('contact');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('servicios', [ServiceController::class, 'index'])->name('services.index');

Route::get('servicios/{service}', [ServiceController::class, 'show'])->name('services.show');

Route::post('servicios/{service}/enrolled', [ServiceController::class, 'enrolled'])->middleware('auth')->name('service.enrolled');

Route::get('servicios-cita/{service}', ServiceCita::class)->name('services.cita');

Route::get('shopping-cart', ShoppingCart::class)->name('shopping-cart');

Route::get('orders/create/', CreateOrder::class)->middleware('auth')->name('orders.create');

Route::get('orders/{order}/payment', [OrderController::class, 'payment'])->name('orders.payment');