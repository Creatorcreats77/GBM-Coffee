<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('client.app.navbar', function ($view) {
            $categories = Category::orderBy('name')
                ->get();

            $view->with([
                'categories' => $categories,
            ]);
        });
        View::composer('client.app.footer', function ($view2) {
            $categories = Category::orderBy('name')
                ->get();

            $view2->with([
                'categories' => $categories,
            ]);
        });
    }
}
