<a class="chat-plus-btn" href="#sidebar-chat" uk-toggle>
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <path fill="currentColor" d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z"></path>
    </svg>
    <!--  Chat -->
</a>
<div id="sidebar-chat" class="sidebar-chat px-3" uk-offcanvas="flip: true; overlay: true">
    <div class="uk-offcanvas-bar">

        <div class="sidebar-chat-head mb-2">

            <div class="btn-actions">
                <a href="#" uk-tooltip="title: Search ;offset:7"
                    uk-toggle="target: .sidebar-chat-search; animation: uk-animation-slide-top-small"> <i
                        class="icon-feather-search"></i> </a>
                <a href="#" uk-tooltip="title: settings ;offset:7"> <i class="icon-feather-settings"></i> </a>
                <a href="#"> <i class="uil-ellipsis-v"></i> </a>
                <a href="#" class="uk-hidden@s"> <button class="uk-offcanvas-close uk-close" type="button"
                        uk-close> </button> </a>
            </div>

            <h2> Chats </h2>
        </div>

        <div class="sidebar-chat-search" hidden>
            <input type="text" class="uk-input" placeholder="Search in Messages">
            <span class="btn-close"
                uk-toggle="target: .sidebar-chat-search; animation: uk-animation-slide-top-small"> <i
                    class="icon-feather-x"></i> </span>
        </div>

        <ul class="uk-child-width-expand sidebar-chat-tabs" uk-tab>
            <li class="uk-active"><a href="#">Users</a></li>
            <li><a href="#">Groups</a></li>
        </ul>

        <a href="#">
            <div class="contact-list">
                <div class="contact-list-media"> <img src="simplest/images/avatars/avatar-2.jpg" alt="">
                    <span class="online-dot"></span> </div>
                <h5> James Lewis </h5>
            </div>
        </a>

        <a href="#">
            <div class="contact-list">
                <div class="contact-list-media"> <img src="simplest/images/avatars/avatar-1.jpg" alt="">
                    <span class="online-dot"></span> </div>
                <h5> Erica Jones </h5>
            </div>
        </a>

        <a href="#">
            <div class="contact-list">
                <div class="contact-list-media"> <img src="simplest/images/avatars/avatar-7.jpg" alt="">
                    <span class="offline-dot"></span> </div>
                <h5> Stella Johnson </h5>
            </div>
        </a>

        <a href="#">
            <div class="contact-list">
                <div class="contact-list-media"> <img src="simplest/images/avatars/avatar-5.jpg" alt="">
                    <span class="offline-dot"></span> </div>
                <h5> Alex Dolgove </h5>
            </div>
        </a>
        <a href="#">
            <div class="contact-list">
                <div class="contact-list-media"> <img src="simplest/images/avatars/avatar-2.jpg" alt="">
                    <span class="online-dot"></span> </div>
                <h5> James Lewis </h5>
            </div>
        </a>
        <a href="#">
            <div class="contact-list">
                <div class="contact-list-media"> <img src="simplest/images/avatars/avatar-4.jpg" alt="">
                    <span class="online-dot"></span> </div>
                <h5> Erica Jones </h5>
            </div>
        </a>
        <a href="#">
            <div class="contact-list">
                <div class="contact-list-media"> <img src="simplest/images/avatars/avatar-3.jpg" alt="">
                    <span class="offline-dot"></span> </div>
                <h5> Stella Johnson </h5>
            </div>
        </a>
        <a href="#">
            <div class="contact-list">
                <div class="contact-list-media"> <img src="simplest/images/avatars/avatar-5.jpg" alt="">
                    <span class="offline-dot"></span> </div>
                <h5> Alex Dolgove </h5>
            </div>
        </a>
        <a href="#">
            <div class="contact-list">
                <div class="contact-list-media"> <img src="simplest/images/avatars/avatar-2.jpg" alt="">
                    <span class="online-dot"></span> </div>
                <h5> James Lewis </h5>
            </div>
        </a>
        <a href="#">
            <div class="contact-list">
                <div class="contact-list-media"> <img src="simplest/images/avatars/avatar-4.jpg" alt="">
                    <span class="online-dot"></span> </div>
                <h5> Erica Jones </h5>
            </div>
        </a>
        <a href="#">
            <div class="contact-list">
                <div class="contact-list-media"> <img src="simplest/images/avatars/avatar-3.jpg" alt="">
                    <span class="offline-dot"></span> </div>
                <h5> Stella Johnson </h5>
            </div>
        </a>
        <a href="#">
            <div class="contact-list">
                <div class="contact-list-media"> <img src="simplest/images/avatars/avatar-5.jpg" alt="">
                    <span class="offline-dot"></span> </div>
                <h5> Alex Dolgove </h5>
            </div>
        </a>



    </div>
</div>


<div class="story-pop uk-animation-slide-bottom-small">
    <div class="story-side uk-width-1-4@s">



        <div class="uk-flex uk-flex-between uk-flex-middle mb-2">
            <h2 class="mb-0" style="font-weight: 700">All Story</h2>
            <a href="#" class="text-primary"> Setting</a>
        </div>

        <div class="story-side-innr" data-simplebar>
            <h4 class="mb-1"> Your Story</h4>
            <ul class="story-side-list">
                <li>
                    <a href="#">
                        <div class="story-user-media">
                            <img src="simplest/images/avatars/avatar-1.jpg" alt="">
                        </div>
                        <div class="story-user-innr">
                            <h5> Stella Johnson </h5>
                            <p> Share a photo or video</p>
                        </div>
                        <div class="add-story-btn">
                            <i class="uil-plus"></i>
                        </div>
                    </a>

                </li>
            </ul>

            <div class="uk-flex uk-flex-between uk-flex-middle my-3">
                <h4 class="m-0"> Friends Story</h4>
                <a href="#" class="text-primary"> See all</a>
            </div>
            <ul class="story-side-list"
                uk-switcher="connect: #story-slider-switcher ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium">

                <li>
                    <a href="#">
                        <div class="story-user-media">
                            <img src="simplest/images/avatars/avatar-1.jpg" alt="">
                        </div>
                        <div class="story-user-innr">
                            <h5> James Lewis </h5>
                            <p> <span class="story-count"> 2 new </span> <span class="story-time-ago"> 4hr ago
                                </span></p>
                        </div>
                    </a>

                </li>
                <li>
                    <a href="#">
                        <div class="story-user-media">
                            <img src="simplest/images/avatars/avatar-2.jpg" alt="">
                        </div>
                        <div class="story-user-innr">
                            <h5> Stella Johnson </h5>
                            <p> <span class="story-count"> 3 new </span> <span class="story-time-ago"> 1hr ago
                                </span></p>
                        </div>
                    </a>

                </li>
                <li>
                    <a href="#">
                        <div class="story-user-media">
                            <img src="simplest/images/avatars/avatar-4.jpg" alt="">
                        </div>
                        <div class="story-user-innr">
                            <h5> Erica Jones </h5>
                            <p> <span class="story-count"> 2 new </span> <span class="story-time-ago"> 3hr ago
                                </span></p>
                        </div>
                    </a>

                </li>
                <li>
                    <a href="#">
                        <div class="story-user-media">
                            <img src="simplest/images/avatars/avatar-7.jpg" alt="">
                        </div>
                        <div class="story-user-innr">
                            <h5> Adrian Mohani </h5>
                            <p> <span class="story-count"> 1 new </span> <span class="story-time-ago"> 4hr ago
                                </span></p>
                        </div>
                    </a>

                </li>
                <li>
                    <a href="#">
                        <div class="story-user-media">
                            <img src="simplest/images/avatars/avatar-5.jpg" alt="">
                        </div>
                        <div class="story-user-innr">
                            <h5> Alex Dolgove </h5>
                            <p> <span class="story-count"> 3 new </span> <span class="story-time-ago"> 7hr ago
                                </span></p>
                        </div>
                    </a>

                </li>
                <li>
                    <a href="#">
                        <div class="story-user-media">
                            <img src="simplest/images/avatars/avatar-1.jpg" alt="">
                        </div>
                        <div class="story-user-innr">
                            <h5> Stella Johnson </h5>
                            <p> <span class="story-count"> 2 new </span> <span class="story-time-ago"> 8hr ago
                                </span></p>
                        </div>
                    </a>

                </li>
                <li>
                    <a href="#">
                        <div class="story-user-media">
                            <img src="simplest/images/avatars/avatar-2.jpg" alt="">
                        </div>
                        <div class="story-user-innr">
                            <h5> Erica Jones </h5>
                            <p> <span class="story-count"> 3 new </span> <span class="story-time-ago"> 10hr ago
                                </span></p>
                        </div>
                    </a>

                </li>
                <li>
                    <a href="#">
                        <div class="story-user-media">
                            <img src="simplest/images/avatars/avatar-5.jpg" alt="">
                        </div>
                        <div class="story-user-innr">
                            <h5> Alex Dolgove </h5>
                            <p> <span class="story-count"> 3 new </span> <span class="story-time-ago"> 14hr ago
                                </span></p>
                        </div>
                    </a>

                </li>

            </ul>

        </div>

    </div>
    <div class="story-content">

        <!-- close button-->
        <span class="story-btn-close" uk-toggle="target: body ; cls: is-open"
            uk-tooltip="title:Close story ; pos: left "></span>

        <div class="story-content-innr">

            <ul id="story-slider-switcher" class="uk-switcher">

                <li>

                    <a href="#" uk-switcher-item="previous"
                        class="uk-position-center-left-out uk-position-medium slidenav-prev"></a>
                    <a href="#" uk-switcher-item="next"
                        class="uk-position-center-right-out uk-position-medium slidenav-next"></a>

                    <div class="uk-position-relative uk-visible-toggle" uk-slider>

                        <!-- navigation -->
                        <ul class="uk-slider-nav uk-dotnav story-slider-nav"></ul>

                        <!-- Story posted image -->
                        <ul class="uk-slider-items uk-child-width-1-1 story-slider">
                            <li>
                                <div
                                    class="story-slider-image uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                                    <img src="simplest/images/post/img-1.jpg" alt="">
                                </div>
                            </li>
                            <li>
                                <div
                                    class="story-slider-image uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                                    <img src="simplest/images/avatars/avatar-lg-1.jpg" alt="">
                                </div>
                            </li>
                        </ul>


                    </div>


                </li>

                <li>

                    <!-- slider navigation -->

                    <a href="#" uk-switcher-item="previous"
                        class="uk-position-center-left-out uk-position-medium slidenav-prev"></a>
                    <a href="#" uk-switcher-item="next"
                        class="uk-position-center-right-out uk-position-medium slidenav-next"></a>

                    <div class="uk-position-relative uk-visible-toggle" uk-slider>

                        <!-- navigation -->
                        <ul class="uk-slider-nav uk-dotnav story-slider-nav"></ul>

                        <!-- Story posted image -->
                        <ul class="uk-slider-items uk-child-width-1-1 story-slider">
                            <li>
                                <div class="story-slider-image">
                                    <img src="simplest/images/post/img-3.jpg" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="story-slider-image">
                                    <img src="simplest/images/avatars/avatar-lg-3.jpg" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="story-slider-image">
                                    <img src="simplest/images/avatars/avatar-lg-2.jpg" alt="">
                                </div>
                            </li>
                        </ul>

                    </div>

                </li>

                <li>

                    <!-- slider navigation -->

                    <a href="#" uk-switcher-item="previous"
                        class="uk-position-center-left-out uk-position-medium slidenav-prev"></a>
                    <a href="#" uk-switcher-item="next"
                        class="uk-position-center-right-out uk-position-medium slidenav-next"></a>

                    <div class="uk-position-relative uk-visible-toggle" uk-slider>
                        <!-- navigation -->
                        <ul class="uk-slider-nav uk-dotnav story-slider-nav"></ul>

                        <!-- Story posted image -->
                        <ul class="uk-slider-items uk-child-width-1-1 story-slider">
                            <li>
                                <div
                                    class="story-slider-image uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                                    <img src="simplest/images/avatars/avatar-lg-4.jpg" alt="">
                                </div>

                            </li>
                        </ul>
                    </div>

                </li>

                <li>

                    <!-- slider navigation -->

                    <a href="#" uk-switcher-item="previous"
                        class="uk-position-center-left-out uk-position-medium slidenav-prev"></a>
                    <a href="#" uk-switcher-item="next"
                        class="uk-position-center-right-out uk-position-medium slidenav-next"></a>

                    <div class="uk-position-relative uk-visible-toggle" uk-slider>
                        <!-- navigation -->
                        <ul class="uk-slider-nav uk-dotnav story-slider-nav"></ul>

                        <!-- Story posted image -->
                        <ul class="uk-slider-items uk-child-width-1-1 story-slider">
                            <li>
                                <div
                                    class="story-slider-image uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                                    <img src="simplest/images/avatars/avatar-lg-4.jpg" alt="">
                                </div>

                            </li>
                        </ul>
                    </div>

                </li>

                <li>

                    <!-- slider navigation -->

                    <a href="#" uk-switcher-item="previous"
                        class="uk-position-center-left-out uk-position-medium slidenav-prev"></a>
                    <a href="#" uk-switcher-item="next"
                        class="uk-position-center-right-out uk-position-medium slidenav-next"></a>

                    <div class="uk-position-relative uk-visible-toggle" uk-slider>
                        <!-- navigation -->
                        <ul class="uk-slider-nav uk-dotnav story-slider-nav"></ul>

                        <!-- Story posted image -->
                        <ul class="uk-slider-items uk-child-width-1-1 story-slider">
                            <li>
                                <div
                                    class="story-slider-image uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                                    <img src="simplest/images/avatars/avatar-lg-4.jpg" alt="">
                                </div>

                            </li>
                        </ul>
                    </div>

                </li>

                <li>

                    <!-- slider navigation -->

                    <a href="#" uk-switcher-item="previous"
                        class="uk-position-center-left-out uk-position-medium slidenav-prev"></a>
                    <a href="#" uk-switcher-item="next"
                        class="uk-position-center-right-out uk-position-medium slidenav-next"></a>

                    <div class="uk-position-relative uk-visible-toggle" uk-slider>
                        <!-- navigation -->
                        <ul class="uk-slider-nav uk-dotnav story-slider-nav"></ul>

                        <!-- Story posted image -->
                        <ul class="uk-slider-items uk-child-width-1-1 story-slider">
                            <li>
                                <div
                                    class="story-slider-image uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                                    <img src="simplest/images/avatars/avatar-lg-4.jpg" alt="">
                                </div>

                            </li>
                        </ul>
                    </div>

                </li>

                <li>

                    <!-- slider navigation -->

                    <a href="#" uk-switcher-item="previous"
                        class="uk-position-center-left-out uk-position-medium slidenav-prev"></a>
                    <a href="#" uk-switcher-item="next"
                        class="uk-position-center-right-out uk-position-medium slidenav-next"></a>

                    <div class="uk-position-relative uk-visible-toggle" uk-slider>
                        <!-- navigation -->
                        <ul class="uk-slider-nav uk-dotnav story-slider-nav"></ul>

                        <!-- Story posted image -->
                        <ul class="uk-slider-items uk-child-width-1-1 story-slider">
                            <li>
                                <div
                                    class="story-slider-image uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                                    <img src="simplest/images/avatars/avatar-lg-4.jpg" alt="">
                                </div>

                            </li>
                        </ul>
                    </div>

                </li>

                <li>

                    <!-- slider navigation -->

                    <a href="#" uk-switcher-item="previous"
                        class="uk-position-center-left-out uk-position-medium slidenav-prev"></a>
                    <a href="#" uk-switcher-item="next"
                        class="uk-position-center-right-out uk-position-medium slidenav-next"></a>

                    <div class="uk-position-relative uk-visible-toggle" uk-slider>
                        <!-- navigation -->
                        <ul class="uk-slider-nav uk-dotnav story-slider-nav"></ul>

                        <!-- Story posted image -->
                        <ul class="uk-slider-items uk-child-width-1-1 story-slider">
                            <li>
                                <div
                                    class="story-slider-image uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                                    <img src="simplest/images/avatars/avatar-lg-4.jpg" alt="">
                                </div>

                            </li>
                        </ul>
                    </div>

                </li>

                <li>

                    <!-- slider navigation -->

                    <a href="#" uk-switcher-item="previous"
                        class="uk-position-center-left-out uk-position-medium slidenav-prev"></a>
                    <a href="#" uk-switcher-item="next"
                        class="uk-position-center-right-out uk-position-medium slidenav-next"></a>

                    <div class="uk-position-relative uk-visible-toggle" uk-slider>
                        <!-- navigation -->
                        <ul class="uk-slider-nav uk-dotnav story-slider-nav"></ul>

                        <!-- Story posted image -->
                        <ul class="uk-slider-items uk-child-width-1-1 story-slider">
                            <li>
                                <div
                                    class="story-slider-image uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                                    <img src="simplest/images/avatars/avatar-lg-4.jpg" alt="">
                                </div>

                            </li>
                        </ul>
                    </div>

                </li>

                <li>

                    <!-- slider navigation -->

                    <a href="#" uk-switcher-item="previous"
                        class="uk-position-center-left-out uk-position-medium slidenav-prev"></a>
                    <a href="#" uk-switcher-item="next"
                        class="uk-position-center-right-out uk-position-medium slidenav-next"></a>

                    <div class="uk-position-relative uk-visible-toggle" uk-slider>
                        <!-- navigation -->
                        <ul class="uk-slider-nav uk-dotnav story-slider-nav"></ul>

                        <!-- Story posted image -->
                        <ul class="uk-slider-items uk-child-width-1-1 story-slider">
                            <li>
                                <div
                                    class="story-slider-image uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                                    <img src="simplest/images/avatars/avatar-lg-4.jpg" alt="">
                                </div>

                            </li>
                        </ul>
                    </div>

                </li>

                <li>

                    <!-- slider navigation -->

                    <a href="#" uk-switcher-item="previous"
                        class="uk-position-center-left-out uk-position-medium slidenav-prev"></a>
                    <a href="#" uk-switcher-item="next"
                        class="uk-position-center-right-out uk-position-medium slidenav-next"></a>

                    <div class="uk-position-relative uk-visible-toggle" uk-slider>
                        <!-- navigation -->
                        <ul class="uk-slider-nav uk-dotnav story-slider-nav"></ul>

                        <!-- Story posted image -->
                        <ul class="uk-slider-items uk-child-width-1-1 story-slider">
                            <li>
                                <div
                                    class="story-slider-image uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                                    <img src="simplest/images/avatars/avatar-lg-4.jpg" alt="">
                                </div>

                            </li>
                        </ul>
                    </div>

                </li>

            </ul>







        </div>




    </div>
</div>
