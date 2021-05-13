<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Register | AGN Investment</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />

<!-- v4.0.0-alpha.6 -->
<link rel="stylesheet" href="{{ asset('dist/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('dist/css/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('dist/css/reg.css') }}">


<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">


<!-- MultiStep Form -->
<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2><strong>Complete Your Sign Up</strong></h2>
                <p>Fill all form field to go to next step</p>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform">

                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Details</strong></li>
                                <li class="active" id="personal"><strong>Package</strong></li>
                                <li class="active" id="payment"><strong>Payment</strong></li>
                                <li id="confirm"><strong>Finish</strong></li>
                            </ul> <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Payment Information</h2>

                                    @if($user->payment_method == 1)
                                        <div class="radio-group" style="text-align:center;">
                                            <label>Pay with Paystack</label><br />
                                            <input type="hidden" value="{{$user->email}}" name="email" id="email">
                                            <input type="hidden" value="{{$user->pack->price}}" name="package" id="package">
                                            <button type="submit" onclick="payWithPaystack()" class='radio' data-value="credit"><img alt="whatever" src="{{ asset('storage/posts/pay.png')}}" width="200px" height="100px"></button>
                                        </div>
                                    @endif

                                    @if($user->payment_method == 3)
                                        <div class="radio-group" style="text-align:center;">
                                            <label>Pay with Agricoin</label><br />
                                            <b style="text-align: center; color: black">0xer5jr8ri4e8um03jrkl3kvbm3nmnc3e323e3e3edkj3kj33kkj3</b>
                                            <p>Pay to this wallet and upload POP here</p>
                                            <input type="file" >
                                        </div>
                                    @endif

                                    @if($user->payment_method == 2)
                                        <div class="radio-group" style="text-align:center;">
                                            <label>Pay securely via Coinbase</label><br /><br /><p>&nbsp;</p>
                                            <a class="buy-with-crypto" data-custom="Pay with Coinbase"
                                               href="https://commerce.coinbase.com/checkout/6364f194-c8b1-40d1-b7f9-226767237f34">
                                            </a>
                                        <script src="https://commerce.coinbase.com/v1/checkout.js?version=201807">
                                        </script>
                                            <p>&nbsp;</p>
                                    </div>
                                    @endif
                                   </div>
                                   <input type="button" name="make_payment" class="next action-button" value="Confirm" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Success !</h2> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3"> <img alt="whatever" src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                    </div> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5>You Have Successfully Signed Up</h5>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery 3 -->
<script src="{{ asset('dist/js/jquery.min.js') }}"></script>

<!-- v4.0.0-alpha.6 -->
<script src="{{ asset('dist/bootstrap/js/bootstrap.min.js') }}"></script>

<script>
$(document).ready(function(){

    let current_fs, next_fs, previous_fs; //fieldsets
    let opacity;

    $(".next").click(function(){

    current_fs = $(this).parent();
    next_fs = $(this).parent().next();

    //Add Class Active
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
    step: function(now) {
    // for making fielset appear animation
    opacity = 1 - now;

    current_fs.css({
    'display': 'none',
    'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 600
});
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fieldset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 600
});
});

$('.radio-group .radio').click(function(){
$(this).parent().find('.radio').removeClass('selected');
$(this).addClass('selected');
});

$(".submit").click(function(){
return false;
})

});
</script>

<script src="https://js.paystack.co/v1/inline.js"></script>


<script>

    const paymentForm = document.getElementById('msform');
    paymentForm.addEventListener("submit", payWithPaystack, false);
    function payWithPaystack(e) {
        e.preventDefault();
        let handler = PaystackPop.setup({
            key: 'pk_test_51661306f2aef4a4c10c5730738c05b37dd4313d', // Replace with your public key
            email: document.getElementById('email').value,
            amount: document.getElementById('package').value * 100, // the amount value is multiplied by 100 to convert to the lowest currency unit
            currency: 'NGN', // Use GHS for Ghana Cedis or USD for US Dollars
            ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            // label: "Optional string that replaces customer email"
            onClose: function(){
                alert('Window closed.');
            },
            callback: function(response){

                let message = 'Payment complete! Reference: ' + response.reference;
                window.location = '/confirm/'  + response.reference;
            }
        });
        handler.openIframe();
    }

</script>



</html>
