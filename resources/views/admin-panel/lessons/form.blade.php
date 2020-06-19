<div class="form-group mb-6">
    <label for="simpleinput">عنوان الوسم :</label>
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


<!-- Summernote editor -->
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">الوصف</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="reload"></a>
                <a class="list-icons-item" data-action="remove"></a>
            </div>
        </div>
    </div>

    <div class="card-body">
        <textarea class="summernote" name="description">

        </textarea>
    </div>
</div>
<!-- /summernote editor -->

<div class="form-group mb-6">
    <label for="simpleinput">الدروات الدراسية :</label>
    @inject('class','App\Models\Course')

    {!! Form::select('courses_id',$class->pluck('name','id'),null,[
        'placeholder' => 'اختر',
        'class' => 'form-control form-control-select2'

    ]) !!}
</div>


<div class="form-group mb-6">
    <label for="simpleinput">الصوره:</label>
    {!! Form::file('image',null,[

        'class' => 'form-control'

    ]) !!}
</div>

<div class="form-group mb-6">
    <label for="simpleinput">PDF:</label>
    {!! Form::file('pdf',null,[

        'class' => 'form-control'

    ]) !!}
</div>
