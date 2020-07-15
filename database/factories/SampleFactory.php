<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Sample;
use App\User;



$factory->define(Sample::class, function (Faker $faker) use ($factory){
    $beginning_symptom_date = ['ate_3','4_a_6','7_a_9','10+','assintomatico'];
    $patient_status = ['liberado','hospitalizado','obito'];
    $collect_method = ['swab_nasofaringe','swab_orofaringe','lavado_bronmcoalveolar','saliva','aspirado_traqueal','post_mortem'];
    $sex = ['M','F','T'];

    /** @var TYPE_NAME $factory */
    return array(
        'email' => $faker->unique()->safeEmail,
        'sample_date' => $faker->date(),
        'gal_requisition' => $faker->randomDigit(),
        'name' => $faker->name,
        'age' => $faker->randomDigit,
        'sex' => $sex[rand(0,2)],
        'birth_date' => $faker->date(),
        'city' => $faker->city,
        'residential_city' => $faker->city,
        'beginning_symptom_date' => $beginning_symptom_date[rand(0,4)],
        'collection_sample_date' => $faker->date(),
        'patient_status' => $patient_status[rand(0,2)],
        'collect_method' => $collect_method[rand(0,5)],
        'user_id' => $factory -> create(User::class),
    );
});
