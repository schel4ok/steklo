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
		$item = News::where('sef', '=', $title)->first();
		
/*
->get(); возвращает коллекцию и для доступа к индивидуальным полям объекта надо сделать foreach
@foreach ($news as $item)
{{ $item->id }}
@endforeach

->first(); а вот это возвращает один объект и можно сразу писать так   $item->category_id
*/


        $previous = News::where('id', '<', $item->id)->orderBy('id', 'desc')->first();
		$next = News::where('id', '>', $item->id)->orderBy('id', 'asc')->first();
		$category = Category::where('id', $item->category_id)->first();

		return view('news.item')
					->withCategory($category)
					->withItem($item)
					->withPrevious($previous)
					->withNext($next);
	}

}