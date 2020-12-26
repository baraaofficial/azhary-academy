@extends('admin-panel.layouts.app')
@inject('users','App\Models\User')
@inject('courses','App\Models\Course')
@inject('lessons','App\Models\Lesson')
@inject('comments','App\Models\Comment')
@inject('carts','App\Models\Cart')
@inject('question','App\Models\Question')
@inject('subject','App\Models\Subject')
@inject('class','App\Models\Calss')
@inject('teachers','App\Models\Teacher')
@inject('category','App\Models\Categories')

@section('css')
    <script src="{{asset('admin-panel/global_assets/js/demo_charts/pages/dashboard/light/streamgraph.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/demo_charts/pages/dashboard/light/sparklines.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/demo_charts/pages/dashboard/light/lines.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/demo_charts/pages/dashboard/light/areas.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/demo_charts/pages/dashboard/light/donuts.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/demo_charts/pages/dashboard/light/bars.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/demo_charts/pages/dashboard/light/progress.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/demo_charts/pages/dashboard/light/heatmaps.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/demo_charts/pages/dashboard/light/pies.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/demo_charts/pages/dashboard/light/bullets.js')}}"></script>
    <!-- /theme JS files -->

    <!-- Theme JS files -->
    <script src="{{asset('admin-panel/global_assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/plugins/ui/moment/moment.min.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/plugins/pickers/daterangepicker.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/demo_pages/dashboard.js')}}"></script>

@endsection
@section('content')
<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">الصفحة الرئيسية</span> - لوحة التحكم</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{url('/')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> الصفحة الرئيسية</a>
                    <span class="breadcrumb-item active">لوحة التحكم</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>


        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">
        <!-- Simple statistics -->
        <div class="mb-3">
            <h6 class="mb-0 font-weight-semibold">
                احصائيات الموقع
            </h6>
            <span class="text-muted d-block">عداد لمعرفة كل ما في الموقع من أحداث</span>
        </div>

            <div class="row">
                <div class="col-sm-6 col-xl-3">
                    <div class="card card-body bg-blue-400 has-bg-image">
                        <div class="media">
                            <div class="media-body">
                                 <h3 class="mb-0">{{$comments->count()}}</h3>
                                <span class="text-uppercase font-size-xs">إحصائيات التعليقات</span>
                            </div>

                            <div class="ml-3 align-self-center">
                                <i class="icon-bubbles4 icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card card-body bg-danger-400 has-bg-image">
                        <div class="media">
                            <div class="media-body">
                                <h3 class="mb-0">{{$carts->count()}}</h3>
                                <span class="text-uppercase font-size-xs">إحصائيات الفواتير</span>
                            </div>


                            <div class="ml-3 align-self-center">
                                <i class="icon-bag icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card card-body bg-success-400 has-bg-image">
                        <div class="media">
                            <div class="mr-3 align-self-center">
                                <i class="icon-book-play icon-3x opacity-75"></i>
                            </div>

                            <div class="media-body text-right">
                                <h3 class="mb-0">{{$courses->count()}}</h3>
                                <span class="text-uppercase font-size-xs">إحصائيات الدورات</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card card-body bg-indigo-400 has-bg-image">
                        <div class="media">
                            <div class="mr-3 align-self-center">
                                <i class="icon-enter6 icon-3x opacity-75"></i>
                            </div>

                            <div class="media-body text-right">
                                @foreach($visitors as $visitor)
                                <h3 class="mb-0">{{$visitor->visitor}}</h3>
                                @endforeach
                                <span class="text-uppercase font-size-xs">إحصائيات زيارة الموقع</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-xl-3">
                    <div class="card card-body">
                        <div class="media">
                            <div class="mr-3 align-self-center">
                                <i class="icon-presentation icon-3x text-success-400"></i>
                            </div>

                            <div class="media-body text-right">
                                <h3 class="font-weight-semibold mb-0">{{$lessons->count()}}</h3>
                                <span class="text-uppercase font-size-sm text-muted">إحصائيات الدروس</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card card-body">
                        <div class="media">
                            <div class="mr-3 align-self-center">
                                <i class="icon-question7 icon-3x text-indigo-400"></i>
                            </div>

                            <div class="media-body text-right">
                                <h3 class="font-weight-semibold mb-0">{{$question->count()}}</h3>
                                <span class="text-uppercase font-size-sm text-muted">إحصائيات الأسئلة</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card card-body">
                        <div class="media">
                            <div class="media-body">
                                <h3 class="font-weight-semibold mb-0">{{$get_message->count()}}</h3>
                                <span class="text-uppercase font-size-sm text-muted">إحصائيات الرسائل</span>
                            </div>

                            <div class="ml-3 align-self-center">
                                <i class="icon-paperplane icon-3x text-blue-400"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card card-body">
                        <div class="media">
                            <div class="media-body">
                                <h3 class="font-weight-semibold mb-0">{{$users->count()}}</h3>
                                <span class="text-uppercase font-size-sm text-muted">إحصائيات الطلاب</span>
                            </div>

                            <div class="ml-3 align-self-center">
                                <i class="icon-users icon-3x text-danger-400"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-sm-6 col-xl-3">
                <div class="card card-body bg-blue-400 has-bg-image">
                    <div class="media">
                        <div class="media-body">
                            <h3 class="mb-0">{{$subject->count()}}</h3>
                            <span class="text-uppercase font-size-xs">إحصائيات المواد</span>
                        </div>

                        <div class="ml-3 align-self-center">
                            <i class="icon-books icon-3x opacity-75"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="card card-body bg-danger-400 has-bg-image">
                    <div class="media">
                        <div class="media-body">
                            <h3 class="mb-0">{{$teachers->count()}}</h3>
                            <span class="text-uppercase font-size-xs">إحصائيات الصوف الدراسية</span>
                        </div>

                        <div class="ml-3 align-self-center">
                            <i class="icon-graduation icon-3x opacity-75"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="card card-body bg-success-400 has-bg-image">
                    <div class="media">
                        <div class="mr-3 align-self-center">
                            <i class="icon-user icon-3x opacity-75"></i>
                        </div>

                        <div class="media-body text-right">
                            <h3 class="mb-0">{{$teachers->count()}}</h3>
                            <span class="text-uppercase font-size-xs">إحصائيات السادة المحاضرين</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="card card-body bg-indigo-400 has-bg-image">
                    <div class="media">
                        <div class="mr-3 align-self-center">
                            <i class="icon-indent-decrease2 icon-3x opacity-75"></i>
                        </div>

                        <div class="media-body text-right">
                            <h3 class="mb-0">{{$category->count()}}</h3>

                            <span class="text-uppercase font-size-xs">إحصائيات الأقسام</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>

        <!-- /simple statistics -->
@endsection
