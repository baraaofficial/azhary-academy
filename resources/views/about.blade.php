@extends('layouts.app')

@section('title')
    - حول الأكاديمية
@endsection
@section('content')
    @foreach($about as $row)
        <!-- Page Title
		============================================= -->
        <section id="page-title" class="page-title-parallax page-title-dark" style="padding: 250px 0; background-image: url('{{asset('uploads/aboutus/'.$row->image)}}'); background-size: cover; background-position: center center;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">

            <div class="container clearfix">
                {!! $row->title !!}
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">من نحن </li>
                </ol>
            </div>

        </section><!-- #page-title end -->

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <div class="col_one_third">

                        <div class="heading-block fancy-title nobottomborder title-bottom-border">
                            <h4>{{$row->title1}}.</h4>
                        </div>

                        <p>{{$row->content1}}</p>

                    </div>

                    <div class="col_one_third">

                        <div class="heading-block fancy-title nobottomborder title-bottom-border">
                            <h4>{{$row->title2}}.</h4>
                        </div>

                        <p>{{$row->content2}}</p>

                    </div>

                    <div class="col_one_third col_last">

                        <div class="heading-block fancy-title nobottomborder title-bottom-border">
                            <h4>{{$row->title3}}.</h4>
                        </div>

                        <p>{{$row->content3}}</p>

                    </div>

                </div>

                <div id="oc-team-list" class="owl-carousel team-carousel carousel-widget" data-margin="30" data-nav="false" data-items-md="1" data-items-xl="2">
                    @foreach($get_teacher as $teacher)
                        <div class="oc-item">
                            <div class="team team-list clearfix">
                                <div class="team-image">
                                    <img src="{{asset('uploads/teachers/'.$teacher->image)}}" alt="John Doe">
                                </div>
                                <div class="team-desc">
                                    <div class="team-title"><h4>{{$teacher->name}}</h4><span>{{$teacher->type}}</span></div>
                                    <div class="team-content">
                                        <p>{!! $teacher->description !!}</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>

        </section>
    @endforeach
@stop
