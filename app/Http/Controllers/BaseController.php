<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BaseController extends Controller
{
public function getIndex($id='index'){
return view('Welcome', array('id'=>$id))->with('id', $id);

}
}

