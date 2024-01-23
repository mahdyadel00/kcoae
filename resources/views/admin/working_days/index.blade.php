@extends('admin.dashboard')

@section('content')
    <div id="content" class="main-content">
        <!--  BEGIN BREADCRUMBS  -->
        @include('admin.layouts.secondary_nav',['title'=>'دوام العمل و العطلات الرسمية ','sub_title'=>''])
        <br>
        <!--  END BREADCRUMBS  -->

        <!-- Content -->
        <div class="col-12">
            <div class="user-profile mt-5">

                <div class="widget-content widget-content-area">
                    @if(session()->has('message'))

                        <div class="alert alert-success">

                            {{ session()->get('message') }}

                        </div>
                    @endif

                    <div class="table-responsive" id="t1">

                                <table id="myTable1" class="table table-striped table-bordered table-sm">
                                    <thead>
                                    <tr>
                                        <th class="text-center" scope="col"></th>
                                        <th scope="col">اليوم </th>
                                        <th scope="col">وقت البدء  </th>
                                        <th scope="col">وقت الانتهاء  </th>
                                        <th scope="col"> الحالة </th>

                                        <th class="text-center" scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $counter=1;?>
                                    @foreach($days as $day)

                                        <tr>
                                            <td>
                                                <p class="text-center">{{$counter}}</p>
                                                <span class="text-success"></span>
                                                <?php $counter++;?>
                                            </td>

                                            <td>
                                                <p class="mb-0">{{$day->day}}</p>
                                                <span class="text-success"></span>
                                            </td>
                                            <td>
                                                <p class="mb-0">{{$day->start}}</p>
                                                <span class="text-success"></span>
                                            </td>
                                          <td>
                                                <p class="mb-0">{{$day->end}}</p>
                                                <span class="text-success"></span>
                                            </td>

                                            <td>
                                                @if($day->status=='1')
                                                    <p class="mb-0">عطلة رسمية</p>
                                                @else
                                                    <p class="mb-0">دوام</p>
                                                @endif
                                                <span class="text-success"></span>
                                            </td>

                                            <td class="text-center" width="10%">
                                                <div class="action-btns">
                                                    <a href="{{route('admin_panel.working_days.edit',$day->id)}}" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="تعديل ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>

                                    @endforeach

                                    </tbody>

                                </table>


                            </div>
                </div>
            </div>
        </div>


        <!--  BEGIN FOOTER  -->
    @include('admin.layouts.footer')
    <!--  END FOOTER  -->




@endsection
