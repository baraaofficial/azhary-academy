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
                        <form  method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <label>البريد الإلكتروني</label>
                                <input type="text" name="email" class=" form-control @error('email') is-invalid @enderror" placeholder="البريد الإلكتروني"  value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>كلمة السر</label>
                                <input type="password" name="password" class=" form-control @error('password') is-invalid @enderror" placeholder="كلمة السر" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="checkboxes float-left">
                                <input id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember-me">تذكرني</label>
                            </div>

                            <p class="small">
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">أنسيت كلمة السر ؟</a>
                                @endif
                            </p>

                            <button type="submit" class="btn_full">تسجيل الدخول</button>
                            <a href="{{url('/register')}}" class="btn_full_outline">التسجيل</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End main -->
@endsection
