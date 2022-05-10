@extends('simplest.layouts.master')

@section('title')
Add Article
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
                            <!-- show Article -->
                            @include('simplest.feeds.components.postTextOnly')

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
