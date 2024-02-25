<?php $__env->startSection('cultural'); ?>


    <!-- END NAVBAR -->

        <div class="blog-page pt-80 pb-80">
            <div class="container">
                <div class="row">
                    <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <a href="/news-details/<?php echo e($item->id); ?>">
                            <div class="single-blog">
                                <div class="log-img">
                                    <img src="/<?php echo e($item->image); ?>" alt="">
                                </div>
                                <div class="single-blog-content">
                                    <span class="black-bg"><?php echo e($item->created_at->toDateString()); ?></span>
                                    <p class="black-c title d-block"><?php echo e($item->title); ?></p>
                                    <p><?php echo $item->description; ?></p>
                                    <div class="buttons pt-4">
                                        <button class="btn btn-button btn-button-1 blue-bg"> للمزيد </button>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <br>
                <div><?php echo e($news->links()); ?></div>
            </div>
        </div>




  <?php $__env->stopSection(); ?>

<?php echo $__env->make('cultural_center.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kcoae/stage.kco.ae/center/resources/views/cultural_center/news.blade.php ENDPATH**/ ?>