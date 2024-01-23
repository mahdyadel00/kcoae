@extends('cultural_center.home')

@section('cultural')



    <div class="profile pt-5 pb-80">
        <div class="container">
            <div class="main-box">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 align-items-center c-center">
                        <div class="hadding-text-area mt-4">
                            <h2 class="black-c popin small">الطلبات التي قمت بتقديمها</h2>
                        </div>
                        <table class="table align-items-right">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">الطلب</th>
                                <th scope="col">حالة الطلب</th>
                                <th scope="col">عرض الطلب</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <th scope="row">
                                    <h5 class="black-c popin"> كتاب إالى من يهمه الأمر </h5>
                                </th>
                                <td>
                                    <div class="status">
                                        @if($order->status==1)
                                            <span >بانتظار القبول</span>
                                            <i class="fa fa-clock-o blue" aria-hidden="true"></i>
                                        @elseif($order->status==2)
                                            <span>تم قبول الطلب</span>
                                            <i class="fa fa-check-circle check green " aria-hidden="true"></i>
                                        @elseif($order->status==3)
                                            <span>تم ارسال رد الطلب</span>
                                            <i class="fa fa-reply small" aria-hidden="true"></i>
                                        @else
                                            <span >مرفوض</span>
                                            <i class="fa fa-minus-circle red" aria-hidden="true"></i>
                                        @endif
                                    </div>
                                </td>
                                <td>
                                    <div class="status">
                                        <span><a href="{{route('orders.show',$order->id)}}">عرض الطلب</a></span>
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
    </div>

@endsection
