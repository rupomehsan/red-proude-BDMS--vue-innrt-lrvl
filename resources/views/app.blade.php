<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- Required Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- Page Title -->
    <title> Blood Donation</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="{{ asset('frontend') }}/assets/images/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/animate.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/all.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/slick.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/fancybox.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css" />


    @inertiaHead
</head>

<body>

    @inertia

    <script src="{{ asset('frontend') }}/assets/js/jquery.min.js.download"></script>
    <script src="{{ asset('frontend') }}/assets/js/popper.min.js.download"></script>
    <script src="{{ asset('frontend') }}/assets/js/bootstrap.min.js.download"></script>
    <script src="{{ asset('frontend') }}/assets/js/wow.js.download"></script>
    <script src="{{ asset('frontend') }}/assets/js/slick.js.download"></script>
    <script src="{{ asset('frontend') }}/assets/js/fancybox.js.download"></script>
    <script src="{{ asset('frontend') }}/assets/js/counterup.min.js.download"></script>
    <script src="{{ asset('frontend') }}/assets/js/progress-bar.js.download"></script>
    <script src="{{ asset('frontend') }}/assets/js/smooth-scroll.min.js.download"></script>
    <script src="{{ asset('frontend') }}/assets/js/nice-select.js.download"></script>
    <script src="{{ asset('frontend') }}/assets/js/waypoints.js.download"></script>
    <script src="{{ asset('frontend') }}/assets/js/script.js.download"></script>
    <script defer src="/plugins/sweet_alert.js"></script>
    <script defer src="/plugins/pace.js"></script>

    @vite('resources/js/frontend/app.js')
</body>

</html>
