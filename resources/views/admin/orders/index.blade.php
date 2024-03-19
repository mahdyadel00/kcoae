@extends('admin.dashboard')

@section('content')
    <div id="content" class="main-content">
        <!--  BEGIN BREADCRUMBS  -->
        @include('admin.layouts.secondary_nav',['title'=>' كتاب إلى من يهمه الأمر ','sub_title'=>''])
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
                        <a class="btn btn-primary mb-2 me-4" href="{{route('admin_panel.order_notes.index')}}">ملاحظات إلى من يهمه الأمر </a>

                                <table id="myTable1" class="table table-striped table-bordered table-sm">
                                    <thead>
                                    <tr>
                                        <th class="text-center" scope="col"></th>
                                        <th scope="col">مقدم الطلب  </th>
                                        <th scope="col" style="width:20%">حالة الطلب  </th>
                                        <th scope="col">تاريخ الإضافة </th>

                                        <th class="text-center" scope="col" style="width:20%"></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $counter=1;?>
                                    @foreach($orders as $order)

                                        <tr>
                                            <td>
                                                <p class="text-center">{{$counter}}</p>
                                                <span class="text-success"></span>
                                                <?php $counter++;?>
                                            </td>
                                            <td>
                                                <p class="mb-0">{{$order->client->name}}</p>
                                                <span class="text-success"></span>
                                            </td>
                                            <td>
                                                @if($order->status==1)
                                                <p class="mb-0">بانتظار القبول</p>
                                                @elseif($order->status==2)
                                                    <p class="mb-0"> مقبول</p>
                                                @elseif($order->status==3)
                                                    <p class="mb-0">تم الإرسال</p>
                                                @else
                                                    <p class="mb-0">مرفوض</p>
                                                @endif
                                                <span class="text-success"></span>
                                            </td>
                                            <td>
                                                <p class="mb-0">{{$order->created_at->toDateString()}}</p>
                                                <span class="text-success"></span>
                                            </td>
                                            <td class="text-center" width="11%">
                                                <div class="action-btns">
                                                    <a href="{{route('admin_panel.orders.show',$order->id)}}" class="action-btn btn-view bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="عرض">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                    </a>
                                                    <a href="/admin_panel/sent_order/{{$order->id}}" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="تم الإرسال ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-navigation"><polygon points="3 11 22 2 13 21 11 13 3 11"></polygon></svg>
                                                    </a>
                                                    <a target="_blank" href="/admin_panel/toPDF/{{$order->id}}" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="تصدير لملف ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>
                                                    </a>
                                                    <a href="javascript:void(0)" class="action-btn btn-delete bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="حذف" onclick="deleteOrder({{ $order->id }})">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M16 6l-1 18H8l-1-18"></path><path d="M2 10l2 18h16l2-18"></path></svg>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            <div class="col-sm-12 col-md-7">{{ $orders->links() }}</div>
                        </div>
                </div>
            </div>
        </div>


        <!--  BEGIN FOOTER  -->
    @include('admin.layouts.footer')
    <!--  END FOOTER  -->
@endsection
        @push('scripts')
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

            <script type="text/javascript">
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                function deleteOrder(id){
                    Swal.fire({
                        title: "هل أنت متأكد من حذف هذا الطلب؟",
                        text: "لن تتمكن من التراجع عن هذا الاجراء!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'نعم, قم بالحذف!',
                        cancelButtonText: 'الغاء'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                type: 'DELETE',
                                url: '{{route('admin_panel.orders.destroy','')}}'+'/'+id,
                                data: {
                                    id: id
                                },
                                success: function (data) {
                                    Swal.fire({
                                        title: 'تم حذف الطلب بنجاح',
                                        icon: 'success',
                                        showCancelButton: false,
                                        showConfirmButton: false,
                                        timer: 1500
                                    });
                                    //load the table again
                                    $('#t1').load(document.URL +  ' #t1');
                                }
                            });
                        }
                    });
                }
            </script>
    @endpush
