<?php $__env->startSection('cultural'); ?>


<div class="container">
    <div class="main-carousel">
        <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="slide fad">
                <div class="image-slider">
                    <img src="<?php echo e(asset($slider->image)); ?>" style="width: 100%" alt="">
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <a class="prev pr" onclick="move(-1)">&#10094</a>
    <a class="next ne" onclick="move(1)">&#10095</a>
</div>
</div>

<!-- اخر الاخؤبار -->

<div class="ticker_wrap">
    <div class="ticker__viewport">
        <marquee direction="right" scrollamount="5" behavior="scroll" onmouseover="this.stop()"
            onmouseout="this.start()">
            <ul class="ticker__list">
                <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="ticker__item"><?php echo e($item->description); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </marquee>
    </div>
</div>

<!-- CLIENT AREA -->
<div class="client-section pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 sm-50 col-12 link">
                <a href="/higher_education">
                    <div class="client-count-item smoth">
                        <div class="counts height">
                            <span class="gold popin"><i class="fa fa-university" aria-hidden="true"></i></span>
                            <p>  مميزات التعليم العالي في دولة الإمارات العربية المتحدة و دولة قطر و سلطنة عمان </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 sm-50 col-12 link">
                <a href="/government_contacts">
                <div class="client-count-item smoth">
                    <div class="counts height">
                        <span class="gold popin"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
                        <p>جهات التواصل الحكومية في الإمارات </p>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 sm-50 col-12 link">
                <a  href="/student_guides">
                <div class="client-count-item smoth">
                    <div class="counts height">
                        <span class="gold popin"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
                        <p>دليل الطالب</p>
                    </div>
                </div>
                </a>
            </div>

            

            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 sm-50 col-12 link">
                <a href="/financial_dues">
                <div class="client-count-item smoth">
                    <div class="counts height">
                        <span class="gold popin"><i class="fa fa-credit-card" aria-hidden="true"></i></span>
                        <p>المستحقات المالية </p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 sm-50 col-12 link">
                <a href="/health_insurance">
                <div class="client-count-item smoth">
                    <div class="counts height">
                        <span class="gold popin"><i class="fa fa-medkit" aria-hidden="true"></i></span>
                        <p>التأمين الصحي</p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 sm-50 col-12 link ">
                <a target="_blank" href="/<?php echo e($instructions->description); ?>">
                <div class="client-count-item smoth">
                    <div class="counts height">
                            <span class="gold popin"><i class="fa fa-files-o" aria-hidden="true"></i></span>
                            <p>اللوائح والتعليمات</p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 sm-50 col-12 link ">
                <a  href="/calendar">
                <div class="client-count-item smoth">
                    <div class="counts height">
                            <span class="gold popin"><i class="fa fa-files-o" aria-hidden="true"></i></span>
                            <p>التقويم</p>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 sm-50 col-12 link">
                        <a href="/faq">
                <div class="client-count-item smoth">
                    <div class="counts height">

                            <span class="gold popin"><i class="fa fa-question-circle" aria-hidden="true"></i></span>
                            <p>الأسئلة الشائعة</p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 sm-50 col-12 link ">
                <a target="_blank" href="/<?php echo e($circulars->description); ?>">
                <div class="client-count-item smoth">
                    <div class="counts height">
                            <span class="gold popin"><i class="fa fa-files-o" aria-hidden="true"></i></span>
                            <p>التعاميم </p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 sm-50 col-12 link">
                <a href="/useful_links">
                <div class="client-count-item smoth">
                    <div class="counts height">
                        <span class="gold popin"><i class="fa fa-link" aria-hidden="true"></i></span>
                        <p>روابط مفيدة</p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 sm-50 col-12 link">
                <a href="/technical_support">
                <div class="client-count-item smoth">
                    <div class="counts height">
                        <span class="gold popin"><i class="fa fa-handshake-o" aria-hidden="true"></i></span>
                        <p>الدعم الفني</p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 sm-50 col-12 link">
                <a href="/order-forms">
                <div class="client-count-item smoth">
                    <div class="counts height">
                        <span class="gold popin"><i class="fa fa-book" aria-hidden="true"></i></span>
                        <p>نماذج الطلبات  </p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</div>
<!-- END CLIENT AREA -->

<!-- CLIENT AREA
<div class="client-section pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 sm-50 col-12 link">
                <a href="/news">
                <div class="client-count-item smoth">
                    <div class="counts height">
                           <span class="gold popin"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
                           <p>الأخبار</p>
                    </div>
                </div>
                </a>
            </div>






        </div>
    </div>
</div>-->


<?php if($media->whatsapp): ?>

    <div class="icon whatsapp">
        <a target="_blank" href="https://wa.me/<?php echo e($media->whatsapp); ?>"> <i class="fab fa-whatsapp" aria-hidden="true"></i></a>
    </div>

<?php endif; ?>

<?php if($media->call): ?>

    <div class="icon phone">
        <a target="_blank" href="tel:<?php echo e($media->call); ?>"><i class="fa fa-phone" aria-hidden="true"></i></a>
    </div>

<?php endif; ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('cultural_center.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kcoae/stage.kco.ae/center/resources/views/cultural_center/welcome.blade.php ENDPATH**/ ?>