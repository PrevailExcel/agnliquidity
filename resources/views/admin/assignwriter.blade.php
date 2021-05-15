@extends('admin.master')
@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>PAssign Writers</h1>
      <ol class="breadcrumb">
        <li><a href="/admin/dash">Home</a></li>
        <li><i class="fa fa-angle-right"></i>Writers</li>
      </ol>
    </div>

    <!-- Main content -->
    <div class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
       @if (session('assigned'))

  <div class="alert alertX alert-success" style="float:right;">
    {{ session('assigned') }}
     </div>
    @endif
       @if (session('not_assigned'))

  <div class="alert alertX alert-danger" style="float:right;">
    {{ session('not_assigned') }}
     </div>
    @endif
      <div class="table-responsive">
                  <table id="assign" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($posts as $post)
                  @if(DB::table('model_has_roles')->where('role_id', 2)->where('model_id',$post->id)->first() == null)
                <tr>
                  <td>{{$post->name}}</td>
                  <td>{{$post->email}}</td>
                  <td>{{$post->phone}}</td>
                  <td>
                        <form action="{{route('assign.writer.now')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$post->id}}">
                    <button class="btn btn-info btn-sm rounded-0" type="submit" data-toggle="tooltip" data-placement="top" title="Assign">Assign</button>
                        </form>
                  </td>
                </tr>
                @endif
                @empty
                <tr>
                    <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Yes!</strong> No Users.
                    </div>
                </tr>
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
