@extends('admin.dashboard')

@section('content')

    <div id="content" class="main-content">
        <!--  BEGIN BREADCRUMBS  -->
        @include('admin.layouts.secondary_nav',['title'=>'  اللوائح و القرارات ','sub_title'=>'تعديل لائحة'])
        <br>
        <!--  END BREADCRUMBS  -->
        <div class="layout-spacing">

            <!-- Content -->
            <div class="col-12">
                <div class="user-profile">
                    <div class="widget-content widget-content-area">
                        <h3 class="mt-4">  </h3>
                        <form class="row g-3" method="post" action="{{route('admin_panel.certifications.update',$certification->id)}}" enctype="multipart/form-data" >
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
                            <div class="col-md-12">
                                <label for="inputAddress" class="form-label"> الملف  </label>
                                 <input type="file" class="form-control"  placeholder="1234 Main St" name="file" >
                                <a href="/{{$certification->file}}" target="_blank">{{$certification->file}}</a>

                            </div>

                            <div class="col-md-12">
                                <label for="inputEmail4" class="form-label">الاسم  </label>
                                <input type="text" class="form-control" value="{{$certification->name}}" name="name">
                            </div>

                            <div class="col-12">
                                <div class="">
                                <button type="submit" class="btn btn-primary">تعديل </button>
                                </div>
                            </div>


                        </form>
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
