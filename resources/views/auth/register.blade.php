<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Register - Join AGN Investment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('asset/images/favicon.ico')}}">
    <link href="{{asset('asset/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">

    <!-- Sweet Alert -->
    <link href="{{asset('asset/plugins/sweet-alert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css">

    <!-- App css -->
    <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('asset/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('asset/css/style.css')}}" rel="stylesheet" type="text/css" />

    <script src="{{asset('asset/js/modernizr.min.js')}}"></script>
<style>
    body, html {
    height: 100%;
    }

    .bg {
    /* The image used */
        background-color: #cbd3da;

    /* Full height */
    height: 100%;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    }
</style>
</head>


<body class="bg" style="opacity:0.9;">

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="wrapper-page">

                    <div class="m-t-40 card-box">
                        <div class="text-center">
                            <h2 class="text-uppercase m-t-0 m-b-30">
                                <a href="{{url('/')}}" class="text-success">
                                    AGN Liquidity
{{--                                    <span><img src="{{asset('asset/images/logo_dark.png')}}" alt="" height="30"></span>--}}
                                </a>
                            </h2>
                            <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                        </div>
                        <div class="account-content">
                            <form class="form-horizontal form-validation"  method="POST" action="{{route('register')}}">
                                @csrf
                                <div class="form-group m-b-20">
                                    <div class="col-12">
                                        <label for="username">Full Name</label>
                                        <input class="form-control @error('name') is-invalid @enderror" autocomplete="name"  value="{{ old('name') }}"  name="name" type="text" id="username" required="" placeholder="Wisdom Abioye">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>

                                <div class="form-group m-b-20">
                                    <div class="col-12">
                                        <label for="emailaddress">Email address</label>
                                        <input class="form-control @error('email') is-invalid @enderror" autocomplete="email"  value="{{ old('email') }}"  name="email" type="email" id="emailaddress" required="" placeholder="john@deo.com">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>

                                <div class="form-group m-b-20">
                                    <div class="col-12">
                                        <label for="phone">Phone Number</label>
                                        <input class="form-control @error('phone') is-invalid @enderror"autocomplete="phone number"  value="{{ old('phone') }}"  name="phone" type="tel" id="phone" required="" placeholder="0801 234 5678">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>


                                <div class="form-group m-b-20">
                                    <div class="col-12">
                                        <label for="country">Country</label>
                                        <select class="form-control @error('country') is-invalid @enderror"  value="{{ old('country') }}"  name="country" id="country" required="">
                                            <option>Select Country</option>
                                            <option>Afghanistan</option>
                                            <option>Albania</option>
                                            <option>Algeria</option>
                                            <option>American Samoa</option>
                                            <option>Andorra</option>
                                            <option>Angola</option>
                                            <option>Anguilla</option>
                                            <option>Antarctica</option>
                                            <option>Antigua and Barbuda</option>
                                            <option>Argentina</option>
                                            <option>Armenia</option>
                                            <option>Aruba</option>
                                            <option>Australia</option>
                                            <option>Austria</option>
                                            <option>Azerbaijan</option>
                                            <option>Bahamas</option>
                                            <option>Bahrain</option>
                                            <option>Bangladesh</option>
                                            <option>Barbados</option>
                                            <option>Belarus</option>
                                            <option>Belgium</option>
                                            <option>Belize</option>
                                            <option>Benin</option>
                                            <option>Bermuda</option>
                                            <option>Bhutan</option>
                                            <option>Bolivia</option>
                                            <option>Bosnia and Herzegovina</option>
                                            <option>Botswana</option>
                                            <option>Bouvet Island</option>
                                            <option>Brazil</option>
                                            <option>British Indian Ocean Territory</option>
                                            <option>Brunei Darussalam</option>
                                            <option>Bulgaria</option>
                                            <option>Burkina Faso</option>
                                            <option>Burundi</option>
                                            <option>Cambodia</option>
                                            <option>Cameroon</option>
                                            <option>Canada</option>
                                            <option>Cape Verde</option>
                                            <option>Cayman Islands</option>
                                            <option>Central African Republic</option>
                                            <option>Chad</option>
                                            <option>Chile</option>
                                            <option>China</option>
                                            <option>Christmas Island</option>
                                            <option>Cocos (Keeling) Islands</option>
                                            <option>Colombia</option>
                                            <option>Comoros</option>
                                            <option>Congo</option>
                                            <option>Cook Islands</option>
                                            <option>Costa Rica</option>
                                            <option>Croatia (Hrvatska)</option>
                                            <option>Cuba</option>
                                            <option>Cyprus</option>
                                            <option>Czech Republic</option>
                                            <option>Denmark</option>
                                            <option>Djibouti</option>
                                            <option>Dominica</option>
                                            <option>Dominican Republic</option>
                                            <option>East Timor</option>
                                            <option>Ecuador</option>
                                            <option>Egypt</option>
                                            <option>El Salvador</option>
                                            <option>Equatorial Guinea</option>
                                            <option>Eritrea</option>
                                            <option>Estonia</option>
                                            <option>Ethiopia</option>
                                            <option>Falkland Islands (Malvinas)</option>
                                            <option>Faroe Islands</option>
                                            <option>Fiji</option>
                                            <option>Finland</option>
                                            <option>France</option>
                                            <option>France, Metropolitan</option>
                                            <option>French Guiana</option>
                                            <option>French Polynesia</option>
                                            <option>French Southern Territories</option>
                                            <option>Gabon</option>
                                            <option>Gambia</option>
                                            <option>Georgia</option>
                                            <option>Germany</option>
                                            <option>Ghana</option>
                                            <option>Gibraltar</option>
                                            <option>Guernsey</option>
                                            <option>Greece</option>
                                            <option>Greenland</option>
                                            <option>Grenada</option>
                                            <option>Guadeloupe</option>
                                            <option>Guam</option>
                                            <option>Guatemala</option>
                                            <option>Guinea</option>
                                            <option>Guinea-Bissau</option>
                                            <option>Guyana</option>
                                            <option>Haiti</option>
                                            <option>Heard and Mc Donald Islands</option>
                                            <option>Honduras</option>
                                            <option>Hong Kong</option>
                                            <option>Hungary</option>
                                            <option>Iceland</option>
                                            <option>India</option>
                                            <option>Isle of Man</option>
                                            <option>Indonesia</option>
                                            <option>Iran (Islamic Republic of)</option>
                                            <option>Iraq</option>
                                            <option>Ireland</option>
                                            <option>Israel</option>
                                            <option>Italy</option>
                                            <option>Ivory Coast</option>
                                            <option>Jersey</option>
                                            <option>Jamaica</option>
                                            <option>Japan</option>
                                            <option>Jordan</option>
                                            <option>Kazakhstan</option>
                                            <option>Kenya</option>
                                            <option>Kiribati</option>
                                            <option>Korea, Democratic People""s Republic of</option>
                                            <option>Korea, Republic of</option>
                                            <option>Kosovo</option>
                                            <option>Kuwait</option>
                                            <option>Kyrgyzstan</option>
                                            <option>Lao People""s Democratic Republic</option>
                                            <option>Latvia</option>
                                            <option>Lebanon</option>
                                            <option>Lesotho</option>
                                            <option>Liberia</option>
                                            <option>Libyan Arab Jamahiriya</option>
                                            <option>Liechtenstein</option>
                                            <option>Lithuania</option>
                                            <option>Luxembourg</option>
                                            <option>Macau</option>
                                            <option>Macedonia</option>
                                            <option>Madagascar</option>
                                            <option>Malawi</option>
                                            <option>Malaysia</option>
                                            <option>Maldives</option>
                                            <option>Mali</option>
                                            <option>Malta</option>
                                            <option>Marshall Islands</option>
                                            <option>Martinique</option>
                                            <option>Mauritania</option>
                                            <option>Mauritius</option>
                                            <option>Mayotte</option>
                                            <option>Mexico</option>
                                            <option>Micronesia, Federated States of</option>
                                            <option>Moldova, Republic of</option>
                                            <option>Monaco</option>
                                            <option>Mongolia</option>
                                            <option>Montenegro</option>
                                            <option>Montserrat</option>
                                            <option>Morocco</option>
                                            <option>Mozambique</option>
                                            <option>Myanmar</option>
                                            <option>Namibia</option>
                                            <option>Nauru</option>
                                            <option>Nepal</option>
                                            <option>Netherlands</option>
                                            <option>Netherlands Antilles</option>
                                            <option>New Caledonia</option>
                                            <option>New Zealand</option>
                                            <option>Nicaragua</option>
                                            <option>Niger</option>
                                            <option>Nigeria</option>
                                            <option>Niue</option>
                                            <option>Norfolk Island</option>
                                            <option>Northern Mariana Islands</option>
                                            <option>Norway</option>
                                            <option>Oman</option>
                                            <option>Pakistan</option>
                                            <option>Palau</option>
                                            <option>Palestine</option>
                                            <option>Panama</option>
                                            <option>Papua New Guinea</option>
                                            <option>Paraguay</option>
                                            <option>Peru</option>
                                            <option>Philippines</option>
                                            <option>Pitcairn</option>
                                            <option>Poland</option>
                                            <option>Portugal</option>
                                            <option>Puerto Rico</option>
                                            <option>Qatar</option>
                                            <option>Reunion</option>
                                            <option>Romania</option>
                                            <option>Russian Federation</option>
                                            <option>Rwanda</option>
                                            <option>Saint Kitts and Nevis</option>
                                            <option>Saint Lucia</option>
                                            <option>Saint Vincent and the Grenadines</option>
                                            <option>Samoa</option>
                                            <option>San Marino</option>
                                            <option>Sao Tome and Principe</option>
                                            <option>Saudi Arabia</option>
                                            <option>Senegal</option>
                                            <option>Serbia</option>
                                            <option>Seychelles</option>
                                            <option>Sierra Leone</option>
                                            <option>Singapore</option>
                                            <option>Slovakia</option>
                                            <option>Slovenia</option>
                                            <option>Solomon Islands</option>
                                            <option>Somalia</option>
                                            <option>South Africa</option>
                                            <option>South Georgia South Sandwich Islands</option>
                                            <option>Spain</option>
                                            <option>Sri Lanka</option>
                                            <option>St. Helena</option>
                                            <option>St. Pierre and Miquelon</option>
                                            <option>Sudan</option>
                                            <option>Suriname</option>
                                            <option>Svalbard and Jan Mayen Islands</option>
                                            <option>Swaziland</option>
                                            <option>Sweden</option>
                                            <option>Switzerland</option>
                                            <option>Syrian Arab Republic</option>
                                            <option>Taiwan</option>
                                            <option>Tajikistan</option>
                                            <option>Tanzania, United Republic of</option>
                                            <option>Thailand</option>
                                            <option>Togo</option>
                                            <option>Tokelau</option>
                                            <option>Tonga</option>
                                            <option>Trinidad and Tobago</option>
                                            <option>Tunisia</option>
                                            <option>Turkey</option>
                                            <option>Turkmenistan</option>
                                            <option>Turks and Caicos Islands</option>
                                            <option>Tuvalu</option>
                                            <option>Uganda</option>
                                            <option>Ukraine</option>
                                            <option>United Arab Emirates</option>
                                            <option>United Kingdom</option>
                                            <option>United States</option>
                                            <option>United States minor outlying islands</option>
                                            <option>Uruguay</option>
                                            <option>Uzbekistan</option>
                                            <option>Vanuatu</option>
                                            <option>Vatican City State</option>
                                            <option>Venezuela</option>
                                            <option>Vietnam</option>
                                            <option>Virgin Islands (British)</option>
                                            <option>Virgin Islands (U.S.)</option>
                                            <option>Wallis and Futuna Islands</option>
                                            <option>Western Sahara</option>
                                            <option>Yemen</option>
                                            <option>Zaire</option>
                                            <option>Zambia</option>
                                            <option>Zimbabwe</option>
                                        </select>
                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>


                                <div class="form-group m-b-20">
                                    <div class="col-12">
                                        <label for="password">Password</label>
                                        <input class="form-control @error('password') is-invalid @enderror"autocomplete="new-password" name="password" type="password" required="" id="password" placeholder="Enter your password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>

                                <div class="form-group m-b-20">
                                    <div class="col-12">
                                        <label for="password">Confirm Password</label>
                                        <input class="form-control" name="password_confirmation" autocomplete="new-password" type="password" required="" id="password" placeholder="Confirm your password">
                                    </div>
                                </div>

                                <div class="form-group m-b-20">
                                    <div class="col-12">
                                        <label for="password">Reffered by</label>
                                        <input class="form-control" name="ref" disabled type="text" required="" id="" value="{{$referral}}">
                                    </div>
                                </div>


                                    <div class="form-group m-b-30">
                                        <div class="col-12">
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox5" type="checkbox">
                                                <label for="checkbox5">
                                                    I accept <a href="#">Terms and Conditions</a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group account-btn text-center m-t-10">
                                        <div class="col-12">
                                            <button class="btn btn-lg btn-custom btn-block" type="submit">Sign Up Free</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div class="clearfix"></div>

                        </div>
                    </div>
                    <!-- end card-box-->


                    <div class="row m-t-50">
                        <div class="col-sm-12 text-center">
                            <p class="text-muted">Already have an account?  <a href="{{route('login')}}" class="text-dark m-l-5">Sign In</a></p>
                        </div>
                    </div>

                </div>
                <!-- end wrapper -->

            </div>
        </div>
    </div>
</section>


<!-- jQuery  -->
<script src="{{asset('asset/js/jquery.min.js')}}"></script>
<script src="{{asset('asset/js/popper.min.js')}}"></script>
<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
<script src="{{asset('asset/js/jquery.slimscroll.js')}}"></script>

<script src="{{asset('asset/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>

<!-- form advanced init js -->
<script src="{{asset('asset/pages/jquery.form-advanced.init.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/plugins/parsleyjs/parsley.min.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.form-validation').parsley();
    });
</script>

<!-- App js -->
<script src="{{asset('asset/js/jquery.core.js')}}"></script>
<script src="{{asset('asset/js/jquery.app.js')}}"></script>

</body>
</html>
