<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Craft;
use Faker\Generator as Faker;
use App\User;
use App\Enchant;

$factory->define(Craft::class, function (Faker $faker) {
    $randomTimestamp = mt_rand(strtotime('-10 days'), time());
    $randomDate = new DateTime();
    $randomDate->setTimestamp($randomTimestamp);

    return [
        'user_id' => User::all()->random()->id,
        'enchant_id' => Enchant::all()->random()->id,
        'created_at' => $randomDate,
        'updated_at' => $randomDate
    ];
});

// States
$factory->state(Craft::class, 'matsRandom', [
    'mats' => function() {
        $array = [null, 'own', 'my'];
        $key = array_rand($array);
        return $array[$key];
    }
]);

$factory->state(Craft::class, 'priceRandom', [
    'price' => function() {
        $array = [null, random_int(2, 10)];
        $key = array_rand($array);
        return $array[$key];
    }
]);

$factory->state(Craft::class, 'classRandom', [
    'class' => function() {
        $array = [null, 'druid', 'hunter', 'mage', 'paladin', 'priest', 'rogue', 'shaman', 'warlock', 'warrior'];
        $key = array_rand($array);
        return $array[$key];
    }
]);

$factory->state(Craft::class, 'buyer', function ($faker) {
    return [
        'buyer' => (random_int(0, 1)) ? $faker->firstName : null,
    ];
});
