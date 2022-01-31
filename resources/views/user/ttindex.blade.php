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
                                  <li><a href="mailto:{{ $phone->email }}"><span class="icon"><i class="fal fa-envelope"></i></span>{{ $phone->email }}</a></li>
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
                             <a href="careers.html" class="job-btn"><i class="fal fa-briefcase"></i> Get Job Feeds</a>
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
                             <a href="index.html">
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
                                             <li><a href="{{ url('ttindex') }}">Homepage 03</a></li>
                                         </ul>
                                     </li>
                                     <li><a href="{{ url('about') }}">About</a></li>
                                     <li><a href="{{ url('services') }}">Services <span>+</span></a>
                                         <ul class="sub-menu">
                                             <li><a href="{{ url('services') }}">Services</a></li>
                                             <li><a href="{{ url('servicedetails') }}">Service Details</a></li>
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
                             <a href="{{url('contactus') }}" class="site-btn">Get A Quote <span>+</span></a>
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
    <section class="banner__area banner__area--2 banner__area--3">
        <div class="bannerSlide owl-carousel">
            <div class="bannerSlide__item bg_img" data-background="{{asset('assets/images/banner/banner-slide-1.jpeg')}}" data-overlay data-opacity="7">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 text-center">
                            <div class="bannertext bannertext__2 bannertext__3">
                                <h5 class="subheading mb-15" data-animation="fadeInUp" data-delay=".3s"><span class="mr-10">//</span> Best IT Solution provider <span class="ml-10">//</span></h5>
                                <h1 class="heading" data-animation="fadeInUp" data-delay=".5s">IT Solutions <br>For Business.</h1>
                                <div class="buttons mt-25">
                                    <a href="{{url('contactus') }}" class="site-btn" data-animation="fadeInUp" data-delay=".7s">Get In Touch <span>+</span></a>
                                    <a href="{{url('about') }}" class="site-btn transparent" data-animation="fadeInUp" data-delay=".9s">Learn More <span>+</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="cricle cricle__1" data-animation="zoomIn" data-delay=".1s"></span>
                <span class="cricle cricle__2" data-animation="zoomIn" data-delay=".3s"></span>
            </div>
            <div class="bannerSlide__item bg_img" data-background="{{asset('assets/images/banner/banner-slide-1.jpeg')}}" data-overlay data-opacity="7">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 text-center">
                            <div class="bannertext bannertext__2 bannertext__3">
                                <h5 class="subheading mb-15" data-animation="fadeInUp" data-delay=".3s"><span class="mr-10">//</span> Best IT Solution provider <span class="ml-10">//</span></h5>
                                <h1 class="heading" data-animation="fadeInUp" data-delay=".5s">IT Solutions <br>For Business.</h1>
                                <div class="buttons mt-25">
                                    <a href="{{url('contactus') }}" class="site-btn" data-animation="fadeInUp" data-delay=".7s">Get In Touch <span>+</span></a>
                                    <a href="{{url('about') }}" class="site-btn transparent" data-animation="fadeInUp" data-delay=".9s">Learn More <span>+</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="cricle cricle__1" data-animation="zoomIn" data-delay=".1s"></span>
                <span class="cricle cricle__2" data-animation="zoomIn" data-delay=".3s"></span>
            </div>
        </div>
    </section>
    <!-- banner area end -->

    <!-- appoinment area start -->
    <div class="appoinment">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="appoinment__wrap pt-80 pb-80">
                        <div class="row">
                            <div class="col-xl-2">
                                <h2 class="appoinment-title">Get An <br>
                                    Appointment</h2>
                            </div>
                            <div class="col-xl-10">
                                <div class="appoinment__form">
                                    <form action="index.html">
                                        <div class="form__group">
                                            <div class="form__group--item">
                                                <label for="name"><i class="fal fa-user"></i></label>
                                                <input type="text" id="name" placeholder="Enter your full name">
                                            </div>
                                            <div class="form__group--item">
                                                <label for="name"><i class="fal fa-arrow-down"></i></label>
                                                <select name="subject" id="service">
                                                    <option data-display="Select Service Name">Select Service Name</option>
                                                    <option value="1">IT Services</option>
                                                    <option value="2">Infrastructure Plan</option>
                                                    <option value="3">IT Mangement</option>
                                                </select>
                                            </div>
                                            <div class="form__group--item">
                                                <button type="submit"><i class="fal fa-paper-plane"></i> Check Availability</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- appoinment area end -->

    <!-- about area start -->
    <section class="about__area about__area--2 about__area--3 pt-100 pb-140">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="section__heading mb-30 mt-65">
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
                    <div class="about__box about__box--2 about__box--3">
                        <ul class="nav" role="tablist">
                            <li class="nav-item"><a class="nav-link active" href="#tab-1" role="tab" data-toggle="tab">Quality Materials</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tab-2" role="tab" data-toggle="tab">Experienced Team</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tab-2" role="tab" data-toggle="tab">Technologies</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active show" id="tab-1">
                                <p>Labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost rud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo conseq uat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab-2">
                                <p>Labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost rud exercitation ullamco laboris nisi ut aliquip ex ea
                                    commodo conseq uat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab-3">
                                <p>Labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost rud exercitation ullamco laboris nisi ut aliquip ex ea
                                    commodo conseq uat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 text-right">
                    <div class="about__bg about__bg--2 about__bg--3">
                        <img src="{{asset('assets/images/bg/about-bg-2.jpeg')}}" alt="">
                        <div class="call-box">
                            <span>Call Us Anytime!</span>
                            <a href="tel:98768768768677">+9876 876 876 867 7</a>
                            <img src="{{asset('assets/images/icons/call-icon.png')}}" alt="" class="icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->

    <!-- service area start -->
    <section class="service__area service__area--2 grey-bg pt-95 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 text-center">
                    <div class="section__heading mb-60">
                        <h4 class="section__heading--title-small"><span class="mr-10">//</span>services<span class="ml-10">//</span></h4>
                        <h1 class="section__heading--transparent white">Services</h1>
                        <h2 class="section__heading--title">Data Analytics, Content & IT <br>
                            Managed Service<span>.</span></h2>
                    </div>
                </div>
            </div>
            <div class="row mt-none-30">
                <div class="col-xl-4 col-lg-6 col-md-12 mt-30">
                    <div class="service__box service__box--2 service__box--3">
                        <div class="icon">
                            <img src="{{asset('assets/images/icons/service-d-1.png')}}" class="default" alt="">
                            <img src="{{asset('assets/images/icons/service-h-1.png')}}" class="hover" alt="">
                        </div>
                        <div class="content">
                            <h2 class="title">IT Services</h2>
                            <p>Pure with good hand made</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 mt-30">
                    <div class="service__box service__box--2 service__box--3">
                        <div class="icon">
                            <img src="{{asset('assets/images/icons/service-d-1.png')}}" class="default" alt="">
                            <img src="{{asset('assets/images/icons/service-h-1.png')}}" class="hover" alt="">
                        </div>
                        <div class="content">
                            <h2 class="title">IT Mangement</h2>
                            <p>Pure with good hand made</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 mt-30">
                    <div class="service__box service__box--2 service__box--3">
                        <div class="icon">
                            <img src="{{asset('assets/images/icons/service-d-1.png')}}" class="default" alt="">
                            <img src="{{asset('assets/images/icons/service-h-1.png')}}" class="hover" alt="">
                        </div>
                        <div class="content">
                            <h2 class="title">Infrastructure Plan</h2>
                            <p>Pure with good hand made</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 mt-30">
                    <div class="service__box service__box--2 service__box--3">
                        <div class="icon">
                            <img src="{{asset('assets/images/icons/service-d-1.png')}}" class="default" alt="">
                            <img src="{{asset('assets/images/icons/service-h-1.png')}}" class="hover" alt="">
                        </div>
                        <div class="content">
                            <h2 class="title">Data Security</h2>
                            <p>Pure with good hand made</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 mt-30">
                    <div class="service__box service__box--2 service__box--3">
                        <div class="icon">
                            <img src="{{asset('assets/images/icons/service-d-1.png')}}" class="default" alt="">
                            <img src="{{asset('assets/images/icons/service-h-1.png')}}" class="hover" alt="">
                        </div>
                        <div class="content">
                            <h2 class="title">Firewel Security</h2>
                            <p>Pure with good hand made</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 mt-30">
                    <div class="service__box service__box--2 service__box--3">
                        <div class="icon">
                            <img src="{{asset('assets/images/icons/service-d-1.png')}}" class="default" alt="">
                            <img src="{{asset('assets/images/icons/service-h-1.png')}}" class="hover" alt="">
                        </div>
                        <div class="content">
                            <h2 class="title">Desktop Cloud</h2>
                            <p>Pure with good hand made</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service area end -->

    <!-- support area start -->
    <section class="support__area pt-95 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 text-center">
                    <div class="section__heading white mb-60">
                        <h4 class="section__heading--title-small"><span class="mr-10">//</span>services<span class="ml-10">//</span></h4>
                        <h1 class="section__heading--transparent">Hire Us</h1>
                        <h2 class="section__heading--title">IT Services & Support
                        For Business<span>.</span></h2>
                    </div>
                </div>
            </div>
            <div class="row custom-row mt-none-30">
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mt-30">
                    <div class="support__box">
                        <div class="icon">
                            <img src="{{asset('assets/images/icons/support-icon-1.png')}}" class="default" alt="">
                            <img src="{{asset('assets/images/icons/support-icon-h-1.png')}}" class="hover" alt="">
                        </div>
                        <div class="content">
                            <h2 class="title mb-15">Our Approach</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mt-30">
                    <div class="support__box">
                        <div class="icon">
                            <img src="{{asset('assets/images/icons/support-icon-2.png')}}" class="default" alt="">
                            <img src="{{asset('assets/images/icons/support-icon-h-2.png')}}" class="hover" alt="">
                        </div>
                        <div class="content">
                            <h2 class="title mb-15">Our Values</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mt-30">
                    <div class="support__box">
                        <div class="icon">
                            <img src="{{asset ('assets/images/icons/support-icon-3.png')}}" class="default" alt="">
                            <img src="{{asset ('assets/images/icons/support-icon-h-3.png')}}" class="hover" alt="">
                        </div>
                        <div class="content">
                            <h2 class="title mb-15">Our Resources</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mt-30">
                    <div class="support__box">
                        <div class="icon">
                            <img src="{{asset ('assets/images/icons/support-icon-4.png')}}" class="default" alt="">
                            <img src="{{asset ('assets/images/icons/support-icon-h-4.png')}}" class="hover" alt="">
                        </div>
                        <div class="content">
                            <h2 class="title mb-15">Growth Process</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mt-30">
                    <div class="support__box">
                        <div class="icon">
                            <img src="{{asset ('assets/images/icons/support-icon-5.png')}}" class="default" alt="">
                            <img src="{{ asset('assets/images/icons/support-icon-h-5.png')}}" class="hover" alt="">
                        </div>
                        <div class="content">
                            <h2 class="title mb-15">Our Support</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- support area end -->

    <!-- tema area start -->
    <section class="team-area pt-95 pb-95">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="section__heading mb-50">
                        <h4 class="section__heading--title-small"><span class="mr-10">//</span>Team</h4>
                        <h2 class="section__heading--title">Our Buddys Always Ready <br>
                        To Solve Your Issues<span>.</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="team-carousel owl-carousel">
                        <div class="team__box">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/team/team-1.jpeg')}}" alt="">
                                <div class="social__icons">
                                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                    <a href="#0"><i class="fab fa-behance"></i></a>
                                    <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#0"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <span class="designation">Founder</span>
                                <h4 class="name">Rosalina D. William</h4>
                            </div>
                        </div>
                        <div class="team__box">
                            <div class="thumb">
                                <img src="{{asset('assets/images/team/team-2.jpeg')}}" alt="">
                                <div class="social__icons">
                                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                    <a href="#0"><i class="fab fa-behance"></i></a>
                                    <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#0"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <span class="designation">CEO</span>
                                <h4 class="name">Miranda H. Halim</h4>
                            </div>
                        </div>
                        <div class="team__box">
                            <div class="thumb">
                                <img src="{{asset('assets/images/team/team-3.jpeg')}}" alt="">
                                <div class="social__icons">
                                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                    <a href="#0"><i class="fab fa-behance"></i></a>
                                    <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#0"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <span class="designation">Designer</span>
                                <h4 class="name">Alim D. Dhario</h4>
                            </div>
                        </div>
                        <div class="team__box">
                            <div class="thumb">
                                <img src="{{asset('assets/images/team/team-4.jpeg')}}" alt="">
                                <div class="social__icons">
                                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                    <a href="#0"><i class="fab fa-behance"></i></a>
                                    <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#0"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <span class="designation">Developer</span>
                                <h4 class="name">Rosalina D. William</h4>
                            </div>
                        </div>
                        <div class="team__box">
                            <div class="thumb">
                                <img src="{{asset('assets/images/team/team-1.jpeg')}}" alt="">
                                <div class="social__icons">
                                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                    <a href="#0"><i class="fab fa-behance"></i></a>
                                    <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#0"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <span class="designation">Founder</span>
                                <h4 class="name">Rosalina D. William</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tema area end -->

    <!-- cta area start -->
    <section class="cta__area cta__area--2 pt-75 pb-75 bg_img" data-background="{{asset('assets/images/bg/cta-bg-2.jpeg')}}" data-overlay="dark" data-opacity="7">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="section__heading white">
                        <h4 class="section__heading--title-small"><span class="mr-10">//</span> Call to action</h4>
                        <h2 class="section__heading--title">Just Make An Awesome
                        Tour Here<span>.</span></h2>
                    </div>
                </div>
                <div class="col-xl-6 text-right">
                    <a href="contact.html" class="site-btn mt-40">Get Started Now <span>+</span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- cta area end -->

    <!-- testimonial area start -->
    <section class="testimonial__area testimonial__area--2 grey-bg pt-95 pb-95">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-7 text-center">
                    <div class="section__heading mb-50">
                        <h4 class="section__heading--title-small"><span class="mr-10">//</span>Testimonials<span class="ml-10">//</span></h4>
                        <h1 class="section__heading--transparent white">Feedback</h1>
                        <h2 class="section__heading--title">Our Happy Customers <br>
                        Feedback<span>.</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testimonials__2 owl-carousel">
                        <div class="testimonial">
                            <h4 class="title mb-25">Great Quality Software</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore to
                                magna
                                aliqua. Ut enim ad minim veniam, quis nostrud a exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                aute irure dolor in reprehenderit.</p>
                            <div class="authore mt-35 d-flex align-items-center">
                                <div class="authore--thumb mr-20">
                                    <img src="{{asset('assets/images/others/testimonial-authore-1.png')}}" alt="">
                                </div>
                                <div class="authore--content">
                                    <h5 class="name">Rosalina D. William</h5>
                                    <span class="designatin">Founder, Romada Co.</span>
                                </div>
                            </div>
                            <img src="{{asset('assets/images/icons/quote.png')}}" alt="" class="quote-icon">
                        </div>
                        <div class="testimonial">
                            <h4 class="title mb-25">Great Quality Software</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore to
                                magna
                                aliqua. Ut enim ad minim veniam, quis nostrud a exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                aute irure dolor in reprehenderit.</p>
                            <div class="authore mt-35 d-flex align-items-center">
                                <div class="authore--thumb mr-20">
                                    <img src="{{asset('assets/images/others/testimonial-authore-1.png')}}" alt="">
                                </div>
                                <div class="authore--content">
                                    <h5 class="name">Rosalina D. William</h5>
                                    <span class="designatin">Founder, Romada Co.</span>
                                </div>
                            </div>
                            <img src="{{asset('assets/images/icons/quote.png')}}" alt="" class="quote-icon">
                        </div>
                        <div class="testimonial">
                            <h4 class="title mb-25">Great Quality Software</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore to
                                magna
                                aliqua. Ut enim ad minim veniam, quis nostrud a exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                aute irure dolor in reprehenderit.</p>
                            <div class="authore mt-35 d-flex align-items-center">
                                <div class="authore--thumb mr-20">
                                    <img src="{{asset('assets/images/others/testimonial-authore-1.png')}}" alt="">
                                </div>
                                <div class="authore--content">
                                    <h5 class="name">Rosalina D. William</h5>
                                    <span class="designatin">Founder, Romada Co.</span>
                                </div>
                            </div>
                            <img src="{{asset('assets/images/icons/quote.png')}}" alt="" class="quote-icon">
                        </div>
                        <div class="testimonial">
                            <h4 class="title mb-25">Great Quality Software</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore to magna
                            aliqua. Ut enim ad minim veniam, quis nostrud a exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                            aute irure dolor in reprehenderit.</p>
                            <div class="authore mt-35 d-flex align-items-center">
                                <div class="authore--thumb mr-20">
                                    <img src="{{asset('assets/images/others/testimonial-authore-1.png')}}" alt="">
                                </div>
                                <div class="authore--content">
                                    <h5 class="name">Rosalina D. William</h5>
                                    <span class="designatin">Founder, Romada Co.</span>
                                </div>
                            </div>
                            <img src="{{asset('assets/images/icons/quote.png')}}" alt="" class="quote-icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial area end -->

    <!--  itstaffs area start -->
    <section class="itstaffs-area pt-95 pb-95 bg_img" data-background="assets/images/pattern/map-pattern.png">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="section__heading white mb-40">
                        <h4 class="section__heading--title-small">vailable for 8 hours a day!</h4>
                        <h2 class="section__heading--title">Obtaining Further Information
                        By Make A Contact With Our
                        Experienced IT Staffs<span>.</span></h2>
                    </div>
                    <div class="itstaffs__btns">
                        <a href="about.html" class="site-btn">Learn More <span>+</span></a>
                        <a href="contact.html" class="site-btn white transparent">Make A Call <span><i class="fal fa-phone"></i></span></a>
                    </div>
                </div>
                <div class="col-xl-4 offset-xl-1">
                    <div class="itstaffs-wrap">
                        <div class="banner__rightbox">
                            <div class="banner__rightbox--item mr-30">
                                <div class="circle">
                                    <input type="text" class="knob" value="0" data-rel="65" data-linecap="round" data-width="75"
                                        data-height="75" data-bgcolor="#DEF5FF" data-fgcolor="#086AD8" data-thickness=".10" data-readonly="true"
                                        disabled>
                                </div>
                                <div class="content">
                                    <h3 class="title">Business Growth</h3>
                                    <p>Level is high</p>
                                </div>
                            </div>
                            <div class="banner__rightbox--item mt-90 ml-60">
                                <div class="circle">
                                    <input type="text" class="knob" value="0" data-rel="53" data-linecap="round" data-width="75"
                                        data-height="75" data-bgcolor="#DEF5FF" data-fgcolor="#086AD8" data-thickness=".10" data-readonly="true"
                                        disabled>
                                </div>
                                <div class="content">
                                    <h3 class="title">Provide Fund</h3>
                                    <p>Don’t worry about it</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  itstaffs area end -->

    <!-- blog area start -->
    <div class="blog__area blog__area--2 pt-95 pb-95">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <article class="blog__box blog__box--2">
                        <div class="thumb">
                            <img src="{{ asset('assets/images/news/news-big-1.jpeg')}}" alt="">
                        </div>
                        <div class="content">
                            <span class="cat">// it solutions</span>
                            <h4 class="title"><a href="#0">Create amazing static assets for web UI/UX
                            applications is ready to go<span>.</span></a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                            <div class="meta">
                                <div class="authore">
                                    <div class="authore__thumb">
                                        <img src="{{asset ('assets/images/news/news-authore-2.png')}}" alt="">
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
                <div class="col-xl-6">
                    <div class="newsfeedwrap newsfeedwrap--2">
                        <div class="news__items mt-none-30">
                            <div class="news__item mt-30">
                                <div class="thumb">
                                    <img src="{{asset ('assets/images/news/news-small-1.jpeg')}}" alt="">
                                </div>
                                <div class="content">
                                    <ul class="meta">
                                        <li><a href="#0"><i class="fa fa-calendar-alt"></i> 24th June 2020</a></li>
                                        <li><a href="#0"><i class="fa fa-user"></i> By Admin</a></li>
                                    </ul>
                                    <h4 class="title"><a href="{{url('newsdetails') }}">We are specialists in both economics
                                            and information technologies.</a></h4>
                                </div>
                            </div>
                            <div class="news__item mt-30">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/news/news-small-2.jpeg')}}" alt="">
                                </div>
                                <div class="content">
                                    <ul class="meta">
                                        <li><a href="#0"><i class="fa fa-calendar-alt"></i> 24th June 2020</a></li>
                                        <li><a href="#0"><i class="fa fa-user"></i> By Admin</a></li>
                                    </ul>
                                    <h4 class="title"><a href="{{url('newsdetails') }}">We are specialists in both economics
                                            and information technologies.</a></h4>
                                </div>
                            </div>
                            <div class="news__item mt-30">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/news/news-small-5.jpeg')}}" alt="">
                                </div>
                                <div class="content">
                                    <ul class="meta">
                                        <li><a href="#0"><i class="fa fa-calendar-alt"></i> 24th June 2020</a></li>
                                        <li><a href="#0"><i class="fa fa-user"></i> By Admin</a></li>
                                    </ul>
                                    <h4 class="title"><a href="news-details.html">We are specialists in both economics
                                            and information technologies.</a></h4>
                                </div>
                            </div>
                            <div class="news__item mt-30">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/news/news-small-6.jpeg')}}" alt="">
                                </div>
                                <div class="content">
                                    <ul class="meta">
                                        <li><a href="#0"><i class="fa fa-calendar-alt"></i> 24th June 2020</a></li>
                                        <li><a href="#0"><i class="fa fa-user"></i> By Admin</a></li>
                                    </ul>
                                    <h4 class="title"><a href="{{url('newsdetails') }}">We are specialists in both economics
                                            and information technologies.</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog area end -->

    <!-- newslater area start -->
    <div class="newslater newslater--2 pt-80 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="social__icons social__icons--2">
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