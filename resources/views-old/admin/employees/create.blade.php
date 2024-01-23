@extends('admin.dashboard')

@section('content')

    <div id="content" class="main-content">
        <!--  BEGIN BREADCRUMBS  -->
        @include('admin.layouts.secondary_nav',['title'=>'العاملون ','sub_title'=>'إضافة عامل'])
        <br>
        <!--  END BREADCRUMBS  -->
        <div class="layout-spacing">

            <!-- Content -->
            <div class="col-12">
                <div class="user-profile ">
                    <div class="widget-content widget-content-area">
                        <h3 class="mt-4"> </h3>

                        <form class="g-3" method="post" action="{{route('admin_panel.employees.store')}}" enctype="multipart/form-data" >
                            @method('POST')
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
                                <div class="col-md-12">
                                    <label for="inputAddress" class="form-label"> الصورة الشخصية </label>
                                    <input type="file" class="form-control"  placeholder="1234 Main St" name="image" >

                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="inputEmail4" class="form-label">الاسم </label>
                                        <input type="text" class="form-control"   name="name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="inputEmail4" class="form-label">المركز الوظيفي </label>
                                        <input type="text" class="form-control"   name="role" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="inputEmail4" class="form-label">البريد الالكتروني</label>
                                        <input type="email" class="form-control"   name="email" >
                                    </div>
                                </div>



                                <div class="col-12">
                                    <div class="">
                                        <button type="submit" class="btn btn-primary">إضافة</button>
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
