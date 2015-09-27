<?php namespace App\Http\Controllers;
use App\Category;
use App\Uslugi;

class UslugiController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
	}

	public function getIndex()
	{
		$category = Category::where('sef', '=', 'uslugi')->first();
		$items = Uslugi::where('category_id', '=', $category->id)->get();

		return view('uslugi.index')->withCategory($category)->withItems($items);
	}

	public function getItem($item)
	{
		$item = Uslugi::where('sef', '=', $item)->first();

        $previous = Uslugi::where('id', '<', $item->id)->orderBy('id', 'desc')->first();
		$next = Uslugi::where('id', '>', $item->id)->orderBy('id', 'asc')->first();
		$category = Category::where('id', $item->category_id)->first();

		return view('uslugi.item')->withCategory($category)
								  ->withItem($item)
								  ->withPrevious($previous)
								  ->withNext($next);
	}

}