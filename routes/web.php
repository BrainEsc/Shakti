<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//login
Route::get('/login', function () {
    return view('login'); 
})->name('login');

//registro
Route::get('/registro', function () {
    return view('registro'); 
})->name('registro');

