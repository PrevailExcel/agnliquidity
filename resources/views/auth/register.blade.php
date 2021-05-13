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
                                    AGN Investment
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
                                        <input class="form-control" name="name" type="text" id="username" required="" placeholder="Wisdom Abioye">
                                    </div>
                                </div>

                                <div class="form-group m-b-20">
                                    <div class="col-12">
                                        <label for="emailaddress">Email address</label>
                                        <input class="form-control" name="email" type="email" id="emailaddress" required="" placeholder="john@deo.com">
                                    </div>
                                </div>

                                <div class="form-group m-b-20">
                                    <div class="col-12">
                                        <label for="phone">Phone Number</label>
                                        <input class="form-control" name="phone" type="tel" id="phone" required="" placeholder="0801 234 5678">
                                    </div>
                                </div>


                                <div class="form-group m-b-20">
                                    <div class="col-12">
                                        <label for="country">Country</label>
                                        <select class="form-control" name="country" id="country" required="">
                                            <option value="">Select Country</option>
                                            <option value="1">Afghanistan</option>
                                            <option value="2">Albania</option>
                                            <option value="3">Algeria</option>
                                            <option value="4">American Samoa</option>
                                            <option value="5">Andorra</option>
                                            <option value="6">Angola</option>
                                            <option value="7">Anguilla</option>
                                            <option value="8">Antarctica</option>
                                            <option value="9">Antigua and Barbuda</option>
                                            <option value="10">Argentina</option>
                                            <option value="11">Armenia</option>
                                            <option value="12">Aruba</option>
                                            <option value="13">Australia</option>
                                            <option value="14">Austria</option>
                                            <option value="15">Azerbaijan</option>
                                            <option value="16">Bahamas</option>
                                            <option value="17">Bahrain</option>
                                            <option value="18">Bangladesh</option>
                                            <option value="19">Barbados</option>
                                            <option value="20">Belarus</option>
                                            <option value="21">Belgium</option>
                                            <option value="22">Belize</option>
                                            <option value="23">Benin</option>
                                            <option value="24">Bermuda</option>
                                            <option value="25">Bhutan</option>
                                            <option value="26">Bolivia</option>
                                            <option value="27">Bosnia and Herzegovina</option>
                                            <option value="28">Botswana</option>
                                            <option value="29">Bouvet Island</option>
                                            <option value="30">Brazil</option>
                                            <option value="31">British Indian Ocean Territory</option>
                                            <option value="32">Brunei Darussalam</option>
                                            <option value="33">Bulgaria</option>
                                            <option value="34">Burkina Faso</option>
                                            <option value="35">Burundi</option>
                                            <option value="36">Cambodia</option>
                                            <option value="37">Cameroon</option>
                                            <option value="38">Canada</option>
                                            <option value="39">Cape Verde</option>
                                            <option value="40">Cayman Islands</option>
                                            <option value="41">Central African Republic</option>
                                            <option value="42">Chad</option>
                                            <option value="43">Chile</option>
                                            <option value="44">China</option>
                                            <option value="45">Christmas Island</option>
                                            <option value="46">Cocos (Keeling) Islands</option>
                                            <option value="47">Colombia</option>
                                            <option value="48">Comoros</option>
                                            <option value="49">Congo</option>
                                            <option value="50">Cook Islands</option>
                                            <option value="51">Costa Rica</option>
                                            <option value="52">Croatia (Hrvatska)</option>
                                            <option value="53">Cuba</option>
                                            <option value="54">Cyprus</option>
                                            <option value="55">Czech Republic</option>
                                            <option value="56">Denmark</option>
                                            <option value="57">Djibouti</option>
                                            <option value="58">Dominica</option>
                                            <option value="59">Dominican Republic</option>
                                            <option value="60">East Timor</option>
                                            <option value="61">Ecuador</option>
                                            <option value="62">Egypt</option>
                                            <option value="63">El Salvador</option>
                                            <option value="64">Equatorial Guinea</option>
                                            <option value="65">Eritrea</option>
                                            <option value="66">Estonia</option>
                                            <option value="67">Ethiopia</option>
                                            <option value="68">Falkland Islands (Malvinas)</option>
                                            <option value="69">Faroe Islands</option>
                                            <option value="70">Fiji</option>
                                            <option value="71">Finland</option>
                                            <option value="72">France</option>
                                            <option value="73">France, Metropolitan</option>
                                            <option value="74">French Guiana</option>
                                            <option value="75">French Polynesia</option>
                                            <option value="76">French Southern Territories</option>
                                            <option value="77">Gabon</option>
                                            <option value="78">Gambia</option>
                                            <option value="79">Georgia</option>
                                            <option value="80">Germany</option>
                                            <option value="81">Ghana</option>
                                            <option value="82">Gibraltar</option>
                                            <option value="83">Guernsey</option>
                                            <option value="84">Greece</option>
                                            <option value="85">Greenland</option>
                                            <option value="86">Grenada</option>
                                            <option value="87">Guadeloupe</option>
                                            <option value="88">Guam</option>
                                            <option value="89">Guatemala</option>
                                            <option value="90">Guinea</option>
                                            <option value="91">Guinea-Bissau</option>
                                            <option value="92">Guyana</option>
                                            <option value="93">Haiti</option>
                                            <option value="94">Heard and Mc Donald Islands</option>
                                            <option value="95">Honduras</option>
                                            <option value="96">Hong Kong</option>
                                            <option value="97">Hungary</option>
                                            <option value="98">Iceland</option>
                                            <option value="99">India</option>
                                            <option value="100">Isle of Man</option>
                                            <option value="101">Indonesia</option>
                                            <option value="102">Iran (Islamic Republic of)</option>
                                            <option value="103">Iraq</option>
                                            <option value="104">Ireland</option>
                                            <option value="105">Israel</option>
                                            <option value="106">Italy</option>
                                            <option value="107">Ivory Coast</option>
                                            <option value="108">Jersey</option>
                                            <option value="109">Jamaica</option>
                                            <option value="110">Japan</option>
                                            <option value="111">Jordan</option>
                                            <option value="112">Kazakhstan</option>
                                            <option value="113">Kenya</option>
                                            <option value="114">Kiribati</option>
                                            <option value="115">Korea, Democratic People""s Republic of</option>
                                            <option value="116">Korea, Republic of</option>
                                            <option value="117">Kosovo</option>
                                            <option value="118">Kuwait</option>
                                            <option value="119">Kyrgyzstan</option>
                                            <option value="120">Lao People""s Democratic Republic</option>
                                            <option value="121">Latvia</option>
                                            <option value="122">Lebanon</option>
                                            <option value="123">Lesotho</option>
                                            <option value="124">Liberia</option>
                                            <option value="125">Libyan Arab Jamahiriya</option>
                                            <option value="126">Liechtenstein</option>
                                            <option value="127">Lithuania</option>
                                            <option value="128">Luxembourg</option>
                                            <option value="129">Macau</option>
                                            <option value="130">Macedonia</option>
                                            <option value="131">Madagascar</option>
                                            <option value="132">Malawi</option>
                                            <option value="133">Malaysia</option>
                                            <option value="134">Maldives</option>
                                            <option value="135">Mali</option>
                                            <option value="136">Malta</option>
                                            <option value="137">Marshall Islands</option>
                                            <option value="138">Martinique</option>
                                            <option value="139">Mauritania</option>
                                            <option value="140">Mauritius</option>
                                            <option value="141">Mayotte</option>
                                            <option value="142">Mexico</option>
                                            <option value="143">Micronesia, Federated States of</option>
                                            <option value="144">Moldova, Republic of</option>
                                            <option value="145">Monaco</option>
                                            <option value="146">Mongolia</option>
                                            <option value="147">Montenegro</option>
                                            <option value="148">Montserrat</option>
                                            <option value="149">Morocco</option>
                                            <option value="150">Mozambique</option>
                                            <option value="151">Myanmar</option>
                                            <option value="152">Namibia</option>
                                            <option value="153">Nauru</option>
                                            <option value="154">Nepal</option>
                                            <option value="155">Netherlands</option>
                                            <option value="156">Netherlands Antilles</option>
                                            <option value="157">New Caledonia</option>
                                            <option value="158">New Zealand</option>
                                            <option value="159">Nicaragua</option>
                                            <option value="160">Niger</option>
                                            <option value="161">Nigeria</option>
                                            <option value="162">Niue</option>
                                            <option value="163">Norfolk Island</option>
                                            <option value="164">Northern Mariana Islands</option>
                                            <option value="165">Norway</option>
                                            <option value="166">Oman</option>
                                            <option value="167">Pakistan</option>
                                            <option value="168">Palau</option>
                                            <option value="169">Palestine</option>
                                            <option value="170">Panama</option>
                                            <option value="171">Papua New Guinea</option>
                                            <option value="172">Paraguay</option>
                                            <option value="173">Peru</option>
                                            <option value="174">Philippines</option>
                                            <option value="175">Pitcairn</option>
                                            <option value="176">Poland</option>
                                            <option value="177">Portugal</option>
                                            <option value="178">Puerto Rico</option>
                                            <option value="179">Qatar</option>
                                            <option value="180">Reunion</option>
                                            <option value="181">Romania</option>
                                            <option value="182">Russian Federation</option>
                                            <option value="183">Rwanda</option>
                                            <option value="184">Saint Kitts and Nevis</option>
                                            <option value="185">Saint Lucia</option>
                                            <option value="186">Saint Vincent and the Grenadines</option>
                                            <option value="187">Samoa</option>
                                            <option value="188">San Marino</option>
                                            <option value="189">Sao Tome and Principe</option>
                                            <option value="190">Saudi Arabia</option>
                                            <option value="191">Senegal</option>
                                            <option value="192">Serbia</option>
                                            <option value="193">Seychelles</option>
                                            <option value="194">Sierra Leone</option>
                                            <option value="195">Singapore</option>
                                            <option value="196">Slovakia</option>
                                            <option value="197">Slovenia</option>
                                            <option value="198">Solomon Islands</option>
                                            <option value="199">Somalia</option>
                                            <option value="200">South Africa</option>
                                            <option value="201">South Georgia South Sandwich Islands</option>
                                            <option value="202">Spain</option>
                                            <option value="203">Sri Lanka</option>
                                            <option value="204">St. Helena</option>
                                            <option value="205">St. Pierre and Miquelon</option>
                                            <option value="206">Sudan</option>
                                            <option value="207">Suriname</option>
                                            <option value="208">Svalbard and Jan Mayen Islands</option>
                                            <option value="209">Swaziland</option>
                                            <option value="210">Sweden</option>
                                            <option value="211">Switzerland</option>
                                            <option value="212">Syrian Arab Republic</option>
                                            <option value="213">Taiwan</option>
                                            <option value="214">Tajikistan</option>
                                            <option value="215">Tanzania, United Republic of</option>
                                            <option value="216">Thailand</option>
                                            <option value="217">Togo</option>
                                            <option value="218">Tokelau</option>
                                            <option value="219">Tonga</option>
                                            <option value="220">Trinidad and Tobago</option>
                                            <option value="221">Tunisia</option>
                                            <option value="222">Turkey</option>
                                            <option value="223">Turkmenistan</option>
                                            <option value="224">Turks and Caicos Islands</option>
                                            <option value="225">Tuvalu</option>
                                            <option value="226">Uganda</option>
                                            <option value="227">Ukraine</option>
                                            <option value="228">United Arab Emirates</option>
                                            <option value="229">United Kingdom</option>
                                            <option value="230">United States</option>
                                            <option value="231">United States minor outlying islands</option>
                                            <option value="232">Uruguay</option>
                                            <option value="233">Uzbekistan</option>
                                            <option value="234">Vanuatu</option>
                                            <option value="235">Vatican City State</option>
                                            <option value="236">Venezuela</option>
                                            <option value="237">Vietnam</option>
                                            <option value="238">Virgin Islands (British)</option>
                                            <option value="239">Virgin Islands (U.S.)</option>
                                            <option value="240">Wallis and Futuna Islands</option>
                                            <option value="241">Western Sahara</option>
                                            <option value="242">Yemen</option>
                                            <option value="243">Zaire</option>
                                            <option value="244">Zambia</option>
                                            <option value="245">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group m-b-20">
                                    <div class="col-12">
                                        <label for="password">Password</label>
                                        <input class="form-control" name="password" type="password" required="" id="password" placeholder="Enter your password">
                                    </div>
                                </div>

                                <div class="form-group m-b-20">
                                    <div class="col-12">
                                        <label for="password">Confirm Password</label>
                                        <input class="form-control" name="password_confirmation" type="password" required="" id="password" placeholder="Confirm your password">
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