@include('admin-panel.layouts.header')
@inject('request', 'Illuminate\Http\Request')
<body>

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
                        <span class="font-weight-semibold">اخر الأعضاء المسجلين</span>
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
                    </div>

                    <div class="dropdown-content-body dropdown-scrollable">
                        <ul class="media-list">
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
                        </ul>
                    </div>

                    <div class="dropdown-content-footer justify-content-center p-0">
                        <a href="{{route('contactus.index')}}" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="جميع الرسائل"><i class="icon-menu7 d-block top-0"></i></a>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown dropdown-user">
                <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                    <img src="{{asset('admin-panel/global_assets/images/placeholders/placeholder.jpg')}}" class="rounded-circle mr-2" height="34" alt="">
                    <span>{{ Auth::user()->name }}</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item"><i class="icon-user-plus"></i>{{ Auth::user()->name }} </a>
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
                            <a href="#"><img src="{{asset('admin-panel/global_assets/images/placeholders/placeholder.jpg')}}" width="38" height="38" class="rounded-circle" alt=""></a>
                        </div>

                        <div class="media-body">
                            <div class="media-title font-weight-semibold">{{ Auth::user()->name }}</div>
                            <div class="font-size-xs opacity-50">
                                <i class="icon-pin font-size-sm"></i> &nbsp;Santa Ana, CA
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
                            <li class="nav-item"><a href="{{route('class.index')}}" class="nav-link {{ $request->segment(1) == 'class.index' ? 'active active-sub' : '' }}">الصفوف الدراسية</a></li>
                            <li class="nav-item"><a href="{{route('class.create')}}" class="nav-link {{ $request->segment(1) == 'class.create' ? 'active active-sub' : '' }}">إنشاء الصف الدراسية </a></li>
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


{{--
                    <li class="nav-item nav-item-submenu">
                        <a href="{{route('courses.index')}}" class="nav-link"><i class="icon-pencil4"></i> <span>الأختبارات الدراسية</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="الاختبار">
                            <li class="nav-item"><a href="{{route('tests.index')}}" class="nav-link active"> جميع الأختبارات </a></li>
                            <li class="nav-item"><a href="{{route('tests.create')}}" class="nav-link">إنشاء اختبار جديد </a></li>
                        </ul>
                    </li>

                    <li class="nav-item nav-item-submenu">
                        <a href="{{route('questions.index')}}" class="nav-link"><i class="icon-question7"></i> <span>الأسئلة الدراسية</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="الاسئلة">
                            <li class="nav-item"><a href="{{route('questions.index')}}" class="nav-link active"> جميع الأسئلة </a></li>
                            <li class="nav-item"><a href="{{route('questions.create')}}" class="nav-link">إنشاء سؤال جديد </a></li>
                        </ul>
                    </li>

                    <li class="nav-item nav-item-submenu">
                        <a href="{{route('questions_options.index')}}" class="nav-link"><i class="icon-add-to-list"></i> <span>خيارات الأسئلة</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="الاختيارات">
                            <li class="nav-item"><a href="{{route('questions_options.index')}}" class="nav-link active "> جميع خيارات الأسئلة</a></li>
                            <li class="nav-item"><a href="{{route('questions_options.create')}}" class="nav-link">إنشاء اختيار جديد </a></li>
                        </ul>
                    </li>
--}}



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
                </ul>
            </div>
            <!-- /main navigation -->

        </div>
        <!-- /sidebar content -->

    </div>
    <!-- /main sidebar -->
    @yield('content')

    @include('admin-panel.layouts.footer')
