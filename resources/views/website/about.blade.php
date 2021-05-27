@extends('website.master')

@section('title')
About | AGN Liquidity
@endsection
@section('description')
    About | Invest in Naira, Bitcoin or Agricoin and get amazing returns as you cashout out every month with.
@endsection
@section('content')


    <section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
        <div class="bg-section">
            <img src="{{asset('assets/images/page-titles/10.jpg')}}" alt="Background" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="title title-6 text-center">
                        <div class="title--heading">
                            <h1>About</h1>
                        </div>
                        <div class="clearfix"></div>
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active">About</li>
                        </ol>
                    </div><!-- .title end -->
                </div><!-- .col-lg-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </section><!-- #page-title end -->

    <section  class="">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-11 mb-30-xs mb-30-sm">
            <div class="consultation--desc">Who We Are</div>
                    <p><b>
                    Trade/Invest/ Spend your Agricoin with market-leading liquidity with 30% ROI when you invest with Bitcoin,
                    Naira and 50% ROI when you invest with Agricoin 
                    </b></p>
                    <p><b>
                    AGN liquidity is Agrichainx protocol for incentivized liquidity & synthetic assets. 
                    This provides community-governed and programmable token emissions functions to incentivize the formation of deep liquidity pools. 
                    This strong base of liquidity will be utilized to provide asset swaps, synthetic token generation, lending, derivatives and exchange. 
                    Binance Smart Chain was chosen as the protocol's home to allow for near-instant settlement and extremely low gas fees.  
                    </b></p>
                </div><!-- .col-lg-8 end -->
            </div><!-- .row end -->
            
            <div class="consultation--desc">What We Offer</div>
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
                        <h3 class="feature-card-title">Synthetic assets</h3>
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


            <div class="consultation-form mb-30 bg-white text-center">
                    <div class="consultation--desc">
                        Contact Us
                    </div>
                    <form method="post" action="#" class="contactForm mb-0">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <input type="text" class="form-control" name="consultater-name" id="name" placeholder="Your Name" required="">
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <input type="email" class="form-control" name="consultater-email" id="email" placeholder="Email">
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <input type="text" class="form-control" name="consultater-title" id="title" placeholder="Title">
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <textarea class="form-control" name="consultater-message" id="message" rows="2" placeholder="Message Body"></textarea>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <input type="submit" value="Submit Request" name="submit" class="btn btn--primary btn--block">
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="contact-result"></div>
                            </div>
                        </div>
                        <!-- .row end -->
                    </form>
                    <!-- form end -->
                </div>
        </div><!-- .container end -->
    </section>



<section id="cta1" class="cta cta-1 bg-theme">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-9">
                <h3>Join our global Community and become part of the Agrichainx family<h3>
            </div>
            <!-- .col-lg-9 -->
            <div class="col-sm-12 col-md-12 col-lg-3 text-right">
                <a href="/register" class="btn btn--white btn--bordered btn--rounded">Get Started</a>
            </div>
            <!-- .col-lg-3 -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>

@endsection
