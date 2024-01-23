<!doctype html>
<html class="no-js" lang="en">
@include('cultural_center.layouts.topHeader')

<body>
<div class="home-1 watermark">
    <div class="preloader">
        <div class="whirlpool">
            <div class="ring ring1"></div>
            <div class="ring ring2"></div>
            <div class="ring ring3"></div>
            <div class="ring ring4"></div>
            <div class="ring ring5"></div>
            <div class="ring ring6"></div>
            <div class="ring ring7"></div>
            <div class="ring ring8"></div>
            <div class="ring ring9"></div>
        </div>
    </div>
    <!-- HEADER -->
@include('cultural_center.layouts.navigation')
    <!-- END HEADER -->

    <!-- two slider -->
    @yield('cultural')

    <!-- END CLIENT SECTION -->
    @if($media?->whatsapp)

    <div class="icon whatsapp">
        <a target="_blank" href="https://wa.me/{{$media->whatsapp}}"> <i class="fab fa-whatsapp" aria-hidden="true"></i></a>
    </div>

@endif

@if($media?->call)

    <div class="icon phone">
        <a target="_blank" href="tel:{{$media->call}}"><i class="fa fa-phone" aria-hidden="true"></i></a>
    </div>

@endif

    <!-- FOOTER SECTION -->
@include('cultural_center.layouts.footer')
    <!-- END FOOTER SECTION -->
</div>
@include('cultural_center.layouts.scripts')
</body>

</html>
