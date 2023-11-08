<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="/images/logos.png">
    <!-- Site Title  -->
    <title>Namangan to'qimachilik sanoat instituti</title>
    <!-- Bundle and Base CSS -->
    <link rel="stylesheet" href="/assets/css/vendor.bundle.css?ver=200">
    <link rel="stylesheet" href="/assets/css/style-dark.css?ver=200">
    <!-- Extra CSS -->
    <link rel="stylesheet" href="/assets/css/theme.css?ver=200">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/assets/css/main.css">

    <link rel="stylesheet" type="text/css" href="video/style.css">
</head>

<body class="nk-body body-wider theme-dark mode-onepage">
    <div class="marquee">
        <div>
          <span>@lang('navbar.test')</span>
          <span>@lang('navbar.test')</span>
          <span>@lang('navbar.test')</span>
          <span>@lang('navbar.test')</span>
          <span>@lang('navbar.test')</span>
          <span>@lang('navbar.test')</span>

        </div>
      </div>
    <div class="nk-wrap">
        <header class="nk-header page-header is-transparent is-sticky is-shrink is-dark" id="header">
            <!-- Header @s -->
            <div class="header-main">
                <div class="header-container container">
                    <div class="header-wrap">
                        <!-- Logo @s -->
                        <div class="header-logo logo animated" data-animate="fadeInDown" data-delay=".65">
                            <a href="/" class="logo-link">
                                <img class="logo-dark" src="/images/logog.png" alt="logo">
                                <img class="logo-light" src="/images/logog.png" alt="logo">

                            </a>
                        </div>
                        <!-- Menu Toogle @s -->
                        <div class="header-nav-toggle">
                            <a href="#" class="navbar-toggle" data-menu-toggle="example-menu-04">
                                <div class="toggle-line">
                                    <span></span>
                                </div>
                            </a>
                        </div>
                        <!-- Menu @s -->
                       @include('layouts.navbar')
                        <!-- .header-navbar @e -->
                    </div>
                </div>
            </div>
            <!-- .header-main @e -->
            @yield('content')
            <!-- Footer -->
            <footer class="nk-footer bg-theme-alt ">
                <section class="section tc-light tc-light-alt bg-transparent">
                    <div class="container">
                        <!-- Block @s -->
                        <div class="nk-block nk-block-footer">
                            <div class="row justify-content-between text-center text-sm-start">
                                <div class="col-lg-3 col-md-4 col-sm-5">
                                    <div class="wgs wgs-menu">
                                        <h6 class="wgs-title wgs-title-s2 text-white">@lang('navbar.footer1') : </h6>
                                        <div class="wgs-body">
                                            <ul class="wgs-list wgs-list-s2">
                                                <li class="pdb-s">@lang('navbar.footer2')<br> @lang('navbar.footer3')</li>
                                            </ul>
                                        </div>
                                        <div class="contact-text">
                                            <h5> @lang('navbar.footer4')</h5>
                                           <span><a href="#">+998 (95)-200-43-04</a></span><br>
                                           <span><a href="#">+998 (95)-400-43-04</a></span><br>
                                           <span><a href="#"> +998 (55)-251-43-04</a></span>
                                       </div>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-lg-2 col-md-4 col-sm-3">
                                    <div class="wgs wgs-menu">
                                        <h6 class="wgs-title wgs-title-s2 text-white">@lang('navbar.footer5')</h6>
                                        <div class="wgs-body">
                                            <ul class="wgs-links wgs-links-s2">
                                                <li><a href="/"> @lang('navbar.home')</a></li>
                                                <li><a href="/about">@lang('navbar.nav2')</a></li>
                                                <li><a href="/team">@lang('navbar.nav4')</a></li>
                                                <li><a href="/roadmap">@lang('navbar.nav11')</a></li>
                                                <li><a href="/news">@lang('navbar.nav14')</a></li>
                                                <li><a href="/requisit">@lang('navbar.nav6')</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-lg-2 col-md-4 col-sm-3">
                                    <div class="wgs wgs-menu">
                                        <h6 class="wgs-title wgs-title-s2 text-white">
                                            @lang('navbar.nav6')
                                        </h6>
                                        <div class="wgs-body">
                                            <ul class="wgs-links wgs-links-s2 ">
                                                <h6> R/S</h6>
                                                <li> 23402000300100001010</li>
                                                <h6>L/S</h6>
                                                <li>100010860144017094100079006</li>
                                                <h6> MFO</h6>
                                                <li> 00014</li>
                                                <h6>STIR/INN:</h6>
                                                <li>309 965 572</li>
                                                <h6>OKED</h6>
                                                <li> 85420</li>
                                            </ul>

                                        </div>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-lg-4 col-md-8 offset-lg-1">
                                    <div class="wgs wgs-text">
                                        <a class="wgs-logo" href="./">
                                            <img src="/images/logog.png"  alt="logo">
                                        </a>
                                        <div class="wgs-body">
                                            <div class="wgs-subscribe wgs-subscribe-s2">
                                                <p>@lang('navbar.footer6')</p>
                                                <ul class="social">
                                                    <li><a href="https://t.me/ntsiuz"><em class="social-icon fab fa-telegram"></em></a></li>
                                                    <li><a href="#"><em class="social-icon fab fa-facebook-f"></em></a></li>
                                                    <li><a href="#"><em class="social-icon fab fa-youtube"></em></a></li>
                                                    <li><a href="#"><em class="social-icon fab fa-instagram"></em></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                            </div><!-- .row -->
                            <div class="footer-bottom pdt-r">
                                <div class="copyright-text copyright-text-s3 text-center">
                                    <p>© 2023 NAMTSI website Made by <a href="./">TECHDATA.</a> <a href="./">Privacy policy</a></p>
                                </div>
                            </div>
                        </div><!-- .block @e -->
                    </div>
                </section>
            </footer>
    </div>
    <!-- Preloader -->
    <div class="preloader"><span class="spinner spinner-round"></span></div>
    <!-- JavaScript -->
    <script src="/assets/js/jquery.bundle.js?ver=200"></script>
    <script src="/assets/js/scripts.js?ver=200"></script>
    <script src="/assets/js/charts.js?ver=200"></script>
    <script src="/assets/js/charts.js?ver=200"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="/assets/js/main.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</body>

</html>
