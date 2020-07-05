@extends('layouts.app')
@section('content')
    <script src="https://test.oppwa.com/v1/paymentWidgets.js?checkoutId={{$responseData['id']}}}"></script>
    <form action="{{route('course.index',$id)}}" class="paymentWidgets" data-brands="VISA MASTER AMEX"></form>

@endsection
