@extends('cultural_center.home')

@section('cultural')



    <div class="profile pt-5 pb-80">
        <div class="container">
            <div class="main-box">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12  col-7 align-items-center c-center">
                        <div class="hadding-text-area mt-4">
                            <h2 class="black-c popin small">الوثائق التي قمت بتقديمها</h2>
                        </div>
                        <div class="col-md-6">
                            <label> الاسم  : </label>
                            <span>{{$order->client->name}}</span>
                        </div>
                        <div class="col-md-6">
                            <label> البريد الاكتروني  : </label>
                            <span>{{$order->client->email}}</span>
                        </div>
                        <div class="col-md-6">
                            <label> رقم الهاتف  : </label>
                            <span>{{$order->client->mobile}}</span>
                        </div>
                        <div class="col-md-6">
                            <label> الرقم الوطني  : </label>
                            <span>{{$order->client->ID_number}}</span>
                        </div>
                        <div class="col-md-6">
                            <label> تاريخ تقديم الطلب  : </label>
                            <span>{{$order->client->created_at->toDateString()}}</span>
                        </div>
                        <table class="table align-items-right">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col" class="col-lg-6">الوثائق</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <h5 class="black-c popin pb-4"> شهادة الثانوية العامة  </h5>
                                        <div class="document-img">
                                            <a href="/{{$order->high_school_certificate}}" target="_blank">
                                                <img src="/{{$order->high_school_certificate}}" alt="">
                                            </a>
                                            <a href="/{{$order->high_school_certificate}}" download>
                                                <i class="fa fa-download" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </th>

                                    <th scope="row">
                                        <h5 class="black-c popin pb-4"> التامينات الاجتماعية</h5>
                                        <div class="document-img">
                                            <a href="/{{$order->social_security}}" target="_blank">
                                                <img src="/{{$order->social_security}}" alt="">
                                            </a>
                                            <a href="/{{$order->social_security}}" download>
                                                <i class="fa fa-download" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </th>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <h5 class="black-c popin pb-4">شهادة حسن السيرة والسلوك</h5>
                                        <div class="document-img">
                                            <a href="/{{$order->good_conduct_certificate}}" target="_blank">
                                                <img src="/{{$order->good_conduct_certificate}}" alt="">
                                            </a>
                                            <a href="/{{$order->good_conduct_certificate}}" download>
                                                <i class="fa fa-download" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </th>

                                    <th scope="row">
                                        <h5 class="black-c popin pb-4">جواز السفر</h5>
                                        <div class="document-img">
                                            <a href="/{{$order->passport}}" target="_blank">
                                                <img src="/{{$order->passport}}" alt="">
                                            </a>
                                            <a href="/{{$order->passport}}" download>
                                                <i class="fa fa-download" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </th>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <h5 class="black-c popin pb-4"> البطاقة المدنية</h5>
                                        <div class="document-img">
                                            <a href="/{{$order->national_ID}}" target="_blank">
                                                <img src="/{{$order->national_ID}}" alt="">
                                            </a>
                                            <a href="/{{$order->national_ID}}" download>
                                                <i class="fa fa-download" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </th>
                                    <th scope="row">
                                        <h5 class="black-c popin pb-4">شهادة الميلاد</h5>
                                        <div class="document-img">
                                            <a href="/{{$order->birth_certificate}}" target="_blank">
                                                <img src="/{{$order->birth_certificate}}" alt="">
                                            </a>
                                            <a href="/{{$order->birth_certificate}}" download>
                                                <i class="fa fa-download" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
