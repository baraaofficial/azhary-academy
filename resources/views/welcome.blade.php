@extends('layouts.app')

@section('title')
    أكاديمية أزهري
@stop

@section('css')
    <meta name="viewport" content="width=device-width, initial-scale=1" />

@stop


@section('content')
    <!-- Content ============================================= -->

    <section id="slider" class="slider-element slider-parallax" style="background-color: #222;">

        <div id="oc-slider" class="owl-carousel carousel-widget" data-margin="0" data-items="1" data-pagi="false" data-loop="true" data-animate-in="rollIn" data-speed="450" data-animate-out="rollOut" data-autoplay="5000">

            <a href="#"><img src="{{asset('website/images/slider/full/1.jpg')}}" alt="Slider"></a>
            <a href="#"><img src="{{asset('website/images/slider/full/2.jpg')}}" alt="Slider"></a>
            <a href="#"><img src="{{asset('website/images/slider/full/3.jpg')}}" alt="Slider"></a>
            <a href="#"><img src="{{asset('website/images/slider/full/4.jpg')}}" alt="Slider"></a>

        </div>

    </section>

    <section id="content">

        <div class="content-wrap">

            <div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0;">
                <div>
                    <div class="container clearfix">
                        <span class="badge badge-danger bnews-title">Breaking News:</span>

                        <div class="fslider bnews-slider nobottommargin" data-speed="800" data-pause="6000" data-arrows="false" data-pagi="false">
                            <div class="flexslider">
                                <div class="slider-wrap">
                                    <div class="slide"><a href="#"><strong>Russia hits back, says US acts like a 'bad surgeon'..</strong></a></div>
                                    <div class="slide"><a href="#"><strong>'Sulking' Narayan Rane needs consolation: Uddhav reacts to Cong leader's attack..</strong></a></div>
                                    <div class="slide"><a href="#"><strong>Rane needs consolation. I pray to God that he gets mental peace in a political party..</strong></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container clearfix">

                <div class="postcontent nobottommargin">



                    <div class="clear"></div>

                    <div class="col_full bottommargin-lg clearfix">

                        <div class="fancy-title title-border">
                            <h3>Technology</h3>
                        </div>

                        <div class="col_one_third">
                            <div class="ipost clearfix">
                                <div class="entry-image">
                                    <a href="#"><img class="image_fade" src="{{asset('website/images/magazine/thumb/11.jpg')}}" alt="Image"></a>
                                </div>
                                <div class="entry-title">
                                    <h3><a href="blog-single.html">Yum, McDonald's apologize as new China food scandal brews</a></h3>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i> 9th Sep 2014</li>
                                    <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 23</a></li>
                                </ul>
                                <div class="entry-content">
                                    <p>Neque nesciunt molestias soluta esse debitis. Magni impedit quae consectetur consequuntur.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col_one_third">
                            <div class="ipost clearfix">
                                <div class="entry-image">
                                    <a href="#"><img class="image_fade" src="{{asset('website/images/magazine/thumb/16.jpg')}}" alt="Image"></a>
                                </div>
                                <div class="entry-title">
                                    <h3><a href="blog-single.html">Halliburton gets boost from rebound in North America drilling</a></h3>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i> 23rd Aug 2014</li>
                                    <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 33</a></li>
                                </ul>
                                <div class="entry-content">
                                    <p>Eaque iusto quod assumenda beatae, nesciunt aliquid. Vel, eos eligendi?</p>
                                </div>
                            </div>
                        </div>

                        <div class="col_one_third col_last">
                            <div class="ipost clearfix">
                                <div class="entry-image">
                                    <a href="#"><img class="image_fade" src="{{asset('website/images/magazine/thumb/13.jpg')}}" alt="Image"></a>
                                </div>
                                <div class="entry-title">
                                    <h3><a href="blog-single.html">China sends spy ship off Hawaii during U.S.-led drills brews</a></h3>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i> 11th Feb 2014</li>
                                    <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
                                </ul>
                                <div class="entry-content">
                                    <p>Magni impedit quae consectetur consequuntur adipisci veritatis modi a, officia cum.</p>
                                </div>
                            </div>
                        </div>

                        <div class="clear"></div>

                    </div>

                    <div class="bottommargin-lg">
                        <img src="{{asset('website/images/magazine/ad.jpg')}}" alt="Ad" class="aligncenter notopmargin nobottommargin">
                    </div>

                    <div class="col_full bottommargin-lg clearfix">

                        <div class="fancy-title title-border">
                            <h3>Entertainment</h3>
                        </div>

                        <div class="col_one_third nobottommargin">
                            <div class="ipost clearfix">
                                <div class="entry-image">
                                    <a href="#"><img class="image_fade" src="{{asset('website/images/magazine/thumb/10.jpg')}}" alt="Image"></a>
                                </div>
                                <div class="entry-title">
                                    <h3><a href="blog-single.html">Wobbly stocks underpin yen and Swiss franc; dollar subdued</a></h3>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i> 17th Jan 2014</li>
                                    <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 50</a></li>
                                </ul>
                                <div class="entry-content">
                                    <p>Neque nesciunt molestias soluta esse debitis. Magni impedit quae consectetur consequuntur.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col_one_third nobottommargin">
                            <div class="ipost clearfix">
                                <div class="entry-image">
                                    <a href="#"><img class="image_fade" src="{{asset('website/images/magazine/thumb/15.jpg')}}" alt="Image"></a>
                                </div>
                                <div class="entry-title">
                                    <h3><a href="blog-single.html">BlackBerry names ex-Sybase executive as chief operating officer</a></h3>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i> 20th Nov 2014</li>
                                    <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
                                </ul>
                                <div class="entry-content">
                                    <p>Eaque iusto quod assumenda beatae, nesciunt aliquid. Vel, eos eligendi?</p>
                                </div>
                            </div>
                        </div>

                        <div class="col_one_third nobottommargin col_last">
                            <div class="ipost clearfix">
                                <div class="entry-image">
                                    <a href="#"><img class="image_fade" src="{{asset('website/images/magazine/thumb/6.jpg')}}" alt="Image"></a>
                                </div>
                                <div class="entry-title">
                                    <h3><a href="blog-single.html">Georgian prime minister fires seven ministers in first reshuffle</a></h3>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i> 10th Dec 2013</li>
                                    <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
                                </ul>
                                <div class="entry-content">
                                    <p>Magni impedit quae consectetur consequuntur adipisci veritatis modi a, officia cum.</p>
                                </div>
                            </div>
                        </div>

                        <div class="clear"></div>

                    </div>


                </div>

                <div class="sidebar nobottommargin col_last">

                    <div class="sidebar-widgets-wrap">



                        </div>

                        <div class="widget widget_links clearfix">

                            <h4>الدورات حسب المواد</h4>
                            @foreach($courses as $course)
                            <div class="col_half nobottommargin @if($loop->first) col_last @endif ">
                                <ul>
                                    <li><a href="#">{{$course->name}}</a></li>

                                </ul>
                            </div>
                            @endforeach


                        </div>


                        <div class="widget clearfix">

                            <div class="tabs nobottommargin clearfix" id="sidebar-tabs">

                                <ul class="tab-nav clearfix">
                                    <li><a href="#tabs-1">Popular</a></li>
                                    <li><a href="#tabs-2">Recent</a></li>
                                    <li><a href="#tabs-3"><i class="icon-comments-alt norightmargin"></i></a></li>
                                </ul>

                                <div class="tab-container">

                                    <div class="tab-content clearfix" id="tabs-1">
                                        <div id="popular-post-list-sidebar">

                                            <div class="spost clearfix">
                                                <div class="entry-image">
                                                    <a href="#" class="nobg"><img class="rounded-circle" src="{{asset('website/images/magazine/small/3.jpg')}}" alt=""></a>
                                                </div>
                                                <div class="entry-c">
                                                    <div class="entry-title">
                                                        <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                                    </div>
                                                    <ul class="entry-meta">
                                                        <li><i class="icon-comments-alt"></i> 35 Comments</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="spost clearfix">
                                                <div class="entry-image">
                                                    <a href="#" class="nobg"><img class="rounded-circle" src="{{asset('website/images/magazine/small/2.jpg')}}" alt=""></a>
                                                </div>
                                                <div class="entry-c">
                                                    <div class="entry-title">
                                                        <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                                    </div>
                                                    <ul class="entry-meta">
                                                        <li><i class="icon-comments-alt"></i> 24 Comments</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="spost clearfix">
                                                <div class="entry-image">
                                                    <a href="#" class="nobg"><img class="rounded-circle" src="{{asset('website/images/magazine/small/1.jpg')}}" alt=""></a>
                                                </div>
                                                <div class="entry-c">
                                                    <div class="entry-title">
                                                        <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                                    </div>
                                                    <ul class="entry-meta">
                                                        <li><i class="icon-comments-alt"></i> 19 Comments</li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-content clearfix" id="tabs-2">
                                        <div id="recent-post-list-sidebar">

                                            <div class="spost clearfix">
                                                <div class="entry-image">
                                                    <a href="#" class="nobg"><img class="rounded-circle" src="{{asset('website/images/magazine/small/1.jpg')}}" alt=""></a>
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
                                                    <a href="#" class="nobg"><img class="rounded-circle" src="{{asset('website/images/magazine/small/2.jpg')}}" alt=""></a>
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
                                                    <a href="#" class="nobg"><img class="rounded-circle" src="{{asset('website/images/magazine/small/3.jpg')}}" alt=""></a>
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
                                    <div class="tab-content clearfix" id="tabs-3">
                                        <div id="recent-post-list-sidebar">

                                            <div class="spost clearfix">
                                                <div class="entry-image">
                                                    <a href="#" class="nobg"><img class="rounded-circle" src="{{asset('website/images/icons/avatar.jpg')}}" alt=""></a>
                                                </div>
                                                <div class="entry-c">
                                                    <strong>John Doe:</strong> Veritatis recusandae sunt repellat distinctio...
                                                </div>
                                            </div>

                                            <div class="spost clearfix">
                                                <div class="entry-image">
                                                    <a href="#" class="nobg"><img class="rounded-circle" src="{{asset('website/images/icons/avatar.jpg')}}" alt=""></a>
                                                </div>
                                                <div class="entry-c">
                                                    <strong>Mary Jane:</strong> Possimus libero, earum officia architecto maiores....
                                                </div>
                                            </div>

                                            <div class="spost clearfix">
                                                <div class="entry-image">
                                                    <a href="#" class="nobg"><img class="rounded-circle" src="{{asset('website/images/icons/avatar.jpg')}}" alt=""></a>
                                                </div>
                                                <div class="entry-c">
                                                    <strong>Site Admin:</strong> Deleniti magni labore laboriosam odio...
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="widget clearfix">

                            <img class="aligncenter" src="{{asset('website/images/magazine/ad.png')}}" alt="">

                        </div>

                        <div class="widget clearfix">
                            <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FEnvato&amp;width=240&amp;height=240&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=499481203443583" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:240px; height:240px;" allowTransparency="true"></iframe>
                        </div>

                    </div>

                </div>

                <div class="clear"></div>

                <div class="fancy-title title-border topmargin">
                    <h3>Other News</h3>
                </div>

                <div id="oc-images" class="owl-carousel image-carousel carousel-widget" data-margin="30" data-nav="false" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-xl="4">

                    <div class="oc-item">
                        <div class="ipost clearfix">
                            <div class="entry-image">
                                <a href="#"><img class="image_fade" src="{{asset('website/images/magazine/thumb/1.jpg')}}" alt="Image"></a>
                            </div>
                            <div class="entry-title">
                                <h4><a href="blog-single.html">A Baseball Team Blew Up A Bunch Of Justin Bieber And Miley Cyrus Merch</a></h4>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> 13th Jun 2014</li>
                                <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 53</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="ipost clearfix">
                            <div class="entry-image">
                                <a href="#"><img class="image_fade" src="{{asset('website/images/magazine/thumb/2.jpg')}}" alt="Image"></a>
                            </div>
                            <div class="entry-title">
                                <h4><a href="blog-single.html">UK government weighs Tesla's Model S for its ??5 million electric vehicle fleet</a></h4>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> 24th Feb 2014</li>
                                <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 17</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="ipost clearfix">
                            <div class="entry-image">
                                <a href="#"><img class="image_fade" src="{{asset('website/images/magazine/thumb/3.jpg')}}" alt="Image"></a>
                            </div>
                            <div class="entry-title">
                                <h4><a href="blog-single.html">MIT's new robot glove can give you extra fingers</a></h4>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> 30th Dec 2014</li>
                                <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="ipost clearfix">
                            <div class="entry-image">
                                <a href="#"><img class="image_fade" src="{{asset('website/images/magazine/thumb/4.jpg')}}" alt="Image"></a>
                            </div>
                            <div class="entry-title">
                                <h4><a href="blog-single.html">Yen dips on modest reduction in risk aversion, markets still wary</a></h4>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> 15th Jan 2014</li>
                                <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 54</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="ipost clearfix">
                            <div class="entry-image">
                                <a href="#"><img class="image_fade" src="{{asset('website/images/magazine/thumb/5.jpg')}}" alt="Image"></a>
                            </div>
                            <div class="entry-title">
                                <h4><a href="blog-single.html">Beyonce Dropped A '50 Shades Of Grey', Teaser On Instagram Last Night</a></h4>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> 27th Jul 2014</li>
                                <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 61</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="ipost clearfix">
                            <div class="entry-image">
                                <a href="#"><img class="image_fade" src="{{asset('website/images/magazine/thumb/6.jpg')}}" alt="Image"></a>
                            </div>
                            <div class="entry-title">
                                <h4><a href="blog-single.html">Want To Know The New 'Star Wars' Plot? Then This Is The Post For You</a></h4>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> 10th Feb 2014</li>
                                <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 34</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="ipost clearfix">
                            <div class="entry-image">
                                <a href="#"><img class="image_fade" src="{{asset('website/images/magazine/thumb/7.jpg')}}" alt="Image"></a>
                            </div>
                            <div class="entry-title">
                                <h4><a href="blog-single.html">Toyotas next minivan will let you shout at your kids without turning around</a></h4>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> 21st Oct 2014</li>
                                <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 11</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="ipost clearfix">
                            <div class="entry-image">
                                <a href="#"><img class="image_fade" src="{{asset('website/images/magazine/thumb/8.jpg')}}" alt="Image"></a>
                            </div>
                            <div class="entry-title">
                                <h4><a href="blog-single.html">You can now listen to headphones through your hoodie</a></h4>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> 20th Nov 2014</li>
                                <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 07</a></li>
                            </ul>
                        </div>
                    </div>

                </div>


                <img src="{{asset('website/images/magazine/ad.jpg')}}" alt="Ad" class="aligncenter topmargin-lg nobottommargin">

            </div>

        </div>

    </section><!-- #content end -->
    @stop

