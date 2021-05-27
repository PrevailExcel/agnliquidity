@extends('website.master')

@section('title')
    AGN Liquidity
@endsection
@section('description')
    Invest in Naira, Bitcoin or Agricoin and get amazing returns as you cashout out every month with.
@endsection

@section('content')
<!-- Hero Section
====================================== -->
<section id="slider" class="slider slide-overlay-black no-bullets">
	<!-- START REVOLUTION SLIDER 5.0 -->
	<div class="rev_slider_wrapper">
		<div id="slider1" class="rev_slider"  data-version="5.0">
			<ul>
                <!-- slide 1 -->
				<li data-transition="zoomout"
					data-slotamount="default"
					data-easein="Power4.easeInOut"
					data-easeout="Power4.easeInOut"
					data-masterspeed="200">
					<!-- MAIN IMAGE -->
					<img src="{{ asset('assets/images/sliders/slide-bg/9.jpg') }}" alt="Slide Background Image"  width="1920" height="1280">
					<!-- LAYER NR. 1 -->
					<div class="tp-caption"
				        data-x="['left','left','left','left']" data-hoffset="['15','15','30','30']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-80','-160']"
						data-fontsize="['60', '50', '40', '30']"
                        data-lineheight="['60','60','60','60']"
						data-whitespace="nowrap"
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
						data-splitin="none"
						data-splitout="none"
						data-responsive_offset="on">
 						<div class="slide--headline">AGN Liquidity<br>
                         Trade / <span style="color: #79ac36;">Invest</span> / Spend.</div>
					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption"
				        data-x="['left','left','left','left']" data-hoffset="['15','15','30','30']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['40','40','40','40']"
                        data-fontsize="['16','16','16','12']"
                        data-lineheight="['25','25','25','25']"
						data-whitespace="nowrap"
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":1750,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
						data-splitin="none"
						data-splitout="none"
						data-responsive_offset="on">
 			            <div class="slide--bio">Trade/Invest/Spend your Agricoin with industry-leading liquidity<br>
                          with 30% ROI when you invest with Bitcoin or Naira<br> 
                           And 50% when you invest with Agricoin.</div>
                    </div>
					<!-- LAYER NR. 3 -->
					<div class="tp-caption"
				        data-x="['left','left','left','left']" data-hoffset="['15','15','30','30']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['125','125','165','300']"
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":2000,"speed":1000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						data-splitin="none"
						data-splitout="none"
						data-responsive_offset="on">
						<div class="slide-action">
							<a class="btn btn--primary btn--rounded mr-30" href="/register">Sign Up</a>
							<a class="btn btn--white btn--bordered btn--rounded " href="/login">Login</a>
 						</div>
				    </div>
				</li>

				<!-- slide 2 -->
                <li data-transition="boxslide"
                    data-slotamount="default"
					data-easein="Power4.easeInOut"
					data-easeout="Power4.easeInOut"
					data-masterspeed="2000">
					<!-- MAIN IMAGE -->
					<img src="{{ asset('assets/images/sliders/slide-bg/10.jpg') }}" alt="Slide Background Image"  width="1920" height="1280">
					<!-- LAYER NR. 1 -->
					<div class="tp-caption"
				        data-x="['left','left','left','left']" data-hoffset="['15','15','30','30']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-115','-95','-90','-40']"
                        data-fontsize="['16','16','16','12']"
                        data-lineheight="['25','25','25','25']"
						data-whitespace="nowrap"
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":750,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'						data-splitin="none"
						data-splitout="none"
						data-responsive_offset="on">
 						<div class="slide--subheadline">Instant Withdrawals </div>
 					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption"
				        data-x="['left','left','left','left']" data-hoffset="['15','15','30','30']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-13','-13','-13','10']"
						data-fontsize="['60', '50', '40', '30']"
                        data-lineheight="['60','60','60','60']"
						data-width="none"
						data-height="none"
						data-transform_idle="o:1;"
                        data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
 						data-splitin="none"
						data-splitout="none"
						data-responsive_offset="on">
 						<div class="slide--headline">Get paid in Dollars or with bitcoin, <br>Whatever you want goes.</div>
  					</div>

					<!-- LAYER NR. 3 -->
					<div class="tp-caption"
				        data-x="['left','left','left','left']" data-hoffset="['15','15','30','30']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['90','90','80','80']"
						data-fontsize="['16', '16', '16', '12']"
                        data-lineheight="['25','25','25','25']"
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":1250,"speed":1500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						data-splitin="none"
						data-splitout="none"
						data-responsive_offset="on">
 						<div class="slide--bio">What are you waiting for?</div>
 					</div>

					<!-- LAYER NR. 4 -->
					<div class="tp-caption"
				        data-x="['left','left','left','left']" data-hoffset="['15','15','30','30']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['160','160','160','180']"
						data-width="none"
						data-height="none"
						data-whitespace="nowrap"
                        data-frames='[{"delay":150,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'						data-splitin="none"
						data-splitout="none"
						data-responsive_offset="on"
						>
						<div class="slide-action">
							<a class="btn btn--white btn--bordered btn--rounded" href="/register">Get Started</a>
 						</div>
					</div>
				</li>

				<!-- slide 3 -->
                <li data-transition="scaledownfromleft"
                    data-slotamount="default"
					data-easein="Power4.easeInOut"
					data-easeout="Power4.easeInOut"
					data-masterspeed="2000">
 					<!-- MAIN IMAGE -->
					<img src="{{ asset('assets/images/sliders/slide-bg/3.jpg') }}" alt="Slide Background Image"  width="1920" height="1280">
					<!-- LAYER NR. 1 -->
					<div class="tp-caption"
				        data-x="['left','left','left','left']" data-hoffset="['15','15','30','30']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-110','-100','-90','-40']"
                        data-fontsize="['16','16','16','12']"
                        data-lineheight="['25','25','25','25']"
						data-whitespace="nowrap"
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'						data-splitout="none"
						data-responsive_offset="on">
 						<div class="slide--subheadline">Advertise with us and reach your audience with ease.</div>
 					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption"
				        data-x="['left','left','left','left']" data-hoffset="['15','15','30','30']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-13','-13','-13','10']"
						data-fontsize="['60', '50', '40', '30']"
                        data-lineheight="['60','60','60','60']"
						data-width="none"
						data-height="none"
						data-transform_idle="o:1;"
                        data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
 						data-splitin="none"
						data-splitout="none"
						data-responsive_offset="on">
 						<div class="slide--headline">There's no time to waste<br>Earn in crypto - The Future of Finance</div>
  					</div>

					<!-- LAYER NR. 3 -->
					<div class="tp-caption"
				        data-x="['left','left','left','left']" data-hoffset="['15','15','30','30']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['90','90','80','80']"
						data-fontsize="['16', '16', '16', '12']"
                        data-lineheight="['25','25','25','25']"
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":1250,"speed":1500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						data-splitin="none"
						data-splitout="none"
						data-responsive_offset="on">
 						<div class="slide--bio">Get Your Coupon Code</div>
 					</div>

					<!-- LAYER NR. 4 -->
					<div class="tp-caption"
				        data-x="['left','left','left','left']" data-hoffset="['15','15','30','30']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['160','160','160','180']"
						data-width="none"
						data-height="none"
						data-whitespace="nowrap"
                        data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]'
						data-splitin="none"
						data-splitout="none"
						data-responsive_offset="on"
						>
						<div class="slide-action">
							<a class="btn btn--white btn--bordered btn--rounded" href="/register">Sign Up</a>
 						</div>
					</div>
				</li>

			</ul>
		</div>
		<!-- END REVOLUTION SLIDER -->
	</div>
	<!-- END OF SLIDER WRAPPER -->
</section>
<!-- #hero end -->
<!-- Clients #5
============================================= -->
<section id="clients5" class="clients clients-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 wow fadeIn" data-wow-delay="100ms">
                <div class="carousel owl-carousel" data-slide="6" data-slide-rs="2" data-autoplay="false" data-nav="false" data-dots="false" data-space="20" data-loop="true" data-speed="800">
                    <!-- Client #1 -->
                    <div class="client">
                        <img class="center-block" src="{{ asset('assets/images/clients/7.png') }}" alt="fancy img">
                    </div>
                    <!-- .client end -->

                    <!-- Client #2 -->
                    <div class="client">
                        <img class="center-block" src="{{ asset('assets/images/clients/8.png') }}" alt="fancy img">
                    </div>
                    <!-- .client end -->

                    <!-- Client #3 -->
                    <div class="client">
                        <img class="center-block" src="{{ asset('assets/images/clients/9.png') }}" alt="fancy img">
                    </div>
                    <!-- .client end -->

                    <!-- Client #4 -->
                    <div class="client">
                        <img class="center-block" src="{{ asset('assets/images/clients/10.png') }}" alt="fancy img">
                    </div>
                    <!-- .client end -->

                    <!-- Client #5 -->
                    <div class="client">
                        <img class="center-block" src="{{ asset('assets/images/clients/11.png') }}" alt="fancy img">
                    </div>
                    <!-- .client end -->

                    <!-- Client #6 -->
                    <div class="client">
                        <img class="center-block" src="{{ asset('assets/images/clients/12.png') }}" alt="fancy img">
                    </div>
                    <!-- .client end -->
                </div>
            </div>
            <!-- .col-lg-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #clients5 end -->

<!-- about #5
============================================= -->
<section id="about5" class="about about-2 about-5 pb-0">
    <div class="container">
        <div class="row clearfix">
            <div class="col-sm-12 col-md-12 col-lg-6 wow fadeInLeft" data-wow-delay="100ms">
                <div class="heading heading-1 ">
                    <p class="heading--subtitle">Get to know us</p>
                    <h2 class="heading--title medium">Who We Are</h2>
                    <p class="heading--desc">AGN liquidity is Agrichainx protocol for incentivized liquidity & synthetic assets. 
                    This provides community-governed and programmable token emissions functions to incentivize the formation of deep liquidity pools. 
                    This strong base of liquidity will be utilized to provide asset swaps, synthetic token generation, lending, derivatives and exchange. 
                    Binance Smart Chain was chosen as the protocol's home to allow for near-instant settlement and extremely low gas fees.
                    </p>
                </div>
                <a href="/about" class="btn btn--primary btn--rounded mb-50-sm mb-50-xs">More About Us</a>
            </div>
            <!-- .col-lg-6 end -->
            <div class="col-sm-12 col-md-12 col-lg-6 wow fadeInRight" data-wow-delay="100ms">
                <div class="about--img">
                    <div class="video-6 ">
                        <div class="video--content text-center">
                            <img src="{{ asset('assets/images/video/1.jpg') }}" alt="Background" />
                            <div class="video-overlay">
                                <div class="video--button">
                                    <a class="popup-video" href="#">
                                        <span class="btn--animation"></span>
                                        <i class="fa fa-play"></i>
                                        <div>All About Agrichainx</div>
                                    </a>
                                    <!-- .video-player end -->
                                </div>
                            </div>
                        </div>
                        <!-- .video-content end -->
                    </div>
                </div>

            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #about5 end -->

<!-- Counter #1
============================================= -->
<section id="counter1" class="counter counter-1">
    <div class="container">
        <div class="row">
            <!-- count #1 -->
            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                <div class="count-box text-center">
                    <span class="counting">120,538</span><b>+</b>
                    <div class="count-title">Community</div>
                </div>
            </div>
            <!-- .col-md-3 end -->

            <!-- count #2 -->
            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                <div class="count-box text-center">
                    <span class="counting">83,124</span><b>+</b>
                    <div class="count-title">Investors</div>
                </div>
            </div>
            <!-- .col-md-3 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #counter1 end -->

<!-- featured #8
============================================= -->
<section id="featured8" class="featured-7 featured-8 text-center bg-overlay bg-overlay-dark9">
    <div class="bg-section">
        <img src="{{ asset('assets/images/background/10.jpg') }}" alt="Background" />
    </div>
    <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="heading heading-5 wow fadeIn" data-wow-delay="100ms">
                            <h2 class="heading--title color-white">    <img src="{{asset('asset/images/favicon.ico')}}" height="90" width="90"> Agrichainx - For the Community. By the Community.</h2>
                        </div>
                        <a href="/register" class="btn btn--primary btn--rounded wow fadeInUp" data-wow-delay="100ms">Get Started Now</a>
                    </div>
                    <!-- .col-lg-12 end -->
                </div>
                <!-- .row end -->

            </div>
            <!-- .col-lg-10 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container -->
</section>
<!-- #featured8 end -->

<section id="featured2" class="featured featured-2 pb-50 bg-gray">
    <div class="container">
        <div class="row">
            <!-- Feature Card #1 -->
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="feature-card">
                    <div class="feature-card-icon">
                        <i class="icon-lock"></i>
                    </div>
                    <div class="feature-card-content">
                        <h3 class="feature-card-title">Incentivized liquidity</h3>
                        <p class="feature-card-desc">Incentivized liquidity pools, driving on-market capital formation</p>
                    </div>
                </div>
            </div><!-- .col-lg-3 end -->
            <!-- Feature Card #2 -->
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="feature-card">
                    <div class="feature-card-icon">
                        <i class="icon-search"></i>
                    </div>
                    <div class="feature-card-content">
                        <h3 class="feature-card-title">synthetic assets</h3>
                        <p class="feature-card-desc">The Agrichainx Protocol allows the generation of synthetic assets value by its own liquidity pools.</p>
                    </div>
                </div>
            </div><!-- .col-lg-3 end -->
            <!-- Feature Card #3 -->
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="feature-card">
                    <div class="feature-card-icon">
                        <i class="icon-puzzle"></i>
                    </div>
                    <div class="feature-card-content">
                        <h3 class="feature-card-title">Reward Stream</h3>
                        <p class="feature-card-desc">Reward Stream: A programmable incentive token with multiple incentive streams.</p>
                    </div>
                </div>
            </div><!-- .col-lg-3 end -->
            <!-- Feature Card #4 -->
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="feature-card">
                    <div class="feature-card-icon">
                        <i class="icon-recycle"></i>
                    </div>
                    <div class="feature-card-content">
                        <h3 class="feature-card-title">Incentive Emissions</h3>
                        <p class="feature-card-desc">Incentive Emissions: Monthly liquidity incentives beginning at 30%</p>
                    </div>
                </div>
            </div><!-- .col-lg-3 end -->

        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>

<section id="testimonial2" style="background:url({{asset("assets/images/testimonial/b.jpg")}}) center" class="testimonial testimonial-2 pb-90">
    <div class="container">  <h3 class="text-center heading--title medium">Testimonials</h3>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 wow fadeInUp" data-wow-delay="100ms">
                <div class="carousel owl-carousel" data-slide="2" data-slide-rs="1" data-autoplay="true" data-nav="false" data-dots="false" data-space="20" data-loop="true" data-speed="800">
                    <!-- Testimonial #1 -->
                    <div class="testimonial-panel">
                        <div class="testimonial--icon"></div>
                        <!-- .testimonial-icon end -->
                        <div class="testimonial--body">
                            <p>The best Investment platform ever. Sure cashout every month. The process was easy to understand.</p>
                        </div>
                        <!-- .testimonial-body end -->

                        <div class="testimonial--meta">
                            <div class="testimonial--meta-img">
                                <img src="{{ asset('assets/images/testimonial/2.png') }}" alt="Testimonial Author">
                            </div>
                            <div class="testimonial--meta-content">
                                <h4>Richard Hendrick</h4>
                                <p>Agricoin Agency</p>
                            </div>
                        </div>
                        <!-- .testimonial-meta end -->
                    </div>
                    <!-- .testimonial-panel end -->

                    <!-- Testimonial #2 -->
                    <div class="testimonial-panel">
                        <div class="testimonial--icon"></div>
                        <!-- .testimonial-icon end -->
                        <div class="testimonial--body">
                            <p>With there wide range of members, our product was able to skyrocket in sales. And we have still benefited from the invesmtnt itself.</p>
                        </div>
                        <!-- .testimonial-body end -->

                        <div class="testimonial--meta">
                            <div class="testimonial--meta-img">
                                <img src="{{ asset('assets/images/testimonial/1.png') }}" alt="Testimonial Author">
                            </div>
                            <div class="testimonial--meta-content">
                                <h4>Ahmed Hassan</h4>
                                <p>Investor</p>
                            </div>
                        </div>
                        <!-- .testimonial-meta end -->
                    </div>
                    <!-- .testimonial-panel end -->

                    <!-- Testimonial #3 -->
                    <div class="testimonial-panel">
                        <div class="testimonial--icon"></div>
                        <!-- .testimonial-icon end -->
                        <div class="testimonial--body">
                            <p>Highly recommended & great experience. The process was easy to understand. Their team of dedicated and supportive staff create dynamic.</p>
                        </div>
                        <!-- .testimonial-body end -->

                        <div class="testimonial--meta">
                            <div class="testimonial--meta-img">
                                <img src="{{ asset('assets/images/testimonial/3.png') }}" alt="Testimonial Author">
                            </div>
                            <div class="testimonial--meta-content">
                                <h4>Fouad badawy</h4>
                                <p>Tie Labs Inc</p>
                            </div>
                        </div>
                        <!-- .testimonial-meta end -->
                    </div>
                    <!-- .testimonial-panel end -->
                </div>
            </div>
            <!-- .col-lg-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #testimonial2 end -->


<!-- Blog Grid
======================================= -->
<section id="blog" class="blog blog-grid">
    <div class="container">
        <div class="row">
            <!-- Blog Entry #1 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="blog-entry">
                    <div class="entry--img">
                        <a href="#">
                            <img src="assets/images/blog/grid/1.jpg" alt="entry image" />
                            <div class="entry--overlay"><span class="text-center">Blockchain-based Mobile Payments Service  by Gates</span></div>
                        </a>
                    </div><!-- .entry-img end -->
                    <div class="entry--content">
                        <div class="entry--date"> Mar 27, 2021</div>
                        <div class="entry--meta">
                            <a href="#">Crypto News</a><a href="#">Apps</a>
                        </div>
                        <div class="entry--title">
                            <h4><a href="#">Blockchain-based Mobile Payments Service by Gates</a></h4>
                        </div>
                        <div class="entry--bio">
                            The Bill and Melinda Gates Foundation are introducing an open-source software to facilitate the creation of payment platforms for developing economies...
                        </div>
                    </div>
                    <!-- .entry-content end -->
                </div>
                <!-- .blog-entry end -->
            </div>
            <!-- .col-lg-4 end -->

            <!-- Blog Entry #2 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="blog-entry">
                    <div class="entry--img">
                        <a href="#">
                            <img src="assets/images/blog/grid/2.jpg" alt="entry image" />
                            <div class="entry--overlay"> </div>
                        </a>
                    </div><!-- .entry-img end -->
                    <div class="entry--content">
                        <div class="entry--date"> Mar 27, 2021</div>
                        <div class="entry--meta">
                            <a href="#">Cryptocurrency</a><a href="#">Tech</a>
                        </div>
                        <div class="entry--title">
                            <h4><a href="#">Governments Throwing Resources at Technology!</a></h4>
                        </div>
                        <div class="entry--bio">
                            Despite the almost libertarian premise and a noble goal of complete decentralization, realistically, blockchain technology will not be able to avoid at least some level..
                        </div>
                    </div>
                    <!-- .entry-content end -->
                </div>
                <!-- .blog-entry end -->
            </div>
            <!-- .col-lg-4 end -->

            <!-- Blog Entry #3 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="blog-entry">
                    <div class="entry--img">
                        <a href="#">
                            <img src="assets/images/blog/grid/3.jpg" alt="entry image" />
                            <div class="entry--overlay"> </div>
                        </a>
                    </div><!-- .entry-img end -->
                    <div class="entry--content">
                        <div class="entry--date"> Mar 27, 2021</div>
                        <div class="entry--meta">
                            <a href="#">Bitcoin</a><a href="#">Tech</a>
                        </div>
                        <div class="entry--title">
                            <h4><a href="#">Southeast Asian Governments Embrace Blockchain Technology</a></h4>
                        </div>
                        <div class="entry--bio">
                            Hong Kong is embracing blockchain technology search for a new business identity and opportunities. The city has a household name in shipping and finance...
                        </div>
                    </div>
                    <!-- .entry-content end -->
                </div>
                <!-- .blog-entry end -->
            </div>
            <!-- .col-lg-4 end -->
        </div>
        <!-- .row end -->

            <!-- .col-lg-12 end -->
        </div>
        <!-- .row end -->
        
    </div>
    <!-- .container end -->
</section>
<!-- #blog end -->

<section id="cta1" class="cta cta-1 bg-theme">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-9">
                <h3>Learn more about AGNliquidity and Agrichainx<h3>
            </div>
            <!-- .col-lg-9 -->
            <div class="col-sm-12 col-md-12 col-lg-3 text-right">
                <a href="/about-us" class="btn btn--white btn--bordered btn--rounded">The Community</a>
            </div>
            <!-- .col-lg-3 -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>
@endsection
