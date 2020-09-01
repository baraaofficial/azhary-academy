@extends('layouts.app')

@section('title')
    | تواصل معنا
@endsection
@section('content')

    <!-- Page Title
		============================================= -->
<section id="page-title">

    <div class="container clearfix">
        <h1>الإتصال</h1>
        <span>ابق على تواصل معنا</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">الرئسية</a></li>
            <li class="breadcrumb-item active" aria-current="page">تواصل معنا</li>
        </ol>
    </div>

</section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <!-- Postcontent
                ============================================= -->
                <div class="postcontent nobottommargin">
                    @if(session('message') ?? '' )
                        <div class="alert alert-success alert-styled-left alert-arrow-left alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                            {{session('message') ?? ''}}
                        </div>
                    @elseif(session('delete') ?? '' )

                        <div class="alert alert-danger alert-styled-left alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                            {{session('delete') ?? ''}}
                        </div>
                    @endif
                    <h3>راسلنا عبر البريد الإلكتروني</h3>
                        @include('admin-panel.partials.validation-errors')


                        <div class="form-result"></div>

                        <form action="{{route('contact-us.store')}}" method="post">
                            {{ csrf_field() }}

                            <div class="form-process"></div>

                            <div class="col_one_third">
                                <label for="name">الأسم <small>*</small></label>
                                <input type="text" id="name" name="name" value="" class="sm-form-control required" />
                            </div>

                            <div class="col_one_third">
                                <label for="email">البريد الإلكتروني <small>*</small></label>
                                <input type="email" id="email" name="email" value="" class="required email sm-form-control" />
                            </div>

                            <div class="col_one_third col_last">
                                <label for="phone">رقم الموبايل</label>
                                <input type="text" id="phone" name="phone" value="" class="sm-form-control" />
                            </div>

                            <div class="clear"></div>

                            <div class="col_two_third">
                                <label for="subject">موضوع الرسالة <small>*</small></label>
                                <input type="text" id="subject" name="subject" value="" class="required sm-form-control" />
                            </div>


                            <div class="clear"></div>

                            <div class="col_full">
                                <label for="message">الرسالة <small>*</small></label>
                                <textarea class="required sm-form-control" id="message" name="message" rows="6" cols="30"></textarea>
                            </div>

                            <div class="col_full">
                                <button class="button nomargin" type="submit" value="submit">إرسال الرسالة</button>
                            </div>

                        </form>

                </div><!-- .postcontent end -->

                <!-- Sidebar
                ============================================= -->
                @foreach($contact as $row)
                <div class="sidebar col_last nobottommargin">

                    <abbr title="Phone Number"><strong>رقم الموبايل:</strong></abbr>{{$row->phone}}<br>
                    <abbr title="Email Address"><strong>البريد الإلكتروني:</strong></abbr> {{$row->mail}}



                    <div class="widget noborder notoppadding">

                        <a href="#" class="social-icon si-small si-dark si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-dark si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>


                    </div>

                </div><!-- .sidebar end -->

                @endforeach
            </div>

        </div>

    </section><!-- #content end -->
@endsection
