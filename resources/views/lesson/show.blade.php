@extends('layouts.app')

@section('content')
<div class="table-responsive">
    <table class="table">
        <tbody>

        <tr class="text-center">
            <td>النتيجه</td>
            <td>{{ $test->result }} / 10</td>
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
                            @if ($option->correct == 1) <em style="color: rebeccapurple">(إجابة صحيحة)</em> @endif
                            @if ($result->option_id == $option->id) <em style="color: #0aa7ef">(إجابتك)</em> @endif
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

@stop
