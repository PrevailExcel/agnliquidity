@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header sty-one">
            <h1>Sponsored Posts</h1>
            <ol class="breadcrumb">
                <li><a href="/admin/dash">Home</a></li>
                <li><i class="fa fa-angle-right"></i>Users</li>
            </ol>
        </div>

        <!-- Main content -->
        <div class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog"  role="document">
                        <div class="modal-content" >
                                <div class="info-box">
                                    <h4 class="text-black large_bold_darkblue" >Full User Details</h4>
                                    <hr class="m-t-3 m-b-3">
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <fieldset class="form-group">
                                                <label>Username</label>
                                                <input class="form-control" readonly id="showUsername" value="" type="text">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset class="form-group">
                                                <label>Phone Number</label>
                                                <input class="form-control" readonly id="showPhone" value="" type="text">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset class="form-group">
                                                <label>Email</label>
                                                <input class="form-control" readonly id="showEmail" value="" type="text">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset class="form-group">
                                                <label>Package</label>
                                                <input class="form-control" readonly id="showPack" value="" type="text">
                                            </fieldset>
                                        </div>
                                        <hr class="m-t-3 m-b-3">
                                        <hr>
                                        <div class="col-lg-4">
                                            <fieldset class="form-group">
                                                <label>Payment Method</label>
                                                <input class="form-control" readonly id="showPay" value="" type="text">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-4">
                                            <fieldset class="form-group">
                                                <label>Downlines</label>
                                                <input class="form-control" readonly id="showDown" value="" type="text">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-4">
                                            <fieldset class="form-group">
                                                <label>Affiliate Id</label>
                                                <input class="form-control" readonly id="showAffId" value="" type="text">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-4">
                                            <fieldset class="form-group">
                                                <label>Eligible to withdraw</label>
                                                <input class="form-control" readonly id="showEligible" value="" type="text">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-4">
                                            <fieldset class="form-group">
                                                <label>Registeration Date</label>
                                                <input class="form-control" readonly id="showRegDate" value="" type="text">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-4">
                                            <fieldset class="form-group">
                                                <label>Applied to withdraw</label>
                                                <input class="form-control" readonly id="showApp" value="" type="text">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-4">
                                            <fieldset class="form-group">
                                                <label>Activity Earning</label>
                                                <input class="form-control" readonly id="showActE" value="" type="text">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-4">
                                            <fieldset class="form-group">
                                                <label>Referral Earning</label>
                                                <input class="form-control" readonly id="showRefE" value="" type="text">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-4">
                                            <fieldset class="form-group">
                                                <label>Payment address</label>
                                                <input class="form-control" readonly id="showPayAdd" value="" type="text">
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

                <div class="info-box">
                    <div class="table-responsive">
                        <table id="listAll" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Username</th>
                                <th>Package</th>
                                <th>Payment Method</th>
                                <th>Affiliate ID</th>
                                <th>Referred by</th>
                                <th>Downlines</th>
                                <th>Activated</th>
                                <th>View</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($users as $post)
                                <tr>
                                    <td>{{$post->name}}</td>
                                    <td>
                                    @foreach ($post->connect as $single)
                                        {{\App\Package::where('id', $single->package_id)->value('name')}}
                                    @endforeach
                                    </td>
                                    <td>
                                    @foreach ($post->connect as $single)
                                        {{\App\PaymentMethod::where('id',$single->payment_id)->value('name')}}
                                    @endforeach</td>
                                    <td>{{$post->affiliate_id}}</td>
                                    <td>@if(!$post->myRef == null)
                                        {{$post->myRef->name}}
                                        @else
                                    null
                                        @endif</td>
                                    <td>{{count($post->myRefs)}}</td>
                                    <td>@if($post->is_approved == 1)Yes
                                        @else
                                            No @endif </td>
                                    <td>
                                        <ul class="list-inline m-0">
                                            <li class="list-inline-item">
                                                <button class="viewUsers btn btn-primary btn-sm rounded-0"
                                                        data-info="{{$post->id}}"
                                                         type="button" data-toggle="tooltip" data-placement="top" title="view"><i class="fa fa-user-circle"></i></button>
                                            </li>
                                                </form>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <div class="alert alert-warning alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>Warning!</strong> You have no users.
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

        $(document).on('click', '.viewUsers', function() {
            var id = $(this).data('info');
            $.ajax({
                url: '{{route('viewSingleUsers')}}',
                method: 'get',
                data: {id:id},
                dataType: 'json',
                success:function(data){
                    $('#showUsername').val(data.username);
                    $('#showAffId').val(data.affiliate_id);
                    $('#showEmail').val(data.email);
                    $('#showPhone').val(data.phone);
                    $('#showPay').val(data.payment);
                    $('#showPack').val(data.package);
                    $('#showPayAdd').val(data.payadd);
                    $('#showEligible').val(data.eligible);
                    $('#showDown').val(data.down);
                    $('#showRegDate').val(data.regdate);
                    $('#showRefE').val(data.referral);
                    $('#showActE').val(data.activity);
                    $('#showApp').val(data.applied);
                    $('#modalContactForm').modal('show');
                }
            });


        });

        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });

    </script>
@endsection
