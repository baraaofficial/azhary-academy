<div class="form-group mb-6">
    <label for="simpleinput">اسم العضو :</label>
    {!! Form::text('name',null,[
'autocomplete'=> 'off',
        'class' => 'form-control'

    ]) !!}
</div>


<div class="form-group mb-6">
    <label for="simpleinput">البريد الإلكتروني :</label>
    {!! Form::text('email',null,[
    'autocomplete'=> 'off',
        'class' => 'form-control'
    ]) !!}
</div>

<div class="form-group mb-6">
    <label for="simpleinput">رقم الموبايل :</label>
    {!! Form::text('phone',null,[
    'autocomplete'=> 'off',
        'class' => 'form-control'
    ]) !!}
</div>

<div class="form-group row">
    <label class="col-form-label col-lg-2">كلمة السر</label>
    <div class="col-lg-10">
        <input type="password" name="password" class="form-control" autocomplete="off">
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-lg-2">إعادة كلمة السر</label>
    <div class="col-lg-10">
        <input type="password" name="password_confirmation" class="form-control" autocomplete="off">
    </div>
</div>


<div class="form-group mb-3 mb-md-2">
    <label class="d-block font-weight-semibold">الجنس</label>
    <div class="custom-control custom-control-right custom-radio custom-control-inline">
        <input type="radio" value="Male" class="custom-control-input" name="gender" id="Male" >
        <label class="custom-control-label position-static" for="Male">ذكر</label>
    </div>

    <div class="custom-control custom-control-right custom-radio custom-control-inline">
        <input type="radio" value="female" class="custom-control-input" name="gender" id="female">
        <label class="custom-control-label position-static" for="female">إنثي</label>
    </div>
</div>

@php $input = "is_admin"; @endphp
<div class="col-md-6">
    <div class="form-group bmd-form-group">
        <label class="bmd-label-floating">مجموعة المستخدمين</label>
        <select name="{{$input}}" class="form-control @error($input) is-invalid @enderror">
            <option value="">اختار وظيفة للعضو</option>
            <option value="admin" {{ isset($row) && $row->{$input} == 'admin' ? 'selected'  :'' }}>مشرف</option>
            <option value="user" {{ isset($row) && $row->{$input} == 'user' ? 'selected'  :'' }}>مستخدم</option>
        </select>
        @error($input)
        <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
             </span>
        @enderror
    </div>
</div>

