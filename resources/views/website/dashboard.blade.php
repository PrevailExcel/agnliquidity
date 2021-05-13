@extends('website.master')

@section('title')
    Dashboard - AGN
@endsection
@section('description')
    This is a description
@endsection
@section('content')

    <section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
        <div class="bg-sectin">
            <img src="assets/images/page-titles/33.jpg" width="100%" alt="Background"/>
        </div>
    </section>

    <div class="container" style="padding:10px;">
        <div class="row">

            <div class="col-xs-6 col-md-5" style="width:50%">
                <div class="card" style="width:100%">
                    <img class="card-img-top" src="{{ asset('assets/images/team/img_avatar3.png') }}" alt="Card image">
                    <div class="card-body">
                        <h5 class="card-title">{{$user->name}}</h5>
                        <p class="card-text">Package: <b>{{$user->pack->name}}</b>
                            <br/>Email: <b>{{$user->email}}</b>
                            <br/>Gender: <b>{{$user->gender}}</b>
                            @if(!$user->myRef == null)
                                <br/>Referred by: <b>{{$user->myRef->name}}</b>
                            @endif
                            {{--                        <br />Referrals:--}}
                            {{--                    @foreach($user->myRefs as $Refs)--}}
                            {{--                    <b>{{$Refs->name}}</b>--}}
                            {{--                        @endforeach--}}
                        </p>
                        <p class="card-text"><b style="color:#000080;">Referral Link:
                                <input type="text" id="myInput" class="form-control" readonly="readonly"
                                       value="{{url('/register').'?ref='.$user->affiliate_id}}">
                                <button class="btn rounded btn-dark" type="button" onclick="myFunction()">Copy Referral link</button>
                            </b></p>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-md-7" style="width:50%">
                <h5 style="color:#79ac36;">My Dashboard</h5>
                <div class="card-body">
                    {{-- <h5 class="card-title">Activity Earnings: </h5> --}}
                    <p class="card-text">Activity Earnings: <b>${{$user->act_earnings}}</b> <br/>
                        Ref Earnings: <b>$@if($user->ref_earnings == null)0 @endif
                                {{$user->ref_earnings}}</b> <br/>
                        Total Earnings: <b>${{$user->ref_earnings + $user->act_earnings}}</b></p>
                    <hr>
                    @if($user->is_eligible == 1)
                        @if($user->want_to_withdraw == 1)
                            <button type="button" style="padding:10px 28px;" class="btn-info rounded"><b>Applied!</b>
                            </button>
                            <p class="text-info">You've applied for withdrawal, expect your money in 1-2 day(s)</p>
                        @else
                            <form method="post" action="/withdraw-now">
                                @csrf
                                <button type="submit" style="padding:10px 28px;" class="btn-success rounded"><b>$
                                        Withdraw</b></button>
                            </form>
                            <p class="text-success">You can now apply for withdrawal</p>
                            {{--                        <p class="text-danger">Your Account has expired, please renew or Upgrade soon</p>--}}
                        @endif
                    @else
                        <button type="button" disabled style="padding:10px 28px;" class="btn-secondary rounded"><b>$
                                Withdraw</b></button>
                        <p class="text-aqua">The withdraw button will be activated when you are eligible.</p>
                    @endif
                    <hr>
                </div>
                {{-- <div class="d-none d-md-block" >
            <div class="col-lg-6">
                <img class="img" style="padding-bottom:5px;" width="100%" src="{{ asset('assets/images/team/download.jpg') }}" alt="Card image">
            </div>

     </div> --}}
                <div class="d-none d-md-block">
                    <div class="media border p-3">
                        @foreach($sPost as $post)
                            <img id="sImage" src="{{ asset('storage/posts/'.$post->image)}}" alt="John Doe"
                                 class="mr-3 mt-3 img" style="width:240px; height:240px;">
                            <div class="media-body">
                                <h5 id="sTitle"><a href="{{url("/sponsored-post/". $post->id)}}">{{$post->title}}</a>
                                </h5>
                                <p id="sBody">{{\Str::words($post->postbody,30)}}</p>
                                @if($user->is_eligible != 1)
                                    @if($user->have_shared == 0)
                                        <button type="button" class="faa fa fa-facebook faa-facebook"></button>
                                        <a href="whatsapp://send?text=*{{$post->title}}* %0a {{url("/sponsored-post/". $post->id)}}"
                                           data-action="share/whatsapp/share"
                                           class="faa fa fa-whatsapp faa-whatsapp"></a>
                                    @else
                                        <button type="button" disabled style="width:100%;"
                                                class="btn btn-outline-success"><b>Congratulations, Shared</b></button>
                                    @endif
                                @else
                                    <button type="button" disabled style="width:100%;" class="btn btn-outline-dark"><b>No
                                            activity until you renew</b></button>
                                @endif
                                <br/> <i style="color:#000;">Sponsored Post
                                    for {{ Carbon\Carbon::now()->toFormattedDateString() }}</i>
                                @endforeach
                            </div>
                    </div>
                </div>


            </div>
            <div class="container-fluid">
                <div class="row border d-md-none p-3">
                    <div class="card "><a href="{{url("/sponsored-post/". $post->id)}}"><img
                                src="{{ asset('storage/posts/'.$post->image)}}" alt="{{$post->title}}John Doe"
                                class="mr-3 mt-3"
                                style="width:240px; height:240px; padding-bottom:12px; padding-left:12px;"></a></div>
                    <div class="card-body">
                        <h5 id="sTitle"><a href="{{url("/sponsored-post/". $post->id)}}">{{$post->title}}</a></h5>
                        <p id="sBody">{{\Str::words($post->postbody,30)}}</p>
                        @if($user->is_eligible != 1)
                            @if($user->have_shared == 0)
                                <button type="button" class="faa fa fa-facebook faa-facebook"></button>
                                <a href="whatsapp://send?text=*{{$post->title}}* %0a {{url("/sponsored-post/". $post->id)}}"
                                   data-action="share/whatsapp/share" class="faa fa fa-whatsapp faa-whatsapp"></a>
                            @else
                                <button type="button" disabled style="width:100%;" class="btn btn-outline-success"><b>Congratulations,
                                        Shared</b></button>
                            @endif
                        @else
                            <button type="button" disabled style="width:100%;" class="btn btn-outline-dark"><b>No
                                    activity until you renew</b></button>
                        @endif
                        <br/> <i style="color:#000;">Sponsored Post
                            for {{ Carbon\Carbon::now()->toFormattedDateString() }}</i>
                    </div>
                </div>
                <div id="major1" class="alert alert-info">
                    @if($user->payment_method == 1)
                        @if($user->bank != null)
                            <p><strong>Hey</strong>, We have your Account details, do you want to <a
                                    href="javascript:void[0];" class="editIt"><b>edit it?</b></a></p>
                        @else
                            <p><strong>Hey</strong>, Add your bank account details.</p>
                            <form class="form-horizontal" action="{{url("/bank-details")}}" method="post">
                                @csrf
                                <input class="form-control" name="bank" id="bank" type="text" placeholder="Bank">
                                <input class="form-control" name="bank_name" id="bank_name" type="text"
                                       placeholder="Account Name">
                                <input class="form-control" name="account_number" id="account_number" type="tel"
                                       placeholder="Account Number">
                                <button type="submit" class="btn btn-info bankDetails">Submit</button>
                            </form>
                        @endif
                    @elseif($user->payment_method == 2)
                        @if($user->bitcoin_add != null)
                            <p><strong>Hey</strong>, We have your Bitcoin Wallet Address, do you want to <a
                                    href="javascript:void[0];" class="editIt"><b>edit it?</b></a></p>
                        @else
                            <p><strong>Hey</strong>, Add your Bitcoin Wallet: </p>
                            <form method="POST" class="form-horizontal" action="{{url("/bitcoin-details")}}">
                                @csrf
                                <input class="form-control" name="bitcoin_add" type="tel"
                                       placeholder="Bitcoin Wallet Address">
                                <button type="submit" class="btn btn-info bitcoinDetails">Submit</button>
                            </form>
                        @endif
                    @else
                        @if($user->agricoin_add != null)
                            <p><strong>Hey</strong>, We have your Agricoin Wallet Address, do you want to <a
                                    href="javascript:void[0];" class="editIt"><b>edit it?</b></a></p>
                        @else
                            <p><strong>Hey</strong> Add your Agricoin Wallet: </p>
                            <form method="POST" action="{{url('/agricoin-details')}}">
                                @csrf
                                <input class="form-control" name="agricoin_add" type="tel"
                                       placeholder="Agricoin Wallet Address">
                                <button type="submit" class="btn btn-info agricoinDetails">Submit</button>
                            </form>
                        @endif
                    @endif
                    Remember to share your daily Posts
                </div>

                <div id="major2" style="display: none" class="alert alert-info">
                    @if($user->payment_method == 1)
                        @if($user->bank != null)
                            <p><strong>Hey</strong>, Edit your bank account details.</p>
                            <form class="form-horizontal" action="{{url("/bank-details")}}" method="post">
                                @csrf
                                <input class="form-control" value="{{$user->bank}}" name="bank" id="bank" type="text"
                                       placeholder="Bank">
                                <input class="form-control" value="{{$user->bank_name}}" name="bank_name" id="bank_name"
                                       type="text" placeholder="Account Name">
                                <input class="form-control" value="{{$user->account_number}}" name="account_number"
                                       id="account_number" type="tel" placeholder="Account Number">
                                <button type="submit" class="btn btn-info bankDetails">Edit</button>
                            </form>
                        @endif
                    @elseif($user->payment_method == 2)
                        @if($user->bitcoin_add != null)
                            <p><strong>Hey</strong>, Edit your Wallet Address.</p>
                            <form class="form-horizontal" action="{{url("/bitcoin-details")}}" method="post">
                                @csrf
                                <input class="form-control" value="{{$user->bitcoin_add}}" name="bitcoin_add"
                                       id="account_number" type="tel" placeholder="Account Number">
                                <button type="submit" class="btn btn-info ">Edit</button>
                            </form>
                        @endif
                    @else
                        @if($user->agricoin_add != null)
                            <p><strong>Hey</strong>, Edit your Wallet Address.</p>
                            <form class="form-horizontal" action="{{url("/agricoin-details")}}" method="post">
                                @csrf
                                <input class="form-control" value="{{$user->agricoin_add}}" name="agricoin_add"
                                       id="account_number" type="tel" placeholder="Account Number">
                                <button type="submit" class="btn btn-info ">Edit</button>
                            </form>
                        @endif
                    @endif
                </div>

                <hr>
                <div class="card-body bg-secondary" center>
                    {{-- <h5 class="card-title">Activity Earnings: </h5> --}}
                    <p style="color:#ffffff;">Next Withdrawal: <i><b>{{$cashOutDate}}</b></i></p>
                    <p style="color:#ffffff;" class="card-text">Withdrawal status: <b>@if($user->is_eligible == 1)
                                Eligible @else Not Eligible @endif </b></p>
                    <p style="color:#ffffff;" class="card-text">Completed Cycles: <i><b>1</b></i></p>
                </div>
                <hr>
                <ul class="list-group">
                    <li class="list-group-item text-success">Activity Earnings<span style="float:right;"
                                                                                    class="badge">$ {{$user->act_earnings}}</span>
                    </li>
                    <li class="list-group-item text-info">Paid Earnings<span style="float:right;"
                                                                             class="badge"> $0 </span></li>
                    <li class="list-group-item text-warning">Total Earnings<span style="float:right;"
                                                                                 class="badge">${{$user->ref_earnings + $user->act_earnings}}</span>
                    </li>
                    <li class="list-group-item text-success">Current Refferals<span style="float:right;"
                                                                                    class="badge">{{$allRef}}</span>
                    </li>
                    <li class="list-group-item text-secondary">Total Refferals<span style="float:right;"
                                                                                    class="badge">{{$allRef}}</span>
                    </li>
                    <li class="list-group-item text-info">Available Earnings<span style="float:right;" class="badge">@if($user->is_eligible == 1)
                                ${{$user->ref_earnings + $user->act_earnings}}@else None yet @endif </span></li>
                    <li class="list-group-item text-danger">Payment Method<span style="float:right;"
                                                                                class="badge">{{$user->pay->name}}</span>
                    </li>
                </ul>

            </div>

        </div>
    </div>
    </div>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

    <script>
        $(document).ready(function () {

            setShareLinks();

            function socialWindow(url) {
                var left = (screen.width - 570) / 2;
                var top = (screen.height - 570) / 2;
                var params = "menubar=no,toolbar=no,status=no,width=570,height=570,top=" + top + ",left=" + left;
                window.open(url, "NewWindow", params);
            }

            function setShareLinks() {
                var pageUrl = encodeURIComponent(document.URL);
                var tweet = encodeURIComponent($("meta[property='og:description']").attr("content"));
                $(".faa-facebook").on("click", function () {
                    url = "https://www.facebook.com/sharer.php?u={{url("/sponsored-post/".$post->id)}}";
                    socialWindow(url);
                });


                $(".faa-whatsapp").on("click", function () {
                    window.location = '/activity/';
                });
            }

        });
    </script>

    <script>
        $(".faa-facebook").click(function () {
            $.get("/activity", function () {
                $(".faa-facebook").hide();
                $(".faa-whatsapp").hide();
                $(".sucesssful").show();
                alert("Shared");
            });
        });

        $(".editIt").click(function () {
            $("#major1").hide();
            $("#major2").css('display', 'block');
        })
    </script> <script>
    function myFunction() {
    /* Get the text field */
    var copyText = document.getElementById("myInput");

    /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */

    /* Copy the text inside the text field */
    document.execCommand("copy");

    /* Alert the copied text */
    alert("share your referral code" + copyText.value);
    }
    </script>
@endsection
