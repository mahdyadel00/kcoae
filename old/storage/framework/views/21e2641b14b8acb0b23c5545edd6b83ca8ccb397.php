<?php $__env->startSection('content'); ?>


    <div id="content" class="main-content">
        <!--  BEGIN BREADCRUMBS  -->
        <div class="secondary-nav">
            <div class="breadcrumbs-container" data-page-heading="Analytics">
                <header class="header navbar navbar-expand-sm">
                    <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                        <svg xmlns="http://www.w3.org/2000/.svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                    </a>
                    <div class="d-flex breadcrumb-content">
                        <div class="page-header">

                            <div class="page-title">
                            </div>

                            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active">Whatsapp </li>
                                </ol>
                            </nav>

                        </div>
                    </div>
                </header>
            </div>
        </div>
        <br>
        <!--  END BREADCRUMBS  -->
        <div class="layout-spacing">

            <!-- Content -->

            <div class="col-12">
                <div class="user-profile ">
                    <div class="widget-content widget-content-area">
                            <h3 class="mt-4">  </h3>
                                <form class="g-3" method="post" action="/admin_panel/update_whatsapp" enctype="multipart/form-data" >
                                    <?php echo csrf_field(); ?>

                                    <div class="col-md-12">
                                        <label for="inputEmail4" class="form-label">whatsapp</label>
                                        <input type="tel" class="form-control"  value="<?php echo e($media->whatsapp); ?>" name="whatsapp">
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

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kcoae/stage.kco.ae/center/resources/views/admin/whatsapp.blade.php ENDPATH**/ ?>