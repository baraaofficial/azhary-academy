@extends('layouts.app')

@section('title')
    - الدورات
@endsection

@section('css')
    <meta name="description" content="أكاديمية أزهري  - جميع الدورات بحسب الصفوف الدراسية" />
    <meta name="keywords" content=" الدورات " />
@endsection
@section('content')


    <!-- Page Title
    ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1 title="أكاديمية أزهري  - جميع الدورات بحسب الصفوف الدراسية">أكاديمية أزهري  - جميع الدورات بحسب الصفوف الدراسية</h1>
            <span title="هنا جميع الدورات التي قام الموقع بإنشائها">هنا جميع الدورات التي قام الموقع بإنشائها </span>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}" title="أكاديمية أزهري - الرئيسية">الرئيسية</a></li>
                <li class="breadcrumb-item active" aria-current="page" title="أكاديمية أزهري - الصفوف الدراسية"> الصفوف الدراسية </li>
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

                        <li class="activeFilter"><a href="#" data-filter="*" title="مشاهدة الكل ">مشاهدة الكل</a></li>
                        @foreach($get_class as $class)
                        <li><a href="#" data-filter=".class{{$class->id}}" title="{{$class->name}}">{{$class->name}}</a></li>
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
                                    <img src="{{asset($course->image)}}" alt="{{asset($course->image)}}" title="{{$course->name}}">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="{{asset($course->image)}}" alt="{{asset($course->image)}}" title="{{$course->name}}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                    <a href="{{route('course.list',$course->id)}}" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="{{route('course.list',$course->id)}}" title="{{$course->name}}">{{$course->name}}</a></h3>
                                <p class="card-text text-black-50 mb-1" title="{!!  \Illuminate\Support\Str::limit($course->description, $limit = 150, $end = '....' ) !!}">{!!  \Illuminate\Support\Str::limit($course->description, $limit = 150, $end = '....' ) !!}</p>
                                <span>
                                    <a href="{{route('category.index',$course->id.'/'.\Illuminate\Support\Str::replaceArray(' ',['-'],optional($course->categories)->name))}}" title="{{optional($course->categories)->name}}">{{optional($course->categories)->name}}</a>,
                                    <a href="{{route('course.index',$course->id.'/'.\Illuminate\Support\Str::replaceArray(' ',['-'],optional($course->class)->name))}}" title="{{optional($course->class)->name}}">{{optional($course->class)->name}}</a></span>
                            </div>
                            <div class="card-footer py-3 d-flex justify-content-between align-items-center bg-white text-muted">
                                <div class="badge alert-primary" title="{{$course->price}} جنيهاً ">{{$course->price}} جنيهاً </div>
                                <a href="javascript: void(0);" onclick="return add_to_cart({{$course->id}})"  class="text-dark position-relative" title="أضف إلى سلتك"><i class="icon-cart-plus"></i> أضف إلى السلة</a>
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

                            <h4 title="آخر المواد الدراسية"> آخر المواد الدراسية</h4>
                            <div id="post-list-footer">
                                @foreach($subjects as $subject)
                                <div class="spost clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="{{route('subject.index',$subject->id.'/'.\Illuminate\Support\Str::replaceArray(' ',['-'],$subject->name))}}" title="{{$subject->name}}">{{$subject->name}}</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li title="{{$subject->updated_at->isoFormat('Do MMMM YYYY', 'MMMM YYYY')}}">{{$subject->updated_at->isoFormat('Do MMMM YYYY', 'MMMM YYYY')}}</li>
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
