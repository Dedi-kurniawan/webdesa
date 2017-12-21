<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;


class MenuServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.aquarius.patrials.header', function($view){
            $categories = Category::with(['posts'])->orderBy('title', 'asc')->get();
        return $view->with('categories', $categories);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
