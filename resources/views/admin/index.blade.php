  @extends('admin.master')

  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Dashboard</h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><i class="fa fa-angle-right"></i> Dashboard</li>
      </ol>
    </div>

    <!-- Main content -->
    <div class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="info-box bg-maroon-gradient "> <span class="info-box-icon bg-transparent"><i class="ti-stats-up text-white"></i></span>
            <div class="info-box-content">
              <h6 class="info-box-text text-white">New Users</h6>
              <h1 class="text-white">{{$count}}</h1>
              <span class="progress-description text-white"> {{$countC}} packages in total </span> </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="info-box bg-green text-white"> <span class="info-box-icon bg-transparent"><i class="ti-face-smile"></i></span>
            <div class="info-box-content">
              <h6 class="info-box-text text-white">New Withdrawal Requests</h6>
              <h1 class="text-white">{{$withdraw}}</h1>
              <span class="progress-description text-white"> Not Responded Yet</span> </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua"> <span class="info-box-icon bg-transparent"><i class="ti-bar-chart"></i></span>
            <div class="info-box-content">
              <h6 class="info-box-text text-white">Paid Cashout</h6>
              <h1 class="text-white">$2309</h1>
              <span class="progress-description text-white"> 50% Increase in 30 Days </span> </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="info-box bg-orange"> <span class="info-box-icon bg-transparent"><i class="ti-money"></i></span>
            <div class="info-box-content">
              <h6 class="info-box-text text-white">Total Income</h6>
              <h1 class="text-white">$12222</h1>
              <span class="progress-description text-white"> 35% Increase in 30 Days </span> </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <div class="col-lg-7 col-xlg-9">
          <div class="info-box">
            <div class="d-flex flex-wrap">
              <div>
                <h4 class="text-black">New Users</h4>
              </div>
              <div class="ml-auto">
                <ul class="list-inline">
                </ul>
              </div>
            </div>
            <div>
                <div class="table-responsive" style="height: 372px">
                    <table class="table table-bordered table-striped" id="useToBePaid">
                        <thead>
                        <tr>
                            <th>Username</th>
                            <th>Referral ID</th>
                            <th>Verified</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($newusers as $nuser)
                        <tr>
                                <td>{{$nuser->name}}</td>
                                <td>{{$nuser->affiliate_id}}</td>
                                <td> @if ($nuser->is_approved == 1)
                                  Yes
                                @else
                                  No
                                @endif</td>
                                <td>{{\Carbon\Carbon::parse($nuser->created_at)->format('d M, Y')}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-xlg-3">
          <div class="info-box">
            <div class="d-flex flex-wrap">
              <div>
                <h4 class="text-black">Payment Method Chart</h4>
              </div>
            </div>
            <div class="m-t-2">
            	<canvas id="pie-chart" height="260"></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="info-box">
            <h4 class="m-b-2 text-black">Recent Activities</h4>
            <div class="sl-item sl-primary">
              <div class="sl-content"><small class="text-muted"><i class="fa fa-user position-left"></i> 5 mins ago</small>
                <p>New User just registered with a $50,000 Package using a referral id: 1092008</p>
              </div>
            </div>
            <div class="sl-item sl-danger">
              <div class="sl-content"><small class="text-muted"><i class="fa fa-user position-left"></i> 8 mins ago</small>
                <p>New User just registered with a $100,000 Package using a refferal id: 0896665</p>
              </div>
            </div>
            <div class="sl-item sl-success">
              <div class="sl-content"><small class="text-muted"><i class="fa fa-user position-left"></i> 10 mins ago</small>
                <p>New User just registered with a $10,000 Package using a refferal id: 696757</p>
              </div>
            </div>
            <div class="sl-item sl-warning">
              <div class="sl-content"><small class="text-muted"><i class="fa fa-user position-left"></i> 12 mins ago</small>
                <p>New User just registered with a $900,000 Package using a refferal id: 4782384</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="info-box">
            <div class="d-flex flex-wrap">
              <div>
                <h4 class="m-b-2 text-black">Latest Posts</h4>
              </div>
            </div>
              <div class="table-responsive" style="height: 350px">
                      <table id="listpost" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                              <th>Id</th>
                              <th>Title</th>
                              <th>Photo</th>
                              <th>Body</th>
                              <th>Actions</th>
                          </tr>
                          </thead>
                          <tbody>
                          @forelse ($posts as $post)
                              <tr>
                                  <td>{{$post->id}}</td>
                                  <td>{{$post->title}}</td>
                                  <td><img src="{{ asset('storage/posts/'.$post->image)}}" height="80px" width="80px" alt="" title="" /></td>
                                  <td>{{\Str::words($post->postbody,15)}}</td>
                                  <td>
                                      <ul class="list-inline m-0">
                                          <li class="list-inline-item">
                                              <button class="btn btn-primary btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="view"><i class="fa fa-table"></i></button>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="btn btn-success btn-sm rounded-0" href="{{route('posts.edit', $post->id)}}" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                          </li>
                                          <li class="list-inline-item">
                                              <form action="{{route('posts.destroy', $post->id)}}" method="POST">
                                                  @csrf
                                                  @method('DELETE')
                                                  <button class="btn btn-danger btn-sm rounded-0" type="submit" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>

                                              </form>
                                          </li>
                                      </ul>
                                  </td>
                              </tr>
                          @empty
                              <tr>
                                  <div class="alert alert-warning alert-dismissible">
                                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                                      <strong>Warning!</strong> You have not created any posts.
                                  </div>                </tr>
                          @endforelse
                          </tbody>
                      </table>
              </div>
{{--           <div class="ct-line-chart" style="height:350px;"></div>--}}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">

        </div>
        <div class="col-lg-8">
          </div>
      </div>
      <div class="info-box">
      <h4 class="text-black">Cashout</h4>
      <p>Top ten users to be paid</p>
      <div class="table-responsive">
                  <table class="table table-bordered table-striped" id="userToBePaid">
                <thead>
                <tr>
                  <th>Username</th>
                  <th>Package</th>
                  <th>Payment format</th>
                  <th>Date</th>
                  <th>Pay</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach($users as $user)
                        <td>{{$user->name}}</td>
                        <td>{{$user->pack->name}}</td>
                    @if($user->payment_method == 1)
                        <td><span class="text-success">Naira</span></td>
                        @elseif($user->payment_method == 2)
                            <td><span class="text-warning">Bitcoin</span></td>
                        @else
                        <td><span class="text-primary">AgriCoin</span></td>
                        @endif
                        <td>{{\Carbon\Carbon::parse($user->paid_on)->addDays(30)->format('d M, Y')}}</td>
                  <td><button type="button" class="btn btn-success">Pay</button></td>
                    @endforeach
                </tr>
                </tbody>
              </table>
          See the complete list <a href="#">Here</a>
                  </div>
                </div>

      </div>
    </div>
    <!-- /.content -->
  <script>
      $(document).ready( function () {
          $('#user-list').DataTable();
      } );
  </script>
@endsection
