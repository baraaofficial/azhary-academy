@extends('admin-panel.layouts.app')
@inject('users','App\Models\User')
@inject('courses','App\Models\Course')
@inject('lessons','App\Models\Lesson')

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
        <!-- Quick stats boxes -->
        <div class="row">
            <div class="col-lg-4">

                <!-- Members online -->
                <div class="card bg-teal-400">
                    <div class="card-body">
                        <div class="d-flex">
                            <h3 class="font-weight-semibold mb-0">{{$users->count()}}</h3>
                        </div>

                        <div>
                            عضو
                        </div>
                    </div>

                </div>
                <!-- /members online -->

            </div>

            <div class="col-lg-4">

                <!-- Current server load -->
                <div class="card bg-pink-400">
                    <div class="card-body">
                        <div class="d-flex">
                            <h3 class="font-weight-semibold mb-0">{{$courses->count()}}</h3>
                            <div class="list-icons ml-auto">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i></a>
                                    <div class="dropdown-menu">
                                        <a href="{{route('courses.index')}}" class="dropdown-item"><i class="icon-list-unordered"></i>الدورات</a>
                                        <a href="{{route('courses.create')}}" class="dropdown-item"><i class="icon-pen-plus"></i>إنشاء دورة جديدة</a>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            دورة فى الموقع
                        </div>
                    </div>

                </div>
                <!-- /current server load -->

            </div>

            <div class="col-lg-4">

                <!-- Today's revenue -->
                <div class="card bg-blue-400">
                    <div class="card-body">
                        <div class="d-flex">
                            <h3 class="font-weight-semibold mb-0">{{$lessons->count()}}</h3>
                            <div class="list-icons ml-auto">
                                <a class="list-icons-item" data-action="reload"></a>
                            </div>
                        </div>

                        <div>
                            درس
                        </div>
                    </div>

                </div>
                <!-- /today's revenue -->

            </div>
        </div>
        <!-- /quick stats boxes -->



@endsection
