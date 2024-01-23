@extends('cultural_center.home')

@section('cultural')


    <!-- END NAVBAR -->

        <!-- END HEADER -->

   <!-- contact -->
   <div class="contact-page pt-80 pb-5">
    <div class="container">
        <div class="contact-form">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
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
                    <div class="comment-area mb-5">
                        <div class="comment-respond">
                            <h2>تعديل معلومات  ملفك الشخصي</h2>
                            <div class="respons-box pt-4">
                                <div class="form">
                                        <form method="post" action="edit_profile">
                                            @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="name">اسم المستخدم</label>
                                                    <input id="name" class="form-control form-mane" type="text" value="{{$client->name}}" name="name">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="name">الرقم الوطني</label>
                                                    <input id="name" class="form-control form-mane"  type="text" value="{{$client->ID_number}}" name="ID_number">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="email">البريد الألكتروني</label>
                                                    <input id="email" class="form-control form-email"  type="email" value="{{$client->email}}" name="email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="name">رقم الهاتف</label>
                                                    <input id="name" class="form-control form-mane"  type="text" value="{{$client->mobile}}" name="mobile">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons pt-4">
                                            <button type="submit" class="btn btn-button btn-button-1 blue-bg">تعديل </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- END COMMENT RESPOND -->
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="comment-area mb-5">
                        <div class="comment-respond">
                            <h2>تغيير كلمة السر</h2>
                            <div class="respons-box pt-4">
                                <div class="form">
                                    <form method="post" action="edit_password">
                                    @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="name">كلمة السر القديمة</label>
                                                    <input id="name" class="form-control form-mane" type="password" name="old_password" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="name">كلمة السر الجديدة</label>
                                                    <input id="name" title="كلمة المرور يجب ان تتكون من ثمانية محارف على الأقل و تحوي محرف صغير و محرف كبير و رمز " class="form-control form-mane" type="password" name="password">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="name">تأكيد كلمة السر الجديدة</label>
                                                    <input id="name" class="form-control form-mane" type="password" name="password_confirmation">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons pt-4">
                                            <button type="submit" class="btn btn-button btn-button-1 blue-bg">تغيير </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end contact -->

@endsection
