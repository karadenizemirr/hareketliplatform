<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\ModelsCategory;


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
        $categories = ModelsCategory::all();
        view()->share('categories', $categories);
    }
}
