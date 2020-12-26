@extends('layouts.app')

@section('title')
    - 404
    @endsection
@section('content')
    <section id="slider" class="slider-element slider-parallax full-screen dark error404-wrap" style="background: url('{{asset('website/landing1.jpg')}}') center;">
        <div class="slider-parallax-inner">

            <div class="container-fluid vertical-middle center clearfix">

                <div class="error404">404</div>

                <div class="heading-block nobottomborder">
                    <h4>عفواً .! الصفحة التي كنت تبحث عنها, لا يمكن العثور عليها.</h4>
                    <span>جرب البحث أدناه للعثور على صفحات مطابقة:</span>
                </div>

                <form action="{{route('search')}}" method="get" class="divcenter nobottommargin">
                    <input type="text" name="keyword" class="form-control" value="" placeholder="اكتب &amp; ادخل هنا..">
                </form>

            </div>

        </div>
    </section>

@endsection
