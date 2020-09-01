@section('main')


    <script src="https://test.oppwa.com/v1/paymentWidgets.js?checkoutId={{$responseData['id']}}"></script>
    <form action="{{route('course.get-checkout',$id)}}" class="paymentWidgets" data-brands="VISA MASTER PAYPAL MADA SADAD UNIONPAY VPAY AFFIRM AFTERPAY ALIPAY"></form>
@stop
