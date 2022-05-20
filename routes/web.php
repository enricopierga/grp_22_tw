<?php

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

Route::get('/', function () {
    return view('home');
})->name('home'); 

Route::get('/accedi', function () {
    return view('accedi');
})->name('accedi');

Route::get('/privacypolicy', function () {
    return view('privacypolicy');
})->name('privacypolicy');

Route::get('/terminiecondizioni', function () {
    return view('terminiecondizioni');
})->name('terminiecondizioni');
