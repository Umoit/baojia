<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\Admin::class,12)->create();
        //factory(App\Topic::class,200)->create();
        //factory(App\Category::class,20)->create();
        factory(App\User::class,20)->create();
    }
}
