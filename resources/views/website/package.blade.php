<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Buy Packages | AGN Liquidity</title>
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

<div class="wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <h4 class="header-title m-t-0">Packages</h4>
            </div>
        </div> <!-- end row -->

        <div class="row">
            <div class="col-lg-10 center-page">
                <div class="row m-t-30">
                    <div class="col-sm-12">
                        <div class="text-center">
                            <h4 class="m-b-30 m-t-20">Choose A Package</h4>
                        </div>
                    </div>
                </div>

                <div id="paymentModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel">How do you want to pay?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="text-center list-group">
                                    <button data-toggle="modal" data-target="#nairaModal" class="list-group-item list-group-item-action">Naira</button>
                                    <button class="list-group-item list-group-item-action">Agricoin</button>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <div id="nairaModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel">Naira Voucher Vendors</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <ol class="list-group-flush">
                                <div class="list-header">Contact any of these vendors and pay the appropriate amount to them, send proof of payment,
                                and they will send you a unique voucher code
                                     for the package</div> <br>
                                    <li class="list-group-item">09035870933 <span style="float: right";><a href="tel:09035870933"><button type="button" class="btn btn-rounded btn-info"><i class="fa fa-phone"></i> Call </button> &nbsp;
                                     </a> <a href="https://wa.me/2349035870933"><button type="button" class="btn btn-rounded btn-custom"><i class="fa fa-whatsapp"></i> Whatsapp</button> </a> </span></li>
                                    <li class="list-group-item">09057278387 <span style="float: right";><a href="tel:09057278387"><button type="button" class="btn btn-rounded btn-info"><i class="fa fa-phone"></i> Call </button> &nbsp;
                                    </a> <a href="https://wa.me/2349057278387"><button type="button" class="btn btn-rounded btn-custom"><i class="fa fa-whatsapp"></i> Whatsapp</button> </a> </span></li>
                                 </ol>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <div class="row m-t-30">
    @foreach($packages as $package)
                    <!--Pricing Column-->
                    <article class="pricing-column container col-md-4">
                        <div class="inner-box">
                            <div class="plan-header text-center">
                                <h3 class="plan-title bg-secondary">{{$package->name}} Voucher</h3>
                                <h2 class="plan-price"><b>${{number_format($package->price)}}</b></h2>
                                <h6><div >₦{{number_format($package->price * 500)}}</div></h6>
                            </div>
                            <ul class="plan-stats list-unstyled text-center">
                                <li>50% ROI when you pay with Agricoin</li>
                                <li>30% ROI for Naira or Bitcoin</li>
                                <li>Cashout in 30 days</li>
                            </ul>
                            <div class="text-center">
                                <a data-toggle="modal" data-target="#paymentModal" class="btn btn-custom btn-rounded waves-effect waves-light">Buy with Naira or Agricoin</a>
                                <a href="{{$package->coinbase_link}}" target="_blank" class="btn btn-secondary btn-rounded waves-effect waves-light">Buy With Bitcoin</a>
                            </div>
                        </div>
                    </article>
    @endforeach
                </div>
            </div><!-- end col -->
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
    var tarGetInput = $('input#verifyusername');

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
                agUsername:tarGetInput.val(),
            },
            beforeSend: function(){
                $('#loadingA').show();
                $('#submitUser').hide();
            },
            success:function(response){
                if (response.validated === true) {
                    $('#usernameValidation').hide()
                    $('#afterValidation').show();
                    $('#username').val(response.username);
                    $('#gender').val(response.gender);
                } else {
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
