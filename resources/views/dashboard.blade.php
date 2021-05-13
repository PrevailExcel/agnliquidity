<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>{{$user->name}}'s Dashboard | AGN Investment</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="AGN Investments" name="Prevail Ejimadu" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('asset/images/favicon.ico')}}">

    <!-- Sweet Alert -->
    <link href="{{asset('asset/plugins/sweet-alert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css">

    <!-- App css -->
    <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('asset/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('asset/css/style.css')}}" rel="stylesheet" type="text/css" />

    <script src="{{asset('asset/js/modernizr.min.js')}}"></script>

</head>

<body>

<!-- Navigation Bar-->
<header id="topnav">
    <div class="topbar-main">
        <div class="container-fluid">

            <!-- Logo container-->
            <div class="logo">
                <!-- Text Logo -->
                <!--<a href="index.html" class="logo">-->
                <!--<span class="logo-small"><i class="mdi mdi-radar"></i></span>-->
                <!--<span class="logo-large"><i class="mdi mdi-radar"></i> Simple</span>-->
                <!--</a>-->
                <!-- Image Logo -->
                <a href="{{url('/')}}" class="logo">
                    <img src="{{asset('asset/images/logo_sm.png')}}" alt="" height="26" class="logo-small">
                    <img src="{{ asset('assets/images/logo/logo-light.png') }}" alt="" height="26" class="logo-large">
                </a> &nbsp;
            </div>
            <!-- End Logo container-->
            <div class="navbar-custom">

                <a class="navbar-toggle nav-link">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li class="has-submenu">
                            <a href="{{route('home')}}">
                                <span><i class="ti-home"></i></span><span> Dashboard </span> </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="menu-extras topbar-custom">

                <ul class="list-unstyled topbar-right-menu float-right mb-0">

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <img src="{{ asset('assets/images/team/img_avatar3.png') }}" alt="user" class="rounded-circle"> <span class="ml-1 pro-user-name">{{$user->name}}<i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>
                            @hasrole('superadmin')                                
                            <div class="dropdown-item noti-title">
                                <a href="{{url('/admin/dash')}}" class="text-overflow m-0">SuperAdmin Panel</a>
                            </div>
                            @endhasrole

                            @auth
                                <a class="dropdown-item notify-item"
                                   onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
                                    <i class="ti-power-off"></i> <span>Logout</span></a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                           @endauth
                        </div>
                    </li>
                </ul>
            </div>
            <!-- end menu-extras -->

            <div class="clearfix"></div>

        </div> <!-- end container -->
    </div>
    <!-- end topbar-main -->
</header>
<!-- End Navigation Bar-->


<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="header-title m-t-0 m-b-20">Account Dashboard</h4>
            </div>
            @if (session('Created'))

                <div class="alert alertX alert-info" style="float:right;">
                    {{ session('Created') }}
                </div>
            @endif
            @if (session('Failed'))

                <div class="alert alertX alert-info" style="float:right;">
                    {{ session('Failed') }}
                </div>
            @endif
            @if (session('not_app'))

                <div class="alert alertX alert-danger" style="float:left;">
                    {{ session('not_app') }}
                </div>
            @endif
            @if (session('bankAd'))

                <div class="alert alertX alert-success" style="float:right;">
                    {{ session('bankAd') }}
                </div>
            @endif
            @if (session('profileAd'))

                <div class="alert alertX alert-info" style="float:left;">
                    {{ session('profileAd') }}
                </div>
            @endif
            @if (session('coin'))

                <div class="alert alertX alert-info" style="float:right;">
                    {{ session('coin') }}
                </div>
            @endif
            @if (session('nocoin'))

                <div class="alert alertX alert-danger" style="float:left;">
                    {{ session('nocoin') }}
                </div>
            @endif
            @if (session('Acoin'))

                <div class="alert alertX alert-info" style="float:right;">
                    {{ session('Acoin') }}
                </div>
            @endif
            @if (session('Bcoin'))

                <div class="alert alertX alert-info" style="float:left;">
                    {{ session('Bcoin') }}
                </div>
            @endif
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="p-0 text-center">
                    <div class="member-card">
                        <div class="thumb-xl member-thumb m-b-10 center-page">
                            <img src="{{ asset('assets/images/team/img_avatar3.png') }}" class="rounded-circle img-thumbnail" alt="{{$user->name}}">
                          @if($user->is_validated == 1)  <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i> @endif
                        </div>

                        <div class="">
                            <h5 class="m-b-5 mt-3">{{$user->name}}</h5>
                            <p class="text-muted">@if($user->username == null) @username @else {{'@'.$user->username}}@endif</p>
                        </div>

                        <p class="text-muted m-t-10">
                            I understand the power of proper investment and membership. AGN Investment for life.
                        </p>


                        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">2 steps to activate your Membership</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        @if($user->is_validated == 0)
                                            <div id="usernameValidation">
                                                <h6>1 - Input your Username as in node.agrichainx.com</h6>
                                                <div class="input-group m-t-10">
                                                    <input type="text" id="verifyUsername" class="form-control" placeholder="Agrichainx Username">
                                                    <span class="input-group-append">
                                    <button type="button" id="submitUser" class="btn btn-custom">Submit & wait</button>
                                    <button type="button" id="loadingA" style="display: none" class="btn btn-custom">
                                        <div class="spinner-border text-black spinner-border-sm"data-loading-text="Verifying" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div></button>
                                        </span></div>
                                            </div>
                                        @endif
                                        <div id="afterValidation" @if($user->is_validated == 1 && $user->is_approved == 0) @else style="display: none" @endif>
                                            <h6>2 - Pay your membership fee</h6>
                                            <p>Pay your One time non-refundable membership fee of <b>₦2000</b> to
                                                <br>2037468248<br>First Bank<br>Otoaye Godfrey Akhayagboke</p>
                                            <p>After payment, Upload your <b><i>Proof of payment</i></b> to activate packages.</p>
                                            <div class="form-group m-b-0">
                                                <form method="POST" action="{{route('upload.pop')}}" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="file" required name="image" class="filestyle" data-buttonname="btn-primary" id="filestyle-5">
                                                    <br>
                                                    <button type="submit" style="float: right" class="btn btn-custom"> Upload POP
                                                    </button>
                                                    <span class="text-custom text-center" style="float: contour">OR</span>
                                                    <a class="buy-with-crypto" style="float: left" data-custom="Pay with Bitcoin"
                                                       href="https://commerce.coinbase.com/checkout/6364f194-c8b1-40d1-b7f9-226767237f34"> Or pay $10 in bitcoin
                                                    </a>
                                                    <script src="https://commerce.coinbase.com/v1/checkout.js?version=201807">
                                                    </script>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->

                        <div id="voucherModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">Input your voucher code here</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <div>
                                            <h6>Once you submit this successfully, your package starts counting</h6><br>
                                            <div class="input-group m-t-10">
                                                <input name="voucherCode" id="voucherValidation" type="text" class="form-control" placeholder="Unique voucher code">
                                                <span class="input-group-append">
                                    <button type="button" id="submitVoucher" class="btn btn-custom">Submit Voucher</button>
                                    <button type="button" id="loadingB" style="display: none" class="btn btn-custom">
                                        <div class="spinner-border text-black spinner-border-sm"data-loading-text="Verifying" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div></button>
                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->

                        <div id="withdrawModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                            <!-- Social -->
                                            <div class="panel panel-default panel-fill">
                                                <div class="panel-heading">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h3 class="panel-title">Withdrawal status</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <h6 class="font-13 m-t-0 m-b-30">Here are the Investment packages you've bought so far</h6>
                                                    <ul class="nav nav-tabs">
                                                        @foreach($package as $pack)
                                                            <li class="nav-item">
                                                                <a href="#{{ \App\Package::where('id',$pack->package_id)->value('name')}}1" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                                    {{ \App\Package::where('id',$pack->package_id)->value('name')}}
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                    <div class="tab-content">
                                                        @foreach($package as $pack)
                                                            <div class="tab-pane fade" id="{{ \App\Package::where('id',$pack->package_id)->value('name')}}1">
                                                                <p>Amount: <b>{{ \App\Package::where('id',$pack->package_id)->value('price')}}</b>
                                                                    <br> Payment Method: <b>{{ \App\PaymentMethod::where('id',$pack->payment_id)->value('name')}}</b>
                                                                    <br> ROI: <b>{{ \App\PaymentMethod::where('id',$pack->payment_id)->value('roi')}}%</b>
                                                                    <br> Withdrawal date: <b>{{\Carbon\Carbon::parse($pack->created_at)->addDays(30)->format('d M, Y')}}</b>
                                                                    <hr>
                                                                    @if ($pack->is_eligible  == 0)
                                                                    <button class="btn btn-dark" disabled type="button">Withdraw</button><br>
                                                                     <span class="text-dark">You cannot apply for this withdrawal yet</span>
                                                                    @elseif ($pack->is_eligible  == 1  && $pack->want_to_withdraw  == 0)
                                                                    <button class="btn btn-info" type="button">Withdraw</button><br>
                                                                     <span class="text-info">You can now apply for withdrawal</span>
                                                                    @elseif ($pack->is_eligible  == 1 && $pack->want_to_withdraw  == 1)
                                                                    <button class="btn btn-success" disabled type="button">Applied</button><br>
                                                                     <span class="text-success">You will receive your payment soon</span>
                                                                     @endif
                                                                </p>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Social -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->

                        @if($user->is_validated == 0)
                            <button type="button" class="btn btn-primary m-t-10" data-toggle="modal" data-target="#myModal"><i class="fa fa-hourglass-start"></i> Activate Account</button>
                        @elseif($user->is_validated == 1 && $user->is_approved == 0 && $user->have_pop == 0) <button type="button" class="btn btn-primary m-t-10" data-toggle="modal" data-target="#myModal"><i class="fa fa-upload"></i> Pay or Upload POP</button>
                        @elseif($user->is_approved == 1) <button type="button"  data-toggle="modal" data-target="#withdrawModal" class="btn btn-primary m-t-10" ><i class="fa fa-dollar"></i> Withdraw Status</button>
                        @elseif($user->is_validated == 1 && $user->have_pop == 1 && $user->is_approved == 0) <button type="button" id="sa-confirmed" class="btn btn-primary m-t-10" ><i class="fa fa-wifi"></i> Pending Approval</button>
                        @endif
                        <a href="{{route('buy.packages')}}"><button type="button" @if ($user->is_validated == 0) disabled="disabled"
                        @endif class="btn btn-custom m-t-10"><i class="fa fa-bank"></i> Buy A Voucher</button></a>
                        <button type="button" data-toggle="modal" data-target="#voucherModal" class="btn waves-effect waves-light btn-primary m-t-10"><i class="fa fa-eye"></i> Have a voucher?</button>

                    </div>

                </div> <!-- end card-box -->

            </div> <!-- end col -->
        </div> <!-- end row -->

        <div class="m-t-30">
            <ul class="nav nav-tabs tabs-bordered">
                <li class="nav-item">
                    <a href="#home-b1" data-toggle="tab" aria-expanded="false" class="nav-link active">
                        Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#profile-earnings" data-toggle="tab" aria-expanded="true" class="nav-link">
                        Earnings
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#profile-b1" data-toggle="tab" aria-expanded="true" class="nav-link">
                        Settings
                    </a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="home-b1">
                    <div class="row">
                        <div class="col-md-4">
                            <!-- Personal-Information -->
                            <div class="panel panel-default panel-fill">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Personal Information</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="m-b-20">
                                        <strong>Full Name</strong>
                                        <br>
                                        <p class="text-muted">{{$user->name}}</p>
                                    </div>
                                    <div class="m-b-20">
                                        <strong>Phone</strong>
                                        <br>
                                        <p class="text-muted">{{$user->phone}}</p>
                                    </div>
                                    <div class="m-b-20">
                                        <strong>Email</strong>
                                        <br>
                                        <p class="text-muted">{{$user->email}}</p>
                                    </div>
                                    <div class="about-info-p m-b-0">
                                        <strong>Referral Link</strong>
                                        <br>
                                        <div class="input-group m-t-10">
                                            <input readonly id="reflink" name="" class="form-control" value="{{url('/register').'?ref='.$user->affiliate_id}}">
                                            <span class="input-group-append">
                                    <button type="button" onclick="copyRef()" class="btn btn-dark">Copy</button>
                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Personal-Information -->

                            <!-- Social -->
                            <div class="panel panel-default panel-fill">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Package Details</h3>
                                </div>
                                <div class="panel-body">
                                    <h6 class="font-13 m-t-0 m-b-30">Here are the Investment packages you've bought so far</h6>
                                    <ul class="nav nav-tabs">
                                        @foreach($package as $pack)
                                            <li class="nav-item">
                                                <a href="#{{ \App\Package::where('id',$pack->package_id)->value('name')}}" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    {{ \App\Package::where('id',$pack->package_id)->value('name')}}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="tab-content">
                                        @foreach($package as $pack)
                                            <div class="tab-pane fade" id="{{ \App\Package::where('id',$pack->package_id)->value('name')}}">
                                                <p>Amount: <b>{{ \App\Package::where('id',$pack->package_id)->value('price')}}</b>
                                                    <br> Payment Method: <b>{{ \App\PaymentMethod::where('id',$pack->payment_id)->value('name')}}</b>
                                                    <br> ROI: <b>{{ \App\PaymentMethod::where('id',$pack->payment_id)->value('roi')}}%</b>
                                                    <br> Withdrawal date: <b>{{\Carbon\Carbon::parse($pack->created_at)->addDays(30)->format('d M, Y')}}</b>
                                                </p>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- Social -->
                        </div>


                        <div class="col-md-8">
                            <!-- Personal-Information -->
                            <div class="panel panel-default panel-fill">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Daily Activity</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="media border d-md-flex d-block p-3">
                                        @foreach($sPost as $post)
                                        <img id="sImage" src="{{asset('storage/posts/'.$post->image)}}" alt="John Doe"
                                             class="mr-3 mt-3 img" style="width:240px; height:240px;">
                                        <div class="media-body">
                                            <h5 id="sTitle"><a href="{{url("/sponsored-post/". $post->id)}}">{{$post->title}}</a>
                                            </h5>
                                            <p id="sBody">{{\Str::words($post->postbody,50)}} </p><br>
                                            @if($user->have_shared == 0)
                                            <button type="button" class="facebookShare btn btn-info btn-rounded"><i class="fa fa-facebook"></i> Facebook</button>
                                            <button type="button" class="whatsappShare btn btn-success btn-rounded"><i class="fa fa-whatsapp"></i> Whatsapp</button>
                                            @else
                                                <button type="button btn-rounded btn-block" style="width: 100%" disabled
                                                        class="btn btn-outline-success successful"><b>Congratulations, Shared for today</b></button>
                                            @endif
                                            @endforeach
                                            <br/> <i style="color:#000;">Sponsored Post
                                                for {{ Carbon\Carbon::now()->toFormattedDateString() }}</i>
                                        </div>
                                    </div>

                                    <div class=""><br>
                                        <hr>
                                        <h5 class="font-14 mb-3 text-uppercase m-t-30 m-b-20">Activity Information</h5>

                                        <div class="m-b-15">
                                            <h6 class="font-14">Completed Activities <span
                                                    class="pull-right">{{$actscom}} tasks</span></h6>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                                                     aria-valuenow="{{$actscom}}" aria-valuemin="0" aria-valuemax="{{$actstot}}" style="width: {{$actscom}}%;">
                                                    <span class="sr-only">{{$actscom}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="m-b-0">
                                            <h5 class="font-14">Completed Percentage<span class="pull-right">{{$actsper}}%</span>
                                            </h5>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                                                     aria-valuenow="{{$actscom}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$actscom}}%;">
                                                    <span class="sr-only">{{$actsper}}% Complete</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Personal-Information -->

                        </div>

                        <!-- Personal-Information -->
                    </div>
                </div>

                <!-- start earnings row -->
                <div class="tab-pane" id="profile-earnings">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card-box">
                                <i class="fa fa-info-circle text-muted pull-right inform" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Total earnings from all your packages."></i>
                                <h6 class="m-t-0 text-dark">Activity Earnings</h6>
                                <h3 class="text-primary text-center m-b-30 m-t-30">₦<span>@if($user->act_earnings == null) 0.00 @else{{$user->act_earnings}} @endif </span></h3>
                                <p class="text-muted mb-0">Total earnings from all your packages. <span class="pull-right">{{count($user->connect)}}</span></p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card-box">
                                <i class="fa fa-info-circle text-muted pull-right inform" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Referral Earnings"></i>
                                <h6 class="m-t-0 text-dark">Referral Earnings</h6>
                                <h3 class="text-light-blue text-center m-b-30 m-t-30">₦<span> @if($user->ref_earnings == null) 0.00 @else {{$user->ref_earnings}} @endif</span></h3>
                                <p class="mb-0 text-muted">5% of whatever package your downline invests </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card-box">
                                <i class="fa fa-info-circle text-muted pull-right inform" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Sum of all your earnings"></i>
                                <h6 class="m-t-0 text-dark">Total Earnings</h6>
                                <h3 class="text-success text-center m-b-30 m-t-30">₦<span>{{$user->act_earnings + $user->ref_earnings}}</span></h3>
                                <p class="mb-0 text-muted">What you can withdraw</p>
                            </div>
                        </div>

                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-sm-12">
                            <div class="timeline timeline-left">
                                <article class="timeline-item alt">
                                    <div class="text-left">
                                        <div class="time-show first">
                                            <a href="#" class="btn btn-custom">Major Notifications</a>
                                        </div>
                                    </div>
                                </article>
                                <article class="timeline-item">
                                    <div class="timeline-desk">
                                        <div class="panel">
                                            <div class="timeline-box">
                                                <span class="arrow"></span>
                                                <span class="timeline-icon"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                                <h4 class="">check your profile</h4>
                                                <p>Next withdrawal date</p>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="timeline-item ">
                                    <div class="timeline-desk">
                                        <div class="panel">
                                            <div class="timeline-box">
                                                <span class="arrow"></span>
                                                <span class="timeline-icon bg-success"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                                <h4 class="text-success">Not Eligible for any withdrawal yet</h4>
                                                <p>Withdrawal Status</p>

                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="timeline-item">
                                    <div class="timeline-desk">
                                        <div class="panel">
                                            <div class="timeline-box">
                                                <span class="arrow"></span>
                                                <span class="timeline-icon bg-primary"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                                <h4 class="text-primary">1</h4>
                                                <p>Completed Cycles</p>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                            </div>
                        </div>
                    </div>


                </div>
                <!-- end earnings row -->

                <div class="tab-pane" id="profile-b1">
                    <!-- Personal-Information -->
                    <div class="panel panel-default panel-fill">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edit Profile</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="POST" action="{{route('edit.profile')}}">
                            @csrf
                                <div class="form-group">
                                    <label for="FullName">Full Name</label>
                                    <input type="text" value="{{$user->name}}" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="email" disabled value="{{$user->email}}" name="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Gender">Gender</label>
                                    <input type="text" value="{{$user->gender}}" name="gender" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="PhoneE">Phone Number</label>
                                    <input type="text" value="{{$user->phone}}" name="phone" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Username">Username</label>
                                    <input type="text" readonly disabled value="{{$user->username}}" id="Username" class="form-control">
                                </div>
                                <button class="btn btn-primary waves-effect waves-light w-md" type="submit">Edit Details</button>
                            </form>

                        </div>
                    </div>

                    <div class="panel panel-dark panel-fill">
                        <div class="panel-heading">
                            <h3 class="panel-title text-white">Account Settings</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="POST" action="{{route('edit.bank')}}">
                            @csrf
                                <div class="form-group">
                                    <label for="FullName">Bank Name</label>
                                    <input type="text" name="bank" value="{{$user->bank}}" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Email">Account Name</label>
                                    <input type="text" name="bank_name" value="{{$user->bank_name}}" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Username">Account Number</label>
                                    <input type="text" name="account_number" value="{{$user->account_number}}" required class="form-control">
                                </div>
                                <button class="btn btn-primary waves-effect waves-light w-md" type="submit">Add/Edit Bank Details</button>
                            </form>

                        </div>
                    </div>
                    <div class="panel panel-default panel-fill">
                        <div class="panel-heading">
                            <h3 class="panel-title">Wallet Settings</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="POST" action="{{route('edit.wallet')}}">
                            @csrf
                                <div class="form-group">
                                    <label for="FullName">Bitcoin Wallet Address</label>
                                    <input type="text" value="{{$user->bitcoin_add}}" name="bitcoin" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Email">Agricoin Wallet Address</label>
                                    <input type="text" name="agricoin" placeholder="If you didnt pay with Agricoin, leave it empty." value="{{$user->agricoin_add}}" id="AgricoinE" class="form-control">
                                </div>
                                <button class="btn btn-primary waves-effect waves-light w-md" type="submit">Add/Edit Wallet Details</button>
                            </form>

                        </div>
                    </div>
                    <!-- Personal-Information -->
                </div>
            </div>
        </div>


    </div> <!-- end container -->

    <!-- Footer -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="pull-right hide-phone">
                        Designed by <strong class="text-custom"><a href="https://reevatech.africa" target="_blank">Reevatech Africa</a></strong>.
                    </div>
                    <div>
                        <strong>AGN Investment</strong> - Copyright ©{{date('Y')}}
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

</div>
<!-- end wrapper -->





<!-- jQuery  -->
<script src="{{asset('asset/js/jquery.min.js')}}"></script>
<script src="{{asset('asset/js/popper.min.js')}}"></script>
<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
<script src="{{asset('asset/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('asset/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js')}}" type="text/javascript"></script>


<!-- App js -->
<script src="{{asset('asset/js/jquery.core.js')}}"></script>
<script src="{{asset('asset/js/jquery.app.js')}}"></script>

<!-- Sweet-Alert  -->
<script src="{{asset('asset/plugins/sweet-alert2/sweetalert2.min.js')}}"></script>
<script src="{{asset('asset/pages/jquery.sweet-alert.init.js')}}"></script>

<script>

    $(".facebookShare").click(function () {
        $.get("/activity", function () {
            $(".facebookShare").hide();
            $(".whatsappShare").hide();
            $(".successful").show();
            alert("Shared");
        });
    });

    function copyRef() {
        /* Get the text field */
        var copyText = document.getElementById("reflink");

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */

        /* Copy the text inside the text field */
        document.execCommand("copy");

        /* Alert the copied text */
        alert("copied. " + copyText.value);
    }
</script>

<script>
    var tarGetInput = $('input#voucherValidation');

    $("#submitVoucher").click(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{url('/check-voucher')}}",
            type: "post",
            dataType: 'json',
            data:{
                voucherCode:tarGetInput.val(),
            },
            beforeSend: function(){
                $('#loadingB').show();
                $('#submitVoucher').hide();
            },
            success:function(response){
                if (response.checker == 'Successful') {
                    swal(
                        {
                            title: 'Package Successful',
                            html: '<b><a href="{{route('home')}}">Refresh</a> <br> </b>' +
                                'and start sharing sponsored posts now ',
                            type: 'success',
                            confirmButtonColor: '#4fa7f3'
                        }
                    )
                    setTimeout(
                        function()
                        {
                            location.reload();
                        }, 3000);
                } else if (response.checker == 'Used'){
                    swal(
                        {
                            title: 'Used Voucher',
                            html: 'This voucher have been used already',
                            type: 'warning',
                            confirmButtonColor: '#4fa7f3'
                        }
                    )
                } else if(response.checker == 'Failed'){
                    swal(
                        {
                            title: 'Invalid Voucher',
                            html: 'This Voucher does not exist',
                            type: 'error',
                            confirmButtonColor: '#4fa7f3'
                        }
                    )
                }else if(response.checker == 'notActive'){
                    swal(
                        {
                            title: 'Activate your account',
                            html: 'To use any voucher',
                            type: 'error',
                            confirmButtonColor: '#4fa7f3'
                        }
                    )
                }
            },
            error: function(response) {
                alert("Check your internet and try again");
            },
            complete: function(){
                $('#loadingB').hide();
                $('#submitVoucher').show();
            }
        });
    });

    var tarGet = $('input#verifyUsername');

    $("#submitUser").click(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{url('/validate-user')}}",
            type: "get",
            dataType: 'json',
            data:{
                agUsername:tarGet.val(),
            },
            beforeSend: function(){
                $('#loadingA').show();
                $('#submitUser').hide();
            },
            success:function(respons){
                if (respons.validated === true) {
                    $('#usernameValidation').hide()
                    $('#afterValidation').show();
                    $('#username').val(respons.username);
                    $('#gender').val(respons.gender);
                } else if (respons.validated === false){
                    swal(
                        {
                            title: 'User not found',
                            html: 'Check your username or <br> Register ' +
                                '<b><a href="https://node.agrichainx.com/signup">Here</a> </b>' +
                                ' to get your username',
                            type: 'error',
                            confirmButtonColor: '#4fa7f3'
                        }
                    )
                }
            },
            error: function(response) {
                // $('#name-error').text(response.responseJSON.errors.name);
                alert("Check your internet and try again");
            },
            complete: function(){
                $('#loadingA').hide();
                $('#submitUser').show();
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $(".alertX").fadeTo(2000, 500).slideUp(500, function(){
            $(".alertX").slideUp(500);
        });
    });
</script>

</body>
</html>
