@extends('layouts.app')

@section('content')


    <section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('website/img/restaurant_top.jpg')}}" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1>دورة {{$course->name}}</h1>
                <p>{!! $course->description !!}</p>
            </div>
        </div>
    </section>
    <!-- End section -->

    <main>
        <div id="position">
            <div class="container">
                <ul>
                    <li><a href="{{url('/')}}">الرئيسية</a>
                    </li>
                    <li><a href="{{url('/course')}}">الدورات</a>
                    </li>
                    <li>{{$course->name}}</li>
                </ul>
            </div>
        </div>
        <!-- Position -->


        <div class="container margin_60">

            <div class="row">
                <aside class="col-lg-3">
                    <div class="box_style_cat">
                        <ul id="cat_nav">
                            <li><a href="{{route('course.index')}}" id="active"><i class="icon_book"></i>جميع الدوارات <span>({{$course->count()}})</span></a>
                            </li>
                            @foreach($courses as $course)

                                <li><a href="{{route('course.list',$course->name)}}"><i class="icon_book"></i> {{$course->name}} </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>


                    <!--End filters col-->
                    <div class="box_style_2">
                        <i class="icon_set_1_icon-57"></i>
                        <h4>هل تحتاج <span>للمساعدة؟</span></h4>
                        <a href="tel://004542344599" class="phone">+45 423 445 99</a>
                        <small>Monday to Friday 9.00am - 7.30pm</small>
                    </div>
                </aside>
                <!--End aside -->
                <div class="col-lg-9">



                    @foreach($lessons as $lesson)
                        <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s" >
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="img_list">
                                        <a href="{{route('lesson.single',$lesson->title)}}"><img src="{{asset('website/img/restaurant_box_1.jpg')}}" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="tour_list_desc">
                                        <h3>{{$lesson->title}}</h3>
                                        <p>{!! Illuminate\Support\Str::limit($lesson->description , $limit = 100, $end = '...' ) !!}</p>

                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2">
                                    <div class="price_list">
                                        <div><span class="normal_price_list"></span><small></small>
                                            <p><a id="checkout" href="{{route('lesson.single',$lesson->title)}}" class="btn_1">شاهد الدرس</a>
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
                                    <span class="sr-only">السابق</span>
                                </a>
                            </li>
                            <li class="page-item active"><span class="page-link">1<span class="sr-only">(current)</span></span>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">التالى</span>
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
@stop
