<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\MerchantController;

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

Route::get('dashboard', function () {
    return view('merchant.index');
});

Route::get('menu', function () {
    return view('merchant.menu');
});

// Halaman Registrasi
Route::get('/register', function () {
    return view('auth.register'); // Halaman registrasi user
})->name('register');

// Halaman Login
Route::get('/', function () {
    return view('auth.login'); // Halaman login user
})->name('login');
