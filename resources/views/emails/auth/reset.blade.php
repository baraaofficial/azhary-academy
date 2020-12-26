@component('mail::message')
# أكاديمية أزهري

أكاديمية أزهري تغير كلمة السر .
<h1>مرحبا بك  {{$user->name}}</h1>
@component('mail::button', ['url' => config('app.url')])
تغير كلمة السر
@endcomponent


<p> رمز إعادة تعيين الخاص بك هو : {{$user->pin_code}}</p>
شكراً,<br>
{{ config('app.name') }}
@endcomponent

