@extends('layouts.app')


@section('title', $article->title)
@section('description'){!! $article->summary !!}@endsection
@section('image', $article->thumbnail)
@section('type', 'article')
@section('url', request()->fullUrl())


@push('schema')
    <script type="application/ld+json">
        {
            "@context": "http://schema.org/",
            "@graph": [
                {
                    "@type": "NewsArticle",
                    "mainEntityOfPage": {
                        "@type": "Webpage",
                        "url": {{ request()->fullUrl() }}
                    },
                    "headline": {{ $article->title }},
                    "description": {{ $article->summary }},
                    "articleBody": {{ $article->body }},
                    "dateCreated": {{ $article->created_at }},
                    "dateModified": {{ $article->updated_at }},
                    "datePublished": {{ $article->created_at }},
                    "image": {
                        "@type": "ImageObject",
                        "url": {{ $article->thumbnail }},
                        "width": "1440px",
                        "height": "810px",
                        "caption": "Kostiantynivka",
                        "thumbnail": {{ $article->thumbnail }},
                        "publisher": {
                            "@type": "Organization",
                            "name": "ourName",
                            "url": {{ $article->thumbnail }}
                        }
                    },
                    "author": {
                        "@type": "Person",
                        "name": "ourName",
                        "url": {{ env('APP_URL') }},
                        "sameAs": "{{ env('APP_URL') }}"
                    },
                    "publisher": {
                        "@type": "Organization",
                        "name": "ourName",
                        "legalName": "ourName",
                        "url": "{{ env('APP_URL') }}",
                        "logo": {
                            "@type": "ImageObject",
                            "url": "{{ asset('images/logo.png') }}",
                            "width": "403px",
                            "height": "60px"
                        },
                    },
                },
                {
                    "@type": "WebSite",
                    "name": "ourName",
                    "url": "{{ env("APP_URL") }}",
                    "potentialAction": {
                        "@type": "SearchAction",
                        "target": "{{ env("APP_URL") . 'search?query={search_term_string}' }}",
                        "query-input": "required name=search_term_string"
                    },
                }
            ]
        }
    </script>
@endpush


@section('content')
	<!--::::: ARCHIVE AREA START :::::::-->
	<div class="archives post post1 padding-top-30">
		<div class="container">
			<div class="space-30"></div>
			<div class="row">
				<div class="col-md-6 col-lg-8">
					<div class="row">
						<div class="col-4 align-self-center">
							<div class="page_category">
								<h4>Ukraine</h4>
							</div>
						</div>
					</div>
					<div class="space-30"></div>
					<div class="single_post_heading">
						<h1>{{ $article->title }}</h1>
						<div class="space-10"></div>
						{{-- <p>{{ $article->summary }}</p> --}}
					</div>
					<div class="space-40"></div>
					<img src="{{ $article->thumbnail }}" alt="image">
					<div class="space-20"></div>
					<div class="space-20"></div>
                    {{-- {!! $article->body !!} --}}
                    @foreach (explode("\n", $article->body) as $paragraph)
                        <p>
                            {!! $paragraph !!}
                            <br><br>
                        </p>
                    @endforeach
                    <div class="space-40"></div>
                    @if(json_decode($article->keywords))
                        <div class="tags">
                            <ul class="inline">
                                <li class="tag_list"><i class="fas fa-tag"></i> tags</li>
                                {{-- {{ dd($article->keywords) }} --}}
                                {{-- {{ dd(json_decode(strval($article->keywords)), json_last_error_msg()) }} --}}
                                @foreach (array_slice(json_decode($article->keywords), 0, 4) as $keyword)
                                    <li><a href="#">{{ $keyword }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
					<div class="space-40"></div>
					<div class="border_black"></div>
					<div class="space-40"></div>
					<div class="next_prev">
						<div class="row">

                            @if($previous_article)
                                <div class="col-lg-6 align-self-center">
                                    <div class="next_prv_single border_left3">
                                        <p>PREVIOUS NEWS</p>
                                        <h3><a href="{{ route("article", ["slug" => \Illuminate\Support\Str::slug($previous_article->title), "id" => $previous_article->id]) }}">{{ $previous_article->title }}</a></h3>
                                    </div>
                                </div>
                            @endif

                            @if($next_article)
                                <div class="col-lg-6 align-self-center">
                                    <div class="next_prv_single border_left3">
                                        <p>NEXT NEWS</p>
                                        <h3><a href="{{ route("article", ["slug" => \Illuminate\Support\Str::slug($next_article->title), "id" => $next_article->id]) }}">{{ $next_article->title }}</a></h3>
                                    </div>
                                </div>
                            @endif

						</div>
					</div>
				</div>
                @include("layouts.aside", ["limit" => 10])
			</div>
		</div>
	</div>
	<!--::::: ARCHIVE AREA END :::::::-->
	<div class="space-60"></div>
	<!--::::: LATEST BLOG AREA START :::::::-->
	<div class="fourth_bg padding6030">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="heading">
						<h2 class="widget-title">Our Latest Articles</h2>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
                @foreach ($articles->slice(0, 3) as $article)
                    <div class="col-md-6 col-lg-4">
                        <div class="single_post post_type3 mb30">
                            <div class="post_img">
                                <a href="#">
                                    <img src="assets/img/bg/video4.jpg" alt="">
                                </a>
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
                            </div>
                        </div>
                    </div>
                @endforeach
			</div>
		</div>
	</div>
@endsection
