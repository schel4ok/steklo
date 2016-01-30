<?php namespace App\Http\Controllers;
use App\Category;
use App\Page;



class StekloController extends Controller {

	public function __construct()
	{	

	}

	public function getIndex()
	{
		$category = Category::where('sef', '=', 'izdeliya-iz-stekla')->first();
		$categories = $category->descendants()->orderBy('id', 'asc')->paginate(20);

		return view('steklo.index')->withCategory($category)
								   ->withCategories($categories);
	}

	public function getCategory($cat)
	{
		$category = Category::where('sef', '=', $cat)->first();
		$items = Page::where('category_id', $category->id)->paginate(20);

		$previous = $category->getPrevSibling();
		$next = $category->getNextSibling();


		return view('steklo.cat')->withCategory($category)
								 ->withItems($items)
                                 ->withPrevious($previous)
                                 ->withNext($next);

	}

	public function getItem($cat, $item)
	{
		$category = Category::where('sef', '=', $cat)->first();
		$item = Page::where('sef', $item)->first();

        $previous = Page::where('id', '<', $item->id)->orderBy('id', 'desc')->first();
		$next = Page::where('id', '>', $item->id)->orderBy('id', 'asc')->first();

		$category = Category::where('id', $item->category_id)->first();

		return view('steklo.item')->withCategory($category)
								  ->withItem($item)
								  ->withPrevious($previous)
								  ->withNext($next);
	}



}
