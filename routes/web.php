<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('sampleCreate');
});

Route::get('extractions', 'ExtractionController@index')->name('extraction');
Route::post('extractions', 'ExtractionController@pcr')->name('extractionUpdatePcr');


Route::resource('users', 'UserController');

Route::resource('pcrs', 'PcrController');

Route::resource('samples','SampleController');

Route::resource('labSamples','LabSampleController');

