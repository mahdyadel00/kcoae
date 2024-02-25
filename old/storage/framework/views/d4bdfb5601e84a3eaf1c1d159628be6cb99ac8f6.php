<?php $__env->startSection('content'); ?>

    <div id="content" class="main-content">
        <!--  BEGIN BREADCRUMBS  -->
        <?php echo $__env->make('admin.layouts.secondary_nav',['title'=>'العاملون ','sub_title'=>'إضافة عامل'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <br>
        <!--  END BREADCRUMBS  -->
        <div class="layout-spacing">

            <!-- Content -->
            <div class="col-12">
                <div class="user-profile ">
                    <div class="widget-content widget-content-area">
                        <h3 class="mt-4"> </h3>

                        <form class="g-3" method="post" action="<?php echo e(route('admin_panel.employees.store')); ?>" enctype="multipart/form-data" >
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
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="inputAddress" class="form-label"> الصورة الشخصية </label>
                                    <input type="file" class="form-control"  placeholder="1234 Main St" name="image" >

                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="inputEmail4" class="form-label">الاسم </label>
                                        <input type="text" class="form-control"   name="name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="inputEmail4" class="form-label">المركز الوظيفي </label>
                                        <input type="text" class="form-control"   name="role" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="inputEmail4" class="form-label">البريد الالكتروني</label>
                                        <input type="email" class="form-control"   name="email" >
                                    </div>
                                </div>



                                <div class="col-12">
                                    <div class="">
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

    <!--  END FOOTER  -->

    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kcoae/stage.kco.ae/center/resources/views/admin/employees/create.blade.php ENDPATH**/ ?>