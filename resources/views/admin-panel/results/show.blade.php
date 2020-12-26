@extends('admin-panel.layouts.app')

@section('content')
    <!-- Content area -->
    <div class="content">

        <!-- Basic tables title -->
        <div class="mb-3">
            <h6 class="mb-0 font-weight-semibold">
                نتيجتك
            </h6>
        </div>
        <!-- /basic tables title -->


        <!-- Basic table -->
        <div class="card">



            <div class="table-responsive">
                <table class="table">
                    <tbody>
                    @if(Auth::user()->isAdmin())
                     <tr>
                        <td>1</td>
                        <td>الأسم </td>
                        <td>{{ $test->user->name or '' }} ({{ $test->user->email or '' }})</td>
                    </tr>
                     @endif
                    <tr>
                        <td>2</td>
                        <td>النتيجه</td>
                        <td>{{ $test->result }}/10</td>
                    </tr>

                    </tbody>
                </table>

            </div>
            <?php $i = 1 ?>
            @foreach($results as $result)
                <table class="table table-bordered table-striped">
                    <tr class="test-option{{ $result->correct ? '-true' : '-false' }}">
                        <th style="width: 10%">السؤال #{{ $i }}</th>
                        <th>{{ $result->question->question_text or '' }}</th>
                    </tr>

                    <tr>
                        <td>الأختيارات</td>
                        <td>
                            <ul>
                                @foreach($result->question->options as $option)
                                    <li style="@if ($option->correct == 1) font-weight: bold; @endif
                                    @if ($result->option_id == $option->id) text-decoration: underline @endif">{{ $option->option }}
                                        @if ($option->correct == 1) <em>(إجابة صحيحة)</em> @endif
                                        @if ($result->option_id == $option->id) <em>(إجابتك)</em> @endif
                                    </li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>شرح الجواب</td>
                        <td>
                            {!! $result->question->answer_explanation  !!}
                            @if ($result->question->more_info_link != '')
                            @endif
                        </td>
                    </tr>
                </table>
                <?php $i++ ?>
            @endforeach
        </div>
        <!-- /basic table -->
@stop
