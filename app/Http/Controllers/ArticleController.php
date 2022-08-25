<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function get_welcome_articles()
    {
        $heading_ids = Article::query()->select("id")->where("heading", 1)->orderBy("id")->pluck("id");
        $views_ids = Article::query()->select("id")->orderBy("views", "Desc")->limit(6)->pluck("id");
        $randoms_ids = Article::query()->select("id")->inRandomOrder()->limit(6)->pluck("id");
        // $heading_ids_arr = $heading_ids->toArray();
        // if(count($heading_ids_arr) > 1){
        //     array_pop($heading_ids_arr);
        // }
        // if($heading_ids_arr && !in_array($heading_ids_arr[0], $articles_ids->toArray())){
        //     $articles_ids[] = $heading_ids_arr[0];
        // }
        $headings = Article::query()->select("id", "title", "summary", "thumbnail", "created_at", "popular", "heading", "views")->whereIn("id", $heading_ids)->get();
        $views  = Article::query()->select("id", "title", "summary", "thumbnail", "created_at", "popular", "heading", "views")->orderBy("views", "Desc")->whereIn("id", $views_ids)->get();
        $randoms  = Article::query()->select("id", "title", "summary", "thumbnail", "created_at", "popular", "heading", "views")->whereIn("id", $randoms_ids)->get();

        return view("welcome", compact("headings", "views", "randoms"));
    }

    public function get_all_articles()
    {
        $all_articles = Article::query()->select("id", "title", "summary", "thumbnail", "created_at")->latest("id")->paginate(10);
        return view("articles", compact("all_articles"));
    }

    public function get_trends()
    {
        $all_articles = Article::query()->select("id", "title", "summary", "thumbnail", "created_at")->latest("id")->where('popular', 1)->paginate(10);
        return view("articles", compact("all_articles"));
    }

    public function show_article(Request $request)
    {
        $article = Article::query()->where("id", $request->id)->first();
        $keywords = json_decode($article->keywords);
        $previous_article = Article::query()->select('id', 'title')->where("id", $request->id - 1)->first();
        $next_article = Article::query()->select('id', 'title')->where("id", $request->id + 1)->first();
        // $related_ids = [];
        // foreach($keywords as $keyword){
        //     $keyword = trim(preg_replace('/\s\s+/', ' ', $keyword));
        //     $related_ids[] = Article::query()->select("id")->where("keywords", "like", "%" . $keyword . "%")->pluck("id");
        // }
        // $related = Article::query()->select("id", "thumbnail", "title", "created_at")->whereIn("id", $related_ids)->get();
        $article->update([
            "views" => $article->views + 1,
        ]);
        return view("article", compact("article", "previous_article", "next_article"));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
