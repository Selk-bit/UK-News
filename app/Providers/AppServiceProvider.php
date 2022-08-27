<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Article;

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
        \View::share('articles', $this->articles());
        \View::share('populars', $this->populars());

    }

    public function articles()
    {
        $articles_ids = Article::query()->select("id")->orderBy("id", "desc")->limit(20)->pluck("id");
        return Article::query()->select("id", "title", "summary", "thumbnail", "created_at", "popular", "heading", "views")->whereIn("id", $articles_ids)->get();
    }

    public function populars()
    {
        $populars_ids = Article::query()->select("id")->where("popular", 1)->orderBy("id")->limit(10)->pluck("id");
        return Article::query()->select("id", "title", "summary", "thumbnail", "created_at", "popular", "heading", "views")->whereIn("id", $populars_ids)->get();

    }
}
