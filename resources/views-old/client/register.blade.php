@extends('cultural_center.home')

@section('cultural')


    <!-- contact -->
    <div class="contact-page pt-80 pb-80">
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
                        <div class="comment-area mb-5">
                            <div class="comment-respond">

                                <h2>انشاء حساب جديد</h2>
                                <div class="respons-box pt-4">
                                    <div class="form">
                                        <form method="post" action="register">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="name">اسم المستخدم</label>
                                                        <input id="name" class="form-control form-mane" required="" type="text" name="name" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="name">الرقم الوطني</label>
                                                        <input id="name" class="form-control form-mane" required="" type="text" name="ID_number">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="email">البريد الألكتروني</label>
                                                        <input id="email" class="form-control form-email" required="" type="email" name="email">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="name">رقم الهاتف</label>
                                                        <input id="name" class="form-control form-mane" required="" type="text" name="mobile">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="name">كلمة السر</label>
                                                    <input id="name" title="كلمة المرور يجب ان تتكون من ثمانية محارف على الأقل و تحوي محرف صغير و محرف كبير و رمز " class="form-control form-mane" required="" type="password" name="password">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="name">تأكيد كلمة السر</label>
                                                    <input id="name" class="form-control form-mane" required="" type="password" name="password_confirmation">
                                                </div>
                                            </div>
                                            <div class="buttons pt-4">
                                                <button type="submit" class="btn btn-button btn-button-1 blue-bg">انشاء حساب </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- END COMMENT RESPOND -->
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="contact-widget mb-5">
                            <h5 class="contact-widget-title no-margin"><span> الدخول للحساب</span></h5>
                            <div class="textwidget">
                                <div class="respons-box">
                                    <div class="form">
                                        <form method="post" action="client_login">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="name">الرقم الوطني</label>
                                                        <input id="name" class="form-control form-mane" required="" type="text" name="ID_number">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="name">كلمة السر</label>
                                                        <input id="name" class="form-control form-mane" required="" type="password" name="password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="buttons pt-4">
                                                <button type="submit" class="btn btn-button btn-button-1 blue-bg">الدخول </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-widget">
                            <h5 class="contact-widget-title no-margin"><span>نسيت كلمة السر </span></h5>
                            <div class="textwidget">
                                <div class="form">
                                    <form method="post" action="reset_code">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="name">البريد الالكتروني</label>
                                                    <input id="name" class="form-control form-mane" required="" type="text" name="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons pt-4">
                                            <button type="submit" class="btn btn-button btn-button-1 blue-bg">ارسال رمز التحقق الى البريد الالكتروني</button>
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
    <!-- end contact -->
@endsection
