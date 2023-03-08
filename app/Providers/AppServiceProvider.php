<?php

namespace App\Providers;

use App\Http\View\Composers\AllViewComposers;
use App\Http\View\Composers\CartComposers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layouts/layout',CartComposers::class);
        View::composer('*',AllViewComposers::class);
       



    }
}
