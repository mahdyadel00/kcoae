<?php
    $lang = App::getLocale()
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="<?php echo e($meta->keywords); ?>">
    <meta name="description" content="<?php echo e($meta->description); ?>">

    <title><?php echo e($meta->title); ?></title>
    <link href="<?php echo e(asset($meta->icon)); ?>" rel="icon" />
    <meta property="og:image" content="<?php echo e($meta->og_image); ?>">
    <meta property="og:title" content="<?php echo e($meta->og_title); ?>">
    <meta property="og:description" content="<?php echo e($meta->description); ?>">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="350" />
    <meta property="og:url" content="<?php echo URL::current(); ?>" />
    <meta property="og:site_name" content="<?php echo e($meta->web_name); ?>">
    <meta property="og:type" content="website" />
    <meta property="og:updated_time" content="1440432930" />


 <link href="<?php echo e(asset('css/new.css')); ?>" rel="stylesheet" type="text/css" />

    <link href="<?php echo e(asset('css/light/loader.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('css/dark/loader.css')); ?>" rel="stylesheet" type="text/css" />
    <script src="<?php echo e(asset('js/loader.js')); ?>"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;1000&family=Noto+Sans+Arabic:wght@300&display=swap" rel="stylesheet">

    <link href="<?php echo e(asset('css/bootstrap.rtl.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('css/light/plugins.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('css/dark/plugins.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <link href="<?php echo e(asset('css/light/dash_1.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('css/dark/dashboard/dash_1.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <!-- Tables -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/datatables.css')); ?>">





    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/light/table/dt-global_style.css')); ?>">


    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/dark/table/dt-global_style.css')); ?>">



    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('splide/splide.min.css')); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/light/splide/custom-splide.min.css')); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/dark/splide/custom-splide.min.css')); ?>">

    <!--  BEGIN CUSTOM STYLE PROFILE  -->
    <link href="<?php echo e(asset('css/light/profile/list-group.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('css/light/profile/user-profile.css')); ?>" rel="stylesheet" type="text/css" />

    <link href="<?php echo e(asset('css/dark/profile/list-group.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('css/dark/profile/user-profile.css')); ?>" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE PROFILE  -->

        <!--  BEGIN CUSTOM STYLE AJAX SEARCH  -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <!--  END CUSTOM STYLE AJAX SEARCH  -->

    <!--  Icon  -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo e(asset('icons/css/docs.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('icons/css/pygments-manni.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('icons/icon-fonts/elusive-icons-2.0.0/css/elusive-icons.min.css')); ?>"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"/>
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"/>
    <link rel="stylesheet" href="<?php echo e(asset('icons/icon-fonts/map-icons-2.1.0/css/map-icons.min.css')); ?>"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/4.4.0/font/octicons.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.10/css/weather-icons.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.8.0/css/flag-icon.min.css"/>
    <link rel="stylesheet" href="<?php echo e(asset('icons/dist/css/bootstrap-iconpicker.css')); ?>"/>

    <!--  End Icon  -->
    <style>
        form div{
            margin-bottom: 0.4%;
        }
    </style>
    <!-- text editor -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    
    

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <!-- end text editor -->


</head>
<?php /**PATH /home/kcoae/stage.kco.ae/center/resources/views/admin/layouts/topHeader.blade.php ENDPATH**/ ?>