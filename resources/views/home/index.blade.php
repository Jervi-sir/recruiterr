@extends('layouts.master')

@section('title')
Maison d'entrepreneuriat
@endsection
@section('content')
<div class="container">
    <!-- Banner Area Start -->
    <div class="newsfeed-banner">
        <img src="media/banner/logo-words.png" alt="">
    </div>

    <div class="newsfeed-search">
        <ul class="member-list">
            <li class="active-member">
                <a href="#">
                    <span class="member-icon">
                        <i class="icofont-users"></i>
                    </span>
                    <span class="member-text">
                        Total Members who joined us:
                    </span>
                    <span class="member-count">{{ $user_count }}</span>
                </a>
            </li>
        </ul>
        <ul class="search-list">
            <li class="search-input">
                <button class="drop-btn" type="button">
                    <i class="icofont-search"></i>
                </button>
                <div class="drop-menu">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search....">
                        <div class="input-group-append">
                            <button class="search-btn" type="button"><i class="icofont-search-1"></i></button>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class=" @auth col-lg-8 @endauth @guest col-lg-12 @endguest">
            <div class="@guest row mx-0 justify-content-lg-between @endguest">
                @foreach($articles as $article)
                <div class="block-box post-view  @guest col-lg-65 @endguest ">
                    <div class="post-header">
                        <div class="media">
                            <h4 dir="rtl"  class="arabic">{{ mb_substr($article->title, 0, 100,'utf-8') }} ...</h4>
                        </div>
                    </div>
                    <div class="post-body">
                        <div class="post-img">
                            <img src="{{ $article->images }}" alt="Post">
                        </div>
                    </div>
                    <div class="post-footer">
                        <ul>
                            <li class="post-react">
                                <a href="#"><i class="icofont-thumbs-up"></i>React!</a>
                                <ul class="react-list">
                                    <li><a href="#"><img src="media/figure/reaction_1.png" alt="Like"></a></li>
                                    <li><a href="#"><img src="media/figure/reaction_2.png" alt="Like"></a></li>
                                    <li><a href="#"><img src="media/figure/reaction_4.png" alt="Like"></a></li>
                                    <li><a href="#"><img src="media/figure/reaction_2.png" alt="Like"></a></li>
                                    <li><a href="#"><img src="media/figure/reaction_7.png" alt="Like"></a></li>
                                    <li><a href="#"><img src="media/figure/reaction_6.png" alt="Like"></a></li>
                                    <li><a href="#"><img src="media/figure/reaction_5.png" alt="Like"></a></li>
                                </ul>
                            </li>
                            <li class="slide-button">
                                <a href="{{ $article->link }}" target="_blank" class="button-slide">
                                    <span class="btn-text">Read more...</span>
                                    <span class="btn-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="21px" height="10px">
                                            <path fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M16.671,9.998 L12.997,9.998 L16.462,6.000 L5.000,6.000 L5.000,4.000 L16.462,4.000 L12.997,0.002 L16.671,0.002 L21.003,5.000 L16.671,9.998 ZM17.000,5.379 L17.328,5.000 L17.000,4.621 L17.000,5.379 ZM-0.000,4.000 L3.000,4.000 L3.000,6.000 L-0.000,6.000 L-0.000,4.000 Z" />
                                        </svg>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="block-box load-more-btn">
                <a href="#" class="item-btn"><i class="icofont-refresh"></i>Load More Posts</a>
            </div>
        </div>
        @auth
        @include('home.userCard')
        @endauth
    </div>
</div>

@endsection

@section('vuejs')
<script>
    // this requires the compiler

</script>
@endsection

