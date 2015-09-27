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
		$categories = $category->descendants()->orderBy('title', 'asc')->paginate(12);

		return view('faq.index')->withCategory($category)
								->withCategories($categories);
	}

	public function getCategory($cat)
	{
		$category = Category::where('sef', '=', $cat)->first();
		$items = FAQ::where('category_id', $category->id)->paginate(20);

		$previous = $category->getPrevSibling();
		$next = $category->getNextSibling();

		return view('faq.cat')->withCategory($category)
							  ->withItems($items)
							  ->withPrevious($previous)
							  ->withNext($next);
	}

	public function getItem($cat, $item)
	{
		$category = Category::where('sef', '=', $cat)->first();
		$item = FAQ::where('sef', $item)->first();

		$previous = FAQ::where('id', '<', $item->id)->orderBy('id', 'desc')->first();
		$next = FAQ::where('id', '>', $item->id)->orderBy('id', 'asc')->first();

		return view('faq.item')->withCategory($category)
							   ->withItem($item)
							   ->withPrevious($previous)
							   ->withNext($next);
	}



}
