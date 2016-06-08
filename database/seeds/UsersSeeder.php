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
        //
		DB::table('users')->insert([
		'name'=>'DZz',
		'email'=>'DZz@DZz.com',
		'password'=>bcrypt('123456')
		
		]);
    }
}
