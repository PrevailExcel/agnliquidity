<title>404 - Page Not Found | AGN </title>
    <link rel="shortcut icon" href="{{asset('asset/images/favicon.ico')}}">

<link rel="stylesheet" href="{{ asset('dist/bootstrap/css/bootstrap.min.css') }}">
<style>
    .bg {
        /* The image used */
        background-image: url("{{asset('/storage/posts/404.jpg')}}");

        /* Full height */
        height: 100%;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
    }
</style>
<body class="bg" style="background-size:center; padding: 20px">
<h3 style="text-align: center">Oops! Seems you're lost,</h3>
<h5 style="text-align: center">But we can help you find your way back from <a href="{{url('/')}}">Here</a></h5>
</body>

<!-- v4.0.0-alpha.6 -->
<script src="{{ asset('dist/bootstrap/js/bootstrap.min.js') }}"></script>
