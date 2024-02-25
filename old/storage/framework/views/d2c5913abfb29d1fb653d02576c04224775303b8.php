<?php $__env->startSection('cultural'); ?>


    <!-- END HEADER -->

    <!-- List -->
    <div class="team-page pb-5">
        <div class="team-items">
            <div class="hadding-section pt-80 pb-5">
                <div class="container">
                    <div class="hadding-text-area">
                        <h2 class="black-c popin small">لوائح الشهادات</h2>
                        <div class="row pt-5 d-block">
                            <?php $__currentLoopData = $certifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $certification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-6 pb-4">
                                    <div class="lists">
                                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                        <span><a href="/<?php echo e($certification->file); ?>" target="_blank"><?php echo e($certification->name); ?></a></span>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- END List -->

    <!-- FOOTER SECTION -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('cultural_center.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kcoae/stage.kco.ae/center/resources/views/cultural_center/certificate_list.blade.php ENDPATH**/ ?>