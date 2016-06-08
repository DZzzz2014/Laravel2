<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*правила создания миграции*/
		
		Schema::create('products', function(Blueprint $t){
		$t->increments('id')/*автоинкремент поля ID*/;
		$t->integer('cat_id');
		$t->string('name');
		$t->text('description');
		$t->string('price');
		$t->string('picture');
		$t->enum('showhide', array('show','hide'))->default('show');
		$t->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*правила уничтожения таблицы*/
		
		Schema::drop('products');
    }
}
