<div class="col-lg-4 widget-block widget-break-lg">
    <div class="widget widget-author">
        <div class="author-heading">
            <div class="cover-img">
                <img src="media/figure/shape_12.jpg" alt="cover">
            </div>
            <div class="profile-img">
                <a href="#">
                    <img src="{{ Auth()->user()->profile->profile_pic ? Auth()->user()->profile->profile_pic : 'media/figure/author_1.jpg' }}" alt="Chat">
                </a>
            </div>
            <div class="profile-name">
                <h4 class="author-name"><a href="#">{{ Auth()->user()->name }}</a></h4>
                <div class="author-location">Ain temouchent</div>
            </div>
        </div>
        <ul class="author-badge">
            <li><a href="#" class="bg-salmon-gradient"><i class="icofont-star"></i></a></li>
            <li><a href="#" class="bg-amethyst-gradient"><i class="icofont-ui-play"></i></a></li>
            <li><a href="#" class="bg-sun-gradient"><i class="icofont-squirrel"></i></a></li>
            <li><a href="#" class="profile-circle">+5</a></li>
        </ul>
        <ul class="author-statistics">
            <li>
                <a href="#"><span class="item-number">30</span> <span class="item-text">POSTS</span></a>
            </li>
            <li>
                <a href="#"><span class="item-number">12</span> <span class="item-text">COMMENTS</span></a>
            </li>
            <li>
                <a href="#"><span class="item-number">1,125</span> <span class="item-text">VIEWS</span></a>
            </li>
        </ul>
    </div>

</div>
