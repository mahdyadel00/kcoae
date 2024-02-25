<?php $__env->startSection('cultural'); ?>


    <!-- END HEADER -->

    <!-- List -->
    <div class="team-page pb-5">
        <div class="team-items">
            <div class="hadding-section pt-80 pb-5">
                <div class="container">
                    <div class="hadding-text-area">
                        <h2 class="black-c popin small">روابط مفيدة</h2>
                        <div class="row pt-5 d-block">
                            <?php $__currentLoopData = $useful_links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $useful_link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-6 pb-4">
                                    <div class="lists">
                                        <li><a target="_blank" href="<?php echo e($useful_link->link); ?>"><i class="<?php echo e($useful_link->icon); ?>" aria-hidden="true"></i> <?php echo e($useful_link->title); ?></a></li>
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

<?php echo $__env->make('cultural_center.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kcoae/stage.kco.ae/center/resources/views/cultural_center/useful_links.blade.php ENDPATH**/ ?>