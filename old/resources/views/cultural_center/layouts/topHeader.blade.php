<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--    <meta name="description" content="A Template by themepul.com">--}}
{{--    <meta name="keywords"--}}
{{--          content="career, html template, client stories, coaching, consultation, consulting, counseling, firm, leadership, Life Coach, mentoring, professional, psychologist, services, session, training">--}}
    <meta name="keywords" content="{{$meta->keywords}}">
    <meta name="description" content="{{$meta->description}}">
    <meta name="author" content="Themepul">
    <title>{{$meta->title}}</title>
    <link href="{{asset($meta->icon)}}" rel="icon" />
    <meta property="og:image" content="{{$meta->og_image}}">
    <meta property="og:title" content="{{$meta->og_title}}">
    <meta property="og:description" content="{{$meta->description}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="350" />
    <meta property="og:url" content="<?php echo URL::current(); ?>" />
    <meta property="og:site_name" content="{{$meta->web_name}}">
    <meta property="og:type" content="website" />
    <meta property="og:updated_time" content="1440432930" />


    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap-4.1.1/bootstrap-rtl.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/icofont.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/flaticon.css')}}">
    <!-- END CSS-->
    <!-- STYLE CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style-rtl.css')}}">
    <!-- END STYLE CSS -->
    <!-- RESPONSIVE CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">

    <!--  Icon  -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="{{asset('icons/css/docs.css')}}"/>
    <link rel="stylesheet" href="{{asset('icons/css/pygments-manni.css')}}"/>
    <link rel="stylesheet" href="{{asset('icons/icon-fonts/elusive-icons-2.0.0/css/elusive-icons.min.css')}}"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"/>
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"/>
    <link rel="stylesheet" href="{{asset('icons/icon-fonts/map-icons-2.1.0/css/map-icons.min.css')}}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/4.4.0/font/octicons.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.10/css/weather-icons.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.8.0/css/flag-icon.min.css"/>
    <link rel="stylesheet" href="{{asset('icons/dist/css/bootstrap-iconpicker.css')}}"/>

    <!--  End Icon  -->

    <!--  start ajax   -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!--  End ajax  -->

</head>
