<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- xxx Basics xxx -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- xxx Change With Your Information xxx -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no" />
    <title>@yield('title')</title>
    <meta name="description" content="Alorpoth Kollyan Sangstha">
    <meta name="keywords" content="NGO,Non profit Charity">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon_io/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon_io/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/favicon_io/site.webmanifest') }}">
    <!-- Animate CSSS -->
    <link href="{{ asset('assets/library/animate/animate.min.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/library/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Icofont CSS -->
    <link href="{{ asset('assets/library/icofont/icofont.min.css') }}" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link href="{{ asset('assets/library/owlcarousel/css/owl.carousel.min.css') }}" rel="stylesheet">
    <!-- Select Dropdown CSS -->
    <link href="{{ asset('assets/library/select2/css/select2.min.css') }}" rel="stylesheet">
    <!-- Magnific Popup CSS -->
    <link href="{{ asset('assets/library/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
    <!-- Main Theme CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- Home SLider CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/home-main.css') }}">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap4.min.css">

</head>

<body>

    <!-- Page loader Start -->
    <!-- <div id="pageloader">
        <div class="loader-item">
            <div class="loader">
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
            </div>
        </div>
    </div> -->
    <!-- Page loader End -->

    <!-- Header Start -->
    <header>
        <div class="top-bar-right d-flex align-items-center text-md-left">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col d-flex align-items-center contact-info">
                        <div>
                            <i data-feather="phone"></i> <a href="tel:{{ siteInfo()->phone }}">{{ siteInfo()->phone }}</a>
                        </div>
                        <div>
                            <i data-feather="mail"></i> <a href="mailto:{{ siteInfo()->email }}">{{ siteInfo()->email }}</a>
                        </div>
                        <div>
                            <i data-feather="clock"></i> {{ siteInfo()->opening_hrs }}
                        </div>
                    </div>

                    <div class="col-md-auto">
                        <div class="social-icons">
                            @if(siteInfo()->social_facebook)
                            <a href="{{ siteInfo()->social_facebook }}"><i class="icofont-facebook"></i></a>
                            @endif
                            @if(siteInfo()->social_twitter)
                            <a href="{{ siteInfo()->social_twitter}}"><i class="icofont-twitter"></i></a>
                            @endif
                            @if(siteInfo()->social_instagram)
                            <a href="{{ siteInfo()->social_instagram }}"><i class="icofont-instagram"></i></a>
                            @endif
                            @if(siteInfo()->social_behance)
                            <a href="{{ siteInfo()->social_behance }}"><i class="icofont-behance"></i></a>
                            @endif
                            @if(siteInfo()->social_youtube)
                            <a href="{{ siteInfo()->social_youtube }}"><i class="icofont-youtube-play"></i></a>
                            @endif
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Navigation Start -->
        <nav class="navbar navbar-expand-lg header-fullpage">
            <div class="container text-nowrap">
                <div class="d-flex align-items-center w-100 col p-0 logo-brand">
                   
                    <a class="navbar-brand rounded-bottom light-bg" style="width: 200px;" href="{{ route('home') }}">
                        @if(siteInfo()->site_logo)
                        <img src="{{ asset('apks/public/uploads/logo/'.siteInfo()->site_logo) }}" alt="logo">
                        @else 
                        <img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo">
                        @endif
                    </a>
                </div>
                <!-- Topbar Buttons Start -->
                <div class="d-inline-flex request-btn order-lg-last col-auto p-0 align-items-center">
                    <a class="btn-outline-primary btn ml-3" href="#" id="search_home"><i data-feather="search"></i></a>

                    <a class="nav-link btn btn-default ml-3 donate-btn" href="{{ route('donation') }}">Donate</a>

                    <!-- Toggle Button Start -->
                    <button class="navbar-toggler x collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Toggle Button End -->
                </div>
                <!-- Topbar Buttons End -->

                <div class="collapse navbar-collapse" id="navbarCollapse" data-hover="dropdown" data-animations="slideInUp">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle-mob" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About<i class="icofont-rounded-down"></i></a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown03">
                                <li><a class="dropdown-item" href="{{ route('about') }}">About us</a></li>
                                <li><a class="dropdown-item" href="{{ route('mv') }}">Mission & Vision</a></li>
                                <li><a class="dropdown-item" href="{{ route('summery') }}">Organization Summary</a></li>
                                <li class="dropdown dropdown-submenu">
                                    <a class="dropdown-toggle-mob dropdown-item dropdown-submenu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Team<i class="icofont-rounded-right float-right"></i></a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a href="{{ route('team.advisory') }}" class="dropdown-item">Advisory Board</a></li>
                                        <li><a href="{{ route('team.executive') }}" class="dropdown-item">Executive Board</a></li>
                                        <li><a href="{{ route('team.official') }}" class="dropdown-item">Officials</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle-mob" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Activity<i class="icofont-rounded-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('activity.programme') }}">Program</a></li>
                                <li><a class="dropdown-item" href="{{ route('activity.project') }}">Project</a></li>
                                <li><a class="dropdown-item" href="{{ route('activity.event') }}">Events</a></li>
                            </ul>
                        </li>
                       
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle-mob" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Media<i class="icofont-rounded-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('gallery') }}">Gallery</a></li>
                                <li><a class="dropdown-item" href="{{ route('video') }}">Video</a></li>
                                <li><a class="dropdown-item" href="{{ route('news') }}">News</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle-mob" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Report<i class="icofont-rounded-down"></i></a>
                            <ul class="dropdown-menu">
                                @foreach (GetReportCategory() as $item)
                                    
                                <li><a class="dropdown-item" href="{{ route('report', $item->cat_slug) }}">{{ $item->cat_name }}</a></li>
                                @endforeach
                                
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle-mob" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Notice<i class="icofont-rounded-down"></i></a>
                            <ul class="dropdown-menu">
                                @foreach (GetNoticeCategory() as $item)
                                 
                                <li><a class="dropdown-item" href="{{ route('notice', $item->cat_slug) }}">{{ $item->cat_name }}</a></li>
                                @endforeach
                              
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('career') }}">Career</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                        </li>

                    </ul>
                    <!-- Main Navigation End -->
                </div>
            </div>
        </nav>
        <!-- Main Navigation End -->
    </header>
    <!-- Header end -->

    @yield('content')

    
<!-- Main Footer Start -->
<footer class="wide-tb-70 pb-0 mb-spacer-md">
    <div class="container pos-rel">
        <div class="row">
            <div class="col-lg-5 col-md-10">
                <div class="footer-subscribe">
                    <h3>Newsletter</h3>
                    <h2>Get Update Every Week</h2>
                    <form action="{{ route('newsletter.email') }}" method="POST">
                        @csrf
                    <div class="input-wrap">
                        <input type="email" name="email" required placeholder="Enter Your Email">
                        <button type="submit" class="btn btn-default">Subscribe now</button>
                    </div>
                </form>
                </div>
            </div>
            <div class="give-us-call">
                <i data-feather="phone"></i>
                <h4>Give us a call</h4>
                <h3>{{ siteInfo()->phone }}</h3>
            </div>
        </div>
        <div class="row">
            <!-- Column First -->
            <div class="col-lg-4 col-md-6">
                <div class="logo-footer">
                    <img src="{{ asset('assets/images/logo_white.svg') }}" alt="">
                </div>
                <p>{{ substr(siteInfo()->site_description, 0, 500) }}</p>
                <div class="social-icons">
                    <ul class="list-unstyled list-group list-group-horizontal">
                        @if(siteInfo()->social_facebook)
                        <li><a href="{{ siteInfo()->social_facebook }}"><i class="icofont-facebook"></i></a></li>
                        @endif
                        @if(siteInfo()->social_twitter)
                        <li><a href="{{ siteInfo()->social_twitter}}"><i class="icofont-twitter"></i></a></li>
                        @endif
                        @if(siteInfo()->social_instagram)
                        <li><a href="{{ siteInfo()->social_instagram }}"><i class="icofont-instagram"></i></a></li>
                        @endif
                        @if(siteInfo()->social_behance)
                        <li><a href="{{ siteInfo()->social_behance }}"><i class="icofont-behance"></i></a></li>
                        @endif
                        @if(siteInfo()->social_youtube)
                        <li><a href="{{ siteInfo()->social_youtube }}"><i class="icofont-youtube-play"></i></a></li>
                        @endif
                    </ul>
                </div>
            </div>
            <!-- Column First -->



            <!-- Spacer For Medium -->
            <div class="w-100 d-none d-md-block d-lg-none spacer-30"></div>
            <!-- Spacer For Medium -->

            <!-- Column Third -->
            <div class="col-lg-4 col-md-6">
                <h3 class="footer-heading">Explore Us</h3>
                <div class="footer-widget-menu">
                    <ul class="list-unstyled">
                        <li><a href="{{ route('about') }}"><i class="icofont-simple-right"></i> <span>About Us</span></a></li>
                    </ul>
                </div>
            </div>
            <!-- Column Third -->
            <!-- Column Second -->
            <div class="col-lg-4 col-md-6">
                <h3 class="footer-heading">Contact Info</h3>

                <div class="footer-widget-contact">
                    <ul class="list-unstyled">
                        <li>
                            <div><i data-feather="map-pin"></i> </div>
                            <div>{{ siteInfo()->address }}</div>
                        </li>
                        <li>
                            <div><i data-feather="phone"></i> </div>
                            <div><a href="tel:{{ siteInfo()->phone }}">{{ siteInfo()->phone }}</a></div>
                        </li>
                        <li>
                            <div><i data-feather="mail"></i> </div>
                            <div><a href="mailto:{{ siteInfo()->email }}">{{ siteInfo()->email }}</a></div>
                        </li>
                        <li>
                            <div><i data-feather="clock"></i> </div>
                            <div>{{ siteInfo()->opening_hrs }}</div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Column Second -->
        </div>
    </div>

    <div class="copyright-wrap">
        <div class="container pos-rel">
            <div class="row text-md-start text-center">
                <div class="col-sm-12 col-md-auto copyright-text">
                    © Copyright <span class="txt-blue">Alorpoth Kallyan Sangstha</span> {{ date('Y') }}
                    {{-- {{ getData()->page_heading }} --}}
                </div>
                <!-- <div class="col-sm-12 col-md-auto ml-md-auto text-md-right text-center copyright-links">
                    <a href="#">Terms & Condition</a> | <a href="#">Privacy Policy</a> | <a href="#">Legal</a>
                </div> -->
            </div>
        </div>
    </div>
</footer>
<!-- Main Footer End -->

<!-- Search Popup Start -->
<div class="overlay overlay-hugeinc">
    <form class="form-inline mt-2 mt-md-0">
        <div class="form-inner">
            <div class="form-inner-div d-inline-flex align-items-center no-gutters">
                <div class="col-auto">
                    <i class="icofont-search"></i>
                </div>
                <div class="col">
                    <input class="form-control w-100 p-0" type="text" placeholder="Search" aria-label="Search">
                </div>
                <div class="col-auto">
                    <a href="#" class="overlay-close link-oragne"><i class="icofont-close-line"></i></a>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- Search Popup End -->

<!-- Back To Top Start -->
<a id="mkdf-back-to-top" href="#" class="off"><i data-feather="corner-right-up"></i></a>
<!-- Back To Top End -->

<!-- Jquery Library JS -->
<script src="{{ asset('assets/library/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('assets/library/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://kit.fontawesome.com/30c7cd8c6d.js') }}" crossorigin="anonymous"></script>
<!-- Feather Icon JS -->
<script src="{{ asset('assets/library/feather-icons/feather.min.js') }}"></script>
<!-- Owl Carousel JS -->
<script src="{{ asset('assets/library/owlcarousel/js/owl.carousel.min.js') }}"></script>
<!-- Select2 Dropdown JS -->
<script src="{{ asset('assets/library/select2/js/select2.min.js') }}"></script>
<!-- Magnific Popup JS -->
<script src="{{ asset('assets/library/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<!-- jflickrfeed Images JS -->
<script src="{{ asset('assets/library/jflickrfeed/jflickrfeed.min.js') }}"></script>
<!-- Way Points JS -->
<script src="{{ asset('assets/library/jquery-waypoints/jquery.waypoints.min.js') }}"></script>
<!-- Count Down JS -->
<script src="{{ asset('assets/library/countdown/jquery.countdown.min.js') }}"></script>
<!-- Appear JS -->
<script src="{{ asset('assets/library/jquery-appear/jquery.appear.js') }}"></script>
<!-- Jquery Easing JS -->
<script src="{{ asset('assets/library/jquery-easing/jquery.easing.min.js') }}"></script>
<!-- Counter JS -->
<script src="{{ asset('assets/library/jquery.counterup/jquery.counterup.min.js') }}"></script>
<!-- Form Validation JS -->
<script src="{{ asset('assets/library/jquery-validate/jquery.validate.min.js') }}"></script>
<!--======magnefic popup=====-->
<script src="js/jquery.magnific-popup.min.js') }}"></script>
<!-- Theme Custom -->
<script src="{{ asset('assets/js/site-custom.js') }}"></script>
<!-- Home Slider (Only For Home pages) -->
<script src="{{ asset('assets/js/home-slider.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session()->has('success'))
<script>
    Swal.fire({
        position: 'top-center',
        icon: 'success',
        title: '{{ session()->get('success') }}',
        timer: 3000
        })
</script>
@endif
@if(session()->has('error'))
<script>
    Swal.fire({
        position: 'top-center',
        icon: 'error',
        title: 'Something happened wrong',
        timer: 3000
        })
</script>
@endif
    @yield('scripts')

</body>



</html>