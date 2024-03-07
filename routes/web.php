<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EbookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {
    return view('login');
});

Route::get('registrasi', function () {
    return view('registrasi');
});

Route::get('index', function () {
    return view('index');
});

Route::get('guest', function () {
    return view('guest');
});