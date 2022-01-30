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
                             <a href="{{url('career')}}" class="job-btn"><i class="fal fa-briefcase"></i> Get Job Feeds</a>
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
                             <a href="{{url('/')}}">
                                 <img src="{{asset('assets/images/logo/logo.png')}}" alt="">
                             </a>
                         </div>
                     </div>
                     <div class="col-xl-7 col-lg-7">
                         <div class="header__menu">
                             <nav id="mobile-menu">
                                 <ul>
                                     <li><a href="{{url('/')}}">Home <span>+</span></a>
                                         <ul class="sub-menu">
                                             <li><a href="{{url('/')}}">Homepage 02</a></li>
                                             <li><a href="{{url('indexx')}}">Homepage 02</a></li>
                                             <li><a href="{{url('ttindex') }}">Homepage 03</a></li>
                                         </ul>
                                     </li>
                                     <li><a href="{{ url('about') }}">About</a></li>
                                     <li><a href="{{url('services') }}">Services <span>+</span></a>
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
                                             <li><a href="{{ url('newsdetails') }}">News Details</a></li>
                                         </ul>
                                     </li>
                                     <li><a href="{{ url('contactus') }}">Contact</a></li>
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
                             <a href="{{ url('contactus') }}" class="site-btn">Get A Quote <span>+</span></a>
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
 <!-- banner area start -->
 <section class="banner__area banner__area--2 pt-135 pb-135 bg_img" data-background="{{asset('assets/images/banner/banner-bg-2.jpeg')}}">
    <div class="banner-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5 offset-xl-6 col-lg-6 offset-lg-6 col-md-7 offset-md-5 col-sm-7 offset-sm-5">
                    <div class="bannertext bannertext__2">
                        <a href="//www.youtube.com/embed/4xe72U7mXNg?rel=0&amp;controls=0&amp;showinfo=0" data-rel="lightcase:myCollection"
                            data-animation="fadeInLeft" data-delay=".1s" class="video-link mb-70">
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
                        <h5 class="subheading mb-15"> <span class="mr-10">//</span> Best IT Solution provider</h5>
                        <h1 class="heading">IT Solutions <br>
                        For Company<span>.</span></h1>
                        <p>We run all kinds of IT services that vowsuccess is really
                            profitable business in this day.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner area end -->

<!-- department area start -->
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="department__wrap">
                <div class="row no-gutters mt-none-30">
                    <div class="col-xl-6 mt-30">
                        <div class="department__box department__box--border pr-50">
                            <div class="department__box--icon">
                                <img src="{{asset('assets/images/icons/department-1.png')}}" alt="">
                            </div>
                            <div class="department__box--content">
                                <h4 class="title mb-15">We have an it departments.</h4>
                                <p>Labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi ut aliquip ex ea
                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 mt-30">
                        <div class="department__box pl-50">
                            <div class="department__box--icon">
                                <img src="{{asset('assets/images/icons/department-2.png')}}" alt="">
                            </div>
                            <div class="department__box--content">
                                <h4 class="title mb-15">We don’t have an it departments.</h4>
                                <p>Labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi ut aliquip ex ea
                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- department area end -->

<!-- service area start -->
<section class="service-area pt-115 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 text-center">
                <div class="section__heading mb-90">
                    <h4 class="section__heading--title-small"><span class="mr-10">//</span>services<span class="ml-10">//</span></h4>
                    <h1 class="section__heading--transparent">Services</h1>
                    <h2 class="section__heading--title">Data Analytics, Content & IT <br>
                        Managed Service<span>.</span></h2>
                </div>
            </div>
        </div>
        <div class="row mt-none-60">
            <div class="col-xl-4 col-lg-6 col-md-12 mt-60">
                <div class="service__box service__box--2">
                    <div class="content">
                        <h2 class="title mb-15">Design &amp; Development</h2>
                        <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua.</p>
                    </div>
                    <div class="thumb">
                        <img src="{{asset('assets/images/icons/service-1.png')}}" alt="">
                    </div>
                    <a href="{{ url('servicedetails') }}" class="icon">
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 mt-60">
                <div class="service__box service__box--2">
                    <div class="content">
                        <h2 class="title mb-15">IT Management</h2>
                        <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua.</p>
                    </div>
                    <div class="thumb">
                        <img src="{{asset('assets/images/icons/service-2.png')}}" alt="">
                    </div>
                    <a href="{{ url('servicedetails') }}" class="icon">
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 mt-60">
                <div class="service__box service__box--2">
                    <div class="content">
                        <h2 class="title mb-15">Cloud Computing</h2>
                        <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua.</p>
                    </div>
                    <div class="thumb">
                        <img src="{{asset('assets/images/icons/service-3.png')}}" alt="">
                    </div>
                    <a href="{{ url('servicedetails') }}" class="icon">
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service area end -->

<!-- about area start -->
<section class="about__area about__area--2 grey-bg bg_img pt-95 pb-100" data-background="{{asset('assets/images/bg/about-bg-2.png')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="section__heading mb-30">
                    <h4 class="section__heading--title-small"><span class="mr-10">//</span>about us</h4>
                    <h2 class="section__heading--title">We’ve Been Thriving In <br>
                        38 Years<span>.</span></h2>
                    <div class="section__heading--content mt-20">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore
                            et dolore magna
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                    </div>
                </div>
                <div class="about__box about__box--2">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quo dicta ab esse facilis, veritatis alias id tenetur! Repudiandae modi dolorum reprehenderit nostrum, quidem expedita iusto? Neque quibusdam voluptas eius et, nam laborum repudiandae, dolorem officiis ab quas odio, tenetur eos quae. Ullam nesciunt, eveniet temporibus earum perspiciatis dicta id voluptas fugit sequi quia quidem, quae dolores blanditiis debitis tenetur qui distinctio, reprehenderit amet! Aut tempore iusto laboriosam impedit, atque quisquam veniam optio sed tenetur.</p>
                    <a href="about.html" class="site-btn mt-35">Learn More <span>+</span></a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 text-right">
                <div class="about__bg about__bg--2" data-tilt data-tilt-perspective="3000">
                    <img src="{{asset('assets/images/others/about-authore-1.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about area end -->

<!-- procress area start -->
<section class="process__area pt-95 pb-95">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 text-center">
                <div class="section__heading mb-45">
                    <h4 class="section__heading--title-small"><span class="mr-10">//</span>process<span class="ml-10">//</span></h4>
                    <h1 class="section__heading--transparent">Process</h1>
                    <h2 class="section__heading--title">How We Claim To Excel<span>.</span></h2>
                </div>
            </div>
        </div>
        <div class="row mt-none-30">
            <div class="col-xl-4 col-lg-6 col-md-12 mt-30">
                <div class="process__box">
                    <div class="process__box--thumb">
                        <img src="{{asset('assets/images/service/process-1.jpeg')}}" alt="">
                        <a href="{{ url('servicedetails') }}" class="site-btn transparent white">Learn More <span>+</span></a>
                    </div>
                    <div class="process__box--content">
                        <h4 class="title">Management System</h4>
                        <p>Lorem ipsum dolor sit amet, consect et ur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua enim ad minim.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 mt-30">
                <div class="process__box">
                    <div class="process__box--thumb">
                        <img src="{{asset('assets/images/service/process-2.jpeg')}}" alt="">
                        <a href="{{ url('servicedetails') }}" class="site-btn transparent white">Learn More <span>+</span></a>
                    </div>
                    <div class="process__box--content">
                        <h4 class="title">Cpu Data Analytics</h4>
                        <p>Lorem ipsum dolor sit amet, consect et ur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua enim ad minim.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 mt-30">
                <div class="process__box">
                    <div class="process__box--thumb">
                        <img src="{{asset('assets/images/service/process-3.jpeg')}}" alt="">
                        <a href="{{ url('servicedetails') }}" class="site-btn transparent white">Learn More <span>+</span></a>
                    </div>
                    <div class="process__box--content">
                        <h4 class="title">Multifunctional Tech</h4>
                        <p>Lorem ipsum dolor sit amet, consect et ur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua enim ad minim.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- procress area end -->

<!-- faq area start -->
<section class="faq__area grey-bg pt-95 pb-150">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 align-self-center">
                <div class="faq__thumb text-center">
                    <div class="faq__thumb--big" data-tilt data-tilt-perspective="3000">
                        <img src="{{asset('assets/images/others/faq-thumb-big.jpeg')}}" alt="">
                    </div>
                    <div class="faq__thumb--1" data-tilt data-tilt-perspective="3000">
                        <img src="{{asset('assets/images/others/faq-thumb-1.jpeg')}}" alt="">
                    </div>
                    <div class="faq__thumb--2" data-tilt data-tilt-perspective="3000">
                        <img src="{{asset('assets/images/others/faq-thumb-2.jpeg')}}" alt="">
                    </div>
                    <div class="faq__thumb--3" data-tilt data-tilt-perspective="3000">
                        <img src="{{asset('assets/images/others/faq-thumb-3.jpeg')}}" alt="">
                    </div>
                    <div class="faq__thumb--4" data-tilt data-tilt-perspective="3000">
                        <img src="{{asset('assets/images/others/faq-thumb-4.jpeg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 pl-30">
                <div class="section__heading mb-35">
                    <h4 class="section__heading--title-small"><span class="mr-10">//</span>about us</h4>
                    <h2 class="section__heading--title">Get Your Answers<span>.</span></h2>
                </div>
                <div class="accordion faqs" id="accordionFaq">
                    <div class="card">
                        <div class="card__header" id="heading1">
                            <h5 class="mb-0 title">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse1"
                                    aria-expanded="false" aria-controls="collapse1">
                                    First and foremost, you never want to go?
                                </button>
                            </h5>
                        </div>
                        <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordionFaq">
                            <div class="card__body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__header" id="heading2">
                            <h5 class="mb-0 title">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse2"
                                    aria-expanded="true" aria-controls="collapse2">
                                    First and foremost, you never want to go?
                                </button>
                            </h5>
                        </div>
                        <div id="collapse2" class="collapse show" aria-labelledby="heading2" data-parent="#accordionFaq">
                            <div class="card__body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__header" id="heading3">
                            <h5 class="mb-0 title">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse3"
                                    aria-expanded="false" aria-controls="collapse3">
                                    First and foremost, you never want to go?
                                </button>
                            </h5>
                        </div>
                        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionFaq">
                            <div class="card__body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__header" id="heading4">
                            <h5 class="mb-0 title">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse4"
                                    aria-expanded="false" aria-controls="collapse4">
                                    First and foremost, you never want to go?
                                </button>
                            </h5>
                        </div>
                        <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionFaq">
                            <div class="card__body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq area end -->

<!-- integration area start -->
<section class="integration__area pt-125 pb-125">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="integration">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 text-center">
                            <div class="section__heading white mb-15">
                                <h4 class="section__heading--title-small"><span class="mr-10">//</span>Integration<span class="ml-10">//</span></h4>
                                <h1 class="section__heading--transparent">Integration</h1>
                                <h2 class="section__heading--title">Seamless Integrations With <br>
                                Other Analytics Tools<span>.</span></h2>
                            </div>
                            <div class="integration__content">
                                <p>Polygon absolutely works great with tools in your other existing platform. <br>
                                Now its time to leave a commnet here.</p>
                                <div class="integration__btns mt-35">
                                    <a href="{{ url('services') }}" class="site-btn">Our Service <span>+</span></a>
                                    <a href="{{ url('about') }}" class="site-btn transparent">Learn More <span>+</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="integration__icon">
                        <div class="integration__icons--box">
                            <i class="fab fa-java"></i>
                        </div>
                        <div class="integration__icons--box">
                            <i class="fab fa-wordpress"></i>
                        </div>
                        <div class="integration__icons--box">
                            <i class="fab fa-css3"></i>
                        </div>
                        <div class="integration__icons--box">
                            <i class="fab fa-python"></i>
                        </div>
                        <div class="integration__icons--box">
                            <i class="fab fa-dropbox"></i>
                        </div>
                        <div class="integration__icons--box">
                            <i class="fab fa-google"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- integration area end -->

<!-- webmasterpice area start -->
<section class="webmasterpice-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="section__heading mb-35">
                    <h4 class="section__heading--title-small"><span class="mr-10">//</span>What We Do Best</h4>
                    <h2 class="section__heading--title">Create Your Own Web
                    Masterpiece<span>.</span></h2>
                    <div class="section__heading--content mt-20">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                    </div>
                </div>
                <div class="webmasterpice__content mt-35">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore to magna
                    aliqua. Ut enim ad minim veniam, quis nostrud a exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit.</p>
                    <a href="about.html" class="site-btn mt-35">Learn More <span>+</span></a>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="row webmasterpice">
                    <div class="col-xl-6 col-lg-6">
                        <div class="webmasterpice__box">
                            <div class="icon">
                                <img src="{{asset('assets/images/icons/webmasterpice-1.png')}}" alt="">
                            </div>
                            <span>Mobile Friendly
                            Design</span>
                        </div>
                        <div class="webmasterpice__box mt-30">
                            <div class="icon">
                                <img src="{{asset('assets/images/icons/webmasterpice-2.png')}}" alt="">
                            </div>
                            <span>Retina Ready
                            Display</span>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 align-self-center">
                        <div class="webmasterpice__box webmasterpice__box--grey">
                            <div class="icon">
                                <img src="{{asset('assets/images/icons/webmasterpice-3.png')}}" alt="">
                            </div>
                            <span>Digital Marker
                            Solutions</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- webmasterpice area end -->

<!-- cta area start -->
<section class="cta__area pt-95 pb-100 bg_img" data-background="{{asset('assets/images/bg/cta-bg-1.jpeg')}}" data-overlay="dark" data-opacity="6">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 text-center">
                <div class="section__heading white mb-40">
                    <h4 class="section__heading--title-small"><span class="mr-10">//</span> Call to action<span class="ml-10">//</span></h4>
                    <h2 class="section__heading--title">We Are Waiting For Your
                    Possitive Response<span>.</span></h2>
                </div>
                <div class="cta__btns">
                    <a href="{{ url('services') }}" class="site-btn">Our Service <span>+</span></a>
                    <a href="{{ url('about') }}" class="site-btn white transparent">Learn More <span>+</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- cta area end -->

<!-- blog area start -->
<section class="blog__area pt-95 pb-100">
    <div class="container">
        <div class="row mb-60">
            <div class="col-xl-6 col-lg-6 col-md-7">
                <div class="section__heading">
                    <h4 class="section__heading--title-small"><span class="mr-10">//</span> blog</h4>
                    <h2 class="section__heading--title">News Feeds<span>.</span></h2>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-5 text-right">
                <a href="#0" class="site-btn mt-10">View Updates <span>+</span></a>
            </div>
        </div>
        <div class="row mt-none-30">
            <div class="col-xl-4 col-lg-6 col-md-12 mt-30">
                <article class="blog__box">
                    <div class="thumb">
                        <img src="{{asset('assets/images/news/news-standard-1.jpeg')}}" alt="">
                    </div>
                    <div class="content">
                        <span class="cat">// it solutions</span>
                        <h4 class="title"><a href="news-details.html">Create amazing static asset
                        s for web applications<span>.</span></a></h4>
                        <p>Here’s where I wish I could say (without caveats): “Don’t worry, Django has your back!” But unfortunately.</p>
                        <div class="meta">
                            <div class="authore">
                                <div class="authore__thumb">
                                    <img src="{{asset('assets/images/news/news-authore-1.png')}}" alt="">
                                </div>
                                <div class="authore__content">
                                    <h5>By Admin</h5>
                                </div>
                            </div>
                            <div class="date">
                                <i class="fal fa-calendar-alt"></i> 24/05/2020
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 mt-30">
                <article class="blog__box">
                    <div class="thumb">
                        <img src="{{asset('assets/images/news/news-standard-2.jpeg')}}" alt="">
                    </div>
                    <div class="content">
                        <span class="cat">// it solutions</span>
                        <h4 class="title"><a href="news-details.html">Today, we’re focusing on
                        what happens after the<span>.</span></a></h4>
                        <p>Here’s where I wish I could say (without caveats): “Don’t worry, Django has your back!” But unfortunately.</p>
                        <div class="meta">
                            <div class="authore">
                                <div class="authore__thumb">
                                    <img src="{{asset('assets/images/news/news-authore-1.png')}}" alt="">
                                </div>
                                <div class="authore__content">
                                    <h5>By Admin</h5>
                                </div>
                            </div>
                            <div class="date">
                                <i class="fal fa-calendar-alt"></i> 24/05/2020
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 mt-30">
                <article class="blog__box">
                    <div class="thumb">
                        <img src="{{asset('assets/images/news/news-standard-3.jpeg')}}" alt="">
                    </div>
                    <div class="content">
                        <span class="cat">// it solutions</span>
                        <h4 class="title"><a href="news-details.html">Style hotfix or beautiful
                        graphic you just finished<span>.</span></a></h4>
                        <p>Here’s where I wish I could say (without caveats): “Don’t worry, Django has your back!” But unfortunately.</p>
                        <div class="meta">
                            <div class="authore">
                                <div class="authore__thumb">
                                    <img src="{{asset('assets/images/news/news-authore-1.png')}}" alt="">
                                </div>
                                <div class="authore__content">
                                    <h5>By Admin</h5>
                                </div>
                            </div>
                            <div class="date">
                                <i class="fal fa-calendar-alt"></i> 24/05/2020
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<!-- blog area end -->

<!-- newslater area start -->
<div class="newslater pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="social__icons">
                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                    <a href="#0"><i class="fab fa-twitter"></i></a>
                    <a href="#0"><i class="fab fa-behance"></i></a>
                    <a href="#0"><i class="fab fa-youtube"></i></a>
                    <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-xl-6 offset-xl-1">
                <div class="newslater__form">
                    <form action="index.html">
                        <input type="email" placeholder="Enter your email address">
                        <button class="site-btn">Subscribe Now <span>+</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- newslater area end -->
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
                            <div class="content">
                                <h4 class="title">Phone Number</h4>
                                <a href="tel:{{ $phone->phone }}">{{ $phone->phone }}</a>
                            </div>
                        </div>
                        <div class="footer__info--item d-flex align-items-center">
                            <div class="icon mr-20">
                                <img src="{{asset('assets/images/icons/footer-info-icon-2.png')}}" alt="">
                            </div>
                            <div class="content">
                                <h4 class="title">Email Address</h4>
                                <a href="mailto:{{ $phone->email }}">{{ $phone->email }}</a>
                            </div>
                        </div>
                        <div class="footer__info--item d-flex align-items-center">
                            <div class="icon mr-20">
                                <img src="{{asset('assets/images/icons/footer-info-icon-3.png')}}" alt="">
                            </div>
                            <div class="content">
                                <h4 class="title">Office Address</h4>
                                <span>{{ $phone->address }}</span>
                            </div>
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
                                <li><a href="{{ url('servicedetails') }}">IT Software</a></li>
                                <li><a href="{{ url('servicedetails') }}">IT Support</a></li>
                                <li><a href="{{ url('servicedetails') }}">IT Platforms</a></li>
                                <li><a href="{{ url('servicedetails') }}">Cloud Computing</a></li>
                                <li><a href="{{ url('servicedetails') }}">Cyber Security</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li><a href="{{ url('servicedetails') }}">IT Software</a></li>
                                <li><a href="{{ url('servicedetails') }}">IT Support</a></li>
                                <li><a href="{{ url('servicedetails') }}">IT Platforms</a></li>
                                <li><a href="{{ url('servicedetails') }}">Cloud Computing</a></li>
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
                        <li><a href="{{ url('contactus') }}">Contact Us</a></li>
                        <li><a href="{{ url('services') }}">Pricing and plans</a></li>
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
                                <h4 class="title"><a href="{{ url('newsdetails') }}">We are specialists in both
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
                                <h4 class="title"><a href="{{ url('newsdetails') }}">We are specialists in both
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
