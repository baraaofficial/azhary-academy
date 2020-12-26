
<!-- Footer
============================================= -->
<footer  id="footer" class="dark" style="background: asset('website/images/footer-bg.jpg') repeat fixed; background-size: 100% 100%;">
    <!-- Copyrights
    ============================================= -->
    <div id="copyrights">

        <div class="container clearfix">

            <div class="col_half">
                <div class="copyrights-menu copyright-links clearfix">
                    <a href="{{url('/')}}" title="أكاديمية أزهري - الرئيسية"> الرئيسية </a>/<a href="{{url('/courses')}}" title="أكاديمية أزهري - الصفوف الدراسية">الصفوف الدراسية</a>/<a href="{{url('/subjects')}}" title="أكاديمية أزهري - المواد الدراسية">المواد الدراسية</a>/<a href="{{url('/teachers')}}" title="أكاديمية أزهري - أعضاء هيئة التدريس">أعضاء هيئة التدريس</a><a href="{{url('/terms-and-conditions')}}" title="أكاديمية أزهري - الشروط والأحكام">الشروط والأحكام</a>
                </div>
                Copyrights &copy; 2020 جميع الحقوق محفوظة لموقع أكاديمية أزهري . BY <a href="https://www.linkedin.com/in/baraaphp/" rel="nofollow" >Baraa Eldwansy</a>
            </div>

            <div class="col_half col_last tleft">
                <div class="fleft clearfix">
                    @foreach($contact as $row)
                    <a href="https://www.facebook.com/{{$row->facebook}}" rel="nofollow" title="أكاديمية أزهري - {{$row->facebook}}" class="social-icon si-small si-borderless nobottommargin si-facebook">
                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                    </a>

                    <a href="https://www.facebook.com/{{$row->twitter}}" rel="nofollow" title="أكاديمية أزهري - {{$row->twitter}}" class="social-icon si-small si-borderless nobottommargin si-twitter">
                        <i class="icon-twitter"></i>
                        <i class="icon-twitter"></i>
                    </a>

                    <a href="tel:{{$row->phone}}" title="أكاديمية أزهري - {{$row->phone}}" rel="nofollow" class="social-icon si-small si-borderless nobottommargin si-call">
                        <i class="icon-call"></i>
                        <i class="icon-call"></i>
                    </a>

                    <a href="mailto:{{$row->mail}}" title="أكاديمية أزهري - {{$row->mail}}" rel="nofollow" class="social-icon si-small si-borderless nobottommargin si-email3">
                        <i class="icon-email3"></i>
                        <i class="icon-email3"></i>
                    </a>

                    @endforeach
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
<!-- toastr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- Footer Scripts
============================================= -->
<script src="{{asset('website/js/functions.js')}}"></script>
@if(isset($FawryPay))
<script src="{{asset('website/fawrypay/fawryPlugin.js')}}"></script>
@endif

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

<!-- END REVOLUTION SLIDER -->
<script>

    // bootstrap-toastr
    // plugins/bootstrap-sweetalert
    function add_to_cart(product_id){
        $.ajax({
            type: "GET",
            url:  "{{url('/add-to-cart')}}/"+product_id,
            data: false,
            cache:false,
            success: function(response_data){
                //var json = JSON.parse(response_data);
                var json_response = response_data;
                if(json_response.status === 200 ){
                    $('[id^=h_numcart_items]').html(json_response.num_items);
                    $("#hcart_items").html(json_response.list_items);
                    $(".header_cart_total").html(response_data.cart_total);
                    success_notifications(json_response.notify_msg);
                }
            }
        });
    }

    function delete_from_cart(target_url){
        $.ajax({
            type: "GET",
            url:  "{{url('/delete-product-from-cart')}}/"+target_url,
            data: false,
            cache:false,
            success: function(response_data){
                //var json = JSON.parse(response_data);
                if(response_data.status === 200 ){
                    $('[id^=h_numcart_items]').html(response_data.num_items);
                    $("#hcart_items").html(response_data.list_items);
                    $(".header_cart_total").html(response_data.cart_total);
                    info_notifications(response_data.notify_msg);
                }
            }
        });
    }

    /*
    function delete_data(target_url){
        swal({
            title: "Are you sure you want to delete this data?}}" ,
            text: "please note that if this data is deleted it cannot be retrieved again}}" ,
            type: "warning",
            showCancelButton: true,
            closeOnConfirm: true,
            showLoaderOnConfirm: true,
            confirmButtonText: "✔  Yes, I want to delete data )}}",
            cancelButtonText:  "✖ Cancel}}",
            confirmButtonClass:'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
        }, function() {
            setTimeout(function() {
                $.get(target_url,
                    function(data, status) {
                        swal({
                                title: "Deleted}}",
                                text:  "the selected data has been deleted successfully}}",
                                type: "success"
                            },
                            function() {
                                location.reload();
                            }
                        );
                    }
                );
            }, 10);
        });
    }
    */

    function success_notifications(msg_info){
        toastr.success(msg_info, 'إشعار',
            toastr.options = {
                "closeButton": true,
                "debug": true,
                "positionClass": "toast-top-right",
                "showDuration": "6000",
                "hideDuration": "6000",
                "timeOut": "6000",
                "extendedTimeOut": "6000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            });
    }

    function info_notifications(msg_info){
        toastr.info(msg_info, 'إشعار',
            toastr.options = {
                "closeButton": true,
                "debug": true,
                "positionClass": "toast-top-left",
                "showDuration": "6000",
                "hideDuration": "6000",
                "timeOut": "6000",
                "extendedTimeOut": "6000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            });
    }
</script>
<!--Start of Tawk.to Script-->
{{--<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5f767b504704467e89f400f5/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>--}}
<!--End of Tawk.to Script-->
</body>
</html>

