@extends('layouts.app')


@section('content')
    <main>
        <section id="hero">
            <div class="intro_title">
                <h3 class="animated fadeInDown">موقع اكادمية أزهري معنا إلى التفوق</h3>
                <p class="animated fadeInDown">الإعدادية / الثانوية</p>
                @guest

                    @if (Route::has('register'))
                        <a href="{{url('/register')}}" class="animated fadeInUp button_intro">التسجيل</a>
                    @endif

                        @else

                @endguest

                <a href="#" class="animated fadeInUp button_intro outline">العروض</a>
            </div>

            <div id="search_bar_container">
                <div class="container">
                    <div class="search_bar">
					<span class="nav-facade-active" id="nav-search-in">
								<span id="nav-search-in-content" style="">جميع المراحل</span>
					<span class="nav-down-arrow nav-sprite"></span>
                        <select title="Search in" class="searchSelect" id="searchDropdownBox" name="tours_category">
                            <option value="All Tours"  title="All Tours">جميع المراحل</option>
                            <option value="Museums" title="Museums">المرحله الثانوية</option>
                            <option value="Tickets" title="Tickets">المرحله الأعدادية</option>
                            <option value="Hotels" title="Hotels">المرحله الأبتدائية</option>
                        </select>
					</span>
                        <div class="nav-searchfield-outer">
                            <input type="text" autocomplete="off" name="field-keywords" placeholder="اكتب مصطلحات البحث ...." id="twotabsearchtextbox">
                        </div>
                        <div class="nav-submit-button">
                            <input type="submit" title="Cerca" class="nav-submit-input" value="Search">
                        </div>
                    </div>
                    <!-- End search bar-->
                </div>
            </div>
            <!-- /search_bar-->
        </section>
        <!-- End hero -->


        <div class="container margin_60">

            <div class="main_title">
                <h2>الصف <span>الثالث</span> الثانوي</h2>
                <p> اليكم مجموعه من دورات الصف الثالث الثانوي المواد الشرعيه ادبي</p>
            </div>

            <div class="owl-carousel owl-theme list_carousel add_bottom_30">
                <div class="item">
                    <div class="tour_container">
                        <div class="ribbon_3 popular"><span>ادبي</span></div>
                        <div class="img_container">
                            <a href="all-list">
                                <img src="{{asset('website/img/tour_box_1.jpg')}}" width="800" height="533" class="img-fluid" alt="image">
                                <div class="short_info">
                                    <i class="icon_set_1_icon-44"></i>المواد الشرعيه<span class="price"><sup>$</sup>39</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>الفقه</strong> الشافعي</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div>
                            <!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">اضافة الى قائمة الرغبات</span></span></a>
                            </div>
                            <!-- End wish list-->
                        </div>
                    </div>
                    <!-- End box tour -->
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="tour_container">
                        <div class="ribbon_3 popular"><span>ادبي</span></div>
                        <div class="img_container">
                            <a href="all-list">
                                <img src="{{asset('website/img/tour_box_2.jpg')}}" width="800" height="533" class="img-fluid" alt="image">
                                <div class="short_info">
                                    <i class="icon_set_1_icon-43"></i>المواد الثقافيه<span class="price"><sup>$</sup>45</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>مادة</strong> الجغرافيا</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div>
                            <!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">اضافة الى قائمة الرغبات</span></span></a>
                            </div>
                            <!-- End wish list-->
                        </div>
                    </div>
                    <!-- End box tour -->
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="tour_container">
                        <div class="ribbon_3 popular"><span>ادبي</span></div>
                        <div class="img_container">
                            <a href="all-list">
                                <img src="{{asset('website/img/tour_box_3.jpg')}}" width="800" height="533" class="img-fluid" alt="image">
                                <div class="short_info">
                                    <i class="icon_set_1_icon-44"></i>المواد العربية<span class="price"><sup>$</sup>48</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>مادة</strong> النحو</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div>
                            <!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">اضاف الى قائمة الرغبات</span></span></a>
                            </div>
                            <!-- End wish list-->
                        </div>
                    </div>
                    <!-- End box tour -->
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="tour_container">
                        <div class="ribbon_3 popular"><span>ادبي</span></div>
                        <div class="img_container">
                            <a href="all-list">
                                <img src="{{asset('website/img/tour_box_4.jpg')}}" width="800" height="533" class="img-fluid" alt="image">
                                <div class="short_info">
                                    <i class="icon_set_1_icon-30"></i>المواد العربيه<span class="price"><sup>$</sup>36</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>مادة</strong> الصرف</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div>
                            <!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">اضافة الى قائمة الرغبات</span></span></a>
                            </div>
                            <!-- End wish list-->
                        </div>
                    </div>
                    <!-- End box tour -->
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="tour_container">
                        <div class="ribbon_3 popular"><span>ادبي</span></div>
                        <div class="img_container">
                            <a href="all-list">
                                <img src="{{asset('website/img/tour_box_14.jpg')}}" width="800" height="533" class="img-fluid" alt="image">
                                <div class="short_info">
                                    <i class="icon_set_1_icon-28"></i>المواد الثقافيه<span class="price"><sup>$</sup>42</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>مادة</strong> التاريخ</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div>
                            <!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                            </div>
                            <!-- End wish list-->
                        </div>
                    </div>
                    <!-- End box tour -->
                </div>
                <!-- /item -->
            </div>
            <!-- /carousel -->

            <p class="text-center add_bottom_30">
                <a href="all-list" class="btn_1">مشاهدة كل الدورات</a>
            </p>

            <hr class="mt-5 mb-5">

            <div class="main_title">
                <h2>الصف <span>الثالث</span> الثانوي</h2>
                <p> اليكم مجموعه من دورات الصف الثالث الثانوي المواد الشرعيه علمي</p>
            </div>

            <div class="owl-carousel owl-theme list_carousel add_bottom_30">
                <div class="item">
                    <div class="tour_container">
                        <div class="ribbon_3 popular"><span>علمي</span></div>
                        <div class="img_container">
                            <a href="all-list">
                                <img src="{{asset('website/img/tour_box_1.jpg')}}" width="800" height="533" class="img-fluid" alt="image">
                                <div class="short_info">
                                    <i class="icon_set_1_icon-44"></i>المواد الشرعيه<span class="price"><sup>$</sup>39</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>الفقه</strong> الشافعي</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div>
                            <!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">اضافة الى قائمة الرغبات</span></span></a>
                            </div>
                            <!-- End wish list-->
                        </div>
                    </div>
                    <!-- End box tour -->
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="tour_container">
                        <div class="ribbon_3 popular"><span>علمي</span></div>
                        <div class="img_container">
                            <a href="all-list">
                                <img src="{{asset('website/img/tour_box_2.jpg')}}" width="800" height="533" class="img-fluid" alt="image">
                                <div class="short_info">
                                    <i class="icon_set_1_icon-43"></i>المواد الثقافيه<span class="price"><sup>$</sup>45</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>مادة</strong> الرياضيات</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div>
                            <!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">اضافة الى قائمة الرغبات</span></span></a>
                            </div>
                            <!-- End wish list-->
                        </div>
                    </div>
                    <!-- End box tour -->
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="tour_container">
                        <div class="ribbon_3 popular"><span>علمي</span></div>
                        <div class="img_container">
                            <a href="all-list">
                                <img src="{{asset('website/img/tour_box_3.jpg')}}" width="800" height="533" class="img-fluid" alt="image">
                                <div class="short_info">
                                    <i class="icon_set_1_icon-44"></i>المواد العربية<span class="price"><sup>$</sup>48</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>مادة</strong> النحو</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div>
                            <!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">اضاف الى قائمة الرغبات</span></span></a>
                            </div>
                            <!-- End wish list-->
                        </div>
                    </div>
                    <!-- End box tour -->
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="tour_container">
                        <div class="img_container">
                            <a href="all-list">
                                <img src="{{asset('website/img/tour_box_4.jpg')}}" width="800" height="533" class="img-fluid" alt="image">
                                <div class="short_info">
                                    <i class="icon_set_1_icon-30"></i>Walking tour<span class="price"><sup>$</sup>36</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>Pompidue</strong> tour</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div>
                            <!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                            </div>
                            <!-- End wish list-->
                        </div>
                    </div>
                    <!-- End box tour -->
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="tour_container">
                        <div class="ribbon_3"><span>Top rated</span></div>
                        <div class="img_container">
                            <a href="all-list">
                                <img src="{{asset('website/img/tour_box_14.jpg')}}" width="800" height="533" class="img-fluid" alt="image">
                                <div class="short_info">
                                    <i class="icon_set_1_icon-28"></i>Skyline tours<span class="price"><sup>$</sup>42</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>Tour Eiffel</strong> tour</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div>
                            <!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                            </div>
                            <!-- End wish list-->
                        </div>
                    </div>
                    <!-- End box tour -->
                </div>
                <!-- /item -->
            </div>
            <!-- /carousel -->

            <p class="text-center add_bottom_30">
                <a href="all-list" class="btn_1">مشاهدة كل الدورات</a>
            </p>

        </div>


        <div class="container margin_60">

            <div class="main_title">
                <h2>الصف <span>الثالث</span> الثانوي</h2>
                <p> اليكم مجموعه من دورات الصف الثالث الثانوي المواد الشرعيه ادبي</p>
            </div>

            <div class="owl-carousel owl-theme list_carousel add_bottom_30">
                <div class="item">
                    <div class="tour_container">
                        <div class="ribbon_3 popular"><span>ادبي</span></div>
                        <div class="img_container">
                            <a href="all-list">
                                <img src="{{asset('website/img/tour_box_1.jpg')}}" width="800" height="533" class="img-fluid" alt="image">
                                <div class="short_info">
                                    <i class="icon_set_1_icon-44"></i>المواد الشرعيه<span class="price"><sup>$</sup>39</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>الفقه</strong> الشافعي</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div>
                            <!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">اضافة الى قائمة الرغبات</span></span></a>
                            </div>
                            <!-- End wish list-->
                        </div>
                    </div>
                    <!-- End box tour -->
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="tour_container">
                        <div class="ribbon_3 popular"><span>ادبي</span></div>
                        <div class="img_container">
                            <a href="all-list">
                                <img src="{{asset('website/img/tour_box_2.jpg')}}" width="800" height="533" class="img-fluid" alt="image">
                                <div class="short_info">
                                    <i class="icon_set_1_icon-43"></i>المواد الثقافيه<span class="price"><sup>$</sup>45</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>مادة</strong> الجغرافيا</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div>
                            <!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">اضافة الى قائمة الرغبات</span></span></a>
                            </div>
                            <!-- End wish list-->
                        </div>
                    </div>
                    <!-- End box tour -->
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="tour_container">
                        <div class="ribbon_3 popular"><span>ادبي</span></div>
                        <div class="img_container">
                            <a href="all-list">
                                <img src="{{asset('website/img/tour_box_3.jpg')}}" width="800" height="533" class="img-fluid" alt="image">
                                <div class="short_info">
                                    <i class="icon_set_1_icon-44"></i>المواد العربية<span class="price"><sup>$</sup>48</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>مادة</strong> النحو</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div>
                            <!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">اضاف الى قائمة الرغبات</span></span></a>
                            </div>
                            <!-- End wish list-->
                        </div>
                    </div>
                    <!-- End box tour -->
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="tour_container">
                        <div class="ribbon_3 popular"><span>ادبي</span></div>
                        <div class="img_container">
                            <a href="all-list">
                                <img src="{{asset('website/img/tour_box_4.jpg')}}" width="800" height="533" class="img-fluid" alt="image">
                                <div class="short_info">
                                    <i class="icon_set_1_icon-30"></i>المواد العربيه<span class="price"><sup>$</sup>36</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>مادة</strong> الصرف</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div>
                            <!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">اضافة الى قائمة الرغبات</span></span></a>
                            </div>
                            <!-- End wish list-->
                        </div>
                    </div>
                    <!-- End box tour -->
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="tour_container">
                        <div class="ribbon_3 popular"><span>ادبي</span></div>
                        <div class="img_container">
                            <a href="all-list">
                                <img src="{{asset('website/img/tour_box_14.jpg')}}" width="800" height="533" class="img-fluid" alt="image">
                                <div class="short_info">
                                    <i class="icon_set_1_icon-28"></i>المواد الثقافيه<span class="price"><sup>$</sup>42</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>مادة</strong> التاريخ</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div>
                            <!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                            </div>
                            <!-- End wish list-->
                        </div>
                    </div>
                    <!-- End box tour -->
                </div>
                <!-- /item -->
            </div>
            <!-- /carousel -->

            <p class="text-center add_bottom_30">
                <a href="all-list" class="btn_1">مشاهدة كل الدورات</a>
            </p>

            <hr class="mt-5 mb-5">

            <div class="main_title">
                <h2>الصف <span>الثاني</span> الثانوي</h2>
                <p> اليكم مجموعه من دورات الصف الثاني الثانوي المواد الشرعيه علمي</p>
            </div>

            <div class="owl-carousel owl-theme list_carousel add_bottom_30">
                <div class="item">
                    <div class="tour_container">
                        <div class="ribbon_3 popular"><span>علمي</span></div>
                        <div class="img_container">
                            <a href="all-list">
                                <img src="{{asset('website/img/tour_box_1.jpg')}}" width="800" height="533" class="img-fluid" alt="image">
                                <div class="short_info">
                                    <i class="icon_set_1_icon-44"></i>المواد الشرعيه<span class="price"><sup>$</sup>39</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>الفقه</strong> الشافعي</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div>
                            <!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">اضافة الى قائمة الرغبات</span></span></a>
                            </div>
                            <!-- End wish list-->
                        </div>
                    </div>
                    <!-- End box tour -->
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="tour_container">
                        <div class="ribbon_3 popular"><span>علمي</span></div>
                        <div class="img_container">
                            <a href="all-list">
                                <img src="{{asset('website/img/tour_box_2.jpg')}}" width="800" height="533" class="img-fluid" alt="image">
                                <div class="short_info">
                                    <i class="icon_set_1_icon-43"></i>المواد الثقافيه<span class="price"><sup>$</sup>45</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>مادة</strong> الرياضيات</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div>
                            <!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">اضافة الى قائمة الرغبات</span></span></a>
                            </div>
                            <!-- End wish list-->
                        </div>
                    </div>
                    <!-- End box tour -->
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="tour_container">
                        <div class="ribbon_3 popular"><span>علمي</span></div>
                        <div class="img_container">
                            <a href="all-list">
                                <img src="{{asset('website/img/tour_box_3.jpg')}}" width="800" height="533" class="img-fluid" alt="image">
                                <div class="short_info">
                                    <i class="icon_set_1_icon-44"></i>المواد العربية<span class="price"><sup>$</sup>48</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>مادة</strong> النحو</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div>
                            <!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">اضاف الى قائمة الرغبات</span></span></a>
                            </div>
                            <!-- End wish list-->
                        </div>
                    </div>
                    <!-- End box tour -->
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="tour_container">
                        <div class="img_container">
                            <a href="all-list">
                                <img src="{{asset('website/img/tour_box_4.jpg')}}" width="800" height="533" class="img-fluid" alt="image">
                                <div class="short_info">
                                    <i class="icon_set_1_icon-30"></i>Walking tour<span class="price"><sup>$</sup>36</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>Pompidue</strong> tour</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div>
                            <!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                            </div>
                            <!-- End wish list-->
                        </div>
                    </div>
                    <!-- End box tour -->
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="tour_container">
                        <div class="ribbon_3"><span>Top rated</span></div>
                        <div class="img_container">
                            <a href="all-list">
                                <img src="{{asset('website/img/tour_box_14.jpg')}}" width="800" height="533" class="img-fluid" alt="image">
                                <div class="short_info">
                                    <i class="icon_set_1_icon-28"></i>Skyline tours<span class="price"><sup>$</sup>42</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>Tour Eiffel</strong> tour</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div>
                            <!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                            </div>
                            <!-- End wish list-->
                        </div>
                    </div>
                    <!-- End box tour -->
                </div>
                <!-- /item -->
            </div>
            <!-- /carousel -->

            <p class="text-center add_bottom_30">
                <a href="all-list" class="btn_1">مشاهدة كل الدورات</a>
            </p>

        </div>


        <div class="container margin_60">

            <div class="main_title">
                <h2>الصف <span>الأول</span> الثانوي</h2>
                <p> اليكم مجموعه من دورات الصف الأول الثانوي المواد الشرعيه ادبي</p>
            </div>

            <div class="owl-carousel owl-theme list_carousel add_bottom_30">
                <div class="item">
                    <div class="tour_container">
                        <div class="ribbon_3 popular"><span>ادبي</span></div>
                        <div class="img_container">
                            <a href="all-list">
                                <img src="{{asset('website/img/tour_box_1.jpg')}}" width="800" height="533" class="img-fluid" alt="image">
                                <div class="short_info">
                                    <i class="icon_set_1_icon-44"></i>المواد الشرعيه<span class="price"><sup>$</sup>39</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>الفقه</strong> الشافعي</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div>
                            <!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">اضافة الى قائمة الرغبات</span></span></a>
                            </div>
                            <!-- End wish list-->
                        </div>
                    </div>
                    <!-- End box tour -->
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="tour_container">
                        <div class="ribbon_3 popular"><span>ادبي</span></div>
                        <div class="img_container">
                            <a href="all-list">
                                <img src="{{asset('website/img/tour_box_2.jpg')}}" width="800" height="533" class="img-fluid" alt="image">
                                <div class="short_info">
                                    <i class="icon_set_1_icon-43"></i>المواد الثقافيه<span class="price"><sup>$</sup>45</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>مادة</strong> الجغرافيا</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div>
                            <!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">اضافة الى قائمة الرغبات</span></span></a>
                            </div>
                            <!-- End wish list-->
                        </div>
                    </div>
                    <!-- End box tour -->
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="tour_container">
                        <div class="ribbon_3 popular"><span>ادبي</span></div>
                        <div class="img_container">
                            <a href="all-list">
                                <img src="{{asset('website/img/tour_box_3.jpg')}}" width="800" height="533" class="img-fluid" alt="image">
                                <div class="short_info">
                                    <i class="icon_set_1_icon-44"></i>المواد العربية<span class="price"><sup>$</sup>48</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>مادة</strong> النحو</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div>
                            <!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">اضاف الى قائمة الرغبات</span></span></a>
                            </div>
                            <!-- End wish list-->
                        </div>
                    </div>
                    <!-- End box tour -->
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="tour_container">
                        <div class="ribbon_3 popular"><span>ادبي</span></div>
                        <div class="img_container">
                            <a href="all-list">
                                <img src="{{asset('website/img/tour_box_4.jpg')}}" width="800" height="533" class="img-fluid" alt="image">
                                <div class="short_info">
                                    <i class="icon_set_1_icon-30"></i>المواد العربيه<span class="price"><sup>$</sup>36</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>مادة</strong> الصرف</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div>
                            <!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">اضافة الى قائمة الرغبات</span></span></a>
                            </div>
                            <!-- End wish list-->
                        </div>
                    </div>
                    <!-- End box tour -->
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="tour_container">
                        <div class="ribbon_3 popular"><span>ادبي</span></div>
                        <div class="img_container">
                            <a href="all-list">
                                <img src="{{asset('website/img/tour_box_14.jpg')}}" width="800" height="533" class="img-fluid" alt="image">
                                <div class="short_info">
                                    <i class="icon_set_1_icon-28"></i>المواد الثقافيه<span class="price"><sup>$</sup>42</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>مادة</strong> التاريخ</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div>
                            <!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                            </div>
                            <!-- End wish list-->
                        </div>
                    </div>
                    <!-- End box tour -->
                </div>
                <!-- /item -->
            </div>
            <!-- /carousel -->

            <p class="text-center add_bottom_30">
                <a href="all-list" class="btn_1">مشاهدة كل الدورات</a>
            </p>

            <hr class="mt-5 mb-5">

            <div class="main_title">
                <h2>الصف <span>الأول</span> الثانوي</h2>
                <p> اليكم مجموعه من دورات الصف الأول الثانوي المواد الشرعيه علمي</p>
            </div>

            <div class="owl-carousel owl-theme list_carousel add_bottom_30">
                <div class="item">
                    <div class="tour_container">
                        <div class="ribbon_3 popular"><span>علمي</span></div>
                        <div class="img_container">
                            <a href="all-list">
                                <img src="{{asset('website/img/tour_box_1.jpg')}}" width="800" height="533" class="img-fluid" alt="image">
                                <div class="short_info">
                                    <i class="icon_set_1_icon-44"></i>المواد الشرعيه<span class="price"><sup>$</sup>39</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>الفقه</strong> الشافعي</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div>
                            <!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">اضافة الى قائمة الرغبات</span></span></a>
                            </div>
                            <!-- End wish list-->
                        </div>
                    </div>
                    <!-- End box tour -->
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="tour_container">
                        <div class="ribbon_3 popular"><span>علمي</span></div>
                        <div class="img_container">
                            <a href="all-list">
                                <img src="{{asset('website/img/tour_box_2.jpg')}}" width="800" height="533" class="img-fluid" alt="image">
                                <div class="short_info">
                                    <i class="icon_set_1_icon-43"></i>المواد الثقافيه<span class="price"><sup>$</sup>45</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>مادة</strong> الرياضيات</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div>
                            <!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">اضافة الى قائمة الرغبات</span></span></a>
                            </div>
                            <!-- End wish list-->
                        </div>
                    </div>
                    <!-- End box tour -->
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="tour_container">
                        <div class="ribbon_3 popular"><span>علمي</span></div>
                        <div class="img_container">
                            <a href="all-list">
                                <img src="{{asset('website/img/tour_box_3.jpg')}}" width="800" height="533" class="img-fluid" alt="image">
                                <div class="short_info">
                                    <i class="icon_set_1_icon-44"></i>المواد العربية<span class="price"><sup>$</sup>48</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>مادة</strong> النحو</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div>
                            <!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">اضاف الى قائمة الرغبات</span></span></a>
                            </div>
                            <!-- End wish list-->
                        </div>
                    </div>
                    <!-- End box tour -->
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="tour_container">
                        <div class="img_container">
                            <a href="all-list">
                                <img src="{{asset('website/img/tour_box_4.jpg')}}" width="800" height="533" class="img-fluid" alt="image">
                                <div class="short_info">
                                    <i class="icon_set_1_icon-30"></i>Walking tour<span class="price"><sup>$</sup>36</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>Pompidue</strong> tour</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div>
                            <!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                            </div>
                            <!-- End wish list-->
                        </div>
                    </div>
                    <!-- End box tour -->
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="tour_container">
                        <div class="ribbon_3"><span>Top rated</span></div>
                        <div class="img_container">
                            <a href="all-list">
                                <img src="{{asset('website/img/tour_box_14.jpg')}}" width="800" height="533" class="img-fluid" alt="image">
                                <div class="short_info">
                                    <i class="icon_set_1_icon-28"></i>Skyline tours<span class="price"><sup>$</sup>42</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>Tour Eiffel</strong> tour</h3>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                            </div>
                            <!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                            </div>
                            <!-- End wish list-->
                        </div>
                    </div>
                    <!-- End box tour -->
                </div>
                <!-- /item -->
            </div>
            <!-- /carousel -->

            <p class="text-center add_bottom_30">
                <a href="all-list" class="btn_1">مشاهدة كل الدورات</a>
            </p>

        </div>

        <!-- End container -->

        <div class="white_bg">
            <div class="container margin_60">
                <div class="main_title">
                    <h2>Plan <span>Your Tour</span> Easly</h2>
                    <p>
                        Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.
                    </p>
                </div>
                <div class="row feature_home_2">
                    <div class="col-md-4 text-center">
                        <img src="{{asset('website/img/adventure_icon_1.svg')}}" alt="" width="75" height="75">
                        <h3>Itineraries studied in detail</h3>
                        <p>Suscipit invenire petentium per in. Ne magna assueverit vel. Vix movet perfecto facilisis in, ius ad maiorum corrumpit, his esse docendi in.</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="{{asset('website/img/adventure_icon_2.svg')}}" alt="" width="75" height="75">
                        <h3>Room and food included</h3>
                        <p> Cum accusam voluptatibus at, et eum fuisset sententiae. Postulant tractatos ius an, in vis fabulas percipitur, est audiam phaedrum electram ex.</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="{{asset('website/img/adventure_icon_3.svg')}}" alt="" width="75" height="75">
                        <h3>Everything organized</h3>
                        <p>Integre vivendo percipitur eam in, graece suavitate cu vel. Per inani persius accumsan no. An case duis option est, pro ad fastidii contentiones.</p>
                    </div>
                </div>

                <div class="banner_2">
                    <div class="wrapper d-flex align-items-center opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.3)" style="background-color: rgba(0, 0, 0, 0.3);">
                        <div>
                            <h3>Your Perfect<br>Tour Experience</h3>
                            <p>Activities and accommodations</p>
                            <a href="all_tours_list.html" class="btn_1">Read more</a>
                        </div>
                    </div>
                    <!-- /wrapper -->
                </div>
                <!-- /banner_2 -->

            </div>
            <!-- End container -->
        </div>
        <!-- End white_bg -->

        <div class="container margin_60">
            <div class="main_title">
                <h2>Lates <span>Blog</span> News</h2>
                <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <a class="box_news" href="blog.html">
                        <figure><img src="{{asset('website/img/news_home_1.jpg')}}" alt="">
                            <figcaption><strong>28</strong>Dec</figcaption>
                        </figure>
                        <ul>
                            <li>Mark Twain</li>
                            <li>20.11.2017</li>
                        </ul>
                        <h4>Pri oportere scribentur eu</h4>
                        <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                    </a>
                </div>
                <!-- /box_news -->
                <div class="col-lg-6">
                    <a class="box_news" href="blog.html">
                        <figure><img src="{{asset('website/img/news_home_2.jpg')}}" alt="">
                            <figcaption><strong>28</strong>Dec</figcaption>
                        </figure>
                        <ul>
                            <li>Jhon Doe</li>
                            <li>20.11.2017</li>
                        </ul>
                        <h4>Duo eius postea suscipit ad</h4>
                        <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                    </a>
                </div>
                <!-- /box_news -->
                <div class="col-lg-6">
                    <a class="box_news" href="blog.html">
                        <figure><img src="{{asset('website/img/news_home_3.jpg')}}" alt="">
                            <figcaption><strong>28</strong>Dec</figcaption>
                        </figure>
                        <ul>
                            <li>Luca Robinson</li>
                            <li>20.11.2017</li>
                        </ul>
                        <h4>Elitr mandamus cu has</h4>
                        <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                    </a>
                </div>
                <!-- /box_news -->
                <div class="col-lg-6">
                    <a class="box_news" href="blog.html">
                        <figure><img src="{{asset('website/img/news_home_4.jpg')}}" alt="">
                            <figcaption><strong>28</strong>Dec</figcaption>
                        </figure>
                        <ul>
                            <li>Paula Rodrigez</li>
                            <li>20.11.2017</li>
                        </ul>
                        <h4>Id est adhuc ignota delenit</h4>
                        <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                    </a>
                </div>
                <!-- /box_news -->
            </div>
            <!-- /row -->
            <p class="btn_home_align"><a href="blog.html" class="btn_1 rounded">View all news</a></p>
        </div>
        <!-- End container -->
    </main>
    <!-- End main -->
    @endsection
