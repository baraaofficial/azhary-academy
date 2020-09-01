<!-- CKEditor default -->
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">العنوان الرئيسي</h5>
    </div>
    <div class="card-body">
        <div class="mb-3">
            <textarea name="title" id="editor-full" rows="4" cols="4">
            </textarea>
        </div>
    </div>
</div>
<!-- /CKEditor default -->

<div class="form-group mb-6">
    <label for="simpleinput">العنوان الأول:</label>
    {!! Form::text('title1',null,[

        'class' => 'form-control'

    ]) !!}
</div>


<div class="form-group mb-6">
    <label for="simpleinput">العنوان الثاني:</label>
    {!! Form::text('title2',null,[

        'class' => 'form-control'

    ]) !!}
</div>


<div class="form-group mb-6">
    <label for="simpleinput">العنوان الثالث:</label>
    {!! Form::text('title3',null,[

        'class' => 'form-control'

    ]) !!}
</div>


<div class="form-group mb-6">
    <label for="simpleinput">العنوان الفرعي الأول:</label>
    {!! Form::textarea('content1',null,[

        'class' => 'form-control'

    ]) !!}
</div>

<div class="form-group mb-6">
    <label for="simpleinput">العنوان الفرعي الثاني:</label>
    {!! Form::textarea('content2',null,[

        'class' => 'form-control'

    ]) !!}
</div>

<div class="form-group mb-6">
    <label for="simpleinput">العنوان الفرعي الثالث:</label>
    {!! Form::textarea('content3',null,[

        'class' => 'form-control'

    ]) !!}
</div>



<div class="form-group mb-6">
    <label for="simpleinput">الصوره:</label>
    {!! Form::file('image',null,[

        'class' => 'form-control'

    ]) !!}
</div>
