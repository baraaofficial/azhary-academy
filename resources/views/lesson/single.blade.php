@extends('layouts.app')

@section('title')
    | {{$lessons->title}}
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('website/css/custom.css')}}" type="text/css" />
    <style>
        .stylish{
            padding: 80px 0;
        }
        .stylish .stylish-btn{
            margin: 30px auto;
            display: block;
            padding: 8px 20px;
            border: 2px solid #fff;
            border-radius: 7px;
            background: transparent;
            outline: none;

        }
        .testimonials .testimonials-desc{
            margin-bottom: 30px;
        }
        .uppercase{
            text-transform:uppercase;
        }
        .head-border::after{
            content: '';
            display: block;
            width: 75px;
            height: 4px;
            background-color: rgba(248, 133, 33, 0.692);
            margin: 20px 0;
        }
        .head-border-center:after{
            content: '';
            display: block;
            width: 75px;
            height: 4px;
            background-color: rgba(248, 133, 33, 0.692);
            margin: 25px auto;
        }
    </style>

@endsection

@section('content')


    <!-- Page Title
		============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>{{$lessons->title}}</h1>
            <div id="portfolio-navigation">
                <a href="#"><i class="icon-angle-left"></i></a>
                <a href="#"><i class="icon-line-grid"></i></a>
                <a href="#"><i class="icon-angle-right"></i></a>
            </div>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <!-- Portfolio Single Video
                ============================================= -->
                <div class="col_two_third portfolio-single-image nobottommargin">
                    <iframe src="https://player.vimeo.com/video/{{$lessons->video}}" width="1000" height="563" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe
                   <br>
                   <br>

                    <div class="stylish">
                        <div class="container">
                            <h2 class="stylish-head  head-border-center uppercase text-center">معلومات عن الدرس :</h2>
                            <p class="testimonials-desc text-center">{!! $lessons->description !!}</p>
                            <script type="">
                                function submitForm(){
                                    document.getElementById('submitForm').submit();
                                }
                            </script>
                            <ul class="portfolio-meta bottommargin">
                                {!! Form::open(['method' => 'post', 'url' => url('download'),'id'=>'submitForm']) !!}
                                {!! Form::hidden('path',$lessons->pdf) !!}
                                {!! Form::hidden('file_name',$lessons->title .'.'. explode('.',$lessons->pdf)[count( explode('.',$lessons->pdf)) - 1]) !!}
                                {!! Form::close() !!}

                                <li><h4> حمل ملف درس {{$lessons->title}} :</h4>
                                    <a href="#" onclick="submitForm()" class="btn btn-secondary btn-sm flift">تحميل الآن</a>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div id="faqs" class="faqs">

                        <div id="faqs-list" class="fancy-title title-bottom-border">
                            <h3>الأسئلة التجريبية :</h3>
                        </div>

                        <ul class="iconlist faqlist">
                            <li><i class="icon-caret-left"></i><strong><a href="#" data-scrollto="#faq-1">{{$lessons->experimental}}</a></strong></li>
                            <li><i class="icon-caret-left"></i><strong><a href="#" data-scrollto="#faq-2">{{$lessons->experimental2}}</a></strong></li>
                            <li><i class="icon-caret-left"></i><strong><a href="#" data-scrollto="#faq-3">{{$lessons->experimental3}}</a></strong></li>
                            <li><i class="icon-caret-left"></i><strong><a href="#" data-scrollto="#faq-4">{{$lessons->experimental4}}</a></strong></li>
                            <li><i class="icon-caret-left"></i><strong><a href="#" data-scrollto="#faq-5">{{$lessons->experimental5}}</a></strong></li>
                            <li><i class="icon-caret-left"></i><strong><a href="#" data-scrollto="#faq-6">{{$lessons->experimental6}}</a></strong></li>
                            <li><i class="icon-caret-left"></i><strong><a href="#" data-scrollto="#faq-7">{{$lessons->experimental7}}</a></strong></li>
                            <li><i class="icon-caret-left"></i><strong><a href="#" data-scrollto="#faq-8">{{$lessons->experimental8}}</a></strong></li>
                            <li><i class="icon-caret-left"></i><strong><a href="#" data-scrollto="#faq-9">{{$lessons->experimental9}}</a></strong></li>
                            <li><i class="icon-caret-left"></i><strong><a href="#" data-scrollto="#faq-10">{{$lessons->experimental10}}</a></strong></li>
                        </ul>

                        <div class="divider"><i class="icon-circle"></i></div>

                        <h3 id="faq-1">{{$lessons->experimental}}</h3>
                        <p>{!! $lessons->answer !!}</p>

                        <div class="divider divider-right"><a href="#" data-scrollto="#faqs-list"><i class="icon-chevron-up"></i></a></div>

                        <h3 id="faq-2">{{$lessons->experimental2}}</h3>
                        <p>{!! $lessons->answer2 !!}</p>

                        <div class="divider divider-right"><a href="#" data-scrollto="#faqs-list"><i class="icon-chevron-up"></i></a></div>

                        <h3 id="faq-3">{{$lessons->experimental3}}</h3>
                        <p>{!! $lessons->answer3 !!}</p>

                        <div class="divider divider-right"><a href="#" data-scrollto="#faqs-list"><i class="icon-chevron-up"></i></a></div>

                        <h3 id="faq-4">{{$lessons->experimental4}}</h3>
                        <p>{!! $lessons->answer4 !!}</p>

                        <div class="divider divider-right"><a href="#" data-scrollto="#faqs-list"><i class="icon-chevron-up"></i></a></div>

                        <h3 id="faq-5">{{$lessons->experimental5}}</h3>
                        <p>{!! $lessons->answer5 !!}</p>

                        <div class="divider divider-right"><a href="#" data-scrollto="#faqs-list"><i class="icon-chevron-up"></i></a></div>

                        <h3 id="faq-6">{{$lessons->experimental6}}</h3>
                        <p>{!! $lessons->answer6 !!}</p>
                        <div class="divider divider-right"><a href="#" data-scrollto="#faqs-list"><i class="icon-chevron-up"></i></a></div>

                        <h3 id="faq-7">{{$lessons->experimental7}}</h3>
                        <p>{!! $lessons->answer7 !!}</p>
                        <div class="divider divider-right"><a href="#" data-scrollto="#faqs-list"><i class="icon-chevron-up"></i></a></div>

                        <h3 id="faq-8">{{$lessons->experimental8}}</h3>
                        <p>{!! $lessons->answer8 !!}</p>

                        <div class="divider divider-right"><a href="#" data-scrollto="#faqs-list"><i class="icon-chevron-up"></i></a></div>

                        <h3 id="faq-9">{{$lessons->experimental9}}</h3>
                        <p>{!! $lessons->answer9 !!}</p>

                        <div class="divider divider-right"><a href="#" data-scrollto="#faqs-list"><i class="icon-chevron-up"></i></a></div>

                        <h3 id="faq-10">{{$lessons->experimental10}}</h3>
                        <p>{!! $lessons->answer10 !!}</p>

                        <div class="divider divider-right"><a href="#" data-scrollto="#faqs-list"><i class="icon-chevron-up"></i></a></div>

                    </div>
                    <!-- Content area -->
                    <div class="content">
                        {!! Form::open(['method' => 'POST', 'route' => ['lesson.store']]) !!}
                        @if(count($questions) > 0)
                            <?php $i = 1; ?>
                            @foreach($questions as $question)
                                @if ($i > 1) <hr /> @endif

                            <!-- Table components -->
                                <div class="card">
                                    <div class="card-header header-elements-inline">
                                        <h5 class="card-title">السؤال  {{ $i }} </h5>
                                        <div class="header-elements">
                                            <div class="list-icons">
                                                <a class="list-icons-item" data-action="collapse"></a>
                                                <a class="list-icons-item" data-action="reload"></a>
                                                <a class="list-icons-item" data-action="remove"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <strong><br />{!! nl2br($question->question_text) !!}</strong>
                                        @if ($question->code_snippet != '')
                                            <div class="code_snippet">{!! $question->code_snippet !!}</div>
                                        @endif
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-lg">
                                            <tbody>
                                            <input type="hidden" name="questions[{{ $i }}]" value="{{ $question->id }}">
                                            @foreach($question->options as $option)
                                                <tr class="table-border-double table-active">
                                                    <th colspan="3"> - -</th>
                                                </tr>

                                                <tr>
                                                    <td>{{ $option->option }}</td>
                                                    <td>
                                                        <div class="form-check form-check-inline form-check-right">
                                                            <label class="form-check-label">


                                                                <input type="radio"  value="{{ $option->id }}" class="form-check-input" name="answers[{{ $question->id }}]">
                                                            </label>

                                                        </div>

                                                    </td>
                                                </tr>

                                            @endforeach


                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <?php $i++; ?>
                            @endforeach
                        @endif
                        <br>
                        <button type="submit" class="btn btn-success">أجب</button>

                    {!! Form::close() !!}
                    <!-- /table components -->
                    <!-- Comments
                    ============================================= -->
                    <div id="comments" class="clearfix">

                        <h3 id="comments-title"><span>{{$comments->count()}}</span> التعليقات </h3>

                        <!-- Comments List
                        ============================================= -->
                        <ol class="commentlist clearfix">

                            <li class="comment even thread-even depth-1" id="li-comment-1">
                                @foreach($comments as $comment)

                                <div id="comment" class="comment-wrap clearfix">

                                    <div class="comment-meta">

                                        <div class="comment-author vcard">
                                            <span class="comment-avatar clearfix">
                                            <img alt='' src='https://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' class='avatar avatar-60 photo avatar-default' height='60' width='60' /></span>
                                        </div>

                                    </div>

                                    <div class="comment-content clearfix">

                                        <div class="comment-author">{{ $comment->user->name }}<span><a href="#" title="Permalink to this comment"> {{$comment->updated_at->diffForHumans()}} </a></span></div>

                                        <p>{!!  $comment->comment !!}</p>
                                        @if(auth()->user())
                                            @if((auth()->user()->group == 'admin') || auth()->user()->id == $comment->user->id )
                                                <a href="" onclick="$(this).next('div').slideToggle(1000);return false;">تعديل</a>
                                                <div style="display: none">
                                                    <form action="{{route('comments.commentUpdate' , ['id' =>$comment->id ])}}" method="post">
                                                        {{ csrf_field() }}
                                                        <div class="form-group">
                                                            <textarea name="comment"  class="form-control" cols="30" rows="10">{!!  $comment->comment !!} </textarea>
                                                        </div>
                                                        <button class="button button-3d button-rounded button-green"><i class="icon-repeat"></i>تعديل التعليق</button>
                                                    </form>
                                                </div>

                                                <a class='comment-reply-link' href='{{route('comment.delete', ['id' => $comment->id])}}}'><i class="icon-line-trash"></i></a>

                                            @endif
                                        @endif


                                    </div>

                                    <div class="clear"></div>

                                </div>
                                @endforeach


                            </li>


                        </ol><!-- .commentlist end -->

                        <div class="clear"></div>

                        <!-- Comment Form
                        ============================================= -->
                        <div id="respond" class="clearfix">

                            <h3>إترك <span>تعليقك </span></h3>

                            <form class="clearfix" action="{{route('comments.commentStore',['id' => $lessons->id])}}" method="post" id="comments">
                                {{ csrf_field() }}

                                <div class="clear"></div>

                                <div class="col-full">
                                    <textarea name="comment" id="website-cost-message" class="form-control" cols="30" rows="10"></textarea>
                                </div>

                                <br>
                                <div class="col_full nobottommargin">
                                    <button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d nomargin">اترك تعليقك</button>
                                </div>

                            </form>

                        </div><!-- #respond end -->

                    </div><!-- #comments end -->
                </div><!-- .portfolio-single-image end -->
                <!-- Content
                ============================================= -->




                <div class="clear"></div>


            </div>

        </div>

    </section><!-- #content end -->
@endsection
@section('script')
    <script src="https://player.vimeo.com/api/player.js"></script>
    <!-- Range Slider Plugin -->
    <script src="{{asset('website/js/components/rangeslider.min.js')}}"></script>
    <!-- TinyMCE Plugin -->
    <script src="{{asset('website/js/components/tinymce/tinymce.min.js')}}"></script>


    <script>
        jQuery(document).ready( function(){

            var pricingRESPONSIVE = 0,
                pricingRETINA = 0,
                pricingWEBTYPE = 0,
                pricingDESIGN = 0,
                pricingPAGES = 0,
                pricingCMS = 0,
                pricingSEO = 1,
                pricingGA = 0,
                pricingURGENT = 0,
                elementPrice = $("#website-cost-price"),
                elementResponsive = $( 'input[name="website-cost-responsive"]' ),
                elementRetina = $( 'input[name="website-cost-retina"]' ),
                elementWebType = $( 'input[name="website-cost-type"]' ),
                elementDesign = $( 'input[name="website-cost-design"]' ),
                elementPAGES = $(".website-pages"),
                elementCMS = $("input[name='website-cost-cms']"),
                elementGA = $("input[name='website-cost-google-analytics']"),
                elementUrgent = $("input[name='website-cost-before-30-days']"),
                elementSEO = $(".website-seo");


            elementResponsive.on( 'change', function(){
                pricingRESPONSIVE = $(this).attr('data-price');
                calculatePrice( pricingRESPONSIVE, pricingRETINA, pricingWEBTYPE, pricingDESIGN, pricingPAGES, pricingCMS, pricingSEO, pricingGA, pricingURGENT );
            });

            elementRetina.on( 'change', function(){
                pricingRETINA = $(this).attr('data-price');
                calculatePrice( pricingRESPONSIVE, pricingRETINA, pricingWEBTYPE, pricingDESIGN, pricingPAGES, pricingCMS, pricingSEO, pricingGA, pricingURGENT );
            });

            elementWebType.on( 'change', function(){
                pricingWEBTYPE = $(this).attr('data-price');
                calculatePrice( pricingRESPONSIVE, pricingRETINA, pricingWEBTYPE, pricingDESIGN, pricingPAGES, pricingCMS, pricingSEO, pricingGA, pricingURGENT );
            });

            elementDesign.on( 'change', function(){
                pricingDESIGN = $(this).attr('data-price');
                calculatePrice( pricingRESPONSIVE, pricingRETINA, pricingWEBTYPE, pricingDESIGN, pricingPAGES, pricingCMS, pricingSEO, pricingGA, pricingURGENT );
            });

            elementPAGES.ionRangeSlider({
                min: 10,
                max: 100,
                from: 10,
                step: 10,
                max_postfix: "+",
                onStart: function(data){
                    pricingPAGES = data.from;
                    console.log(data);
                }
            });

            elementPAGES.on( 'change', function(){
                pricingPAGES = $(this).prop('value');
                calculatePrice( pricingRESPONSIVE, pricingRETINA, pricingWEBTYPE, pricingDESIGN, pricingPAGES, pricingCMS, pricingSEO, pricingGA, pricingURGENT );
            });

            elementCMS.on( 'change', function(){
                pricingCMS = $(this).attr('data-price');
                calculatePrice( pricingRESPONSIVE, pricingRETINA, pricingWEBTYPE, pricingDESIGN, pricingPAGES, pricingCMS, pricingSEO, pricingGA, pricingURGENT );
            });

            elementSEO.ionRangeSlider({
                min: 0,
                max: 210,
                from: 0,
                step: 30,
                max_postfix: " Keywords",
                onStart: function(data){
                    pricingSEO = data.from;
                    console.log(data);
                }
            });

            elementSEO.on( 'onStart change', function(){
                pricingSEO = $(this).prop('value');
                calculatePrice( pricingRESPONSIVE, pricingRETINA, pricingWEBTYPE, pricingDESIGN, pricingPAGES, pricingCMS, pricingSEO, pricingGA, pricingURGENT );
            });

            elementGA.on( 'change', function(){
                pricingGA = $(this).attr('data-price');
                calculatePrice( pricingRESPONSIVE, pricingRETINA, pricingWEBTYPE, pricingDESIGN, pricingPAGES, pricingCMS, pricingSEO, pricingGA, pricingURGENT );
            });

            elementUrgent.on( 'change', function(){
                pricingURGENT = $(this).attr('data-price');
                calculatePrice( pricingRESPONSIVE, pricingRETINA, pricingWEBTYPE, pricingDESIGN, pricingPAGES, pricingCMS, pricingSEO, pricingGA, pricingURGENT );
            });

            calculatePrice( pricingRESPONSIVE, pricingRETINA, pricingWEBTYPE, pricingDESIGN, pricingPAGES, pricingCMS, pricingSEO, pricingGA, pricingURGENT );

            function calculatePrice( responsive, retina, webtype, design, pages, cms, seo, ga, urgent ) {
                var TotalPriceValue = Number(responsive) + Number(retina) + Number(webtype) + Number(design) + ( Number(pages) * 100 ) + Number(cms) + ( Number(seo) * 100 ) + Number(ga) + Number(urgent);
                jQuery('.responsive-value').html( '$'+pricingRESPONSIVE );
                jQuery('.retina-value').html( '$'+pricingRETINA );
                jQuery('.website-type-value').html( '$'+pricingWEBTYPE );
                jQuery('.design-value').html( '$'+pricingDESIGN );
                jQuery('.pages-value').html('$'+pricingPAGES * 100);
                jQuery('.cms-value').html('$'+pricingCMS);
                jQuery('.seo-value').html('$'+pricingSEO  * 100);
                jQuery('.google-analytics-value').html('$'+pricingGA);
                jQuery('.urgent-value').html('$'+pricingURGENT);
                jQuery('.total-price').html( '$'+TotalPriceValue );
                elementPrice.val( TotalPriceValue ).change();
            }

            $('#website-cost').on( 'formSubmitSuccess', function(){
                $('.responsive-value, .retina-value, .website-type-value, .design-value, .pages-value, .cms-value, .google-analytics-value, .urgent-value, .total-price' ).html( '$0' );
            });

            tinymce.init({
                selector: '#website-cost-message',
                menubar: false,
                setup: function(editor) {
                    editor.on('change', function(e) {
                        editor.save();
                    });
                }
            });

        });
    </script>
    <script>
        $(document).ready(function () {

            if ($("#datetimepicker").length != 0) {
                $('#datetimepicker').datetimepicker({
                    icons: {
                        time: "fa fa-clock-o",
                        date: "fa fa-calendar",
                        up: "fa fa-chevron-up",
                        down: "fa fa-chevron-down",
                        previous: 'fa fa-chevron-left',
                        next: 'fa fa-chevron-right',
                        today: 'fa fa-screenshot',
                        clear: 'fa fa-trash',
                        close: 'fa fa-remove'
                    }
                });
            }

            function scrollToDownload() {
                if ($('.section-download').length != 0) {
                    $("html, body").animate({
                        scrollTop: $('.section-download').offset().top
                    }, 1000);
                }
            }
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
@endsection

