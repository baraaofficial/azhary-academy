@extends('admin-panel.layouts.app')
@section('title')
    شاهد السؤال{!!Illuminate\Support\Str::limit($question->question_text, $limit = 6, $end = '...' ) !!}

@endsection
@section('content')
    <!-- Content area -->
    <div class="content">


        <!-- Basic table -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h1 class="card-title"> شاهد سؤال</h1>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
            <h2> <b> {!!Illuminate\Support\Str::limit($question->question_text, $limit = 200, $end = '...' ) !!} </b></h2>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>السؤال</th>
                        <th>عنوان الدرس</th>
                    </tr>
                    </thead>
                    <tbody>

                        <tr>
                        <td> {!!Illuminate\Support\Str::limit($question->question_text, $limit = 5, $end = '...' ) !!} </td>
                        <td>{{ optional($question->lesson)->name or '' }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /basic table -->



@stop
