<?php namespace App\Http\Controllers;
use App\Category;
use App\FAQ;



class FAQController extends Controller {

	public function __construct()
	{	

	}

	public function getIndex()
	{
		$category = Category::where('sef', '=', 'faq')->first();
		$categories = $category->descendants()->orderBy('title', 'asc')->paginate(9);

		return view('faq.index')->withCategory($category)
								->withCategories($categories);
	}

	public function getCategory($cat)
	{
		$category = Category::where('sef', '=', $cat)->first();
		$items = FAQ::where('category_id', $category->id)->paginate(20);

		return view('faq.cat')->withCategory($category)
								->withItems($items);
	}

	public function getItem($cat, $item)
	{
		$category = Category::where('sef', '=', $cat)->first();
		$item = FAQ::where('sef', $item)->first();

		return view('faq.item')->withCategory($category)
								->withItem($item);
	}



}
