@extends('simplest.layouts.master')

@section('title')
Edit Article
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
                            <h2>edit article</h2>
                            <!-- add Article -->
                            <form action="{{ route('article.update', ['id' => $article['id']]) }}" method="POST">
                                @csrf
                                <img src="#" alt="images-preview">
                                <br>
                                <label for="">Article Title</label>
                                checlbox to enable change image
                                <input name="title" value="{{ $article['title'] }}" class="uk-input" type="text" placeholder="Title" required>
                                <label for="">Images</label>
                                <div class="" uk-margin>
                                    <div uk-form-custom="target: true" style="width: 100%">
                                        <input name="image" type="file" accept="image/*" >
                                        <input class="uk-input uk-form-width-full" type="text" placeholder="Select file" disabled>
                                    </div>
                                </div>

                                <label for="">Article Link</label>
                                <input name="link" value="{{ $article['link'] }}" class="uk-input" type="text" placeholder="facebook.com/..." required>

                                <label for="">Description</label>
                                <textarea name="description" class="uk-textarea uk-resize-vertical" required>{{ $article['description'] }}</textarea>

                                <button class="uk-button uk-button-default uk-button-primary uk-margin-top" style="background: #1c3faa">Submit</button>
                            </form>

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
