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
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="useToBePaid">
                            <thead>
                            <tr>
                                <th>Voucher Code</th>
                                <th>Package</th>
                                <th>Sent</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($vouchers as $vouch)
                                <tr>
                            <td id="{{$vouch->id}}">{{$vouch->voucher}}</td>
                                    <td>For {{\App\Package::where('id',$vouch->package)->value('name')}} <span class="text-muted">paid with</span> {{\App\PaymentMethod::where('id',$vouch->payment_method)->value('name')}}</td>
                            <td ><span class="text-muted fa fa-ambulance"> No</span></td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
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
