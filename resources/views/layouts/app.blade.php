<!DOCTYPE html>
<html lang="en">
@php
    use Illuminate\Support\Str;
@endphp
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="preconnect" href="//cdn.jsdelivr.net" />
    <link rel="dns-prefetch" href="//jsdelivr.net" />
    <link rel="preconnect" href="//googletagmanager.com" />
    <link rel="preconnect" href="//google.com" />
    <link rel="preconnect" href="//code.jquery.com" />
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'/>
    <title>Ukraine Live News and Information | {{ env('APP_NAME') }}</title>
    <meta name="description" content="@yield('description', 'Ukraine | All news regarding Ukraine broadcasted by {{ env('APP_NAME') }}')">
    <link rel="canonical" href="{!! request()->fullUrl() !!}">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="@yield('type', 'website')">
    <meta property="og:title" content="@yield('title', 'Ukraine Live News and Information | {{ env('APP_NAME') }}')">
    <meta property="og:description" content="@yield('description', 'Ukraine | All news regarding Ukraine broadcasted by {{ env('APP_NAME') }}')">
    <meta property="og:url" content="@yield('url', request()->fullUrl())">
    <meta property="og:site_name" content={{ env('APP_NAME') }}>
    <meta property="og:image" content="@yield('image', asset('/images/cover.png')))">
    <meta property="og:image:height" content="420">
    <meta property="og:image:width" content="800">
    <meta property="og:image:type" content="image/png" />
    <meta itemprop="url" content="@yield('url', request()->fullUrl())">
    <meta itemprop="name" content="Ukraine Live News and Information | {{ env('APP_NAME') }}">
    <meta itemprop="alternateName" content="Ukraine Live News and Information | {{ env('APP_NAME') }}">
    <meta itemprop="description" content="@yield('description', 'Ukraine | All news regarding Ukraine broadcasted by {{ env('APP_NAME') }}')">
    <meta itemprop="image" content="@yield('image', url(asset('/images/cover.png')))">
    <meta name="author" content={{ env('APP_NAME') }} />
    <meta name="twitter:card" content="summary_large_image" />
    @stack('schema')
	<!--::::: ALL CSS FILES :::::::-->
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>



<body class="theme-1">
	<!--::::: PRELOADER START :::::::-->

	<!--::::: PRELOADER END :::::::-->

	<!--::::: SEARCH FORM START:::::::-->
	<div class="searching">
		<div class="container">
			<div class="row">
				<div class="col-8 text-center m-auto">
					<div class="v1search_form">
						<form action="#">
							<input type="search" placeholder="Search Here...">
							<button type="submit" class="cbtn1">Search</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="close_btn">	<i class="fal fa-times"></i>
		</div>
	</div>
	<!--:::::SEARCH FORM END :::::::-->

	<div class="border_black"></div>

	<!--::::: LOGO AREA START  :::::::-->
	<div class="logo_area white_bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 align-self-center">
					<div class="logo">
						<a href="{{ route("welcome") }}">
							<img src="{{ asset('/images/logo.png') }}" alt="image">
						</a>
					</div>
				</div>
				<div class="col-lg-8 align-self-center">
					<div class="banner1">
						<a href="#">
							<img src="{{ asset('assets/img/bg/banner1.png')  }}" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--::::: LOGO AREA END :::::::-->


	<!--::::: MENU AREA START  :::::::-->
	<div class="main-menu" id="header">	<a href="#top" class="up_btn up_btn1"><i class="far fa-chevron-double-up"></i></a>
		<div class="main-nav clearfix is-ts-sticky">
			<div class="container">
				<div class="row justify-content-between">

					<div class="col-6 col-lg-8">
						<div class="newsprk_nav stellarnav">
							<ul id="newsprk_menu">
                                <li><a href="{{ route("welcome") }}">Home </a></li>
                                <li><a href="{{ route("articles") }}">Articles</a></li>
                                <li><a href="{{ route("trends") }}">Trends</a></li>
								{{-- <li><a href="{{ route("contact") }}">Contact</a></li> --}}
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--::::: MENU AREA END :::::::-->
    @yield('content')
    <!--::::: ENTERTAINMENT AREA END :::::::-->
	<div class="space-70"></div>
	<!--::::: FOOTER AREA START :::::::-->
	<div class="footer footer_area1 primay_bg">
		<div class="container">
			<div class="cta">
				<div class="row">
					<div class="col-md-6 align-self-center">
						<div class="footer_logo logo">
							<a href="{{ route("welcome") }}">
								<img src="{{ asset('/images/logo.png') }}" alt="logo">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 align-self-center">
						<p>&copy; Copyright 2022, All Rights Reserved</p>
					</div>
					<div class="col-lg-6 align-self-center">
						<div class="copyright_menus text-right">
							<div class="language"></div>
							<div class="copyright_menu inline">
								<ul>
									<li><a href="#">About</a>
									</li>
									<li><a href="#">Advertise</a>
									</li>
									<li><a href="#">Privacy & Policy</a>
									</li>
									<li><a href="#">Contact Us</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--::::: FOOTER AREA END :::::::-->
	<!--::::: ALL JS FILES :::::::-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script  src="{{ asset('js/app.js') }}"></script>
</body>

</html>
