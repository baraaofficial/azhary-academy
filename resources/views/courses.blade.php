@extends('layouts.app')

@section('title')
    | الدورات
@endsection
@section('content')


    <!-- Page Title
    ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>أكاديمية أزهري  - جميع الدورات بحسب الصفوف الدراسية</h1>
            <span>هنا جميع الدورات التي قام الموقع بإنشائها </span>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a></li>
                <li class="breadcrumb-item active" aria-current="page"> الصفوف الدراسية </li>
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
                <div class="postcontent nobottommargin col_last">

                    <!-- Portfolio Filter
                    ============================================= -->
                    <ul id="portfolio-filter" class="portfolio-filter clearfix" data-container="#portfolio">

                        <li class="activeFilter"><a href="#" data-filter="*">مشاهدة الكل</a></li>
                        @foreach($get_class as $class)
                        <li><a href="#" data-filter=".class{{$class->id}}">{{$class->name}}</a></li>
                        @endforeach
                    </ul><!-- #portfolio-filter end -->

                    <div id="portfolio-shuffle" class="portfolio-shuffle" data-container="#portfolio">
                        <i class="icon-random"></i>
                    </div>

                    <div class="clear"></div>

                    <!-- Portfolio Items
                    ============================================= -->
                    <div id="portfolio" class="portfolio grid-container portfolio-3 portfolio-masonry clearfix">
                        @foreach($get_courses as $course)
                        <article class="portfolio-item class{{optional($course->class)->id}} @if($loop->first) wide @endif">
                            <div class="portfolio-image">
                                <a href="{{route('course.list',$course->id)}}">
                                    <img src="{{asset($course->image)}}  " alt="Open Imagination">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="{{asset($course->image)}}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                    <a href="{{route('course.list',$course->id)}}" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="{{route('course.list',$course->id)}}">{{$course->name}}</a></h3>
                                <p class="card-text text-black-50 mb-1">{!!  \Illuminate\Support\Str::limit($course->description, $limit = 150, $end = '....' ) !!}</p>
                                <span><a href="{{route('category.index',$course->id)}}">{{optional($course->categories)->name}}</a>, <a href="{{route('course.index',$course->id)}}">{{optional($course->class)->name}}</a></span>
                            </div>
                            <div class="card-footer py-3 d-flex justify-content-between align-items-center bg-white text-muted">
                                <div class="badge alert-primary">{{$course->price}} جنيهاً </div>
                                <a href="#" class="text-dark position-relative"><i class="icon-line2-user"></i> <span class="author-number">1</span></a>
                            </div>
                        </article>
                        @endforeach
                    </div><!-- #portfolio end -->

                </div><!-- .postcontent end -->

                <!-- Sidebar
                ============================================= -->
                <div class="sidebar nobottommargin">
                    <div class="sidebar-widgets-wrap">

                        <div class="widget clearfix">

                            <h4>آخر المواد الدراسية</h4>
                            <div id="post-list-footer">
                                @foreach($subjects as $subject)
                                <div class="spost clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="{{route('subject.index',$subject->id)}}">{{$subject->name}}</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li>{{$subject->updated_at->isoFormat('Do MMMM YYYY', 'MMMM YYYY')}}</li>
                                        </ul>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                        </div>

                    </div>
                </div><!-- .sidebar end -->

            </div>

        </div>

    </section><!-- #content end -->
@endsection
