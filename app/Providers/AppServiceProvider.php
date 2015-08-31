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