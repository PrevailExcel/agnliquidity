<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<!-- Document Meta
    ============================================= -->
    <meta property="og:">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--IE Compatibility Meta-->
<meta name="developer" content="Prevail Ejimadu"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="@yield('description')">
    <meta name="image" content="@yield('image')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('assets/images/favicon/favicon.png') }}" rel="icon">

<!-- Fonts
    ============================================= -->
<link href="https://fonts.googleapis.com/css?family=Exo+2:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7CRoboto:300,300i,400,400i,500,500i,700,700i,900,900i%7CWork+Sans:300,400,500,600,700,800,900" rel="stylesheet" type="text/css">

<!-- Stylesheets
    ============================================= -->
<link href="{{ asset('assets/css/external.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

<!-- RS5.0 Main Stylesheet -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/settings.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/layers.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/navigation.css') }}">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
      <script src="{{ asset('assets/js/html5shiv.js') }}"></script>
      <script src="{{ asset('assets/js/respond.min.js') }}"></script>
    <![endif]-->
<style>
.faa {
  padding: 15px;
  font-size: 30px;
  width: 45%;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.faa:hover {
    opacity: 0.7;
}

.faa-instagram {
  background: #bb0000;
  color: white;
}

.faa-whatsapp {
  background: #00b489;
  color: white;
}

.faa-facebook {
  background: #3B5998;
  color: white;
}

.faa-twitter {
  background: #55ACEE;
  color: white;
}

</style>
<!-- Document Title
    ============================================= -->
<title>@yield('title')</title>
</head>
<body>
<div class="preloader">
	<div class="loader-eclipse">
		<div class="loader-content"></div>
	</div>
</div><!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="wrapper clearfix">
<header id="navbar-spy" class="header header-transparent header-fixed">
	<nav id="primary-menu" class="navbar navbar-expand-lg navbar-light navbar-bordered">
		<div class="container">
			<a class="navbar-brand" href="/">
				<img class="logo logo-light" src="{{ asset('assets/images/logo/logo-light.png') }}" alt="AGN Logo">
				<img class="logo logo-dark" src="{{ asset('assets/images/logo/logo-dark.png') }}" alt="AGN Logo">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="navbarContent">
				<ul class="navbar-nav ml-auto">
					<!-- Home Menu-->
	<li class=" active">
		<a href="/" class=" menu-item">Home</a>

	</li>
	<!-- li end -->

	<!-- Pages Menu -->
	<li class="">
		<a href="/how-it-works" class=" menu-item">How It Works</a>
		<ul class="dropdown-menu">
		</ul>
	</li>
	<!-- li end -->
	<!-- Services Menu-->
	<li class="">
		<a href="/affiliate" class=" menu-item">Affiliate</a>

	</li>
	<!-- li end -->
	<!-- Studies Menu-->
	<li class="">
		<a href="/coupon-vendors"  class=" menu-item">Coupon Vendors</a>

	</li>
	<!-- li end -->
	<li class="">
		<a href="/about"  class=" menu-item">About Us</a>

	</li>
	<!-- li end -->
	<!-- Blog Menu-->
     &nbsp &nbsp &nbsp


 @if (Route::has('login'))
                    @auth
<li class="">
		<a href="/home" class=" menu-item" data-hover="shop">My Dashboard</a>

	</li>
                        @else
	<!-- shop Menu -->
	<li class="">
        		<!-- Module Signup  -->
<div class="module module-signup ">
	<a class="menu-item btn-popup" data-hover="shop" style="color:#ffffff;" data-toggle="modal" data-target="#signupModule">Sign In</a>
	<div class="modal fade signup-popup" tabindex="-1" role="dialog" id="signupModule">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="row">
						<div class="signup-form-container text-center">
								<h4>Sign In</h4>
								<form id="signupPopupForm" style="opacity:0.9; " form method="POST" action="{{ route('login') }}" class="signupform">
                                                    @csrf
 <div>
 <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
</div>
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           									<div class="input-checkbox">
									  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                               </div>
									<button type="submit" name="submit" class="btn btn--primary btn--block">Sign in to your dashboard</button>
								</form>
                                 @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

								<!-- form end -->
										<div class="signin">
									<a href="/register">Register Here</a>
								</div>
							</div>
						<!-- .signup-form end -->
					</div>
				</div>
			</div>
			<!-- /.

	</li>
	li end -->
                        @if (Route::has('register'))

	<li class="">
		<a href="/register" style="color:#FFD700" class=" menu-item">Register</a>

	</li>
	<!-- li end -->
      @endif
                    @endauth
            @endif




	</li>
    </ul>
				<div class="module-container">
					<!-- Module Consultation  -->
<div class="module module-consultation pull-left">

 @if (Route::has('login'))
                    @auth
	<a class="btn btn--white btn--bordered btn--rounded"
     onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
                                      Logout </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
    @else
    	<a href="page-consultation.html" class="btn btn--white btn--bordered btn--rounded">Get Started</a>
                    @endauth
            @endif

</div>					<!-- Module Social -->
<div class="module module-social pull-left">
	<a href="#"><i class="fa fa-facebook"></i></a>
	<a href="#"><i class="fa fa-twitter"></i></a>
	<a href="#"><i class="fa fa-linkedin"></i></a>
</div><!-- .module-social end -->				</div>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

</header>


@yield('content')


<!-- Footer #1
============================================= -->
<footer id="footer" class="footer footer-1">
    <!-- Widget Section
	============================================= -->
    <div class="footer-widget">
        <div class="container">
            <div class="row clearfix">
                <div class="col-sm-12 col-md-4 col-lg-3 footer--widget widget-about">
                    <div class="widget-content">
                        <img class="footer-logo" src="{{ asset('assets/images/logo/logo-light.png') }}" alt="logo">
                        <p>Invest in Naira, Bitcoin or Agricoin and get amazing returns as you cashout out every month with.</p>
                        <div class="footer-social-icon">
                            <a class="facebook" href="https://facebook.com/reevatechafrica">
                                <i class="fa fa-facebook"></i><i class="fa fa-facebook"></i>
                            </a>
                            <a class="twitter" href="https://facebook.com/reevatechafrica">
                                <i class="fa fa-twitter"></i><i class="fa fa-twitter"></i>
                            </a>
                            <a class="instagram" href="https://facebook.com/reevatechafrica">
                                <i class="fa fa-instagram"></i><i class="fa fa-instagram"></i>
                            </a>
                            <a class="linkedin" href="https://facebook.com/reevatechafrica">
                                <i class="fa fa-linkedin"></i><i class="fa fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div><!-- .col-md-3 end -->
                <div class="col-sm-12 col-md-4 col-lg-2 footer--widget widget-links">
                    <div class="widget-title">
                        <h5>Company</h5>
                    </div>
                    <div class="widget-content">
                        <ul>
                            <li><a href="/about">About Us</a></li>
                            <li><a href="/how-it-works">How It Works</a></li>
                            <li><a href="/">Latest News</a></li>
                            <li><a href="/contact">Contact Us</a></li>
                            <li><a href="/how-it-works">FAQs</a></li>
                        </ul>
                    </div>
                </div><!-- .col-md-2 end -->

                <div class="col-sm-12 col-md-4 col-lg-2 footer--widget widget-links">
                    <div class="widget-title">
                        <h5>Affiliates</h5>
                    </div>
                    <div class="widget-content">
                        <ul>
                            <li><a href="#">Bitcoin.com</a></li>
                            <li><a href="#">Reevatech Africa</a></li>
                            <li><a href="#">Agricoin</a></li>
                            <li><a href="#">NGNT</a></li>
                        </ul>
                    </div>
                </div><!-- .col-md-2 end -->

                <div class="col-sm-12 col-md-4 col-lg-2 footer--widget widget-links">
                    <div class="widget-title">
                        <h5>Account</h5>
                    </div>
                    <div class="widget-content">
                        <ul>
                            <li><a href="/home">My Dashboard</a></li>
                            <li><a href="/ref">Refferal Link</a></li>
                            <li><a href="admin/dash">Admin</a></li>
                        </ul>
                    </div>
                </div><!-- .col-md-2 end -->

                <div class="col-sm-12 col-md-4 col-lg-3 footer--widget widget-newsletter">
                    <div class="widget-title">
                        <h5>Stay Updated</h5>
                    </div>
                    <div class="widget-content">
                        <form class="form-newsletter mailchimp">
                            <input type="email" name="email" class="form-control" placeholder="Subscribe Our Newsletter">
                            <button type="submit"><i class="fa fa-long-arrow-right"></i></button>
                        </form>
                        <div class="subscribe-alert"></div>
                        <div class="clearfix"></div>
                        <p>Get the upto date news and offers.</p>
                    </div>
                </div><!-- .col-md-3 end -->
                <div class="clearfix"></div>
            </div>
        </div><!-- .container end -->
    </div><!-- .footer-widget end -->

    <!-- Copyrights
	============================================= -->
    <div class="footer--bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="footer--copyright">
AGN Investment © 2021. All rights reserved | Designed by <a href="https://reevatech.africa">Reevatech Africa</a>.                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="payment--methods  text-right text-center-xs">
                        <a href="#" title="Visa"><img src="{{ asset('assets/images/footer/visa.png') }}" alt="Visa"></a>
                        <a href="#" title="Mastercard"><img src="{{ asset('assets/images/footer/mastercard.png') }}" alt="Mastercard"></a>
                        <a href="#" title="amex"> <img src="{{ asset('assets/images/footer/amex.png') }}" alt="amex"></a>
                        <a href="#" title="Delta"><img src="{{ asset('assets/images/footer/delta.png') }}" alt="Delta"> </a>
                        <a href="#" title="Cirrus"><img src="{{ asset('assets/images/footer/cirrus.png') }}" alt="Cirrus"></a>
                        <a href="#" title="Paypal"><img src="{{ asset('assets/images/footer/paypal.png') }}" alt="Paypal"></a>
                    </div>
                </div>
            </div>
        </div><!-- .container end -->
    </div><!-- .footer-copyright end -->
</footer>


<div id="back-to-top" class="backtop"><i class="fa fa-long-arrow-up"></i></div>
 </div><!-- #wrapper end -->

<!-- Footer Scripts
============================================= -->
<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/functions.js') }}"></script>
<!-- RS5.0 Core JS Files -->
<script src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js?rev=5.0') }}"></script>
<script src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<!-- RS Configration JS Files -->
<script src="{{ asset('assets/js/rsconfig.js') }}"></script>
</body>
</html>
