<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Admin::class, function (Faker $faker) {
    static $password;

    return [
        'name' => "ash",
        'email' => "ash@qq.com".rand(0,999),
        'phone' => "1238902831938",
        'password' => $password ?: $password = bcrypt('ash1688'),
        'remember_token' => str_random(10),
    ];
});

// $factory->define(App\bbsTopic::class, function (Faker $faker) {

//     return [
//         'title' => "BioIsland佰澳朗德婴幼儿补锌咀嚼片120粒".rand(),
//         'type' => 1,
//         'img' => "product/89adf4f3f4d3c3f37e025994a40452af.jpeg;",
//         'content'=>"a 哎 欺骗ip的啊墙外去【 哦【打撒【到【是的确骗我【 群殴的道德哦【哦我怕哦亲拍的藕粉是否就哦而发我if我饿我I为我",
//         'rate'=>0,
//         'user_id'=>1,
//         'nsfw'=>0,
//         'category_id'=>1,
//         'tag_id'=>0,
//         'upvotes'=>1,
//         'downvotes' => 1,
//         'comments_number' => 1,
//         'approved_at' => now(),
//         'deleted_at' => now(),
//     ];
// });

// $factory->define(App\Category::class, function (Faker $faker) {

//     return [
//         'name' => "保健品".rand(),
//         'url_name' => "bb".rand(),
//         'description' => "abc".rand(),
//         'topics_count' => rand(0,5),
        
//     ];
// });

