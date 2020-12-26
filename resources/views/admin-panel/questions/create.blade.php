@extends('admin-panel.layouts.app')
@inject('model','App\Models\Lesson')
@section('title')
    انشاء درس جديد

@endsection

@section('css')
    {{--start Uploade Files --}}
    <script src="{{asset('admin-panel/global_assets/js/demo_pages/uploader_bootstrap.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/plugins/uploaders/fileinput/fileinput.min.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/plugins/uploaders/fileinput/plugins/purify.min.js')}}"></script>
    {{--end Uploade Files --}}

    <script src="{{asset('admin-panel/global_assets/js/demo_pages/form_layouts.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>


    <script src="{{asset('admin-panel/global_assets/js/plugins/editors/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/demo_pages/editor_ckeditor_default.js')}}"></script>

@endsection

@section('content')

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">لوحة التحكم</span> - الأسئلة الدراسية</h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>


            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="{{url('/dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> لوحة التحكم</a>
                        <a href="{{url('/dashboard/questions')}}" class="breadcrumb-item"><i class="icon-stack2 mr-2"></i>جميع الأسئلة الدراسية</a>
                        <span class="breadcrumb-item active">انشاء سؤال جديد</span>
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
                'action'  => 'Admin\QuestionsController@store',
                'method'  => 'post',
                'files'   =>  true,
                'enctype' => 'multipart/form-data'

            ]) !!}

            <div class="panel-body">
                <div  class="form-group mb-6">
                    <div class="col-xs-12 form-group">
                        {!! Form::label('lesson_id', 'عناوين الدروس *', ['class' => 'control-label']) !!}
                        {!! Form::select('lesson_id', $lesson, old('lesson_id'), ['class' => 'form-control']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('lesson_id'))
                            <p class="help-block">
                                {{ $errors->first('lesson_id') }}
                            </p>
                        @endif
                    </div>
                </div>

                <div  class="form-group mb-6">
                    <div class="col-xs-12 form-group">
                        {!! Form::label('question_text', 'السؤال *', ['class' => 'control-label']) !!}
                        {!! Form::textarea('question_text', old('question_text'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('question_text'))
                            <p class="help-block">
                                {{ $errors->first('question_text') }}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="form-group mb-6">
                    <div class="col-xs-12 form-group">
                        {!! Form::label('option1', 'الأختيار #1', ['class' => 'control-label']) !!}
                        {!! Form::text('option1', old('option1'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('option1'))
                            <p class="help-block">
                                {{ $errors->first('option1') }}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="form-group mb-6">
                    <div class="col-xs-12 form-group">
                        {!! Form::label('option2', 'الأختيار #2', ['class' => 'control-label']) !!}
                        {!! Form::text('option2', old('option2'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('option2'))
                            <p class="help-block">
                                {{ $errors->first('option2') }}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="form-group mb-6">
                    <div class="col-xs-12 form-group">
                        {!! Form::label('option3', 'الأختيار #3', ['class' => 'control-label']) !!}
                        {!! Form::text('option3', old('option3'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('option3'))
                            <p class="help-block">
                                {{ $errors->first('option3') }}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="form-group mb-6">
                    <div class="col-xs-12 form-group">
                        {!! Form::label('option4', 'الأختيار #4', ['class' => 'control-label']) !!}
                        {!! Form::text('option4', old('option4'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('option4'))
                            <p class="help-block">
                                {{ $errors->first('option4') }}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="form-group mb-6">
                    <div class="col-xs-12 form-group">
                        {!! Form::label('option5', 'الأختيار #5', ['class' => 'control-label']) !!}
                        {!! Form::text('option5', old('option5'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('option5'))
                            <p class="help-block">
                                {{ $errors->first('option5') }}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12 form-group">
                        {!! Form::label('correct', 'الصحيح', ['class' => 'control-label']) !!}
                        {!! Form::select('correct', $correct_options, old('correct'), ['class' => 'form-control']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('correct'))
                            <p class="help-block">
                                {{ $errors->first('correct') }}
                            </p>
                        @endif
                    </div>
                </div>

                <div  class="form-group mb-6">
                    <div class="col-xs-12 form-group">
                        {!! Form::label('answer_explanation', 'شرح الجواب *', ['class' => 'control-label']) !!}
                        {!! Form::textarea('answer_explanation', old('answer_explanation'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('answer_explanation'))
                            <p class="help-block">
                                {{ $errors->first('answer_explanation') }}
                            </p>
                        @endif
                    </div>
                </div>
            </div>


            <button type="submit" class="btn btn-primary ml-3">انشاء سؤال <i class="icon-paperplane ml-2"></i></button>

            {!! Form::close() !!}

        </div>
        <!-- /content area -->


@endsection
