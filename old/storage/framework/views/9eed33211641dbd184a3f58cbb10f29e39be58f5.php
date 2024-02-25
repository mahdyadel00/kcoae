<?php $__env->startSection('content'); ?>
    <div id="content" class="main-content">
        <!--  BEGIN BREADCRUMBS  -->
        <?php echo $__env->make('admin.layouts.secondary_nav',['title'=>'البنرات ','sub_title'=>''], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <br>
        <!--  END BREADCRUMBS  -->

        <!-- Content -->
        <div class="col-12">
            <div class="user-profile mt-4">
                <div class="widget-content widget-content-area">
                    <?php if(session()->has('message')): ?>

                        <div class="alert alert-success">

                            <?php echo e(session()->get('message')); ?>


                        </div>
                    <?php endif; ?>

                    <div class="table-responsive" id="t1">
                                <a class="btn btn-primary mb-2 me-4" href="<?php echo e(route('admin_panel.sliders.create')); ?>">إضافة صورة </a>

                                <table id="myTable1" class="table table-striped table-bordered table-sm">
                                    <thead>
                                    <tr>
                                        <th class="text-center" scope="col"></th>
                                        <th scope="col">الصورة</th>
                                        <th scope="col">تاريخ الإضافة </th>
                                        <th class="text-center" scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $counter=1;?>
                                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <tr>
                                            <td>
                                                <p class="text-center"><?php echo e($counter); ?></p>
                                                <span class="text-success"></span>
                                                <?php $counter++;?>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <div class="avatar me-2">
                                                        <img alt="avatar" src="/<?php echo e($item->image); ?>" class="rounded-circle" />
                                                    </div>

                                                </div>
                                            </td>

                                            <td>
                                                <p class="mb-0"><?php echo e($item->created_at->toDateString()); ?></p>
                                                <span class="text-success"></span>
                                            </td>

                                            <td class="text-center" width="10%">
                                                <div class="action-btns">
                                                    <a href="<?php echo e(route('admin_panel.sliders.edit',$item->id)); ?>" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="تعديل">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                    </a>
                                                    <a href="/admin_panel/del_slider/<?php echo e($item->id); ?>" class="action-btn btn-delete bs-tooltip" data-toggle="tooltip" data-placement="top" title="حذف">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                    </a>

                                                </div>
                                            </td>
                                        </tr>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>

                                </table>

                             <div class="col-sm-12 col-md-7">
                                    <?php echo e($items->links()); ?>

                            </div>

                            </div>
                </div>
            </div>
        </div>


        <!--  BEGIN FOOTER  -->
    <?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--  END FOOTER  -->




<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kcoae/stage.kco.ae/center/resources/views/admin/sliders/index.blade.php ENDPATH**/ ?>