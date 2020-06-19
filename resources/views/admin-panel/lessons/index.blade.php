@extends('admin-panel.layouts.app')

@section('title')
جميع الدروس الدراسية
@endsection
@section('css')
    <!-- Theme JS files -->
    <script src="{{asset('admin-panel/global_assets/js/plugins/media/fancybox.min.js')}}"></script>

    <script src="{{asset('admin-panel/global_assets/js/demo_pages/content_cards_content.js')}}"></script>
@endsection
@section('content')

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">لوحة التحكم</span> - الدروس الدراسية</h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="d-flex justify-content-center">
                        <a href="{{route('tags.create')}}" class="btn btn-link btn-float text-default"><i class="icon-import text-primary"></i><span>انشاء درس جديد</span></a>
                    </div>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="{{url('/dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> لوحة التحكم</a>
                        <span class="breadcrumb-item active">الدروس الدراسيه</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>


            </div>
        </div>
        <!-- /page header -->
        @if(session('message') ?? '' )
            <div class="alert alert-success alert-styled-left alert-arrow-left alert-dismissible">
                <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                {{session('message') ?? ''}}
            </div>
        @elseif(session('delete') ?? '' )

                <div class="alert alert-danger alert-styled-left alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                    {{session('delete') ?? ''}}
                </div>
        @endif


    <!-- Content area -->
        <div class="content">
            <!-- Card image placement -->
            <div class="mb-3">
                <h6 class="mb-0 font-weight-semibold">
                    جميع الدورات
                </h6>
                <span class="text-muted d-block">لكل دورة داخلها درسوها الخاصها بها </span>
            </div>

            <div class="row">
                @foreach($corses as $course)

                <div class="col-md-4">

                    <!-- Top placement -->
                    <div class="card">
                        <div class="card-img-actions">
                            <img class="card-img-top img-fluid" src="{{ Storage::URL($course->image)  }}" alt="">
                            <div class="card-img-actions-overlay card-img-top">
                                <a href="{{ Storage::URL($course->image)  }}" class="btn btn-outline bg-white text-white border-white border-2" data-popup="lightbox">
                                    عرض

                                <a href="{{route('lessons.show',$course->id)}}" class="btn btn-outline bg-white text-white border-white border-2 ml-2">
                                    تفاصيل
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">{{$course->name}}</h5>
                            <p class="card-text">{!! \Illuminate\Support\Str::limit($course->description , $limit = 60, $end = '...' )!!}</p>
                        </div>

                        <div class="card-footer bg-transparent d-flex justify-content-between">
                            <span class="text-muted">آخر تحديث {{$course->updated_at->format('m-d')}}</span>
                            <span>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-half font-size-base text-warning-300"></i>
									<span class="text-muted ml-2">(12)</span>
								</span>
                        </div>
                    </div>
                    <!-- /top placement -->

                </div>
                @endforeach




            </div>
            <!-- /card image placement -->

@endsection
