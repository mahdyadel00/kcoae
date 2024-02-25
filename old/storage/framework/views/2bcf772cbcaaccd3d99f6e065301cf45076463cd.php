<!doctype html>
<html class="no-js" lang="en">
<?php echo $__env->make('cultural_center.layouts.topHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
<div class="home-1">
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
<?php echo $__env->make('cultural_center.layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- END HEADER -->

    <!-- two slider -->
    <?php echo $__env->yieldContent('cultural'); ?>

    <!-- END CLIENT SECTION -->

    <!-- FOOTER SECTION -->
<?php echo $__env->make('cultural_center.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- END FOOTER SECTION -->
</div>
<?php echo $__env->make('cultural_center.layouts.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH /home/kcoae/stage.kco.ae/center/resources/views/cultural_center/home.blade.php ENDPATH**/ ?>