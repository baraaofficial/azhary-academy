<div class="form-group mb-6">
    <label for="simpleinput">اسم الدورة:</label>
    {!! Form::text('name',null,[

        'class' => 'form-control'

    ]) !!}
</div>

<div class="form-group">
    <label>حالة الدوره:</label>
    <select data-placeholder="حالة الدورة" class="form-control form-control-select2" data-fouc>
        <option></option>
        <optgroup>
            <option value="AK">قيد الانتظار</option>
            <option value="HI">قبلت</option>
            <option value="HI">مرفوض</option>
        </optgroup>

    </select>
</div>

<div class="form-group">
    <label>اختار القسم:</label>
    <select data-placeholder="اختار القسم" class="form-control form-control-select2" data-fouc>
        <option></option>
        <optgroup>
            <option value="AK">ادبي</option>
            <option value="HI">علمي</option>
        </optgroup>

    </select>
</div>

<div class="form-group mb-6">
    <label for="simpleinput">السعر:</label>
    {!! Form::text('price',null,[

        'class' => 'form-control'

    ]) !!}
</div>

<div class="form-group mb-6">
    <label for="simpleinput">اسم الدورة:</label>
    {!! Form::file('name',null,[

        'class' => 'form-control'

    ]) !!}
</div>

