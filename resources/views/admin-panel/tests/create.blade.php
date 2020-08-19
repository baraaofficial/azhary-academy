@extends('admin-panel.layouts.app')

@section('title')
    الإختبارات

@stop
@section('content')

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Tables</span> - Elements</h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn btn-link btn-float text-default"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                        <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
                        <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
                    </div>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                        <a href="table_elements.html" class="breadcrumb-item">Tables</a>
                        <span class="breadcrumb-item active">Elements</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="breadcrumb justify-content-center">
                        <a href="#" class="breadcrumb-elements-item">
                            <i class="icon-comment-discussion mr-2"></i>
                            Support
                        </a>

                        <div class="breadcrumb-elements-item dropdown p-0">
                            <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-gear mr-2"></i>
                                Settings
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                                <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                                <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">
            {!! Form::open(['method' => 'POST', 'route' => ['tests.store']]) !!}
            @if(count($questions) > 0)
                <?php $i = 1; ?>
                @foreach($questions as $question)
                    @if ($i > 1) <hr /> @endif

            <!-- Table components -->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">السؤال  {{ $i }} </h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                        </div>
                    </div>
                </div>

                        <div class="card-body">
                    <strong><br />{!! nl2br($question->question_text) !!}</strong>
                    @if ($question->code_snippet != '')
                        <div class="code_snippet">{!! $question->code_snippet !!}</div>
                    @endif
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-lg">
                        <tbody>
                        <input type="hidden" name="questions[{{ $i }}]" value="{{ $question->id }}">
                        @foreach($question->options as $option)
                        <tr class="table-border-double table-active">
                            <th colspan="3"> - -</th>
                        </tr>

                        <tr>
                            <td>{{ $option->option }}</td>
                            <td>
                                <div class="form-check form-check-inline form-check-right">
                                    <label class="form-check-label">


                                        <input type="radio"  value="{{ $option->id }}" class="form-check-input" name="answers[{{ $question->id }}]">
                                    </label>

                                </div>

                            </td>
                        </tr>

                        @endforeach


                        </tbody>
                    </table>
                </div>

            </div>
                    <?php $i++; ?>
                @endforeach
            @endif
            <button type="submit" class="btn btn-success">أجب</button>

            {!! Form::close() !!}
            <!-- /table components -->
@stop

