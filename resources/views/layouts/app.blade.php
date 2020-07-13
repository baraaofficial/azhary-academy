@include('layouts.header')


<!-- Header
		============================================= -->
<header id="header" class="full-header dark">

    <div id="header-wrap">

        <div class="container clearfix">

            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <!-- Logo
            ============================================= -->
            <div id="logo">
                <a href="{{url('/')}}" class="standard-logo" data-dark-logo="{{asset('website/images/logo-dark.png')}}"><img src="{{asset('website/images/logo.png')}}" alt="Canvas Logo"></a>
                <a href="{{url('/')}}" class="retina-logo" data-dark-logo="{{asset('website/images/logo-dark@2x.png')}}"><img src="{{asset('website/images/logo@2x.png')}}" alt="Canvas Logo"></a>
            </div><!-- #logo end -->

            <!-- Primary Navigation
            ============================================= -->
            <nav id="primary-menu">

                    <ul>
                    <li><a href="{{url('/')}}"><div>الرئيسية</div></a>
                    </li>
                    <li class="current"><a href="#"><div>المرحلة الأعدادية</div></a>
                        <ul>
                            <li><a href="#"><div>الصف الأول الأعدادي</div></a>
                            </li>
                            <li><a href="#"><div>الصف الثاني الأعدادي</div></a>
                            </li>
                            <li><a href="#"><div>الصف الثالث الأعدادي</div></a>

                            </li>
                        </ul>
                    </li>

                    <li class="current"><a href="#"><div>المرحلة الثانوي</div></a>
                        <ul>
                            <li><a href="#"><div>الصف الأول الثانوي</div></a>
                            </li>
                            <li><a href="#"><div>الصف الثاني الثانوي</div></a>
                            </li>
                            <li><a href="#"><div>الصف الثالث الثانوي</div></a>

                            </li>
                        </ul>
                    </li>

                    <li class="current"><a href="#"><div>جميع الدورات</div></a>
                        <ul>
                            <li><a href="#"><div>الصف الأول الثانوي</div></a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><div>الأتصال بنا</div></a>
                    </li>

                    <li><a href="#"><div>من نحن</div></a>
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
                                            <a href="#"><img src="{{asset('website/images/shop/small/1.jpg')}}" alt="Blue Round-Neck Tshirt" /></a>
                                        </div>
                                        <div class="top-cart-item-desc">
                                            <a href="#">Blue Round-Neck Tshirt</a>
                                            <span class="top-cart-item-price">$19.99</span>
                                            <span class="top-cart-item-quantity">x 2</span>
                                        </div>
                                    </div>
                                    <div class="top-cart-item clearfix">
                                        <div class="top-cart-item-image">
                                            <a href="#"><img src="{{asset('website/images/shop/small/6.jpg')}}" alt="Light Blue Denim Dress" /></a>
                                        </div>
                                        <div class="top-cart-item-desc">
                                            <a href="#">Light Blue Denim Dress</a>
                                            <span class="top-cart-item-price">$24.99</span>
                                            <span class="top-cart-item-quantity">x 3</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="top-cart-action clearfix">
                                    <span class="fleft top-checkout-price">$114.95</span>
                                    <button class="button button-3d button-small nomargin fright">View Cart</button>
                                </div>
                            </div>
                        </div><!-- #top-cart end -->

                        <div id="top-cart">
                            <a href="#" id="top-cart-trigger"><i class="icon-bell"></i><span>5</span></a>
                            <div class="top-cart-content">
                                <div class="top-cart-title">
                                    <h4>Shopping Cart</h4>
                                </div>
                                <div class="top-cart-items">
                                    <div class="top-cart-item clearfix">
                                        <div class="top-cart-item-image">
                                            <a href="#"><img src="{{asset('website/images/shop/small/1.jpg')}}" alt="Blue Round-Neck Tshirt" /></a>
                                        </div>
                                        <div class="top-cart-item-desc">
                                            <a href="#">Blue Round-Neck Tshirt</a>
                                            <span class="top-cart-item-price">$19.99</span>
                                            <span class="top-cart-item-quantity">x 2</span>
                                        </div>
                                    </div>
                                    <div class="top-cart-item clearfix">
                                        <div class="top-cart-item-image">
                                            <a href="#"><img src="{{asset('website/images/shop/small/6.jpg')}}" alt="Light Blue Denim Dress" /></a>
                                        </div>
                                        <div class="top-cart-item-desc">
                                            <a href="#">Light Blue Denim Dress</a>
                                            <span class="top-cart-item-price">$24.99</span>
                                            <span class="top-cart-item-quantity">x 3</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="top-cart-action clearfix">
                                    <span class="fleft top-checkout-price">$114.95</span>
                                    <button class="button button-3d button-small nomargin fright">View Cart</button>
                                </div>
                            </div>
                        </div><!-- #top-cart end -->
                    @endguest

            <!-- Top Search
                ============================================= -->
                <div id="top-search">
                    <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                    <form action="search.html" method="get">
                        <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
                    </form>
                </div><!-- #top-search end -->

            </nav><!-- #primary-menu end -->

        </div>

    </div>

</header><!-- #header end -->



@yield('content')


@include('layouts.footer')
