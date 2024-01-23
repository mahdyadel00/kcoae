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
                                    <li class="breadcrumb-item">{{trans('sidebar.all_users')}}</li>
                                    <li class="breadcrumb-item active"> @if($is_user=='0')
                                            {{trans('admin.add_admin')}}
                                        @else
                                            {{trans('admin.add_user')}}
                                        @endif </li>
                                </ol>
                            </nav>

                        </div>
                    </div>
                </header>
            </div>
        </div>
        <br>
        <!--  END BREADCRUMBS  -->
        <div class="layout-spacing">

            <!-- Content -->
            <div class="col-12">
                <div class="user-profile ">
                    <div class="widget-content widget-content-area">
                        <h3 class="mt-4"> </h3>

                        <form class="g-3" method="post" action="{{route('admin_panel.admins.store')}}" enctype="multipart/form-data" >
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

                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="inputEmail4" class="form-label">{{trans('admin.name')}} </label>
                                        <input type="text" class="form-control"   name="name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="inputEmail4" class="form-label">{{trans('admin.email')}}</label>
                                        <input type="email" class="form-control"   name="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label"> {{trans('admin.password')}} </label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label"> {{trans('admin.confirm')}}</label>
                                        <input type="password" class="form-control" name="password_confirmation">
                                    </div>
                                </div>
                                @if($admin->type=='1')
                                <div class="col-12">
                                    <div class="mb-4">
                                        <label for="inputState" class="form-label"> {{trans('admin.role')}} </label>
                                        <select class="form-select" name="type">
                                            <option value="1"> {{trans('admin.admin')}} </option>
                                            <option value="2"> {{trans('admin.user')}} </option>
                                        </select>
                                    </div>
                                </div>
                                @endif
                                <div class="col-12">
                                    <div class="">
                                    <button type="submit" class="btn btn-primary">{{trans('admin.add')}} </button>
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
