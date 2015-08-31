<?php namespace App\Http\Controllers;
use App\Category;

class PageController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
	}


	public function o_kompanii()
	{
		$category = Category::where('sef', '=', 'o-kompanii')->first();
		return view('pages.o-kompanii')->withCategory($category);
	}

}
