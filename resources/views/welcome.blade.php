@extends('layouts.app')

@section('title')
    - الرئسية
@stop

@section('css')
    <meta name="viewport" content="width=device-width, initial-scale=1" />

@stop



@section('content')
    <!-- Slider
		============================================= -->
    <section id="slider" class="slider-element slider-parallax clearfix" style="height: 550px;">

        <!-- HTML5 Video Wrap
        ============================================= -->
        <div class="video-wrap">
            <video id="slide-video" poster="{{asset('website/course/images/video/poster.jpg')}}" preload="auto" loop autoplay muted>
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
                            <input name="keyword" class="form-control text-center rounded noborder" type="search" placeholder="ابحث عن دورات " aria-label="Search">

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
                    <h3>المواد الدراسية</h3>
                    <span>المواد التي تدرسها اكاديمية أزهري</span>
                </div>

                <!-- Categories
                ============================================= -->
                <div class="row course-categories clearfix mb-4">
                    @foreach($subject_home as $subject)

                    <div class="col-lg-2 col-sm-3 col-6 mt-4">
                        <div class="card hover-effect">
                            <img class="card-img" src="{{asset('website/course/images/categories/academics.jpg')}}" alt="Card image">
                            <a href="{{route('subject.index')}}" class="card-img-overlay rounded p-0" style="background-color: rgba(39,103,240,0.8);">
                                <span><i class="icon-book-open"></i>{{$subject->name}}</span>
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

                <div class="container">

                    <div class="heading-block nobottomborder mb-5 center">
                        <h3>الدورات الأخيره في الأكاديمية</h3>
                    </div>

                    <div class="clear"></div>

                    <div class="row mt-2">

                        <!-- Course 6
                        ============================================= -->
                        @foreach($courses_home as $course)
                        <div class="col-md-4 mb-5">
                            <div class="card course-card hover-effect noborder">
                                <a href="#"><img class="card-img-top" src="{{asset($course->image)}}" alt="Card image cap"></a>
                                <div class="card-body">
                                    <h4 class="card-title t700 mb-2"><a href="{{route('course.list',$course->id)}}">{{$course->name}}</a></h4>
                                    <p class="mb-2 card-title-sub uppercase t400 ls1"><a href="#" class="text-black-50">{{optional($course->class)->name}}</a></p>
                                    <div class="rating-stars mb-2"><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star-half"></i> <span>4.4</span></div>
                                    <p class="card-text text-black-50 mb-1">{!!  \Illuminate\Support\Str::limit($course->description, $limit = 203, $end = '....' ) !!}</p>
                                </div>
                                <div class="card-footer py-3 d-flex justify-content-between align-items-center bg-white text-muted">
                                    <div class="badge alert-primary">{{$course->price}} جنيهاً </div>
                                    <a href="#" class="text-dark position-relative"><i class="icon-line2-user"></i> <span class="author-number">1</span></a>
                                </div>
                                <div>
                                    <script type="text/javascript" >
                                        let successPageUrl = "https://success.page.com";
                                        let failerPageUrl = "https://failure.page.com";
                                        // Get your user first name
                                        let first_name = document.getElementById('name').value;
                                        // Get your user last name
                                        let last_name = document.getElementById('last_name').value;
                                        // Get your user email
                                        let email = document.getElementById('email').value;
                                        // Get your user mobile
                                        let mobile = document.getElementById('mobile').value;
                                        let name;
                                        // Check validity of your data
                                        if(first_name === '' || last_name === '' || email === '' || mobile === "")
                                        {
                                            alert("Please Check You Data!!")
                                        }
                                        else
                                        {
                                            name =  first_name + " " + last_name;
                                        }
                                        let chargeRequest =
                                            {
                                                language: "ar-eg",
                                                merchantCode: "1tSa6uxz2nRbgY+b+cZGyA==",
                                                merchantRefNumber: "2312465464",
                                                customer: {
                                                    name : name,
                                                    mobile: mobile,
                                                    email : email,
                                                    customerProfileId: "8723871236"
                                                },
                                                order: {
                                                    description:"test bill inq",
                                                    expiry: 2,
                                                    orderItems: [ {
                                                        productSKU: 12222,
                                                        description:"Test Product",
                                                        price: 75,
                                                        quantity: 2,
                                                        width: 10,
                                                        height: 5,
                                                        length: 100,
                                                        weight: 1
                                                    } ]
                                                } ,
                                                signature: "2ca4c078ab0d4c50ba90e31b3b0339d4d4ae5b32f97092dd9e9c07888c7eef36",
                                                description: "example description"
                                            };
                                        // Call FawryPay checkout function
                                        FawryPay.checkout(chargeRequest,successPageUrl, failerPageUrl);

                                    </script>
                                    <!-- FawryPay Checkout Button -->
                                    <input type="image" onclick="FawryPay.checkout(chargeRequest,successPageUrl, failerPageUrl);" src="https://www.atfawry.com/assets/img/FawryPayLogo.jpg"/>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
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
                        <h3>المدربين الأكثر </h3>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla natus mollitia ipsum. Voluptatibus, perspiciatis placeat.</span>
                    </div>

                    <div class="clear"></div>

                    <div class="row">

                        @foreach($teachers as $teacher)
                        <!-- Instructors 1
                        ============================================= -->
                        <div class="col-lg-3 col-sm-6 mb-4">
                            <div class="feature-box hover-effect shadow-sm fbox-center fbox-bg fbox-light fbox-effect">
                                <div class="fbox-icon">
                                    <i><img src="{{asset('uploads/teachers/'.$teacher->image)}}" class="noborder nobg shadow-sm" style="z-index: 2;" alt=""></i>
                                </div>
                                <h3 class="mb-4 nott ls0"><a href="#" class="text-dark">{{$teacher->name}}</a><br><small class="subtitle nott color">{{$teacher->type}}</small></h3>
                                <p class="text-dark"><strong>2342</strong> Students</p>
                                <p class="text-dark mt-0"><strong>23</strong> Courses</p>
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
                                            <h3 class="text-white">21,000 فى الأكديمية</h3>
                                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.</p>
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

                                            <div class="badge registration-badge shadow-sm alert-primary">مجاناً</div>
                                            <h4 class="card-title ls-1 mt-4 t700 h5">سجل معنا الآن وأحصل على خصومات !</h4>
                                            <h6 class="card-subtitle mb-4 t400 uppercase ls2 text-black-50">التسجيل مجاناً الآن</h6>

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
                                                    <small class="text-center" style="display: block; font-size: 12px; margin-top: 15px; color: #AAA;"><em>مرحبا بك في موقع أكاديمية أزهري .</em></small>
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
            <div class="section m-0" style="padding: 120px 0; background: #FFF url('website/course/images/instructor.jpg') no-repeat left top / cover">
                <div class="container">
                    <div class="row" dir="ltr">

                        <div class="col-md-7"></div>

                        <div class="col-md-5">
                            <div class="heading-block nobottomborder mb-4 mt-5">
                                <h3>! إنضم معنا </h3>
                                <span>. انضم إلى أكبر سوق للتعلم عبر الإنترنت في مصر </span>
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
                    <h3 class="ls-1"> اتصل بنا اليوم على <span> +91.22.57412541 </span> أو راسلنا عبر البريد الإلكتروني <span> support@canvas.com </span></h3>
                    <span class="text-black-50">نحن نسعى جاهدين لتزويد عملائنا بدعم من الدرجة الأولى لجعل تجربة موضوعهم رائعة.</span>
                    <a href="{{route('contact-us.index')}}" class="button button-xlarge button-rounded nott ls0 t400">أبدأ الآن</a>
                </div>
            </div>

        </div>

    </section><!-- #content end -->
    @stop



