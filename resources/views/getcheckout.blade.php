@extends('layouts.app')

@section('css')

    <!-- SPECIFIC CSS -->
    <link href="{{asset('website/css/shop.css')}}" rel="stylesheet">
    <link href="{{asset('website/css/shop-rtl.css')}}" rel="stylesheet">

    <!-- CUSTOM CSS -->
    <link href="{{asset('website/css/custom.css')}}" rel="stylesheet">
@endsection

@section('content')
    @if($checkout)

        <section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('website/img/header_bg.jpg')}}" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1> شراء دورة  {{$checkout->name}} </h1>
                <br>
                <p>يجب عليك ان تكون مجهز بالدفع عن طريق Visa / MaterCard</p>
            </div>
        </div>
    </section>
    <!-- End Section -->

    <main>
        <div id="position">
            <div class="container">
                <ul>
                    <li><a href="{{url('/')}}">الرئيسية</a>
                    </li>
                    <li><a href="{{url('/courses')}}">جميع الدورات</a>
                    </li>
                    <li> شراء دورة  {{$checkout->name}}</li>
                </ul>
            </div>
        </div>
        <!-- End Position -->

        <div class="container margin_60">
            <div class="row">
                <div class="col-lg-9">

                    <div class="product-details">
                        <div class="basic-details">
                            <div class="row">
                                <div class="image-column col-sm-6">
                                    <figure class="image-box"><img src="{{asset('website/img/products/image-2.jpg')}}" alt="">
                                    </figure>
                                </div>
                                <div class="info-column col-sm-6">
                                    <div class="details-header">
                                        <h2> {{$checkout->name}}</h2>
                                        <div class="item-price" id="price">{{$checkout->price}}</div>
                                    </div>
                                    <div class="text">
                                        <p>
                                            {!! Illuminate\Support\Str::limit($checkout->description, $limit = 40, $end = '...' ) !!}
                                        </p>
                                    </div>
                                    <div class="other-options">

                                        <a href="shopping-cart.html" class="btn_1">أضف إلى السلة </a>
                                        <a id="checkout" href="{{route('course.check',$checkout->price)}}"  role="button" class="btn_1">شراء الآن </a>
                                    </div>
                                    <!--Item Meta-->
                                    <ul class="item-meta">
                                        <li>العلامات الدراسية: <a href="#">Books</a> , <a href="#">Magazine</a>
                                        </li>
                                    </ul>
                                    <div class="col-md-12 mb-4">
                                        @if(isset($success))
                                            <div class="alert alert-success text-center">
                                                تم الدفع بنجاح وعلية انت قادر على تشغيل الدورة من <a href="{{route('course.list',$checkout->id)}}"> هنا </a>
                                            </div>

                                        @endif


                                        @if(isset($fail))
                                            <div class="alert alert-danger text-center">
                                                فشلت عميلة الدفع يرجي التحقق من البيانات وإعادة المحاوله
                                            </div>
                                        @endif
                                        <div id="showPayForm"></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Basic Details-->
                        <div class="product-info-tabs">

                            <div class="prod-tabs" id="product-tabs">
                                <div class="tab-btns clearfix">
                                    <a href="#prod-description" class="tab-btn active-btn">وصف الدورة</a>
                                </div>

                                <div class="tabs-container">
                                    <div class="tab active-tab" id="prod-description">
                                        <br>
                                        <div class="content">
                                            <p>
                                                {!! Illuminate\Support\Str::limit($checkout->description, $limit = 250, $end = '...' ) !!}
                                            </p>
                                        </div>
                                    </div>
                                    <!--End Tab-->

                                </div>
                                <!--End tabs-container-->
                            </div>
                            <!--End prod-tabs-->
                        </div>
                        <!--End product-info-tabs-->

                        <div class="related-products">
                            <div class="normal-title">
                                <h3>اخر الدورات</h3>
                            </div>

                        </div>
                        <!--End Related products-->
                    </div>
                    <!--End Product-details-->
                </div>
                <!--End Col-->

                <div class="col-lg-3">
                    <aside class="sidebar">
                        <!-- End Search -->
                        <div class="widget" id="cat_shop">
                            <h4>المدرس الملقي للدورة</h4>
                            <ul>
                                <li><a href="#">Places to visit</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End widget -->

                        <hr>
                        <div class="widget related-products">
                            <h4>Top Related </h4>
                            <div class="post">
                                <figure class="post-thumb">
                                    <a href="#"><img src="{{asset('website/img/products/thumb-1.jpg')}}" alt="">
                                    </a>
                                </figure>
                                <h5><a href="#">Grunge Fashion</a></h5>
                                <div class="rating">
                                    <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
                                </div>
                                <div class="price">
                                    $ 15.00
                                </div>
                            </div>
                            <div class="post">
                                <figure class="post-thumb">
                                    <a href="#"><img src="{{asset('website/img/products/thumb-2.jpg')}}" alt="">
                                    </a>
                                </figure>
                                <h5><a href="#">Office Kit</a></h5>
                                <div class="rating">
                                    <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
                                </div>
                                <div class="price">
                                    $ 15.00
                                </div>
                            </div>
                            <div class="post">
                                <figure class="post-thumb">
                                    <a href="#"><img src="{{asset('website/img/products/thumb-3.jpg')}}" alt="">
                                    </a>
                                </figure>
                                <h5><a href="#">Crime &amp; Punishment</a></h5>
                                <div class="rating">
                                    <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
                                </div>
                                <div class="price">
                                    $ 15.00
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
                <!--Sidebar-->
            </div>
        </div>
        <!-- End Container -->
    </main>
    <!-- End main -->
    @endif

    @endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script>
        $(document).on('click', '#checkout', function (e) {
            e.preventDefault();
            $.ajax({
                type: 'get',
                url: "{{route('course.check')}}",
                data: {
                    price: $('#price').text(),
                    course_id: '{{$checkout -> id}}',
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

<script>
    if ($('.prod-tabs .tab-btn').length) {
        $('.prod-tabs .tab-btn').on('click', function (e) {
            e.preventDefault();
            var target = $($(this).attr('href'));
            $('.prod-tabs .tab-btn').removeClass('active-btn');
            $(this).addClass('active-btn');
            $('.prod-tabs .tab').fadeOut(0);
            $('.prod-tabs .tab').removeClass('active-tab');
            $(target).fadeIn(500);
            $(target).addClass('active-tab');
        });

    }
</script>
@endsection
