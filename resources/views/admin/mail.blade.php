@extends('admin.dashboard')

@section('content')


    <div id="content" class="main-content">
        <!--  BEGIN BREADCRUMBS  -->
        <div class="secondary-nav">
            <div class="breadcrumbs-container" data-page-heading="Analytics">
                <header class="header navbar navbar-expand-sm">
                    <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                        <svg xmlns="http://www.w3.org/2000/.svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                    </a>
                    <div class="d-flex breadcrumb-content">
                        <div class="page-header">

                            <div class="page-title">
                            </div>

                            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active">البريد الالكتروني  </li>
                                </ol>
                            </nav>

                        </div>
                    </div>
                </header>
            </div>
        </div>
        <br>
        <!--  END BREADCRUMBS  -->
        <div class=" layout-spacing " >

            <!-- Content -->

            <div class="col-12" >
                <div class="user-profile ">
                    <div class="widget-content widget-content-area">
                            <h3 class="mt-4"> </h3>
                                <form class=" g-3" method="post" action="/admin_panel/update_mail" enctype="multipart/form-data" >
                                    @csrf

                                    <div class="col-md-12">
                                        <label for="inputEmail4" class="form-label">البريد الالكتروني  </label>
                                        <input type="email" class="form-control"  value="{{$media->email}}" name="email">
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
