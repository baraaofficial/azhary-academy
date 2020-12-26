@extends('layouts.app')
@inject('count','App\Models\Course')
@section('title')
    - الرئيسية
@stop

@section('css')
    <meta name="description" content="أكاديمية أزهري  - الرئيسية" />
    <meta name="keywords" content=" أكاديمية ازهري " />
@stop



@section('content')
    @if(session('message') ?? '' )
        <div class="alert alert-success alert-styled-left alert-arrow-left alert-dismissible">
            <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
            {{session('message') ?? ''}}
        </div>
    @endif
    <!-- Slider
		============================================= -->
    <section id="slider" class="slider-element slider-parallax clearfix" style="height: 550px;">

        <!-- HTML5 Video Wrap
        ============================================= -->
        <div class="video-wrap dark">
            <video id="slide-video" poster="{{asset('website/course/images/video/poster.png')}}" preload="auto" loop autoplay muted>
                <source src='{{asset('website/course/images/video/1.mp4')}}' type='video/mp4' />
            </video>
            <div class="video-overlay" style="background: rgba(0,0,0,0.5); z-index: 1"></div>
        </div>

        <div class="vertical-middle center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <div class="slider-title mb-5 dark clearfix">
                            <h2 class="text-white text-rotater mb-2" data-separator="," data-rotate="fadeIn" data-speed="3500">تعلم معنا والمزيد عن  <span class="t-rotate text-white">@foreach($subject_home as $subject){{$subject->name}}, @endforeach</span>.</h2>
                            <p class="lead mb-0 uppercase ls2" style="color: #CCC; font-size: 110%">ماذا تريد أن تتعلم؟</p>
                        </div>
                        <div class="clear"></div>
                        <div class="input-group input-group-lg mt-1">
                            <form action="{{route('search')}}" method="get" class="input-group-append form-control text-center rounded noborder">
                            @csrf
                            <input name="keyword" class="form-control text-center rounded noborder" type="search" placeholder="ابحث عن دوراتك هنا " aria-label="Search" title="إن كنت تريد البحث عن الدورات او المواد ف عليك كتابة الاسم المشابة
                        ملحوظة: نحن نعمل جاهدين علي تقوية محرك بحثنا">

                            <div class="input-group-append">
                                <button class="btn" type="submit"><i class="icon-line-search t700"></i></button>
                            </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Content
    ============================================= -->
    <section id="content" style="overflow: visible;">

        <div class="content-wrap">

            <!-- Wave Shape Divider
            ============================================= -->
            <div class="wave-bottom" style="position: absolute; top: -12px; left: 0; width: 100%; background-image: url('website/course/images/wave-3.svg'); height: 12px; z-index: 2; background-repeat: repeat-x; transform: rotate(180deg);"></div>

            <div class="container">

                <div class="heading-block nobottomborder my-4 center">
                    <h3 title="أكاديمية أزهري - المواد الدراسية">المواد الدراسية</h3>
                    <span title=" هنا يتم عرض أخر المواد التي أنشأتها الأكاديمية إن كنت تريد مادة معينه عليك بالبحث أعلى الصفحة"> هنا يتم عرض أخر المواد التي أنشأتها الأكاديمية إن كنت تريد مادة معينه عليك بالبحث أعلى الصفحة</span>
                </div>

                <!-- Categories
                ============================================= -->
                <div class="row course-categories clearfix mb-4">
                    @foreach($subject_home as $subject)

                    <div class="col-lg-2 col-sm-3 col-6 mt-4">
                        <div class="card hover-effect">
                            <img class="card-img" src="{{asset('website/course/images/categories/subject.jpg')}}" alt="{{asset('website/course/images/categories/academics.jpg')}}" title="{{$subject->name}}">
                            <a href="{{route('subject.index')}}" title="{{$subject->name}}" class="card-img-overlay rounded p-0" >
                                <span title="{{$subject->name}}"><i class="icon-book-open"></i>{{$subject->name}}</span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="clear"></div>

            </div>
            <div class="container">

                <div class="heading-block nobottomborder my-4 center">
                    <h3 title="أكاديمية أزهري - الصفوف الدراسية">الصفوف الدراسية</h3>
                    <span title=" هنا يتم عرض أخر الصفوف الدراسية التي أنشأتها الأكاديمية إن كنت تريد صف من الصفوف معين عليك بالبحث أعلى الصفحة"> هنا يتم عرض أخر الصفوف الدراسية التي أنشأتها الأكاديمية إن كنت تريد صف من الصفوف معين عليك بالبحث أعلى الصفحة</span>
                </div>

                <!-- Categories
                ============================================= -->
                <div class="row course-categories clearfix mb-4">
                    @foreach($get_class as $class)

                    <div class="col-lg-2 col-sm-3 col-6 mt-4">
                        <div class="card hover-effect">
                            <img class="card-img" src="{{asset('website/course/images/categories/teacher.jpg')}}" alt="{{asset('website/course/images/categories/teacher.jpg')}}" title="{{$class->name}}">
                            <a href="{{route('course.index')}}" title="{{$class->name}}" class="card-img-overlay rounded p-0" >
                                <span title="{{$class->name}}"><i class="icon-book-reader"></i>{{$class->name}}</span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="clear"></div>

            </div>


            <!-- Section Courses
            ============================================= -->
            <div class="section topmargin-lg parallax" style="padding: 80px 0 60px; background-image: url('website/course/images/icon-pattern.jpg'); background-size: auto; background-repeat: repeat"  data-bottom-top="background-position:0px 100px;" data-top-bottom="background-position:0px -500px;">

                <!-- Wave Shape Divider
                ============================================= -->
                <div class="wave-top" style="position: absolute; top: 0; left: 0; width: 100%; background-image: url('website/images/wave-3.svg'); height: 12px; z-index: 2; background-repeat: repeat-x;"></div>

                <div class="container ">
                    <div class="heading-block nobottomborder mb-5 center">
                        <h3 title="أكاديمية أزهري - الصوف الدراسية">الصفوف الدراسية</h3>
                        <span title=" هنا يتم عرض أخر 6 دورات بحسب تصنيف الصفوف إن كنت تريد دورة معينه عليك بالبحث أعلى الصفحة"> هنا يتم عرض أخر 6 دورات بحسب تصنيف الصفوف إن كنت تريد دورة معينه عليك بالبحث أعلى الصفحة</span>
                    </div>
                    <!-- Post Content
                    ============================================= -->


                    <!-- Portfolio Filter
                    ============================================= -->
                    <ul id="portfolio-filter" class="portfolio-filter clearfix" data-container="#portfolio">

                        <li class="activeFilter" title="مشاهدة الكل "><a href="#" data-filter="*">مشاهدة الكل</a></li>
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
                        @foreach($courses_home as $course)
                            <article class="portfolio-item class{{optional($course->class)->id}} @if($loop->first) wide @endif">
                                <div class="portfolio-image">
                                    <a href="{{route('course.list',$course->id)}}">
                                        <img src="{{$course->image}}" alt="{{$course->image}}" title="{{$course->name}}">
                                    </a>
                                    <div class="portfolio-overlay">
                                        <a href="{{asset($course->image)}}" alt="{{$course->image}}" title="{{$course->name}}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
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
                                    <div class="badge alert-primary">{{$course->price}} جنيهاً </div>
                                    <a href="javascript: void(0);" onclick="return add_to_cart({{$course->id}})" title="أضف إلي سلتك" class="text-dark position-relative"><i class="icon-cart-plus"></i> أضف إلى السلة</a>
                                </div>
                            </article>
                        @endforeach
                    </div><!-- #portfolio end -->

                </div>

                <!-- Wave Shape Divider - Bottom
                ============================================= -->
                <div class="wave-bottom" style="position: absolute; top: auto; bottom: 0; left: 0; width: 100%; background-image: url('website/course/images/wave-3.svg'); height: 12px; z-index: 2; background-repeat: repeat-x; transform: rotate(180deg);"></div>
            </div>

            <!-- Instructors Section
            ============================================= -->
            <div class="section nobg" style="padding: 60px 0 40px;">
                <div class="container">

                    <div class="heading-block nobottomborder mb-5 center">
                        <h3 title="المدرسين الأقدم">المدرسين الأقدم </h3>
                        <span title="من خلال ربط الطلاب في جميع أنحاء الجمهورية بأفضل المدرسين، يساعد أكاديمية أزهري الأفراد في الوصول إلى أهدافهم وتحقيق أحلامهم.">من خلال ربط الطلاب في جميع أنحاء الجمهورية بأفضل المدرسين، يساعد أكاديمية أزهري الأفراد في الوصول إلى أهدافهم وتحقيق أحلامهم.</span>
                    </div>

                    <div class="clear"></div>

                    <div class="row">

                        @foreach($teachers as $teacher)
                        <!-- Instructors 1
                        ============================================= -->
                        <div class="col-lg-3 col-sm-6 mb-4">
                            <div class="feature-box hover-effect shadow-sm fbox-center fbox-bg fbox-light fbox-effect">
                                <div class="fbox-icon">

                                    <i><img src="{{asset($teacher->image != null ? $teacher->image : 'uploads/teachers/teacher.jpg')}}" class="noborder nobg shadow-sm" style="z-index: 2;"></i>
                                </div>
                                <h3 class="mb-4 nott ls0" title="{{$teacher->name}}"><a href="#" class="text-dark">{{$teacher->name}}</a><br><small class="subtitle nott color" title="{{$teacher->type}}">{{$teacher->type}}</small></h3>
                                <p>{!!\Illuminate\Support\Str::limit($teacher->description, $limit = 199, $end = '....' ) !!}</p>
                            </div>
                        </div>
                            @endforeach
                    </div>
                </div>
            </div>

            <!-- Featues Section
            ============================================= -->
            <div class="section mt-5 mb-0" style="padding: 120px 0; background-image: url('website/course/images/icon-pattern-bg.jpg'); background-size: auto; background-repeat: repeat">

                <!-- Wave Shape
                ============================================= -->
                <div class="wave-top" style="position: absolute; top: 0; left: 0; width: 100%; background-image: url('website/course/images/wave-3.svg'); height: 12px; z-index: 2; background-repeat: repeat-x;"></div>

                <div class="container">
                    <div class="row">
                        @guest
                            @if (Route::has('register'))
                                <div class="col-lg-8">
                            @endif
                        @else
                        <div class="col-lg-12">
                            @endguest
                            <div class="row dark clearfix">

                                <!-- Feature - 1
                                ============================================= -->
                                <div class="col-md-6">
                                    <div class="feature-box media-box bottommargin">
                                        <div class="fbox-icon">
                                            <a href="#">
                                                <i class="icon-line2-book-open noradius nobg tleft"></i>
                                            </a>
                                        </div>
                                        <div class="fbox-desc">
                                            <h3 class="text-white" title="أكثر من {{$count->count()}} كورس في الأكاديمية">أكثر من {{$count->count()}} كورس في الأكاديمية </h3>
                                            <p class="text-white" title="تهتم أكاديمية أزهري لأول مرة بالطالب الأزهري بعد معاناة طويلة من التهميش وعدم الأهتمام بالمناهج الأزهرية لذلك قامت أكاديمية أزهري بإنشاء أول منصة تعليمية للمناهج الأزهرية سواء عن طريق تطبيق اندرويد أو الموقع الألكتروني الخاص بنا ">تهتم أكاديمية أزهري لأول مرة بالطالب الأزهري بعد معاناة طويلة من التهميش وعدم الأهتمام بالمناهج الأزهرية لذلك قامت أكاديمية أزهري بإنشاء أول منصة تعليمية للمناهج الأزهرية سواء عن طريق تطبيق اندرويد أو الموقع الألكتروني الخاص بنا </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Feature - 2
                                ============================================= -->
                                <div class="col-md-6">
                                    <div class="feature-box media-box bottommargin">
                                        <div class="fbox-icon">
                                            <a href="#">
                                                <i class="icon-line2-note noradius nobg tleft"></i>
                                            </a>
                                        </div>
                                        <div class="fbox-desc">
                                            <h3 class="text-white">الوصول للقمة معنا </h3>
                                            <p class="text-white">Porro repellat vero sapiente amet vitae quibusdam necessitatibus consectetur, labore totam. Accusamus perspiciatis asperiores labore esse.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Feature - 3
                                ============================================= -->
                                <div class="col-md-6">
                                    <div class="feature-box media-box bottommargin">
                                        <div class="fbox-icon">
                                            <a href="#">
                                                <i class="icon-book2 noradius nobg tleft"></i>
                                            </a>
                                        </div>
                                        <div class="fbox-desc">
                                            <h3 class="text-white">مواد مختلفه</h3>
                                            <p class="text-white">Quos, non, esse eligendi ab accusantium voluptatem. Maxime eligendi beatae, atque tempora ullam. Vitae delectus quia, consequuntur rerum quo.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Feature - 4
                                ============================================= -->
                                <div class="col-md-6">
                                    <div class="feature-box media-box bottommargin">
                                        <div class="fbox-icon">
                                            <a href="#">
                                                <i class="icon-book-reader noradius nobg tleft"></i>
                                            </a>
                                        </div>
                                        <div class="fbox-desc">
                                            <h3 class="text-white">مدرسين خبراء </h3>
                                            <p class="text-white">من خلال ربط الطلاب في جميع أنحاء الجمهورية بأفضل المدرسين، يساعد أكاديمية أزهري الأفراد في الوصول إلى أهدافهم وتحقيق أحلامهم.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Registration Foem
                        ============================================= -->
                        @guest
                            @if (Route::has('register'))
                                <div class="col-lg-4">

                                    <div class="card shadow" data-animate="shake" style="opacity: 1 !important">
                                        <div class="card-body">

                                            <div class="badge registration-badge shadow-sm alert-primary" title="أكاديمية أزهري - التسجيل مجانا">مجاناً</div>
                                            <h6 class="card-subtitle mb-4 t400 uppercase ls2 text-black-50" title="التسجيل مجاناً الآن">التسجيل مجاناً الآن</h6>

                                            <div class="form-result"></div>

                                            <form class="nobottommargin" id="template-contactform" name="template-contactform" action="{{route('register')}}" method="post">
                                                @csrf
                                                <div class="form-process"></div>

                                                <div class="col_full">
                                                    <input type="text" id="template-contactform-name" name="name" value="" class="sm-form-control border-form-control required @error('name') is-invalid @enderror" placeholder="الأسم بالكامل:" autocomplete="off" />
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                    @enderror
                                                </div>
                                                <div class="col_full">
                                                    <input type="email" id="template-contactform-email" name="email" value="" class="required email sm-form-control border-form-control @error('email') is-invalid @enderror" placeholder="عنوان البريد الألكتروني:" autocomplete="off"/>
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                    @enderror
                                                </div>

                                                <div class="col_full">
                                                    <input type="tel" id="template-contactform-phone" name="phone" value="" class="sm-form-control border-form-control required  @error('phone_confirmation') is-invalid @enderror" placeholder="رقم الموبايل:" autocomplete="off" />

                                                    @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                    @enderror
                                                </div>


                                                <div class="col_full">
                                                    <input type="password" id="template-contactform-password" name="password" value="" class="sm-form-control border-form-control required  @error('password_confirmation') is-invalid @enderror" placeholder="كلمة السر:" autocomplete="off" />

                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                    @enderror
                                                </div>
                                                <div class="col_full">
                                                    <input type="password" id="template-contactform-password" name="password_confirmation" value="" class="sm-form-control border-form-control required  @error('password_confirmation_confirmation') is-invalid @enderror" placeholder="إعادة كلمة السر:" autocomplete="off" />
                                                    @error('password_confirmation')
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                    @enderror
                                                </div>

                                                <div class="col_full">
                                                    <button class="button button-rounded btn-block button-large bgcolor text-white nott ls0" type="submit" id="template-contactform-submit" name="submit" value="submit">التسجيل الآن</button>
                                                    <br>
                                                    <small class="text-center" title="مرحبا بك في موقع أكاديمية أزهري ." style="display: block; font-size: 12px; margin-top: 15px; color: #AAA;"><em>مرحبا بك في موقع أكاديمية أزهري .</em></small>
                                                </div>

                                                <div class="clear"></div>

                                                <div class="col_full hidden">
                                                    <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                                                </div>

                                                <input type="hidden" name="prefix" value="template-contactform-">

                                            </form>
                                        </div>

                                    </div>
                                </div>
                             </div>
                            @endif
                        @else

                    @endguest
                    </div>
                </div>

                <!-- Wave Shape
                ============================================= -->
                <div class="wave-bottom" style="position: absolute; top: auto; bottom: 0; left: 0; width: 100%; background-image: url('website/course/images/wave-3.svg'); height: 12px; z-index: 2; background-repeat: repeat-x; transform: rotate(180deg);"></div>

            </div>

            <!-- Promo Section
            ============================================= -->
            <div class="section m-0" title="أكاديمية أزهري - ! إنضم معنا" style="padding: 120px 0; background: #FFF url('website/course/images/instructor.jpg') no-repeat left top / cover">
                <div class="container">
                    <div class="row" dir="ltr">

                        <div class="col-md-7"></div>

                        <div class="col-md-5">
                            <div class="heading-block nobottomborder mb-4 mt-5">
                                <h3 title="أكاديمية أزهري - ! إنضم معنا">! إنضم معنا </h3>
                                <span title=". انضم إلى أكبر سوق للتعلم عبر الإنترنت في مصر">. انضم إلى أكبر سوق للتعلم عبر الإنترنت في مصر </span>
                            </div>
                            <p class="mb-2">Monotonectally conceptualize covalent strategic theme areas and cross-unit deliverables.</p>
                            <p>Consectetur adipisicing elit. Voluptate incidunt dolorum perferendis accusamus nesciunt et est consequuntur placeat, dolor quia.</p>
                            <a href="{{url('courses')}}" class="button button-rounded button-xlarge ls0 ls0 nott t400 nomargin">إبدأ التعلم</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="promo promo-light promo-full footer-stick" style="padding: 60px 0 !important;">
                <div class="container clearfix">
                    @foreach($contact as $row)
                    <h3 class="ls-1" title="اتصل بنا اليوم على {{$row->phone}} أو راسلنا عبر البريد الإلكتروني {{$row->mail}} "> اتصل بنا اليوم على <span> {{$row->phone}} </span> أو راسلنا عبر البريد الإلكتروني <span> {{$row->mail}} </span></h3>
                    @endforeach
                    <span class="text-black-50" title="نحن نسعى جاهدين لتزويد عملائنا بدعم من الدرجة الأولى لجعل تجربة موضوعهم رائعة.">نحن نسعى جاهدين لتزويد عملائنا بدعم من الدرجة الأولى لجعل تجربة موضوعهم رائعة.</span>
                    <a href="{{route('contact-us.index')}}" class="button button-xlarge button-rounded nott ls0 t400" title="أبدأ تواصل معنا الأن">أبدأ الآن</a>
                </div>
            </div>

        </div>

    </section><!-- #content end -->
    @stop



