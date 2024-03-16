@extends('admin.dashboard')

@section('content')

    <div id="content" class="main-content">
        <!--  BEGIN BREADCRUMBS  -->
        @include('admin.layouts.secondary_nav',['title'=>'العاملون ','sub_title'=>'تعديل عامل'])
        <br>
        <!--  END BREADCRUMBS  -->
        <div class="layout-spacing">

            <!-- Content -->
            <div class="col-12">
                <div class="user-profile ">
                    <div class="widget-content widget-content-area">
                        <h3 class="mt-4"> </h3>

                        <form class="g-3" method="post" action="{{ route('admin_panel.clients.update',$client->id )}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul style="list-style: none;margin:0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="inputEmail4" class="form-label">الاسم </label>
                                        <input type="text" class="form-control" value="{{$client->name}}"  name="name">
                                        @error('name')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="inputEmail4" class="form-label">البريد الالكتروني</label>
                                        <input type="email" class="form-control"  value="{{$client->email}}" name="email" style="text-align: right">
                                        @error('email')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="inputEmail4" class="form-label">رقم الهاتف </label>
                                        <input type="tel" class="form-control"  value="{{$client->mobile}}" name="mobile" style="text-align: right">
                                        @error('mobile')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="inputEmail4" class="form-label">الرقم الوطني  </label>
                                        <input type="tel" class="form-control"  value="{{$client->ID_number}}" name="ID_number" style="text-align: right">
                                        @error('ID_number')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="inputEmail4" class="form-label">الحالة </label>
                                        <select class="form-control" name="is_active">
                                            <option disabled selected>اختر الحالة</option>
                                            <option value="1" @if($client->is_active == 1) selected @endif>مفعل</option>
                                            <option value="0" @if($client->is_active == 0) selected @endif>غير مفعل</option>
                                        </select>
                                        @error('is_active')')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="">
                                        <button type="submit" class="btn btn-primary">تعديل</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--  BEGIN FOOTER  -->
        <!--  END FOOTER  -->
    </div>
@endsection
