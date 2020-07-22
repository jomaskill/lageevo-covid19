<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('sampleCreate');
});


Route::resource('users', 'UserController');

Route::resource('pcrs', 'PcrController');

Route::resource('samples','SampleController');

Route::resource('labSamples','LabSampleController');

