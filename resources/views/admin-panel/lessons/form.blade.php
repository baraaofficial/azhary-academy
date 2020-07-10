<div class="form-group mb-6">
    <label for="simpleinput">عنوان الدرس :</label>
    {!! Form::text('title',null,[

        'class' => 'form-control'

    ]) !!}
</div>

<div class="form-group mb-6">
    <label for="simpleinput">رابط الفيديو  :</label>
    {!! Form::text('video',null,[

        'class' => 'form-control'

    ]) !!}
</div>


<!-- CKEditor default -->
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">وصف الدرس</h5>
    </div>
    <div class="card-body">
            <div class="mb-3">
                <textarea name="description" id="editor-full" rows="4" cols="4">

                </textarea>
            </div>
    </div>
</div>
<!-- /CKEditor default -->

<div class="form-group mb-6">
    <label for="simpleinput">الدروات الدراسية :</label>
    @inject('class','App\Models\Course')

    {!! Form::select('course_id',$class->pluck('name','id'),null,[
        'placeholder' => 'اختر',
        'class' => 'form-control form-control-select2'

    ]) !!}
</div>


<div class="form-group">
    <label>اختار الدفع:</label>
    <select name="isFree" data-placeholder="اختار الدفع" class="form-control form-control-select2" data-fouc>
        <option value="0">مدفوع</option>
        <optgroup>
            <option value="0">مدفوع</option>
            <option value="1">مجاني</option>
        </optgroup>

    </select>
</div>


<!-- Bootstrap file input -->
<div class="card">
    <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-2 col-form-label font-weight-semibold">الصورة:</label>
                <div class="col-lg-10">
                    <input type="file" name="image" class="file-input form-control" data-show-caption="false" data-show-upload="false" data-fouc>
                </div>
            </div>
    </div>
</div>
<!-- /bootstrap file input -->

<!-- Bootstrap file input -->
<div class="card">
    <div class="card-body">
        <div class="form-group row">
            <label class="col-lg-2 col-form-label font-weight-semibold">PDF:</label>
            <div class="col-lg-10">
                <input type="file" name="pdf" class="file-input form-control" data-show-caption="false" data-show-upload="false" data-fouc>
            </div>
        </div>
    </div>
</div>
<!-- /bootstrap file input -->

<!-- Bootstrap file input -->
<div class="card">
    <div class="card-body">
        <div class="form-group row">
            <label class="col-lg-2 col-form-label font-weight-semibold">MB3:</label>
            <div class="col-lg-10">
                <input type="file" name="mb3" class="file-input form-control" data-show-caption="false" data-show-upload="false" data-fouc>
            </div>
        </div>
    </div>
</div>
<!-- /bootstrap file input -->

<div class="form-group mb-6">
    <label for="simpleinput">السؤال التجريبي رقم 1:</label>
    {!! Form::text('experimental',null,[

        'class' => 'form-control'

    ]) !!}
</div>


<div class="form-group mb-6">
    <label for="simpleinput">الأجابة رقم 1:</label>
    {!! Form::textarea('answer',null,[

        'class' => 'form-control'

    ]) !!}
</div>





<div class="form-group mb-6">
    <label for="simpleinput">السؤال التجريبي رقم 2:</label>
    {!! Form::text('experimental2',null,[

        'class' => 'form-control'

    ]) !!}
</div>


<div class="form-group mb-6">
    <label for="simpleinput">الأجابة رقم 2:</label>
    {!! Form::textarea('answer2',null,[

        'class' => 'form-control'

    ]) !!}
</div>




<div class="form-group mb-6">
    <label for="simpleinput">السؤال التجريبي رقم 3:</label>
    {!! Form::text('experimental3',null,[

        'class' => 'form-control'

    ]) !!}
</div>


<div class="form-group mb-6">
    <label for="simpleinput">الأجابة رقم 3:</label>
    {!! Form::textarea('answer3',null,[

        'class' => 'form-control'

    ]) !!}
</div>




<div class="form-group mb-6">
    <label for="simpleinput">السؤال التجريبي رقم 4:</label>
    {!! Form::text('experimental4',null,[

        'class' => 'form-control'

    ]) !!}
</div>


<div class="form-group mb-6">
    <label for="simpleinput">الأجابة رقم 4:</label>
    {!! Form::textarea('answer4',null,[

        'class' => 'form-control'

    ]) !!}
</div>





<div class="form-group mb-6">
    <label for="simpleinput">السؤال التجريبي رقم 5:</label>
    {!! Form::text('experimental5',null,[

        'class' => 'form-control'

    ]) !!}
</div>


<div class="form-group mb-6">
    <label for="simpleinput">الأجابة رقم 5:</label>
    {!! Form::textarea('answer5',null,[

        'class' => 'form-control'

    ]) !!}
</div>




<div class="form-group mb-6">
    <label for="simpleinput">السؤال التجريبي رقم 6:</label>
    {!! Form::text('experimental6',null,[

        'class' => 'form-control'

    ]) !!}
</div>


<div class="form-group mb-6">
    <label for="simpleinput">الأجابة رقم 6:</label>
    {!! Form::textarea('answer6',null,[

        'class' => 'form-control'

    ]) !!}
</div>





<div class="form-group mb-6">
    <label for="simpleinput">السؤال التجريبي رقم 7:</label>
    {!! Form::text('experimental7',null,[

        'class' => 'form-control'

    ]) !!}
</div>


<div class="form-group mb-6">
    <label for="simpleinput">الأجابة رقم 7:</label>
    {!! Form::textarea('answer7',null,[

        'class' => 'form-control'

    ]) !!}
</div>



<div class="form-group mb-6">
    <label for="simpleinput">السؤال التجريبي رقم 8:</label>
    {!! Form::text('experimental8',null,[

        'class' => 'form-control'

    ]) !!}
</div>


<div class="form-group mb-6">
    <label for="simpleinput">الأجابة رقم 8:</label>
    {!! Form::textarea('answer8',null,[

        'class' => 'form-control'

    ]) !!}
</div>


<div class="form-group mb-6">
    <label for="simpleinput">السؤال التجريبي رقم 9:</label>
    {!! Form::text('experimental9',null,[

        'class' => 'form-control'

    ]) !!}
</div>


<div class="form-group mb-6">
    <label for="simpleinput">الأجابة رقم 9:</label>
    {!! Form::textarea('answer9',null,[

        'class' => 'form-control'

    ]) !!}
</div>


<div class="form-group mb-6">
    <label for="simpleinput">السؤال التجريبي رقم 10:</label>
    {!! Form::text('experimental10',null,[

        'class' => 'form-control'

    ]) !!}
</div>


<div class="form-group mb-6">
    <label for="simpleinput">الأجابة رقم 10:</label>
    {!! Form::textarea('answer10',null,[

        'class' => 'form-control'

    ]) !!}
</div>
