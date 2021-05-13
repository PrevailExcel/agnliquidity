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
                
       @if (session('done'))

  <div class="alert alertX alert-success" style="float:right;">
    {{ session('done') }}
     </div>
    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="useToBePaid">
                            <thead>
                            <tr>
                                <th>Validated Username</th>
                                <th>Proof of payment</th>
                                <th>Approve</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($newuser as $vouch)
                                <tr>
                            <td>{{$vouch->username}}</td>
                            <td>
                                <a class="hover" href="{{ asset('storage/pop/'.$vouch->image)}}" >
                                <img src="{{ asset('storage/pop/'.$vouch->image)}}" height="80px" width="80px" alt="" title="" />
                                </a>
                            </td>
                            <td> 
                                <form method="POST" action="{{route('approve.user')}}"> 
                                @csrf
                                <input name="id" type="hidden" value="{{$vouch->id}}">
                                <button class="btn btn-info" type="submit">Approve</button>
                                </form>
                            </td>
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
