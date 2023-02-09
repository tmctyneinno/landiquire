<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        view()->composer('*', function($view){
        $menus = Menu::get();
        $view->with('menus', $menus);

        $view->with('settings', Setting::latest()->first());
        });


    }
}
