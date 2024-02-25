<?php $__env->startSection('cultural'); ?>

    <!-- END HEADER -->

         <!-- TEAM -->
         <div class="team-page mb-5 pb-5">
            <div class="team-items">
                <div class="hadding-section pt-80 pb-5 ">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-12 d-flex align-items-center c-center">
                                <div class="hadding-text-area">
                                    <h2 class="black-c popin">العاملون  </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $counter=0;
                ?>
                <div class="container">
                    <div class="row">
                        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($counter<2): ?>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="team-contents">
                                        <div class="team-img">
                                            <img src="/<?php echo e($employee->image); ?>" alt="">
                                            <div class="fb-link"><a href="#" ><?php echo e($employee->name); ?></a></div>
                                        </div>
                                         <div class="team-dec">
                                            <h3><?php echo e($employee->role); ?></h3>
                                            <p class="position"><a href="<?php echo e(($employee->email!='')? 'mailto:'.$employee->email.'':''); ?>" target="_blank"><?php echo e($employee->email); ?></a></p>
                                        </div>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="team-contents">
                                        <div class="team-img">
                                            <img src="/<?php echo e($employee->image); ?>" alt="">
                                            <div class="fb-link"><a href="" target="_blank"><?php echo e($employee->name); ?></a></div>
                                        </div>
                                        <div class="team-dec">
                                            <h3><?php echo e($employee->role); ?></h3>
                                            <p class="position"><a href="<?php echo e(($employee->email!='')? 'mailto:'.$employee->email.'':''); ?>" target="_blank"><?php echo e($employee->email); ?></a></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php
                            $counter++;
                            ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </div>

        </div>
        <!-- END TEAM -->

    </div>
  <!-- FOOTER SECTION -->
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('cultural_center.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kcoae/stage.kco.ae/center/resources/views/cultural_center/worker.blade.php ENDPATH**/ ?>