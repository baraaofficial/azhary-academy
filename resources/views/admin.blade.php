@extends('layouts.app')

@section('css')
    <!-- Bootstrap File Upload CSS -->
    <link rel="stylesheet" href="{{asset('website/css/components/bs-filestyle.css')}}" type="text/css" />

    <style>
        .sticky-side-element {
            position: fixed;
            top: 50%;
            margin-top: -24px;
            left: auto;
            right: -31px;
            height: 48px;
            line-height: 48px;
            padding: 0 15px;
            background-color: #EEE;
            color: #222;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 14px;
            z-index: 100;
            -webkit-transform: rotate(270deg);
            -ms-transform: rotate(270deg);
            -o-transform: rotate(270deg);
            transform: rotate(270deg);
        }
    </style>

@endsection

@section('content')
    @if(auth()->user() && $user->id == auth()->user()->id)

        <!-- Content
		============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <div class="row clearfix">

                        <div class="col-md-9">

                            <img
                                src="{{asset('/uploads/users/'. ($user->image != null ?$user->image: 'avatar.jpg'))}}" class="alignleft img-circle img-thumbnail notopmargin nobottommargin" alt="Avatar" style="max-width: 84px;">

                            <div class="heading-block noborder">
                                <h3>{{Auth()->user()->name}}</h3>
                                <span>{{$user->bio}}</span>
                            </div>

                            <div class="clear"></div>

                            <div class="row clearfix">

                                <div class="col-lg-12">

                                    <div class="tabs tabs-alt clearfix" id="tabs-profile">

                                        <ul class="tab-nav clearfix">
                                            <li><a href="#tab-feeds"><i class="icon-rss2"></i> الأخبار</a></li>
                                            <li><a href="#tab-posts"><i class="icon-pencil2"></i> الدورات </a></li>
                                            <li><a href="#tab-replies"><i class="icon-reply"></i> التعليقات</a></li>
                                        </ul>

                                        <div class="tab-container">

                                            <div class="tab-content clearfix" id="tab-feeds">

                                                <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium harum ea quo! Nulla fugiat earum, sed corporis amet iste non, id facilis dolorum, suscipit, deleniti ea. Nobis, temporibus magnam doloribus. Reprehenderit necessitatibus esse dolor tempora ea unde, itaque odit. Quos.</p>


                                            </div>
                                            <div class="tab-content clearfix" id="tab-posts">

                                                <div class="row topmargin-sm clearfix">

                                                    <div class="col-12 bottommargin-sm">
                                                        <div class="ipost clearfix">
                                                            <div class="row clearfix">
                                                                <div class="col-md-4">
                                                                    <div class="entry-image">
                                                                        <a href="{{asset('website/images/portfolio/full/17.jpg')}}" data-lightbox="image"><img class="image_fade" src="{{asset('website/images/blog/grid/17.jpg')}}" alt="Standard Post with Image"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="entry-title">
                                                                        <h3><a href="blog-single.html">This is a Standard post with a Preview Image</a></h3>
                                                                    </div>
                                                                    <ul class="entry-meta clearfix">
                                                                        <li><i class="icon-calendar3"></i> 10th Feb 2014</li>
                                                                        <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
                                                                        <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                                                                    </ul>
                                                                    <div class="entry-content">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 bottommargin-sm">
                                                        <div class="ipost clearfix">
                                                            <div class="row clearfix">
                                                                <div class="col-md-4">
                                                                    <div class="entry-image">
                                                                        <iframe src="https://player.vimeo.com/video/87701971" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="entry-title">
                                                                        <h3><a href="blog-single.html">This is a Standard post with a Embed Video</a></h3>
                                                                    </div>
                                                                    <ul class="entry-meta clearfix">
                                                                        <li><i class="icon-calendar3"></i> 10th Feb 2014</li>
                                                                        <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
                                                                        <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                                                                    </ul>
                                                                    <div class="entry-content">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 bottommargin-sm">
                                                        <div class="ipost clearfix">
                                                            <div class="row clearfix">
                                                                <div class="col-md-4">
                                                                    <div class="entry-image">
                                                                        <div class="fslider" data-arrows="false">
                                                                            <div class="flexslider">
                                                                                <div class="slider-wrap">
                                                                                    <div class="slide"><img class="image_fade" src="{{asset('website/images/blog/grid/10.jpg')}}" alt="Standard Post with Gallery"></div>
                                                                                    <div class="slide"><img class="image_fade" src="{{asset('website/images/blog/grid/20.jpg')}}" alt="Standard Post with Gallery"></div>
                                                                                    <div class="slide"><img class="image_fade" src="{{asset('website/images/blog/grid/21.jpg')}}" alt="Standard Post with Gallery"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="entry-title">
                                                                        <h3><a href="blog-single.html">This is a Standard post with a Slider Gallery</a></h3>
                                                                    </div>
                                                                    <ul class="entry-meta clearfix">
                                                                        <li><i class="icon-calendar3"></i> 10th Feb 2014</li>
                                                                        <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
                                                                        <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                                                                    </ul>
                                                                    <div class="entry-content">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="tab-content clearfix" id="tab-replies">

                                                <div class="clear topmargin-sm"></div>
                                                <ol class="commentlist noborder nomargin nopadding clearfix">
                                                    <li class="comment even thread-even depth-1" id="li-comment-1">
                                                        <div id="comment-1" class="comment-wrap clearfix">
                                                            <div class="comment-meta">
                                                                <div class="comment-author vcard">
																	<span class="comment-avatar clearfix">
																	<img alt='' src='https://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' class='avatar avatar-60 photo avatar-default' height='60' width='60' /></span>
                                                                </div>
                                                            </div>
                                                            <div class="comment-content clearfix">
                                                                <div class="comment-author">John Doe<span><a href="#" title="Permalink to this comment">April 24, 2012 at 10:46 am</a></span></div>
                                                                <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                                                                <a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </div>
                                                        <ul class='children'>
                                                            <li class="comment byuser comment-author-_smcl_admin odd alt depth-2" id="li-comment-3">
                                                                <div id="comment-3" class="comment-wrap clearfix">
                                                                    <div class="comment-meta">
                                                                        <div class="comment-author vcard">

																			<span class="comment-avatar clearfix">
																			<img alt='' src='https://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=40&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D40&amp;r=G' class='avatar avatar-40 photo' height='40' width='40' /></span>

                                                                        </div>
                                                                    </div>
                                                                    <div class="comment-content clearfix">
                                                                        <div class="comment-author"><a href='#' rel='external nofollow' class='url'>SemiColon</a><span><a href="#" title="Permalink to this comment">April 25, 2012 at 1:03 am</a></span></div>

                                                                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                                                                        <a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>

                                                    <li class="comment byuser comment-author-_smcl_admin even thread-odd thread-alt depth-1" id="li-comment-2">
                                                        <div class="comment-wrap clearfix">
                                                            <div class="comment-meta">
                                                                <div class="comment-author vcard">
																	<span class="comment-avatar clearfix">
																	<img alt='' src='https://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=60&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D60&amp;r=G' class='avatar avatar-60 photo' height='60' width='60' /></span>
                                                                </div>
                                                            </div>
                                                            <div class="comment-content clearfix">
                                                                <div class="comment-author"><a href='https://themeforest.net/user/semicolonweb' rel='external nofollow' class='url'>SemiColon</a><span><a href="#" title="Permalink to this comment">April 25, 2012 at 1:03 am</a></span></div>

                                                                <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

                                                                <a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </div>
                                                    </li>

                                                </ol>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="w-100 line d-block d-md-none"></div>

                        <div class="col-md-3 clearfix">

                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action clearfix"> حسابي <i class="icon-user float-right"></i></a>

                                <a href="#" data-toggle="modal" data-target="#contactFormModal" class="list-group-item list-group-item-action clearfix"> الإعدادات <i class="icon-cog float-right"></i></a>
                                <a href="{{ route('logout') }}" class="list-group-item list-group-item-action clearfix" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> تسجيل الخروج <i class="icon-line2-logout float-right"></i></a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>

                            <div class="modal fade" id="contactFormModal" tabindex="-1" role="dialog" aria-labelledby="contactFormModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="contactFormModalLabel">تعديل حسابك</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="form-result"></div>
                                            <form class="nobottommargin" id="template-contactform" name="template-contactform" action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
                                                {{ csrf_field() }}

                                                <div class="form-process"></div>
                                                @php $input = "name"; @endphp
                                                <div class="col_half">
                                                    <label for="name">الأسم <small>*</small></label>
                                                    <input type="text" id="name" name="{{ $input }}" value="{{ isset($user) ? $user->{$input} : '' }}" class="sm-form-control @error($input) is-invalid @enderror required" />
                                                    @error($input)
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                    @enderror
                                                </div>
                                                @php $input = "email"; @endphp
                                                <div class="col_half col_last">
                                                    <label for="email">البريد الألكتروني <small>*</small></label>
                                                    <input type="email" id="email" name="{{ $input }}" value="{{ isset($user) ? $user->{$input} : '' }}" class="required email @error($input) is-invalid @enderror sm-form-control" />
                                                    @error($input)
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                    @enderror
                                                </div>

                                                <div class="clear"></div>
                                                @php $input = "phone"; @endphp
                                                <div class="col_half">
                                                    <label for="phone">رقم الموبايل</label>
                                                    <input type="text" id="phone" name="{{ $input }}" value="{{ isset($user) ? $user->{$input} : '' }}" class="sm-form-control @error($input) is-invalid @enderror" />
                                                    @error($input)
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="clear"></div>
                                                @php $input = "bio"; @endphp
                                                <div class="col_full">
                                                    <label for="message">السيرة الذاتية <small>*</small></label>
                                                    <textarea class="required sm-form-control @error($input) is-invalid @enderror" id="message" name="{{ $input }}" rows="6" cols="30"></textarea>

                                                    @error($input)
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="col_full">
                                                    <label for="register-form-password">كلمة المرور:</label>
                                                    <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" />

                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="col_full">
                                                    <label for="register-form-repassword">اعادة كلمة المرور:</label>
                                                    <input type="password" id="password-confirm" name="password_confirmation"  class="form-control" />

                                                </div>

                                                <div class="col-full">
                                                    @php $input = "image"; @endphp

                                                    <label>أضف صورة:</label><br>
                                                    <input id="image" name="image" type="file" value="{{asset('/uploads/users/'.$user->image)}}" class="file  @error($input) is-invalid @enderror" multiple data-show-upload="false" data-show-caption="true" data-show-preview="true" >
                                                    @error($input)
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="col_full hidden">
                                                    <input type="text" id="botcheck" name="botcheck" value="" class="sm-form-control" />
                                                </div>

                                                <div class="col_full">
                                                    <button class="button button-3d nomargin" type="submit" id="submit" name="submit" value="submit">تعديل</button>
                                                </div>

                                                <input type="hidden" name="prefix" value="">

                                            </form>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                            <!-- Modal Contact Form End -->

                            <div class="fancy-title topmargin title-border">
                                <h4>Social Profiles</h4>
                            </div>

                            <a href="#" class="social-icon si-facebook si-small si-rounded si-light" title="Facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>

                            <a href="#" class="social-icon si-gplus si-small si-rounded si-light" title="Google+">
                                <i class="icon-gplus"></i>
                                <i class="icon-gplus"></i>
                            </a>

                            <a href="#" class="social-icon si-dribbble si-small si-rounded si-light" title="Dribbble">
                                <i class="icon-dribbble"></i>
                                <i class="icon-dribbble"></i>
                            </a>

                            <a href="#" class="social-icon si-flickr si-small si-rounded si-light" title="Flickr">
                                <i class="icon-flickr"></i>
                                <i class="icon-flickr"></i>
                            </a>

                            <a href="#" class="social-icon si-linkedin si-small si-rounded si-light" title="LinkedIn">
                                <i class="icon-linkedin"></i>
                                <i class="icon-linkedin"></i>
                            </a>

                            <a href="#" class="social-icon si-twitter si-small si-rounded si-light" title="Twitter">
                                <i class="icon-twitter"></i>
                                <i class="icon-twitter"></i>
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </section><!-- #content end -->
    @else
        <div class="section center nobg">
            <h3 class="h1 t700" data-animate="wobble">
                <div class="style-msg errormsg">
                    <div class="sb-msg"><i class="icon-remove"></i><strong>أوه المفاجئة !</strong> هذه ليست صفحتك الشخصيه عليك الضغط <a href="{{ route('profile.index', ['id' => auth()->user()->id]) }}">هنا </a> لدخول الى صفحتك .</div>
                </div>
            </h3>
        </div>
    @endif

@endsection

@section('script')

    <script>
        jQuery( "#tabs-profile" ).on( "tabsactivate", function( event, ui ) {
            jQuery( '.flexslider .slide' ).resize();
        });
    </script>

    <!-- Bootstrap File Upload Plugin -->
    <script src="{{asset('website/js/components/bs-filestyle.js')}}"></script>

    <script >
        $(document).ready(function() {
            $("#input-5").fileinput({showCaption: false});

            $("#input-6").fileinput({
                showUpload: false,
                maxFileCount: 10,
                mainClass: "input-group-lg",
                showCaption: true
            });

            $("#input-8").fileinput({
                mainClass: "input-group-md",
                showUpload: true,
                previewFileType: "image",
                browseClass: "btn btn-success",
                browseLabel: "Pick Image",
                browseIcon: "<i class=\"icon-picture\"></i> ",
                removeClass: "btn btn-danger",
                removeLabel: "Delete",
                removeIcon: "<i class=\"icon-trash\"></i> ",
                uploadClass: "btn btn-info",
                uploadLabel: "Upload",
                uploadIcon: "<i class=\"icon-upload\"></i> "
            });

            $("#input-9").fileinput({
                previewFileType: "text",
                allowedFileExtensions: ["txt", "md", "ini", "text"],
                previewClass: "bg-warning",
                browseClass: "btn btn-primary",
                removeClass: "btn btn-secondary",
                uploadClass: "btn btn-secondary",
            });

            $("#input-10").fileinput({
                showUpload: false,
                layoutTemplates: {
                    main1: "{preview}\n" +
                        "<div class=\'input-group {class}\'>\n" +
                        "   <div class=\'input-group-append\'>\n" +
                        "       {browse}\n" +
                        "       {upload}\n" +
                        "       {remove}\n" +
                        "   </div>\n" +
                        "   {caption}\n" +
                        "</div>"
                }
            });

            $("#input-11").fileinput({
                maxFileCount: 10,
                allowedFileTypes: ["image", "video"]
            });

            $("#input-12").fileinput({
                showPreview: false,
                allowedFileExtensions: ["zip", "rar", "gz", "tgz"],
                elErrorContainer: "#errorBlock"
            });
        });

    </script>
@endsection
