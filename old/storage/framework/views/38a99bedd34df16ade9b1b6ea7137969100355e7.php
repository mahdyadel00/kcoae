<!DOCTYPE html >
<html lang="ar">
<style>
    body{
        direction: rtl;
    }
</style>
<link href="<?php echo e(asset('css/bootstrap.rtl.min.css')); ?>" rel="stylesheet" type="text/css" />
<body>
<div class="container">
    <div style="text-align: center;">
        إلى من يهمه الأمر
    </div>
    <br>
    <table class="table align-items-right">
        <thead class="thead-dark">

        </thead>
        <tbody>
        <tr>
            <th scope="row">
                الاسم  :
            </th>
            <th>
                <?php echo e($order->client->name); ?>

            </th>
        </tr>
        <tr>
            <th scope="row">
                البريد الالكتروني  :
            </th>
            <th>
                <?php echo e($order->client->email); ?>

            </th>
        </tr>

        <tr>
            <th scope="row">
                الرقم الوطني :
            </th>
            <th>
                <?php echo e($order->client->ID_number); ?>


            </th>
        </tr>
        <tr>
            <th scope="row">
                رقم الهاتف :
            </th>
            <th>
                <?php echo e($order->client->mobile); ?>


            </th>
        </tr>
        <tr>
            <th scope="row">
                <h5 class="black-c popin pb-4"> شهادة الثانوية العامة  </h5>
                <div class="document-img">
                    <img src="/<?php echo e($order->high_school_certificate); ?>" alt="" width="300" height="200">
                </div>
            </th>
        </tr>
        <tr>
            <th scope="row">
                <h5 class="black-c popin pb-4"> التامينات الاجتماعية</h5>
                <div class="document-img">
                    <img src="/<?php echo e($order->social_security); ?>" alt="" width="300" height="300">
                </div>
            </th>
        </tr>
        <tr>
            <th scope="row">
                <h5 class="black-c popin pb-4">شهادة حسن السيرة والسلوك</h5>
                <div class="document-img">
                    <img src="/<?php echo e($order->good_conduct_certificate); ?>" alt="" width="300" height="300">
                </div>
            </th>
        </tr>
        <tr>
            <th scope="row">
                <h5 class="black-c popin pb-4">جواز السفر</h5>
                <div class="document-img">
                    <img src="/<?php echo e($order->passport); ?>" alt="" width="300" height="300">
                </div>
            </th>
        </tr>
        <tr>
            <th scope="row">
                <h5 class="black-c popin pb-4"> البطاقة المدنية</h5>
                <div class="document-img">
                    <img src="/<?php echo e($order->national_ID); ?>" alt="" width="300" height="300">
                </div>
            </th>
        </tr>
        <tr>
            <th scope="row">
                <h5 class="black-c popin pb-4">شهادة الميلاد</h5>
                <div class="document-img">
                    <img src="/<?php echo e($order->birth_certificate); ?>" alt="" width="300" height="300">
                </div>
            </th>
        </tr>
        </tbody>
    </table>
</div>

</body>
</html>
<?php /**PATH /home/kcoae/stage.kco.ae/center/resources/views/admin/orders/pdf.blade.php ENDPATH**/ ?>