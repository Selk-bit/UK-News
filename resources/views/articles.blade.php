@extends('layouts.app')

@section('content')
    <div class="archives padding-top-30">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-8">
                    <div class="row justify-content-center">
                        @foreach ($all_articles as $article)
                            <div class="col-lg-6">
                                <div class="single_post post_type3 mb30">
                                    <div class="post_img">
                                        <a href="{{ route("article", ["slug" => \Illuminate\Support\Str::slug($article->title), "id" => $article->id]) }}">
                                            <img src="{{ $article->thumbnail }}" alt="">
                                        </a>	<span class="tranding">
                                            <i class="fas fa-bolt"></i>
                                        </span>
                                    </div>
                                    <div class="single_post_text">
                                        @if ($article->created_at)
                                            <div class="meta3">	<a href="#">Ukraine</a>
                                                <a href="#">{{ \Carbon\Carbon::parse($article->created_at)->diffForhumans() }}</a>
                                            </div>
                                        @endif
                                        <h4><a href="{{ route("article", ["slug" => \Illuminate\Support\Str::slug($article->title), "id" => $article->id]) }}">{{ $article->title }}</a></h4>
                                        <div class="space-10"></div>
                                        <p class="post-p">{{ $article->summary }}</p>
                                        <div class="space-20"></div>	<a href="{{ route("article", ["slug" => \Illuminate\Support\Str::slug($article->title), "id" => $article->id]) }}" class="readmore">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {!! $all_articles->links("pagination::default") !!}


                </div>
                <div class="col-md-6 col-lg-4">
                        <div class="widget_tab md-mt-30">

                        </div>


                        <div class="trending_widget mb30">
                            <h2 class="widget-title">Tending News</h2>
                            @foreach($populars as $popular)
                                <div class="space-15"></div>
                                <div class="border_black"></div>
                                <div class="space-30"></div>
                                <div class="single_post widgets_small">
                                    <div class="post_img">
                                        <div class="img_wrap">
                                            <img src="{{ $popular->thumbnail }}" alt="">
                                        </div>	<span class="tranding">
                                            <i class="fas fa-bolt"></i>
                                        </span>
                                    </div>
                                    <div class="single_post_text">
                                        @if ($popular->created_at)
                                            <div class="meta2">	<a href="#">Ukraine</a>
                                                <a href="#">{{ \Carbon\Carbon::parse($popular->created_at)->diffForhumans() }}</a>
                                            </div>
                                        @endif
                                        <h4><a href="{{ route("article", ["slug" => \Illuminate\Support\Str::slug($popular->title), "id" => $popular->id]) }}">{{ \Illuminate\Support\Str::limit($popular->title, 60) }}</a></h4>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
