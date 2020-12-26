@extends('layouts.app')


@section('title')
    - سلة المشتريات
@endsection

@section('content')

    <!-- Page Title
		============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1 title="اكاديمية أزهري - سلة المشتريات">سلة المشتريات</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}" title="أكاديمية أزهري - الرئيسية">الرئيسية</a></li>
                <li class="breadcrumb-item"><a href="{{url('/courses')}}" title="أكاديمية أزهري - الدورات">الدورات</a></li>
                <li class="breadcrumb-item active" aria-current="page" title="أكاديمة أزهري سلة المشتريات">سلة المشتريات</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">
                @if(session()->has('message'))
                    <div class="alert alert-success" title="{{session()->get('message')}}">
                        {{session()->get('message')}}
                    </div>
                @endif

                @if(session()->has('Successfully'))
                    <div class="alert alert-success" title=" {{session()->get('Successfully')}}">
                        {{session()->get('Successfully')}}
                    </div>
                @endif

                @if(session()->get('cart'))

                @php
                    $cart_total_order_price = 0;
                    $total_cart_items   = 0;
                    $name_cart_items   = 0;
                @endphp


                    @foreach(session()->get('cart') as $cartitem)
                        @php
                            $cart_total_order_price += $cartitem['price'];
                            $total_cart_items += 1;
                            $name_cart_items += $cartitem['course_id'];
                        @endphp
                    @endforeach

                    <div title="تكوين الدفع">
                        تكوين الدفع
                    </div>
                    @php
                        $FawryPay  = 0;
                        $payment_id = Auth::user()->id.'_'.uniqid();
                        $json['productSKU']   = $payment_id;
                        $json['description']  = $name_cart_items;
                        $json['quantity']     = 1;
                        $json['price']        = $cart_total_order_price;
                        $json_data = json_encode($json);
                    @endphp
                @endif


                @if(session()->get('cart'))
                    <form action="{{url('checkout')}}" id="confirm_requested_package" method="post" role="form">
                        {{ csrf_field() }}
                            <input type="hidden" name="snum" value="{{$payment_id}}">
                            <input type="hidden" name="course_id" value="{{$name_cart_items}}">
                            <input type="hidden" name="user_name" value="{{Auth::user()->name}}">
                            <input type="hidden" name="user_email" value="{{Auth::user()->email}}">
                            <input type="hidden" name="user_phone" value="{{Auth::user()->phone}}">
                            <input type="hidden" name="total" value="{{$cart_total_order_price}}">

                            <input type="hidden" name="paid" id="f_paid_case" value="">
                            <input type="hidden" name="f_response[billUploadBillAccNum]" id="f_billUploadBillAccNum" value="">
                            <input type="hidden" name="f_response[paymentAuthId]" id="f_paymentAuthId" value="">
                            <input type="hidden" name="f_response[merchantRefNum]" id="f_merchantRefNum" value="">
                            <input type="hidden" name="f_response[messageSignature]" id="f_messageSignature" value="">
                            <input type="hidden" name="f_response[paymentMethod]" id="f_paymentMethod" value="">

                    </form>

                        <div id="processTabs">
                            <ul class="process-steps bottommargin clearfix">
                                <li>
                                    <a href="#ptab1" class="i-circled i-bordered i-alt divcenter" title="1">1</a>
                                    <h5 title="مشاهدة سلة المشتريات">مشاهدة سلة التسوق</h5>
                                </li>

                            </ul>
                            <div>
                                <div id="ptab1">


                                    <div class="table-responsive">
                                     @if(count(session()->get('cart')) > 0)
                                    @php $total_price1 = 0; @endphp


                                        <table class="table cart">
                                            <thead>
                                            <tr>
                                                <th class="cart-product-count" title="#">#</th>
                                                <th class="cart-product-name" title="إسم الدورة">إسم الدورة</th>
                                                <th class="cart-product-name" title="صورة الدورة">صورة الدورة</th>
                                                <th class="cart-product-price" title="سعر الدورة">سعر الدورة</th>
                                                <th class="cart-product-name" title="حذف الدورة"> حذف الدورة</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach(session()->get('cart') as $cart_item)
                                                @php $total_price1 += $cart_item['price']; @endphp
                                            <tr class="cart_item">
                                                <td class="cart-product-count" title="{{$loop->iteration}}">
                                                    {{$loop->iteration}}
                                                </td>
                                                <td class="cart-product-name">
                                                    <a href="{{url('/courses',$cart_item['course_id'])}}" title="{{$cart_item['course_name']}}">{{$cart_item['course_name']}}</a>
                                                </td>
                                                <td class="cart-product-name">
                                                    <img src="{{url($cart_item['image'])}}" alt="{{$cart_item['course_name']}}" style=" width: 60px; " />
                                                </td>

                                                <td class="cart-product-price">
                                                    <span class="amount" title="{{$cart_item['price']}} جنيهاً ">{{$cart_item['price']}} جنيهاً </span>
                                                </td>
                                                <td class="cart-product-name" title="حذف">
                                                    <a href="{{url('/delete-product-from-cart',$cart_item['course_id'])}}?remove_cart_item=1">حذف</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>

                                        </table>
                                        @else
                                        لا يوجد كورسات فى عربة التسوق لديك
                                        @endif
                                    </div>

                                    <a href="#" id="faw_checkout_btn"class="button button-3d nomargin fleft tab-linker" rel="2" title="إدفع "> الدفع &rArr; </a>

                                </div>

                            </div>
                        </div>

                        <div class="clear"></div>

                        <div class="divider divider-center"><i class="icon-circle"></i></div>

                <div class="row clearfix">


                    <div class="col-lg-6 clearfix">
                        <h4 title="إجماليات سلة التسوق">إجماليات سلة التسوق</h4>

                        <div class="table-responsive">
                            <table class="table cart">
                                <tbody>
                                <tr class="cart_item">
                                    <td class="cart-product-name">
                                        <strong title="مجموع سلة التسوق">مجموع سلة التسوق</strong>
                                    </td>

                                    <td class="cart-product-name">
                                        <span class="amount">
                                            @if(count(session()->get('cart')) > 0)
                                                {{count(session()->get('cart'))}}
                                            @else
                                                0
                                            @endif
                                        </span>
                                    </td>
                                </tr>
                                <tr class="cart_item">
                                    <td class="cart-product-name">
                                        <strong title="المجموع">المجموع</strong>
                                    </td>

                                    <td class="cart-product-name">
                                        <span class="amount color lead"><strong>
                                                @if(isset($cart_total_order_price))
                                                    {{$cart_total_order_price}}
                                                @else
                                                    0
                                                @endif
                                            </strong>
                                        </span>
                                    </td>
                                </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
                @else
                    <div class="section center nobg">
                        <h3 class="h1 t700" data-animate="rotateIn" title="لا توجد دورات في عربة التسوق لديك">لا توجد دورات في عربة التسوق لديك</h3>
                    </div>
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


    @if(isset($FawryPay))
        $("#faw_checkout_btn").click(function () {
        var merchant      = "K/k+vV5lPBztEh0iB+8+Qg==";
            /* for live : K/k+vV5lPBztEh0iB+8+Qg== */
            /* for test : 1tSa6uxz2nSS00EEYgF48w== */
            var merchantRefNum= "{{$payment_id}}";
            var productsJSON  =  JSON.stringify([@php echo $json_data; @endphp]);
            var customerName  = "{{Auth::user()->name}}";
            var mobile        = "{{Auth::user()->phone}}";
            var email         = "{{Auth::user()->email}}";
            var customerId    = "{{Auth::user()->id}}";
            var orderExpiry   = "168";
            var orderDesc     = "طلب إشتراك دورات";
            var locale        = "ar-eg";
            var mode          = null;
            loadFawryPluginPopup(merchant, locale, merchantRefNum,productsJSON, customerName, mobile, email, mode, customerId, orderDesc,orderExpiry);
        });
    @endif


    </script>
@stop
