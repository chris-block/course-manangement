<?php

$factory->define(App\Lesson::class, function (Faker\Generator $faker) {
    return [
        "course_id" => factory('App\Course')->create(),
        "title" => $faker->name,
        "slug" => $faker->name,
        "short_text" => $faker->name,
        "full_text" => $faker->name,
        "position" => $faker->randomNumber(2),
        "free_lesson" => 0,
        "published" => 0,
        "section_id" => factory('App\Section')->create(),
    ];
});
