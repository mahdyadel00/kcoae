<!DOCTYPE html>
<html lang="en">
@include('admin.layouts.topHeader')
<body class="layout-boxed">
<!-- BEGIN LOADER -->
<div id="load_screen"> <div class="loader"> <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div></div></div>
<!--  END LOADER -->

<!--  BEGIN NAVBAR  -->
@include('admin.layouts.navigation')
<!--  END NAVBAR  -->
<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
@include('admin.layouts.sidebar')
    <!--  END SIDEBAR  -->

    <!--  BEGIN CONTENT AREA  -->
{{--@include('admin.layouts.content')--}}
@yield('content')
    <!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->

@include('admin.layouts.scripts')
</body>
</html>
