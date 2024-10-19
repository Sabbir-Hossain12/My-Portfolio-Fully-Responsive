<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Experienced Laravel developer specializing in building scalable web applications. Explore my portfolio to see projects that showcase my skills in PHP, Laravel, and full-stack web development.">
    <meta name="keywords" content="web development, portfolio, laravel,php, javascript, HTML, CSS, JQuery,AJax, Bootstrap ">
    <meta name="author" content="Sabbir Hossain">
{{--  Open Graph (for Social media)  --}}
    <meta property="og:title" content="Sabbir Hossain - Portfolio">
    <meta property="og:description" content="Professional Laravel developer with expertise in crafting dynamic and scalable web solutions. Check out my portfolio for examples of my work in modern web development and backend solutions.">
    <meta property="og:image" content="{{asset('frontend/assets/images/Cover/cover-min.jpg')}}">
    <meta property="og:url" content="https://dev-sabbir.com">
    <meta property="og:type" content="website">

    <link rel="canonical" href="https://dev-sabbir.com">
    <title>Sabbir</title>
    <!-- JQuery -->
    <script src=" {{asset('frontend')}}/assets/js/jquery-3.6.0.min.js"></script>

    <!-- FontAwesome -->
    <script src=" {{asset('frontend')}}/assets/js/fontawesome.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href=" {{asset('frontend')}}/assets/css/fontawesome.css"/>
    <!-- Custom CSS -->
    <link href=" {{asset('frontend')}}/assets/css/style.css" rel="stylesheet"/>
    <link href=" {{asset('frontend')}}/assets/css/query.css" rel="stylesheet"/>
    <!-- Bootstrap CSS -->
    <link href=" {{asset('frontend')}}/assets/css/bootstrap.min.css"
            rel="stylesheet"/>
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@600;700;800&family=Open+Sans:ital,wght@0,500;0,600;1,400;1,600&display=swap"
            rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,500;0,600;1,400;1,600&display=swap" rel="stylesheet"/>
    
    <!-- toastr css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>


@yield('header')

<main>


    @yield('contents')


</main>

<!-- Footer Section -->
@yield('footer')

<!-- Bootstrap JS -->
<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"
></script>

<!-- Custom JS -->
<script src="{{asset('frontend/assets/js/custom.js')}}"></script>


<!-- fontAwesome  -->

<script src="https://kit.fontawesome.com/e5bc425e91.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{!! Toastr::message() !!}
</body>


</html>
