
<!-- Footer
============================================= -->
<footer  id="footer" class="dark" style="background: asset('website/images/footer-bg.jpg') repeat fixed; background-size: 100% 100%;">


    <!-- Copyrights
    ============================================= -->
    <div id="copyrights">

        <div class="container clearfix">

            <div class="col_half">
                <div class="copyrights-menu copyright-links clearfix">
                    <a href="{{url('/')}}"> الرئيسية </a>/<a href="{{url('/courses')}}">الصفوف الدراسية</a>/<a href="{{url('/subjects')}}">المواد الدراسية</a>/<a href="{{url('/teachers')}}">أعضاء هيئة التدريس</a>
                </div>
                Copyrights &copy; 2020 جميع الحقوق محفوظة <a href="https://www.facebook.com/BaraaAsc"> البراء الدوانسي</a> .
            </div>

            <div class="col_half col_last tright">
                <div class="fright clearfix">
                    <a href="#" class="social-icon si-small si-borderless nobottommargin si-facebook">
                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless nobottommargin si-twitter">
                        <i class="icon-twitter"></i>
                        <i class="icon-twitter"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless nobottommargin si-gplus">
                        <i class="icon-gplus"></i>
                        <i class="icon-gplus"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless nobottommargin si-pinterest">
                        <i class="icon-pinterest"></i>
                        <i class="icon-pinterest"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless nobottommargin si-vimeo">
                        <i class="icon-vimeo"></i>
                        <i class="icon-vimeo"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless nobottommargin si-github">
                        <i class="icon-github"></i>
                        <i class="icon-github"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless nobottommargin si-yahoo">
                        <i class="icon-yahoo"></i>
                        <i class="icon-yahoo"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless nobottommargin si-linkedin">
                        <i class="icon-linkedin"></i>
                        <i class="icon-linkedin"></i>
                    </a>
                </div>
            </div>

        </div>

    </div><!-- #copyrights end -->

</footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script src="{{asset('website/js/jquery.js')}}"></script>
<script src="{{asset('website/js/plugins.js')}}"></script>
<!-- Import FawryPay Production JavaScript Library -->
<script type="text/javascript" src="https://www.atfawry.com/ECommercePlugin/scripts/FawryPay.js"></script>

<!-- Import FawryPay Staging JavaScript Library-->
<script type="text/javascript" src="https://atfawry.fawrystaging.com/ECommercePlugin/scripts/FawryPay.js"></script>
<!-- Footer Scripts
============================================= -->
<script src="{{asset('website/js/functions.js')}}"></script>
@yield('script')



<script>
    jQuery( "#tabs-profile" ).on( "tabsactivate", function( event, ui ) {
        jQuery( '.flexslider .slide' ).resize();
    });
</script>

<script>
    jQuery( "#tabs-profile" ).on( "tabsactivate", function( event, ui ) {
        jQuery( '.flexslider .slide' ).resize();
    });
</script>
</body>
</html>

