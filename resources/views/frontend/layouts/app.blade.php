<!DOCTYPE html>
@langrtl
    <html lang="{{ app()->getLocale() }}" dir="rtl">
@else
    <html lang="{{ app()->getLocale() }}">
@endlangrtl
    <head>


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', app_name())</title>
        <meta name="description" content="@yield('meta_description', 'Laravel 5 Boilerplate')">
        <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
        @yield('meta')


        {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
        @stack('before-styles')
        <!-- custom css -->
        <!-- Favicon -->
		<link rel="icon" href="img/frontend/favicon.png">
        <!--Stylesheets -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/custom.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Google Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display+SC:400,400i"> 
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,700">

        <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->
        
    
        @stack('after-styles')
    </head>
    <body>
        @include('frontend.includes.nav')
        
        @yield('content')

        <!-- Scripts -->
        @stack('before-scripts')
        <!-- custom scripts -->
        <script src="js/jquery-3.1.0.min.js"></script>
        <script src="js/lightbox.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/bs.carousel.min.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/scripts.js"></script>
        {!! script(mix('js/frontend.js')) !!}
        @stack('after-scripts')

        @include('includes.partials.ga')
    </body>
</html>
