@extends('layouts.app')
@section('content')

    <!-- Page Title
		============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>سلة المشتريات</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a></li>
                <li class="breadcrumb-item"><a href="{{url('/courses')}}">الدورات</a></li>
                <li class="breadcrumb-item active" aria-current="page">سلة المشتريات</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{session()->get('message')}}
                    </div>
                @endif

                @if(Cart::count() > 0)

                        <div id="processTabs">
                            <ul class="process-steps bottommargin clearfix">
                                <li>
                                    <a href="#ptab1" class="i-circled i-bordered i-alt divcenter">1</a>
                                    <h5>مشاهدة سلة التسوق</h5>
                                </li>
                                <li>
                                    <a href="#ptab2" class="i-circled i-bordered i-alt divcenter">2</a>
                                    <h5>أدخل معلوماتك</h5>
                                </li>
                                <li>
                                    <a href="#ptab3" class="i-circled i-bordered i-alt divcenter">3</a>
                                    <h5> الدفع أكتمل</h5>
                                </li>
                                <li>
                                    <a href="#ptab4" class="i-circled i-bordered i-alt divcenter">4</a>
                                    <h5>الدورة جاهزة</h5>
                                </li>
                            </ul>
                            <div>
                                <div id="ptab1">


                                    <div class="table-responsive">
                                        <table class="table cart">
                                            <thead>
                                            <tr>
                                                <th class="cart-product-count">#</th>
                                                <th class="cart-product-name">إسم الدورة</th>
                                                <th class="cart-product-price">سعر الدورة</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach(Cart::content() as $course)

                                            <tr class="cart_item">
                                                <td class="cart-product-count">
                                                    {{$loop->iteration}}
                                                </td>

                                                <td class="cart-product-name">
                                                    <a href="#">{{$course->name}}</a>
                                                </td>

                                                <td class="cart-product-price">
                                                    <span class="amount">{{$course->price}} جنيهاً </span>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>

                                        </table>
                                    </div>

                                    <a href="#" class="button button-3d nomargin fleft tab-linker" rel="2"> الدفع &rArr; </a>

                                </div>
                                <div id="ptab2">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, deleniti, atque soluta ratione blanditiis maxime at architecto laudantium eius eaque distinctio dolorem voluptatem nam ab molestias velit nemo. Illo, hic.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, modi, odit, aspernatur veritatis ipsum molestiae impedit iusto blanditiis voluptatem ab voluptas ullam expedita repellendus porro assumenda non deserunt repellat eius rem dolorem corporis temporibus voluptatibus ut! Quod, corporis, tempora, dolore, sint earum minus deserunt eveniet natus error magnam aliquam nemo.</p>
                                    <div class="line"></div>
                                    <a href="#" class="button button-3d nomargin tab-linker" rel="1"style="float: right">السابق</a>
                                    <a href="#" class="button button-3d nomargin fleft tab-linker" rel="3">شراء الان</a>
                                </div>
                                <div id="ptab3">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, sit, culpa, placeat, tempora quibusdam molestiae cupiditate atque tempore nemo tenetur facere voluptates autem aliquid provident distinctio beatae odio maxime pariatur eos ratione quae itaque quod. Distinctio, temporibus, cupiditate, eaque vero illo molestiae vel doloremque dolorum repellat ullam possimus modi dicta eum debitis ratione est in sunt et corrupti adipisci quibusdam praesentium optio laborum tempora ipsam aut cum consectetur veritatis dolorem.</p>
                                    <div class="line"></div>
                                    <a href="#" class="button button-3d nomargin tab-linker" rel="2" style="float: right">السابق </a>
                                    <a href="#" class="button button-3d nomargin fleft tab-linker" rel="4">الطلب جاهز</a>
                                </div>
                                <div id="ptab4">
                                    <div class="alert alert-success">
                                        <strong>Thank You.</strong> Your order will be processed once we verify the Payment.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="clear"></div>

                        <div class="divider divider-center"><i class="icon-circle"></i></div>

                <div class="row clearfix">


                    <div class="col-lg-6 clearfix">
                        <h4>إجماليات سلة التسوق</h4>

                        <div class="table-responsive">
                            <table class="table cart">
                                <tbody>
                                <tr class="cart_item">
                                    <td class="cart-product-name">
                                        <strong>مجموع سلة التسوق</strong>
                                    </td>

                                    <td class="cart-product-name">
                                        <span class="amount">{{Cart::count()}}</span>
                                    </td>
                                </tr>
                                <tr class="cart_item">
                                    <td class="cart-product-name">
                                        <strong>المجموع</strong>
                                    </td>

                                    <td class="cart-product-name">
                                        <span class="amount color lead"><strong>{{Cart::getTotal()}}</strong></span>
                                    </td>
                                </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
                @else

                @endif

            </div>

        </div>

    </section><!-- #content end -->

    @stop
@section('script')

    <script>
        $(function() {
            $( "#processTabs" ).tabs({ show: { effect: "fade", duration: 400 } });
            $( ".tab-linker" ).click(function() {
                $( "#processTabs" ).tabs("option", "active", $(this).attr('rel') - 1);
                return false;
            });
        });
    </script>
@stop
