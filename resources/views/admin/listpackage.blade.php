@extends('admin.master')
@section('content')
    <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Investment Packages</h1>
      <ol class="breadcrumb">
        <li><a href="/admin/dash">Home</a></li>
        <li><i class="fa fa-angle-right"></i>Packages</li>
      </ol>
    </div>
    
    <!-- Main content -->
    <div class="content"> 
      <!-- Small boxes (Stat box) -->
      <div class="row">
   
 <div class="info-box">
    @if (session('Edited'))

  <div class="alert alertX alert-info" style="float:right;">
    {{ session('Edited') }}
     </div>
    @endif

       @if (session('Created'))

  <div class="alert alertX alert-success" style="float:right;">
    {{ session('Created') }}
     </div>
    @endif

       @if (session('Deleted'))

  <div class="alert alertX alert-danger" style="float:right;">
    {{ session('Deleted') }}
     </div>
    @endif
      <div class="table-responsive">
                  <table id="listpackage" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Package Name</th>
                  <th>Price</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($packages as $package)
                <tr>
                  <td>{{$package->id}}</td>
                  <td>{{$package->name}}</td>
                  <td>{{$package->price}}</td>
                  <td>
                   <ul class="list-inline m-0">
                        <li class="list-inline-item">
                            <a class="btn btn-success btn-sm rounded-0" href="{{route('packages.edit', $package->id)}}" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                        </li>
                        <li class="list-inline-item">
                             <form action="{{route('packages.destroy', $package->id)}}" method="POST">
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