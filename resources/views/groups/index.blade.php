@extends('layouts.master')

@section('title')
Groups
@endsection
@section('content')
<div class="container">
    <!-- Banner Area Start -->
    <div class="newsfeed-banner">
        <img src="media/banner/logo-words.png" alt="">
    </div>
    <div class="block-box user-search-bar">
        <div class="box-item search-box">
            <h3 class="mb-0">Groups</h3>
        </div>
        <div class="box-item search-filter">
            <div class="dropdown">
                <label>Order By:</label>
                <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Newest Groups</button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">All Groups</a>
                    <a class="dropdown-item" href="#">Newest Groups</a>
                    <a class="dropdown-item" href="#">Oldest Groups</a>
                </div>
            </div>
        </div>
        <div class="box-item search-switcher">
            <ul class="user-view-switcher">
                <li class="active">
                    <a class="user-view-trigger" href="#" data-type="user-grid-view">
                        <i class="icofont-layout"></i>
                    </a>
                </li>
                <li>
                    <a class="user-view-trigger" href="#" data-type="user-list-view">
                        <i class="icofont-listine-dots"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div id="user-view" class="user-grid-view">
        <div class="row gutters-20">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="widget-author user-group">
                    <div class="author-heading">
                        <div class="cover-img">
                            <img src="media/figure/cover_1.jpg" alt="cover">
                        </div>
                        <div class="profile-img">
                            <a href="#">
                                <img src="media/groups/user_group1.jpg" alt="author">
                            </a>
                        </div>
                        <div class="profile-name">
                            <h4 class="author-name"><a href="user-single-group.html">Tourist Ways</a></h4>
                            <div class="author-location">@tourist</div>
                        </div>
                    </div>
                    <ul class="member-thumb">
                        <li><img src="media/figure/chat_1.jpg" alt="member"></li>
                        <li><img src="media/figure/chat_1.jpg" alt="member"></li>
                        <li><img src="media/figure/chat_1.jpg" alt="member"></li>
                        <li><img src="media/figure/chat_1.jpg" alt="member"></li>
                        <li><i class="icofont-plus"></i></li>
                    </ul>
                    <ul class="author-statistics">
                        <li>
                            <a href="#"><span class="item-number">25</span> <span class="item-text">GROUP POSTS</span></a>
                        </li>
                        <li>
                            <a href="#"><span class="item-number">230</span> <span class="item-text">ALL MEMBERS</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="widget-author user-group">
                    <div class="author-heading">
                        <div class="cover-img">
                            <img src="media/figure/cover_2.jpg" alt="cover">
                        </div>
                        <div class="profile-img">
                            <a href="#">
                                <img src="media/groups/user_group2.jpg" alt="author">
                            </a>
                        </div>
                        <div class="profile-name">
                            <h4 class="author-name"><a href="user-single-group.html">Music Manila</a></h4>
                            <div class="author-location">@music</div>
                        </div>
                    </div>
                    <ul class="member-thumb">
                        <li><img src="media/figure/chat_1.jpg" alt="member"></li>
                        <li><img src="media/figure/chat_1.jpg" alt="member"></li>
                        <li><img src="media/figure/chat_1.jpg" alt="member"></li>
                        <li><img src="media/figure/chat_1.jpg" alt="member"></li>
                        <li><i class="icofont-plus"></i></li>
                    </ul>
                    <ul class="author-statistics">
                        <li>
                            <a href="#"><span class="item-number">25</span> <span class="item-text">GROUP POSTS</span></a>
                        </li>
                        <li>
                            <a href="#"><span class="item-number">230</span> <span class="item-text">ALL MEMBERS</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="widget-author user-group">
                    <div class="author-heading">
                        <div class="cover-img">
                            <img src="media/figure/cover_3.jpg" alt="cover">
                        </div>
                        <div class="profile-img">
                            <a href="#">
                                <img src="media/groups/user_group3.jpg" alt="author">
                            </a>
                        </div>
                        <div class="profile-name">
                            <h4 class="author-name"><a href="user-single-group.html">Sports Zone</a></h4>
                            <div class="author-location">@sports</div>
                        </div>
                    </div>
                    <ul class="member-thumb">
                        <li><img src="media/figure/chat_1.jpg" alt="member"></li>
                        <li><img src="media/figure/chat_1.jpg" alt="member"></li>
                        <li><img src="media/figure/chat_1.jpg" alt="member"></li>
                        <li><img src="media/figure/chat_1.jpg" alt="member"></li>
                        <li><i class="icofont-plus"></i></li>
                    </ul>
                    <ul class="author-statistics">
                        <li>
                            <a href="#"><span class="item-number">25</span> <span class="item-text">GROUP POSTS</span></a>
                        </li>
                        <li>
                            <a href="#"><span class="item-number">230</span> <span class="item-text">ALL MEMBERS</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="widget-author user-group">
                    <div class="author-heading">
                        <div class="cover-img">
                            <img src="media/figure/cover_4.jpg" alt="cover">
                        </div>
                        <div class="profile-img">
                            <a href="#">
                                <img src="media/groups/user_group4.jpg" alt="author">
                            </a>
                        </div>
                        <div class="profile-name">
                            <h4 class="author-name"><a href="user-single-group.html">Nature Jungle</a></h4>
                            <div class="author-location">@nature</div>
                        </div>
                    </div>
                    <ul class="member-thumb">
                        <li><img src="media/figure/chat_1.jpg" alt="member"></li>
                        <li><img src="media/figure/chat_1.jpg" alt="member"></li>
                        <li><img src="media/figure/chat_1.jpg" alt="member"></li>
                        <li><img src="media/figure/chat_1.jpg" alt="member"></li>
                        <li><i class="icofont-plus"></i></li>
                    </ul>
                    <ul class="author-statistics">
                        <li>
                            <a href="#"><span class="item-number">25</span> <span class="item-text">GROUP POSTS</span></a>
                        </li>
                        <li>
                            <a href="#"><span class="item-number">230</span> <span class="item-text">ALL MEMBERS</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="widget-author user-group">
                    <div class="author-heading">
                        <div class="cover-img">
                            <img src="media/figure/cover_5.jpg" alt="cover">
                        </div>
                        <div class="profile-img">
                            <a href="#">
                                <img src="media/groups/user_group5.jpg" alt="author">
                            </a>
                        </div>
                        <div class="profile-name">
                            <h4 class="author-name"><a href="user-single-group.html">Electronics Taxi</a></h4>
                            <div class="author-location">@electronics</div>
                        </div>
                    </div>
                    <ul class="member-thumb">
                        <li><img src="media/figure/chat_1.jpg" alt="member"></li>
                        <li><img src="media/figure/chat_1.jpg" alt="member"></li>
                        <li><img src="media/figure/chat_1.jpg" alt="member"></li>
                        <li><img src="media/figure/chat_1.jpg" alt="member"></li>
                        <li><i class="icofont-plus"></i></li>
                    </ul>
                    <ul class="author-statistics">
                        <li>
                            <a href="#"><span class="item-number">25</span> <span class="item-text">GROUP POSTS</span></a>
                        </li>
                        <li>
                            <a href="#"><span class="item-number">230</span> <span class="item-text">ALL MEMBERS</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="widget-author user-group">
                    <div class="author-heading">
                        <div class="cover-img">
                            <img src="media/figure/cover_3.jpg" alt="cover">
                        </div>
                        <div class="profile-img">
                            <a href="#">
                                <img src="media/groups/user_group6.jpg" alt="author">
                            </a>
                        </div>
                        <div class="profile-name">
                            <h4 class="author-name"><a href="user-single-group.html">Kids Sports</a></h4>
                            <div class="author-location">@kids</div>
                        </div>
                    </div>
                    <ul class="member-thumb">
                        <li><img src="media/figure/chat_1.jpg" alt="member"></li>
                        <li><img src="media/figure/chat_1.jpg" alt="member"></li>
                        <li><img src="media/figure/chat_1.jpg" alt="member"></li>
                        <li><img src="media/figure/chat_1.jpg" alt="member"></li>
                        <li><i class="icofont-plus"></i></li>
                    </ul>
                    <ul class="author-statistics">
                        <li>
                            <a href="#"><span class="item-number">25</span> <span class="item-text">GROUP POSTS</span></a>
                        </li>
                        <li>
                            <a href="#"><span class="item-number">230</span> <span class="item-text">ALL MEMBERS</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="widget-author user-group">
                    <div class="author-heading">
                        <div class="cover-img">
                            <img src="media/figure/cover_8.jpg" alt="cover">
                        </div>
                        <div class="profile-img">
                            <a href="#">
                                <img src="media/groups/user_group7.jpg" alt="author">
                            </a>
                        </div>
                        <div class="profile-name">
                            <h4 class="author-name"><a href="user-single-group.html">Food Lovers</a></h4>
                            <div class="author-location">@food</div>
                        </div>
                    </div>
                    <ul class="member-thumb">
                        <li><img src="media/figure/chat_1.jpg" alt="member"></li>
                        <li><img src="media/figure/chat_1.jpg" alt="member"></li>
                        <li><img src="media/figure/chat_1.jpg" alt="member"></li>
                        <li><img src="media/figure/chat_1.jpg" alt="member"></li>
                        <li><i class="icofont-plus"></i></li>
                    </ul>
                    <ul class="author-statistics">
                        <li>
                            <a href="#"><span class="item-number">25</span> <span class="item-text">GROUP POSTS</span></a>
                        </li>
                        <li>
                            <a href="#"><span class="item-number">230</span> <span class="item-text">ALL MEMBERS</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="widget-author user-group">
                    <div class="author-heading">
                        <div class="cover-img">
                            <img src="media/figure/cover_2.jpg" alt="cover">
                        </div>
                        <div class="profile-img">
                            <a href="#">
                                <img src="media/groups/user_group8.jpg" alt="author">
                            </a>
                        </div>
                        <div class="profile-name">
                            <h4 class="author-name"><a href="user-single-group.html">Fashion Craze</a></h4>
                            <div class="author-location">@fashion</div>
                        </div>
                    </div>
                    <ul class="member-thumb">
                        <li><img src="media/figure/chat_1.jpg" alt="member"></li>
                        <li><img src="media/figure/chat_1.jpg" alt="member"></li>
                        <li><img src="media/figure/chat_1.jpg" alt="member"></li>
                        <li><img src="media/figure/chat_1.jpg" alt="member"></li>
                        <li><i class="icofont-plus"></i></li>
                    </ul>
                    <ul class="author-statistics">
                        <li>
                            <a href="#"><span class="item-number">25</span> <span class="item-text">GROUP POSTS</span></a>
                        </li>
                        <li>
                            <a href="#"><span class="item-number">230</span> <span class="item-text">ALL MEMBERS</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="pagination">
            <ul>
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
            </ul>
        </div>
    </div>
</div>

@endsection

@section('vuejs')
<script>
    // this requires the compiler

</script>
@endsection

