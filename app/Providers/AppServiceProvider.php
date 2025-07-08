<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Category;
use App\Marca;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (request()->header('x-forwarded-proto') === 'https') {
        URL::forceScheme('https');
         }

        view()->composer('layouts.frontend.partials.nav', function($view) {
            $view->with(['menus'=>Category::menus(),'menusmarca'=>Marca::menusmarca()]);
        });
    }
}
