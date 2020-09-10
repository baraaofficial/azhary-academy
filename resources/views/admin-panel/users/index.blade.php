@extends('admin-panel.layouts.app')

@section('title')
   جميع الأعضاء المسجلين
@endsection
@section('content')


    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">لوحة التحكم</span> - جميع الأعضاء</h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="d-flex justify-content-center">
                          <a href="{{route('users.create')}}" class="btn btn-link btn-float text-default"><i class="icon-import text-primary"></i> <span>إنشاء عضو جديد</span></a>
                    </div>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="{{url('/')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> لوحة التحكم</a>
                        <a href="{{route('users.index')}}" class="breadcrumb-item">الأعضاء</a>
                        <span class="breadcrumb-item active">جميع الأعضاء</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">

            <!-- Horizontal cards -->
            <div class="mb-3 pt-2">
                <h6 class="mb-0 font-weight-semibold">
                   جميع الأعضاء
                </h6>
                <span class="text-muted d-block">جميع الأعضاء المسجلين في الموقع</span>
            </div>
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
            <div class="row">
                @foreach($users as $user)
                <div class="col-xl-3 col-md-6">
                    <div class="card card-body">
                        <div class="media">
                            <div class="mr-3">
                                <a href="#">
                                    <img src="{{asset('admin-panel/global_assets/images/placeholders/placeholder.jpg')}}" class="rounded" width="38" height="38" alt="">
                                </a>
                            </div>

                            <div class="media-body">
                                <div class="font-weight-semibold">{{$user->name}}</div>
                                <span class="text-muted">{{$user->is_admin}}</span>
                            </div>

                            <div class="ml-3 align-self-center">
                                <div class="list-icons">
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                        <div class="dropdown-menu">
                                            <a href="{{route('users.edit',$user->id)}}" class="dropdown-item"><i class="icon-pencil7"></i>تعديل</a>
                                            {!! Form::open(array(

                                                     'method' => 'DELETE',
                                                     'onsubmit' => "return confirm('".trans("هل انت متأكد من حذف هذا العضو ؟")."');",
                                                     'route' => ['users.destroy', $user->id])) !!}

                                            <button class="dropdown-item"><i class="icon-x"></i> حذف</button>

                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>


    </div>
    <!-- /main content -->
@endsection
