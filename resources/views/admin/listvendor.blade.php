@extends('admin.master')
@section('content')
    <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>View All Vendors</h1>
      <ol class="breadcrumb">
        <li><a href="/admin/dash">Home</a></li>
        <li><i class="fa fa-angle-right"></i>Vendor</li>
        <li><i class="fa fa-angle-right"></i>View</li>
      </ol>
    </div>
    
    <!-- Main content -->
    <div class="content"> 
      <!-- Small boxes (Stat box) -->
      <div class="row">
   
 <div class="info-box">
    <div class="table-responsive">
                  <table id="listpackage" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Username</th>
                  <th>Total Coupons</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($vendors as $user)
                <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>0</td>
                  <td>
                   <ul class="list-inline m-0">
                        <li class="list-inline-item">
                             <form action="{{route('vendors.destroy', $user->id)}}" method="POST">
                            <button class="btn btn-danger btn-sm rounded-0" type="submit" data-toggle="tooltip" data-placement="top" title="Revoke Vendor Status"><i class="fa fa-trash"></i>
                             @csrf
                             @method('DELETE')
                              </form>
                              </button>
                        </li>
                    </ul>
                  </td>
                </tr>
                @empty
                <tr>
                    <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Warning!</strong> You have not created any packages.
                    </div>                </tr>
                @endforelse
                </tbody>
              </table>
                  </div>
                </div>
     


</div>
</div>
</div>
<script src="{{ asset('dist/js/jquery.min.js') }}"></script> 
<script>
$(document).ready(function() {
$(".alertX").fadeTo(2000, 500).slideUp(500, function(){
    $(".alertX").slideUp(500);
});
});
</script>

<script>
$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
@endsection