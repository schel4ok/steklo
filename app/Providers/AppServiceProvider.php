<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use App\Link;
use App\News;


class AppServiceProvider extends ServiceProvider {

    public function boot()
    {
        view()->composer('modules.topmenu', function($view)
        {
            $view->withTree(Category::descendantsOf(1)->toTree());
        });


        view()->composer('modules.mainmenu', function($view)
        {
            $view->withTree(Category::descendantsOf(1)->toTree());
        });

        view()->composer('modules.breadcrumbs', function($view)
        {
            $urlarr = explode('?', $_SERVER['REQUEST_URI']); // получаем массив сегментов URI без ?
            $urlget = array_shift($urlarr); // получаем первый элемент до ?
            $urllist = explode('/', $urlget); // получаем массив сегментов URI без слеша
            $lastbread = array_pop($urllist);

            // получаем последний элемент массива (после последнего слеша)
            $view->withLastbread($lastbread);
        });

        view()->composer('modules.popular', function($view)
        {
            $view->withPopular(Link::orderBy('hits', 'desc')->take(5)->get());
        });

        view()->composer('modules.lastnews', function($view)
        {
            $view->withLastnews(News::orderBy('created_at', 'desc')->take(5)->get());
        });
    }


    public function register()
    {
        $this->app->bind(
            'Illuminate\Contracts\Auth\Registrar',
            'App\Services\Registrar'
        );
    }

}