<?php $__env->startSection('cultural'); ?>


    <!-- END HEADER -->

    <!-- TEAM -->
    <div class="team-page">
        <div class="team-items">
            <div class="hadding-section pt-80 pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-12 d-flex align-items-center c-center">
                            <div class="hadding-text-area">
                                <h2 class="black-c popin small">الدعم الفني</h2>
                                <p class="pt-4 pb-4"><?php echo $technical_support->description; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- END TEAM -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('cultural_center.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kcoae/stage.kco.ae/center/resources/views/cultural_center/technical_support.blade.php ENDPATH**/ ?>