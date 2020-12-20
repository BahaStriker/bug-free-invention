
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="TechyDevs" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Bitcon - Bitcoin  HTML5 Template</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" />

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:100,200,300,400,500,600,700,800&amp;display=swap"
        rel="stylesheet" />

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>

<body>
    <!-- start per-loader -->
    <div class="loader-container">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- end per-loader -->

    <!-- ================================
            START HEADER AREA
================================= -->
    <header class="header-area">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="header-top-info">

                        </div>
                        <!-- end header-top-info -->
                    </div>
                    <!-- end col-lg-6 -->
                    <div class="col-lg-6 col-sm-6">
                        <div class="header-top-info header-login-info">
                            <ul class="info-list">
                                @auth
                                <li>
                                    <a href="{{ route('logout') }}"><i class="fa fa-logout"></i> logout</a>
                                </li>
                                @else
                                <li>
                                    <a href="{{ route('login') }}"><i class="fa fa-user"></i> Login</a>
                                </li>
                                <li>
                                    <a href="{{ route('register') }}"><i class="fa fa-sign-in-alt"></i> Sign up</a>
                                </li>
                                @endauth
                            </ul>
                        </div>
                        <!-- end header-top-info -->
                    </div>
                    <!-- end col-lg-6 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end header-top -->
        <div class="header-menu-wrapper">
            <div class="container">
                <div class="row header-menu-row">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="index.html">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="logo" /></a>
                        </div>
                        <!-- end logo -->
                    </div>
                    <!-- end col-lg-3-->
                    <div class="col-lg-9 main-menu-wrapper">
                        <div class="main-menu-content">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="#">home <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="index.html">home one</a></li>
                                            <li><a href="index-2.html">home two</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">pages <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="about.html">about us</a></li>
                                            <li><a href="service.html">services</a></li>
                                            <li>
                                                <a href="#">user <i class="fa fa-angle-right icon-right"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="sign-up.html">sign up</a></li>
                                                    <li><a href="login.html">login</a></li>
                                                    <li><a href="recover.html">recover password</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">team <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="team-section.html">team grid</a></li>
                                            <li><a href="team-single.html">team detail</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">blog <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="blog-grid.html">blog grid</a></li>
                                            <li><a href="blog-single.html">blog detail</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">elements <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="faq.html">FAQs</a></li>
                                            <li><a href="pricing.html">pricing</a></li>
                                            <li><a href="chart.html">charts</a></li>
                                            <li><a href="error-404.html">error 404 page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact-form.html">contact</a></li>
                                </ul>
                            </nav>
                            <div class="logo-right-button">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="search-button"><i class="fa fa-search"></i></a>
                                    </li>
                                </ul>
                                <div class="side-menu-open">
                                    <span class="menu__bar"></span>
                                    <span class="menu__bar"></span>
                                    <span class="menu__bar"></span>
                                </div>
                                <!-- end side-menu-open -->
                            </div>
                            <!-- end logo-right-button -->
                            <div class="search-option">
                                <form action="#">
                                    <input class="form-control" type="text" placeholder="Search by keywords..." />
                                    <i class="fa fa-search search-icon"></i>
                                </form>
                            </div>
                            <!-- end search-option -->
                        </div>
                        <!-- end main-menu-content -->
                    </div>
                    <!-- end col-lg-9 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end header-menu-wrapper -->
        <div class="side-nav-container">
            <div class="humburger-menu">
                <div class="humburger-menu-lines side-menu-close"></div>
                <!-- end humburger-menu-lines -->
            </div>
            <!-- end humburger-menu -->
            <div class="side-menu-wrap">
                <ul class="side-menu-ul">
                    <li class="sidenav__item">
                        <a href="index.html">home</a>
                        <span class="menu-plus-icon"></span>
                        <ul class="side-sub-menu">
                            <li><a href="index.html">Home one</a></li>
                            <li><a href="index-2.html">Home two</a></li>
                        </ul>
                    </li>
                    <li class="sidenav__item">
                        <a href="#">pages</a>
                        <span class="menu-plus-icon"></span>
                        <ul class="side-sub-menu">
                            <li><a href="about.html">about us</a></li>
                            <li><a href="service.html">services</a></li>
                            <li><a href="sign-up.html">sign up</a></li>
                            <li><a href="login.html">log in</a></li>
                            <li><a href="recover.html">recover password</a></li>
                        </ul>
                    </li>
                    <li class="sidenav__item">
                        <a href="#">team</a>
                        <span class="menu-plus-icon"></span>
                        <ul class="side-sub-menu">
                            <li><a href="team-section.html">team grid</a></li>
                            <li><a href="team-single.html">team detail</a></li>
                        </ul>
                    </li>
                    <li class="sidenav__item">
                        <a href="blog-grid.html">blog</a>
                        <span class="menu-plus-icon"></span>
                        <ul class="side-sub-menu">
                            <li><a href="blog-grid.html">blog grid</a></li>
                            <li><a href="blog-single.html">blog detail</a></li>
                        </ul>
                    </li>
                    <li class="sidenav__item">
                        <a href="#">elements</a>
                        <span class="menu-plus-icon"></span>
                        <ul class="side-sub-menu">
                            <li><a href="faq.html">FAQs</a></li>
                            <li><a href="pricing.html">pricing</a></li>
                            <li><a href="chart.html">charts</a></li>
                            <li><a href="error-404.html">404 error page</a></li>
                        </ul>
                    </li>
                    <li class="sidenav__item">
                        <a href="contact-form.html">contact</a>
                    </li>
                    <li class="sidenav__item sidenav__item2 text-center">
                        <a href="sign-up.html"><i class="fa fa-sign-in-alt"></i> sign up</a>
                    </li>
                </ul>
            </div>
            <!-- end side-menu-wrap -->
        </div>
        <!-- end side-nav-container -->
    </header>
    <!-- ================================
         END HEADER AREA
================================= -->

    <!-- ================================
    START HERO AREA
================================= -->
    <section class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="hero-content">
                        <h1 class="hero__title">Fund it. Spend it. Live on crypto.</h1>
                        <p class="hero__desc">
                            Instantly reload your card with no conversion fee!*
                            <br />
                            <small>*Network fees and miner fees may apply</small>
                        </p>
                        <div class="hero-btn">
                            <a href="#" class="theme-btn">get started now</a>
                            <a class="mfp-iframe video-play-btn" href="https://www.youtube.com/watch?v=GmOzih6I1zs"
                                title="Play Video">
                                Watch a Video <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                    <!-- end hero-content -->
                </div>
                <!-- end col-lg-7 -->
                <div class="col-lg-5">
                    <div class="hero-img-box">
                        <img src="{{ asset('assets/images/v2.png') }}" alt="vector image" class="hero__img" />
                    </div>
                    <!-- end hero-img-box -->
                </div>
                <!-- end col-lg-5 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
        <svg class="wave-svg-box" viewBox="0 0 120 28">
            <defs>
                <filter id="goo">
                    <feGaussianBlur in="SourceGraphic" stdDeviation="1" result="blur" />
                    <feColorMatrix in="blur" mode="matrix" values="
           1 0 0 0 0
           0 1 0 0 0
           0 0 1 0 0
           0 0 0 13 -9" result="goo" />
                    <xfeBlend in="SourceGraphic" in2="goo" />
                </filter>
                <path id="wave"
                    d="M 0,10 C 30,10 30,15 60,15 90,15 90,10 120,10 150,10 150,15 180,15 210,15 210,10 240,10 v 28 h -240 z" />
            </defs>

            <use id="wave3" class="wave" xlink:href="#wave" x="0" y="-2"></use>
            <use id="wave2" class="wave" xlink:href="#wave" x="0" y="0"></use>
            <g class="gooeff" filter="url(#goo)">
                <circle class="drop drop1" cx="20" cy="2" r="8.8" />
                <circle class="drop drop2" cx="25" cy="2.5" r="7.5" />
                <circle class="drop drop3" cx="16" cy="2.8" r="9.2" />
                <circle class="drop drop4" cx="18" cy="2" r="8.8" />
                <circle class="drop drop5" cx="22" cy="2.5" r="7.5" />
                <circle class="drop drop6" cx="26" cy="2.8" r="9.2" />
                <circle class="drop drop1" cx="5" cy="4.4" r="8.8" />
                <circle class="drop drop2" cx="5" cy="4.1" r="7.5" />
                <circle class="drop drop3" cx="8" cy="3.8" r="9.2" />
                <circle class="drop drop4" cx="3" cy="4.4" r="8.8" />
                <circle class="drop drop5" cx="7" cy="4.1" r="7.5" />
                <circle class="drop drop6" cx="10" cy="4.3" r="9.2" />

                <circle class="drop drop1" cx="1.2" cy="5.4" r="8.8" />
                <circle class="drop drop2" cx="5.2" cy="5.1" r="7.5" />
                <circle class="drop drop3" cx="10.2" cy="5.3" r="9.2" />
                <circle class="drop drop4" cx="3.2" cy="5.4" r="8.8" />
                <circle class="drop drop5" cx="14.2" cy="5.1" r="7.5" />
                <circle class="drop drop6" cx="17.2" cy="4.8" r="9.2" />
                <use id="wave1" class="wave" xlink:href="#wave" x="0" y="1" />
            </g>
        </svg>
    </section>
    <!-- end hero-area -->
    <!-- ================================
    END HERO AREA
================================= -->

    <!-- ================================
       START FEATURE AREA
================================= -->
    <section class="feature-area">
        <div class="container">
            <div class="row feature-box">
                <div class="col-lg-3">
                    <div class="feature-item">
                        <span class="feature__number">01</span>
                        <div class="feature__icon">
                            <i class="flaticon-027-bitcoin-8"></i>
                        </div>
                        <h3 class="feature__title">Register an Account</h3>
                        <p class="feature__desc">
                            Sit amet, consectetur cqui adipiscing elit, Quisque.
                        </p>
                        <a href="#" class="theme-btn feature__btn">Read More</a>
                    </div>
                    <!-- end feature-item -->
                </div>
                <!-- end col-lg-3 -->
                <div class="col-lg-3">
                    <div class="feature-item">
                        <span class="feature__number">02</span>
                        <div class="feature__icon">
                            <i class="flaticon-001-bitcoin-20"></i>
                        </div>
                        <h3 class="feature__title">Link your Blockchain Wallet</h3>
                        <p class="feature__desc">
                            Sit amet, consectetur cqui adipiscing elit, Quisque.
                        </p>
                        <a href="#" class="theme-btn feature__btn">Get a Wallet</a>
                    </div>
                    <!-- end feature-item -->
                </div>
                <!-- end col-lg-3 -->
                <div class="col-lg-3">
                    <div class="feature-item">
                        <span class="feature__number">03</span>
                        <div class="feature__icon">
                            <i class="flaticon-028-bitcoin-7"></i>
                        </div>
                        <h3 class="feature__title">Load the Wallet</h3>
                        <p class="feature__desc">
                            Sit amet, consectetur cqui adipiscing elit, Quisque.
                        </p>
                        <a href="#" class="theme-btn feature__btn">Learn to Use</a>
                    </div>
                    <!-- end feature-item -->
                </div>
                <!-- end col-lg-3 -->
                <div class="col-lg-3">
                    <div class="feature-item">
                        <span class="feature__number">04</span>
                        <div class="feature__icon">
                            <i class="flaticon-012-bitcoin-15"></i>
                        </div>
                        <h3 class="feature__title">Order the Card</h3>
                        <p class="feature__desc">
                            Sit amet, consectetur cqui adipiscing elit, Quisque.
                        </p>
                        <a href="#" class="theme-btn feature__btn">Learn to Use</a>
                    </div>
                    <!-- end feature-item -->
                </div>
                <!-- end col-lg-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end feature-area -->
    <!-- ================================
       START FEATURE AREA
================================= -->

    <!-- ================================
       START ABOUT AREA
================================= -->
    <section class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-item">
                        <div class="sec-heading">
                            <div class="heading-circle"></div>
                            <p class="sec__meta">learn about us</p>
                            <h2 class="sec__title">
                                Awards Winning Digital Cryptocurrency Platform.
                            </h2>
                            <p class="sec__desc sec__desc2">
                                <span class="sec-year-time">30</span> Years of experience in
                                digital cryptocurrency business Lorem ipsum dolor sit amet
                            </p>
                            <p class="sec__desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Aliquid at cquie consequatur deserunt dignissimos excepturi
                                illo ipsa ipsum minima, obcaecati officiis qui quidem quos,
                                sunt unde, voluptas.
                            </p>
                            <p class="sec__desc">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                accu santium doloreque laudantum.
                            </p>
                        </div>
                        <!-- end sec-heading -->
                        <a href="about.html" class="theme-btn readmore__btn">read more</a>
                    </div>
                    <!-- end about-item -->
                </div>
                <!-- end col-lg-6 -->
                <div class="col-lg-5 ml-auto">
                    <div class="about-img-box">
                        <img src="{{ asset('assets/images/about-img.jpg') }}" alt="about-us" class="about-img" />
                        <img src="{{ asset('assets/images/about-img2.jpg') }}" alt="about-us" class="about-img" />
                        <a class="mfp-iframe video-play-btn" href="https://www.youtube.com/watch?v=GmOzih6I1zs"
                            title="Play Video">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <span class="heboo-text">BITCON</span>
                    </div>
                    <!-- end about-img-box -->
                </div>
                <!-- end col-lg-5 -->
            </div>
            <!-- end row -->
            <div class="row funfact-wrapper">
                <div class="col-lg-3">
                    <div class="funfact-item">
                        <div class="funfact-icon">
                            <i class="flaticon-032-bitcoin-3 funfact__icon"></i>
                        </div>
                        <span class="funfact__number counter">85389</span>
                        <p class="funfact__meta">Total Transactions</p>
                    </div>
                    <!-- end funfact-item-->
                </div>
                <!-- end col-lg-3 -->
                <div class="col-lg-3">
                    <div class="funfact-item">
                        <div class="funfact-icon">
                            <i class="flaticon-001-bitcoin-20 funfact__icon"></i>
                        </div>
                        <span class="funfact__number counter">6540</span>
                        <p class="funfact__meta">bitcoin wallet</p>
                    </div>
                    <!-- end funfact-item-->
                </div>
                <!-- end col-lg-3 -->
                <div class="col-lg-3">
                    <div class="funfact-item">
                        <div class="funfact-icon">
                            <i class="flaticon-034-consulting funfact__icon"></i>
                        </div>
                        <span class="funfact__number counter">7540</span>
                        <p class="funfact__meta">Happy Users</p>
                    </div>
                    <!-- end funfact-item-->
                </div>
                <!-- end col-lg-3 -->
                <div class="col-lg-3">
                    <div class="funfact-item">
                        <div class="funfact-icon">
                            <i class="flaticon-006-bitcoin-18 funfact__icon"></i>
                        </div>
                        <span class="funfact__number counter">5721</span>
                        <p class="funfact__meta">Bitcoin Investors</p>
                    </div>
                    <!-- end funfact-item-->
                </div>
                <!-- end col-lg-3 -->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="divider">
                        <span class="divider__circle"></span>
                    </div>
                    <!-- end divider -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-sub-box">
                        <p>
                            Do not hesitate to start with us for better help and services.
                            <a href="#" class="theme-btn">get started</a>
                        </p>
                    </div>
                    <!-- end about-sub-box -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end about-area -->
    <!-- ================================
       START ABOUT AREA
================================= -->

    <!-- ================================
       START HOWITWORKS AREA
================================= -->
    <section class="howitworks-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-heading">
                        <div class="heading-circle m-x-auto"></div>
                        <p class="sec__meta">check our process</p>
                        <h2 class="sec__title">
                            Provide Awesome Service for this <br />
                            People Choose Us.
                        </h2>
                    </div>
                    <!-- end sec-heading -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
            <div class="row hiw-content">
                <div class="col-lg-3">
                    <div class="hiw-item">
                        <div class="flaticon__icon">
                            <span class="flaticon-001-bitcoin-20"></span>
                        </div>
                        <h3 class="hiw__title">
                            <a href="service.html">Instant reloads</a>
                        </h3>
                        <p class="hiw__desc">
                            Reload your balance with no conversion fees* and spend. Powered by our competitive exchange rates.
                        </br>
                            <small>*Network fees and miner fees may apply</small>
                        </p>
                    </div>
                    <!-- end hiw-item -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-3">
                    <div class="hiw-item">
                        <div class="flaticon__icon">
                            <span class="flaticon-002-bitcoin-19"></span>
                        </div>
                        <h3 class="hiw__title">
                            <a href="service.html">Flexibility</a>
                        </h3>
                        <p class="hiw__desc">
                            Designed for people who want to live life on crypto. View your balance, request a new PIN, and reload instantly.
                        </p>
                    </div>
                    <!-- end hiw-item -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-3">
                    <div class="hiw-item">
                        <div class="flaticon__icon">
                            <span class="flaticon-014-bitcoin-13"></span>
                        </div>
                        <h3 class="hiw__title">
                            <a href="service.html">Enhanced security</a>
                        </h3>
                        <p class="hiw__desc">
                            Includes EMV chip and options to lock your card and control how you spend.
                        </p>
                    </div>
                    <!-- end hiw-item -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-3">
                    <div class="hiw-item">
                        <div class="flaticon__icon">
                            <span class="flaticon-031-bitcoin-4"></span>
                        </div>
                        <h3 class="hiw__title"><a href="service.html">Worldwide</a></h3>
                        <p class="hiw__desc">
                            Ready to use in millions of locations around the world. Pay with contactless, PIN or simply withdraw cash from any compatible ATM.
                        </p>
                    </div>
                    <!-- end hiw-item -->
                </div>
                <!-- end col-lg-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end howitworks-area -->
    <!-- ================================
       START HOWITWORKS AREA
================================= -->

    <!-- ================================
       START TEAM AREA
================================= -->

    <!-- ================================
     START CALCULATOR AREA
================================= -->
    <section class="calculator-area text-center">
        <span class="howitworks-shape"></span>
        <span class="howitworks-shape"></span>
        <span class="howitworks-shape"></span>
        <span class="howitworks-shape"></span>
        <span class="howitworks-shape"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-heading">
                        <div class="heading-circle m-x-auto"></div>
                        <p class="sec__meta">with all cryptocurrency values</p>
                        <h2 class="sec__title">Calculate Live Cryptocurrency.</h2>
                    </div>
                    <!-- end sec-heading -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="crypto-calculator">
                        <div class="form-inline">
                            <div class="input-group-box">
                                <div class="select-option cyptocurrency">
                                    <select class="select-option-field" id="selected-coin" onchange="bitconCalculateOnCryptoChange(this.value);">
                                        <option value="bitcoin">Bitcoin</option>
                                        <option value="ethereum">Ethereum</option>
                                        <option value="bitcoin-cash">Bitcoin Cash</option>
                                        <option value="litecoin">Litecoin</option>
                                        <option value="ripple">Ripple</option>
                                        <option value="monero">Monero</option>
                                    </select>
                                </div>
                                <input type="text" class="form-control" id="amtBTC" value="1" />
                            </div>
                            <!-- end input-group -->
                            <div class="input-group-box">
                                <input type="text" class="form-control decrement" id="amtUSD" value="0.00" />
                                <div class="select-option crypto-price">
                                    <select id="selected-currency" onchange="bitconCalculateOnCurrencyChange(this.value);" class="select-option-field capitalize">
                                        <option value="GGP">GGP - Guernsey Pound</option>
                                        <option value="LKR">LKR - Sri Lankan-rupee</option>
                                        <option value="UYU">UYU - Uruguayan Peso</option>
                                        <option value="ARS">ARS - Argentine Peso</option>
                                        <option value="BBD">BBD - Barbadian Dollar</option>
                                        <option value="BIF">BIF - Burundian Franc</option>
                                        <option value="AED">AED - United Arab-emirates-dirham</option>
                                        <option value="IRR">IRR - Iranian Rial</option>
                                        <option value="RWF">RWF - Rwandan Franc</option>
                                        <option value="TMT">TMT - Turkmenistani Manat</option>
                                        <option value="ZMW">ZMW - Zambian Kwacha</option>
                                        <option value="BRL">BRL - Brazilian Real</option>
                                        <option value="UGX">UGX - Ugandan Shilling</option>
                                        <option value="HRK">HRK - Croatian Kuna</option>
                                        <option value="VEF">VEF - Venezuelan Bolívar-fuerte</option>
                                        <option value="GBP">GBP - British Pound-sterling</option>
                                        <option value="NOK">NOK - Norwegian Krone</option>
                                        <option value="DKK">DKK - Danish Krone</option>
                                        <option value="GEL">GEL - Georgian Lari</option>
                                        <option value="AFN">AFN - Afghan Afghani</option>
                                        <option value="CVE">CVE - Cape Verdean-escudo</option>
                                        <option value="TWD">TWD - New Taiwan-dollar</option>
                                        <option value="AZN">AZN - Azerbaijani Manat</option>
                                        <option value="ZAR">ZAR - South African-rand</option>
                                        <option value="PKR">PKR - Pakistani Rupee</option>
                                        <option value="VUV">VUV - Vanuatu Vatu</option>
                                        <option value="KHR">KHR - Cambodian Riel</option>
                                        <option value="MOP">MOP - Macanese Pataca</option>
                                        <option value="SGD">SGD - Singapore Dollar</option>
                                        <option value="JPY">JPY - Japanese Yen</option>
                                        <option value="MDL">MDL - Moldovan Leu</option>
                                        <option value="KMF">KMF - Comorian Franc</option>
                                        <option value="COP">COP - Colombian Peso</option>
                                        <option value="IQD">IQD - Iraqi Dinar</option>
                                        <option value="SRD">SRD - Surinamese Dollar</option>
                                        <option value="KES">KES - Kenyan Shilling</option>
                                        <option value="LSL">LSL - Lesotho Loti</option>
                                        <option value="ETB">ETB - Ethiopian Birr</option>
                                        <option value="KGS">KGS - Kyrgystani Som</option>
                                        <option value="LYD">LYD - Libyan Dinar</option>
                                        <option value="QAR">QAR - Qatari Rial</option>
                                        <option value="KRW">KRW - South Korean-won</option>
                                        <option value="NGN">NGN - Nigerian Naira</option>
                                        <option value="GMD">GMD - Gambian Dalasi</option>
                                        <option value="TJS">TJS - Tajikistani Somoni</option>
                                        <option value="KZT">KZT - Kazakhstani Tenge</option>
                                        <option value="SVC">SVC - Salvadoran Colón</option>
                                        <option value="CLF">CLF - Chilean Unit-of-account-(uf)</option>
                                        <option value="JOD">JOD - Jordanian Dinar</option>
                                        <option value="PLN">PLN - Polish Zloty</option>
                                        <option value="NPR">NPR - Nepalese Rupee</option>
                                        <option value="LBP">LBP - Lebanese Pound</option>
                                        <option value="XCD">XCD - East Caribbean-dollar</option>
                                        <option value="XOF">XOF - Cfa Franc-bceao</option>
                                        <option value="BAM">BAM - Bosnia Herzegovina-convertible-mark</option>
                                        <option value="XPT">XPT - Platinum Ounce</option>
                                        <option value="RUB">RUB - Russian Ruble</option>
                                        <option value="BYN">BYN - Belarusian Ruble</option>
                                        <option value="SBD">SBD - Solomon Islands-dollar</option>
                                        <option value="AOA">AOA - Angolan Kwanza</option>
                                        <option value="HUF">HUF - Hungarian Forint</option>
                                        <option value="SHP">SHP - Saint Helena-pound</option>
                                        <option value="MNT">MNT - Mongolian Tugrik</option>
                                        <option value="IDR">IDR - Indonesian Rupiah</option>
                                        <option value="PGK">PGK - Papua New-guinean-kina</option>
                                        <option value="SZL">SZL - Swazi Lilangeni</option>
                                        <option value="BND">BND - Brunei Dollar</option>
                                        <option value="SOS">SOS - Somali Shilling</option>
                                        <option value="GYD">GYD - Guyanaese Dollar</option>
                                        <option value="GIP">GIP - Gibraltar Pound</option>
                                        <option value="IMP">IMP - Manx Pound</option>
                                        <option value="EUR">EUR - Euro</option>
                                        <option value="SAR">SAR - Saudi Riyal</option>
                                        <option value="BDT">BDT - Bangladeshi Taka</option>
                                        <option value="LAK">LAK - Laotian Kip</option>
                                        <option value="UZS">UZS - Uzbekistan Som</option>
                                        <option selected value="USD">USD - United States-dollar</option>
                                        <option value="HKD">HKD - Hong Kong-dollar</option>
                                        <option value="KYD">KYD - Cayman Islands-dollar</option>
                                        <option value="FJD">FJD - Fijian Dollar</option>
                                        <option value="MVR">MVR - Maldivian Rufiyaa</option>
                                        <option value="MYR">MYR - Malaysian Ringgit</option>
                                        <option value="SYP">SYP - Syrian Pound</option>
                                        <option value="NAD">NAD - Namibian Dollar</option>
                                        <option value="HTG">HTG - Haitian Gourde</option>
                                        <option value="CUP">CUP - Cuban Peso</option>
                                        <option value="XPD">XPD - Palladium Ounce</option>
                                        <option value="TND">TND - Tunisian Dinar</option>
                                        <option value="LRD">LRD - Liberian Dollar</option>
                                        <option value="XAG">XAG - Silver Ounce</option>
                                        <option value="HNL">HNL - Honduran Lempira</option>
                                        <option value="VND">VND - Vietnamese Dong</option>
                                        <option value="ERN">ERN - Eritrean Nakfa</option>
                                        <option value="VES">VES - Venezuelan Bolívar-soberano</option>
                                        <option value="RSD">RSD - Serbian Dinar</option>
                                        <option value="XPF">XPF - Cfp Franc</option>
                                        <option value="JMD">JMD - Jamaican Dollar</option>
                                        <option value="MRU">MRU - Mauritanian Ouguiya</option>
                                        <option value="BOB">BOB - Bolivian Boliviano</option>
                                        <option value="BWP">BWP - Botswanan Pula</option>
                                        <option value="DZD">DZD - Algerian Dinar</option>
                                        <option value="CDF">CDF - Congolese Franc</option>
                                        <option value="CRC">CRC - Costa Rican-colón</option>
                                        <option value="TRY">TRY - Turkish Lira</option>
                                        <option value="FKP">FKP - Falkland Islands-pound</option>
                                        <option value="ANG">ANG - Netherlands Antillean-guilder</option>
                                        <option value="BHD">BHD - Bahraini Dinar</option>
                                        <option value="WST">WST - Samoan Tala</option>
                                        <option value="BTN">BTN - Bhutanese Ngultrum</option>
                                        <option value="CNY">CNY - Chinese Yuan-renminbi</option>
                                        <option value="MAD">MAD - Moroccan Dirham</option>
                                        <option value="MUR">MUR - Mauritian Rupee</option>
                                        <option value="TTD">TTD - Trinidad And-tobago-dollar</option>
                                        <option value="BZD">BZD - Belize Dollar</option>
                                        <option value="PAB">PAB - Panamanian Balboa</option>
                                        <option value="YER">YER - Yemeni Rial</option>
                                        <option value="XAF">XAF - Cfa Franc-beac</option>
                                        <option value="CZK">CZK - Czech Republic-koruna</option>
                                        <option value="OMR">OMR - Omani Rial</option>
                                        <option value="PHP">PHP - Philippine Peso</option>
                                        <option value="CAD">CAD - Canadian Dollar</option>
                                        <option value="ZWL">ZWL - Zimbabwean Dollar</option>
                                        <option value="MGA">MGA - Malagasy Ariary</option>
                                        <option value="GHS">GHS - Ghanaian Cedi</option>
                                        <option value="STD">STD - São Tomé-and-príncipe-dobra-(pre-2018)</option>
                                        <option value="RON">RON - Romanian Leu</option>
                                        <option value="MWK">MWK - Malawian Kwacha</option>
                                        <option value="CHF">CHF - Swiss Franc</option>
                                        <option value="DJF">DJF - Djiboutian Franc</option>
                                        <option value="GTQ">GTQ - Guatemalan Quetzal</option>
                                        <option value="BMD">BMD - Bermudan Dollar</option>
                                        <option value="KWD">KWD - Kuwaiti Dinar</option>
                                        <option value="SEK">SEK - Swedish Krona</option>
                                        <option value="XDR">XDR - Special Drawing-rights</option>
                                        <option value="SLL">SLL - Sierra Leonean-leone</option>
                                        <option value="BGN">BGN - Bulgarian Lev</option>
                                        <option value="AUD">AUD - Australian Dollar</option>
                                        <option value="NZD">NZD - New Zealand-dollar</option>
                                        <option value="MRO">MRO - Mauritanian Ouguiya-(pre-2018)</option>
                                        <option value="ILS">ILS - Israeli New-sheqel</option>
                                        <option value="AMD">AMD - Armenian Dram</option>
                                        <option value="CNH">CNH - Chinese Yuan-(offshore)</option>
                                        <option value="MZN">MZN - Mozambican Metical</option>
                                        <option value="AWG">AWG - Aruban Florin</option>
                                        <option value="DOP">DOP - Dominican Peso</option>
                                        <option value="UAH">UAH - Ukrainian Hryvnia</option>
                                        <option value="JEP">JEP - Jersey Pound</option>
                                        <option value="SCR">SCR - Seychellois Rupee</option>
                                        <option value="TZS">TZS - Tanzanian Shilling</option>
                                        <option value="PYG">PYG - Paraguayan Guarani</option>
                                        <option value="SDG">SDG - Sudanese Pound</option>
                                        <option value="MKD">MKD - Macedonian Denar</option>
                                        <option value="EGP">EGP - Egyptian Pound</option>
                                        <option value="MXN">MXN - Mexican Peso</option>
                                        <option value="PEN">PEN - Peruvian Nuevo-sol</option>
                                        <option value="INR">INR - Indian Rupee</option>
                                        <option value="CUC">CUC - Cuban Convertible-peso</option>
                                        <option value="STN">STN - São Tomé-and-príncipe-dobra</option>
                                        <option value="CLP">CLP - Chilean Peso</option>
                                        <option value="XAU">XAU - Gold Ounce</option>
                                        <option value="SSP">SSP - South Sudanese-pound</option>
                                        <option value="GNF">GNF - Guinean Franc</option>
                                        <option value="THB">THB - Thai Baht</option>
                                        <option value="KPW">KPW - North Korean-won</option>
                                        <option value="MMK">MMK - Myanma Kyat</option>
                                        <option value="ISK">ISK - Icelandic Króna</option>
                                    </select>
                                </div>
                            </div>
                            <!-- end input-group -->
                        </div>
                        <!-- end form-inline -->
                    </div>
                    <!-- end crypto-calculator -->
                </div>
                <!-- end col-lg-8 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end calculator-area -->
    <!-- ================================
     END CALCULATOR AREA
================================= -->

    <!-- ================================
       START CTA AREA
================================= -->
    <section class="cta-area">
        <div class="circle-icons">
            <div class="circle-one"></div>
            <div class="circle-two"></div>
            <div class="circle-three"></div>
        </div>
        <!-- end box-icons -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="sec-heading">
                        <div class="heading-circle"></div>
                        <h2 class="sec__title">Are You Ready to Join With Us.</h2>
                        <p class="sec__desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit era.
                        </p>
                    </div>
                    <!-- end sec-heading -->
                </div>
                <!-- end col-lg-8 -->
                <div class="col-lg-4">
                    <div class="cta-btn-box">
                        <div class="circle-icons2">
                            <div class="circle-one"></div>
                            <div class="circle-two"></div>
                            <div class="circle-three"></div>
                        </div>
                        <a href="#" class="theme-btn">get started</a>
                    </div>
                    <!-- end cta-btn-box -->
                </div>
                <!-- end col-lg-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end cta-area -->
    <!-- ================================
       START CTA AREA
================================= -->

    <!-- ================================
       START PACKAGE AREA
================================= -->
    <section class="package-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="sec-heading">
                        <div class="heading-circle m-x-auto"></div>
                        <p class="sec__meta">affordable packages</p>
                        <h2 class="sec__title">Choose Pricing Plan.</h2>
                    </div>
                    <!-- end sec-heading -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="package-tab-content">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active" id="tab4">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="package-content">

                                            <h4 class="package__title">
                                                get 0.007 btc
                                            </h4>
                                            <img src="{{ asset('assets/images/bc-3.png') }}" />
                                            <div class="price__box">
                                                <span class="currency"><i class="fa fa-dollar-sign"></i></span>
                                                <span class="price__price">100</span>
                                            </div>
                                            <a href="#" class="order__btn">buy now</a>
                                        </div>
                                        <!-- end package-content -->
                                    </div>
                                    <!-- end col-lg-3 -->
                                    <div class="col-lg-4">
                                        <div class="package-content">
                                            <h4 class="package__title">
                                                get 0.015 btc
                                            </h4>
                                            <img src="{{ asset('assets/images/bc-2.png') }}" />
                                            <div class="price__box">
                                                <span class="currency"><i class="fa fa-dollar-sign"></i></span>
                                                <span class="price__price">300</span>
                                            </div>
                                            <a href="#" class="order__btn">buy now</a>
                                        </div>
                                        <!-- end package-content -->
                                    </div>
                                    <!-- end col-lg-3 -->
                                    <div class="col-lg-4">
                                        <div class="package-content package-content3">
                                            <h4 class="package__title">
                                                get 0.031 btc
                                            </h4>
                                            <img src="{{ asset('assets/images/bc-1.png') }}" />
                                            <div class="price__box">
                                                <span class="currency"><i class="fa fa-dollar-sign"></i></span>
                                                <span class="price__price">500</span>
                                            </div>
                                            <a href="#" class="order__btn">buy now</a>
                                        </div>
                                        <!-- end package-content -->
                                    </div>
                                    <!-- end col-lg-3 -->
                                </div>
                            </div>
                            <!-- end tab-pane -->
                        </div>
                        <!-- end tab-content -->
                    </div>
                    <!-- end package-tab-content -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="divider">
                        <span class="divider__circle"></span>
                    </div>
                    <!-- end divider -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end package-area -->
    <!-- ================================
       START PACKAGE AREA
================================= -->

    <!-- ================================
       START MARKETPRICE AREA
================================= -->
    <section class="marketprice-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="sec-heading text-center">
                        <div class="heading-circle m-x-auto"></div>
                        <p class="sec__meta">check out market depth</p>
                        <h2 class="sec__title">Cryptocurrency Prices.</h2>
                    </div>
                    <!-- end sec-heading -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="coinprice-table table-responsive">
                        <table class="table table-bordered text-left">
                            <thead>
                                <tr>
                                    <th>cryptocurrency</th>
                                    <th>Price</th>
                                    <th>24 % Charge</th>
                                    <th>24h Volume</th>
                                    <th>Supply</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <table class="inner-table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="{{ asset('assets/images/bitcoin-symble.png') }}" class="img-responsive"
                                                            alt="table-img" />
                                                    </td>
                                                    <td>
                                                        <p class="currency__title">Bitcoin(BTC)</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td>
                                        <p>11128.06</p>
                                    </td>
                                    <td>
                                        <p>14.44%</p>
                                    </td>
                                    <td>
                                        <p>218,017 BTC</p>
                                    </td>
                                    <td>
                                        <p>923,629</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table class="inner-table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="{{ asset('assets/images/ethereum-symble.png') }}" class="img-responsive"
                                                            alt="table-img" />
                                                    </td>
                                                    <td>
                                                        <p class="currency__title">ethereum(ETH)</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td>
                                        <p>407.14</p>
                                    </td>
                                    <td>
                                        <p>16.17%</p>
                                    </td>
                                    <td>
                                        <p>1,223,367 ETH</p>
                                    </td>
                                    <td>
                                        <p>663,133</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table class="inner-table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="{{ asset('assets/images/litecoin_symble.png') }}" class="img-responsive"
                                                            alt="table-img" />
                                                    </td>
                                                    <td>
                                                        <p class="currency__title">litecoin(LTC)</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td>
                                        <p>7.47</p>
                                    </td>
                                    <td>
                                        <p>-1.09</p>
                                    </td>
                                    <td>
                                        <p>3362 LTC</p>
                                    </td>
                                    <td>
                                        <p>427,132</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table class="inner-table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="{{ asset('assets/images/ripple-symble.png') }}" class="img-responsive"
                                                            alt="table-img" />
                                                    </td>
                                                    <td>
                                                        <p class="currency__title">ripple(XRP)</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td>
                                        <p>0.22</p>
                                    </td>
                                    <td>
                                        <p>20.80%</p>
                                    </td>
                                    <td>
                                        <p>211,418,299 XRP</p>
                                    </td>
                                    <td>
                                        <p>719,280</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table class="inner-table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="{{ asset('assets/images/veritaseum-symble.png') }}" class="img-responsive"
                                                            alt="table-img" />
                                                    </td>
                                                    <td>
                                                        <p class="currency__title">veritaseum(VERI)</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td>
                                        <p>84.22</p>
                                    </td>
                                    <td>
                                        <p>-14.56%</p>
                                    </td>
                                    <td>
                                        <p>36 VERI</p>
                                    </td>
                                    <td>
                                        <p>218,887</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table class="inner-table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="{{ asset('assets/images/monero-symble.png') }}" class="img-responsive"
                                                            alt="table-img" />
                                                    </td>
                                                    <td>
                                                        <p class="currency__title">monero(XMR)</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td>
                                        <p>87.77</p>
                                    </td>
                                    <td>
                                        <p>20.44%</p>
                                    </td>
                                    <td>
                                        <p>2,218,288 LTC</p>
                                    </td>
                                    <td>
                                        <p>719,288</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- end table -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end marketprice-area -->
    <!-- ================================
       START MARKETPRICE AREA
================================= -->


    <!-- ================================
       START NEWSLETTER AREA
================================= -->
    <section class="newsleller-area">
        <div class="container">
            <div class="subscriber-box">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="sec-heading">
                            <div class="heading-circle"></div>
                            <p class="sec__meta">Get in touch</p>
                            <h2 class="sec__title">Subscribe to Our Newsletter</h2>
                        </div>
                        <!-- end sec-heading -->
                    </div>
                    <!-- end col-lg-7 -->
                    <div class="col-lg-5">
                        <div class="subscriber-wrap">
                            <form action="#">
                                <div class="subscriber-form">
                                    <input type="text" class="form-control" placeholder="Enter your email" />
                                    <i class="fa fa-envelope"></i>
                                    <button class="theme-btn">subscribe</button>
                                </div>
                            </form>
                        </div>
                        <!-- end subscriber-wrap -->
                    </div>
                    <!-- end col-lg-5 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end subscriber-box -->
        </div>
        <!-- end container -->
    </section>
    <!-- end app-area -->
    <!-- ================================
       START NEWSLETTER AREA
================================= -->

    <!-- ================================
         END FOOTER AREA
================================= -->
    <section class="footer-area">
        <svg class="footer-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1047.1 3.7"
            preserveAspectRatio="xMidYMin slice">
            <path class="elementor-shape-fill"
                d="M1047.1,0C557,0,8.9,0,0,0v1.6c0,0,0.6-1.5,2.7-0.3C3.9,2,6.1,4.1,8.3,3.5c0.9-0.2,1.5-1.9,1.5-1.9	s0.6-1.5,2.7-0.3C13.8,2,16,4.1,18.2,3.5c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3C23.6,2,25.9,4.1,28,3.5c0.9-0.2,1.5-1.9,1.5-1.9	c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2	c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3C63,2,65.3,4.1,67.4,3.5	C68.3,3.3,69,1.6,69,1.6s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3	C82.7,2,85,4.1,87.1,3.5c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3C92.6,2,94.8,4.1,97,3.5c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3	c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9	c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2	c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3	c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9	c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2	c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3	c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9	c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2	c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3	c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9	s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2	c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3	c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9	s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2	c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3	c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9	s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2	c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3	c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9	s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2	c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3	c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9	s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2	c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3	c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9	s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2	c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3	c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9	c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2	c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3	c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9	c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2	c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3	c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9	c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2	c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3	c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9	s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2	c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3	c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9	s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2	c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3	c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9	s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2	c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3	c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9	s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2	c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3	c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9	s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2	c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3	c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9	s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2	c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3	c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9	c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2	c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3	c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.6-0.4V0z M2.5,1.2C2.5,1.2,2.5,1.2,2.5,1.2C2.5,1.2,2.5,1.2,2.5,1.2z M2.7,1.4c0.1,0,0.1,0.1,0.1,0.1C2.8,1.4,2.8,1.4,2.7,1.4z">
            </path>
        </svg>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-shared">
                        <a href="index.html">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="footer logo" class="footer__logo" />
                        </a>
                        <p class="footer-address-links">
                            <a href="tel:+1631237884">+163 123 7884</a>
                            <a href="mailto:support@wbsite.com" class="mail">Support@Website.com</a>
                            <span class="address">Melbourne, Australia, 105 South Park Avenue</span>
                        </p>
                        <h4 class="footer-meta">stay connected on.</h4>
                        <ul class="footer-link">
                            <li>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i
                                        class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i
                                        class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i
                                        class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Google Plus"><i
                                        class="fab fa-google-plus-g"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!-- end footer-shared -->
                </div>
                <!-- end col-lg-3 -->
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-shared footer-widget">
                        <h3 class="footer-title">
                            company.
                            <span class="footer-title-shape"></span>
                            <span class="footer-title-shape"></span>
                            <span class="footer-title-shape"></span>
                        </h3>
                        <ul class="footer-link company-link">
                            <li><a href="#">jobs</a></li>
                            <li><a href="#">about us</a></li>
                            <li><a href="#">meet our team</a></li>
                            <li><a href="#">our advisors</a></li>
                            <li><a href="#">services</a></li>
                            <li><a href="#">contact us</a></li>
                        </ul>
                    </div>
                    <!-- end footer-shared -->
                </div>
                <!-- end col-lg-3 -->
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-shared footer-widget2">
                        <h3 class="footer-title">
                            help & support.
                            <span class="footer-title-shape"></span>
                            <span class="footer-title-shape"></span>
                            <span class="footer-title-shape"></span>
                        </h3>
                        <ul class="footer-link company-link">
                            <li><a href="#">guide</a></li>
                            <li><a href="faq.html">FAQs</a></li>
                            <li><a href="#">advertise</a></li>
                            <li><a href="#">help center</a></li>
                            <li><a href="#">privacy policy</a></li>
                            <li><a href="#">terms of use</a></li>
                        </ul>
                    </div>
                    <!-- end footer-shared -->
                </div>
                <!-- end col-lg-3 -->
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-shared footer-widget3">
                        <h3 class="footer-title">
                            quick links.
                            <span class="footer-title-shape"></span>
                            <span class="footer-title-shape"></span>
                            <span class="footer-title-shape"></span>
                        </h3>
                        <ul class="footer-link company-link">
                            <li><a href="#">buy bitcoins</a></li>
                            <li><a href="#">sell bitcoins</a></li>
                            <li><a href="#">exchange</a></li>
                            <li><a href="#">free schedule</a></li>
                            <li><a href="#">payment options</a></li>
                            <li><a href="#">login</a></li>
                        </ul>
                    </div>
                    <!-- end footer-shared -->
                </div>
                <!-- end col-lg-3 -->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="divider">
                        <span class="divider__circle"></span>
                    </div>
                    <!-- end divider -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
            <div class="copyright-content row">
                <div class="col-lg-6">
                    <p class="copy__desc">
                        &copy; 2020 Bitcon. All Rights Reserved. By
                        <a href="https://themeforest.net/user/techydevs/portfolio">TechyDevs.</a>
                    </p>
                </div>
                <!-- end col-lg-6 -->
                <div class="col-lg-6 text-right">
                    <ul class="payment__currency">
                        <li>
                            <img src="{{ asset('assets/images/american-express.png') }}" alt="american-express" />
                        </li>
                        <li>
                            <img src="{{ asset('assets/images/mastercard.png') }}" alt="mastercard" />
                        </li>
                        <li>
                            <img src="{{ asset('assets/images/visa.png') }}" alt="visa" />
                        </li>
                        <li>
                            <img src="{{ asset('assets/images/paypal.png') }}" alt="paypal" />
                        </li>
                        <li>
                            <img src="{{ asset('assets/images/maestro.png') }}" alt="maestro" />
                        </li>
                    </ul>
                </div>
                <!-- end col-lg-6 -->
            </div>
            <!-- end copyright-content -->
        </div>
        <!-- end container -->
    </section>
    <!-- end footer-area -->
    <!-- ================================
          END FOOTER AREA
================================= -->

    <!-- start back-to-top -->
    <div id="back-to-top">
        <i class="fas fa-angle-up" title="Go top"></i>
    </div>
    <!-- end back-to-top -->

    <!-- Template JS Files -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/chart.js') }}"></script>
    <script src="{{ asset('assets/js/result-chart.js') }}"></script>
    <script src="{{ asset('assets/js/doughutchart.js') }}"></script>
    <script src="{{ asset('assets/js/waypoint.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/smooth-scrolling.js') }}"></script>
    <script src="{{ asset('assets/js/calculate-script.js') }}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
