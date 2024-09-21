<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/minia/layouts/pages-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Feb 2022 18:01:10 GMT -->
<head>

    <meta charset="utf-8"/>
    <title>{{config('app.name')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="Themesbrand" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('public/backend')}}/assets/images/favicon.ico">

    <!-- preloader css -->
    <link rel="stylesheet" href="{{asset('public/backend')}}/assets/css/preloader.min.css" type="text/css"/>

    <!-- Bootstrap Css -->
    <link href="{{asset('public/backend')}}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet"
          type="text/css"/>
    <!-- Icons Css -->
    <link href="{{asset('public/backend')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css"/>
    <!-- App Css-->
    <link href="{{asset('public/backend')}}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css"/>

    @stack('backendCss')
</head>

<body>


@yield('contents')



<script src=" {{asset('public/backend')}}/assets/libs/jquery/jquery.min.js"></script>
<script src=" {{asset('public/backend')}}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src=" {{asset('public/backend')}}/assets/libs/metismenu/metisMenu.min.js"></script>
<script src=" {{asset('public/backend')}}/assets/libs/simplebar/simplebar.min.js"></script>
<script src=" {{asset('public/backend')}}/assets/libs/node-waves/waves.min.js"></script>
<script src=" {{asset('public/backend')}}/assets/libs/feather-icons/feather.min.js"></script>
<!-- pace js -->
<script src=" {{asset('public/backend')}}/assets/libs/pace-js/pace.min.js"></script>
@stack('backendJs')
<script src=" {{asset('public/backend')}}/assets/js/app.js"></script>


</body>

</html>
