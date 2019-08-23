<?php

use Faker\Generator as Faker;

$factory->define(App\Models\BasePositions::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->jobTitle,
        'created_at' => 1565201291,
        'updated_at' => 1565201291,
        'admin_created_id' => 1234567,
        'admin_updated_id' => 1234567
    ];
});
