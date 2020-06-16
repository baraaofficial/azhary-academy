<div class="form-group mb-6">
    <label for="simpleinput">اسم الدورة:</label>
    {!! Form::text('name',null,[

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

<div class="form-group">
    <label>اختار القسم:</label>
    <select name="category" data-placeholder="اختار القسم" class="form-control form-control-select2" data-fouc>
        <option></option>
        <optgroup>
            <option value="ادبي">ادبي</option>
            <option value="علمي">علمي</option>
        </optgroup>

    </select>
</div>

<div class="form-group mb-6">
    <label for="simpleinput">الوسوم :</label>
    @inject('tags','App\Models\Tag')

    {!! Form::select('tag_id[]',$tags->pluck('name','id'),null,[
        'multiple' => true,
        'class' => 'form-control form-control-select2'

    ]) !!}
</div>

<div class="form-group mb-6">
    <label for="simpleinput">المواد :</label>
    @inject('subject','App\Models\Subject')

    {!! Form::select('subject_id',$subject->pluck('name','id'),null,[
        'placeholder' => 'اختر',
        'class' => 'form-control form-control-select2'

    ]) !!}
</div>

<div class="form-group mb-6">
    <label for="simpleinput">الصفوف الدراسية :</label>
    @inject('class','App\Models\calss')

    {!! Form::select('class_id',$class->pluck('name','id'),null,[
        'placeholder' => 'اختر',
        'class' => 'form-control form-control-select2'

    ]) !!}
</div>


<div class="form-group mb-6">
    <label for="simpleinput">السعر:</label>
    {!! Form::number('price',null,[

        'class' => 'form-control'

    ]) !!}
</div>

<div class="form-group mb-6">
    <label for="simpleinput">الصوره:</label>
    {!! Form::file('image',null,[

        'class' => 'form-control'

    ]) !!}
</div>

