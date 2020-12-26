@extends('layouts.app')

@section('title')
    - تسجيل الدخول / التسجيل
@endsection
@section('content')
    <!-- Page Title
============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>حسابي</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسيه</a></li>
                <li class="breadcrumb-item active" aria-current="page">التسجيل</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <div class="accordion accordion-lg divcenter nobottommargin clearfix" style="max-width: 550px;">
                    @include('partials.validation-errors')

                    <div class="acctitle"><i class="acc-closed icon-lock3"></i><i class="acc-open icon-unlock"></i>تسجيل الدخول إلى حسابك</div>
                    <div class="acc_content clearfix">
                        <form action="{{ route('login') }}" method="POST">
                            {{ csrf_field() }}

                            <div class="col_full">
                                <label for="login-form-email">البريد الألكتروني:</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control @error('emaill') is-invalid @enderror"  required autocomplete="off" autofocus/>

                                @error('emaill')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col_full">
                                <label for="login-form-password">كلمة المرور:</label>
                                <input type="password" id="password" name="password"  class="form-control @error('passwordd') is-invalid @enderror" required autocomplete="off" autofocus />

                                @error('passwordd')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col_full">
                                <input class="login-form-check" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('تذكرني') }}
                                </label>
                            </div>

                            <div class="col_full nobottommargin">
                                <button class="button button-3d button-black nomargin" id="submit" name="submit" value="login">تسجيل الدخول</button>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="button button-3d button-sacndary nomargin">نسيت كلمة المرور ؟</a>
                                @endif
                            </div>
                        </form>
                    </div>

                    <div class="acctitle"><i class="acc-closed icon-user4"></i><i class="acc-open icon-ok-sign"></i>تسجيل جديد؟  سجل للحصول على حساب</div>
                    <div class="acc_content clearfix">
                        <form action="{{ route('register') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="col_full">
                                <label for="register-form-name">الأسم:</label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}"  class="form-control @error('name') is-invalid @enderror" required autocomplete="off" autofocus />

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col_full">
                                <label for="register-form-email">البريد الألكتروني:</label>
                                <input type="email" id="email" name="email"  value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" required autocomplete="off" autofocus  />

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col_full">
                                <label for="register-form-email">رقم الهاتف:</label>
                                <input type="tel" id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror" required autocomplete="off" autofocus />

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col_full">
                                <label for="register-form-password">كلمة السر:</label>
                                <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="off" autofocus  />

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="col_full">
                                <label for="register-form-repassword">اعادة كلمة السر:</label>
                                <input type="password" id="password-confirm" name="password_confirmation"  class="form-control" required autocomplete="off" autofocus  />
                            </div>
                            <div class="form-group mb-6">
                                <label for="simpleinput">الصف الدراسي : :</label>
                                @inject('class','App\Models\Calss')

                                {!! Form::select('calss_id',$class->pluck('name','id'),null,[
                                    'placeholder' => 'اختر',
                                    'class' => 'form-control form-control-select2'

                                ]) !!}
                            </div>

                            <div class="form-group mb-3 mb-md-2">
                                <label class="d-block font-weight-semibold">الجنس</label>
                                <div class="custom-control custom-control-right custom-radio custom-control-inline">
                                    <input type="radio" value="Male" class="custom-control-input" name="gender" id="Male" checked="">
                                    <label class="custom-control-label position-static" for="Male">ذكر</label>
                                </div>

                                <div class="custom-control custom-control-right custom-radio custom-control-inline">
                                    <input type="radio" value="female" class="custom-control-input" name="gender" id="female">
                                    <label class="custom-control-label position-static" for="female">إنثي</label>
                                </div>
                            </div>
                            <div class="col_full nobottommargin">
                                <button class="button button-3d button-black nomargin" type="submit">التسجيل الآن</button>
                            </div>

                        </form>
                    </div>
                    <div class="line line-sm"></div>

{{--
                    <div class="center">
                        <h3 style="margin-bottom: 20px;">أو التسجيل من خلال</h3>
                        <a href="{{url('/auth/facebook/')}}" class="button button-rounded si-facebook si-colored">Facebook</a>
                        <h4 style="margin-bottom: 15px;">أو</h4>
                        <a href="{{url('/auth/twitter/')}}" class="button button-rounded si-twitter si-colored">Twitter</a>
                        <h4 style="margin-bottom: 15px;">أو</h4>
                        <a href="{{url('/auth/google/')}}" class="button button-rounded si-google si-colored">Google</a>

                    </div>--}}
                </div>

            </div>

        </div>

    </section><!-- #content end -->

@endsection
