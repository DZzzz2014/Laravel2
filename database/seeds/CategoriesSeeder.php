<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('products')->insert([
			'name'=>'stol',
			'description'=>'stol derevyanny',
			'picture'=>'/media/img/icon.png'
		]);
		
    }
}
