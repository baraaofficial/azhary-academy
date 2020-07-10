@include('layouts.header')
<body class="rtl">

<div id="preloader">
    <div class="sk-spinner sk-spinner-wave">
        <div class="sk-rect1"></div>
        <div class="sk-rect2"></div>
        <div class="sk-rect3"></div>
        <div class="sk-rect4"></div>
        <div class="sk-rect5"></div>
    </div>
</div>
<!-- End Preload -->

<div class="layer"></div>
<!-- Mobile menu overlay mask -->

<!-- Header================================================== -->
<header>
    @guest

        @if (Route::has('register'))
            <div id="top_line">
                <div class="container">
                    <div class="row">
                        <div class="col-6"><i class="icon-phone"></i><strong>0045 043204434</strong></div>
                        <div class="col-6">
                            <ul id="top_links">
                                <li><a href="#sign-in-dialog" id="access_link">تسجيل الدخول</a></li>
                            </ul>
                        </div>
                    </div><!-- End row -->
                </div><!-- End container-->
            </div><!-- End top line-->
        @endif

        @else

            <div id="top_line">
                <div class="container">
                    <div class="row">
                        <div class="col-6"><i class="icon-phone"></i><strong>0045 043204434</strong></div>
                        <div class="col-6">
                            <ul id="top_links">
                                <li><a href="wishlist" id="wishlist_link">قائمة الرغبات</a></li>
                            </ul>
                        </div>
                    </div><!-- End row -->
                </div><!-- End container-->
            </div><!-- End top line-->

    @endguest

    <div class="container">
        <div class="row">
            <div class="col-3">
                <div id="logo">
                    <a href="{{url('/')}}"><img src="{{asset('website/img/logo.png')}}" width="160" height="34" alt="City tours" data-retina="true" class="logo_normal"></a>
                    <a href="{{url('/')}}"><img src="{{asset('website/img/logo_sticky.png')}}" width="160" height="34" alt="City tours" data-retina="true" class="logo_sticky"></a>
                </div>
            </div>
            <nav class="col-9">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>

                <div class="main-menu">
                    <div id="header_menu">
                        <img src="{{asset('website/img/logo_sticky.png')}}" width="160" height="34" alt="City tours" data-retina="true">
                    </div>
                    <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                    <ul>
                        <li class="submenu">
                            <a href="{{url('/')}}">الرئيسية </a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="show-submenu">المرحلة الأعدادية<i class="icon-down-open-mini"></i></a>
                            <ul>
                                <li><a href="all-list">الصف الأول الأعدادي</a></li>
                                <li><a href="all-list">الصف الثاني الأعدادي</a></li>
                                <li><a href="all-list">الصف الثالث الأعدادي</a></li>
                            </ul>
                        </li>


                        <li class="submenu">
                            <a href="javascript:void(0);" class="show-submenu">المرحلة الثانوية<i class="icon-down-open-mini"></i></a>
                            <ul >
                                <li><a href="javascript:void(0);">الصف الأول الثانوي</a>
                                    <ul>
                                        <li><a href="index_20.html">علمي</a></li>
                                        <li><a href="index_24.html">ادبي</a></li>

                                    </ul>
                                </li>

                                <li><a href="javascript:void(0);">الصف الثاني الثانوي</a>
                                    <ul>
                                        <li><a href="index_20.html">علمي</a></li>
                                        <li><a href="index_24.html">ادبي</a></li>

                                    </ul>
                                </li>

                                <li><a href="javascript:void(0);">الصف الثالث الثانوي</a>
                                    <ul>
                                        <li><a href="index_20.html">علمي</a></li>
                                        <li><a href="index_24.html">ادبي</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="{{url('/courses')}}" class="show-submenu">الدورات الدراسية<i class="icon-down-open-mini"></i></a>
                            <ul>
                                @foreach($cour as $course)
                                <li><a href="">{{$course->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="about">من نحن </a>
                        </li>
                        <li class="submenu">
                            <a href="contact">اتصل بنا </a>
                        </li>
                        @guest
                        @if (Route::has('register'))
                            <li><a href="javascript:void(0);">التسجيل</a>
                                <ul>
                                    <li><a href="{{url('/login')}}">تسجيل الدخول</a></li>
                                    <li><a href="{{url('/register')}}">تسجيل حساب جديد</a></li>

                                </ul>
                            </li>
                        @endif

                        @else
                            <li><a href="javascript:void(0);"> {{ Auth::user()->name }}</a>
                                <ul>
                                    <li><a href="#">الصفحة الشخصية</a></li>


                                    <a href="{{ route('logout') }}" class="dropdown-item notify-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        <i class="fe-log-out"></i>

                                        <span>{{__('تسجيل الخروج')}}</span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div><!-- End main-menu -->

                <ul id="top_tools">
                    <li>
                        <a href="javascript:void(0);" class="search-overlay-menu-btn"><i class="icon_search"></i> </a>
                    </li>
                    @guest
                        @if (Route::has('register'))

                        @endif

                        @else

                        <li>
                            <div class="dropdown dropdown-cart">
                                <a href="#" data-toggle="dropdown" class="cart_bt"><i class="icon_bag_alt"></i><strong>3</strong></a>
                                <ul class="dropdown-menu" id="cart_items">
                                    <li>
                                        <div class="image"><img src="{{asset('website/img/thumb_cart_1.jpg')}}" alt="image"></div>
                                        <strong><a href="#">Louvre museum</a>1x $36.00 </strong>
                                        <a href="#" class="action"><i class="icon-trash"></i></a>
                                    </li>
                                    <li>
                                        <div class="image"><img src="{{asset('website/img/thumb_cart_2.jpg')}}" alt="image"></div>
                                        <strong><a href="#">Versailles tour</a>2x $36.00 </strong>
                                        <a href="#" class="action"><i class="icon-trash"></i></a>
                                    </li>
                                    <li>
                                        <div class="image"><img src="{{asset('website/img/thumb_cart_3.jpg')}}" alt="image"></div>
                                        <strong><a href="#">Versailles tour</a>1x $36.00 </strong>
                                        <a href="#" class="action"><i class="icon-trash"></i></a>
                                    </li>
                                    <li>
                                        <div>Total: <span>$120.00</span></div>
                                        <a href="cart.html" class="button_drop">Go to cart</a>
                                        <a href="payment.html" class="button_drop outline">Check out</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End dropdown-cart-->
                        </li>
                        <li>
                            <div class="dropdown dropdown-cart">
                                <a href="#" data-toggle="dropdown" class="cart_bt"><i class="icon-bell-2"></i><strong>0</strong></a>
                                <ul class="dropdown-menu" id="cart_items">
                                    <li>
                                        <div class="image"><img src="{{asset('website/img/thumb_cart_1.jpg')}}" alt="image"></div>
                                        <strong><a href="#">Louvre museum</a>1x $36.00 </strong>
                                        <a href="#" class="action"><i class="icon-trash"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="button_drop outline">مشاهدة الكل </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End dropdown-cart-->
                        </li>
                    @endguest
                </ul>
            </nav>
        </div>
    </div>
    <!-- container -->
</header>
<!-- End Header -->

@yield('content')

{{--@section('script')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

@endsection--}}
@include('layouts.footer')
