<header class="header-area">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="header-top-info">

                    </div>
                </div>
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
                </div>
            </div>
        </div>
    </div>
    <div class="header-menu-wrapper">
        <div class="container">
            <div class="row header-menu-row">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="logo" /></a>
                    </div>
                </div>
                <div class="col-lg-9 main-menu-wrapper">
                    <div class="main-menu-content">
                        <nav>
                            <ul>
                                <li>
                                    <a href="#">home </a>
                                </li>
                                <li>
                                    <a href="#process">services </a>
                                </li>
                                <li>
                                    <a href="#calculator">Crypto Converter</a>
                                </li>
                                <li>
                                    <a href="#plans">plans</a>
                                </li>
                                <li>
                                    <a href="#pricing">pricing</a>
                                </li>
                                <li><a href="contact-form.html">contact</a></li>
                            </ul>
                        </nav>
                        <div class="logo-right-button">
                            <div class="side-menu-open">
                                <span class="menu__bar"></span>
                                <span class="menu__bar"></span>
                                <span class="menu__bar"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="side-nav-container">
        <div class="humburger-menu">
            <div class="humburger-menu-lines side-menu-close"></div>
        </div>
        <div class="side-menu-wrap">
            <ul class="side-menu-ul">
                <li class="sidenav__item">
                    <a href="{{ route('home') }}">home</a>
                </li>
                <li class="sidenav__item">
                    <a href="#process">services </a>
                </li>
                <li class="sidenav__item">
                    <a href="#calculator">Crypto Converter</a>
                </li>
                <li class="sidenav__item">
                    <a href="#plans">plans</a>
                </li>
                <li class="sidenav__item">
                    <a href="#pricing">pricing</a>
                </li>
                <li class="sidenav__item">
                    <a href="contact-form.html">contact</a>
                </li>
                <li class="sidenav__item sidenav__item2 text-center">
                    @auth
                    <a href="{{ route('logout') }}"><i class="fa fa-power"></i> logout</a>
                    @else
                    <a href="{{ route('login') }}"><i class="fa fa-user"></i> Login</a>
                    <a href="{{ route('register') }}"><i class="fa fa-sign-in-alt"></i> Sign up</a>
                    @endauth
                </li>
            </ul>
        </div>
    </div>
</header>
