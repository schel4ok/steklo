<?php namespace App\Http\Controllers;

Use App\Category;

class BackendController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{	
		// пускает дальше только зарегистрированных юзеров
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$errorstree = Category::countErrors();
        $brokentree = Category::isBroken();

		return view('backend.dashboard')->withErrorstree($errorstree)
										->withBrokentree($brokentree);
	}

}
