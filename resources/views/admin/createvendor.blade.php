@extends('admin.master')
@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Generate Payment Voucher</h1>
      <ol class="breadcrumb">
        <li><a href="/admin/dash">Home</a></li>
        <li><i class="fa fa-angle-right"></i>Voucher</li>
      </ol>
    </div>

    <!-- Main content -->
    <div class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="info-box">
              <form class="form-horizontal" method="POST" action="{{route('voucher.generate')}}">
                  @csrf
                  <label for="select"><b>Select Package</b></label>
                  <select name="package" style="padding: 6px; height: 45px;" class="form-control">
                      @foreach($packages as $package)
                      <option value="{{$package->id}}">{{$package->name}}</option>
                      @endforeach
                  </select>
                  <br>
                  <label for="select"><b>Select Payment Method</b></label>
                  <select name="pay" style="padding: 6px; height: 45px;" class="form-control">
                      @foreach($payM as$pay)
                          <option value="{{$pay->id}}">{{$pay->name}}</option>
                      @endforeach
                  </select>
                  <hr>
                  <button type="submit" class="btn btn-block btn-info">Generate New Voucher</button>
              </form>
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
