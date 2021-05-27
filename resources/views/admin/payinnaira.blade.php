@extends('admin.master')
@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Pay Users in Naira</h1>
      <ol class="breadcrumb">
        <li><a href="/admin/dash">Home</a></li>
        <li><i class="fa fa-angle-right"></i>Payment</li>
      </ol>
    </div>

    <!-- Main content -->
    <div class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
       @if (session('paid'))

  <div class="alert alertX alert-success" style="float:right;">
    {{ session('paid') }}
     </div>
    @endif
      <div class="table-responsive">
                  <table id="listpost" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Username</th>
                  <th>Amount</th>
                  <th>Bank</th>
                  <th>Account Number</th>
                  <th>Account Name</th>
                  <th>Paid?</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($posts as $post)
                <tr>
                  <td>{{\App\User::where('id', $post->user_id)->value('username')}}</td>
                  <td>${{number_format($post->act_earnings + \App\User::where('id',$post->user_id)->value('ref_earnings'))}}</td>
                  <td>{{\App\User::where('id', $post->user_id)->value('bank')}}</td>
                  <td>{{\App\User::where('id', $post->user_id)->value('bank_name')}}</td>
                  <td>{{\App\User::where('id', $post->user_id)->value('account_number')}}</td>
                  <td>
                        <form action="{{route('pay.asap')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$post->id}}">
                        <input type="hidden" name="amount" value="{{$post->act_earnings + \App\User::where('id',$post->user_id)->value('ref_earnings')}}">
                    <button class="btn btn-warning btn-sm rounded-0" type="submit" data-toggle="tooltip" data-placement="top" title="Paid">Paid</button>

                        </form>
                  </td>
                </tr>
                @empty
                <tr>
                    <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Yes!</strong> No Users to be paid in Naira.
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
