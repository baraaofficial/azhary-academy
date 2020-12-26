<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{asset('admin-panel/global_assets/css/icons/icomoon/styles.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin-panel/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin-panel/assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin-panel/assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin-panel/assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin-panel/assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{asset('admin-panel/global_assets/js/main/jquery.min.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/plugins/loaders/blockui.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{asset('admin-panel/global_assets/js/plugins/extensions/rowlink.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>

    <script src="{{asset('admin-panel/assets/js/app.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/demo_pages/mail_list.js')}}"></script>
    <!-- /theme JS files -->

</head>

<body class="sidebar-xs">


<!-- Main navbar -->
<div class="navbar navbar-expand-md navbar-dark">
    <div class="navbar-brand">
        <a href="{{url('/dashboard')}}" class="d-inline-block">
            <img src="{{asset('admin-panel/global_assets/images/logo_light.png')}}" alt="">
        </a>
    </div>

    <div class="d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>
        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-paragraph-justify3"></i>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                    <i class="icon-paragraph-justify3"></i>
                </a>
            </li>
        </ul>

        <span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                    <i class="icon-people"></i>
                    <span class="d-md-none ml-2">Users</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-300">
                    <div class="dropdown-content-header">
                        <span class="font-weight-semibold">Users online</span>
                        <a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
                    </div>

                    <div class="dropdown-content-body dropdown-scrollable">
                        <ul class="media-list">
                            @foreach($get_users as $user)
                                <li class="media">

                                    <div class="media-body">
                                        <a href="{{route('users.edit',$user->id)}}" class="media-title font-weight-semibold">{{$user->name}}</a>
                                        <span class="d-block text-muted font-size-sm">{{$user->email}}</span>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="dropdown-content-footer bg-light">
                        <a href="{{route('users.index')}}" class="text-grey mr-auto">جميع الإعضاء</a>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                    <i class="icon-bubbles4"></i>
                    <span class="d-md-none ml-2">الرسائل</span>
                    <span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">{{$get_message->count()}}</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                    <div class="dropdown-content-header">
                        <span class="font-weight-semibold">الرسائل الاخيره</span>
                        <a href="#" class="text-default"><i class="icon-compose"></i></a>
                    </div>

                    <div class="dropdown-content-body dropdown-scrollable">
                        <ul class="media-list">
                            @if (count($get_message) > 0)
                                @foreach($get_message as $message)

                                    <li class="media">
                                        <div class="media-body">
                                            <div class="media-title">
                                                <a href="{{ route('contactus.show',[$message->id]) }}">
                                                    <span class="font-weight-semibold">{{$message->name}}</span>
                                                    <span class="text-muted float-right font-size-sm"> {{$message->updated_at->diffForHumans()}}</span>
                                                </a>
                                            </div>

                                            <span class="text-muted">{{$message->subject}}</span>
                                        </div>
                                    </li>
                                @endforeach
                            @else
                                <div style="color: #0D47A1"> لا توجد رسائل</div>
                            @endif

                        </ul>
                    </div>

                    <div class="dropdown-content-footer justify-content-center p-0">
                        <a href="{{route('contactus.index')}}" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="جميع الرسائل"><i class="icon-menu7 d-block top-0"></i></a>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown dropdown-user">
                <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                    <img src="{{asset('/uploads/users/'.Auth::user()->image)}}" class="rounded-circle mr-2" height="34" alt="">
                    <span>{{ Auth::user()->name }}</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="{{ route('profile.index', ['id' => auth()->user()->id]) }}" class="dropdown-item"><i class="icon-user-plus"></i>{{ Auth::user()->name }} </a>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="icon-switch2"></i> تسجيل الخروج</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->


<!-- Page content -->
<div class="page-content">

    <!-- Main sidebar -->
    <div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

        <!-- Sidebar mobile toggler -->
        <div class="sidebar-mobile-toggler text-center">
            <a href="#" class="sidebar-mobile-main-toggle">
                <i class="icon-arrow-right8"></i>
            </a>
            Navigation
            <a href="#" class="sidebar-mobile-expand">
                <i class="icon-screen-full"></i>
                <i class="icon-screen-normal"></i>
            </a>
        </div>
        <!-- /sidebar mobile toggler -->


        <!-- Sidebar content -->
        <div class="sidebar-content">

            <!-- User menu -->
            <div class="sidebar-user">
                <div class="card-body">
                    <div class="media">
                        <div class="mr-3">
                            <img src="{{asset('/uploads/users/'.Auth::user()->image)}}" class="rounded-circle mr-2" height="34" alt="">
                        </div>
                        <div class="media-body">
                            <div class="media-title font-weight-semibold">{{ Auth::user()->name }}</div>
                            <div class="font-size-xs opacity-50">
                                <i class="icon-pin font-size-sm"></i> &nbsp;Alexandria
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /user menu -->


            <!-- Main navigation -->
            <div class="card card-sidebar-mobile">
                <ul class="nav nav-sidebar" data-nav-type="accordion">

                    <!-- Main -->
                    <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">قائمة التنقل لأكادمية أزهري</div> <i class="icon-menu" title="Main"></i></li>

                    <li class="nav-item">
                        <a href="{{url('/dashboard')}}" class="nav-link disabled">
                            <i class="icon-home4"></i>
                            <span>
									لوحة التحكم
                            </span>
                        </a>
                    </li>

                    <li class="nav-item nav-item-submenu">
                        <a href="{{route('subjects.index')}}" class="nav-link active"><i class="icon-books"></i> <span>المواد الدراسية</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="المواد">
                            <li class="nav-item"><a href="{{route('subjects.index')}}" class="nav-link">المواد الدراسية</a></li>
                            <li class="nav-item"><a href="{{route('subjects.create')}}" class="nav-link ">إنشاء مادة دراسية جديدة</a></li>
                        </ul>
                    </li>

                    <li class="nav-item nav-item-submenu">
                        <a href="{{route('class.index')}}" class="nav-link "><i class="icon-graduation"></i> <span>الصفوف الدراسية</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="الصفوف">
                            <li class="nav-item"><a href="{{route('class.index')}}" class="nav-link ">الصفوف الدراسية</a></li>
                            <li class="nav-item"><a href="{{route('class.create')}}" class="nav-link ">إنشاء الصف الدراسية </a></li>
                        </ul>
                    </li>

                    <li class="nav-item nav-item-submenu">
                        <a href="{{route('tags.index')}}" class="nav-link"><i class="icon-price-tags"></i> <span>العلامات الدراسية</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="الوسوم">
                            <li class="nav-item"><a href="{{route('tags.index')}}" class="nav-link active">العلامات الدراسية</a></li>
                            <li class="nav-item"><a href="{{route('tags.create')}}" class="nav-link">إنشاء العلامات الدراسية </a></li>
                        </ul>
                    </li>

                    <li class="nav-item nav-item-submenu">
                        <a href="{{route('teachers.index')}}" class="nav-link"><i class="icon-user"></i> <span> جميع أعضاء هيئة التدريس</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title=" جميع أعضاء هيئة التدريس">
                            <li class="nav-item"><a href="{{route('teachers.index')}}" class="nav-link active "> جميع أعضاء هيئة التدريس</a></li>
                            <li class="nav-item"><a href="{{route('teachers.create')}}" class="nav-link">إضافة مدرس جديد </a></li>
                        </ul>
                    </li>

                    <li class="nav-item nav-item-submenu">
                        <a href="{{route('categories.index')}}" class="nav-link"><i class="icon-indent-decrease2"></i> <span> جميع الأقسام</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title=" جميع الأقسام">
                            <li class="nav-item"><a href="{{route('categories.index')}}" class="nav-link active "> جميع الأقسام</a></li>
                            <li class="nav-item"><a href="{{route('categories.create')}}" class="nav-link">إضافة قسم جديد </a></li>
                        </ul>
                    </li>

                    <li class="nav-item nav-item-submenu">
                        <a href="{{route('courses.index')}}" class="nav-link"><i class="icon-book-play"></i> <span>الدورات الدراسية</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="الدورات">
                            <li class="nav-item"><a href="{{route('courses.index')}}" class="nav-link active"> جميع الدورات الدراسية</a></li>
                            <li class="nav-item"><a href="{{route('courses.create')}}" class="nav-link">إنشاء دورة دراسية جديدة </a></li>
                        </ul>
                    </li>

                    <li class="nav-item nav-item-submenu">
                        <a href="{{route('lessons.index')}}" class="nav-link"><i class="icon-presentation"></i> <span>الدروس الدراسية</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="الدروس">
                            <li class="nav-item"><a href="{{route('lessons.index')}}" class="nav-link active"> جميع الدروس الدراسية</a></li>
                            <li class="nav-item"><a href="{{route('lessons.create')}}" class="nav-link">إنشاء درس  جديد </a></li>
                        </ul>
                    </li>

                    <!-- Main -->
                    <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">قائمة الأسئلة</div> <i class="icon-menu" title="Main"></i></li>

                    <li class="nav-item nav-item-submenu">
                        <a href="{{route('questions.index')}}" class="nav-link"><i class="icon-question7"></i> <span>الأسئلة الدراسية</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="الاسئلة">
                            <li class="nav-item"><a href="{{route('questions.index')}}" class="nav-link active"> جميع الأسئلة </a></li>
                            <li class="nav-item"><a href="{{route('questions.create')}}" class="nav-link">إنشاء سؤال جديد </a></li>
                        </ul>
                    </li>

                    <li class="nav-item nav-item-submenu">
                        <a href="{{route('tests.index')}}" class="nav-link"><i class="icon-pencil4"></i> <span>الأختبارات الدراسية</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="الاختبار">
                            <li class="nav-item"><a href="{{route('tests.index')}}" class="nav-link active"> جميع الأختبارات </a></li>
                            <li class="nav-item"><a href="{{route('tests.create')}}" class="nav-link">إنشاء اختبار جديد </a></li>
                        </ul>
                    </li>

                    <li class="nav-item nav-item-submenu">
                        <a href="{{route('questions_options.index')}}" class="nav-link"><i class="icon-add-to-list"></i> <span>خيارات الأسئلة</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="الاختيارات">
                            <li class="nav-item"><a href="{{route('questions_options.index')}}" class="nav-link active "> جميع خيارات الأسئلة</a></li>
                            <li class="nav-item"><a href="{{route('questions_options.create')}}" class="nav-link">إنشاء اختيار جديد </a></li>
                        </ul>
                    </li>

                    <!-- Main -->
                    <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">قائمة الأعدادات لأكادمية أزهري</div> <i class="icon-menu" title="Main"></i></li>

                    <li class="nav-item nav-item-submenu">
                        <a href="{{route('about.index')}}" class="nav-link"><i class="icon-notification2"></i> <span> حول الموقع </span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="حول الموقع">
                            <li class="nav-item"><a href="{{route('about.index')}}" class="nav-link active">حول الموقع</a></li>
                            <li class="nav-item"><a href="{{route('about.create')}}" class="nav-link">إنشاء حول الموقع</a></li>
                        </ul>
                    </li>

                    <li class="nav-item nav-item-submenu">
                        <a href="{{route('contact.index')}}" class="nav-link"><i class="icon-phone-wave"></i> <span> بيانات إتصال الموقع </span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="بيانات الإتصال">
                            <li class="nav-item"><a href="{{route('contact.index')}}" class="nav-link active">بيانات الإتصال</a></li>
                            <li class="nav-item"><a href="{{route('contact.create')}}" class="nav-link">إنشاء بيانات جديدة</a></li>
                        </ul>
                    </li>

                    <li class="nav-item nav-item-submenu">
                        <a href="{{route('contactus.index')}}" class="nav-link"><i class="icon-paperplane"></i> <span> الرسائل  </span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="الرسائل">
                            <li class="nav-item"><a href="{{route('contactus.index')}}" class="nav-link active">جميع الرسائل</a></li>
                            <li class="nav-item"><a href="{{route('contactus.create')}}" class="nav-link">انشاء رسالة جديدة</a></li>
                        </ul>
                    </li>

                    <li class="nav-item nav-item-submenu">
                        <a href="{{route('users.index')}}" class="nav-link"><i class="icon-users"></i> <span>  جميع الأعضاء  </span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="جميع الأعضاء">
                            <li class="nav-item"><a href="{{route('users.index')}}" class="nav-link active">جميع الأعضاء</a></li>
                            <li class="nav-item"><a href="{{route('users.create')}}" class="nav-link">انشاء عضو جديد</a></li>
                        </ul>
                    </li>

                {{--            <li class="nav-item nav-item-submenu">
                     <a href="#" class="nav-link"><i class="icon-users"></i> <span>  رسائل الفرحة والتوبيخية  </span></a>

                     <ul class="nav nav-group-sub" data-submenu-title="رسائل الفرحة والتوبيخية">

                         <li class="nav-item"><a href="#" class="nav-link active"><span>رسائل الفرحة</span></a>

                            <ul class="nav nav-group-sub" data-submenu-title="رسائل الفرحة والتوبيخية">

                                <li  class="nav-item"><a href="#" class="nav-link active">جميع رسائل الفرحة</a></li>
                                <li  class="nav-item"><a href="#" class="nav-link active">إنشاء رسالة فرحة</a></li>

                            </ul>

                         </li>
                         <li class="nav-item"><a href="{{route('users.create')}}" class="nav-link">انشاء عضو جديد</a></li>
                     </ul>
                 </li>--}}

                <!-- Main -->
                    <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">قائمة بيانات الدفع لأكادمية أزهري</div> <i class="icon-menu" title="Main"></i></li>
                    <li class="nav-item ">
                        <a href="{{route('invoices.index')}}" data-submenu-title="جميع الفواتير" class="nav-link"><i class="icon-calculator text-pink-300" ></i> <span> جميع الفواتير  </span></a>
                        <a href="{{route('payment.create')}}"data-submenu-title="إنشاء دفع لمستخدم "  class="nav-link"><i class="icon-coins text-yellow-300" style="color: #ffed4a"></i> <span> إنشاء دفع لمستخدم  </span></a>

                    </li>
                </ul>
            </div>
            <!-- /main navigation -->

        </div>
        <!-- /sidebar content -->

    </div>
    <!-- /main sidebar -->

    <!-- Secondary sidebar -->
    <div class="sidebar sidebar-light sidebar-secondary sidebar-expand-md">

        <!-- Sidebar mobile toggler -->
        <div class="sidebar-mobile-toggler text-center">
            <a href="#" class="sidebar-mobile-secondary-toggle">
                <i class="icon-arrow-right8"></i>
            </a>
            <span class="font-weight-semibold">Secondary sidebar</span>
            <a href="#" class="sidebar-mobile-expand">
                <i class="icon-screen-full"></i>
                <i class="icon-screen-normal"></i>
            </a>
        </div>
        <!-- /sidebar mobile toggler -->


        <!-- Sidebar content -->
        <div class="sidebar-content">

            <!-- Sub navigation -->
            <div class="card">
                <div class="card-header bg-transparent header-elements-inline">
                    <span class="text-uppercase font-size-sm font-weight-semibold">التنقل</span>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body p-0">
                    <ul class="nav nav-sidebar" data-nav-type="accordion">
                        <li class="nav-item-header">الملفات</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="icon-drawer-in"></i>
                                صندوق الوارد
                                <span class="badge bg-success badge-pill ml-auto">{{$contact_us->count()}}</span>
                            </a>
                        </li>



                    </ul>
                </div>
            </div>
            <!-- /sub navigation -->


        </div>
        <!-- /sidebar content -->

    </div>
    <!-- /secondary sidebar -->


    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">صندوق البريد</span> - قائمة</h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="{{url('/')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> لوحة التحكم</a>
                        <a href="{{route('contactus.index')}}" class="breadcrumb-item">صندوق الوارد</a>
                        <span class="breadcrumb-item active">قائمة</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">
            <!-- Page header -->


            <!-- Content area -->
            <div class="content">

                <!-- Inner container -->
                <div class="d-md-flex align-items-md-start">

                    <!-- Right content -->
                    <div class="flex-fill overflow-auto">

                        <!-- Single mail -->
                        <div class="card">

                            <!-- Action toolbar -->
                            <div class="navbar navbar-light bg-light navbar-expand-lg py-lg-2 rounded-top">
                                <div class="text-center d-lg-none w-100">
                                    <button type="button" class="navbar-toggler w-100 h-100" data-toggle="collapse" data-target="#inbox-toolbar-toggle-read">
                                        <i class="icon-circle-down2"></i>
                                    </button>
                                </div>

                                <div class="navbar-collapse text-center text-lg-left flex-wrap collapse" id="inbox-toolbar-toggle-read">

                                    <div class="navbar-text ml-lg-auto">{{$contact_us->updated_at->diffForHumans()}}</div>

                                </div>
                            </div>
                            <!-- /action toolbar -->


                            <!-- Mail details -->
                            <div class="card-body">
                                <div class="media flex-column flex-md-row">
                                    <a href="#" class="d-none d-md-block mr-md-3 mb-3 mb-md-0">
											<span class="btn bg-teal-400 btn-icon btn-lg rounded-round">
												<span class="letter-icon"></span>
											</span>
                                    </a>

                                    <div class="media-body">
                                        <h6 class="mb-0">{{$contact_us->subject}}</h6>
                                        <div class="letter-icon-title font-weight-semibold">{{$contact_us->name}} <a href="mailto:{{$contact_us->email}}">&lt;{{$contact_us->email}}&gt;</a></div>
                                    </div>

                                </div>
                            </div>
                            <!-- /mail details -->


                            <!-- Mail container -->
                            <div class="card-body">
                                <div class="overflow-auto mw-100">
                                    <h3>موضوع الرسالة :</h3>
                                    {{$contact_us->message}}
                                </div>
                            </div>
                            <!-- /mail container -->

                        </div>
                        <!-- /single mail -->

                    </div>
                    <!-- /right content -->

                </div>
                <!-- /inner container -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /content area -->


        <!-- Footer -->
        <div class="navbar navbar-expand-lg navbar-light">
            <div class="text-center d-lg-none w-100">
                <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                    <i class="icon-unfold mr-2"></i>
                    Footer
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navbar-footer">
                        <span class="navbar-text">
                          &copy; 2020 - {{date('Y')}}. <a href="{{url('/')}}">جميع الحقوق محفوظة لأكاديمية أزهري</a> من خلال <a href="https://www.linkedin.com/in/baraaphp/" target="_blank">البراء الدوانسي</a>
                        </span>
            </div>
        </div>
        <!-- /footer -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</body>
</html>
