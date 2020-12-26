@extends('layouts.app')

@section('title')
   - {{$course->name}}
    @endsection
@section('css')
    <link rel="stylesheet" href="{{asset('website/css/custom.css')}}" type="text/css" />

@endsection
@section('content')


    <!-- Page Title
		============================================= -->
    <section id="page-title">

        <div class="container clearfix">

            <h1 title="{{$course->name}}">{{$course->name}}</h1></br>
            {!!$course->description!!}

        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <!-- Post Content
                ============================================= -->
                <div class="postcontent nobottommargin clearfix">

                    <!-- Posts
                    ============================================= -->
                    <div id="posts" class="small-thumbs">
                        @if($lessons)
                            @foreach($lessons as $lesson)
                            <div class="entry clearfix">
                                <div class="entry-image">
                                    <a href="{{asset($lesson->image)}}"  data-lightbox="image"><img class="image_fade" src="{{asset($lesson->image)}}" alt="Standard Post with Image"></a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h2><a href="{{route('lesson.single',$lesson->id)}}" title="{{$lesson->title}}">{{$lesson->title}}</a></h2>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><i class="icon-calendar3"></i> {{$lesson->created_at->isoFormat('Do MMMM YYYY', 'MMMM YYYY')}}</li>
                                        <li><i class="icon-folder-open"></i> <a href="#">{{optional($lesson->course)->name}}</a>, <a href="#">{{$course->category}}</a></li>

                                    </ul>
                                    <div class="entry-content">
                                        <p>{!! Illuminate\Support\Str::limit($lesson->description , $limit = 100, $end = '...' ) !!}</p>
                                        <a href="{{route('lesson.single',$lesson->id)}}" title="شاهد الدرس كامل" class="more-link">مشاهدة الدرس كامل </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @else
                            <div class="section center nobg">
                                <h3 class="h1 t700" data-animate="rotateIn">                                                عليك بالاشتراك فى الدورات أولا أو إن كان فى السلة دورات عليك بدفعها
                                </h3>
                                <br>
                                <br>
                                <br>
                                <a href="javascript: void(0);" onclick="return add_to_cart({{$course->id}})" data-animate="flash" class="text-dark position-relative"><i class="icon-cart-plus"></i> أضف إلى السلة</a>
                            </div>
                        @endif
                    </div><!-- #posts end -->


                </div><!-- .postcontent end -->

                <!-- Sidebar
                ============================================= -->
                <div class="sidebar nobottommargin col_last clearfix">
                    <div class="sidebar-widgets-wrap">

                        <div class="widget widget-twitter-feed clearfix">
                            <script type="">
                                function submitForm(){
                                    document.getElementById('submitForm').submit();
                                }
                            </script>
                            <h4>تحميل ملف الدورة</h4>

                            <a id="start-downloadbtn" href="{{$course->pdf}}" download class="btn btn-success btn-lg">ابدأ التحميل</a>

                            <div id="start-download" class="alert alert-success" style="display: none; margin-top: 20px;">
                                <strong> من فضلك انتظر!</strong>سيبدأ التنزيل الخاص بك في<div id="countdown-ex5" class="countdown countdown-inline"></div>.
                            </div>

                           {{-- {!! Form::open(['method' => 'post', 'url' => url('download-course'),'id'=>'submitForm']) !!}
                            {!! Form::hidden('path',$course->pdf) !!}
                            {!! Form::hidden('file_name',$course->name .'.'. explode('.',$course->pdf)[count( explode('.',$course->pdf)) - 1]) !!}
                            {!! Form::close() !!}
                            onclick="submitForm()"--}}

                         {{--  <a href="{{$course->pdf}}" title="تحميل المذكرة" download class="btn btn-secondary btn-sm fright">تحميل الآن</a>
                       --}} </div>

                        <div class="widget clearfix">

                            <div class="tabs nobottommargin clearfix" id="sidebar-tabs">

                                <ul class="tab-nav clearfix">
                                    <li><a href="#tabs-1" title="الدورات">الدورات</a></li>
                                    <li><a href="#tabs-2" title="المواد">المواد</a></li>
                                    <li><a href="#tabs-3" title="الأقسام">الأقسام</a></li>
                                </ul>

                                <div class="tab-container">

                                    <div class="tab-content clearfix" id="tabs-1">
                                        <div id="popular-post-list-sidebar">
                                            @foreach($courses_home as $courses)
                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="#" class="nobg"><img class="rounded-circle" src="{{asset($course->image)}}" alt=""></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="{{route('course.list',$courses->id)}}" title="{{$courses->name}}">{{$courses->name}}</a></h4>
                                                        </div>
                                                        <ul class="entry-meta">
                                                            <li title="{{$courses->updated_at}}">{{$courses->updated_at->diffForHumans()}}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-content clearfix" id="tabs-2">
                                        <div id="recent-post-list-sidebar">
                                            @foreach($subject_home as $subject)

                                                <div class="spost clearfix">

                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="{{route('subject.index',$subject->id)}}" title="{{$subject->name}}">{{$subject->name}}</a></h4>
                                                        </div>

                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-content clearfix" id="tabs-3">
                                        <div id="recent-post-list-sidebar">
                                            @foreach($category_home as $category)

                                                <div class="spost clearfix">

                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="{{route('category.index',$category->id)}}" title=" {{$category->name}}">{{$category->name}}</a></h4>
                                                        </div>

                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div><!-- .sidebar end -->

            </div>

        </div>

    </section><!-- #content end -->
@stop
@section('script')

    <script>

        jQuery(document).ready( function($){
            var newDate = new Date(2020, 9, 31);
            $('#countdown-ex1').countdown({until: newDate});
            $('#countdown-ex2').countdown({until: newDate});
            $('#countdown-ex3').countdown({until: newDate});

            var newDate4 = new Date(2020, 9, 31);
            $('#countdown-ex4').countdown({until: newDate4});

            $('#start-downloadbtn').click( function(){
                $('#start-downloadbtn').fadeOut(300, function(){
                    $('#start-download').fadeIn(300, function(){
                        var currentDate = new Date();
                        currentDate.setSeconds(currentDate.getSeconds()  + 10);
                        $('#countdown-ex5').countdown({
                            until: currentDate,
                            format: 'S',
                            expiryUrl: '{{$course->pdf}}',
                            onExpiry: function(){
                                $('#start-download').html('يجب أن يبدأ التنزيل تلقائيًا. إذا لم يحدث ذلك, <a href="{{$course->pdf}}" download class="alert-link">اضفط هنا</a>.');
                            }
                        });
                    });
                });
                return false;
            });
        });

    </script>
@endsection
