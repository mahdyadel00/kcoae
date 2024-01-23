@extends('admin.dashboard')

@section('content')

    <div id="content" class="main-content">
        <!--  BEGIN BREADCRUMBS  -->
        @include('admin.layouts.secondary_nav',['title'=>'التخصصات الفرعية','sub_title'=>'إضافة تخصص فرعي'])
        <br>
        <!--  END BREADCRUMBS  -->
        <div class="layout-spacing">

            <!-- Content -->
            <div class="col-12">
                <div class="user-profile ">
                    <div class="widget-content widget-content-area">
                    <h3 class="mt-4"> </h3>
                        <form class="g-3" method="post" action="{{route('admin_panel.sub_specialties.store')}}" enctype="multipart/form-data" >
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
                            @if(session()->has('message'))

                                    <div class="alert alert-success">

                                        {{ session()->get('message') }}

                                    </div>
                            @endif
                            <div class="row">

                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label"> التخصص الفرعي </label>
                                    <input class="form-control"  name="name" required/>
                                </div>

                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label"> التخصص التابع له </label>
                                    <select class="form-select" name="specialty_id">

                                        @foreach($specialties as $specialty)
                                            <option value="{{$specialty->id}}">{{$specialty->name}} </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-12">
                                    <div class=" mt-4">
                                        <button type="submit" class="btn btn-primary"> إضافة </button>
                                    </div>
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
