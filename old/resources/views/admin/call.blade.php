@extends('admin.dashboard')

@section('content')


    <div id="content" class="main-content">
        <!--  BEGIN BREADCRUMBS  -->
        @include('admin.layouts.secondary_nav',['title'=>'رقم الاتصال  ','sub_title'=>''])
        <br>
        <!--  END BREADCRUMBS  -->
        <div class="layout-spacing">

            <!-- Content -->

            <div class="col-12" >
                <div class="user-profile ">
                    <div class="widget-content widget-content-area">
                            <h3 class="mt-4">  </h3>

                                <form class="g-3" method="post" action="/admin_panel/update_call" enctype="multipart/form-data" >
                                    @csrf

                                    <div class="col-md-12">
                                        <label for="inputEmail4" class="form-label">رقم الاتصال</label>
                                        <input type="tel" class="form-control"  value="{{$media->call}}" name="call">
                                    </div>

                                    <div class="col-md-12 mt-4">
                                        <div class="">
                                            <button type="submit" class="btn btn-primary">تعديل</button>
                                        </div>
                                    </div>

                                </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/feather.min.js') }}"></script>
        <script>
            feather.replace();
        </script>

        <!--  BEGIN FOOTER  -->
    @include('admin.layouts.footer')
    <!--  END FOOTER  -->

    </div>


@endsection
