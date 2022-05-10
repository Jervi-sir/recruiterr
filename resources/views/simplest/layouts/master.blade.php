<!doctype html>
<html lang="en">

<head>
    <title>
        @yield('title')
    </title>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Simplest is - Professional A unique and beautiful collection of UI elements">
    <link rel="icon" href="simplest/images/favicon.png">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="simplest/css/style.css">
    <link rel="stylesheet" href="simplest/css/uikit.css">


    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="simplest/css/icons.css">
    <script src="https://kit.fontawesome.com/815e388c50.js" crossorigin="anonymous"></script>

    <!-- Google font
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    @yield('styles-head')
    @yield('js-head')
</head>
<body>
    <div class="background"></div>
    @yield('body')
    <!-- javaScripts
    ================================================== -->
    <script src="simplest/js/uikit.js"></script>
    <script src="simplest/js/simplebar.js"></script>

    @yield('styles-footer')
    @yield('js-footer')
</body>
</html>
