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

                        <form class="g-3" method="post" action="{{route('admin_panel.clients.update',$client->id)}}" enctype="multipart/form-data" >
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
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="inputEmail4" class="form-label">الاسم </label>
                                        <input type="text" class="form-control" value="{{$client->name}}"  name="name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="inputEmail4" class="form-label">البريد الالكتروني</label>
                                            <input type="email" class="form-control"  value="{{$client->email}}" name="email">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="inputEmail4" class="form-label">رقم الهاتف </label>
                                        <input type="tel" class="form-control"  value="{{$client->mobile}}" name="mobile">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="inputEmail4" class="form-label">الرقم الوطني  </label>
                                        <input type="tel" class="form-control"  value="{{$client->ID_number}}" name="ID_number">
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
