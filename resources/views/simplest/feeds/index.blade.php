@extends('simplest.layouts.master')

@section('title')
Maison d'entrepreneuriat
@endsection

@section('body')
        <!-- Wrapper -->
        <div id="wrapper">
            <!-- sidebar -->
            @include('simplest.components.sidebar')

           <!-- contents -->
           <div class="main_content">
                <!-- header -->
                @include('simplest.components.header')

                <div class="main_content_inner">
                    <div uk-grid>
                        <div class="uk-width-2-3@m fead-area">
                            <!-- Stories -->
                            <!-- Create new post -->
                            <!-- Post -->
                            @foreach ($data['articles'] as $article)
                            @include('simplest.feeds.components.postTextOnly')
                            @endforeach
                        </div>
                        <!-- rightSideBar -->
                        <div class="uk-width-expand">
                            <!-- Trending -->

                            <!-- Pro Members-->

                            <!-- People you may know-->

                            <!-- Pages you may like-->

                            <!-- Suggested groups-->

                            <!-- Online Users 1-->

                            <!-- Invite Your Friends-->

                            <!-- Promoted Pages-->

                            <!-- Footer menus-->

                        </div>
                    </div>
                </div>
            </div>
            <!-- Chat sidebar -->
            @include('simplest.feeds.chat.index')
        </div>
@endsection
