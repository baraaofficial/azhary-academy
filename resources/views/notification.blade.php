@extends('layouts.app')


@section('content')
@foreach($notifications as $notification)
    {{$notification->title}}
    <br>
@endforeach

<!-- Page Title
		============================================= -->
<section id="page-title">

    <div class="container clearfix">
        <h1>Both Sidebar</h1>
        <span>Page Content in the Center &amp; Sidebar on Both Sides</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Both Sidebar</li>
        </ol>
    </div>

</section><!-- #page-title end -->

@if (count($notifications))

    @foreach($notifications as $notification)
        <br>
        <div class="text-center">
            <h4 style="color: #4c110f" title="{{$notification->title}}">
                {{' ' .$notification->title}}
            </h4>
            <li>
                <i class="icon-calendar3"></i>

                <acronym title="{{$notification->updated_at}}">{{$notification->updated_at->isoFormat('Do MMMM YYYY', 'MMMM YYYY')}}</acronym>
            </li>
        </div>


        <hr>
    @endforeach
@else
    لا توجد اشعارات بعد
@endif
@endsection
