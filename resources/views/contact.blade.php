@extends('layouts.app')


@section('content')
    <div class="inner inner_bg inner_overlay">
        <div class="container">
            <div class="inner_wrap">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="title_inner">
                            <h6>CONTACT US</h6>
                            <h1>let's Contact</h1>
                        </div>
                    </div>
                </div>
                <div class="inner_scroll">
                    <a href="#inner">
                        <img src="assets/img/icon/scroll.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="col-md-8">
        <div class="cotact_form">
            <div style="width: 100%;" class="row">
                <div style="display: flex; justify-content: center; align-items: center;" class="col-12">
                    <h3> Fill out the form.</h3>
                </div>
                <div class="col-12">
                    <form action="index.html">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Full Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Subject">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" placeholder="Email Adress">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Phone Number">
                            </div>
                            <div class="col-12">
                                <textarea name="messege" id="messege" cols="30" rows="5" placeholder="Tell us about your message…"></textarea>
                            </div>
                            <div style="display: flex; justify-content: center; align-items: center;" class="col-12">
                                <div class="space-20"></div>
                                <input class="cbtn1" type="button" value="Send Messege">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
