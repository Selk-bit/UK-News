<div class="col-xl-4">
    <div class="widget_tab md-mt-30">
        <ul class="nav nav-tabs">
            <li><a class="active" data-toggle="tab" href="#post2">LATEST</a>
            </li>
            <li><a data-toggle="tab" href="#post3">POPULAR</a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="post2" class="tab-pane fade active show">
                <div class="widget tab_widgets mb30">
                    @foreach ($articles->slice(0, $limit) as $article)
                        <div class="single_post widgets_small">
                            <div class="post_img">
                                <div class="img_wrap">
                                    <a href="{{ route("article", ["slug" => \Illuminate\Support\Str::slug($article->title), "id" => $article->id]) }}">
                                        <img src="{{ $article->thumbnail }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="single_post_text">
                                @if ($article->created_at)
                                    <div class="meta2 meta_separator1">	<a href="#">Ukraine</a>
                                        <a href="#">{{ \Carbon\Carbon::parse($article->created_at)->diffForhumans() }}</a>
                                    </div>
                                @endif
                                <h4><a href="{{ route("article", ["slug" => \Illuminate\Support\Str::slug($article->title), "id" => $article->id]) }}"> {{ \Illuminate\Support\Str::limit($article->title, 60) }} </a></h4>
                            </div>
                        </div>
                        <div class="space-15"></div>
                        <div class="border_black"></div>
                        <div class="space-15"></div>
                    @endforeach
                </div>
            </div>
            <div id="post3" class="tab-pane fade">
                <div class="widget tab_widgets mb30">
                    @foreach($populars->slice(0, $limit) as $popular)
                        <div class="single_post widgets_small">
                            <div class="post_img">
                                <div class="img_wrap">
                                    <a href="{{ route("article", ["slug" => \Illuminate\Support\Str::slug($popular->title), "id" => $popular->id]) }}">
                                        <img src="{{ $popular->thumbnail }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="single_post_text">
                                @if ($popular->created_at)
                                    <div class="meta2 meta_separator1">	<a href="#">Ukraine</a>
                                        <a href="#">{{ \Carbon\Carbon::parse($popular->created_at)->diffForhumans() }}</a>
                                    </div>
                                @endif
                                <h4><a href=" {{ route("article", ["slug" => \Illuminate\Support\Str::slug($popular->title), "id" => $popular->id]) }} ">{{ \Illuminate\Support\Str::limit($popular->title, 60) }}</a></h4>
                            </div>
                        </div>
                    @endforeach
                    <div class="space-15"></div>
                    <div class="border_black"></div>
                    <div class="space-15"></div>
                </div>
            </div>
        </div>
    </div>
</div>
