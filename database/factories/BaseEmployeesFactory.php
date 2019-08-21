<?php

use Faker\Generator as Faker;

$factory->define(App\BaseEmployees::class, function (Faker $faker) {
    static $cnt = 0;
    $cnt++;
    if($cnt == 1){
        $mpath = '/';
        $level = 0;
    }
    elseif($cnt < 10000){
        $mpath = '/1';
        $level = 1;
    }
    elseif($cnt < 20000){
        $mpath = '/1/5';
        $level = 2;
    }
    elseif($cnt < 30000){
        $mpath = '/1/5/100';
        $level = 3;
    }
    elseif($cnt < 40000){
        $mpath = '/1/5/100/12000';
        $level = 4;
    }
    elseif($cnt <= 50000){
        $mpath = '/1/5/100/12000/35000';
        $level = 5;
    }
    $firstName = $faker->firstName;
    $lastName = $faker->lastName;
    $phone = 380504500000+$cnt;
    $email = lcfirst($lastName.$cnt.'@gmail.com');
    return [
        'full_name' => $firstName." ".$lastName,
        'position_id' => mt_rand(1,50),
        'employment_date' => $faker->dateTimeBetween('-5 years'),
        'phone' => $phone,
        'email' => $email,
        'salary' => mt_rand(50000,500000),
        'mpath' => $mpath,
        'level' => $level,
        'admin_created_id' => 1234567,
        'admin_updated_id' => 1234567
    ];
});
