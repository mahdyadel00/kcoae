@extends('admin.dashboard')

@section('content')

    <div id="content" class="main-content">
        <!--  BEGIN BREADCRUMBS  -->
        @include('admin.layouts.secondary_nav',['title'=>' كتاب إلى من يهمه الأمر ','sub_title'=>'عرض الطلب'])
        <br>

        <!--  END BREADCRUMBS  -->

        <div class="row layout-spacing " >

            <!-- Content -->
            <div class="col-12" style="margin:2% 2% auto;">
                <div class="user-profile ">
                    <div class="widget-content widget-content-area">
                        <div class=" " style="padding:2% 2% 0px; " >
                            <h3 class=""> </h3>
                          </div>
                        <div class="" style="padding: 2%; font-weight: bold;">
                            <div class="container">
                                <div class="hadding-text-area mt-6" style="margin-bottom: 20px;margin-right: 250px;">
                                    <h1 class="black-c popin small" style="font-size: 30px">البيانات الشخصية </h1>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="font"> الاسم الأول  : </label>
                                        <span>{{$order->client->first_name_ar}}</span>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="font"> الاسم الأول(إنجليزي) : </label>
                                        <span>{{$order->client->first_name_en }}</span>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="font"> الاسم الثاني  : </label>
                                        <span>{{$order->client->second_name_ar}}</span>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="font"> الاسم الثاني(إنجليزي) : </label>
                                        <span>{{$order->client->second_name_en }}</span>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="font"> الاسم الثالث  : </label>
                                        <span>{{$order->client->third_name_ar}}</span>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="font"> الاسم الثالث(إنجليزي) : </label>
                                        <span>{{$order->client->third_name_en }}</span>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="font"> البريد الاكتروني  : </label>
                                        <span>{{$order->client->email}}</span>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="font"> رقم الهاتف  : </label>
                                        <span>{{$order->client->mobile}}</span>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="font"> الرقم الوطني  : </label>
                                        <span>{{$order->client->ID_number}}</span>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="font"> تاريخ تقديم الطلب  : </label>
                                        <span>{{$order->client->created_at->toDateString()}}</span>
                                    </div>
                                    <table class="table table-striped"  id="myTable1">
                                        <thead>
                                        <tr>
                                            <th scope="col">الدولة</th>
                                            <th scope="col">الجامعة </th>
                                            <th scope="col">التخصص</th>
                                            <th scope="col">التخصص الفرعي</th>
                                            <th scope="col">بكالوريوس</th>
                                            <th scope="col">ماجستير</th>
                                            <th scope="col">دكتوراه</th>
                                            <th scope="col">ملاحظات</th>
                                            <th scope="col">أخر تحديث</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($order_universities as $university)
                                            <tr>
                                                <td>{{ $university->country?->name }}</td>
                                                <td>{{ $university->name }}</td>
                                                <td>{{ $university->specialty?->name }}</td>
                                                <td>{{ $university->sub_specialty?->name }}</td>
                                                <td>
                                                    @if($university->Bachelor == 1)
                                                        <i class="fa fa-check-circle check green" aria-hidden="true"></i>
                                                    @else
                                                        <i class="fa fa-times-circle check red" aria-hidden="true"></i>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($university->master == 1)
                                                        <i class="fa fa-check-circle check green" aria-hidden="true"></i>
                                                    @else
                                                        <i class="fa fa-times-circle check red" aria-hidden="true"></i>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($university->doctor == 1)
                                                        <i class="fa fa-check-circle check green" aria-hidden="true"></i>
                                                    @else
                                                        <i class="fa fa-times-circle check red" aria-hidden="true"></i>
                                                    @endif
                                                </td>
                                                <td>{{ $university->note }}</td>
                                                <td>{{ $university->updated_at->toDateString() }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="col-md-12" style="margin: 20px;margin-right: 250px">
                                        <label style="font-size: 20px">
                                            <th scope="col" class="col-lg-6">الوثائق التي قمت بتقديمها</th>
                                        </label>
                                    </div>

                                    <div class="col-md-6">
                                        <label> شهادة الثانوية العامة   : </label><br>
                                        <img src="/{{$order->high_school_certificate}}" height="300" width="300">
                                    </div>

                                    <div class="col-md-6">
                                        <label> التأمينات الاجتماعية : </label><br>
                                        <img src="/{{$order->social_security}}" height="300" width="300">
                                    </div>

                                    <div class="col-md-6">
                                        <br>
                                        <label> شهادة حسن السيرة والسلوك  : </label><br>
                                        <img src="/{{$order->good_conduct_certificate}}" height="300" width="300">
                                    </div>

                                    <div class="col-md-6">
                                        <br>
                                        <label> جواز السفر  : </label><br>
                                        <img src="/{{$order->passport}}" height="300" width="300">
                                    </div>

                                    <div class="col-md-6">
                                        <br>
                                        <label>	البطاقة المدنية  : </label><br>
                                        <img src="/{{$order->national_ID}}" height="300" width="300">
                                    </div>

                                    <div class="col-md-6">
                                        <br>
                                        <label>	شهادة الميلاد  : </label><br>
                                        <img src="/{{$order->birth_certificate}}" height="300" width="300">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <br>
                                    <label>الحالة : </label>
                                    @if($order->status==1)
                                        <span class="mb-0">بانتظار القبول</span>
                                    @elseif($order->status==2)
                                        <span class="mb-0"> مقبول</span>
                                    @elseif($order->status==3)
                                        <span class="mb-0">تم الإرسال</span>
                                    @else
                                        <span class="mb-0">مرفوض</span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <a href="/admin_panel/accept_order/{{$order->id}}" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title=" قبول ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                    </a>

                                    <a href="/admin_panel/reject_order/{{$order->id}}" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title=" رفض ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                    </a>

                                    <a href="/admin_panel/sent_order/{{$order->id}}" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="تم الإرسال ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-navigation"><polygon points="3 11 22 2 13 21 11 13 3 11"></polygon></svg>
                                    </a>
                                    <a target="_blank" href="/admin_panel/toPDF/{{$order->id}}" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="تصدير لملف ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>
                                    </a>
                                </div>

                            </div>

                        </div>

                        </div>
                    </div>
                </div>
            </div>


        <!--  BEGIN FOOTER  -->
    @include('admin.layouts.footer')
    <!--  END FOOTER  -->
    </div>



@endsection
