@extends('admin-panel.layouts.app')
@section('title')
    | {{$course->name}}
@endsection
@section('content')

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">لوحة التحكم</span> - دورة - {{$course->name}}</h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="d-flex justify-content-center">
                        <a href="{{route('courses.create')}}" class="btn btn-link btn-float text-default"><i class="icon-import text-primary"></i><span>انشاء دورة جديدة</span></a>
                        <a href="{{route('lessons.create')}}" class="btn btn-link btn-float text-default"><i class="icon-import text-primary"></i><span>انشاء درس جديدة</span></a>
                    </div>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="{{url('/dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> لوحة التحكم</a>
                        <a href="{{url('/dashboard/courses')}}" class="breadcrumb-item"><i class="icon-book-play"></i> الدورات</a>
                        <span class="breadcrumb-item active">دورة {{$course->name}}</span>
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
        @if(count($lessons))


            <!-- Basic responsive configuration -->
                <div class="card">


                    <table class="table datatable-responsive">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>اسم الدرس</th>
                            <th>الوصف</th>
                            <th>التاريخ</th>
                            <th class="text-center">أجراءات</th>
                        </tr>
                        </thead>
                        @foreach($lessons as $row)
                            <tbody>
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$row->title}}</td>
                                <td>{!!  \Illuminate\Support\Str::limit($row->description, $limit = 40, $end = '...' ) !!}</td>
                                <td title="{{$row->updated_at}}">{{$row->updated_at->isoFormat('Do MMMM YYYY', 'MMMM YYYY')}}</td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>

                                            <div class="dropdown-menu">
                                                <a href="{{route('lessons.edit',$row->id)}}" class="dropdown-item"><i class="icon-pencil7"></i>تعديل</a>
                                                {!! Form::open(array(

                                                     'style' => 'display: inline-block;',
                                                     'method' => 'DELETE',
                                                     'onsubmit' => "return confirm('".trans("هل أنت متأكد من حذف الدرس ؟")."');",
                                                     'route' => ['lessons.destroy', $row->id]))

                                                !!}
                                                <button class="dropdown-item"><i class="icon-x"></i> حذف</button>

                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            </tbody>
                        @endforeach
                    </table>
                </div>
                <!-- /basic responsive configuration -->
            @else
                <div class="alert alert-danger alert-styled-left alert-dismissible">
                    هذا النموذج فارغ، عليك بإنشاء دروس لدورة " {{$course->name}} " أولاً
                </div>
            @endif



        </div>
        <!-- /content area -->

@endsection
