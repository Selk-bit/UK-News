@extends('layouts.app')

@section('content')

	<!--::::: POST CAROUSEL AREA START  :::::::-->
	<div class="fifth_bg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="carousel_posts1 owl-carousel nav_style2 mb40 mt30">
						<!--CAROUSEL START-->
                        @foreach ($populars as $popular)
                            <div class="single_post widgets_small post_type5">
                                <div class="post_img">
                                    <div class="img_wrap">
                                        <a href="{{ route("article", ["id" => $popular->id]) }}">
                                            <img src="{{ $popular->thumbnail }}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="single_post_text">
                                    <h4><a href="{{ route("article", ["id" => $popular->id]) }}">{{ \Illuminate\Support\Str::limit($popular->title, 60) }}</a></h4>
                                    <p>{{ Str::limit($popular->summary, 20) }}</p>
                                </div>
                            </div>
                        @endforeach
					</div>
					<!--CAROUSEL END-->
				</div>
			</div>
		</div>
	</div>
	<!--::::: POST CAREOUSEL AREA END :::::::-->


	<!--::::: POST GALLARY AREA START :::::::-->
	<div class="post_gallary_area fifth_bg mb40">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-xl-8">
							<div class="slider_demo2">
                                @foreach($headings as $heading)
                                    <div class="single_post post_type6 xs-mb30">
                                        <div class="post_img gradient1">
                                            <img src="{{ $heading->thumbnail }}" alt="">
                                        </div>
                                            <div class="single_post_text">
                                                @if ($heading->created_at)
                                                    <div class="meta meta_separator1">	<a href="#">Ukraine</a>
                                                        <a href="#">{{ \Carbon\Carbon::parse($heading->created_at)->diffForhumans() }}</a>
                                                    </div>
                                                @endif
                                                <h4><a class="play_btn" href="{{ route("article", ["id" => $heading->id]) }}">{{ \Illuminate\Support\Str::limit($heading->title, 60) }}</a></h4>
                                                <div class="space-10"></div>
                                                <p class="post-p">{{ $heading->summary }}...</p>
                                            </div>
                                    </div>
                                @endforeach
							</div>
							<div class="slider_demo1">
                                @foreach ($headings as $heading)
                                    <div class="single_gallary_item">
                                        <img src="{{ $heading->thumbnail }}" alt="image">
                                    </div>
                                @endforeach
							</div>
						</div>
                        @include("layouts.aside", ["limit" => 5])
					</div>
				</div>

			</div>
		</div>
	</div>
	<!--::::: POST GALLARY AREA END :::::::-->

	<!--::::: FEATURE_POST AREA START :::::::-->
	<div class="feature_carousel_area mb40">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="heading">
						<h2 class="widget-title">Feature News</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="feature_carousel owl-carousel nav_style1">
						<!--CAROUSEL START-->
                        @foreach ($articles as $article)
                            <div class="single_post post_type6 post_type7">
                                <div class="post_img gradient1">
                                    <a href="#">
                                        <img src="{{ $article->thumbnail }}" alt="">
                                    </a>
                                </div>
                                <div class="single_post_text">
                                    @if ($article->created_at)
                                        <div class="meta5">	<a href="#">Ukraine</a>
                                            <a href="#">{{ \Carbon\Carbon::parse($article->created_at)->diffForhumans() }}</a>
                                        </div>
                                    @endif
                                    <h4>
                                        <a href="post1.html"> {{ \Illuminate\Support\Str::limit($article->title, 60) }} </a>
                                    </h4>
                                </div>
                            </div>
                        @endforeach
					</div>
					<!--CAROUSEL END-->
				</div>
			</div>
		</div>
	</div>
	<!--::::: FEATURE POST AREA END :::::::-->
	<!--::::: TRANDING CAROUSEL AREA START :::::::-->
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-lg-8">
				<h2 class="widget-title">Trending News</h2>
				<div class="carousel_post2_type3 nav_style1 owl-carousel">
					<!--CAROUSEL START-->
                    @foreach($populars as $pop)
                        <div class="single_post post_type3">
                            <div class="post_img">
                                <div class="img_wrap">
                                    <img src="{{ $pop->thumbnail }}" alt="">
                                </div>	<span class="tranding">
                                    <i class="fas fa-bolt"></i>
                                </span>
                            </div>
                            <div class="single_post_text">
                                @if ($pop->created_at)
                                    <div class="meta3">	<a href="#">Ukraine</a>
                                        <a href="#">{{ \Carbon\Carbon::parse($pop->created_at)->diffForhumans() }}</a>
                                    </div>
                                @endif
                                <h4><a href="{{ route("article", ["id" => $pop->id]) }}">{{ \Illuminate\Support\Str::limit($pop->title, 60) }}</a></h4>
                                <div class="space-10"></div>
                                <p class="post-p">{{ $pop->summar }}…</p>
                            </div>
                        </div>
                    @endforeach
				</div>
				<div class="border_black"></div>
				<div class="space-30"></div>
				<div class="row">
                    @foreach ($randoms as $random)
                        <div class="col-lg-6">
                            <div class="single_post widgets_small">
                                <div class="post_img">
                                    <div class="img_wrap">
                                        <img src="{{ $random->thumbnail }}" alt="">
                                    </div>	<span class="tranding">
                                        <i class="fas fa-bolt"></i>
                                    </span>
                                </div>
                                <div class="single_post_text">
                                    @if ($random->created_at)
                                        <div class="meta2">	<a href="#">Ukraine</a>
                                            <a href="#">{{ \Carbon\Carbon::parse($random->created_at)->diffForhumans() }}</a>
                                        </div>
                                    @endif
                                    <h4><a href="{{ route("article", ["id" => $random->id]) }}">{{ \Illuminate\Support\Str::limit($random->title, 60) }}</a></h4>
                                </div>
                            </div>
                            <div class="space-15"></div>
                            <div class="border_black"></div>
                            <div class="space-15"></div>
                        </div>
                    @endforeach
				</div>
			</div>
			<div class="col-md-12 col-lg-4">
				<!--:::::: POST TYPE 2 START :::::::-->
				<div class="widget tab_widgets mb30">
					<h2 class="widget-title">Most View</h2>
					<div class="post_type2_carousel owl-carousel nav_style1">
						<!--CAROUSEL START-->
						<div class="single_post2_carousel">
                            @foreach($views as $key => $view)
                                <div class="single_post widgets_small type8">
                                    <div class="post_img">
                                        <div class="img_wrap">
                                            <img src="{{ $view->thumbnail }}" alt="">
                                        </div>
                                        <span class="tranding">
                                            <i class="fas fa-bolt"></i>
                                        </span>
                                    </div>
                                    <div class="single_post_text">
                                        @if ($view->created_at)
                                            <div class="meta2">	<a href="#">Ukraine</a>
                                                <a href="#">{{  \Carbon\Carbon::parse($view->created_at)->diffForhumans() }}</a>
                                            </div>
                                        @endif
                                        <h4><a href="{{ route("article", ["id" => $view->id]) }}">{{ \Illuminate\Support\Str::limit($view->title, 150) }}</a></h4>
                                    </div>
                                    <div class="type8_count">
                                        <h2>{{ $key + 1 }}</h2>
                                    </div>
                                </div>
                                <div class="space-15"></div>
                                <div class="border_black"></div>
                                <div class="space-15"></div>
                            @endforeach
						</div>
					</div>
					<!--CAROUSEL END-->
				</div>
			</div>
		</div>
	</div>
@endsection
