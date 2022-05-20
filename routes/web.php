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
});

Route::get('/accedi', function () {
    return view('accedi');
});

Route::get('/privacypolicy', function () {
    return view('privacypolicy');
});

Route::get('/terminiecondizioni', function () {
    return view('terminiecondizioni');
});
