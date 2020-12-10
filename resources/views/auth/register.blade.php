<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Tivo is a HTML landing page template built with Bootstrap to help you crate engaging presentations for SaaS apps and convert visitors into users.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title> NgeeekAdmin App HTML Landing Page Template</title>
    

    <link rel="stylesheet" href="/css/app.css">
    <!-- Styles -->


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('public/fonts/vendor/@fortawesome/fontawesome-free') }}" rel="stylesheet">
    <link href="{{ asset('css/swiper.css') }}" rel="stylesheet">
	<link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css')}}" rel="stylesheet">
    
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<body>
    <div id="app">
        <body data-spy="scroll" data-target=".fixed-top">
    
            <!-- Preloader -->
            <div class="spinner-wrapper">
                <div class="spinner">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
            </div>
            <!-- end of preloader -->
            
        
            <!-- Navigation -->
            <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
                <div class="container">
        
                    <!-- Text Logo - Use this if you don't have a graphic logo -->
                    <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Tivo</a> -->
        
                    <!-- Image Logo -->
                    <a class="navbar-brand logo-image" href="http://localhost:8000/"><img src="images/capug.PNG" alt="NGEEEKADMIN" ></a> 
                    
                    <!-- Mobile Menu Toggle Button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-awesome fas fa-bars"></span>
                        <span class="navbar-toggler-awesome fas fa-times"></span>
                    </button>
                    <!-- end of mobile menu toggle button -->
        
                    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="#header">HOME <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="#features">FEATURES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="#details">DETAILS</a>
                            </li>
        
                            <!-- Dropdown Menu -->          
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle page-scroll" href="#video" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">VIDEO</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="article-details.html"><span class="item-text">ARTICLE DETAILS</span></a>
                                    <div class="dropdown-items-divide-hr"></div>
                                    <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">TERMS CONDITIONS</span></a>
                                    <div class="dropdown-items-divide-hr"></div>
                                    <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">PRIVACY POLICY</span></a>
                                </div>
                            </li>
                            <!-- end of dropdown menu -->
        
                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="http://localhost:8000/invoice">PRICING</a>
                            </li>
                        </ul>
                        <span class="nav-item">
                            <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="btn-outline-sm"  href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item" hidden>
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                        </span>
                    </div>
                </div> <!-- end of container -->
            </nav> <!-- end of navbar -->
            <!-- end of navigation -->
        
        
            <!-- Header -->
            <header id="header" class="header">
                <div class="header-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-xl-5">
                                <div class="text-container">
                                    <h1>NgeeekAdmin App</h1>
                                    <p class="p-large">Use Ngeeek to automate your marketing actions in order to reach a much larger audience</p>
                                    <a class="btn-solid-lg page-scroll" href="{{ route('register') }}">{{ __('SIGN UP') }}</a>
                                </div> <!-- end of text-container -->
                            </div> <!-- end of col -->
                            <div class="col-lg-6 col-xl-7">
                                <div class="image-container">
                                    <div class="img-wrapper">
                                        <img class="img-fluid" src="images/user-cover.jpg" alt="alternative">
                                    </div> <!-- end of img-wrapper -->
                                </div> <!-- end of image-container -->
                            </div> <!-- end of col -->
                        </div> <!-- end of row -->
                    </div> <!-- end of container -->
                </div> <!-- end of header-content -->
            </header> <!-- end of header -->
            <svg class="header-frame" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 310"><defs><style>.cls-1{fill:#5f4def;}</style></defs><title>header-frame</title><path class="cls-1" d="M0,283.054c22.75,12.98,53.1,15.2,70.635,14.808,92.115-2.077,238.3-79.9,354.895-79.938,59.97-.019,106.17,18.059,141.58,34,47.778,21.511,47.778,21.511,90,38.938,28.418,11.731,85.344,26.169,152.992,17.971,68.127-8.255,115.933-34.963,166.492-67.393,37.467-24.032,148.6-112.008,171.753-127.963,27.951-19.26,87.771-81.155,180.71-89.341,72.016-6.343,105.479,12.388,157.434,35.467,69.73,30.976,168.93,92.28,256.514,89.405,100.992-3.315,140.276-41.7,177-64.9V0.24H0V283.054Z"/></svg>
            <!-- end of header -->
        

<header id="header" class="ex-2-header">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</header>
<!-- Footer -->
<svg class="footer-frame" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 79"><defs><style>.cls-2{fill:#5f4def;}</style></defs><title>footer-frame</title><path class="cls-2" d="M0,72.427C143,12.138,255.5,4.577,328.644,7.943c147.721,6.8,183.881,60.242,320.83,53.737,143-6.793,167.826-68.128,293-60.9,109.095,6.3,115.68,54.364,225.251,57.319,113.58,3.064,138.8-47.711,251.189-41.8,104.012,5.474,109.713,50.4,197.369,46.572,89.549-3.91,124.375-52.563,227.622-50.155A338.646,338.646,0,0,1,1920,23.467V79.75H0V72.427Z" transform="translate(0 -0.188)"/></svg>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-col first">
                    <h4>About NgeeekAdmin</h4>
                    <p class="p-small">We're passionate about designing and developing one of the best website apps in the market</p>
                </div>
            </div> <!-- end of col -->
            <div class="col-md-4">
                <div class="footer-col middle">
                    <h4>Important Links</h4>
                    <ul class="list-unstyled li-space-lg p-small">
                        <li class="media">
                            <i class="nav-icon fas fa-tachometer-alt blue"></i>
                            <div class="media-body">Our business partners <a class="white" href="#your-link">startupguide.com</a></div>
                        </li>
                        <li class="media">
                            <i class="nav-icon fas fa-tachometer-alt blue"></i>
                            <div class="media-body">Read our <a class="white" href="terms-conditions.html">Terms & Conditions</a>, <a class="white" href="privacy-policy.html">Privacy Policy</a></div>
                        </li>
                    </ul>
                </div>
            </div> <!-- end of col -->
            <div class="col-md-4">
                <div class="footer-col last">
                    <h4>Contact</h4>
                    <ul class="list-unstyled li-space-lg p-small">
                        <li class="media">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="media-body">behind bahago plaza Minna</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-envelope"></i>
                            <div class="media-body"><a class="white" href="mailto:moodysegun2020@gmail.com">moodysegun2020@gmail.com</a> 
                            </div>
                            
                            <i class="fas fa-globe"></i>
                            <div class="media-body"><a class="white" href="www.ngeeek.com">www.ngeeek.com</a></div>
                        </li>
                    </ul>
                </div> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of footer -->  
<!-- end of footer -->


<!-- Copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="p-small">Copyright © 2020 <a href="https://ngeeek.com">with love from moodyshegs for Ngeek Tech.</a></p>
            </div> <!-- end of col -->
        </div> <!-- enf of row -->
    </div> <!-- end of container -->
</div> <!-- end of copyright --> 
<!-- end of copyright -->

    
<!-- Scripts -->
<script src="{{asset('js/jquery.min.js')}}" defer></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
<script src="{{ asset('js/popper.min.js')}}" defer></script> <!-- Popper tooltip library for Bootstrap -->
<script src="{{ asset('js/bootstrap.min.js')}}" defer></script> <!-- Bootstrap framework -->
<script src="{{ asset('js/jquery.easing.min.js')}}" defer></script> <!-- jQuery Easing for smooth scrolling between anchors -->
<script src="{{ asset('js/swiper.min.js')}}" defer></script> <!-- Swiper for image and text sliders -->
<script src="{{ asset('js/jquery.magnific-popup.js')}}" defer></script> <!-- Magnific Popup for lightboxes -->
<script src="{{ asset('js/validator.min.js')}}" defer></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
<script src="{{ asset('js/scripts.js')}}" defer></script> <!-- Custom scripts -->

</body>
</html>
