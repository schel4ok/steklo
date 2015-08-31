<?php namespace App\Http\Controllers;
use App\Category;
use App\News;

class NewsController extends Controller {


	public function getIndex()
	{
		$category = Category::where('type', '=', 'news')->first();
		$news = News::orderBy('created_at', 'desc')->paginate(10); // все новости по 10 штук на страницу

		return view('news.index')->withNews($news)->withCategory($category);
	}


	public function getItem($title)
	{
		$news = News::where('sef', '=', $title)->get();
		

			foreach ($news as $item) // access user properties here
			{	
        		$previous = News::where('id', '<', $item->id)->orderBy('id', 'desc')->first();
				$next = News::where('id', '>', $item->id)->orderBy('id', 'asc')->first();
				$category = Category::where('id', $item->category_id)->first();
			}

		return view('news.item')
					->withCategory($category)
					->withNews($news)
					->withPrevious($previous)
					->withNext($next);
	}

}