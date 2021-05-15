@extends('admin.master')
@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Payment History</h1>
      <ol class="breadcrumb">
        <li><a href="/admin/dash">Home</a></li>
        <li><i class="fa fa-angle-right"></i>History</li>
      </ol>
    </div>

    <!-- Main content -->
    <div class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
      <div class="info-box">
      <div class="table-responsive">
                  <table id="listpost" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Username</th>
                  <th>Amount Paid</th>
                  <th>Payment Method</th>
                  <th>Date Paid</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($posts as $post)
                <tr>
                  <td>{{\App\User::where('id', $post->user_id)->value('username')}}</td>
                  <td>${{number_format($post->paid, 2)}}</td>
                  <td>{{\App\PaymentMethod::where('id', $post->payment_id)->value('name')}}</td>
                  <td>{{\Carbon\Carbon::parse($post->was_paid_on)->format('d M, Y')}}</td>
                </tr>
                @empty
                <tr>
                    <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>No</strong> Users haave been paid yet.
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
