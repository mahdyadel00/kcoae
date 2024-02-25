<?php $__env->startSection('content'); ?>
    <div id="content" class="main-content">
        <!--  BEGIN BREADCRUMBS  -->
        <?php echo $__env->make('admin.layouts.secondary_nav',['title'=>'نبذة تعريفية ','sub_title'=>''], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <br>
        <!--  END BREADCRUMBS  -->
        <div class="row layout-spacing " >

            <!-- Content -->
            <div class="col-12" style="margin:2% 2% auto;">
                <div class="user-profile ">
                    <div class="widget-content widget-content-area">
                        <div class=" " style="padding:2% 2% 0px; " >

                        </div>

                        <div class="" style="padding: 2%;">
                            <div class="container">
                                <?php if(session()->has('message')): ?>

                                    <div class="alert alert-success">

                                        <?php echo e(session()->get('message')); ?>


                                    </div>

                                <?php endif; ?>
                                <form  method="post" action="<?php echo e(route('admin_panel.about.update',1)); ?>" enctype="multipart/form-data" >
                                    <?php echo method_field('PATCH'); ?>
                                    <?php echo csrf_field(); ?>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="inputEmail4" class="form-label"> المحتوى </label>
                                            <textarea id="text-ar"  name="description"><?php echo e($about->description); ?></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="">
                                                <button type="submit" class="btn btn-primary">تعديل</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                                    <script>
                                        $(document).ready(function() {
                                            $('#text-ar').summernote();
                                        });

                                    </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--  BEGIN FOOTER  -->
    <?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--  END FOOTER  -->

    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kcoae/stage.kco.ae/center/resources/views/admin/about.blade.php ENDPATH**/ ?>