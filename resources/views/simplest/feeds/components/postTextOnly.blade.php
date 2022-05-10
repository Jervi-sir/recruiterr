<div class="post">
    <div class="post-heading">

        <div class="post-title {{ $article['title_isArabic'] ? 'uk-text-right' : '' }}">
            <h4> {{ $article['title'] }} </h4>
            <p>
                <!-- <i class="uil-users-alt"></i> -->
                {{ $article['time'] }}
            </p>
        </div>
        <div class="post-btn-action">
            <span class="icon-more uil-ellipsis-h"></span>
            <div class="mt-0 p-2" uk-dropdown="pos: bottom-right;mode:hover ">
                <ul class="uk-nav uk-dropdown-nav">
                    <li><a href="#"> <i class="uil-share-alt mr-1"></i> Share</a> </li>
                    <li><a href="{{ route('article.edit', ['id' => $article['id']]) }}"> <i class="uil-edit-alt mr-1"></i> Edit Post </a></li>
                    <li>
                        <a href="#" class="text-danger"> <i class="uil-trash-alt mr-1"></i>
                            Delete </a>
                        </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="post-description {{ $article['description_isArabic'] ? 'uk-text-right' : '' }}">
        <p>
            {{ $article['description'] }}
        </p>
        <div class="post-state-details">
            <div>
            </div>
            <p> 24 Comments</p>
        </div>
    </div>

    <div class="post-state">
        <div class="post-state-btns"> <i class="uil-thumbs-up"></i> 126<span> Liked </span>
        </div>
        <div class="post-state-btns">
            <a href="{{ $article['link'] }}" target="_blank" class="uk-text-primary">
                Visit
            </a>
        </div>
    </div>

    <!-- post comments -->
    <div class="post-comments">
        <a href="#" class="view-more-comment"> Veiw 8 more Comments</a>
        <div class="post-comments-single">
            <div class="post-comment-avatar">
                <img src="simplest/images/avatars/avatar-5.jpg" alt="">
            </div>
            <div class="post-comment-text">
                <div class="post-comment-text-inner">
                    <h6> Alex Dolgove</h6>
                    <p> Ut wisi enim ad minim laoreet dolore magna aliquam erat </p>
                </div>
                <div class="uk-text-small">
                    <a href="#" class="text-danger mr-1"> <i class="uil-heart"></i> Love
                    </a>
                    <a href="#" class=" mr-1"> Replay </a>
                    <span> 1d</span>
                </div>
            </div>
            <a href="#" class="post-comment-opt"></a>
        </div>
        <div class="post-comments-single">
            <div class="post-comment-avatar">
                <img src="simplest/images/avatars/avatar-2.jpg" alt="">
            </div>
            <div class="post-comment-text">
                <div class="post-comment-text-inner">
                    <h6>Stella Johnson</h6>
                    <p> Ut wisi enim ad minim laoreet dolore <strong> David !</strong> </p>
                </div>
                <div class="uk-text-small">
                    <a href="#" class="text-primary mr-1"> <i class="uil-thumbs-up"></i>
                        Like
                    </a>
                    <a href="#" class=" mr-1"> Replay </a>
                    <span> 2d</span>
                </div>
            </div>
            <a href="#" class="post-comment-opt"></a>
        </div>

        <div class="post-add-comment">
            <div class="post-add-comment-avature">
                <img src="simplest/images/avatars/avatar-2.jpg" alt="">
            </div>
            <div class="post-add-comment-text-area">
                <input type="text" placeholder="Write your comment...">
                <div class="icons">
                    <span class="uil-link-alt"></span>
                    <span class="uil-grin"></span>
                    <span class="uil-image"></span>
                </div>
            </div>

        </div>

    </div>


</div>
