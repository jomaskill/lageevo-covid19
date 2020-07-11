<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Pcr;

$factory->define(Pcr::class, function (Faker $faker) {

    $THERMOCYCLER = ['1','2'];

    return [
        'thermocycler' => $THERMOCYCLER[rand(0,1)],
        'N1' => $faker -> randomFloat($nbMaxDecimal = NULL,$min = 0, $max = 100),
        'N2' => $faker -> randomFloat($nbMaxDecimal = NULL,$min = 0, $max = 100),
        'RP' => $faker -> randomFloat($nbMaxDecimal = NULL,$min = 0, $max = 100),
    ];

});
