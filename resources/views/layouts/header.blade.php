<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
	============================================= -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('website/css/bootstrap.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('website/css/bootstrap.css.map')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('website/css/bootstrap-rtl.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('style.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('style-rtl.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('website/css/swiper.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('website/css/dark.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('website/css/dark-rtl.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('website/css/font-icons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('website/css/font-icons-rtl.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('website/css/animate.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('website/css/magnific-popup.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('website/css/dark.css')}}" type="text/css" />

    <link rel="stylesheet" href="{{asset('website/css/responsive.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('website/css/responsive-rtl.css')}}" type="text/css" />
    @yield('css')
<!-- Document Title
    ============================================= -->
    <title>
        @yield('title')
    </title>

</head>

<body class="stretched dark">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Top Bar
    ============================================= -->
    <div id="top-bar">

        <div class="container clearfix">

            <div class="col_half nobottommargin">

                <!-- Top Links
                ============================================= -->
                <div class="top-links">
                    <ul>
                        <li><a href="faqs.html">خريطة الموقع</a></li>
                        @guest
                            @if (Route::has('register'))

                            <li><a href="{{url('/register')}}">تسجيل الدخول</a>
                            <div class="top-link-section">
                                <form id="top-login" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}

                                    <div class="input-group" id="top-login-username">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="icon-user"></i></div>
                                        </div>
                                        <input type="email" class="form-control" name="email" placeholder="البريد الألكتروني" required="">
                                    </div>
                                    <div class="input-group" id="top-login-password">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="icon-key"></i></div>
                                        </div>
                                        <input type="password" class="form-control" name="password" placeholder="كلمة السر " required="">
                                    </div>
                                    <label class="checkbox">
                                        <input type="checkbox" value="remember-me">تذكرني
                                    </label>
                                    <button class="btn btn-danger btn-block" type="submit">سجل الآن</button>
                                </form>
                            </div>
                        </li>
                            @endif
                        @else
                            <li class="mega-menu-title dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">


                                    <div class="dropdown-divider"></div>
                                    <!-- item-->
                                    <a href="{{ route('logout') }}" class="dropdown-item notify-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        <i class="fe-log-out"></i>

                                        <span>{{__('تسجيل الخروج')}}</span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

                    </ul>
                </div><!-- .top-links end -->

            </div>

            <div class="col_half fright col_last nobottommargin">

                <!-- Top Social
                ============================================= -->
                <div id="top-social">
                    <ul>
                        <li><a href="#" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
                        <li><a href="#" class="si-twitter"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
                        <li><a href="#" class="si-dribbble"><span class="ts-icon"><i class="icon-dribbble"></i></span><span class="ts-text">Dribbble</span></a></li>
                        <li><a href="#" class="si-github"><span class="ts-icon"><i class="icon-github-circled"></i></span><span class="ts-text">Github</span></a></li>
                        <li><a href="#" class="si-pinterest"><span class="ts-icon"><i class="icon-pinterest"></i></span><span class="ts-text">Pinterest</span></a></li>
                        <li><a href="#" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
                        <li><a href="tel:+91.11.85412542" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">+91.11.85412542</span></a></li>
                        <li><a href="mailto:info@canvas.com" class="si-email3"><span class="ts-icon"><i class="icon-email3"></i></span><span class="ts-text">info@canvas.com</span></a></li>
                    </ul>
                </div><!-- #top-social end -->

            </div>

        </div>

    </div><!-- #top-bar end -->
