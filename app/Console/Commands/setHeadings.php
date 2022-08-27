<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Article;


class setHeadings extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'set:heading';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $latest_articles = Article::query()->select("id")->orderBy("id", "desc")->limit("10")->pluck("id");
        Article::query()->where("heading", 1)->whereNotIn("id", $latest_articles)->update([
            "heading" => 0
        ]);
        Article::query()->whereIn("id", $latest_articles)->update([
            "heading" => 1
        ]);
    }
}
