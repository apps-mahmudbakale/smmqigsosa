<!DOCTYPE html>
<html class="no-js" lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>SMMIQGSSOSA | Official Home Page</title>

    <meta name="description" content="Old Boys Association of Sultan Muhammad Maccido Institute for Qur'an and General Studies Sokoto official Website" />
    <meta name="keywords" content="Institute Sokoto, Sultan Muhammad Maccido" />
    <meta name="author" content="Mahmud Bakale" />


    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet" />
    <!--Style css -->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}" media="all" />
    <style>
        #about-area .about-area-wrapper:before{
            background-image:url('{{asset('missions.png')}}') !important;
        }
    </style>
    
</head>

<body>
    @include('partials.header')

    @yield('content')

    @include('partials.footer')
    <script src="{{asset('js/scripts.js')}}"></script>
    {{-- <script src="{{asset('js/jquery.nice-select.js')}}"></script> --}}
    <!-- slick carousel slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
</body>

</html>
