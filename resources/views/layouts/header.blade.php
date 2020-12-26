<!DOCTYPE html>
<html dir="rtl" lang="ar-eg">
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
    <link rel="stylesheet" href="{{asset('website/css/font-icons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('website/css/font-icons-rtl.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('website/css/animate.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('website/css/magnific-popup.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('website/css/dark.css')}}" type="text/css" />

    <link rel="stylesheet" href="{{asset('website/css/responsive.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('website/css/responsive-rtl.css')}}" type="text/css" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="{{asset('website/css/colors.php?color=0474c4')}}" type="text/css" />

    <!-- Hosting Demo Specific Stylesheet -->
    <link rel="stylesheet" href="{{asset('website/course/css/fonts.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('website/course/course.css')}}" type="text/css" />
    <link rel="shortcut icon" href="{{asset('website/ico.jpg')}}">
    <link rel="icon" type="image/png" href="{{asset('website/ico.jpg')}}" sizes="192x192">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('website/ico.jpg')}}">

    <!-- / -->
    @yield('css')
<!-- Document Title
    ============================================= -->
    <title>
      أكاديمية أزهري  @yield('title')
    </title>

</head>

<body class="stretched rtl">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">


    <!-- Top Bar
    ============================================= -->
    <div id="top-bar" class="bgcolor dark">

        <div class="container clearfix">

            <div class="row justify-content-between">

                <div class="col-md-2">
                        <!-- Top Links
                     ============================================= -->
                    <div class="top-links">
                        <ul>
                            <li><a href="{{route('cart.index')}}" title="طرق الدفع">طرق الدفع</a></li>
                                <ul>
                                    <li class="d-none d-sm-inline-block"><a href="#"><i class="icon-download-alt" title="أكاديمية أزهري - تحميل التطبيق"></i> تحميل التطبيق</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- .top-links end -->
                </div>

                <div class="col-md-10 d-flex justify-content-center justify-content-md-end">


                    <div id="top-social">
                        <ul>

                        @foreach($contact as $row)
                        <li><a href="https://www.facebook.com/{{$row->facebook}}" title="أكاديمية أزهري - {{$row->facebook}}" rel="nofollow" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">{{$row->facebook}}</span></a></li>
                        <li><a href="https://twitter.com/{{$row->twitter}}"  title="أكاديمية أزهري - {{$row->twitter}}" rel="nofollow" class="si-twitter"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">{{$row->twitter}}</span></a></li>
                        <li><a href="tel:{{$row->phone}}" title="أكاديمية أزهري - {{$row->phone}}" rel="nofollow" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">{{$row->phone}}</span></a></li>
                        <li><a href="mailto:{{$row->mail}}" title="أكاديمية أزهري - {{$row->mail}}" rel="nofollow" class="si-email3"><span class="ts-icon"><i class="icon-envelope-alt"></i></span><span class="ts-text">{{$row->mail}}</span></a></li>
                        @endforeach

                        </ul>
                    </div><!-- #top-social end -->

                </div>
            </div>

        </div>

    </div>
