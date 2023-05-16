<?php

use Illuminate\Support\Facades\Route;

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
    return view('dashboard');
});

Route::get('/Candi', function(){
    return view('Candi_Arjuna');
});

Route::get('/Tuk_Bimalukar', function(){
    return view('Tuk_Bimalukar');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

