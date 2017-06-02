<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>S. Haider Hassan - @yield('title')</title>
    <meta name="description" content="Pakistanihaider.me is my resume website" />
    <meta name="keywords" content="pakistanihaider, resume, Syed Haider Hassan, resume, cv, portfolio, developer, php, bootstrap, html5, creative, senior php developer, modern, angular js," />
    <meta name="author" content="pakistanihaider"/>

    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="{{ mix('/assets/css/all.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ mix('/assets/css/style.css') }}" />

</head>

<body id="body" data-ng-app="contactApp">

<!--Preloader-->
<div class="preloader-it">
    <div class="mdl-spinner mdl-js-spinner is-active is-upgraded" data-upgraded=",MaterialSpinner"><div class="mdl-spinner__layer mdl-spinner__layer-1"><div class="mdl-spinner__circle-clipper mdl-spinner__left"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__gap-patch"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__circle-clipper mdl-spinner__right"><div class="mdl-spinner__circle"></div></div></div><div class="mdl-spinner__layer mdl-spinner__layer-2"><div class="mdl-spinner__circle-clipper mdl-spinner__left"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__gap-patch"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__circle-clipper mdl-spinner__right"><div class="mdl-spinner__circle"></div></div></div><div class="mdl-spinner__layer mdl-spinner__layer-3"><div class="mdl-spinner__circle-clipper mdl-spinner__left"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__gap-patch"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__circle-clipper mdl-spinner__right"><div class="mdl-spinner__circle"></div></div></div><div class="mdl-spinner__layer mdl-spinner__layer-4"><div class="mdl-spinner__circle-clipper mdl-spinner__left"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__gap-patch"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__circle-clipper mdl-spinner__right"><div class="mdl-spinner__circle"></div></div></div></div>
</div>
<!--/Preloader-->

<!--Main Wrapper-->
<div class="main-wrapper">

    <!--Bg Image-->
    <div class="bg-struct bg-img"></div>
    <!--/Bg Image-->

    <div class="mdl-js-layout mdl-layout--fixed-header">

        <!--Top Header-->
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row mdl-scroll-spy-1">
                <!-- Title -->
                <a href="index.html"><span class="mdl-layout-title">Syed Haider Hassan</span></a>
                <div class="mdl-layout-spacer"></div>
                <ul class="nav mdl-navigation mdl-layout--large-screen-only">
                    <li><a class="mdl-navigation__link" data-scroll href="#body">about</a></li>
                    <li><a class="mdl-navigation__link" data-scroll href="#skills_sec">skills</a></li>
                    <li><a class="mdl-navigation__link" data-scroll href="#portfolio_sec">portfolio</a></li>
                    <li><a class="mdl-navigation__link" data-scroll href="#experience_sec">experience</a></li>
                    <li><a class="mdl-navigation__link" data-scroll href="#education_sec">education</a></li>
                    <li><span id="blog_drp" class="mdl-navigation__link">blog</span>
                        <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
                            data-mdl-for="blog_drp">
                            <li class="mdl-menu__item"><a href="blog-list.html">Blog List</a></li>
                            <li class="mdl-menu__item"><a href="image-blog-post.html">Image Blog Post</a></li>
                            <li class="mdl-menu__item"><a href="gallery-blog-post.html">Gallery Blog Post</a></li>
                            <li class="mdl-menu__item"><a href="youtube-blog-post.html">Youtube Blog Post</a></li>
                            <li class="mdl-menu__item"><a href="vimeo-blog-post.html">Vimeo Blog Post</a></li>
                            <li class="mdl-menu__item"><a href="audio-blog-post.html">Audio Blog Post</a></li>
                        </ul>
                    </li>
                    <li><a class="mdl-navigation__link" data-scroll href="#references_sec">references</a></li>
                    <li><a class="mdl-navigation__link" data-scroll href="#contact_sec">contact</a></li>
                </ul>
                <!-- Right aligned menu below button -->
                <button id="demo-menu-lower-right"
                        class="mdl-button mdl-js-button mdl-button--icon ver-more-btn">
                    <i class="material-icons">more_vert</i>
                </button>

                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                    data-mdl-for="demo-menu-lower-right">
                    <li class="mdl-menu__item"><a href="#"><i class="zmdi zmdi-download font-red pr-10"></i>Download CV</a></li>
                    <li class="mdl-menu__item"><a href="mailto:benjaminsirje49@company.com"><i class="zmdi zmdi-email-open font-green pr-10"></i>Contact Me</a></li>
                    <li class="mdl-menu__item"><a href="callto:12345678910"><i class="zmdi zmdi-phone  font-blue  pr-10"></i>+1 234 567 89 10</a></li>
                </ul>
            </div>
        </header>
        <!--/Top Header-->

        <!--Left Sidebar-->
        <div class="mdl-layout__drawer">
            <div class="nicescroll-bar">
                <div class="drawer-profile-wrap">
                    <div class="candidate-img-drawer mt-25 mb-20"></div>
                    <span class="candidate-name block mb-10 text-center">benjamin sirge</span>
                    <ul class="social-icons  mb-30">
                        <li>
                            <a class="facebook-link" href="#">
                                <i id="tt11" class="zmdi zmdi-facebook"></i>
                                <div class="mdl-tooltip" data-mdl-for="tt11">
                                    facebook
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="twitter-link" href="#">
                                <i id="tt12" class="zmdi zmdi-twitter"></i>
                                <div class="mdl-tooltip" data-mdl-for="tt12">
                                    twitter
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="linkedin-link" href="#">
                                <i id="tt13" class="zmdi zmdi-linkedin"></i>
                                <div class="mdl-tooltip" data-mdl-for="tt13">
                                    linkedin
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dribbble-link" href="#">
                                <i id="tt14" class="zmdi zmdi-dribbble"></i>
                                <div class="mdl-tooltip" data-mdl-for="tt14">
                                    dribbble
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="instagram-link" href="#">
                                <i id="tt15" class="zmdi zmdi-instagram"></i>
                                <div class="mdl-tooltip" data-mdl-for="tt15">
                                    instagram
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="mdl-scroll-spy-2">
                    <ul class="mdl-navigation">
                        <li>
                            <a class="mdl-navigation__link border-top-sep" data-scroll href="#body">
                                <i class="zmdi zmdi-border-color pr-15"></i>
                                <span class="font-capitalize">about</span>
                            </a>
                        </li>
                        <li>
                            <a class="mdl-navigation__link border-top-sep" data-scroll href="#skills_sec">
                                <i class="zmdi zmdi-cutlery pr-15"></i>
                                <span class="font-capitalize">skills</span>
                            </a>
                        </li>
                        <li>
                            <a class="mdl-navigation__link border-top-sep" data-scroll href="#portfolio_sec">
                                <i class="zmdi zmdi-case pr-15"></i>
                                <span class="font-capitalize">portfolio</span>
                            </a>
                        </li>
                        <li>
                            <a class="mdl-navigation__link border-top-sep" data-scroll href="#experience_sec">
                                <i class="zmdi zmdi-shield-check pr-15"></i>
                                <span class="font-capitalize">experience</span>
                            </a>
                        </li>
                        <li>
                            <a class="mdl-navigation__link border-top-sep" data-scroll href="#education_sec">
                                <i class="zmdi zmdi-library pr-15"></i>
                                <span class="font-capitalize">education</span>
                            </a>
                        </li>

                        <li>
                            <a class="mdl-navigation__link border-top-sep" href="javascript:void(0);" data-toggle="collapse" data-target="#blog_dr">
                                <i class="zmdi zmdi-tag-more pr-15"></i>
                                <span class="font-capitalize">blog</span>
                            </a>
                            <ul id="blog_dr" class="collapse collapse-level-1">
                                <li><a class="mdl-navigation__link border-top-sep" href="blog-list.html">Blog List</a></li>
                                <li><a class="mdl-navigation__link border-top-sep" href="image-blog-post.html">Image Blog Post</a></li>
                                <li><a class="mdl-navigation__link border-top-sep" href="gallery-blog-post.html">Gallery Blog Post</a></li>
                                <li><a class="mdl-navigation__link border-top-sep" href="youtube-blog-post.html">Youtube Blog Post</a></li>
                                <li><a class="mdl-navigation__link border-top-sep" href="vimeo-blog-post.html">Vimeo Blog Post</a></li>
                                <li><a class="mdl-navigation__link border-top-sep" href="audio-blog-post.html">Audio Blog Post</a></li>
                            </ul>
                        </li>

                        <li>
                            <a class="mdl-navigation__link border-top-sep" data-scroll href="#references_sec">
                                <i class="zmdi zmdi-bookmark pr-15"></i>
                                <span class="font-capitalize">references</span>
                            </a>
                        </li>

                        <li>
                            <a class="mdl-navigation__link border-top-sep border-bottom-sep" 	data-scroll  href="#contact_sec">
                                <i class="zmdi zmdi-email pr-15"></i>
                                <span class="font-capitalize">contact</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="drawer-footer mt-50 mb-30 text-center">
                    <p class="font-12 mt-10">Hencework &copy; 2017.</p>
                </div>
            </div>
        </div>
        <!--/Left Sidebar-->

        <!--Main Content-->
        <div class="main-content relative">
            @yield('content')
        </div>
        <!--/Main Content-->

    </div>
</div>
<!--/Main Wrapper-->

<!-- Scripts -->
<script src="assets/js/jquery-1.12.4.min.js"></script>
<script src="assets/js/angular.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/material.min.js"></script>
<script src="assets/js/jQuery.appear.js"></script>
<script src="assets/js/app.js"></script>
<script src="assets/js/controllers.js"></script>
<script src="assets/js/smooth-scroll.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/lightgallery-all.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/froogaloop2.min.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/https://maps.googleapis.com/maps/api/js?key=AIzaSyBxXt2P7-U38bK0xEFIT-ebZJ1ngK8wjww"></script>
<script src="assets/js/init.js"></script>
</body>
</html>
