@extends('admin.dashboard')

@section('content')

    <div id="content" class="main-content">
        <!--  BEGIN BREADCRUMBS  -->
        @include('admin.layouts.secondary_nav',['title'=>'دوام العمل و العطلات الرسمية ','sub_title'=>'تعديل '])
        <br>
        <!--  END BREADCRUMBS  -->
        <div class="layout-spacing">

            <!-- Content -->
            <div class="col-12">
                <div class="user-profile">
                    <div class="widget-content widget-content-area">
                        <h3 class="mt-4">يوم : {{$day->day}} </h3>
                        <form class="row g-3" method="post" action="{{route('admin_panel.working_days.update',$day->id)}}" enctype="multipart/form-data" >
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
                            <div class="col-md-6">
                                <label for="inputAddress" class="form-label"> وقت البدء  </label>
                                 <input type="time" class="form-control"  name="start" value="{{$day->start}}" >
                            </div>

                            <div class="col-md-6">
                                <label for="inputAddress" class="form-label"> وقت الانتهاء  </label>
                                 <input type="time" class="form-control"  name="end" value="{{$day->end}}">
                            </div>

                            <div class="col-md-6">
                                <label for="inputAddress" class="form-label"> الحالة </label>
                                <select class="form-select" name="status">
                                        <option {{($day->status==1)?'selected':''}} value="1">عطلة رسمية </option>
                                        <option {{($day->status==2)?'selected':''}} value="2">دوام </option>
                                </select>
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
