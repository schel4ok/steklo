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
		$goods = Furnitura::where('category_id', $category->id)->paginate(20);

		// тут я собираю полный путь к текущей категории для ссылки наверх в родительскую категорию
		$tocat = array();
		foreach ($category->getAncestors() as $ancestor) {
			array_push($tocat, $ancestor->sef);
		}
		$tocat = implode('/', $tocat);

		return view('furnitura.cat')->withCategory($category)
							  		->withCategories($categories)
							  		->withPrevious($previous)
							  		->withNext($next)
							  		->withGoods($goods)
							  		->withTocat($tocat);
	}

	public function getItem($item)
	{
		$item = Furnitura::where('sef', $item)->first();
		$category = Category::where('id', $item->category_id)->first();

		// тут я собираю полный путь к текущей категории для ссылки наверх в категорию
		$tocat = array();
		foreach ($category->getAncestors() as $ancestor) {
			array_push($tocat, $ancestor->sef);
		}
		$tocat = implode('/', $tocat);

		// тут я собираю все картинки товара
		$img = array();
		for ($i = 2; $i < 20; $i++) {
			if (file_exists(public_path().'/img/furnitura/'.$item->id.'-big-'.$i.'.jpg')) {
				array_push($img, '/img/furnitura/'.$item->id.'-big-'.$i.'.jpg');
			} 
		}

		$dwg = array();
		for ($j = 2; $j < 20; $j++) {
			if (file_exists(public_path().'/img/furnitura/'.$item->artikul.'-dwg-'.$j.'.jpg')) {
				array_push($dwg, '/img/furnitura/'.$item->artikul.'-dwg-'.$j.'.jpg');
			} 
		}

		$virez = array();
		for ($k = 2; $k < 20; $k++) {
			if (file_exists(public_path().'/img/furnitura/'.$item->artikul.'-virez-'.$k.'.jpg')) {
				array_push($virez, '/img/furnitura/'.$item->artikul.'-virez-'.$k.'.jpg');
			} 
		}


		$previous = Furnitura::where('No', '<', $item->No)->orderBy('No', 'desc')->first();
		$next = Furnitura::where('No', '>', $item->No)->orderBy('No', 'asc')->first();

		return view('furnitura.item')->withCategory($category)
							   		 ->withItem($item)
							   		 ->withImg($img)
							   		 ->withDwg($dwg)			   		 
							   		 ->withVirez($virez)			   		 
							   		 ->withPrevious($previous)
							   		 ->withNext($next)
							   		 ->withTocat($tocat);
	}



}
