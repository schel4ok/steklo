<?php namespace App\Http\Controllers;
use Storage;
use File;
use App\Category;
use App\Page;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class ImageController extends Controller {

    public function __construct()
    {   

    }

    public function getIndex()
    {
        $category = Category::where('type', '=', 'foto')->first();
        $categories = Page::where('category_id', '=', $category->id)->orderBy('title', 'asc')->get();

        return view('foto.index')->withCategory($category)
                                 ->withCategories($categories);
    }

    public function getItem($item)
    {
        $category = Category::where('type', '=', 'foto')->first();
        $item = Page::where('sef', '=', $item)->first();

        $path = explode("?", substr($_SERVER['REQUEST_URI'], 1));
        $link = Page::where('sef', $path[0] )->first();  
        $img = File::allFiles(public_path(). '/img/foto/'.$item->sef);
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        if (is_null($currentPage)) {$currentPage = 1;}
        $collection = new Collection($img);
        $perPage = 40;
        $currentPageImgResults = $collection->slice( ($currentPage - 1) * $perPage, $perPage)->all();
        $paginatedImgResults = new LengthAwarePaginator($currentPageImgResults, count($collection), $perPage);
        $paginatedImgResults->setPath($item->sef);

        return view('foto.item')->withCategory($category)
                                ->withItem($item)
                                ->withImg($paginatedImgResults)
                                ->withPath($path);

    }

}