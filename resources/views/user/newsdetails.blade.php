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
                                            <li><a href="{{url('ttindex')}}">Homepage 03</a></li>
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
                                            <li><a href="{{ url('portfoliodetails') }}">Portfolio Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('news') }}">News</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ url('news') }}">News</a></li>
                                            <li><a href="{{url('newsdetails') }}">News Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url('contactus')}}">Contact</a></li>
                                    
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
                            <a href="{{url('contactus')}}" class="site-btn">Get A Quote <span>+</span></a>
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
    <section class="breadcrumb pt-150 pb-150 bg_img" data-background="{{asset('assets/images/bg/breadcrumb-bg-1.jpeg')}}"
        data-overlay="dark" data-opacity="5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__wrap">
                        <h2 class="title">News Details</h2>
                        <div class="breadcrumb__nav">
                            <ul>
                                <li><span>//</span></li>
                                <li><a href="{{url('/') }}">Home</a></li>
                                <li>|</li>
                                <li>blog Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- news area start -->
    <div class="blog__area blog__area--2 grey-bg pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-12">
                    <article class="blog__box blog__box--3 blog__box--details">
                        <div class="content pt-50">
                            <div class="cat mb-20">
                                <span>Businese</span>
                            </div>
                            <h3 class="title">
                                Lorem ipsum dolor sit amet, consecte
                                cing elit, sed do eiusmod tempor.
                            </h3>
                            <div class="meta mt-20 mb-20">
                                <span><i class="far fa-user"></i> by Piklo D. Sindom </span>
                                <span><a href="#0"><i class="far fa-calendar-alt"></i> 24th March 2019</a></span>
                                <span><a href="#0"><i class="far fa-comments"></i> 23 Comments</a></span>
                            </div>
                            <div class="post-text mb-20">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis
                                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    Excepteur sint
                                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut
                                    perspiciatis unde
                                    omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                    quae ab illo
                                    inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
                                    quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi
                                    nesciunt. Neque
                                    porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non
                                    numquam eius modi
                                    tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            </div>
                            <div class="post-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis
                                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    Excepteur sint
                                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
                            </div>
                            <div class="blog-inner-img mt-40 mb-40">
                                <div class="inner-content">
                                    <img src="{{asset('assets/images/news/news-details-1.jpeg')}}" alt="blog image">
                                </div>
                            </div>
                            <div class="inner-content">
                                <h4 class="mb-20">A cleansing hot shower or bath</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis
                                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    Excepteur sint
                                    occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="navigation-border pt-35 mt-40"></div>
                                </div>
                            </div>
                            <div class="inner-content">
                                <h4 class="mb-20">Setting the mood with incense</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                    aliquip ex ea commodo consequat.
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat nulla pariatur. Excepteur
                                    sint
                                    occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="navigation-border pt-35 mt-40"></div>
                                </div>
                            </div>
                            <div class="inner-content mb-35">
                                <h4 class="mb-25">Setting the mood with incense</h4>
                                <ul>
                                    <li><i class="far fa-check"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</li>
                                    <li><i class="far fa-check"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</li>
                                    <li><i class="far fa-check"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</li>
                                    <li><i class="far fa-check"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</li>
                                    <li><i class="far fa-check"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</li>
                                </ul>
                            </div>
                            <blockquote>
                                <span>by Hetmayar</span>
                                <p>Viral dreamcatcher keytar typewriter, aest hetic offal umami. Aesthetic polaroid pug pitchfork
                                    post-ironic.</p>
                                <div class="quote-icon">
                                    <img src="{{asset('assets/images/icons/quote-icon-light.png')}}" alt="">
                                </div>
                            </blockquote>
                            <div class="inner-content mt-30">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore
                                    magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis
                                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    Excepteur sint
                                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut
                                    perspiciatis unde
                                    omnis iste natus error sit voluptatem accusantium.</p>
                            </div>
                            <div class="row mt-30">
                                <div class="col-lg-5 my-auto">
                                    <div class="inner-content">
                                        <img src="{{asset('assets/images/news/news-inner-1.jpeg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-7 mmt-30 my-auto">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                        et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat. Duis
                                        aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        Excepteur sint
                                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed
                                        ut perspiciatis unde
                                        omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                                </div>
                            </div>
                            <div class="inner-content mt-25">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis
                                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    Excepteur sint
                                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut
                                    perspiciatis unde
                                    omnis iste natus error sit voluptatem.</p>
                            </div>
                            <div class="row mt-40">
                                <div class="col-xl-7 col-lg-7 col-md-7">
                                    <div class="blog-post-tag">
                                        <span>Releted Tags</span>
                                        <a href="#0">organic</a>
                                        <a href="#0">Foods</a>
                                        <a href="#0">tasty</a>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-5 col-md-5">
                                    <div class="blog-share-icon text-left text-md-right">
                                        <span>Share: </span>
                                        <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#0"><i class="fab fa-twitter"></i></a>
                                        <a href="#0"><i class="fab fa-instagram"></i></a>
                                        <a href="#0"><i class="fab fa-google-plus-g"></i></a>
                                        <a href="#0"><i class="fab fa-vimeo-v"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="navigation-border pt-50 mt-50"></div>
                                </div>
                                <div class="col-xl-5 col-lg-5 col-md-5">
                                    <div class="bakix-navigation b-next-post text-left mb-30">
                                        <span><a href="#0">Prev Post</a></span>
                                        <h4><a href="#0">Tips on Minimalist</a></h4>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-2 my-auto">
                                    <div class="bakix-filter text-left text-md-center mb-30">
                                        <a href="#0"><img src="{{ ('assets/images/icons/filter.png')}}" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-5 col-md-5">
                                    <div class="bakix-navigation b-next-post text-left text-md-right mb-30">
                                        <span><a href="#0">Next Post</a></span>
                                        <h4><a href="#0">Less Is More</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-none-30">
                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="navigation-border pt-50 mt-50"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <h2 class="releted-post-heading">Releted Post</h2>
                                    </div>
                                </div>
                                <div class="row releted-post">
                                    <div class="col-xl-6">
                                        <article class="blog__box mt-30">
                                            <div class="thumb">
                                                <a href="#0">
                                                    <img src="{{asset('assets/images/news/releted-post-thumb-1.jpeg')}}" alt="blog image">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <div class="meta mb-10">
                                                    <a href="#0"><i class="fal fa-calendar-alt"></i> 24th March 2020</a>
                                                </div>
                                                <h4 class="title">
                                                    <a href="#0">A series of iOS 7 inspire
                                                        vector icons.</a>
                                                </h4>
                                                <div class="post-text">
                                                    <p>Lorem ipsum dolor sit amet, conse ctet ur adipisicing elit, sed doing.</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-xl-6">
                                        <article class="blog__box mt-30">
                                            <div class="thumb">
                                                <a href="#0">
                                                    <img src="{{asset('assets/images/news/releted-post-thumb-2.jpeg')}}" alt="blog image">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <div class="meta mb-10">
                                                    <a href="#0"><i class="fal fa-calendar-alt"></i> 24th March 2020</a>
                                                </div>
                                                <h4 class="title">
                                                    <a href="#0">A series of iOS 7 inspire
                                                        vector icons.</a>
                                                </h4>
                                                <div class="post-text">
                                                    <p>Lorem ipsum dolor sit amet, conse ctet ur adipisicing elit, sed doing.</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="author mt-50 mb-40">
                            <div class="author__img">
                                <img src="{{asset('assets/images/news/news-author-1.jpeg')}}" alt="">
                            </div>
                            <div class="author__text">
                                <span>Written by</span>
                                <h3>Rosalina D. William</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation is enougn for today.</p>
                            </div>
                        </div>
                        <div class="post-comments">
                            <h2 class="title mb-25">03 Comments</h2>
                            <div class="latest__comments">
                                <ul>
                                    <li>
                                        <div class="comments-box">
                                            <div class="comments-avatar">
                                                <img src="{{asset('assets/images/news/news-comment-a-1.jpeg')}}" alt="">
                                            </div>
                                            <div class="comments-text">
                                                <div class="avatar-name">
                                                    <h5>Rosalina Kelian</h5>
                                                    <span>19th May 2018</span>
                                                    <a class="reply" href="#0"><i class="fal fa-reply"></i>Reply</a>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt
                                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                    exercitation
                                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="children">
                                        <div class="comments-box">
                                            <div class="comments-avatar">
                                                <img src="{{asset('assets/images/news/news-comment-a-2.jpeg')}}" alt="">
                                            </div>
                                            <div class="comments-text">
                                                <div class="avatar-name">
                                                    <h5>Rosalina Kelian</h5>
                                                    <span>19th May 2018</span>
                                                    <a class="reply" href="#0"><i class="fal fa-reply"></i>Reply</a>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt
                                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                    exercitation
                                                    ullamco laboris nisi ut aliquip.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comments-box">
                                            <div class="comments-avatar">
                                                <img src="{{asset('assets/images/news/news-comment-a-3.jpeg')}}" alt="">
                                            </div>
                                            <div class="comments-text">
                                                <div class="avatar-name">
                                                    <h5>Arista Williamson</h5>
                                                    <span>19th May 2018</span>
                                                    <a class="reply" href="#0"><i class="fal fa-reply"></i>Reply</a>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt
                                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                    exercitation
                                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="comments__form">
                            <h2 class="title">Post Comments</h2>
                            <form class="form" action="#">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="contact-icon contacts-message">
                                            <textarea name="comments" id="comments" cols="30" rows="10"
                                                placeholder="Your Comments...."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="contact-icon contacts-name">
                                            <input type="text" placeholder="Your Name.... ">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="contact-icon contacts-email">
                                            <input type="email" placeholder="Your Email....">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="contact-icon contacts-website">
                                            <input type="text" placeholder="Your Website....">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <button class="site-btn" type="submit"><i class="fal fa-comments"></i> Post
                                            comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="sidebar-wrap">
                        <div class="widget mb-40">
                            <h3 class="widget__title mb-30">About Me</h3>
                            <div class="aboutme text-center">
                                <img src="{{asset('assets/images/news/news-author-2.jpeg')}}" alt="">
                                <h4>Rosalina D. Willaimson</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore.</p>
                                <div class="aboutme__icon mt-30">
                                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                    <a href="#0"><i class="fab fa-behance"></i></a>
                                    <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#0"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="widget mb-40">
                            <h3 class="widget__title mb-30">Search Objects</h3>
                            <form class="sidebar-search-form">
                                <input type="text" placeholder="Search your keyword...">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget mb-40">
                            <h3 class="widget__title mb-30">Popular Feeds</h3>
                            <ul class="recent-posts">
                                <li>
                                    <div class="thumb">
                                        <a href="{{url('newsdetails') }}"><img
                                                src="{{asset('assets/images/news/news-releted-post-1.jpeg')}}" alt=""></a>
                                    </div>
                                    <div class="content">
                                        <h6 class="title"><a href="#0">Lorem ipsum dolor sit
                                                cing elit, sed do.</a></h6>
                                        <div class="meta"> 24th March 2019</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="{{url('newsdetails') }}"><img
                                                src="{{asset('assets/images/news/news-releted-post-2.jpeg')}}" alt=""></a>
                                    </div>
                                    <div class="content">
                                        <h6 class="title"><a href="#0">Lorem ipsum dolor sit
                                                cing elit, sed do.</a></h6>
                                        <div class="meta"> 24th March 2019</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="{{url('newsdetails') }}"><img
                                                src="{{asset('assets/images/news/news-releted-post-3.jpeg')}}" alt=""></a>
                                    </div>
                                    <div class="content">
                                        <h6 class="title"><a href="#0">Lorem ipsum dolor sit
                                                cing elit, sed do.</a></h6>
                                        <div class="meta"> 24th March 2019</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="{{url('newsdetails') }}"><img
                                                src="{{asset('assets/images/news/news-releted-post-4.jpeg')}}" alt=""></a>
                                    </div>
                                    <div class="content">
                                        <h6 class="title"><a href="#0">Lorem ipsum dolor sit
                                                cing elit, sed do.</a></h6>
                                        <div class="meta"> 24th March 2019</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="widget mb-40">
                            <h3 class="widget__title mb-30">Categories</h3>
                            <ul class="cat">
                                <li>
                                    <a href="#0">Business <span>26</span></a>
                                </li>
                                <li>
                                    <a href="#0">Consultant <span>30</span></a>
                                </li>
                                <li>
                                    <a href="#0">Creative <span>71</span></a>
                                </li>
                                <li>
                                    <a href="#0">UI/UX <span>56</span></a>
                                </li>
                                <li>
                                    <a href="#0">Technology <span>60</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="widget mb-40">
                            <h3 class="widget__title mb-30">Never Miss News</h3>
                            <div class="social__links">
                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0"><i class="fab fa-twitter"></i></a>
                                <a href="#0"><i class="fab fa-behance"></i></a>
                                <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#0"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="widget mb-40">
                            <h3 class="widget__title mb-30">Twitter Feeds</h3>
                            <ul class="twitter__feeds">
                                <li>
                                    <div class="t-feed-icon">
                                        <i class="fab fa-twitter"></i>
                                    </div>
                                    <div class="t-feed-body">
                                        <p>Rescue - #Gutenberg ready @ wordpress
                                            Theme for Creative Bloggers available on
                                            @ ThemeForest https://t.co/2r1POjOjgV
                                            C… https://t.co/rDAnPyClu1</p>
                                        <div class="t-feed-meta"> November 25, 2018</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="t-feed-icon">
                                        <i class="fab fa-twitter"></i>
                                    </div>
                                    <div class="t-feed-body">
                                        <p>Rescue - #Gutenberg ready @ wordpress
                                            Theme for Creative Bloggers available on
                                            @ ThemeForest https://t.co/2r1POjOjgV
                                            C… https://t.co/rDAnPyClu1</p>
                                        <div class="t-feed-meta"> November 25, 2018</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="t-feed-icon">
                                        <i class="fab fa-twitter"></i>
                                    </div>
                                    <div class="t-feed-body">
                                        <p>Rescue - #Gutenberg ready @ wordpress
                                            Theme for Creative Bloggers available on
                                            @ ThemeForest https://t.co/2r1POjOjgV
                                            C… https://t.co/rDAnPyClu1</p>
                                        <div class="t-feed-meta"> November 25, 2018</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="widget mb-40">
                            <h3 class="widget__title mb-30">Instagram Feeds</h3>
                            <ul id="Instafeed">
                                <li><a href="#0"><img src="{{asset('assets/images/news/instafeed/insta-feed-1.jpeg')}}" alt=""></a>
                                </li>
                                <li><a href="#0"><img src="{{asset('assets/images/news/instafeed/insta-feed-2.jpeg')}}" alt=""></a>
                                </li>
                                <li><a href="#0"><img src="{{asset('assets/images/news/instafeed/insta-feed-3.jpeg')}}" alt=""></a>
                                </li>
                                <li><a href="#0"><img src="{{asset('assets/images/news/instafeed/insta-feed-4.jpeg')}}" alt=""></a>
                                </li>
                                <li><a href="#0"><img src="{{asset('assets/images/news/instafeed/insta-feed-5.jpeg')}}" alt=""></a>
                                </li>
                                <li><a href="#0"><img src="{{asset('assets/images/news/instafeed/insta-feed-6.jpeg')}}" alt=""></a>
                                </li>
                                <li><a href="#0"><img src="{{asset('assets/images/news/instafeed/insta-feed-7.jpeg')}}" alt=""></a>
                                </li>
                                <li><a href="#0"><img src="{{asset('assets/images/news/instafeed/insta-feed-8.jpeg')}}" alt=""></a>
                                </li>
                                <li><a href="#0"><img src="{{asset('assets/images/news/instafeed/insta-feed-9.jpeg')}}" alt=""></a>
                                </li>
                            </ul>
                        </div>
                        <div class="widget mb-40">
                            <h3 class="widget__title mb-30">Popular Tags</h3>
                            <div class="tag">
                                <a href="#0" class="site-btn">Popular</a>
                                <a href="#0" class="site-btn">desgin</a>
                                <a href="#0" class="site-btn">ux</a>
                                <a href="#0" class="site-btn">usability</a>
                                <a href="#0" class="site-btn">develop</a>
                                <a href="#0" class="site-btn">icon</a>
                                <a href="#0" class="site-btn">business</a>
                                <a href="#0" class="site-btn">consult</a>
                                <a href="#0" class="site-btn">kit</a>
                                <a href="#0" class="site-btn">keyboard</a>
                                <a href="#0" class="site-btn">mouse</a>
                                <a href="#0" class="site-btn">tech</a>
                            </div>
                        </div>
                        <div class="widget ad__widget">
                            <img src="{{asset('assets/images/news/news-ad-banner.jpg')}}" alt="">
                            <div class="ad-text">
                                <h3><span>350x600</span>Add Banner</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- news area end -->
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
