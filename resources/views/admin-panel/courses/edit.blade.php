@extends('admin-panel.layouts.app')
@section('title')
    | تعديل دورة {{$model->name}}
@endsection
@section('css')
    <script src="{{asset('admin-panel/global_assets/js/plugins/uploaders/plupload/plupload.full.min.js')}}"></script>

    <script src="{{asset('admin-panel/global_assets/js/plugins/uploaders/plupload/plupload.queue.min.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/demo_pages/uploader_plupload.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/plugins/uploaders/dropzone.min.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/demo_pages/form_layouts.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>

    <script src="{{asset('admin-panel/global_assets/js/plugins/editors/summernote/summernote.min.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>

    <script src="{{asset('admin-panel/global_assets/js/demo_pages/editor_summernote.js')}}"></script>

@endsection

@section('content')

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">لوحة التحكم</span> - تعديل دورة{{$model->name}}</h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>


            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="{{url('/dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> لوحة التحكم</a>
                        <a href="{{url('/dashboard/courses')}}" class="breadcrumb-item"><i class="icon-stack2 mr-2"></i>جميع الدورات</a>
                        <span class="breadcrumb-item active">تعديل دورة {{$model->name}}</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>


            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">

            @include('admin-panel.partials.validation-errors')
            {!! Form::model($model,[
                'action'  => ['Admin\CoursesController@update',$model->id],
                'method'  =>'put',
                'files'   =>   true,
                'enctype' =>'multipart/form-data'

            ]) !!}

            @include('admin-panel.courses.form')

            <button type="submit" class="btn btn-primary ml-3"> الدورة{{$model->name}} <i class="icon-paperplane ml-2"></i></button>

            {!! Form::close() !!}

        </div>
        <!-- /content area -->





@endsection
