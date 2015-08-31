<?php namespace App\Http\Controllers;
use App\Category;


class HomeController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{	
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$category = Category::where('sef', '=', 'bez-kategorii')->first();
		return view('home')->withCategory($category);
	}

}
