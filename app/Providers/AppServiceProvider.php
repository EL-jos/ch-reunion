<?php

namespace App\Providers;

use App\Models\Blog;
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
        $recentPosts = Blog::latest()->take(4)->get();
        View::share('recentPosts', $recentPosts);
    }
}
