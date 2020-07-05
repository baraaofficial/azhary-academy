<footer class="revealed">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3> تحتاج مساعدة ؟</h3>
                <a href="tel://004542344599" id="phone">+45 423 445 99</a>
                <a href="mailto:help@citytours.com" id="email_footer">help@citytours.com</a>
            </div>
            <div class="col-md-3">
                <h3>حولنا</h3>
                <ul>
                    <li><a href="#">معلومات عنا </a></li>
                    <li><a href="#">التعليمات</a></li>
                    <li><a href="#">تسجيل الدخول</a></li>
                    <li><a href="">تسجيل حساب جديد</a></li>
                    <li><a href="#">أحكام وشروط</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3>المراحل</h3>
                <ul>
                    <li><a href="#">المرحلة الأعدادية</a></li>
                    <li><a href="#">المرحلة الأبتدائية</a></li>

                </ul>
            </div>
            <div class="col-md-2">
                <h3>الصفوف</h3>
                <ul>
                    <li><a href="#">الصف الأول الثانوي</a></li>
                    <li><a href="#">الصف الثاني الثانوي</a></li>
                    <li><a href="#">الصف الثالث الثانوي</a></li>

                </ul>
            </div>
        </div><!-- End row -->
        <div class="row">
            <div class="col-md-12">
                <div id="social_footer">
                    <ul>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-google"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                        <li><a href="#"><i class="icon-pinterest"></i></a></li>
                        <li><a href="#"><i class="icon-vimeo"></i></a></li>
                        <li><a href="#"><i class="icon-youtube-play"></i></a></li>
                    </ul>
                    <p>© Citytours 2018</p>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</footer><!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->

<!-- Search Menu -->
<div class="search-overlay-menu">
    <span class="search-overlay-close"><i class="icon_set_1_icon-77"></i></span>
    <form role="search" id="searchform" method="get">
        <input value="" name="q" type="search" placeholder="Search..." />
        <button type="submit"><i class="icon_set_1_icon-78"></i>
        </button>
    </form>
</div><!-- End Search Menu -->

<!-- Sign In Popup -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
    <div class="small-dialog-header">
        <h3>تسجيل الدخول</h3>
    </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="sign-in-wrapper">

            <div class="form-group">
                <label>البريد الألكتروني</label>
                <input type="email" class="form-control" name="email" id="email">
                <i class="icon_mail_alt"></i>
            </div>
            <div class="form-group">
                <label>كلمة السر</label>
                <input type="password" class="form-control" name="password" id="password" value="">
                <i class="icon_lock_alt"></i>
            </div>
            <div class="clearfix add_bottom_15">
                <div class="checkboxes float-left">
                    <input id="remember" type="checkbox" name="remember"  {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember-me">تذكرني</label>
                </div>

                <div class="float-right">
                    @if (Route::has('password.request'))
                    <a id="forgot" href="{{ route('password.request') }}">أنسيت كلمة السر ؟</a>
                    @endif

                </div>
            </div>
            <div class="text-center"><input type="submit" value="تسجيل الدخول" class="btn_login"></div>
            <div class="text-center">
               ليس لديك حساب ؟ <a href="{{url('/register')}}">سجل الآن</a>
            </div>
            <div class="divider"><span>أو </span></div>
            <a href="#0" class="social_bt facebook">تسجيل الدخول باستخدام الفيسبوك</a>
            <a href="#0" class="social_bt google">تسجيل الدخول باستخدام جوجل</a>
            <div id="forgot_pw">
                <div class="form-group">
                    <label>يرجي تأكيد البريد الإلكتروني لتسجيل أدناه</label>
                    <input type="email" class="form-control" name="email_forgot" id="email_forgot">
                    <i class="icon_mail_alt"></i>
                </div>
                <p>سوف تتلقى رسالة بريد إلكتروني تحتوي على رابط يسمح لك بإعادة تعيين كلمة المرور الخاصة بك إلى واحدة مفضلة جديدة.</p>
                <div class="text-center"><input type="submit" value="إعادة تعيين كلمة المرور" class="btn_1"></div>
            </div>
        </div>
    </form>
    <!--form -->
</div>
<!-- /Sign In Popup -->


<!-- Common scripts -->
<script src="{{asset('website/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('website/js/common_scripts_min_rtl.js')}}"></script>
<script src="{{asset('website/js/functions_rtl.js')}}"></script>
<script src="https://js.pusher.com/6.0/pusher.min.js"></script>
<script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('b06ec302ee92f4d37ffe', {
        cluster: 'eu'
    });
</script>
@yield('script')
<!-- Check box and radio style iCheck -->
<script>
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-grey',
        radioClass: 'iradio_square-grey'
    });
</script>

</body>

</html>
