<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller {

	public function __construct(Request $request)
	{	
		$this->uri = $request->path();
	}

}


