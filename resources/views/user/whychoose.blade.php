<!doctype html>
<html class="no-js" lang="zxx">

<head>

    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>TechBuzz - Multipurpose Technology HTML5 Template</title>

    <!--====== Favicon ======-->
    <link rel="shortcut icon" href="{{asset('assets/images/logo/favicon.ico" type="images/x-icon')}}" />

    <!--====== CSS Here ======-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>

<body>
   <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- preloader  -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
						<span data-text-preloader="T" class="letters-loading">
							T
						</span>
						<span data-text-preloader="E" class="letters-loading">
							E
						</span>
						<span data-text-preloader="C" class="letters-loading">
							C
						</span>
						<span data-text-preloader="H" class="letters-loading">
							H
						</span>
						<span data-text-preloader="B" class="letters-loading">
							B
						</span>
						<span data-text-preloader="U" class="letters-loading">
							U
						</span>
						<span data-text-preloader="Z" class="letters-loading">
							Z
						</span>
						<span data-text-preloader="Z" class="letters-loading">
							Z
						</span>
					</div>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- header start -->
    <header class="header">
        <div class="header__top">
            <div class="container-fluid">
                 <div class="row">
                     <div class="col-xl-6 col-lg-7 col-md-12">
                         @foreach($data as $phone)
                         <div class="header__top--info">
                             <ul>
                                 <li><a href="mailto:{{ $phone->email }}"><span class="icon"><i class="fal fa-envelope"></i></span> {{ $phone->email }}</a></li>
                                 <li><a href="tel:{{ $phone->phone }}"><span class="icon"><i class="fal fa-phone"></i></span> {{ $phone->phone }}</a></li>
                             </ul>
                         </div>
                         @endforeach
                     </div>
                     <div class="col-xl-6 col-lg-5 col-md-12">
                        <div class="header__top--info--right">
                            <div class="lang">
                                <div class="lang__icon">
                                    <a href="#0" class="lang__btn">English <i class="fal fa-angle-down"></i></a>
                                    <ul class="lang__list">
                                        <li><a href="#0">USA</a></li>
                                        <li><a href="#0">UK</a></li>
                                        <li><a href="#0">CA</a></li>
                                        <li><a href="#0">AU</a></li>
                                    </ul>
                                </div>
                            </div>
                            <a href="{{url('career') }}" class="job-btn"><i class="fal fa-briefcase"></i> Get Job Feeds</a>
                        </div>
                     </div>
                 </div>
            </div>
        </div>
        <div class="navarea">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-4 my-auto">
                        <div class="header__logo">
                            <a href="{{url('/') }}">
                                <img src="{{asset('assets/images/logo/logo.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="header__menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li><a href="{{url('/') }}">Home <span>+</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="{{url('/')}}">Homepage 01</a></li>
                                            <li><a href="{{url('indexx')}}">Homepage 02</a></li>
                                            <li><a href="{{url('ttindex') }}">Homepage 03</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('about') }}">About</a></li>
                                    <li><a href="">Services <span>+</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="{{url('services') }}">Services</a></li>
                                            <li><a href="{{url('servicedetails') }}">Service Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#0">Pages <span>+</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="{{url('faq') }}">Faq</a></li>
                                            <li><a href="{{url('career') }}">Careers</a></li>
                                            <li><a href="{{ url('team') }}">Team</a></li>
                                            <li><a href="{{ url('teamdetails') }}">Team Details</a></li>
                                            <li><a href="{{ url('whychoose') }}">Why Choose</a></li>
                                            <li><a href="{{ url('portfolio') }}">Portfolio</a></li>
                                            <li><a href="{{url('portfoliodetails') }}">Portfolio Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url('news') }}">News</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{url('news') }}">News</a></li>
                                            <li><a href="{{url('newsdetails') }}">News Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url('contactus') }}">Contact</a></li>
                                    @if(Route::has('login'))
                                    @auth
                                    <x-app-layout>
                                    </x-app-layout>
                                    @else
                                        
                                    


                                    <li><a href="{{route('login')}}">Login</a></li>


                                    <li><a href="{{route('register')}}">Register</a></li>
                                    @endauth
                                    @endif



                                </ul>
                            </nav>
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-8 my-auto d-none d-xl-block d-lg-block">
                        <div class="navarea__right">
                            <a href="contact.html" class="site-btn">Get A Quote <span>+</span></a>
                            <button class="search-trigger">
                                <i class="fal fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->
    <!-- breadcrumb area start -->
    <section class="breadcrumb pt-150 pb-150 bg_img" data-background="{{ asset('assets/images/bg/breadcrumb-bg-1.jpeg')}}"
        data-overlay="dark" data-opacity="5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__wrap">
                        <h2 class="title">Why Choose Us</h2>
                        <div class="breadcrumb__nav">
                            <ul>
                                <li><span>//</span></li>
                                <li><a href="{{url('/') }}">Home</a></li>
                                <li>|</li>
                                <li>Why Choose</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- why choose area start -->
    <section class="whychoose-area pt-100">
        <div class="container">
            <div class="row mt-none-30">
                <div class="col-xl-3 col-lg-6 mt-30">
                    <div class="whychoose__box whychoose__box--2">
                        <div class="icon">
                            <i class="fal fa-users"></i>
                        </div>
                        <div class="content mt-25">
                            <h4 class="title">Operational Excellence.</h4>
                            <p>Lorem ipsum dolor sit amet, c onsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                        </div>
                        <span class="big-text">01</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 mt-30">
                    <div class="whychoose__box whychoose__box--2">
                        <div class="icon">
                            <i class="fal fa-paper-plane"></i>
                        </div>
                        <div class="content mt-25">
                            <h4 class="title">Customer Service</h4>
                            <p>Lorem ipsum dolor sit amet, c onsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                        </div>
                        <span class="big-text">02</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 mt-30">
                    <div class="whychoose__box whychoose__box--2">
                        <div class="icon">
                            <i class="fal fa-cogs"></i>
                        </div>
                        <div class="content mt-25">
                            <h4 class="title">24/7 Support</h4>
                            <p>Lorem ipsum dolor sit amet, c onsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                        </div>
                        <span class="big-text">03</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 mt-30">
                    <div class="whychoose__box whychoose__box--2">
                        <div class="icon">
                            <i class="fal fa-crown"></i>
                        </div>
                        <div class="content mt-25">
                            <h4 class="title">Quality Services</h4>
                            <p>Lorem ipsum dolor sit amet, c onsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                        </div>
                        <span class="big-text">04</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why choose area end -->

    <!-- about area start -->
    <section class="about__area about__area--2 about__area--3 pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about__bg about__bg--2 about__bg--3 about__bg--5">
                        <img src="{{asset('assets/images/bg/about-bg-6.jpeg')}}" alt="">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="section__heading mb-30 mt-50">
                        <h4 class="section__heading--title-small"><span class="mr-10">//</span>Get Support</h4>
                        <h2 class="section__heading--title">Just Make An Awesome
                        Tour Here<span>.</span></h2>
                        <div class="section__heading--content mt-20">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore
                                et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                        </div>
                    </div>
                    <div class="about__box about__box--2 about__box--3 about__box--4">
                        <ul class="nav" role="tablist">
                            <li class="nav-item"><a class="nav-link active" href="#tab-1" role="tab" data-toggle="tab">Our Values</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tab-2" role="tab" data-toggle="tab">Our Skills</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tab-2" role="tab" data-toggle="tab">Our Mission</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active show" id="tab-1">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab-2">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    Duis
                                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab-3">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    Duis
                                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->

    <!-- counter area start -->
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="counter__wrap counter__wrap--2">
                    <div class="row mt-none-30">
                        <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                            <div class="counter__box">
                                <h2 class="title">
                                    <span class="counter big">84</span><span class="big">K</span>+
                                </h2>
                                <p>Projects are Completed</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                            <div class="counter__box">
                                <h2 class="title">
                                    <span class="counter big">10</span><span class="big">M</span>+
                                </h2>
                                <p>Projects are Completed</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                            <div class="counter__box">
                                <h2 class="title">
                                    <span class="counter big">02</span><span class="big">K</span>+
                                </h2>
                                <p>Projects are Completed</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                            <div class="counter__box">
                                <h2 class="title">
                                    <span class="counter big">100</span><span class="big">M</span>+
                                </h2>
                                <p>Projects are Completed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter area end -->

    <!-- cta area start -->
    <div class="cta__area cta__area--4 bg_img" data-background="{{asset('assets/images/bg/cta-bg-4.jpeg')}}" data-overlay="dark"
        data-opacity="5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 text-center">
                    <a href="//www.youtube.com/embed/4xe72U7mXNg?rel=0&amp;controls=0&amp;showinfo=0" data-rel="lightcase:myCollection"
                        data-animation="fadeInLeft" data-delay=".1s" class="video-link">
                        <div class="video-play-wrap">
                            <div class="video-mark">
                                <div class="wave-pulse wave-pulse-1"></div>
                                <div class="wave-pulse wave-pulse-2"></div>
                            </div>
                            <div class="video-play">
                                <i class="fa fa-play"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- cta area end -->

    <!-- news-feed area start -->
    <section class="news-feed-area pt-95">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="newsfeedwrap newsfeedwrap--3">
                        <div class="section__heading mb-40">
                            <h4 class="section__heading--title-small"> <span class="mr-10">//</span>news Feeds</h4>
                            <h2 class="section__heading--title">Get Every Single <br>
                                Update Here<span>.</span></h2>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="news__items mt-none-30">
                                    <div class="news__item mt-30">
                                        <div class="thumb">
                                            <img src="{{asset('assets/images/news/news-small-1.jpeg')}}" alt="">
                                        </div>
                                        <div class="content">
                                            <ul class="meta">
                                                <li><a href="#0"><i class="fal fa-calendar-alt"></i> 24th June 2020</a>
                                                </li>
                                                <li><a href="#0"><i class="fal fa-user"></i> By Admin</a></li>
                                            </ul>
                                            <h4 class="title"><a href="news-details.html">We are specialists in both economics
                                                    and information technologies.</a></h4>
                                        </div>
                                    </div>
                                    <div class="news__item mt-30">
                                        <div class="thumb">
                                            <img src="{{asset('assets/images/news/news-small-2.jpeg')}}" alt="">
                                        </div>
                                        <div class="content">
                                            <ul class="meta">
                                                <li><a href="#0"><i class="fal fa-calendar-alt"></i> 24th June 2020</a>
                                                </li>
                                                <li><a href="#0"><i class="fal fa-user"></i> By Admin</a></li>
                                            </ul>
                                            <h4 class="title"><a href="news-details.html">We are specialists in both economics
                                                    and information technologies.</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="news__item news__item--transparent mt-30">
                        <div class="thumb" data-overlay="dark" data-opacity="6">
                            <img src="{{asset('assets/images/news/news-big-2.jpeg')}}" alt="">
                        </div>
                        <div class="content">
                            <ul class="meta">
                                <li><a href="#0"><i class="fal fa-calendar-alt"></i> 24th June 2020</a></li>
                                <li><a href="#0"><i class="fal fa-user"></i> By Admin</a></li>
                            </ul>
                            <h4 class="title"><a href="news-details.html">We are specialists in both economics
                                    and information technologies.</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- news-feed area end -->

    <!-- footer area start -->
    <footer class="site-footer bg_img pt-100" data-background="{{asset('assets/images/pattern/footer-pattern.png')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <a href="index.html" class="site-logo mb-50">
                        <img src="{{asset('assets/images/logo/logo.png')}}" alt="Logo">
                    </a>
                </div>
                <div class="col-xl-12">
                    <div class="footer-top mt-50 mb-80">
                        <div class="footer__info">
                            <div class="footer__info--item d-flex align-items-center">
                                <div class="icon mr-20">
                                    <img src="{{asset('assets/images/icons/footer-info-icon-1.png')}}" alt="">
                                </div>
                                @foreach($data as $phone)
                                <div class="content">
                                    <h4 class="title">Phone Number</h4>
                                    <a href="tel:{{ $phone->phone }}">{{ $phone->phone }}</a>
                                </div>
                                @endforeach
                            </div>
                            <div class="footer__info--item d-flex align-items-center">
                                <div class="icon mr-20">
                                    <img src="{{asset('assets/images/icons/footer-info-icon-2.png')}}" alt="">
                                </div>
                                @foreach($data as $phone)
                                <div class="content">
                                    <h4 class="title">Email Address</h4>
                                    <a href="mailto:{{ $phone->email }}">{{ $phone->email }}</a>
                                </div>
                                @endforeach
                            </div>
                            <div class="footer__info--item d-flex align-items-center">
                                <div class="icon mr-20">
                                    <img src="{{asset('assets/images/icons/footer-info-icon-3.png')}}" alt="">
                                </div>
                                @foreach($data as $phone)
                                <div class="content">
                                    <h4 class="title">Office Address</h4>
                                    <span>{{ $phone->address }}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <button id="scroll-top" class="site-btn transparent"><i class="fal fa-long-arrow-up"></i> <span>Back To Top</span> <i class="fal fa-long-arrow-up"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-none-30">
                <div class="col-xl-4 col-lg-6 col-md-12 mt-30">
                    <div class="footer__widget">
                        <h4 class="title mb-30">Services</h4>
                        <div class="row no-gutters">
                            <div class="col">
                                <ul>
                                    <li><a href="{{url('servicedetails') }}">IT Software</a></li>
                                    <li><a href="{{url('servicedetails') }}">IT Support</a></li>
                                    <li><a href="{{url('servicedetails') }}">IT Platforms</a></li>
                                    <li><a href="{{url('servicedetails') }}">Cloud Computing</a></li>
                                    <li><a href="{{url('servicedetails') }}">Cyber Security</a></li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul>
                                    <li><a href="{{url('servicedetails') }}">IT Software</a></li>
                                    <li><a href="{{url('servicedetails') }}">IT Support</a></li>
                                    <li><a href="{{url('servicedetails') }}">IT Platforms</a></li>
                                    <li><a href="{{url('servicedetails') }}">Cloud Computing</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-sm-6 col-6 mt-30">
                    <div class="footer__widget">
                        <h4 class="title mb-30">More Link</h4>
                        <ul>
                            <li><a href="#0">Pick up locations</a></li>
                            <li><a href="#0">Terms of Payment</a></li>
                            <li><a href="#0">Privacy Policy</a></li>
                            <li><a href="#0">Where to Find Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-sm-6 col-6 mt-30">
                    <div class="footer__widget">
                        <h4 class="title mb-30">Support</h4>
                        <ul>
                            <li><a href="#0">Forum Support</a></li>
                            <li><a href="#0">Help & FAQ</a></li>
                            <li><a href="{{url('contactus') }}">Contact Us</a></li>
                            <li><a href="{{url('services') }}">Pricing and plans</a></li>
                            <li><a href="#0">Cookies Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mt-30">
                    <div class="footer__widget">
                        <h4 class="title mb-30">News Feeds</h4>
                        <div class="newsfeed__wrap">
                            <div class="newsfeed__item mb-20">
                                <div class="thumb">
                                    <img src="{{asset('assets/images/news/news-small-3.jpeg')}}" alt="">
                                </div>
                                <div class="content">
                                    <ul class="meta">
                                        <li><a href="#0"><i class="fal fa-calendar-alt"></i> 24th June 2020</a></li>
                                    </ul>
                                    <h4 class="title"><a href="{{url('newsdetails') }}">We are specialists in both
                                    economics and information</a></h4>
                                </div>
                            </div>
                            <div class="newsfeed__item">
                                <div class="thumb">
                                    <img src="{{asset('assets/images/news/news-small-4.jpeg')}}" alt="">
                                </div>
                                <div class="content">
                                    <ul class="meta">
                                        <li><a href="#0"><i class="fal fa-calendar-alt"></i> 24th June 2020</a></li>
                                    </ul>
                                    <h4 class="title"><a href="{{url('newsdetails') }}">We are specialists in both
                                    economics and information</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="copyright-text mt-60">
                        <div class="row">
                            <div class="col-xl-12 text-center">
                                <p>Copyright By@Example - <span>2020</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- Fullscreen search -->
    <div class="search-wrap">
        <div class="search-inner">
            <i class="fal fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search Your Keyword...">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end fullscreen search -->

    <!--========= JS Here =========-->
    <script src="{{asset('assets/js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.meanmenu.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets/js/lightcase.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/js_jquery.knob.js')}}"></script>
    <script src="{{asset('assets/js/js_jquery.appear.js')}}"></script>
    <script src="{{asset('assets/js/tilt.jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/counterup.min.js')}}"></script>
    <script src="{{asset('assets/js/circle-progress.min.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/waypoint.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfpGBFn5yRPvJrvAKoGIdj1O1aO9QisgQ"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>