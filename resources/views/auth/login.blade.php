<!DOCTYPE html>
<html dir="rtl" lang="ar-eg">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('website/css/bootstrap.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('style.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('style-rtl.css')}}" type="text/css" />

    <link rel="stylesheet" href="{{asset('website/css/dark.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('website/css/font-icons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('website/css/animate.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('website/css/magnific-popup.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('website/css/bootstrap-rtl.css')}}" type="text/css" />

    <link rel="stylesheet" href="{{asset('website/css/font-icons-rtl.css')}}" type="text/css" />

    <link rel="stylesheet" href="{{asset('website/css/responsive-rtl.css')}}" type="text/css" />

    <link rel="stylesheet" href="{{asset('website/css/responsive.css')}}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Document Title
    ============================================= -->
    <title>

             تسجيل الدخول

    </title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap nopadding">

            <div class="section nopadding nomargin" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: url('website/course/images/video/poster.png') center center no-repeat; background-size: cover;"></div>

            <div class="section nobg full-screen nopadding nomargin">
                <div class="container-fluid vertical-middle divcenter clearfix">

                    <div class="center">
                        <a href="{{url('/')}}">
                            <h1 STYLE="color: #c4ff65">  أكاديمية أزهري</h1>
                        </a>
                    </div>

                    <div class="card divcenter noradius noborder" style="max-width: 400px; background-color: rgba(255,255,255,0.93);">
                        <div class="card-body" style="padding: 40px;">
                            <form id="login-form" name="login-form" class="nobottommargin" action="{{route('login')}}" method="post">
                                {{ csrf_field() }}

                                <h3>تسجيل الدخول إلى حسابك</h3>
                                <p>لا يوجد لديك حساب ؟<a href="{{route('register')}}"> سجل معنا الآن </a></p>
                                <div class="col_full">
                                    <label for="login-form-username">البريد الألكتروني:</label>
                                    <input type="email" id="email" name="email" value="" class="form-control not-dark  @error('email') is-invalid @enderror"  required autocomplete="off" autofocus />
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col_full">
                                    <label for="login-form-password">كلمة السر:</label>
                                    <input type="password" id="password" name="password" value="" class="form-control not-dark @error('password') is-invalid @enderror" required autocomplete="off" autofocus />
                                    @error('password')
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

                                    <button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" value="login">تسجيل الدخول </button>
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="button button-3d button-sacndary nomargin">نسيت كلمة المرور ؟</a>
                                    @endif
                                </div>

                            </form>


                        </div>
                    </div>


                </div>
            </div>

        </div>

    </section><!-- #content end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script src="{{asset('website/js/jquery.js')}}"></script>
<script src="{{asset('website/js/plugins.js')}}"></script>

<!-- Footer Scripts
============================================= -->
<script src="{{asset('website/js/functions.js')}}"></script>

</body>
</html>
