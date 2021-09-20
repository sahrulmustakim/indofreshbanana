<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indo Fresh Banana</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images')}}/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images')}}/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images')}}/favicons/favicon-16x16.png">
    <link rel="manifest" href="{{asset('images')}}/favicons/site.webmanifest">
    <meta name="description" content="Indo Fresh Banana - Banana Tree Leaves and Stems">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css')}}/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css')}}/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{asset('css')}}/swiper.min.css">
    <link rel="stylesheet" href="{{asset('css')}}/animate.min.css">
    <link rel="stylesheet" href="{{asset('css')}}/odometer.min.css">
    <link rel="stylesheet" href="{{asset('css')}}/jarallax.css">
    <link rel="stylesheet" href="{{asset('css')}}/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('css')}}/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{asset('css')}}/agrikon-icons.css">
    <link rel="stylesheet" href="{{asset('css')}}/nouislider.min.css">
    <link rel="stylesheet" href="{{asset('css')}}/nouislider.pips.css">

    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('css')}}/main.css">
</head>

<body>
    <div class="preloader">
        <img class="preloader__image" width="55" src="{{asset('images')}}/loader.png" alt="">
    </div><!-- /.preloader -->
    <div class="page-wrapper">

        <header class="main-header">
            <div class="topbar">
                <div class="container">
                    <div class="topbar__left">
                        <div class="topbar__social">
                            <a href="#" class="fab fa-facebook-square"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-pinterest-p"></a>
                            <a href="#" class="fab fa-instagram"></a>
                        </div><!-- /.topbar__social -->
                        <p>Welcome to Indo Fresh Banana</p>
                    </div><!-- /.topbar__left -->
                    <div class="topbar__right">
                        <a href="mailto:marketing@indofreshbanana.com"><i class="agrikon-icon-email"></i>marketing@indofreshbanana.com</a>
                    </div><!-- /.topbar__right -->
                </div><!-- /.container -->
            </div><!-- /.topbar -->
            <nav class="main-menu">
                <div class="container">
                    <div class="logo-box">
                        <a href="{{route('home')}}" aria-label="logo image"><img src="{{asset('images')}}/logo-dark.png" width="215" alt=""></a>
                        <span class="fa fa-bars mobile-nav__toggler"></span>
                    </div><!-- /.logo-box -->
                    <ul class="main-menu__list">
                        <li>
                            <a href="{{route('home')}}">Home</a>
                        </li>
                        <li>
                            <a href="{{route('product')}}">Products</a>
                        </li>
                        <li>
                            <a href="{{route('article')}}">Articles</a>
                        </li>
                        <li>
                            <a href="{{route('about')}}">About Us</a>
                        </li>
                        <li>
                            <a href="{{route('contact')}}">Contact Us</a>
                        </li>
                    </ul>
                    <!-- /.main-menu__list -->

                    <div class="main-header__info">
                        <a href="#" class="search-toggler main-header__search-btn"><i class="agrikon-icon-magnifying-glass"></i></a>
                        <a href="tel:62-857-7666-0909" class="main-header__info-phone">
                            <i class="agrikon-icon-phone-call"></i>
                            <span class="main-header__info-phone-content">
                                <span class="main-header__info-phone-text">Call Anytime</span>
                                <span class="main-header__info-phone-title">+62 857-7666-0909</span>
                            </span><!-- /.main-header__info-phone-content -->
                        </a><!-- /.main-header__info-phone -->
                    </div><!-- /.main-header__info -->
                </div><!-- /.container -->
            </nav>
            <!-- /.main-menu -->
        </header><!-- /.main-header -->

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->