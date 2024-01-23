@extends('admin.dashboard')

@section('content')
    <div id="content" class="main-content">
        <!--  BEGIN BREADCRUMBS  -->
        @include('admin.layouts.secondary_nav',['title'=>' مميزات التعليم العالي في دولة الإمارات العربية المتحدة و دولة قطر و سلطنة عمان','sub_title'=>''])
        <br>
        <!--  END BREADCRUMBS  -->
        <div class="row layout-spacing " >

            <!-- Content -->
            <div class="col-12" style="margin:2% 2% auto;">
                <div class="user-profile ">
                    <div class="widget-content widget-content-area">
                        <div class=" " style="padding:2% 2% 0px; " >

                        </div>

                        <div class="" style="padding: 2%;">
                            <div class="container">
                                @if(session()->has('message'))

                                    <div class="alert alert-success">

                                        {{ session()->get('message') }}

                                    </div>

                                @endif
                                <form  method="post" action="{{route('admin_panel.higher_education.update',1)}}" enctype="multipart/form-data" >
                                    @method('PATCH')
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="inputEmail4" class="form-label"> المحتوى </label>
                                            <textarea id="text-ar"  name="description">{{$higher_education->description}}</textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="">
                                                <button type="submit" class="btn btn-primary">تعديل</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                                <script>
                                    $(document).ready(function() {
                                        $('#text-ar').summernote();
                                    });

                                </script>
                            </div>
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
