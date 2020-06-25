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

    {!! Form::select('courses_id',$class->pluck('name','id'),null,[
        'placeholder' => 'اختر',
        'class' => 'form-control form-control-select2'

    ]) !!}
</div>


<div class="form-group mb-6">
    <label for="simpleinput">الأختباات الدراسية :</label>
    @inject('class','App\Models\Test')

    {!! Form::select('test_id',$class->pluck('answer','id'),null,[
        'placeholder' => 'اختر',
        'class' => 'form-control form-control-select2'

    ]) !!}
</div>


<!-- Bootstrap file input -->
<div class="card">
    <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-2 col-form-label font-weight-semibold">الضورة:</label>
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
