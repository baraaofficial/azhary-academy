@include('layouts.header')


<!-- Header
============================================= -->
<header id="header" class="sticky-style-2 rtl " style="color: #faf2cc">

    <div class="container clearfix">

        <nav class="navbar navbar-expand-lg p-0 m-0">
            <div id="logo">
                <a href="{{url('/')}}" title="أكاديمية أزهري" class="standard-logo"><h1>أكاديمية أزهري</h1></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-line-menu"></span>
            </button>
            <div class="collapse navbar-collapse align-items-end" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" title="اكاديمية أزهري - الرئيسية" href="{{url('/')}}">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('subjects')}}" title="أكاديمية أزهري - المواد الدراسية" class="nav-link">المواد الدراسية</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('courses')}}" title="أكاديمية أزهري - الصفوف الدراسية" class="nav-link">الصفوف الدراسية</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('teachers')}}" title="أكاديمية أزهري - السادة المحاضرين" class="nav-link">السادة المحاضرين</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('categories')}}" title="أكاديمية أزهري - الأقسام الدراسية" class="nav-link">الأقسام الدراسية</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{url('contact-us')}}" title="أكاديمية أزهري - إتصل بنا" class="nav-link">إتصل بنا</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{url('about-us')}}" title="أكاديمية أزهري - من نحن" class="nav-link">من نحن</a>
                    </li>
                </ul>

            </div>
            @guest
                @if (Route::has('register'))

                @endif
            @else
                <div id="top-account" class="dropdown">
                    <a href="#" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="icon-user"></i></a>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                        <a class="dropdown-item tright" href="{{ route('profile.index', ['id' => auth()->user()->id]) }}">{{Auth()->user()->name}}</a>
                        <a class="dropdown-item tright" href="{{ route('profile.index', ['id' => auth()->user()->id,'#contactFormModal'])}}"  >الإعدادات</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item tright" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">تسجيل خروج <i class="icon-signout"></i></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul>
                </div>
            @endguest

        </nav>

    </div>

    <div id="header-wrap" class="bg-light">

        <!-- Primary Navigation
        ============================================= -->
        <nav id="primary-menu" class="with-arrows style-2">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <ul>
                    <li><a href="{{url('courses')}}" title="أكاديمية أزهري - جميع الدورات" class="pl-0"><div><i class="icon-line-grid rtl"></i>جميع الدورات </div></a>
                        <ul>
                            @foreach($courses_home as $courses)
                            <li><a href="{{route('course.list',$courses->id)}}" title="{{$courses->name}}"><div><i class="icon-chalkboard-teacher"></i>{{$courses->name}}</div></a>
                            </li>
                            @endforeach

                        </ul>
                    </li>
                </ul>

                @guest
                    @if (Route::has('register'))
                    @endif

                @else

                    <!-- Top Cart
                         ============================================= -->
                        <div id="top-cart">
                            <a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span id="h_numcart_items">
                            @if(session()->get('cart'))
                                        {{count(session()->get('cart'))}}
                                    @else
                                        0
                                    @endif
                        </span>
                            </a>
                            <div class="top-cart-content">
                                <div class="top-cart-title" title="أكاديمية أزهري - عربة التسوق">
                                    <h4>عربة التسوق</h4>
                                </div>
                                <div id="hcart_items">
                                    @if(session()->get('cart'))
                                        @php
                                            $total_price = 0;
                                        @endphp
                                        @foreach(session()->get('cart') as $top_cart_item)
                                            @php $total_price += $top_cart_item['price']; @endphp
                                            <div class="top-cart-items">
                                                <div class="top-cart-item clearfix">
                                                    <div class="top-cart-item-image">
                                                        <a href="{{url('/courses',$top_cart_item['course_id'])}}" title="{{$top_cart_item['course_name']}}"><img src="{{url($top_cart_item['image'])}}" alt="{{$top_cart_item['course_name']}}" /></a>
                                                    </div>
                                                    <div class="top-cart-item-desc">
                                                        <a href="{{url('/courses',$top_cart_item['course_id'])}}" title="{{$top_cart_item['course_name']}}">{{$top_cart_item['course_name']}}</a>
                                                        <span class="top-cart-item-price">{{$top_cart_item['price']}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="top-cart-action clearfix">
                                    <span class="fleft top-checkout-price header_cart_total">@if(isset($total_price)){{$total_price}}@else 0 @endif</span>
                                    <a href="{{route('cart.index')}}" class="button button-rounded button-small nomargin fright">مشاهدة الكل</a>
                                </div>
                            </div>
                        </div><!-- #top-cart end -->
                @endguest

                <!-- Top Search
                ============================================= -->
                <div id="top-search" class="ml-3">
                    <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                    <form action="{{route('search')}}" title="أكاديمية أزهري - البحث" method="get">
                        @csrf
                        <input type="search"  name="keyword" class="form-control" value="" placeholder="ابحث عن دوراتك هنا .." title="إن كنت تريد البحث عن الدورات او المواد ف عليك كتابة الاسم المشابة
                        ملحوظة: نحن نعمل جاهدين علي تقوية محرك بحثنا">
                    </form>

                </div><!-- #top-search end -->
                @guest
                    @if (Route::has('register'))
                        <div class="header-buttons ">
                            <a href="{{url('login')}}" title="أكاديمية أزهري - تسجيل الدخول" class="button button-rounded button-border button-small">تسجيل الدخول </a>
                            <a href="{{url('register')}}" title="أكاديمية أزهري - تسجيل جديد" class="button button-rounded button-small ml-2">تسجيل جديد</a>
                        </div>
                    @endif
                @else

                @endguest

            </div>

        </nav><!-- #primary-menu end -->

    </div>

</header><!-- #header end -->



@yield('content')


@include('layouts.footer')
