<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/secret', 'App\Http\Controllers\SecretController@index');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
