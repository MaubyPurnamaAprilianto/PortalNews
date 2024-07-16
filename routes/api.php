<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
return view('welcome');
})->name('home');

Route::get('/pendataan', function () {
return view('pendataan');
})->name('pendataan');