<link rel="stylesheet" href="{{ asset('dist/bootstrap/css/bootstrap.min.css') }}">
<style>
body, html {
  height: 100%;
}

.bg {
  /* The image used */
  background-image: url("{{asset('/dist/img/login_bg_image.jpg')}}");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
}
</style>
<body class="bg" style="opacity:0.8; background-size:cover;">
        <div class="container">
			<div class="row" style="padding:120px 80px">
            <div class="col-lg-3"></div>
            <div class="col-lg-6" style="background-color:#fff; alignment-adjust:central; text-align:center; padding:50px;">
								<h2 style="text-align:center">Admin Sign In</h2>
								<form id="signupPopupForm" style="opacity:1;  " form method="POST" action="{{ route('admin.auth') }}" class="form-horizontal">
                                                    @csrf
                    <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                
                    <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <div class="form-group">
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
           <div class="col-lg-3"></div>
								<!-- form end -->
										
				</div>	
            </div>
</body>
<script src="{{ asset('dist/js/jquery.min.js') }}"></script> 

<!-- v4.0.0-alpha.6 --> 
<script src="{{ asset('dist/bootstrap/js/bootstrap.min.js') }}"></script> 
