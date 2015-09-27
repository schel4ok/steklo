<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use App\Link;
use App\News;


class AppServiceProvider extends ServiceProvider {

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
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
            $urlget = array_shift ($urlarr); // получаем первый элемент до ?
            $urllist = explode('/', $urlget); // получаем массив сегментов URI без слеша
            $lastbread = array_pop($urllist);
            // получаем последний элемент массива (после последнего слеша)
            // при этом массив $url_list уменьшается
            $prevbread = array_pop($urllist); // получаем предпоследний элемент массива
            // теперь $urllist уже не содержить sef двух последних элементов

            // это полный путь до категории $prevbread
            $catsef = implode('/', $urllist).'/'.$prevbread;

            $view->withLastbread(Category::where('sef', '=', $lastbread)->first());
            $view->withPrevbread(Category::where('sef', '=', $prevbread)->first());
            $view->withCatsef($catsef);
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


    /**
     * Register any application services.
     *
     * This service provider is a great spot to register your various container
     * bindings with the application. As you can see, we are registering our
     * "Registrar" implementation here. You can add your own bindings too!
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Illuminate\Contracts\Auth\Registrar',
            'App\Services\Registrar'
        );
    }

}