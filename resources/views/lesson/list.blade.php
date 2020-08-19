@extends('layouts.app')

@section('title')
   | {{$course->name}}
    @endsection
@section('content')


    <!-- Page Title
		============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>{{$course->name}}</h1>
            <span>{!! Illuminate\Support\Str::limit($course->description, $limit = 100, $end = '...' )!!}</span>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                <li class="breadcrumb-item active" aria-current="page"> {{$course->name}} </li>
            </ol>
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
                        @foreach($lessons as $lesson)
                        <div class="entry clearfix">
                            <div class="entry-image">
                                <a href="{{asset('uploads/lessons/'.$lesson->image)}}" data-lightbox="image"><img class="image_fade" src="{{asset('uploads/lessons/'.$lesson->image)}}" alt="Standard Post with Image"></a>
                            </div>
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h2><a href="{{route('lesson.single',$lesson->title)}}">{{$lesson->title}}</a></h2>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i> {{$lesson->created_at->isoFormat('Do MMMM YYYY', 'MMMM YYYY')}}</li>
                                    <li><i class="icon-folder-open"></i> <a href="#">{{optional($course->subject)->name}}</a>, <a href="#">{{$course->category}}</a></li>
                                    <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
                                    <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                                </ul>
                                <div class="entry-content">
                                    <p>{!! Illuminate\Support\Str::limit($lesson->description , $limit = 100, $end = '...' ) !!}</p>
                                    <a href="{{route('lesson.single',$lesson->title)}}" class="more-link">مشاهدة الكل</a>
                                </div>
                            </div>
                        </div>
                        @endforeach



                    </div><!-- #posts end -->

                    <!-- Pagination
                    ============================================= -->
                    <div class="row mb-3">
                        <div class="col-12">
                            <a href="#" class="btn btn-outline-secondary float-left">&larr; Older</a>
                            <a href="#" class="btn btn-outline-dark float-right">Newer &rarr;</a>
                        </div>
                    </div>
                    <!-- .pager end -->

                </div><!-- .postcontent end -->

                <!-- Sidebar
                ============================================= -->
                <div class="sidebar nobottommargin col_last clearfix">
                    <div class="sidebar-widgets-wrap">

                        <div class="widget widget-twitter-feed clearfix">

                            <h4>تحميل ملف الدورة</h4>
                            <ul class="iconlist twitter-feed" data-username="envato" data-count="2">
                                <li></li>
                            </ul>

                            <a href="#" class="btn btn-secondary btn-sm fright">تحميل الآن</a>

                        </div>

                        <div class="widget clearfix">

                            <div class="tabs nobottommargin clearfix" id="sidebar-tabs">

                                <ul class="tab-nav clearfix">
                                    <li><a href="#tabs-1">الدورات</a></li>
                                    <li><a href="#tabs-2">المواد</a></li>
                                    <li><a href="#tabs-3">الأقسام</a></li>
                                </ul>

                                <div class="tab-container">

                                    <div class="tab-content clearfix" id="tabs-1">
                                        <div id="popular-post-list-sidebar">
                                            @foreach($courses_home as $courses)
                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="#" class="nobg"><img class="rounded-circle" src="{{asset('website/images/magazine/small/1.jpg')}}" alt=""></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="{{route('course.index',$courses->id)}}">{{$courses->name}}</a></h4>
                                                        </div>
                                                        <ul class="entry-meta">
                                                            <li>{{$courses->updated_at->diffForHumans()}}</li>
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
                                                            <h4><a href="{{route('subject.index',$subject->id)}}">{{$subject->name}}</a></h4>
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
                                                            <h4><a href="{{route('category.index',$category->id)}}">{{$category->name}}</a></h4>
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
