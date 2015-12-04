<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
           'username' => 'qqq',
           'email' => 'awsomeqq09@gmail.com',
           'password' => bcrypt('123456'),
           'birthdate' => '21/07/1992',
        ]);

    }
}
