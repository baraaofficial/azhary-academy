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
                        <a href="#" class="nav-link">المواد الدراسية</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">الدورات الدراسية</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">أعضاء هيئة التدريس</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">الأقسام الدراسية</a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">إتصل بنا</a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">من نحن</a>
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
                    <li><a href="#" class="pl-0"><div><i class="icon-line-grid rtl"></i>جميع الدورات </div></a>
                        <ul>
                            <li><a href="#"><div><i class="icon-line2-user"></i>Teacher Training</div></a>
                                <ul>
                                    <li><a href="#"><div>All Teacher Training</div></a>
                                        <ul>
                                            <li><a href="#"><div>Level 3</div></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><div>Educational Training</div></a></li>
                                    <li><a href="#"><div>Teaching Tools</div></a></li>
                                    <li><a href="#"><div>Others</div></a></li>
                                </ul>
                            </li>
                            <li><a href="#"><div><i class="icon-chart-bar1"></i>Business</div></a>
                                <ul>
                                    <li><a href="#"><div>All Business Classes</div></a>
                                        <ul>
                                            <li><a href="#"><div>Level 3</div></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><div>Finance</div></a></li>
                                    <li><a href="#"><div>Sales</div></a></li>
                                    <li><a href="#"><div>Marketing</div></a></li>
                                    <li><a href="#"><div>Industry</div></a></li>
                                    <li><a href="#"><div>Real Estates</div></a></li>
                                    <li><a href="#"><div>Others</div></a></li>
                                </ul>
                            </li>
                            <li><a href="#"><div><i class="icon-code1"></i>Development</div></a>
                                <ul>
                                    <li><a href="#"><div>All Development Training</div></a>
                                        <ul>
                                            <li><a href="#"><div>Level 3</div></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><div>Software Training</div></a></li>
                                    <li><a href="#"><div>Graphics Tools</div></a></li>
                                    <li><a href="#"><div>Development Skills</div></a></li>
                                    <li><a href="#"><div>Others</div></a></li>
                                </ul>
                            </li>
                            <li><a href="#"><div><i class="icon-line2-screen-smartphone"></i>IT & Software</div></a>
                                <ul>
                                    <li><a href="#"><div>All IT & Software Training</div></a>
                                        <ul>
                                            <li><a href="#"><div>Level 3</div></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><div>Software Training</div></a></li>
                                    <li><a href="#"><div>Application Tools</div></a></li>
                                    <li><a href="#"><div>Others</div></a></li>
                                </ul>
                            </li>
                            <li><a href="#"><div><i class="icon-music1"></i>Music</div></a>
                                <ul>
                                    <li><a href="#"><div>All Music Classes</div></a>
                                        <ul>
                                            <li><a href="#"><div>Level 3</div></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><div>Instrumental</div></a></li>
                                    <li><a href="#"><div>Vocals</div></a></li>
                                    <li><a href="#"><div>Lyrics</div></a></li>
                                    <li><a href="#"><div>Others</div></a></li>
                                </ul>
                            </li>
                            <li><a href="#"><div><i class="icon-line2-game-controller"></i>Lifestyle</div></a>
                                <ul>
                                    <li><a href="#"><div>All Lifestyle Training</div></a>
                                        <ul>
                                            <li><a href="#"><div>Level 3</div></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><div>Art &amp; Crafts</div></a></li>
                                    <li><a href="#"><div>Foods & Beverages</div></a></li>
                                    <li><a href="#"><div>Gaming</div></a></li>
                                    <li><a href="#"><div>Others</div></a></li>
                                </ul>
                            </li>
                            <li><a href="#"><div><i class="icon-line2-globe"></i>Language</div></a>
                                <ul>
                                    <li><a href="#"><div>All Languages</div></a>
                                        <ul>
                                            <li><a href="#"><div>Level 3</div></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><div>English</div></a></li>
                                    <li><a href="#"><div>Spanish</div></a></li>
                                    <li><a href="#"><div>Germans</div></a></li>
                                    <li><a href="#"><div>Hindi</div></a></li>
                                    <li><a href="#"><div>Russian</div></a></li>
                                    <li><a href="#"><div>Others</div></a></li>
                                </ul>
                            </li>
                            <li><a href="#"><div><i class="icon-health"></i>Health &amp; Fitness</div></a>
                                <ul>
                                    <li><a href="#"><div>All Health &amp; Fitness</div></a>
                                        <ul>
                                            <li><a href="#"><div>Level 3</div></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><div>Yoga</div></a></li>
                                    <li><a href="#"><div>Gym</div></a></li>
                                    <li><a href="#"><div>Sports</div></a></li>
                                    <li><a href="#"><div>Nutrition</div></a></li>
                                    <li><a href="#"><div>Others</div></a></li>
                                </ul>
                            </li>
                            <li><a href="#"><div><i class="icon-line2-crop"></i>Design</div></a>
                                <ul>
                                    <li><a href="#"><div>All Designs</div></a>
                                        <ul>
                                            <li><a href="#"><div>Level 3</div></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><div>Game Design</div></a></li>
                                    <li><a href="#"><div>Graphic Design</div></a></li>
                                    <li><a href="#"><div>Web Design</div></a></li>
                                    <li><a href="#"><div>Others</div></a></li>
                                </ul>
                            </li>

                            <li><a href="#"><div><i class="icon-food"></i>Food</div></a>
                                <ul>
                                    <li><a href="#"><div>All Food Recipes</div></a>
                                        <ul>
                                            <li><a href="#"><div>Level 3</div></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><div>Heathy Foods</div></a></li>
                                    <li><a href="#"><div>Fast Foods</div></a></li>
                                    <li><a href="#"><div>Others</div></a></li>
                                </ul>
                            </li>
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
                    <a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
                    <div class="top-cart-content">
                        <div class="top-cart-title">
                            <h4>Shopping Cart</h4>
                        </div>
                        <div class="top-cart-items">
                            <div class="top-cart-item clearfix">
                                <div class="top-cart-item-image">
                                    <a href="#"><img src="{{asset('website/course/images/cart-1.jpg')}}" alt="Photography" /></a>
                                </div>
                                <div class="top-cart-item-desc">
                                    <a href="#">A Complete Guide to Photography</a>
                                    <span class="top-cart-item-price">$19.99</span>
                                    <span class="top-cart-item-quantity">x 2</span>
                                </div>
                            </div>
                            <div class="top-cart-item clearfix">
                                <div class="top-cart-item-image">
                                    <a href="#"><img src="{{asset('website/course/images/cart-2.jpg')}}" alt="CSS & SASS" /></a>
                                </div>
                                <div class="top-cart-item-desc">
                                    <a href="#">Advanced CSS and Sass: Flexbox, Grid, Animations and More!</a>
                                    <span class="top-cart-item-price">$24.99</span>
                                    <span class="top-cart-item-quantity">x 3</span>
                                </div>
                            </div>
                        </div>
                        <div class="top-cart-action clearfix">
                            <span class="fleft top-checkout-price">$114.95</span>
                            <a href="#" class="button button-rounded button-small nomargin fright">View Cart</a>
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
