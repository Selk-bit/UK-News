<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PHPHtmlParser\Dom;
use GuzzleHttp\Client;
use App\Models\Article;



class setPopulars extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'set:popular';

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
        $url = "https://fr.euronews.com/tag/ukraine";
        $dom = new Dom;

        $body   = (new Client)
            ->get($url)
            ->getBody()->getContents();

        $dom->loadStr($body);
        $aside = $dom->find('.o-block-topstories-newsy__aside');
        $anchors  = $aside->find('a');
        $arr = [];
        foreach($anchors as $a){
            $href = $a->getAttribute('href');
            if(strpos($href, date("Y")) !== false && !in_array($href, $arr)){
                $arr[] = $href;
                $url = "https://fr.euronews.com/tag/" . $href;
                echo $url;
                Article::query()->where("url", $url)->update([
                    "popular" => 1
                ]);
            }
        }
    }
}
