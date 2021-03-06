<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
Route::get('/{id?}', function ($id='index') {
    echo $id;
})->where('id', '[A-z_]+');
*/
Route::group(['middleware'=>array('web','auth')], function(){
 Route::get('/home', 'HomeController@index');
 
});



Route::group(['middleware'=>'web'], function(){
	Route::auth();
	Route::controllers([
		'test'=>'TestController'
	]);
	Route::get('/{id?}', array('uses'=> 'BaseController@getIndex'))->where('id', '[0-9 A-z_]+');
});
