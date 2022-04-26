<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr-FR" lang="fr-FR">
   <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr-FR" lang="{{ config('app.locale') }}">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]>
         <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
         <![endif]-->
    <title>Synergy Packaging</title>
    <meta name="author" content="BKH-LAB">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/assets/css/style.css') }}">
    <!-- icomoon font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/assets/css/arcik.css') }}">
    <!-- Fontawesome -->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('website/assets/css/all.min.css') }}"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/assets/css/responsive.css') }}">
    <!-- Swiper slide -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/assets/css/swiper-bundle.min.css') }}">
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('website/images/favicon.ico') }}">
    <!--[if lt IE 9]>
         <script src="javascript/html5shiv.js"></script>
         <script src="javascript/respond.min.js"></script>
         <![endif]-->
    <style>
        .widget-socials::before,
        .widget-socials::after {
            display: none !important;
        }

    </style>
    @yield('css')

<body data-spy="scroll" data-target=".footer-links" data-offset="20" class="header-fixed counter-scroll">
    <!-- preloader -->
    <div class="preload preload-container">
        <div class="preload-logo"></div>
    </div>
    <!-- /preloader -->
    <div id="wrapper" class="animsition">
        <div id="page" class="clearfix">
            <!-- Header Wrap -->
            <div id="site-header-wrap">
                <div id="top-bar">
                    <div id="top-bar-inner">
                        <div class="top-bar-inner-wrap">
                            <div class="top-bar-content">
                                <div class="inner top-style-2">
                                    <div class="top-bar-left">
                                        <span class="content"><a
                                                href="mailto:{{ $settings->contact_mail }}">{{ $settings->contact_mail }}</a></span>
                                        <span class="content"><a
                                                href="tel:{{ $settings->phone_number }}">+{{ $settings->phone_number }}</a></span>
                                    </div>
                                    <div class="top-bar-right">
                                        <ul class="list-content content">
                                            <li> <a href="{{ $settings->facbook_link }}" target='__blank'><i
                                                        class="bi bi-facebook"></i></a></li>
                                            <li> <a href="{{ $settings->linkedin_link }}" target='__blank'><i
                                                        class="bi bi-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /.top-bar-content -->
                        </div>
                    </div>
                </div>
                <!-- /#top-bar -->
                <!-- Header -->
                <header id="site-header">
                    <div id="site-logo" class="clearfix">
                        <div id="site-log-inner">
                            <a href="{{ route('website.home') }}" rel="home" class="main-logo">
                                <img src="{{ asset('website/images/logo.png') }}" alt="Synergy Packaging" width="150"
                                    height="55">
                            </a>
                        </div>
                    </div>
                    <div class="mobile-button">
                        <span></span>
                    </div>
                    <!-- /.mobile-button -->
                    <!-- /#site-logo -->
                    <div id="site-header-inner">
                        <div class="wrap-inner clearfix">
                            <nav id="main-nav" class="main-nav">
                                <ul id="menu-primary-menu" class="menu">
                                    <li
                                        class="menu-item text-uppercase {{ Route::is('website.home') ? 'current-menu-item' : '' }}">
                                        <a href="{{ route('website.home') }}">{{ __('app.Accueil') }}</a>
                                    </li>
                                    <li
                                        class="menu-item text-uppercase {{ Route::is('website.about') ? 'current-menu-item' : '' }}">
                                        <a href="{{ route('website.about') }}"> {{ __('app.about-us') }}</a>
                                    </li>
                                    <li
                                        class="menu-item text-uppercase {{ Route::is('website.nos-metiers') ? 'current-menu-item' : '' }}">
                                        <a
                                            href="{{ route('website.nos-metiers') }}">{{ __('app.Nos métiers') }}</a>
                                    </li>
                                    <li
                                        class="menu-item text-uppercase {{ Route::is('website.nos-missions') ? 'current-menu-item' : '' }}">
                                        <a
                                            href="{{ route('website.nos-missions') }}">{{ __('app.Nos missions') }}</a>
                                    </li>
                                    <li
                                        class="menu-item text-uppercase {{ Route::is('website.nos-references') ? 'current-menu-item' : '' }}">
                                        <a
                                            href="{{ route('website.nos-references') }}">{{ __('app.Nos références') }}</a>
                                    </li>
                                    <!--<li-->
                                    <!--    class="menu-item text-uppercase {{ Route::is('website.nos-projets') ? 'current-menu-item' : '' }}">-->
                                    <!--    <a href="{{ route('website.nos-projets') }}">Nos Projets</a>-->
                                    <!--</li>-->
                                    <li
                                        class="menu-item text-uppercase {{ Route::is('website.contact') ? 'current-menu-item' : '' }}">
                                        <a href="{{ route('website.contact') }}">{{ __('app.Contact') }}</a>
                                    </li> 
                                    <li
                                        class="menu-item text-uppercase {{ Route::is('website.careers') ? 'current-menu-item' : '' }}">
                                        <a href="{{ route('website.careers') }}">{{ __('app.careers') }}</a>
                                    </li>
                                    <li class="menu-item text-uppercase " style="margin-right: 0px !important;">
                                        <a href="language/fr"
                                            class="{{ app()->getLocale() === 'fr' ? 'text-danger text-decoration-underline' : '' }}">
                                            <img src="{{ asset('website/images/flags/fr.png') }}" alt="" width="20px"
                                                class='pb-2'> FR</a>
                                    </li>
                                    <li class="menu-item text-uppercase" style="margin-right: 0px !important;">
                                        <a href="language/en"
                                            class="{{ app()->getLocale() === 'en' ? 'text-danger text-decoration-underline' : '' }}">
                                            <img src="{{ asset('website/images/flags/uk.png') }}" alt="" width="20px"
                                                class='pb-2'> EN</a>
                                    </li>
                                    <div class="pull-right">
                                    </div>
                                </ul>
                            </nav>
                            <!-- /#main-nav -->
                        </div>
                        <!-- /.wrap-inner -->
                    </div>
                    <!-- /#site-header-inner -->
                </header>
                <div style="height: 100px; display: none;"></div>
                <!-- /#site-header -->
            </div>
            <!-- #site-header-wrap -->
        </div>
        <!-- /#page -->
        @yield('content')
        <footer id="footer" class="footer">
            <div class="footer-newsletter" id="newsletter">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <div class="section-title">Newsletter</div>
                            <p>{{ __('app.newsLetter') }}</p>
                        </div>
                        <div class="col-lg-6">
                            <form action="{{ route('website.subscribeToNewsLetter') }}" method="POST">
                                @csrf
                                <input type="email" name="email" required><input class="button" type="submit"
                                    value="{{ __('app.newsLetter-sub') }}">
                            </form>
                            @if (Session::has('subscribe-success'))
                                <div class="text-success text-center mt-5 text-bold">
                                    <strong>{{ Session::get('subscribe-success') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-top">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-5 col-md-12 footer-info">
                            <a href="index.html" class="logo d-flex align-items-center">
                                <img src="{{ asset('website/images/logo.png') }}" alt="images">
                            </a>
                            <p>{{ __('app.our_missions_text') }}</p>
                            <div class="social-links mt-3">
                                <a href="{{ $settings->facbook_link }}" target="_blank" class="facebook"><i
                                        class="bi bi-facebook"></i></a>
                                <a href="{{ $settings->linkedin_link }}" target="_blank" class="linkedin"><i
                                        class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6 footer-links">
                            <h4>{{ __('app.useful-links') }}</h4>
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <a
                                        href="{{ route('website.home') }}">{{ __('app.Accueil') }}</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="{{ route('website.about') }}">
                                        {{ __('app.about-us') }}</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a
                                        href="{{ route('website.nos-metiers') }}">{{ __('app.Nos métiers') }}</a>
                                </li>
                                <li><i class="bi bi-chevron-right"></i> <a
                                        href="{{ route('website.nos-missions') }}">{{ __('app.Nos missions') }}</a>
                                    </h4>
                                </li>
                                <li><i class="bi bi-chevron-right"></i> <a
                                        href="{{ route('website.nos-references') }}">{{ __('app.Nos références') }}</a>
                                </li>
                                <!--        <li><i class="bi bi-chevron-right"></i> <a href="{{ route('website.nos-projets') }}">Nos Projets</a></li> -->
                            </ul>
                        </div>
                        <div class="col-lg-2 col-6 footer-links">
                            <h4>{{ __('app.footer-services') }}</h4>
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <a
                                        href="#section1">{{ __('missions.m1_title') }}</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">{{ __('missions.m2_title') }}</a>
                                </li>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">{{ __('missions.m3_title') }}</a>
                                </li>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">{{ __('missions.m4_title') }}</a>
                                </li>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">Our Services</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 footer-contact text-md-start">
                            <h4>{{ __('app.informations_de') }} {{ __('app.contact_footer') }}</h4>
                            <p>
                                {{ $settings->address }}<br>
                                <strong>{{ __('app.contact_footer_phone') }}: </strong> <a
                                    href="tel:+{{ $settings->phone_number }}">+{{ $settings->phone_number }}</a><br>
                                <strong>WhatsApp:</strong> <a href="https://wa.me/{{ substr($settings->phone_number, 4) }}">{{ $settings->phone_number }}</a> <br>
                                <strong>Email: </strong><a
                                    href="mailto:{{ $settings->contact_mail }}">{{ $settings->contact_mail }}</a><br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    &copy; Copyright {{ now()->format('Y') }} <strong><span>Synergy Packaging</span></strong>. All
                    Rights Reserved
                </div>
                <div class="credits">
                    Designed by <a href="https://bkh-lab.com/">BKH-LAB</a>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>
        <!-- /#wrapper -->
        <!-- Javascript -->
        <script src="{{ asset('website/assets/js/jquery.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
                integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
                integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
        </script>
        <script src="{{ asset('website/assets/js/countto.js') }}"></script>
        <script src="{{ asset('website/assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('website/assets/js/main.js') }}"></script>
        <script src="{{ asset('website/assets/js/shortcodes.js') }}"></script>
        <script src="{{ asset('website/assets/js/jquery.easing.js') }}"></script>
        <script src="{{ asset('website/assets/js/jquery.fancybox.js') }}"></script>
        <script src="{{ asset('website/assets/js/plugin.js') }}"></script>
        <!-- Swiper slide -->
        <script src="{{ asset('website/assets/js/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('website/assets/js/swiper.js') }}"></script>
        @yield('js')
</body>

</html>
