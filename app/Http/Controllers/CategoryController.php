<?php namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kalnoy\Nestedset\Collection;

class CategoryController extends Controller {

	public function all()  
	{
        // вывод полного списка категорий в виде объекта с учетом вложенности
        //$result = Category::get()->toTree(); // 
        //$result = Category::get([ 'id', '_lft', 'parent_id', 'slug', 'title'])->toTree(); // 
        //$result = Category::ancestorsOf(13); // список родителей можно использовать для получения breadcrumbs
        $result = Category::descendantsOf(1)->toTree(); // список потомков можно использовать для получения подменю
        //dd(Category::countErrors());
        //dd($bool = Category::isBroken());
		return view('categories.index')->withTree($result);
	}

	public function sitemap()  
	{
		$category = Category::where('sef', '=', 'sitemap')->first();
        $tree = Category::descendantsOf(1)->toTree();
		return view('sitemap')->withTree($tree)
							  ->withCategory($category);
	}

}


