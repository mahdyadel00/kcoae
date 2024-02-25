<?php $__env->startSection('content'); ?>

    <div id="content" class="main-content">
        <!--  BEGIN BREADCRUMBS  -->
        <?php echo $__env->make('admin.layouts.secondary_nav',['title'=>'دليل الطالب ','sub_title'=>'إضافة '], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <br>
        <!--  END BREADCRUMBS  -->
        <div class="layout-spacing">

            <!-- Content -->
            <div class="col-12">
                <div class="user-profile ">
                    <div class="widget-content widget-content-area">
                    <h3 class="mt-4"> </h3>
                        <form class="g-3" method="post" action="<?php echo e(route('admin_panel.student_guide.store')); ?>" enctype="multipart/form-data" >
                            <?php echo method_field('POST'); ?>
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
                            <?php if(session()->has('message')): ?>

                                    <div class="alert alert-success">

                                        <?php echo e(session()->get('message')); ?>


                                    </div>
                            <?php endif; ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="inputAddress" class="form-label"> الملف </label>
                                    <input type="file" class="form-control"  placeholder="1234 Main St" name="file" required>
                                </div>

                                <div class="col-md-12">
                                    <label for="inputEmail4" class="form-label">الاسم </label>
                                    <input type="text" class="form-control"  name="name" required>
                                </div>


                                <div class="col-12">
                                    <div class=" mt-4">
                                        <button type="submit" class="btn btn-primary">إضافة</button>
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--  BEGIN FOOTER  -->
    <?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--  END FOOTER  -->

    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kcoae/stage.kco.ae/center/resources/views/admin/student_guide/create.blade.php ENDPATH**/ ?>