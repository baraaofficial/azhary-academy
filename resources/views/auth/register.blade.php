@extends('layouts.app')

@section('content')

<main>
    <section id="hero" class="login">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8">
                    <div id="login">
                        <div class="text-center"><img src="{{asset('website/img/logo_sticky.png')}}" alt="Image" data-retina="true" ></div>
                        <hr>
                        <form method="POST" action="{{ route('register') }}" >
                            @csrf

                            <div class="form-group">
                                <label>الأسم</label>
                                <input  id="name" name="name" type="text" class=" form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="أكتب أسمك" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label>البريد الألكتروني</label>
                                <input type="email" id="email" name="email" class=" form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder=" أكتب البريد الألكتروني" required autocomplete="email" a>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>كلمة السر</label>
                                <input type="password" name="password" class=" form-control @error('password') is-invalid @enderror" id="password" placeholder=" أكتب كلمة السر" required autocomplete="new-password" >

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>كلمة السر مرة آخري</label>
                                <input type="password" name="password_confirmation" class=" form-control" id="password-confirm" placeholder="أعد إدخال كلمة السر" required autocomplete="new-password">
                            </div>
                            <div id="pass-info" class="clearfix"></div>
                            <button class="btn_full">تسجيل حساب جديد</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End main -->
@endsection
