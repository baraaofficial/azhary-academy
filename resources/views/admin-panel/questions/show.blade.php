@extends('admin-panel.layouts.app')
@section('title')
    شاهد السؤال{!!$question->question_text !!}

@endsection
@section('content')
    <!-- Content area -->
    <div class="content">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">لوحة التحكم</span> - سؤال - {{$question->question_text}}</h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="d-flex justify-content-center">
                        <a href="{{route('questions.create')}}" class="btn btn-link btn-float text-default"><i class="icon-import text-primary"></i><span>انشاء سؤال جديد</span></a>
                    </div>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="{{url('/dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> لوحة التحكم</a>
                        <a href="{{url('/dashboard/questions')}}" class="breadcrumb-item"><i class="icon-question7"></i> الأسئلة</a>
                        <span class="breadcrumb-item active">سؤال {{$question->question_text}}</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>
            </div>
        </div>
        <!-- /page header -->

        <!-- Basic table -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h1 class="card-title"> شاهد سؤال '{!!Illuminate\Support\Str::limit($question->question_text, $limit = 200, $end = '...' ) !!}'</h1>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>الاختيارات</th>
                        <th>الاختيار الصحيح</th>
                        <th>التاريخ</th>
                        <th class="text-center">أجراءات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($options as $option)
                    <tr>

                        <td>{!!$option->option!!} </td>
                        <td>{{ $option->correct == 1 ? 'صح' : 'خطأ' }}</td>
                        <td title="{{$option->updated_at}}">{{$option->updated_at->isoFormat('Do MMMM YYYY', 'MMMM YYYY')}}</td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu">
                                        <a href="{{route('questions_options.edit',$option->id)}}" class="dropdown-item"><i class="icon-pencil7"></i>تعديل</a>
                                        {!! Form::open(array(

                                             'style' => 'display: inline-block;',
                                             'method' => 'DELETE',
                                             'onsubmit' => "return confirm('".trans("quickadmin.are_you_sure")."');",
                                             'route' => ['questions_options.destroy', $option->id])) !!}

                                        <button class="dropdown-item"><i class="icon-x"></i> حذف</button>

                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </td>

                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /basic table -->



@stop
