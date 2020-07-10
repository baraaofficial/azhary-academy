@extends('layouts.app')


@section('content')

    <section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('website/img/restaurant_top.jpg')}}" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1>Paris restaurants</h1>
                <p>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</p>
            </div>
        </div>
    </section>
    <!-- End section -->

    <main>
        <div id="position">
            <div class="container">
                <ul>
                    <li><a href="#">الرئيسية</a>
                    </li>
                    <li>جميع الدورات</li>
                </ul>
            </div>
        </div>
        <!-- Position -->

        <div class="collapse" id="collapseMap">
            <div id="map" class="map"></div>
        </div>
        <!-- End Map -->

        <div class="container margin_60">

            <div class="row">
                <aside class="col-lg-3">
                    <p>
                        <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
                    </p>

                    <div class="box_style_cat">
                        <ul id="cat_nav">
                            @foreach($courses as $course)
                            <li><a href="{{route('course.list',$course->name)}}"><i class="icon_book_alt"></i> {{$course->name}} </a>
                            </li>
                            @endforeach

                        </ul>
                    </div>

                    <div id="filters_col">
                        <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt"><i class="icon_set_1_icon-65"></i>Filters</a>
                        <div class="collapse show" id="collapseFilters">
                            <div class="filter_type">
                                <h6>Price</h6>
                                <input type="text" id="range" name="range" value="">
                            </div>
                            <div class="filter_type">
                                <h6>Rating</h6>
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox"><span class="rating">
											<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>
											</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox"><span class="rating">
											<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
											</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox"><span class="rating">
											<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
											</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox"><span class="rating">
											<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
											</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox"><span class="rating">
											<i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
											</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="filter_type">
                                <h6>District/Area</h6>
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox">Paris Centre
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">La Defance
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">Latin Quarter
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--End collapse -->
                    </div>
                    <!--End filters col-->
                    <div class="box_style_2">
                        <i class="icon_set_1_icon-57"></i>
                        <h4>Need <span>Help?</span></h4>
                        <a href="tel://004542344599" class="phone">+45 423 445 99</a>
                        <small>Monday to Friday 9.00am - 7.30pm</small>
                    </div>
                </aside>
                <!--End aside -->
                <div class="col-lg-9">

                    <div id="tools">

                        <div class="row">
                            <div class="col-md-3 col-sm-4 col-6">
                                <div class="styled-select-filters">
                                    <select name="sort_price" id="sort_price">
                                        <option value="" selected>Sort by price</option>
                                        <option value="lower">Lowest price</option>
                                        <option value="higher">Highest price</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-6">
                                <div class="styled-select-filters">
                                    <select name="sort_rating" id="sort_rating">
                                        <option value="" selected>Sort by ranking</option>
                                        <option value="lower">Lowest ranking</option>
                                        <option value="higher">Highest ranking</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-4 d-none d-sm-block text-right">
                                <a href="all_restaurants_grid.html" class="bt_filters"><i class="icon-th"></i></a> <a href="#" class="bt_filters"><i class="icon-list"></i></a>
                            </div>

                        </div>
                    </div>
                    <!--/tools -->

                    @foreach($courses as $course)
                    <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="ribbon_3 popular"><span>{{$course->category}}</span>
                                </div>
                                <div class="wishlist">
                                    <a  class="tooltip_flip tooltip-effect-1" href="#">+<span class="tooltip-content-flip"><span class="tooltip-back">أضف إلى الرغبات</span></span></a>
                                </div>
                                <div class="img_list">
                                    <a href="{{route('course.list',$course->name)}}"><img src="{{asset('website/img/restaurant_box_1.jpg')}}" alt="Image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="tour_list_desc">
                                    <div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile"></i><small>(75)</small>
                                    </div>
                                    <h3>{{$course->name}}</h3>
                                    <p>{!! Illuminate\Support\Str::limit($course->description , $limit = 100, $end = '...' ) !!}</p>
                                    <ul class="add_info">
                                        <li>
                                            <div class="tooltip_styled tooltip-effect-4">
                                                <a href="#" class="tooltip-item"><i class="icon_book"></i></a>
                                                <div class="tooltip-content">
                                                    <h4>{{optional($course->subject)->name}}</h4> انقر لمشاهدة جميع دورات المادة
                                                    <br>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tooltip_styled tooltip-effect-4">
                                                <a href="#" class="tooltip-item"><i class=" icon-graduation-cap"></i></a>
                                                <div class="tooltip-content">
                                                    <h4>{{optional($course->class)->name}}</h4> انقر لمشاهدة جميع صفوف المادة
                                                    <br>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <div class="price_list">
                                    <div id="price"><sup></sup>{{$course->price}}<br><br><br><span class="normal_price_list"></span><small></small>
                                        <p><a href="{{route('course.get-checkout',$course->id)}}" class="btn_1">شاهد الدوره</a>
                                        </p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End strip -->
                    @endforeach

                    <hr>

                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><span class="page-link">1<span class="sr-only">(current)</span></span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- end pagination-->

                </div>
                <!-- End col lg-9 -->
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </main>
    <!-- End main -->
   <div id="showPayForm"></div>

@endsection

@section('script')
    <script>
        $(document).on('click', '#checkout', function (e) {
            e.preventDefault();
            $.ajax({
                type: 'get',
                url: "{{route('course.check')}}",
                data: {
                    price: $('#price').text(),
                    course_id: '{{$course -> id}}',
                },
                success: function (data) {
                    if (data.status == true) {
                        $('#showPayForm').empty().html(data.content);
                    } else {
                    }
                }, error: function (reject) {
                }
            });
        });
    </script>
@endsection
