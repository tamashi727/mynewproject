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
                            <a href="{{ url('career') }}" class="job-btn"><i class="fal fa-briefcase"></i> Get Job Feeds</a>
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
                                            <li><a href="{{url('/')}}">Homepage 01</a></li>
                                            <li><a href="{{url('indexx')}}">Homepage 02</a></li>
                                            <li><a href="{{url('ttindex')}}">Homepage 03</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('about')}}">About</a></li>
                                    <li><a href="{{url('services')}}">Services <span>+</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="{{url('services')}}">Services</a></li>
                                            <li><a href="{{url('servicedetails')}}">Service Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#0">Pages <span>+</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="{{url('faq')}}">Faq</a></li>
                                            <li><a href="{{url('career')}}">Careers</a></li>
                                            <li><a href="{{url('team')}}">Team</a></li>
                                            <li><a href="{{url('teamdetails')}}">Team Details</a></li>
                                            <li><a href="{{url('whychoose')}}">Why Choose</a></li>
                                            <li><a href="{{url('portfolio')}}">Portfolio</a></li>
                                            <li><a href="{{url('portfoliodetails')}}">Portfolio Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url('news')}}">News</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{url('news')}}">News</a></li>
                                            <li><a href="{{url('newsdetails')}}">News Details</a></li>
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
    <section class="breadcrumb pt-150 pb-150 bg_img" data-background="assets/images/bg/breadcrumb-bg-1.jpeg"
        data-overlay="dark" data-opacity="5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__wrap">
                        <h2 class="title">Contact Us</h2>
                        <div class="breadcrumb__nav">
                            <ul>
                                <li><span>//</span></li>
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li>|</li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- cotact area start -->
    <div class="contact__area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="contact__wrap pt-95 pb-95">
                        <div class="row justify-content-center">
                            <div class="col-xl-10">
                                <div class="contact__form">
                                    @if(Session::has('message_sent'))
                                    <div class="alert alert-success" role="alert">
                                        {{Session::get('message_sent')}}
                                        </div>
                                        @endif

                                    <form id="contacts-us-form" action="{{ route('contact.send') }}"  enctype="multipart/form-data" method="POST">
                                        @csrf
                                        <div class="row mt-none-30">
                                            <div class="col-xl-6 mt-30">
                                                <div class="form__group">
                                                    <label for="name"><i class="fal fa-user"></i></label>
                                                    <input name="name" type="text" id="name" placeholder="Enter your full name">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 mt-30">
                                                <div class="form__group">
                                                    <label for="email"><i class="fal fa-envelope"></i></label>
                                                    <input name="email" type="email" id="email" placeholder="Enter email address">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 mt-30">
                                                <div class="form__group">
                                                    <label for="tel"><i class="fal fa-phone"></i></label>
                                                    <input name="phone" type="tel" id="tel" placeholder="Add phone number">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 mt-30">
                                                <div class="form__group">
                                                    <label for="subject"><i class="fal fa-book"></i></label>
                                                    <input name="subject" type="text" id="subject" placeholder="Enter your subject">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 mt-30">
                                                <div class="form__group">
                                                    <label for="message"><i class="fal fa-pen"></i></label>
                                                    <textarea name="message" id="message" placeholder="Enter messages"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 mt-30 text-center">
                                                <button class="site-btn" type="submit">Get Free Consultancy</button>
                                                <p class="ajax-response mt-15" style="color: #fff;"></p>
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
    <!-- cotact area end -->

    <!-- contact info area start -->
    <div class="contactinfo__area">
        <div class="container">
            <div class="row mt-none-30">
                <div class="col-xl-4 col-lg-6 mt-30">
                    <div class="contact__info">
                        <div class="icon">
                            <i class="fal fa-map"></i>
                            <span><i class="fal fa-check"></i></span>
                        </div>
                        @foreach($data as $phone)
                        <div class="content">
                            <h2 class="title">Office Address</h2>
                            <p>{{ $phone->address }} <br>
                             </p>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mt-30">
                    <div class="contact__info contact__info--black">
                        <div class="icon">
                            <i class="fal fa-phone"></i>
                            <span><i class="fal fa-check"></i></span>
                        </div>
                        @foreach($data as $phone)
                        <div class="content">
                            <h2 class="title">Phone Number</h2>
                            <a href="tel:{{ $phone->phone }}">{{ $phone->phone }}</a>
                            <a href="tel:675"></a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mt-30">
                    <div class="contact__info contact__info--blue">
                        <div class="icon">
                            <i class="fal fa-globe"></i>
                            <span><i class="fal fa-check"></i></span>
                        </div>
                        @foreach($data as $phone)
                        <div class="content">
                            <h2 class="title">Web Connect</h2>
                            <a href="mailto:{{ $phone->email }}">{{ $phone->email }}</a>
                            <a href="mailto:#"></a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact info area end -->

    <!-- map area start -->
    <div id="contact-map"></div>
    <!-- map area end -->

    <!-- footer area start -->
    <footer class="site-footer bg_img pt-100" data-background="{{asset('assets/images/pattern/footer-pattern.png')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <a href="{{url('/')}}" class="site-logo mb-50">
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
                            <li><a href="{{url('contactus')}}">Contact Us</a></li>
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
