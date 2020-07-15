<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\LabSample;
use Faker\Generator as Faker;
use App\Pcr;

$factory->define(Pcr::class, function (Faker $faker) use ($factory){

    $THERMOCYCLER = ['1','2'];

    return [
        'thermocycler' => $THERMOCYCLER[rand(0,1)],
        'N1' => $faker -> randomFloat($nbMaxDecimal = NULL,$min = 0, $max = 45),
        'N2' => $faker -> randomFloat($nbMaxDecimal = NULL,$min = 0, $max = 45),
        'RP' => $faker -> randomFloat($nbMaxDecimal = NULL,$min = 0, $max = 45),
        'labSample_id' => $factory -> create(LabSample::class),
    ];

});
