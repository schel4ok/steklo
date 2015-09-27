<?php namespace App\Http\Controllers;
use App\Category;
use App\Furnitura;

class FurnituraController extends Controller {

	public function __construct()
	{	

	}

	public function getIndex()
	{
		$category = Category::where('sef', '=', 'furnitura-dlya-stekla')->first();
		$categories = $category->descendants()
							   ->where('parent_id', $category->id)
							   ->orderBy('id', 'asc')
							   ->paginate(12);

		return view('furnitura.index')->withCategory($category)
									  ->withCategories($categories);
	}

	public function getCategory($cat2, $cat3 = null, $cat4 = null)
	{
		if (!is_null($cat4)) {
			$category = Category::where('sef', $cat4)->first();
		} elseif (is_null($cat4) && !is_null($cat3)) {
			$category = Category::where('sef', $cat3)->first();
		} else {
			$category = Category::where('sef', $cat2)->first();
		}
		$categories = Category::where('parent_id', $category->id)->get();
		$previous = $category->getPrevSibling();
		$next = $category->getNextSibling();
		$goods = Furnitura::where('category_id', $category->id)
							->orWhere('cat2_id', $category->id)->paginate(20);

		return view('furnitura.cat')->withCategory($category)
							  		->withCategories($categories)
							  		->withPrevious($previous)
							  		->withNext($next)
							  		->withGoods($goods);
	}

	public function getItem($cat2, $cat3 = null, $cat4 = null, $item)
	{
		if (!is_null($cat4)) {
			$category = Category::where('sef', $cat4)->first();
		} elseif (is_null($cat4) && !is_null($cat3)) {
			$category = Category::where('sef', $cat3)->first();
		} else {
			$category = Category::where('sef', $cat2)->first();
		}

		$item = Furnitura::where('sef', $item)->first();
		$previous = Furnitura::where('id', '<', $item->id)->orderBy('id', 'desc')->first();
		$next = Furnitura::where('id', '>', $item->id)->orderBy('id', 'asc')->first();

		return view('furnitura.item')->withCategory($category)
							   		 ->withItem($item)
							   		 ->withPrevious($previous)
							   		 ->withNext($next);
	}



}
