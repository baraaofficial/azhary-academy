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
