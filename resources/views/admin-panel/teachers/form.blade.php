<div class="form-group mb-6">
    <label for="simpleinput">اسم المدرس :</label>
    {!! Form::text('name',null,[

        'class' => 'form-control'

    ]) !!}
</div>


<!-- CKEditor default -->
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">وصف المدرس</h5>
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
    <label for="simpleinput">البريد الألكتروني بالمدرس :</label>
    {!! Form::email('email',null,[

        'class' => 'form-control'

    ]) !!}
</div>


<!-- Bootstrap file input -->
<div class="card">
    <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-2 col-form-label font-weight-semibold">الصوره:</label>
                <div class="col-lg-10">
                    <input type="file" name="image" class="file-input form-control" data-show-caption="false" data-show-upload="false" data-fouc>
                </div>
            </div>
    </div>
</div>
<!-- /bootstrap file input -->
<div class="form-group mb-6">
    <label for="simpleinput">رقم موبايل المدرس :</label>
    {!! Form::text('phone',null,[

        'class' => 'form-control'

    ]) !!}
</div>
<div class="form-group mb-6">
    <label for="simpleinput">اسم المدرسة :</label>
    {!! Form::text('school',null,[

        'class' => 'form-control'

    ]) !!}
</div>

<div class="form-group mb-6">
    <label for="simpleinput"> :</label>
    {!! Form::text('type',null,[

        'class' => 'form-control'

    ]) !!}
</div>
