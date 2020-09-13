@include('layouts.header')


<!-- Header
============================================= -->
<header id="header" class="sticky-style-2 rtl ">

    <div class="container clearfix">

        <nav class="navbar navbar-expand-lg p-0 m-0">
            <div id="logo">
                <a href="{{url('/')}}" class="standard-logo"><img src="{{asset('website/course/images/logo.png')}}" alt="Canvas Logo"></a>
                <a href="{{url('/')}}" class="retina-logo"><img src="{{asset('website/course/images/logo@2x.png')}}" alt="Canvas Logo"></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-line-menu"></span>
            </button>
            <div class="collapse navbar-collapse align-items-end" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('subjects')}}" class="nav-link">المواد الدراسية</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('courses')}}" class="nav-link">الدورات الدراسية</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('teachers')}}" class="nav-link">أعضاء هيئة التدريس</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('categories')}}" class="nav-link">الأقسام الدراسية</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{url('about-us')}}" class="nav-link">إتصل بنا</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{url('contact-us')}}" class="nav-link">من نحن</a>
                    </li>
                </ul>
            </div>
            @guest
                @if (Route::has('register'))

                @endif
            @else
            <div id="top-account" class="dropdown">
                <a href="#" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="icon-user"></i></a>
                <ul class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenu1">
                    <a class="dropdown-item tright" href="{{ route('profile.index', ['id' => auth()->user()->id]) }}">{{Auth()->user()->name}}</a>
                    <a class="dropdown-item tright" href="{{ route('profile.index', ['id' => auth()->user()->id]) }}">الإعدادات</a>
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
                    <li><a href="{{url('courses')}}" class="pl-0"><div><i class="icon-line-grid rtl"></i>جميع الدورات </div></a>
                        <ul>
                            @foreach($get_courses as $courses)
                            <li><a href="{{route('course.list',$courses->id)}}"><div><i class="icon-chalkboard-teacher"></i>{{$courses->name}}</div></a>
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
                    <a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>{{Cart::count()}}</span></a>
                    <div class="top-cart-content">
                        <div class="top-cart-title">
                            <h4>عربة التسوق</h4>
                        </div>
                        @foreach(Cart::content() as $course)

                        <div class="top-cart-items">
                            <div class="top-cart-item clearfix">
                                <div class="top-cart-item-image">
                                    <a href="#"><img src="{{asset('website/course/images/cart-1.jpg')}}" alt="Photography" /></a>
                                </div>
                                <div class="top-cart-item-desc">
                                    <a href="">{{$course->name}}</a>
                                    <span class="top-cart-item-price">{{$course->price}}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="top-cart-action clearfix">
                            <span class="fleft top-checkout-price">{{Cart::getTotal()}}</span>
                            <a href="{{route('cart.index')}}" class="button button-rounded button-small nomargin fright">مشاهدة الكل</a>
                        </div>
                    </div>
                </div><!-- #top-cart end -->


                @endguest

                <!-- Top Search
                ============================================= -->
                <div id="top-search" class="ml-3">
                    <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                    <form action="search.html" method="get">
                        <input type="text" name="q" class="form-control" value="" placeholder="Find Your Courses Here..">
                    </form>
                </div><!-- #top-search end -->
                @guest
                    @if (Route::has('register'))
                        <div class="header-buttons ">
                            <a href="{{url('login')}}" class="button button-rounded button-border button-small">تسجيل الدخول </a>
                            <a href="{{url('register')}}" class="button button-rounded button-small ml-2">التسجيل جديد</a>
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
