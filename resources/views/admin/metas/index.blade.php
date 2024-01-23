@extends('admin.dashboard')

@section('content')

    <div id="content" class="main-content">
        <!--  BEGIN BREADCRUMBS  -->
        @include('admin.layouts.secondary_nav',['title'=>'الإعدادات  ','sub_title'=>''])
        <br>
        <!--  END BREADCRUMBS  -->
        <div class="layout-spacing">

            <!-- Content -->
            <div class="col-12">
                <div class="user-profile ">
                    <div class="widget-content widget-content-area">
                        <h3 class="mt-4"> </h3>

                        <form class="g-3 row" method="post" action="{{route('admin_panel.metas.update',1)}}" enctype="multipart/form-data" >
                            @method('PATCH')
                            @csrf
                            @if ($errors->any())

                                <div class="alert alert-danger">

                                    <ul style="list-style: none;margin:0">

                                        @foreach ($errors->all() as $error)

                                            <li>{{ $error }}</li>

                                        @endforeach

                                    </ul>

                                </div>

                            @endif
                            @if(session()->has('message'))

                                <div class="alert alert-success">

                                    {{ session()->get('message') }}

                                </div>
                            @endif

                            <div class="col-md-6">
                                <label for="inputAddress" class="form-label">og image </label>
                                 <input type="file" class="form-control"  placeholder="1234 Main St" name="og_image" >
                                <p class="image_size">يجب أن تكون أبعاد الصورة  600*350 </p>
                                <img alt="avatar" src="/{{$meta->og_image}}"  width="200" height="200"/>
                                <br><br>

                            </div>
                            <div class="col-md-6">
                                <label for="inputAddress" class="form-label">الأيقونة</label>
                                <input type="file" class="form-control"  placeholder="1234 Main St" name="icon" >
{{--                                <p class='image_size'> {{trans('admin.image_size')}}  55*55</p>--}}
                                <img alt="avatar" src="/{{$meta->icon}}"  width="200" height="200"/>
                                <br><br>

                            </div>
                            <div class="col-md-6">
                                <label for="inputAddress" class="form-label">صورة شريط ال navbar </label>
                                 <input type="file" class="form-control"  placeholder="1234 Main St" name="header_logo" >
                                <p class="image_size">يجب أن تكون أبعاد الصورة  140*140 </p>
                                <img alt="avatar" src="/{{$meta->header_logo}}"  width="200" height="200"/>
                                <br><br>

                            </div>
                            <div class="col-md-6">
                                <label for="inputAddress" class="form-label">صورة التذييل </label>
                                 <input type="file" class="form-control"  placeholder="1234 Main St" name="footer_logo" >
                                <p class="image_size">يجب أن تكون أبعاد الصورة  180*210 </p>
                                <img alt="avatar" src="/{{$meta->footer_logo}}"  width="200" height="200"/>
                                <br><br>

                            </div>

{{--                            <div class="col-12">--}}
{{--                                <label for="inputEmail4" class="form-label">{{trans('admin.web_color')}} </label>--}}
                                <input type="hidden" class="form-control"  name="web_color" value="{{$meta->web_color}}">
{{--                            </div>--}}
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">العنوان</label>
                                <input type="text" class="form-control"  name="title" value="{{$meta->title}}">
                            </div>

                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">الوصف </label>
                                <textarea  class="form-control"  name="description" >{{$meta->description}}</textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">الكلمات المفتاحية</label>
                                <input type="text" class="form-control"  name="keywords" value="{{$meta->keywords}}">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">meta title </label>
                                <input type="text" class="form-control"  name="og_title" value="{{$meta->og_title}}">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label"> الدعم الفني</label>
                                <textarea type="text" class="form-control"  name="footer" >{{$meta->footer}}</textarea>
                            </div>

                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label"> اسم الموقع </label>
                                <input type="text" class="form-control"  name="web_name" value="{{$meta->web_name}}">
                            </div>

{{--                            <div class="col-md-6">--}}
{{--                                <label for="inputEmail4" class="form-label">رابط الموقع </label>--}}
{{--                                    <input type="url" class="form-control"  name="link" value="{{$meta->link}}--}}
                                        <input type="hidden" class="form-control"  name="link" value="{{$meta->link}}">
{{--                            </div>--}}
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
    @include('admin.layouts.footer')
    <!--  END FOOTER  -->

    </div>



@endsection
