<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Admin | AGN Investment</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />

<!-- v4.0.0-alpha.6 -->
<link rel="stylesheet" href="{{ asset('dist/bootstrap/css/bootstrap.min.css') }}">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('dist/plugins/datatables/css/dataTables.bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('dist/css/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('dist/css/et-line-font/et-line-font.css') }}">
<link rel="stylesheet" href="{{ asset('dist/css/themify-icons/themify-icons.css') }}">

<!-- Chartist CSS -->
<link rel="stylesheet" href="{{ asset('dist/plugins/chartist-js/chartist.min.css') }}">
<link rel="stylesheet" href="{{ asset('dist/plugins/chartist-js/chartist-init.css') }}">
<link rel="stylesheet" href="{{ asset('dist/plugins/chartist-js/chartist-plugin-tooltip.css') }}">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="{{url('/')}}" class="logo blue-bg">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><img src="{{ asset('dist/img/logo-n.png') }}" alt=""></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><img src="{{ asset('assets/images/logo/logo-light.png') }}" alt=""></span> </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar blue-bg navbar-static-top">
      <!-- Sidebar toggle button-->
      <ul class="nav navbar-nav pull-left">
        <li><a class="sidebar-toggle" data-toggle="push-menu" href=""></a> </li>
      </ul>
      <div class="pull-left search-box">
        <form action="#" method="get" class="search-form">
          <div class="input-group">
            <input name="search" class="form-control" placeholder="Search..." type="text">
            <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i> </button>
            </span></div>
        </form>
        <!-- search form --> </div>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu p-ph-res"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="{{ asset('dist/img/img1.jpg') }}" class="user-image" alt="User Image"> <span class="hidden-xs">Admin</span> </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <div class="pull-left user-img"><img src="{{ asset('dist/img/img1.jpg') }}" class="img-responsive" alt="User"></div>
                <p class="text-left">Admin<small>admin@admin.com</small> </p>
                  @hasrole('superadmin')                                
                <div class="view-link text-left"><a href="#">Super Admin</a> </div>
                @else
                <div class="view-link text-left"><a href="#">Writer</a> </div>
                  @endhasrole
              </li>
              <li><a href="{{route('home')}}"><i class="icon-profile-male"></i> My Profile</a></li>
              <li role="separator" class="divider"></li>
                @auth
                    <a onclick="event.preventDefault(); 
                    document.getElementById('logout-form').submit();">
                    <li><i class="fa fa-power-off"></i> Logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endauth
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <div class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel" style="background:url({{ asset('dist/img/img8981.jpg') }})  center;">
        <div class="image text-center"><img src="{{ asset('dist/img/img1.jpg') }}" class="img-circle" alt="User Image"> </div>
        <div class="info">
          <p>Admin</p>
           @hasrole('superadmin')                                
          <a href="#">Super Admin</a></div>
                @else
          <a href="#">Writer</a></div>
                  @endhasrole
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">My Navigation</li>
        <li class="active treeview"> <a href="/admin/dash" onclick="window.location = '/admin/dash/';"> <i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
        </li>
          <li class="treeview"> <a href="#"> <i class="fa fa-gears"></i> <span>Generate Voucher</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
              <ul class="treeview-menu">
                  <li><a href="{{route('admin.generate')}}">Generate Package Voucher</a></li>
                  <li><a href="{{route('voucher.list')}}">Voucher List</a></li>
              </ul>
          </li>
          <li class="treeview"> <a href="#"> <i class="fa fa-book"></i> <span>Verify Users</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
              <ul class="treeview-menu">
                  <li><a href="{{route('verify.users')}}">Verify Users</a></li>
              </ul>
          </li>
          <li class="treeview"> <a href="#"> <i class="fa fa-bullseye"></i> <span>Sponsored Post</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
              <ul class="treeview-menu">
                  <li><a href="{{route('posts.create')}}">Add New Post</a></li>
                  <li><a href="{{route('posts.index')}}">View All Posts</a></li>
              </ul>
          </li>
        <li class="treeview"> <a href="#"> <i class="fa fa-bullseye"></i> <span>Packages</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="{{route('packages.index')}}">View All Packages</a></li>
          </ul>
        </li>
        <li class="treeview"> <a href="#"> <i class="fa fa-bullseye"></i> <span>Make Payments</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="{{route('pay.naira')}}">Naira Payments</a></li>
            <li><a href="{{route('pay.bitcoin')}}">Bitcoin Payments</a></li>
            <li><a href="{{route('pay.agricoin')}}">Agricoin Payments</a></li>
          </ul>
        </li>
        <li class="treeview"> <a href="#"> <i class="fa fa-briefcase"></i> <span>Payment History</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="{{route('payment.history')}}">Full Payment History</a></li>
          </ul>
        </li>
        <li class="treeview"> <a href="#"> <i class="fa fa-envelope-o "></i> <span>Users</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.viewUsers')}}">See All Users</a></li>
          </ul>
        </li>
        <li class="treeview"> <a href="#"> <i class="fa fa-bank "></i> <span>Assign Writer</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="{{route('assign.writer')}}">Make a user a writer</a></li>
            <li><a href="{{route('all.writers')}}">See selected writers</a></li>
          </ul>
        </li>
        <li class="treeview"> <a href="#"> <i class="fa fa-briefcase"></i> <span>Settings</span> <span class="pull-right-container"> <i class=""></i> </span> </a>

        </li>
        <li class="header">My Navigation</li>
            </ul>
    </div>
    <!-- /.sidebar -->
  </aside>

@yield('content')


  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">Version 1.0.0</div>
   AGN Investment © 2021. All rights reserved | Designed by <a href="https://reevatech.africa">Reevatech Africa</a>.</footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('dist/js/jquery.min.js') }}"></script>

<!-- v4.0.0-alpha.6 -->
<script src="{{ asset('dist/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- template -->
<script src="{{ asset('dist/js/niche.js') }}"></script>

{{--<!-- Chartjs JavaScript -->--}}
<script src="{{ asset('dist/plugins/chartjs/chart.min.js') }}"></script>
<script src="{{ asset('dist/plugins/chartjs/chart-int.js') }}"></script>
<script src="{{ asset('dist/plugins/functions/dashboard2.js') }}"></script>

{{--<!-- Chartist JavaScript -->--}}
{{--<script src="{{ asset('dist/plugins/chartist-js/chartist.min.js') }}"></script>--}}
{{--<script src="{{ asset('dist/plugins/chartist-js/chartist-plugin-tooltip.js') }}"></script>--}}
{{--<script src="{{ asset('dist/plugins/functions/chartist-init.js') }}"></script>--}}
<!-- DataTable -->
<script src="{{ asset('dist/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('dist/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<script>
    $(function () {
        $('#usersToBePaid').DataTable()
        $('#assign').DataTable()
        $('#listAll').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : true,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : true
        })
    })
</script>

<script src="{{ asset('dist/plugins/table-expo/filesaver.min.js') }}"></script>
<script src="{{ asset('dist/plugins/table-expo/xls.core.min.js') }}"></script>
<script src="{{ asset('dist/plugins/table-expo/tableexport.js') }}"></script>
<script>
    $("table").tableExport({formats: ["xls", "csv", "txt"],    });
</script>

</body>
</html>
