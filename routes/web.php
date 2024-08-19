<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contact', [HomeController::class, 'contactStore'])->name('contact.store');
Route::post('/subscribe.store', [HomeController::class, 'subscribeStore'])->name('subscribe.store');


Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/ussd', [PageController::class, 'ussd'])->name('ussd');
Route::get('/sms', [PageController::class, 'sms'])->name('sms');
Route::get('/payment', [PageController::class, 'payment'])->name('payment');
Route::get('/icomply', [PageController::class, 'icomply'])->name('icomply');
Route::get('/mobile', [PageController::class, 'mobile'])->name('mobile');
Route::get('/webapp', [PageController::class, 'webapp'])->name('webapp');
Route::get('/product', [PageController::class, 'product'])->name('product');
