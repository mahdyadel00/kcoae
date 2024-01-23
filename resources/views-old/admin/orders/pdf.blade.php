<!DOCTYPE html >
<html lang="ar">
<style>
    body{
        direction: rtl;
    }
</style>
{{--<link href="{{asset('css/bootstrap.rtl.min.css')}}" rel="stylesheet" type="text/css" />--}}
<body>
<div class="container">
    <div style="text-align: center;">
        إلى من يهمه الأمر
    </div>
    <br>

        الاسم  : <span>{{$order->client->name}}</span><br>
        البريد الالكتروني  : <span>{{$order->client->email}}</span><br>
        الرقم الوطني : <span>{{$order->client->ID_number}}</span><br>
        رقم الهاتف : <span>{{$order->client->mobile}}</span>

        <h4 class="black-c popin pb-4"> شهادة الثانوية العامة  </h4>
        <div class="document-img">
            <img src="/{{$order->high_school_certificate}}" alt="" width="300" height="250">
        </div>

        <h4 class="black-c popin pb-4"> التامينات الاجتماعية</h4>
        <div class="document-img">
            <img src="/{{$order->social_security}}" alt="" width="300" height="250">
        </div>

        <h5 class="black-c popin pb-4">شهادة حسن السيرة والسلوك</h5>
        <div class="document-img">
            <img src="/{{$order->good_conduct_certificate}}" alt="" width="300" height="300">
        </div>

        <h5 class="black-c popin pb-4">جواز السفر</h5>
        <div class="document-img">
            <img src="/{{$order->passport}}" alt="" width="300" height="300">
        </div>

        <h5 class="black-c popin pb-4"> البطاقة المدنية</h5>
        <div class="document-img">
            <img src="/{{$order->national_ID}}" alt="" width="300" height="300">
        </div>
        <h5 class="black-c popin pb-4">شهادة الميلاد</h5>
        <div class="document-img">
            <img src="/{{$order->birth_certificate}}" alt="" width="300" height="300">
        </div>

</div>

</body>
</html>
