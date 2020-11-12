<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'App\Http\Controllers\SecretController@index');

Route::get('/users', function () {
  return User::all();
});
