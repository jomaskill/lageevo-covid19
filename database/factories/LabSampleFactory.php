<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\LabSample;
use Faker\Generator as Faker;

$factory->define(LabSample::class, function (Faker $faker) {

    $status = ['extraction', 'pcr', 'analises', 'report'];

    return [
        
        'name' => $faker -> name,
        'birth_date' => $faker -> date(),
        'city' => $faker -> city,
        'observations' => $faker -> randomDigit,
        'status' => $status[rand(0,3)]

    ];
});
