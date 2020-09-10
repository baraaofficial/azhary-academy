@extends('admin-panel.layouts.app')
@section('title')
    شاهد اختيار {!! $questions_option->option !!}

@endsection
@section('content')
    <!-- Content area -->
    <div class="content">


        <!-- Basic table -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h1 class="card-title"> شاهد اختيار</h1>
            </div>

            <div class="card-body">
                <h2> <b> {!! $questions_option->option !!} </b></h2>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>السؤال</th>
                        <th>الاختيار</th>
                        <th>الصحيح</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td> {!!Illuminate\Support\Str::limit($questions_option->question_text, $limit = 5, $end = '...' ) !!} </td>
                        <td>{{ $questions_option->option }}</td>
                        <td>{{ $questions_option->correct == 1 ? 'Yes' : 'No' }}</td></tr>

                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /basic table -->



@stop
