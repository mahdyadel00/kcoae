@extends('admin.dashboard')

@section('content')
    <div id="content" class="main-content">
        <!--  BEGIN BREADCRUMBS  -->
        @include('admin.layouts.secondary_nav',['title'=>'المستفيدون ','sub_title'=>''])
        <br>
        <!--  END BREADCRUMBS  -->
        <div class="col-12" style="margin:2% 2% auto;">
            <div class="user-profile ">
                <div class="widget-content widget-content-area">
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="" style="padding: 2%;">
                        <div class="table-responsive" id="t1">
                            <table id="myTable1" class="table table-striped table-bordered table-sm">
                                <thead>
                                <tr>
                                    <th class="text-center" scope="col">#</th>
                                    <th scope="col"> الاسم  </th>
                                    <th scope="col"> البريد الاكتروني  </th>
                                    <th scope="col">رقم الهاتف  </th>
                                    <th scope="col">الرقم الوطني  </th>
                                    <th scope="col">تاريخ الانضمام </th>
                                    <th scope="col">الحالة</th>
                                    <th class="text-center" scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($clients as $key=>$client)

                                    <tr>
                                        <td>
                                            <p class="text-center">{{$key+1}}</p>
                                            <span class="text-success"></span>
                                        </td>
                                        <td>
                                            <p class="mb-0">{{$client->name}}</p>
                                            <span class="text-success"></span>
                                        </td>
                                        <td>
                                            <p class="mb-0">{{$client->email}}</p>
                                            <span class="text-success"></span>
                                        </td>
                                        <td>
                                            <p class="mb-0">{{$client->mobile}}</p>
                                            <span class="text-success"></span>
                                        </td>
                                        <td>
                                            <p class="mb-0">{{$client->ID_number}}</p>
                                            <span class="text-success"></span>
                                        </td>
                                        <td>
                                            <p class="mb-0">{{$client->created_at->toDateString()}}</p>
                                            <span class="text-success"></span>
                                        </td>
                                        <td>
                                            <span class="text-success">
                                                @if($client->is_active == 1)
                                                    مفعل
                                                @else
                                                    غير مفعل
                                                @endif
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            <div class="action-btns">
                                                <a href="{{route('admin_panel.clients.show',$client->id)}}" class="action-btn btn-view bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="عرض">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                </a>
                                                <a href="{{route('admin_panel.clients.edit',$client->id)}}" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="تعديل">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                            <div class="col-sm-12 col-md-7">{{ $clients->links() }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript">
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    </script>
{{--    <script>--}}
{{--        $('.switch').change(function() {--}}
{{--            var is_active = $(this).prop('checked') === true ? 1 : 0;--}}
{{--            var client_id = $(this).data('id');--}}
{{--            $.ajax({--}}
{{--                type: "GET",--}}
{{--                dataType: "json",--}}
{{--                url: '{{route('admin_panel.clients.change_status')}}',--}}
{{--                data: {'is_active': is_active, 'client_id': client_id},--}}
{{--                success: function(data){--}}
{{--                    Swal.fire({--}}
{{--                        title: 'تم تغيير حالة المستفيد بنجاح',--}}
{{--                        icon: 'success',--}}
{{--                        showCancelButton: false,--}}
{{--                        showConfirmButton: false,--}}
{{--                        timer: 1500--}}
{{--                    });--}}
{{--                    //load the table again--}}
{{--                    $('#t1').load(document.URL +  ' #t1');--}}
{{--                }--}}
{{--            });--}}
{{--        })--}}
{{--    </script>--}}
@endpush
