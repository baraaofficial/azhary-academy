@extends('layouts.app')

@section('title')
    - تواصل معنا
@endsection

@section('css')
    <meta name="description" content="ابق على تواصل معنا " />
    <meta name="keywords" content=" إتصل بنا " />
@endsection
@section('content')

    <!-- Page Title
		============================================= -->
<section id="page-title">

    <div class="container clearfix">
        <h1 title="إتصل بنا">إتصل بنا</h1>
        <span title="ابق على تواصل معنا">ابق على تواصل معنا</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#" title="أكاديمية أزهري - الرئيسية">الرئسية</a></li>
            <li class="breadcrumb-item active" aria-current="page" title="أكاديمية أزهري - إتصل بنا"> إتصل بنا </li>
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
                 <div>
                     @if(session('message') ?? '' )
                         <div class="alert alert-success alert-styled-left alert-arrow-left alert-dismissible">
                             <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                             {{session('message') ?? ''}}
                         </div>

                     @endif
                 </div>
                    <h3 title="راسلنا عبر البريد الإلكتروني">راسلنا عبر البريد الإلكتروني</h3>

                    @include('partials.validation-errors')

                        <div class="form-result"></div>
                        <script>
                            function validateForm() {
                                var name = document.forms["myForm"]["name"].value;
                                var email = document.forms["myForm"]["email"].value;
                                var phone = document.forms["myForm"]["phone"].value;
                                if (name == "") {
                                    alert("الأسم مطلوب");
                                    return false;
                                }
                                if (email == "") {
                                    alert("البريد الألكتروني مطلوب");
                                    return false;
                                }
                                if (phone == "") {
                                    alert("رقم الموبايل مطلوب");
                                    return false;
                                }
                            }
                        </script>
                        <form name="myForm" action="{{route('contact-us.store')}}" onsubmit="return validateForm()" method="post">
                            {{ csrf_field() }}

                            <div class="form-process"></div>

                            <div class="col_one_third">
                                <label for="name">الأسم <small>*</small></label>
                                <input type="text" id="name" name="name" value="" autocomplete="off" class="sm-form-control @error('name') is-invalid @enderror" required />
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col_one_third">
                                <label for="email">البريد الإلكتروني <small>*</small></label>
                                <input type="email" id="email" name="email" value="" autocomplete="off" class="email sm-form-control  @error('email') is-invalid @enderror" required />
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col_one_third col_last">
                                <label for="phone">رقم الموبايل</label>
                                <input type="text" id="phone" name="phone" value="" autocomplete="off" class="sm-form-control  @error('phone') is-invalid @enderror" required />
                                @error('phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="clear"></div>

                            <div class="col_two_third">
                                <label for="subject">موضوع الرسالة <small>*</small></label>
                                <input type="text" id="subject" name="subject" value="" autocomplete="off" class="required sm-form-control @error('subject') is-invalid @enderror" required />
                                @error('subject')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="clear"></div>

                            <div class="col_full">
                                <label for="message">الرسالة <small>*</small></label>
                                <textarea class="required sm-form-control" id="message" name="message" rows="6" cols="30" autocomplete="off"></textarea>
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

                    <abbr title="Phone Number"><strong title="رقم موبايلنا">رقم الموبايل:</strong></abbr>{{$row->phone}}<br>
                    <abbr title="Email Address"><strong title="بريدنا الإلكتروني">البريد الإلكتروني:</strong></abbr> {{$row->mail}}



                    <div class="widget noborder notoppadding">

                        <a href="https://www.facebook.com/{{$row->facebook}}" title="https://www.facebook.com/{{$row->facebook}}" class="social-icon si-small si-dark si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="https://twitter.com/{{$row->twitter}}" title="https://twitter.com/{{$row->twitter}}" class="social-icon si-small si-dark si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>

                        <a href="tel:{{$row->phone}}" title="tel:{{$row->phone}}" class="social-icon si-small si-dark si-call">
                            <i class="icon-call"></i>
                            <i class="icon-call"></i>
                        </a>

                        <a href="mailto:{{$row->mail}}" title="mailto:{{$row->mail}}" class="social-icon si-small si-dark si-email">
                            <i class="icon-email"></i>
                            <i class="icon-email"></i>
                        </a>


                    </div>

                </div><!-- .sidebar end -->

                @endforeach
            </div>

        </div>

    </section><!-- #content end -->
@endsection

@section('script')


@endsection
