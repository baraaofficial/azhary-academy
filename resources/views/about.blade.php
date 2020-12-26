@extends('layouts.app')

@section('title')
    - حول الأكاديمية
@endsection

@section('css')
    <meta name="description" content="حول الموقع " />
    <meta name="keywords" content=" من نحن " />
@endsection
@section('content')
    @foreach($about as $row)

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">
                    <div class="col_full">

                        <div class="heading-block center nobottomborder">
                            {!! $row->title !!}
                        </div>

                        <div class="fslider" data-pagi="false" data-animation="fade">
                            <div class="flexslider">
                                <div class="slider-wrap">
                                    <div>
                                        <a href="#">
                                            <img src="{{asset($row->image)}}" alt="About Image">
                                        </a>
                                    </div>
                                </div>
                        </div>
                            </div>
                        </div>

                    </div>
                    <div class="col_one_third">

                        <div class="heading-block fancy-title nobottomborder title-bottom-border">
                            <h4 title="{{$row->title1}}">{{$row->title1}}</h4>
                        </div>

                        <p title="{{$row->content1}}">{{$row->content1}}</p>

                    </div>

                    <div class="col_one_third">

                        <div class="heading-block fancy-title nobottomborder title-bottom-border">
                            <h4 title="{{$row->title2}}">{{$row->title2}}</h4>
                        </div>

                        <p title="{{$row->content2}}">{{$row->content2}}</p>

                    </div>

                    <div class="col_one_third col_last">

                        <div class="heading-block fancy-title nobottomborder title-bottom-border">
                            <h4 title="{{$row->title3}}">{{$row->title3}}</h4>
                        </div>

                        <p title="{{$row->content3}}">{{$row->content3}}</p>

                    </div>

                </div>

                <div id="oc-team-list" title="المدرسين" class="owl-carousel team-carousel carousel-widget" data-margin="30" data-nav="false" data-items-md="1" data-items-xl="2">
                    @foreach($get_teacher as $teacher)
                        <div class="oc-item">
                            <div class="team team-list clearfix">
                                <div class="team-image">
                                    <i><img src="{{asset($teacher->image != null ? $teacher->image : 'uploads/teachers/teacher.jpg')}}" class="noborder nobg shadow-sm" style="z-index: 2;"></i>
                                </div>
                                <div class="team-desc">
                                    <div class="team-title" ><h4 title="{{$teacher->name}}">{{$teacher->name}}</h4><span title="{{$teacher->type}}">{{$teacher->type}}</span></div>
                                    <div class="team-content">
                                        <p title="{!! $teacher->description !!}">{!! $teacher->description !!}</p>
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
