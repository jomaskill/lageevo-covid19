<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

# Route Users
Route::resource('users', 'UserController');
# Route Samples
Route::resource('sample','SampleController');
