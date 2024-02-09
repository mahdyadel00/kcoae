@extends('cultural_center.home')

@section('cultural')


    <!-- contact -->
    <div class="contact-page pt-80 pb-80">
        <div class="container">
            <div class="contact-form">
                <div class="row">

                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12" style="margin:auto;">
                        @if ($errors->any())

                            <div class="alert alert-danger">

                                <ul style="list-style: none;margin:0">

                                    @foreach ($errors->all() as $error)

                                        <li>{{ $error }}</li>

                                    @endforeach

                                </ul>

                            </div>

                        @endif
                        <div class="comment-area mb-5">
                            <div class="comment-respond">

                                <h2 style="color:#d1b686">انشاء حساب جديد</h2>
                                <div class="respons-box pt-4">
                                    <div class="form">
                                        <form method="post" action="register">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="name">اسم المستخدم</label>
                                                        <input id="name" class="form-control form-mane" required="" type="text" name="name"  placeholder="ادخل اسم المستخدم" style="padding: 10px !important;">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="name">الرقم الوطني</label>
                                                        <input id="name" class="form-control form-mane" required="" type="text" name="ID_number" placeholder="ادخل الرقم الوطني" style="padding: 10px !important;">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="email">البريد الألكتروني</label>
                                                        <input id="email" class="form-control form-email" required="" type="email" name="email" placeholder="ادخل البريد الألكتروني" style="padding: 10px !important;">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="name">رقم الهاتف</label>
                                                        <input id="name" class="form-control form-mane" required="" type="text" name="mobile" placeholder="ادخل رقم الهاتق" style="padding: 10px !important;">
                                                    </div>
                                                </div>
                                            
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="name">كلمة السر</label>
                                                    <input id="name" placeholder="ادخل كلمه المرور" class="form-control form-mane" title="كلمة المرور يجب ان تتكون من ثمانية محارف على الأقل و تحوي محرف صغير و محرف كبير و رمز " class="form-control form-mane" required="" type="password" name="password" style="padding: 10px !important;">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="name">تأكيد كلمة السر</label>
                                                    <input id="name" placeholder="تأكيد كلمه المرور" class="form-control form-mane" required="" type="password" name="password_confirmation" style="padding: 10px !important;">
                                                </div>
                                            </div>
                                            <div class="buttons pt-4 col-md-12" style="display: flex;justify-content: center;align-items: center;">
                                                <button type="submit" class="btn btn-button btn-button-1 blue-bg">انشاء حساب </button>
                                            </div>
                                            </div>
                                            <div class="pt-5" style="display: flex;justify-content: space-between;flex-wrap: wrap;">
                                                <a href="#"  class="btn">  دخول للحساب </a>
                                                <a href="#"  class="btn">  ارسال رمز التحقق الى البريد الالكتروني </a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- END COMMENT RESPOND -->
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->
@endsection
