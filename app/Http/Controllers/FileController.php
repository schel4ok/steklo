<?php namespace App\Http\Controllers;
use Storage;
use File;
use App\Category;
use App\Link;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;


class FileController extends Controller {

	public function __construct()
	{	

	}

	public function getIndex()
	{
		$category = Category::where('type', '=', 'link')->first();
		$categories = $category->descendants()->orderBy('title', 'asc')->paginate(9);

		return view('links.index')->withCategory($category)
								  ->withCategories($categories);
	}


	public function getCategory($cat)
	{
		$category = Category::where('sef', '=', $cat)->first();
		$items = Link::where('category_id', $category->id)->paginate(20);

		return view('links.cat')->withCategory($category)
								->withItems($items);
	}

	public function getItem($cat, $item)
	{
		$category = Category::where('sef', '=', $cat)->first();
		$item = Link::where('url', '=', 'links/'.$cat.'/'.$item)->first();

		$previous = Link::where('id', '<', $item->id)->orderBy('id', 'desc')->first();
		$next = Link::where('id', '>', $item->id)->orderBy('id', 'asc')->first();
	//	$category = Category::where('id', $item->category_id)->first();

		return view('links.item')->withCategory($category)
								 ->withItem($item)
								 ->withPrevious($previous)
								 ->withNext($next);

	}


	public function pesok()
	{
		$category = Category::where('sef', '=', 'catalogs')->first();
		$path = explode("?", substr($_SERVER['REQUEST_URI'], 1));
		$link = Link::where('url', $path[0] )->first();  
		// удалить первый слеш из URI и вернуть строку до первого вхождения знака ? 
		// иначе на второй и следующей странице пагинации переменная $link будет содержать всякий хлам  
		// типа ?page=4 и естесственно в БД такой ссылки не найдется

		$img = File::allFiles(public_path(). '/img/risunki/pesok');
		// pagination нашел тута  http://psampaz.github.io/custom-data-pagination-with-laravel-5/
        //Get current page form url e.g. &page=6
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        if (is_null($currentPage)) {$currentPage = 1;}
        //Create a new Laravel collection from the array data
        $collection = new Collection($img);
        //Define how many items we want to be visible in each page
        $perPage = 20;
        //Slice the collection to get the items to display in current page
        $currentPageImgResults = $collection->slice( ($currentPage - 1) * $perPage, $perPage)->all();
        //Create our paginator and pass it to the view
        $paginatedImgResults = new LengthAwarePaginator($currentPageImgResults, count($collection), $perPage);
        $paginatedImgResults->setPath('peskostrujnie-risunki');

		return view('links.pesok')->withCategory($category)
									->withLink($link)
									->withImg($paginatedImgResults)
									->withPath($path);
	}
}