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
