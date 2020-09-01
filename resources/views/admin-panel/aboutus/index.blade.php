@extends('admin-panel.layouts.app')

@section('title')
    جميع المواد الدراسية
@endsection
@section('content')

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">لوحة التحكم</span> - حول الأكاديمية</h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="d-flex justify-content-center">
                        <a href="{{route('about.create')}}" class="btn btn-link btn-float text-default"><i class="icon-import text-primary"></i><span>انشاء حول الأكاديمية</span></a>
                    </div>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="{{url('/dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> لوحة التحكم</a>
                        <span class="breadcrumb-item active">حول الأكاديمية</span>
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

            @if(count($about_us))
            <!-- Basic responsive configuration -->
            <div class="card">


                <table class="table datatable-responsive">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>العنوان الرئيسي</th>
                        <th>العنوان الفرعي الأول</th>
                        <th>العنوان الفرعي الثاني</th>
                        <th>العنوان الفرعي الثالث</th>
                        <th>التاريخ</th>
                        <th class="text-center">أجراءات</th>
                    </tr>
                    </thead>
                    @foreach($about_us as $row)
                    <tbody>
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$row->title}}</td>
                        <td>{{$row->title1}}</td>
                        <td>{{$row->title2}}</td>
                        <td>{{$row->title3}}</td>
                        <td>{{$row->updated_at->isoFormat('Do MMMM YYYY', 'MMMM YYYY')}}</td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu">
                                        <a href="{{route('about.edit',$row->id)}}" class="dropdown-item"><i class="icon-pencil7"></i>تعديل</a>
                                        {!! Form::open([
                                             'action' => ['Admin\AboutUsController@destroy',$row->id],

                                             'method' => 'delete'

                                        ]) !!}

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
                        هذا النموذج فارغ عليك بإنشاء حول الأكاديمية أولاً
                    </div>
                @endif


        </div>
        <!-- /content area -->





@endsection
