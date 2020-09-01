@extends('layouts.app')


@section('content')


    <!-- Page Title
    ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>أكاديمية أزهري  - جميع الدورات بحسب المواد الدراسية</h1>
            <span>هنا جميع الدورات التي قام الموقع بإنشائها </span>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a></li>
                <li class="breadcrumb-item active" aria-current="page"> المواد الدراسية </li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <!-- Post Content
                ============================================= -->
                <div class="postcontent nobottommargin col_last">

                    <!-- Portfolio Filter
                    ============================================= -->
                    <ul id="portfolio-filter" class="portfolio-filter clearfix" data-container="#portfolio">

                        <li class="activeFilter"><a href="#" data-filter="*">مشاهدة الكل</a></li>
                        @foreach($get_subject as $subject)
                            <li><a href="#" data-filter=".subject{{$subject->id}}">{{$subject->name}}</a></li>
                        @endforeach
                    </ul><!-- #portfolio-filter end -->

                    <div id="portfolio-shuffle" class="portfolio-shuffle" data-container="#portfolio">
                        <i class="icon-random"></i>
                    </div>

                    <div class="clear"></div>

                    <!-- Portfolio Items
                    ============================================= -->
                    <div id="portfolio" class="portfolio grid-container portfolio-3 portfolio-masonry clearfix">
                        @foreach($courses as $course)
                            <article class="portfolio-item subject{{optional($course->subject)->id}} @if($loop->first) wide @endif">
                                <div class="portfolio-image">
                                    <a href="{{route('course.list',$course->id)}}">
                                        <img src="{{asset('website/images/portfolio/masonry/3/1.jpg')}}" alt="Open Imagination">
                                    </a>
                                    <div class="portfolio-overlay">
                                        <a href="{{asset('website/images/portfolio/full/1.jpg')}}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                        <a href="{{route('course.list',$course->id)}}" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="{{route('course.list',$course->id)}}">{{$course->name}}</a></h3>
                                    <span><a href="#">{{$course->category}}</a>, <a href="#">{{optional($course->class)->name}}</a></span>
                                </div>
                            </article>
                        @endforeach



                    </div><!-- #portfolio end -->

                </div><!-- .postcontent end -->

                <!-- Sidebar
                ============================================= -->
                <div class="sidebar nobottommargin">
                    <div class="sidebar-widgets-wrap">

                        <div class="widget clearfix">

                            <h4>Recent Posts</h4>
                            <div id="post-list-footer">

                                <div class="spost clearfix">
                                    <div class="entry-image">
                                        <a href="#" class="nobg"><img src="images/magazine/small/1.jpg" alt=""></a>
                                    </div>
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li>10th July 2014</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="spost clearfix">
                                    <div class="entry-image">
                                        <a href="#" class="nobg"><img src="images/magazine/small/2.jpg" alt=""></a>
                                    </div>
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li>10th July 2014</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="spost clearfix">
                                    <div class="entry-image">
                                        <a href="#" class="nobg"><img src="images/magazine/small/3.jpg" alt=""></a>
                                    </div>
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li>10th July 2014</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="widget clearfix">

                            <h4>Testimonials</h4>
                            <div class="fslider testimonial noborder nopadding noshadow" data-animation="slide" data-arrows="false">
                                <div class="flexslider">
                                    <div class="slider-wrap">
                                        <div class="slide">
                                            <div class="testi-image">
                                                <a href="#"><img src="images/testimonials/3.jpg" alt="Customer Testimonails"></a>
                                            </div>
                                            <div class="testi-content">
                                                <p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
                                                <div class="testi-meta">
                                                    Steve Jobs
                                                    <span>Apple Inc.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="testi-image">
                                                <a href="#"><img src="images/testimonials/2.jpg" alt="Customer Testimonails"></a>
                                            </div>
                                            <div class="testi-content">
                                                <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                                <div class="testi-meta">
                                                    Collis Ta'eed
                                                    <span>Envato Inc.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="testi-image">
                                                <a href="#"><img src="images/testimonials/1.jpg" alt="Customer Testimonails"></a>
                                            </div>
                                            <div class="testi-content">
                                                <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
                                                <div class="testi-meta">
                                                    John Doe
                                                    <span>XYZ Inc.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="widget clearfix">

                            <h4>Instagram Photos</h4>
                            <div id="instagram-photos" class="instagram-photos masonry-thumbs" data-user="5834720953" data-count="16" data-type="user"></div>

                        </div>

                        <div class="widget quick-contact-widget form-widget clearfix">

                            <h4>Quick Contact</h4>
                            <div class="form-result"></div>
                            <form id="quick-contact-form" name="quick-contact-form" action="include/form.php" method="post" class="quick-contact-form nobottommargin">
                                <div class="form-process"></div>

                                <input type="text" class="required sm-form-control input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Full Name" />
                                <input type="text" class="required sm-form-control email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address" />
                                <textarea class="required sm-form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="Message"></textarea>
                                <input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
                                <input type="hidden" name="prefix" value="quick-contact-form-">
                                <button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small button-3d nomargin" value="submit">Send Email</button>
                            </form>

                        </div>

                    </div>
                </div><!-- .sidebar end -->

            </div>

        </div>

    </section><!-- #content end -->
@endsection
