@if ($errors->any())
<div class="style-msg2 errormsg">
    <div class="msgtitle" title="إصلاح الأخطاء التالية">إصلاح الأخطاء التالية :</div>
    <div class="sb-msg">
        <ul>
            @foreach ($errors->all() as $error)
                <li title="{{ $error }}">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif
