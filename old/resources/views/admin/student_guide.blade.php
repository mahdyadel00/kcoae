@extends('admin.dashboard')

@section('content')
    <div id="content" class="main-content">
        <!--  BEGIN BREADCRUMBS  -->
        @include('admin.layouts.secondary_nav',['title'=>' دليل الطالب','sub_title'=>''])
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
                                <form  method="post" action="{{route('admin_panel.student_guide.update',1)}}" enctype="multipart/form-data" >
                                    @method('PATCH')
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="inputEmail4" class="form-label"> دليل الطالب </label>
                                            <input type="file"  name="file"/>
                                            <a target="_blank" href="/{{$student_guide->description}}">{{$student_guide->description}}</a>
                                        </div>
                                        <div class="col-md-12">
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
            </div>
        </div>

        <!--  BEGIN FOOTER  -->
    @include('admin.layouts.footer')
    <!--  END FOOTER  -->

    </div>


@endsection
