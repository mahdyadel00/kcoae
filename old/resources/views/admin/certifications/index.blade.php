@extends('admin.dashboard')

@section('content')
    <div id="content" class="main-content">
        <!--  BEGIN BREADCRUMBS  -->
        @include('admin.layouts.secondary_nav',['title'=>'لائحة الشهادات ','sub_title'=>''])
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
                                <a class="btn btn-primary mb-2 me-4" href="{{route('admin_panel.certifications.create')}}">إضافة شهادة </a>

                                <table id="myTable1" class="table table-striped table-bordered table-sm">
                                    <thead>
                                    <tr>
                                        <th class="text-center" scope="col"></th>
                                        <th scope="col">الاسم  </th>
                                        <th scope="col">الملف  </th>
                                        <th scope="col">تاريخ الإضافة </th>

                                        <th class="text-center" scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $counter=1;?>
                                    @foreach($certifications as $certification)

                                        <tr>
                                            <td>
                                                <p class="text-center">{{$counter}}</p>
                                                <span class="text-success"></span>
                                                <?php $counter++;?>
                                            </td>

                                            <td>
                                                <p class="mb-0">{{$certification->name}}</p>
                                                <span class="text-success"></span>
                                            </td>
                                           <td>
                                                <a href="/{{$certification->file}}" target="_blank">{{$certification->file}}</a>
                                                <span class="text-success"></span>
                                            </td>
                                            <td>
                                                <p class="mb-0">{{$certification->created_at->toDateString()}}</p>
                                                <span class="text-success"></span>
                                            </td>

                                            <td class="text-center" width="10%">
                                                <div class="action-btns">
                                                    <a href="{{route('admin_panel.certifications.edit',$certification->id)}}" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="تعديل ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                    </a>
                                                    <a href="/admin_panel/del_certification/{{$certification->id}}" class="action-btn btn-delete bs-tooltip" data-toggle="tooltip" data-placement="top" title="حذف ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                    </a>

                                                </div>
                                            </td>
                                        </tr>

                                    @endforeach

                                    </tbody>

                                </table>

                            <div class="col-sm-12 col-md-7">
                                    {{ $certifications->links() }}
                            </div>

                            </div>
                </div>
            </div>
        </div>


        <!--  BEGIN FOOTER  -->
    @include('admin.layouts.footer')
    <!--  END FOOTER  -->




@endsection
