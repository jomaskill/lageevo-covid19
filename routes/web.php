<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('sampleCreate');
});


Route::get('screenings', 'ScreeningController@index')->name('screening');
Route::get('screenings/{city}', 'ScreeningController@show')->name('screeningCity');
Route::post('screenings', 'ScreeningController@createLabSample')->name('screeningCreateLabSample');

Route::resource('users', 'UserController');

Route::resource('pcrs', 'PcrController');

Route::resource('samples','SampleController');

Route::resource('labSamples','LabSampleController');

