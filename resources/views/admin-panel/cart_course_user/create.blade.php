@extends('admin-panel.layouts.app')
@inject('model','App\Models\CartCourse')
@section('title')
- انشئ دفع جديد
@endsection


@section('content')

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">لوحة التحكم</span> - انشاء دفع يدوي</h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
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

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="{{url('/dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> لوحة التحكم</a>
                        <span class="breadcrumb-item active">انشاء الدفع اليدوي </span>
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
                'action'  => 'Admin\CartCourseUser@store',
                'method'  => 'post',
                'files'   =>   true,
                'enctype' =>'multipart/form-data'

            ]) !!}

            <div class="form-group mb-6">
                <label for="simpleinput">الدروات الدراسية :</label>
                @inject('course','App\Models\Course')

                {!! Form::select('course_id',$course->pluck('name','id'),null,[
                    'placeholder' => 'اختر',
                    'class' => 'form-control form-control-select2'

                ]) !!}
            </div>

            <div class="form-group mb-6">
                <label for="simpleinput">الأعضاء :</label>
                @inject('user','App\Models\User')

                {!! Form::select('user_id',$user->pluck('name','id'),null,[
                    'placeholder' => 'اختر',
                    'class' => 'form-control form-control-select2'

                ]) !!}
            </div>



            <button type="submit" class="btn btn-primary ml-3">انشاء <i class="icon-paperplane ml-2"></i></button>

            {!! Form::close() !!}

        </div>
        <!-- /content area -->





@endsection
