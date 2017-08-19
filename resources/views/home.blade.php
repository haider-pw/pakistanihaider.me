@extends('layouts.resume')

@section('title', 'Resume')

@section('content')
    <div class="container">
        <!--About Sec-->
        <section class="about-sec mt-180 mt-sm-120  mb-30">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mdl-card mdl-shadow--2dp">
                        <div class="row">
                            <div class="col-md-5 col-xs-12 mb-30">
                                <div class="candidate-img mb-35"></div>
                                <ul class="social-icons">
                                    <li>
                                        <a class="facebook-link" href="#">
                                            <i id="tt1" class="zmdi zmdi-facebook"></i>
                                            <div class="mdl-tooltip" data-mdl-for="tt1">
                                                facebook
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="twitter-link" href="#">
                                            <i id="tt2" class="zmdi zmdi-twitter"></i>
                                            <div class="mdl-tooltip" data-mdl-for="tt2">
                                                twitter
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="linkedin-link" href="#">
                                            <i id="tt3" class="zmdi zmdi-linkedin"></i>
                                            <div class="mdl-tooltip" data-mdl-for="tt3">
                                                linkedin
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dribbble-link" href="#">
                                            <i id="tt4" class="zmdi zmdi-dribbble"></i>
                                            <div class="mdl-tooltip" data-mdl-for="tt4">
                                                dribbble
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="instagram-link" href="#">
                                            <i id="tt5" class="zmdi zmdi-instagram"></i>
                                            <div class="mdl-tooltip" data-mdl-for="tt5">
                                                instagram
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-7 col-xs-12">
                                <div class="info-wrap">
                                    <h1>{{!empty($data['activeResume']->user->name)?$data['activeResume']->user->name:'Your Name'}}</h1>
                                    <h5 class="mt-20 font-grey">{{!empty($data['activeResume']->position)?$data['activeResume']->position:'Your Name'}}</h5>
                                    <div class="mt-30">
                                        <a id="download_cv" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  bg-green font-white mr-10" href="{{route('downloadResume')}}">download cv</a>
                                        <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect bg-blue font-white" href="#contact_sec" data-scroll>contact</a>
                                    </div>
                                </div>
                                <ul class="profile-wrap mt-50">
                                    <li>
                                        <div class="profile-title">age</div>
                                        <div class="profile-desc">26</div>
                                    </li>
                                    <li>
                                        <div class="profile-title">address</div>
                                        <div class="profile-desc">
                                            Islamabad, Pakistan
                                        </div>
                                    </li>
                                    <li>
                                        <div class="profile-title">email</div>
                                        <div class="profile-desc">
                                            haideritx@gmail.com
                                        </div>
                                    </li>
                                    <li>
                                        <div class="profile-title">phone</div>
                                        <div class="profile-desc">
                                            +92 334 8123456
                                        </div>
                                    </li>
                                    <li>
                                        <div class="profile-title">freelance</div>
                                        <div class="profile-desc relative">Available
                                            <i id="datepickopn" class="zmdi zmdi-calendar-check font-green pl-5"></i>
                                            <div id='datepicker1' class='datepicker'></div>
                                        </div>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/About Sec-->

        @if(isset($data['blocks']['skills_boxes']) && $data['blocks']['skills_boxes'] == '1')
        <!--Skills Sec-->
        <section id="skills_sec" class="skills-sec sec-pad-top-sm">
            <div class="row">
                @foreach($data['skillGroups'] as $skillGroup)
                    <div class="col-sm-6 mb-30">
                        <h2 class="mb-30">{{$skillGroup->label}}</h2>
                        <div class="mdl-card mdl-shadow--2dp">
                            @foreach($data['activeResume']->user->skills as $skill)
                                @if($skillGroup->id === $skill->source->skill_group_id)
                                    <div class="mb-30">
                                        <span class="progress-cat">{{$skill->source->label}}</span>
                                        <div class="progress-bar-graph">
                                            <div class="progress-bar-wrap">
                                                <div class="bar-wrap {{percentageColor($skill->percentage,true)}}">
                                                    <span data-width="{{$skill->percentage}}"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <!--/Skills Sec-->
        @endif

        @if(isset($data['blocks']['what_i_do']) && $data['blocks']['what_i_do'] == '1')
        <!--Profile Sec-->
        <section id="profile_sec" class="profile-sec sec-pad-top-sm">
            <h2 class="mb-30">what i do</h2>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 mb-30">
                    <div class="mdl-card mdl-shadow--2dp">
                        <i class="zmdi zmdi-format-color-fill font-blue profile-icon"></i>
                        <h4 class="mb-15">user interface</h4>
                        <p>Select/Design/Deploy the User Interface that is easier to use.</p>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 mb-30">
                    <div class="mdl-card mdl-shadow--2dp">
                        <i class="zmdi zmdi-code-setting font-black profile-icon"></i>
                        <h4 class="mb-15">coding</h4>
                        <p>Do the backend coding so you can have all the fun on the front.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 mb-30">
                    <div class="mdl-card mdl-shadow--2dp">
                        <i class="zmdi zmdi-bug font-red profile-icon"></i>
                        <h4 class="mb-15">Testing/Integrations</h4>
                        <p>Don't you worry, i will kill bugs with my tests that are causing errors.</p>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 mb-30">
                    <div class="mdl-card mdl-shadow--2dp">
                        <i class="zmdi zmdi-grain font-red profile-icon"></i>
                        <h4 class="mb-15">strategy</h4>
                        <p>Easy customizable framework using bootstrap sass.</p>

                    </div>
                </div>
            </div>
        </section>
        <!--/Profile Sec-->
        @endif

        @if(isset($data['blocks']['portfolio']) && $data['blocks']['portfolio'] == '1')
        <!--Portfolio Sec-->
        <section id="portfolio_sec" class="portfolio-sec sec-pad-top-sm">
            <div class="mb-15">
                <h2 class="pull-left float-none-xs">portfolio</h2>
                <div class="filter-wrap pull-right float-none-xs">
                    <!-- Portfolio Filters -->
                    <ul id="filters">
                        <li><a id="all" href="#" data-filter="*" class="active">all</a></li>
                        <li><a href="#" data-filter=".branding">branding</a></li>
                        <li><a href="#" data-filter=".design">design</a></li>
                        <li><a href="#" data-filter=".photography">photo</a></li>
                        <li><a href="#" data-filter=".web">web</a></li>
                    </ul>
                    <!--/Portfolio Filters -->
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="gallery-wrap mb-30">
                <div class="portfolio-wrap project-gallery">
                    <ul id="portfolio" class="portf auto-construct  project-gallery" data-col="3">
                        <li  class="item mdl-card mdl-shadow--2dp pa-0 branding">
                            <div class="light-img-wrap mdl-card__title pa-0">
                                <img class="img-responsive" src="assets/img/gallery1.jpg"  alt="Image description" />
                                <div class="light-img-overlay"></div>
                                <span class="img-cap">good morning</span>
                            </div>
											<span class="bottom-links mdl-card__actions">
												<a id="goto_box_1" href="#"><i class="zmdi zmdi-eye"></i></a>
												<a href="project-detail.html"><i class="zmdi zmdi-format-subject"></i></a>
											</span>
                        </li>
                        <li class="item mdl-card mdl-shadow--2dp pa-0  photography">
                            <div class="light-img-wrap mdl-card__title pa-0">
                                <img class="img-responsive" src="assets/img/gallery2.jpg"  alt="Image description" />
                                <div class="light-img-overlay"></div>
                                <span class="img-cap">Grand Canyon</span>
                            </div>
											<span class="bottom-links mdl-card__actions">
												<a id="goto_box_2" href="#"><i class="zmdi zmdi-eye"></i></a>
												<a href="project-detail.html"><i class="zmdi zmdi-format-subject"></i></a>
											</span>
                        </li>
                        <li class="item mdl-card mdl-shadow--2dp pa-0 design">
                            <div class="light-img-wrap mdl-card__title pa-0">
                                <img class="img-responsive" src="assets/img/gallery3.jpg"  alt="Image description" />
                                <div class="light-img-overlay"></div>
                                <span class="img-cap">iceland</span>
                            </div>
											<span class="bottom-links mdl-card__actions">
												<a id="goto_box_3" href="#"><i class="zmdi zmdi-eye"></i></a>
												<a href="project-detail.html"><i class="zmdi zmdi-format-subject"></i></a>
											</span>
                        </li>
                        <li class="item mdl-card mdl-shadow--2dp pa-0 web">
                            <div class="light-img-wrap mdl-card__title pa-0">
                                <img class="img-responsive" src="assets/img/gallery4.jpg"  alt="Image description" />
                                <div class="light-img-overlay"></div>
                                <span class="img-cap">serenity</span>
                            </div>
											<span class="bottom-links mdl-card__actions">
												<a id="goto_box_4" href="#"><i class="zmdi zmdi-eye"></i></a>
												<a href="project-detail.html"><i class="zmdi zmdi-format-subject"></i></a>
											</span>
                        </li>

                        <li class="item mdl-card mdl-shadow--2dp pa-0 design">
                            <div class="light-img-wrap mdl-card__title pa-0">
                                <img class="img-responsive" src="assets/img/gallery5.jpg"  alt="Image description" />
                                <div class="light-img-overlay"></div>
                                <span class="img-cap">world seize day</span>
                            </div>
											<span class="bottom-links mdl-card__actions">
												<a id="goto_box_5" href="#"><i class="zmdi zmdi-eye"></i></a>
												<a href="project-detail.html"><i class="zmdi zmdi-format-subject"></i></a>
											</span>
                        </li>
                        <li class="item mdl-card mdl-shadow--2dp pa-0 branding">
                            <div class="light-img-wrap mdl-card__title pa-0">
                                <img class="img-responsive" src="assets/img/gallery6.jpg"  alt="Image description" />
                                <div class="light-img-overlay"></div>
                                <span class="img-cap">green bugs</span>
                            </div>
											<span class="bottom-links mdl-card__actions">
												<a id="goto_box_6" href="#"><i class="zmdi zmdi-eye"></i></a>
												<a href="project-detail.html"><i class="zmdi zmdi-format-subject"></i></a>
											</span>
                        </li>

                    </ul>
                    <!-- Hidden video div -->
                    <div style="display:none;" id="video1">
                        <video class="lg-video-object lg-html5 video-js vjs-default-skin" controls preload="none">
                            <source src="video/video1.mp4" type="video/webm">
                            <source src="video/video1.webm" type="video/webm">
                            Your browser does not support HTML5 video.
                        </video>
                    </div>
                </div>
            </div>
        </section>
        <!--/Portfolio Sec-->
        @endif

        @if(isset($data['blocks']['interests']) && $data['blocks']['interests'] == '1')
        <!--Interest Sec-->
        <section id="interest_sec" class="interest-sec sec-pad-top-sm">
            <h2 class="mb-30">interests</h2>
            <div class="row">
                <div class="col-md-2 col-sm-4 col-xs-6 mb-30">
                    <div class="mdl-card mdl-shadow--2dp text-center pa-20 pt-30 pb-30">
                        <i class="zmdi zmdi-radio"></i>
                        <span>music</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 mb-30">
                    <div class="mdl-card mdl-shadow--2dp text-center pa-20 pt-30 pb-30">
                        <i class="zmdi zmdi-smartphone-ring"></i>
                        <span>gaming</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 mb-30">
                    <div class="mdl-card mdl-shadow--2dp text-center pa-20 pt-30 pb-30">
                        <i class="zmdi zmdi-camera"></i>
                        <span>photography</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 mb-30">
                    <div class="mdl-card mdl-shadow--2dp text-center pa-20 pt-30 pb-30">
                        <i class="zmdi zmdi-library"></i>
                        <span>reading</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 mb-30">
                    <div class="mdl-card mdl-shadow--2dp text-center pa-20 pt-30 pb-30">
                        <i class="zmdi zmdi-airplane"></i>
                        <span>traveling</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 mb-30">
                    <div class="mdl-card mdl-shadow--2dp text-center pa-20 pt-30 pb-30">
                        <i class="zmdi zmdi-dribbble"></i>
                        <span>sports</span>
                    </div>
                </div>
            </div>
        </section>
        <!--/Interest Sec-->
        @endif

        @if(isset($data['blocks']['experience']) && $data['blocks']['experience'] == '1')
        <!--Experience Sec-->
        <section id="experience_sec" class="experience-sec sec-pad-top-sm">
            <h2 class="mb-30">experience</h2>
            <div class="timeline-wrap  overflow-hide mb-30">
                <ul class="timeline">
                    <li class="timeline-inverted">
                        <div class="timeline-badge">
                            <i class="zmdi zmdi-n-4-square font-red"></i>
                        </div>
                        <div class="timeline-panel mdl-card mdl-shadow--2dp  pt-30 pb-30 border-top-red">
                            <div class="timeline-heading">
                                <h4 class="mb-10">Sr. PHP Developer</h4>
                                <span class="duration mb-5">Jan 2013 — Sep 2014</span>
                                <span class="institution">Creativetech Solutions</span>
                            </div>
                            <div class="timeline-body">
                                <p class="mt-25">Currently working as a Senior PHP Develop, where i have responsibilities to work in different php frameworks.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge">
                            <i class="zmdi zmdi-n-3-square font-blue"></i>
                        </div>
                        <div class="timeline-panel mdl-card mdl-shadow--2dp pt-30 pb-30 border-top-blue">
                            <div class="timeline-heading">
                                <h4 class="mb-10">Sr. PHP Developer</h4>
                                <span class="duration mb-5">Dec 2014 - April 2016</span>
                                <span class="institution">Parexons</span>
                            </div>
                            <div class="timeline-body">
                                <p class="mt-25">Did work as a Senior PHP Developer,  where i had responsibilities to work on different php frameworks (Codeigniter/Laravel/Custom etc..)</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-badge">
                            <i class="zmdi zmdi-n-2-square font-green"></i>
                        </div>
                        <div class="timeline-panel mdl-card mdl-shadow--2dp  pt-30 pb-30 border-top-green">
                            <div class="timeline-heading">
                                <h4 class="mb-10">Sr. PHP Developer & Designing Team Lead</h4>
                                <span class="duration mb-5">Jan 2013 — Sep 2014</span>
                                <span class="institution">Smart Bakhtar Solutions</span>
                            </div>
                            <div class="timeline-body">
                                <p class="mt-25">Started my career as a designing Team Lead, but continuous learning and working in php projects, i have been assigned a role of Sr. PHP Developer. Did work on Dasline ERP as a Sr. PHP Developer.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge">
                            <i class="zmdi zmdi-n-1-square font-yellow"></i>
                        </div>
                        <div class="timeline-panel mdl-card mdl-shadow--2dp pt-30 pb-30 border-top-yellow">
                            <div class="timeline-heading">
                                <h4 class="mb-10">Graphic Designer</h4>
                                <span class="duration mb-5">June 2012 – Dec 2012</span>
                                <span class="institution">Telic Technologies</span>
                            </div>
                            <div class="timeline-body">
                                <p class="mt-25">Did my 6 months Internship program in Telic Technologies as a Web Designer, Graphic Designer and Web Developer, Under Government funded foundation.</p>
                            </div>
                        </div>
                    </li>
                    <li class="clearfix no-float"></li>
                </ul>
            </div>
        </section>
        <!--/Experience Sec-->
        @endif

        @if(isset($data['blocks']['education']) && $data['blocks']['education'] == '1')
        <!--Education Sec-->
        <section id="education_sec" class="education-sec sec-pad-top-sm">
            <h2 class="mb-30">education</h2>
            <div class="timeline-wrap overflow-hide mb-30">
                <ul class="timeline">
                    <li>
                        <div class="timeline-badge bg-blue no-icon"></div>
                        <div class="timeline-panel mdl-card mdl-shadow--2dp pt-30 pb-30 border-top-blue">
                            <div class="timeline-heading">
                                <h4 class="mb-10">MS in Software Engineering</h4>
                                <span class="duration mb-5">2015 - 2017</span>
                                <span class="institution">Abasyn University</span>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-badge bg-green no-icon"></div>
                        <div class="timeline-panel mdl-card mdl-shadow--2dp  pt-30 pb-30 border-top-green">
                            <div class="timeline-heading">
                                <h4 class="mb-10">Bachelor Of Software Engineering</h4>
                                <span class="duration mb-5">2008 - 2012</span>
                                <span class="institution">City University of Science and Information Technology</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge bg-yellow no-icon"></div>
                        <div class="timeline-panel mdl-card mdl-shadow--2dp pt-30 pb-30 border-top-yellow">
                            <div class="timeline-heading">
                                <h4 class="mb-10">Faculty of Computer Science (FCS) </h4>
                                <span class="duration mb-5">2006 - 2008</span>
                                <span class="institution">Peshawar Model Degree College</span>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-badge bg-red no-icon"></div>
                        <div class="timeline-panel mdl-card mdl-shadow--2dp  pt-30 pb-30 border-top-red">
                            <div class="timeline-heading">
                                <h4 class="mb-10">Secondary School Certificate (SSC)</h4>
                                <span class="duration mb-5">Completed in 2006</span>
                                <span class="institution">Peshawar Model School</span>
                            </div>
                        </div>
                    </li>
                    <li class="clearfix no-float"></li>
                </ul>
            </div>
        </section>
        <!--/Education Sec-->
        @endif

        @if(isset($data['blocks']['blog']) && $data['blocks']['blog'] == '1')
        <!--Blog Sec-->
        <section id="blog_sec" class="blog-sec sec-pad-top-sm">
            <h2 class="mb-30">blog</h2>
            <div class="row">
                <div class="col-sm-4 mb-30">
                    <div class="mdl-card mdl-shadow--2dp pa-0">
                        <div class="mdl-card__title pa-0">
                            <div class="blog-img blog-1"></div>
                        </div>
                        <div class="mdl-card__supporting-text relative">
                            <span class="blog-cat">travel</span>
                            <a href="youtube-blog-post.html">
                                <h4 class="mt-15 mb-20">Fly High with youtube</h4>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eleifend lacinia...</p>
                            <a href="youtube-blog-post.html" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect bg-red mdl-shadow--8dp">
                                <i class="zmdi zmdi-youtube-play"></i>
                            </a>
                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                            <span class="blog-post-date inline-block">21.1.17</span>
                            <div class="mdl-layout-spacer"></div>
                            <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect mr-5">
                                <i class="zmdi zmdi-favorite"></i>
                            </button>
                            <button id ="share_menu_1" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                <i class="zmdi zmdi-share"></i>
                            </button>
                            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                data-mdl-for="share_menu_1">
                                <li class="mdl-menu__item">Facebook</li>
                                <li class="mdl-menu__item">Twitter</li>
                                <li class="mdl-menu__item">LinkedIn</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-30">
                    <div class="mdl-card mdl-shadow--2dp pa-0">
                        <div class="mdl-card__title pa-0">
                            <div class="blog-img blog-2"></div>
                        </div>
                        <div class="mdl-card__supporting-text relative">
                            <span class="blog-cat">photography</span>
                            <a href="image-blog-post.html">
                                <h4 class="mt-15 mb-20">Iceland live in images</h4>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eleifend lacinia...</p>
                            <a href="image-blog-post.html" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect bg-blue mdl-shadow--8dp">
                                <i class="zmdi zmdi-image-o"></i>
                            </a>
                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                            <span class="blog-post-date inline-block">15.1.17</span>
                            <div class="mdl-layout-spacer"></div>
                            <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect mr-5">
                                <i class="zmdi zmdi-favorite"></i>
                            </button>
                            <button id ="share_menu_2" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                <i class="zmdi zmdi-share"></i>
                            </button>
                            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                data-mdl-for="share_menu_2">
                                <li class="mdl-menu__item">Facebook</li>
                                <li class="mdl-menu__item">Twitter</li>
                                <li class="mdl-menu__item">LinkedIn</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-30">
                    <div class="mdl-card mdl-shadow--2dp pa-0">
                        <div class="mdl-card__title pa-0">
                            <div class="blog-img blog-3"></div>
                        </div>
                        <div class="mdl-card__supporting-text relative">
                            <span class="blog-cat">science</span>
                            <a href="gallery-blog-post.html">
                                <h4 class="mt-15 mb-20">Grand canyon mysteries</h4>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eleifend lacinia...</p>
                            <a href="gallery-blog-post.html" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect bg-green mdl-shadow--8dp">
                                <i class="zmdi zmdi-collection-image-o"></i>
                            </a>
                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                            <span class="blog-post-date inline-block">9.1.17</span>
                            <div class="mdl-layout-spacer"></div>
                            <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect mr-5">
                                <i class="zmdi zmdi-favorite"></i>
                            </button>
                            <button id ="share_menu_3" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                <i class="zmdi zmdi-share"></i>
                            </button>
                            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                data-mdl-for="share_menu_3">
                                <li class="mdl-menu__item">Facebook</li>
                                <li class="mdl-menu__item">Twitter</li>
                                <li class="mdl-menu__item">LinkedIn</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-20 mb-30">
                <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  margin-lr-auto view-more" href="blog-list.html">view all</a>
            </div>
        </section>
        <!--/Blog Sec-->
        @endif

        @if(isset($data['blocks']['testimonials']) && $data['blocks']['testimonials'] == '1')
        <!--References Sec-->
        <section id="references_sec" class="reference-sec sec-pad-top-sm">
            <h2 class="mb-30">testimonial</h2>
            <div class="row">
                <div class="col-sm-12 mb-30">
                    <div class="mdl-card mdl-shadow--2dp border-top-yellow pa-35">
                        <div class="testimonial-carousel">
                            <div>
                                <blockquote>"Invitamus me testatur sed quod non dum animae tuae lacrimis ut libertatem deum rogus aegritudinis causet. Dicens hoc contra serpentibus isto."</blockquote>
                                <span class="ref-name block mb-5 mt-20">john doe</span>
                                <span class="ref-desgn block">Lead Designer in Droffox</span>
                            </div>
                            <div>
                                <blockquote>"Invitamus me testatur sed quod non dum animae tuae lacrimis ut libertatem deum rogus aegritudinis causet. Dicens hoc contra serpentibus isto."</blockquote>
                                <span class="ref-name block mb-5 mt-20">Shone doe</span>
                                <span class="ref-desgn block">Lead Designer in Fakebook</span>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

        </section>
        <!--/References Sec-->
        @endif

        @if(isset($data['blocks']['client_images']) && $data['blocks']['client_images'] == '1')
        <!--Client Sec-->
        <section id="client_sec" class="client-sec sec-pad-top-sm">
            <div class="row">
                <div class="col-sm-12 mb-30">
                    <div class="client-carousel">
                        <img src="assets/img/client1.png" alt="client">
                        <img src="assets/img/client2.png" alt="client">
                        <img src="assets/img/client3.png" alt="client">
                        <img src="assets/img/client4.png" alt="client">
                        <img src="assets/img/client5.png" alt="client">
                        <img src="assets/img/client6.png" alt="client">
                    </div>
                </div>
            </div>
        </section>
        <!--/Client Sec-->
        @endif

        @if(isset($data['blocks']['pricing']) && $data['blocks']['pricing'] == '1')
        <!--Price Sec-->
        <section id="price_sec" class="price-sec sec-pad-top-sm">
            <h2 class="mb-30">pricing</h2>
            <div class="row">
                <!-- item -->
                <div class="col-sm-4 text-center mb-30">
                    <div class="mdl-card mdl-shadow--2dp pa-0">
                        <div class="mdl-card__title pa-0">
                            <h5 class="block pt-25 pb-20">basic</h5>
                            <div class="price-bg">
                                <span class="panel-price block font-blue"><span class="pricing-dolor">$</span>49</span>
                                <span class="pricing-plan block pt-10">per month</span>
                            </div>
                        </div>
                        <div class="mdl-card__supporting-text text-center pa-0">
                            <ul class="list-group mb-0 text-center">
                                <li class="list-group-item">1 website</li>
                                <li class="list-group-item">30 GB Storage</li>
                                <li class="list-group-item">Unlimited bandwidth</li>
                                <li class="list-group-item">Free email included</li>
                            </ul>
                        </div>
                        <div class="mdl-card__actions pt-30 pb-30">
                            <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  bg-green font-white" href="#">buy now</a>
                        </div>
                    </div>
                </div>
                <!-- /item -->
                <!-- item -->
                <div class="col-sm-4 text-center mb-30">
                    <div class="mdl-card mdl-shadow--2dp pa-0">
                        <div class="mdl-card__title pa-0">
                            <h5 class="block pt-25 pb-20">standard</h5>
                            <div class="price-bg">
                                <span class="panel-price block font-blue"><span class="pricing-dolor">$</span>99</span>
                                <span class="pricing-plan block pt-10">per month</span>
                            </div>
                        </div>
                        <div class="mdl-card__supporting-text text-center pa-0">
                            <ul class="list-group mb-0 text-center">
                                <li class="list-group-item">1 website</li>
                                <li class="list-group-item">100 GB storage</li>
                                <li class="list-group-item">Unlimited bandwidth</li>
                                <li class="list-group-item">Free domain & email</li>
                            </ul>
                        </div>
                        <div class="mdl-card__actions pt-30 pb-30">
                            <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  bg-green font-white" href="#">buy now</a>
                        </div>
                    </div>
                </div>
                <!-- /item -->
                <!-- item -->
                <div class="col-sm-4 text-center mb-30">
                    <div class="mdl-card mdl-shadow--2dp pa-0">
                        <div class="mdl-card__title pa-0">
                            <h5 class="block pt-25 pb-20">business</h5>
                            <div class="price-bg">
                                <span class="panel-price block font-blue"><span class="pricing-dolor">$</span>199</span>
                                <span class="pricing-plan block pt-10">per month</span>
                            </div>
                        </div>
                        <div class="mdl-card__supporting-text text-center pa-0">
                            <ul class="list-group mb-0 text-center">
                                <li class="list-group-item">Unlimited websites</li>
                                <li class="list-group-item">Unlimited storage</li>
                                <li class="list-group-item">Unlimited bandwidth</li>
                                <li class="list-group-item">Free domain & email</li>
                            </ul>
                        </div>
                        <div class="mdl-card__actions pt-30 pb-30">
                            <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  bg-green font-white" href="#">buy now</a>
                        </div>
                    </div>
                </div>
                <!-- /item -->
            </div>
        </section>
        <!--/Price Sec-->
        @endif

        @if(isset($data['blocks']['contact']) && $data['blocks']['contact'] == '1')
        <!--Contact Sec-->
        <section id="contact_sec" class="contact-sec sec-pad-top-sm">
            <h2 class="mb-35">contact</h2>
            <div class="row">
                <div id="form_card_height" class="col-sm-7 mb-30">
                    <div  class="mdl-card mdl-shadow--2dp" data-ng-controller="ContactController">
                        <h4 class="mb-10 font-unsetcase">Hey <span  data-ng-bind="formData.inputName||'There'">There</span>, happy to hear from you.</h4>
                        <form data-ng-submit="submit(contactform, $event)"  name="contactform"  method="post" class=" form-horizontal mb-30" role="form">
                            <div class="form-group" data-ng-class="{ 'has-error': contactform.inputName.$invalid && submitted }">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input autocomplete="off" data-ng-model="formData.inputName" class="mdl-textfield__input" type="text" id="inputName" name="inputName" required>
                                    <label class="mdl-textfield__label" for="inputName">name*</label>
                                </div>
                            </div>
                            <div class="form-group" data-ng-class="{ 'has-error': contactform.inputEmail.$invalid && submitted }">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input autocomplete="off" data-ng-model="formData.inputEmail" class="mdl-textfield__input" type="email" id="inputEmail" name="inputEmail" required>
                                    <label class="mdl-textfield__label" for="inputEmail">email*</label>
                                </div>
                            </div>
                            <div class="form-group" data-ng-class="{ 'has-error': contactform.inputMessage.$invalid && submitted }">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<textarea
                                                            data-ng-model="formData.inputMessage"
                                                            class="mdl-textfield__input"  rows="3" id="inputMessage" name="inputMessage" required></textarea>
                                    <label class="mdl-textfield__label" for="inputMessage">message*</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="align-center">
                                    <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  bg-blue font-white" data-ng-disabled="submitButtonDisabled">
                                        submit
                                    </button>
                                </div>
                            </div>
                        </form>
                        {{--<p class="block result" data-ng-class="result">{{ resultMessage }}</p>--}}
                    </div>
                </div>
                <div class="col-sm-5 mb-30">
                    <div class="mdl-card mdl-shadow--2dp pa-0">
                        <div id="map_canvas"></div>
                    </div>
                </div>
            </div>
        </section>
        <!--/Contact Sec-->
        @endif

        <!--Footer Sec-->
        <footer class="footer-sec sec-pad-top-sm sec-pad-bottom text-center">
            <h4>thank you for visiting.</h4>
            <p class="mt-10">Hencework 2017. All rights reserved.</p>
            <ul class="social-icons mt-10">
                <li>
                    <a class="facebook-link" href="#">
                        <i id="tt6" class="zmdi zmdi-facebook"></i>
                        <div class="mdl-tooltip" data-mdl-for="tt6">
                            facebook
                        </div>
                    </a>
                </li>
                <li>
                    <a class="twitter-link" href="#">
                        <i id="tt7" class="zmdi zmdi-twitter"></i>
                        <div class="mdl-tooltip" data-mdl-for="tt7">
                            twitter
                        </div>
                    </a>
                </li>
                <li>
                    <a class="linkedin-link" href="#">
                        <i id="tt8" class="zmdi zmdi-linkedin"></i>
                        <div class="mdl-tooltip" data-mdl-for="tt8">
                            linkedin
                        </div>
                    </a>
                </li>
                <li>
                    <a class="dribbble-link" href="#">
                        <i id="tt9" class="zmdi zmdi-dribbble"></i>
                        <div class="mdl-tooltip" data-mdl-for="tt9">
                            dribbble
                        </div>
                    </a>
                </li>
                <li>
                    <a class="instagram-link" href="#">
                        <i id="tt10" class="zmdi zmdi-instagram"></i>
                        <div class="mdl-tooltip" data-mdl-for="tt10">
                            instagram
                        </div>
                    </a>
                </li>
            </ul>

        </footer>
        <!--Footer Sec-->
    </div>
@endsection
