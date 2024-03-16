@extends('admin.dashboard')

@section('content')
    <div id="content" class="main-content">
        <!--  BEGIN BREADCRUMBS  -->
        @include('admin.layouts.secondary_nav',['title'=>'المستفيدون ','sub_title'=>''])
        <br>
        <!--  END BREADCRUMBS  -->
        <div class="col-12" style="margin:2% 2% auto;">
            <div class="user-profile ">
                <div class="widget-content widget-content-area">
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="" style="padding: 2%;">
                        <div class="table-responsive" id="t1">
                            <table id="myTable1" class="table table-striped table-bordered table-sm">
                                <thead>
                                    <tr>
                                       <th class="text-center" scope="col">الأسم الأول بالعربي</th>
                                        <th class="text-center" scope="col">{{$client->first_name_ar}}</th>
                                    </tr>

                                    <tr>
                                        <th class="text-center" scope="col"> الأسم الثاني بالعربي</th>
                                        <th class="text-center" scope="col">{{$client->second_name_ar}}</th>
                                    </tr>

                                    <tr>
                                        <th class="text-center" scope="col"> الأسم الثالث بالعربي</th>
                                        <th class="text-center" scope="col">{{$client->third_name_ar}}</th>
                                    </tr>

                                    <tr>
                                        <th class="text-center" scope="col">الأسم الرابع بالعربي</th>
                                        <th class="text-center" scope="col">{{$client->fourth_name_ar}}</th>
                                    </tr>

                                    <tr>
                                        <th class="text-center" scope="col">الأسم الأول بالانجليزي</th>
                                        <th class="text-center" scope="col">{{$client->first_name_en}}</th>
                                    </tr>

                                    <tr>
                                        <th class="text-center" scope="col">الأسم الثاني بالانجليزي</th>
                                        <th class="text-center" scope="col">{{$client->second_name_en}}</th>
                                    </tr>

                                    <tr>
                                        <th class="text-center" scope="col">الأسم الثالث بالانجليزي</th>
                                        <th class="text-center" scope="col">{{$client->third_name_en}}</th>
                                    </tr>

                                    <tr>
                                        <th class="text-center" scope="col">الأسم الرابع بالانجليزي</th>
                                        <th class="text-center" scope="col">{{$client->fourth_name_en}}</th>
                                    </tr>

                                    <tr>
                                        <th class="text-center" scope="col">البريد الإلكتروني</th>
                                        <th class="text-center" scope="col">{{$client->email}}</th>
                                    </tr>

                                    <tr>
                                        <th class="text-center" scope="col">رقم الهاتف</th>
                                        <th class="text-center" scope="col">{{$client->mobile}}</th>
                                    </tr>

                                    <tr>
                                        <th class="text-center" scope="col">رقم جواز السفر</th>
                                        <th class="text-center" scope="col">{{$client->passport_number}}</th>
                                    </tr>

                                    <tr>
                                        <th class="text-center" scope="col">تاريخ إنتهاء جواز السفر</th>
                                        <th class="text-center" scope="col">{{$client->passport_expire_date}}</th>
                                    </tr>

                                    <tr>
                                        <th class="text-center" scope="col">صورة جواز السفر</th>
                                        <th class="text-center" scope="col"><img src="{{asset('uploads/clients/'.$client->passport_image)}}" alt="صورة جواز السفر" style="width: 100px; height: 100px;"></th>
                                    </tr>


                                    <tr>
                                        <th class="text-center" scope="col">رقم الهاتف الإمارتي</th>
                                        <th class="text-center" scope="col">{{$client->phone_united_emirates}}</th>
                                    </tr>

                                    <tr>
                                        <th class="text-center" scope="col">رقم الهاتف الكويتي</th>
                                        <th class="text-center" scope="col">{{$client->phone_kuwait}}</th>
                                    </tr>

                                    <tr>
                                        <th class="text-center" scope="col">رقم الواتساب</th>
                                        <th class="text-center" scope="col">{{$client->mobile}}</th>
                                    </tr>

                                    <tr>
                                        <th class="text-center" scope="col">رقم الطوارئ</th>
                                        <th class="text-center" scope="col">{{$client->emergency_phone}}</th>
                                    </tr>

                                    <tr>
                                        <th class="text-center" scope="col">العنوان في الإمارات</th>
                                        <th class="text-center" scope="col">{{$client->address_united_emirates}}</th>
                                    </tr>

                                    <tr>
                                        <th class="text-center" scope="col">العنوان في الكويت</th>
                                        <th class="text-center" scope="col">{{$client->address_kuwait}}</th>
                                    </tr>

                                    <tr>
                                        <th class="text-center" scope="col">تاريخ الميلاد</th>
                                        <th class="text-center" scope="col">{{ $client->date_of_birth ? date('Y-m-d', strtotime($client->date_of_birth)) : '' }}</th>
                                    </tr>

                                    <tr>
                                        <th class="text-center" scope="col">الجنس</th>
                                        <th class="text-center" scope="col">
                                            @if( $client->gender == 'male' )
                                                ذكر
                                            @elseif( $client->gender == 'female' )
                                                أنثى
                                            @else

                                            @endif
                                        </th>
                                    </tr>

                                    <tr>
                                        <th class="text-center" scope="col">جهة العمل</th>
                                        <th class="text-center" scope="col">{{$client->work_place}}</th>
                                    </tr>

                                    <tr>
                                        <th class="text-center" scope="col">الحالة الإجتماعية</th>
                                        <th class="text-center" scope="col">
                                            @if( $client->material_status == 'single' )
                                                أعزب
                                            @elseif( $client->material_status == 'married' )
                                                متزوج
                                            @elseif( $client->material_status == 'divorced' )
                                                مطلق
                                            @elseif( $client->material_status == 'widowed' )
                                                أرمل
                                            @endif
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
