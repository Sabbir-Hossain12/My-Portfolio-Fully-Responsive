<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
    <link
            href=" {{asset('frontend')}}/assets/css/bootstrap.min.css"
            rel="stylesheet"
    />
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
            href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@600;700;800&family=Open+Sans:ital,wght@0,500;0,600;1,400;1,600&display=swap"
            rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,500;0,600;1,400;1,600&display=swap"
            rel="stylesheet"
    />
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
</body>


</html>
