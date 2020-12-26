@extends('layouts.app')

@section('title')
    - {{Auth()->user()->name}} ({{$countNotifications}})
@stop
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
                                src="{{asset('uploads/users/'. ($user->image != null ?$user->image: 'avatar.jpg'))}}" class="alignleft img-circle img-thumbnail notopmargin nobottommargin" alt="{{asset('uploads/users/'. ($user->image != null ?$user->image: 'avatar.jpg'))}}" title="{{Auth()->user()->name}}" style="max-width: 84px;">

                            <div class="heading-block noborder">
                                <h3 title="{{Auth()->user()->name}}">{{Auth()->user()->name}}</h3>
                                <span title="{{$user->bio}}">{{$user->bio}}</span>
                            </div>

                            <div class="clear"></div>

                            <div class="row clearfix">

                                <div class="col-lg-12">

                                    <div class="tabs tabs-alt clearfix" id="tabs-profile">

                                        <ul class="tab-nav clearfix">
                                            <li><a href="#tab-posts" title="دوراتك "><i class="icon-pencil2"></i> الدورات </a></li>
                                            <li><a href="#tab-replies" title="تعليقاتك"><i class="icon-reply"></i> التعليقات</a></li>
                                        </ul>

                                        <div class="tab-container">

                                            <div class="tab-content clearfix" id="tab-posts">
                                                <div class="row topmargin-sm clearfix">
                                                    <div class="col-12 bottommargin-sm">
                                                        <div class="ipost clearfix">
                                                    @if (count($payments))
                                                            @foreach($payments as $course)
                                                            <div class="row clearfix">
                                                                <div class="col-md-4">
                                                                    <div class="entry-image">
                                                                            <a href="{{asset($course->course->image)}}" data-lightbox="image"><img class="image_fade" src="{{asset($course->course->image)}}" alt="Standard Post with Image"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="entry-title">
                                                                        <h3><a href="{{route('course.list',$course->course->id)}}">{{$course->course->name}}</a></h3>

                                                                    </div>
                                                                    <ul class="entry-meta clearfix">
                                                                        <li title="{{$course->course->created_at}}"><i class="icon-calendar3"></i> {{$course->course->created_at->isoFormat('Do MMMM YYYY', 'MMMM YYYY')}}</li>
                                                                        <li><i class="icon-folder-open"></i>
                                                                            <a href="{{route('course.index',$course->course->id.'/'.\Illuminate\Support\Str::replaceArray(' ',['-'],optional($course->course->class)->name))}}" title="{{optional($course->course->class)->name}}">{{optional($course->course->class)->name}}</a>,
                                                                            <a href="{{route('category.index',$course->course->id.'/'.\Illuminate\Support\Str::replaceArray(' ',['-'],optional($course->course->categories)->name))}}" title="{{optional($course->course->categories)->name}}">{{$course->course->categories->name}}</a></li>
                                                                    </ul>
                                                                    <div class="entry-content">
                                                                        <p>{!! $course->course->description !!}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        @else
                                                            <div class="section center nobg">
                                                                <h3 class="h1 t700" data-animate="rotateIn" title="                                                عليك بالاشتراك فى الدورات أولا أو إن كان فى السلة دورات عليك بدفعها">                                                عليك بالاشتراك فى الدورات أولا أو إن كان فى السلة دورات عليك بدفعها</h3>
                                                            </div>
                                                        @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-content clearfix" id="tab-replies">

                                                <div class="clear topmargin-sm"></div>
                                                <ol class="commentlist noborder nomargin nopadding clearfix">
                                                   @foreach($comments as $comment)
                                                    <li class="comment even thread-even depth-1" id="li-comment-1">
                                                        <div id="comment-1" class="comment-wrap clearfix">
                                                            <div class="comment-meta">
                                                                <div class="comment-author vcard">
																	<span class="comment-avatar clearfix">
																	<img alt='{{asset('uploads/users/'. ($user->image != null ?$user->image: 'avatar.jpg'))}}' title="{{Auth()->user()->name}}" src='{{asset('uploads/users/'. ($user->image != null ?$user->image: 'avatar.jpg'))}}' class='avatar avatar-60 photo avatar-default' height='60' width='60' /></span>
                                                                </div>
                                                            </div>
                                                            <div class="comment-content clearfix">
                                                                <div class="comment-author" title="{{$comment->user->name}}">{{$comment->user->name}}<span><a href="{{route('lesson.single' , ['id' =>$comment->lesson_id,'#comment'])}}" title="انقر لدخول علي التعليق">{{$comment->updated_at->diffForHumans()}}</a></span></div>
                                                                <p title="{!! $comment->comment !!}">{!! $comment->comment !!}</p>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </div>
                                                    </li>
                                                    @endforeach

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
                                <a href="#" class="list-group-item list-group-item-action clearfix" title="حسابي"> حسابي <i class="icon-user float-left"></i></a>

                                <a href="#" data-toggle="modal"  data-target="#contactFormModal" class="list-group-item list-group-item-action clearfix" title="الإعدادات"> الإعدادات <i class="icon-cog float-left"></i></a>
                                <a href="#" data-toggle="modal"  data-target="#notifcationFormModal" class="list-group-item list-group-item-action clearfix" title="الإشعارات"> الإشعارات  <i class="icon-line-bell  float-left"><span style="color: #0000E6">{{$countNotifications}}</span></i></a>
                                <a href="{{ route('logout') }}" class="list-group-item list-group-item-action clearfix" onclick="event.preventDefault();document.getElementById('logout-form').submit();" title="تسجيل الخروج"> تسجيل الخروج <i class="icon-line2-logout float-left"></i></a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>

                            <div class="modal fade" id="contactFormModal" tabindex="-1" role="dialog" aria-labelledby="contactFormModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="contactFormModalLabel" title="تعديل حسابك">تعديل حسابك</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="form-result"></div>
                                            <form class="nobottommargin" id="template-contactform" name="template-contactform" action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
                                                {{ csrf_field() }}

                                                <div class="form-process"></div>
                                                @php $input = "name"; @endphp
                                                <div class="col_half">
                                                    <label for="name" title="أدخل إسمك">الأسم </label>
                                                    <input type="text" id="name" name="{{ $input }}" value="{{ isset($user) ? $user->{$input} : '' }}" class="sm-form-control @error($input) is-invalid @enderror required" />
                                                    @error($input)
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                @php $input = "email"; @endphp
                                                <div class="col_half col_last">
                                                    <label for="email" title="بريدك الألكتروني">البريد الألكتروني </label>
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
                                                    <label for="phone" title="رقم موبايلك">رقم الموبايل</label>
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
                                                    <label for="message" title="سيرتك الذاتية">السيرة الذاتية </label>
                                                    <textarea {{$input}} class="sm-form-control @error($input) is-invalid @enderror" id="message" name="{{ $input }}" rows="6" cols="30"></textarea>

                                                    @error($input)
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="col_full">
                                                    <label for="register-form-password" title="أكتب كلمة مرورك لتعديل">كلمة المرور:</label>
                                                    <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" />

                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="col_full">
                                                    <label for="register-form-repassword" title="أعد كتابة كلمة المرور لتأكيد">اعادة كلمة المرور:</label>
                                                    <input type="password" id="password-confirm" name="password_confirmation"  class="form-control" />

                                                </div>

                                                <div class="col-full">
                                                    @php $input = "image"; @endphp

                                                    <label title="أضف صورتك">أضف صورة:</label><br>
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

                                                <br>
                                                <br>
                                                <div class="col_full">
                                                    <button class="button button-3d nomargin" type="submit" id="submit" name="submit" value="submit">تعديل</button>
                                                </div>

                                            </form>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal" title="إغلاق الصفحة">إغلاق</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                            <!-- Modal Contact Form End -->
                            <div class="modal fade" id="notifcationFormModal" tabindex="-1" role="dialog" aria-labelledby="contactFormModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="contactFormModalLabel" title="الإشعارات">الإشعارات </h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="form-result"></div>
                                            @if (count($notifications))

                                            @foreach($notifications as $notification)
                                                  <h4 style="color: #4c110f" title="{{$notification->title}}">
                                                      {{' ' .$notification->title}}
                                                  </h4>
                                                  <li>
                                                      <i class="icon-calendar3"></i>

                                                      <acronym title="{{$notification->updated_at}}">{{$notification->updated_at->isoFormat('Do MMMM YYYY', 'MMMM YYYY')}}</acronym>
                                                  </li>

                                                <hr>
                                            @endforeach
                                            @else
                                                لا توجد اشعارات بعد
                                            @endif

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal" title="إغلاق الصفحة">إغلاق</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                            <!-- Modal Contact Form End -->

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
