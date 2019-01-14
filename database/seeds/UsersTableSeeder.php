<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'ash',
            'email' => 'ash@qq.com',
            'password' => bcrypt('ash1688'),
        ]);
    }
}
