<?php $__env->startSection('content'); ?>

    <div id="content" class="main-content">
        <!--  BEGIN BREADCRUMBS  -->
        <?php echo $__env->make('admin.layouts.secondary_nav',['title'=>'الإعدادات  ','sub_title'=>''], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <br>
        <!--  END BREADCRUMBS  -->
        <div class="layout-spacing">

            <!-- Content -->
            <div class="col-12">
                <div class="user-profile ">
                    <div class="widget-content widget-content-area">
                        <h3 class="mt-4"> </h3>

                        <form class="g-3 row" method="post" action="<?php echo e(route('admin_panel.metas.update',1)); ?>" enctype="multipart/form-data" >
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
                            <?php if(session()->has('message')): ?>

                                <div class="alert alert-success">

                                    <?php echo e(session()->get('message')); ?>


                                </div>
                            <?php endif; ?>

                            <div class="col-md-6">
                                <label for="inputAddress" class="form-label">og image </label>
                                 <input type="file" class="form-control"  placeholder="1234 Main St" name="og_image" >
                                <p class="image_size">يجب أن تكون أبعاد الصورة  600*350 </p>
                                <img alt="avatar" src="/<?php echo e($meta->og_image); ?>"  width="200" height="200"/>
                                <br><br>

                            </div>
                            <div class="col-md-6">
                                <label for="inputAddress" class="form-label">الأيقونة</label>
                                <input type="file" class="form-control"  placeholder="1234 Main St" name="icon" >

                                <img alt="avatar" src="/<?php echo e($meta->icon); ?>"  width="200" height="200"/>
                                <br><br>

                            </div>
                            <div class="col-md-6">
                                <label for="inputAddress" class="form-label">صورة شريط ال navbar </label>
                                 <input type="file" class="form-control"  placeholder="1234 Main St" name="header_logo" >
                                <p class="image_size">يجب أن تكون أبعاد الصورة  90*90 </p>
                                <img alt="avatar" src="/<?php echo e($meta->header_logo); ?>"  width="200" height="200"/>
                                <br><br>

                            </div>
                            <div class="col-md-6">
                                <label for="inputAddress" class="form-label">صورة التذييل </label>
                                 <input type="file" class="form-control"  placeholder="1234 Main St" name="footer_logo" >
                                <p class="image_size">يجب أن تكون أبعاد الصورة  180*210 </p>
                                <img alt="avatar" src="/<?php echo e($meta->footer_logo); ?>"  width="200" height="200"/>
                                <br><br>

                            </div>



                                <input type="hidden" class="form-control"  name="web_color" value="<?php echo e($meta->web_color); ?>">

                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">العنوان</label>
                                <input type="text" class="form-control"  name="title" value="<?php echo e($meta->title); ?>">
                            </div>

                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">الوصف </label>
                                <textarea  class="form-control"  name="description" ><?php echo e($meta->description); ?></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">الكلمات المفتاحية</label>
                                <input type="text" class="form-control"  name="keywords" value="<?php echo e($meta->keywords); ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">meta title </label>
                                <input type="text" class="form-control"  name="og_title" value="<?php echo e($meta->og_title); ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label"> الدعم الفني</label>
                                <textarea type="text" class="form-control"  name="footer" ><?php echo e($meta->footer); ?></textarea>
                            </div>

                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label"> اسم الموقع </label>
                                <input type="text" class="form-control"  name="web_name" value="<?php echo e($meta->web_name); ?>">
                            </div>




                                        <input type="hidden" class="form-control"  name="link" value="<?php echo e($meta->link); ?>">

                            <div class="col-12">
                                <div class="">
                                    <button type="submit" class="btn btn-primary">تعديل</button>
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

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kcoae/stage.kco.ae/center/resources/views/admin/metas/index.blade.php ENDPATH**/ ?>