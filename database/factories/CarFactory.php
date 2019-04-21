<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {

    $faker->addProvider(new \Faker\Provider\Fakecar($faker));
    $v = $faker->vehicleArray();

    return [
        'make' => $v['brand'],
        'model' => $v['model'],
        'year' => $faker->biasedNumberBetween(2000,2019, 'sqrt'),
    ];
});
