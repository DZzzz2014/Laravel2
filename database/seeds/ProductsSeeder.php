<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
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
			['cat_id'=>'1',
			'name'=>'stul',
			'description'=>'stul derevyanny',
			'price'=>'123',
			'picture'=>'/media/img/icon.png'],
			['cat_id'=>'1',
			'name'=>'stul',
			'description'=>'stul derevyanny',
			'price'=>'123',
			'picture'=>'/media/img/icon.png']
		]);
    }
}
