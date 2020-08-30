@extends('admin-panel.layouts.app')

@section('title')
جميع تعريفات المدرسين
@endsection
@section('css')

    <script src="{{asset('admin-panel/global_assets/js/main/jquery.min.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/plugins/loaders/blockui.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{asset('admin-panel/global_assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>

    <script src="{{asset('admin-panel/global_assets/js/demo_pages/datatables_basic.js')}}"></script>


@endsection
@section('content')

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">لوحة التحكم</span> - هيئة التدريس</h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="d-flex justify-content-center">
                        <a href="{{route('teachers.create')}}" class="btn btn-link btn-float text-default"><i class="icon-import text-primary"></i><span>إضافة مدرس جديد</span></a>
                    </div>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="{{url('/dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> لوحة التحكم</a>
                        <span class="breadcrumb-item active">هيئة التدريس</span>
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
        @if(count($teachers))

            <!-- Basic responsive configuration -->
            <div class="card">


                <table class="table datatable-responsive">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>اسم المدرس</th>
                        <th>الوصف</th>
                        <th>البريد الألكتروني</th>
                        <th>رقم الموبايل</th>
                        <th>المدرسة</th>
                        <th>التاريخ</th>
                        <th class="text-center">أجراءات</th>
                    </tr>
                    </thead>
                    @foreach($teachers as $teacher)
                        <tbody>
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$teacher->name}}</td>
                            <td>{!!  \Illuminate\Support\Str::limit($teacher->description, $limit = 25, $end = '...' ) !!}</td>
                            <td>{{$teacher->email}}</td>
                            <td>{{$teacher->phone}}</td>
                            <td>{{$teacher->school}}</td>
                            <td>{{$teacher->updated_at->isoFormat('Do MMMM YYYY', 'MMMM YYYY')}}</td>
                            <td class="text-center">
                                <div class="list-icons">
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>

                                        <div class="dropdown-menu">
                                            <a href="{{route('teachers.edit',$teacher->id)}}" class="dropdown-item"><i class="icon-pencil7"></i>تعديل</a>
                                            {!! Form::open(array(

                                                     'style' => 'display: inline-block;',
                                                     'method' => 'DELETE',
                                                     'onsubmit' => "return confirm('".trans("هل انت متأكد من حذف المدرس ؟")."');",
                                                     'route' => ['teachers.destroy', $teacher->id])) !!}

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
            <div class="datatable-footer">
                <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">عرض 1 to 10 of 15 إدخالات</div>
                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                    <a class="paginate_button previous disabled" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" id="DataTables_Table_0_previous">→</a>
                    <span>
                    <a class="paginate_button current" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0">1</a>
                    <a class="paginate_button " aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0">2</a>
                </span>
                    <a class="paginate_button next" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" id="DataTables_Table_0_next">←</a>
                </div>
            </div>
            <!-- /basic responsive configuration -->
            @else
                <div class="alert alert-danger alert-styled-left alert-dismissible">
                    هذا النموذج فارغ عليك بإنشاء تعريفات المدرسين أولاً
                </div>
            @endif


        </div>
        <!-- /content area -->

@endsection
