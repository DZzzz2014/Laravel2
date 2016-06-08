<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Product;

class TestController extends Controller
{
    //
	 public function getIndex(){
		$cat=DB::table('products');
		$test1 = $cat->get();
				
		$test2 = $cat->where('showhide','show')->get();
		dd($test1, $test2);
		
	 }
	 
	 public function getSave(){
		$one=new Product;
		$one->name='имя';
		$one->picture='';
		$one->save();
	 }
	 
	  public function getCreate($id=null){
		Product::insert([
		'name'=>$id,
		'picture'=>'...'
		]);
	}
	
	public function getAll(){
		$all=Product::all();
		dd($all);
	}
}
