<?php $__env->startSection('content'); ?>

    <div id="content" class="main-content">
        <!--  BEGIN BREADCRUMBS  -->
        <?php echo $__env->make('admin.layouts.secondary_nav',['title'=>'البنرات','sub_title'=>'تعديل صورة'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <br>
        <!--  END BREADCRUMBS  -->
        <div class="layout-spacing">

            <!-- Content -->
            <div class="col-12">
                <div class="user-profile">
                    <div class="widget-content widget-content-area">
                        <h3 class="mt-4"></h3>

                        <form class="row g-3" method="post" action="<?php echo e(route('admin_panel.sliders.update',$item->id)); ?>" enctype="multipart/form-data" >
                                    <?php echo method_field('PATCH'); ?>
                                    <?php echo csrf_field(); ?>
                                    <?php if($errors->any()): ?>

                                        <div class="alert alert-danger">

                                            <ul style="list-style: none;margin:0">

                                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                    <li><?php echo e($error); ?></li>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </ul>

                                        </div>

                                    <?php endif; ?>
                                    <div class="col-md-12">
                                        <label for="inputAddress" class="form-label"> الصورة </label>
                                        <input type="file" class="form-control"  placeholder="1234 Main St" name="file" >
                                        <p class="image_size">يجب أن تكون أبعاد الصورة  1140*400 </p>
                                        <img src="<?php echo e(asset($item->image)); ?>" style="margin-bottom: 10px; width: 750px; height: 300px">

                                    </div>


                                    <div class="col-12 mt-4">
                                        <div class="">
                                        <button type="submit" class="btn btn-primary">تعديل</button>
                                        </div>
                                    </div>


                                </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

        <script>
            $(document).ready(function() {
                $('#text-en').summernote();
            });
            $(document).ready(function() {
                $('#text-ar').summernote();
            });

        </script>
        <!--  BEGIN FOOTER  -->
    <?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--  END FOOTER  -->

    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kcoae/stage.kco.ae/center/resources/views/admin/sliders/edit.blade.php ENDPATH**/ ?>