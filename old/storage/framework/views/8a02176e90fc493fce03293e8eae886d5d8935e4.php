<?php $__env->startSection('content'); ?>


    <div id="content" class="main-content">
        <!--  BEGIN BREADCRUMBS  -->
        <?php echo $__env->make('admin.layouts.secondary_nav',['title'=>'رقم الاتصال  ','sub_title'=>''], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <br>
        <!--  END BREADCRUMBS  -->
        <div class="layout-spacing">

            <!-- Content -->

            <div class="col-12" >
                <div class="user-profile ">
                    <div class="widget-content widget-content-area">
                            <h3 class="mt-4">  </h3>

                                <form class="g-3" method="post" action="/admin_panel/update_call" enctype="multipart/form-data" >
                                    <?php echo csrf_field(); ?>

                                    <div class="col-md-12">
                                        <label for="inputEmail4" class="form-label">رقم الاتصال</label>
                                        <input type="tel" class="form-control"  value="<?php echo e($media->call); ?>" name="call">
                                    </div>

                                    <div class="col-md-12 mt-4">
                                        <div class="">
                                            <button type="submit" class="btn btn-primary">تعديل</button>
                                        </div>
                                    </div>

                                </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="<?php echo e(asset('js/feather.min.js')); ?>"></script>
        <script>
            feather.replace();
        </script>

        <!--  BEGIN FOOTER  -->
    <?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--  END FOOTER  -->

    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kcoae/stage.kco.ae/center/resources/views/admin/call.blade.php ENDPATH**/ ?>