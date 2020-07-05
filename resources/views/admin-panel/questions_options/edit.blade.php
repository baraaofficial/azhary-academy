@extends('admin-panel.layouts.app')

@section('css')

    <script src="{{asset('admin-panel/global_assets/js/demo_pages/form_layouts.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>

@endsection

@section('title')
    تعديل السؤال{!! $questions_option->option !!}

@endsection

@section('content')

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">لوحة التحكم</span> -  تعديل سؤال {!! $questions_option->option!!}</h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>


            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="{{url('/dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> لوحة التحكم</a>
                        <a href="{{url('/dashboard/questions_options')}}" class="breadcrumb-item"><i class="icon-stack2 mr-2"></i>جميع الأسئلة الدراسية</a>
                        <span class="breadcrumb-item active">تعديل اختيار {!! $questions_option->option !!}</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>


            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">

            @include('admin-panel.partials.validation-errors')

            {!! Form::model($questions_option,[
                'action'  => ['Admin\QuestionsOptionsController@update',$questions_option->id],
                'method'  =>  'put',
                'files'   =>   true,
                'enctype' =>  'multipart/form-data'

            ]) !!}

            @include('admin-panel.questions_options.form')

            <button type="submit" class="btn btn-primary ml-3">تعديل سؤال {{$questions_option->question_text}} <i class="icon-paperplane ml-2"></i></button>

            {!! Form::close() !!}

        </div>
        <!-- /content area -->


@endsection
