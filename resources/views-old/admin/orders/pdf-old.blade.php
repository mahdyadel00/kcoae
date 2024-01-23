<!DOCTYPE html >
<html lang="ar">
<style>
    body{
        direction: rtl;
        background:#fff !important;
    }
</style>
<!--<link href="{{asset('css/bootstrap.rtl.min.css')}}" rel="stylesheet" type="text/css" />-->
<body style="background:#fff !important;">
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
                {{$order->client->name}}
            </th>
        </tr>
        <tr>
            <th scope="row">
                البريد الالكتروني  :
            </th>
            <th>
                {{$order->client->email}}
            </th>
        </tr>

        <tr>
            <th scope="row">
                الرقم الوطني :
            </th>
            <th>
                {{$order->client->ID_number}}

            </th>
        </tr>
        <tr>
            <th scope="row">
                رقم الهاتف :
            </th>
            <th>
                {{$order->client->mobile}}

            </th>
        </tr>
        <tr>
            <th scope="row">
                <h5 class="popin pb-4"> شهادة الثانوية العامة  </h5>
                <div class="document-img">
                    <img src="/{{$order->high_school_certificate}}" alt="" width="300" height="200">
                </div>
            </th>
        </tr>
        <tr>
            <th scope="row">
                <h5 class="popin pb-4"> التامينات الاجتماعية</h5>
                <div class="document-img">
                    <img src="/{{$order->social_security}}" alt="" width="300" height="300">
                </div>
            </th>
        </tr>
        <tr>
            <th scope="row">
                <h5 class="popin pb-4">شهادة حسن السيرة والسلوك</h5>
                <div class="document-img">
                    <img src="/{{$order->good_conduct_certificate}}" alt="" width="300" height="300">
                </div>
            </th>
        </tr>
        <tr>
            <th scope="row">
                <h5 class="popin pb-4">جواز السفر</h5>
                <div class="document-img">
                    <img src="/{{$order->passport}}" alt="" width="300" height="300">
                </div>
            </th>
        </tr>
        <tr>
            <th scope="row">
                <h5 class="popin pb-4"> البطاقة المدنية</h5>
                <div class="document-img">
                    <img src="/{{$order->national_ID}}" alt="" width="300" height="300">
                </div>
            </th>
        </tr>
        <tr>
            <th scope="row">
                <h5 class="popin pb-4">شهادة الميلاد</h5>
                <div class="document-img">
                    <img src="/{{$order->birth_certificate}}" alt="" width="300" height="300">
                </div>
            </th>
        </tr>
        </tbody>
    </table>
</div>

</body>
</html>
