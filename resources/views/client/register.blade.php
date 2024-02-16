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
                                        <form method="post" action="{{ route('register') }}" id="register">
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
                                                        <label for="ID_number">الرقم الوطني</label>
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
                                                        <label for="mobile">رقم الهاتف</label>
                                                        <input id="name" class="form-control form-mane" required="" type="text" name="mobile" placeholder="ادخل رقم الهاتق" style="padding: 10px !important;">
                                                    </div>
                                                </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="password">كلمة السر</label>
                                                    <input id="name" placeholder="ادخل كلمه المرور" class="form-control form-mane" title="كلمة المرور يجب ان تتكون من ثمانية محارف على الأقل و تحوي محرف صغير و محرف كبير و رمز " class="form-control form-mane" required="" type="password" name="password" style="padding: 10px !important;">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="password_confirmation">تأكيد كلمة السر</label>
                                                    <input id="name" placeholder="تأكيد كلمه المرور" class="form-control form-mane" required="" type="password" name="password_confirmation" style="padding: 10px !important;">
                                                </div>
                                            </div>
                                            <div class="buttons pt-4 col-md-12" style="display: flex;justify-content: center;align-items: center;">
                                                <button type="submit" class="btn btn-button btn-button-1 blue-bg">انشاء حساب </button>
                                            </div>
                                            </div>
                                            <div class="pt-5" style="display: flex;justify-content: space-between;flex-wrap: wrap;">
                                                <a href="{{ route('login_form') }}"  class="btn">  دخول للحساب </a>
                                                <a href="{{ route('forget_password') }}"  class="btn"> هل نسيت كلمة المرور </a>
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
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        //vliadation by jquery all inputs
        $(document).ready(function () {
            $('#register').submit(function (e) {
                e.preventDefault();
                var name = $("input[name='name']").val();
                var ID_number = $("input[name='ID_number']").val();
                var email = $("input[name='email']").val();
                var mobile = $("input[name='mobile']").val();
                var password = $("input[name='password']").val();
                var password_confirmation = $("input[name='password_confirmation']").val();
                //check and where ID_number is number and == 12
                if (ID_number.length != 12) {
                    Swal.fire({
                        icon: 'error',
                        title: 'الرقم الوطني يجب ان يكون 12 رقم',
                        showConfirmButton: false,
                        timer: 1500
                    });
                } else if (isNaN(ID_number)) {
                    Swal.fire({
                        icon: 'error',
                        title: 'الرقم الوطني يجب ان يكون ارقام فقط',
                        showConfirmButton: false,
                        timer: 1500
                    });
                } else {
                    //check and where mobile is number
                    if (isNaN(mobile)) {
                        Swal.fire({
                            icon: 'error',
                            title: 'رقم الهاتف يجب ان يكون ارقام فقط',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    } else {
                        //check and where password and password_confirmation is equal
                        if (password != password_confirmation) {
                            Swal.fire({
                                icon: 'error',
                                title: 'كلمة المرور غير متطابقة',
                                showConfirmButton: false,
                                timer: 1500
                            });
                        } else {
                            //check and where password is more than 8 characters
                            if (password.length < 8) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'كلمة المرور يجب ان تكون اكثر من 8 احرف',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                            } else {
                                //check and where password is contain at least one uppercase letter
                                if (!/[A-Z]/.test(password)) {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'كلمة المرور يجب ان تحتوي على حرف كبير',
                                        showConfirmButton: false,
                                        timer: 1500
                                    });
                                } else {
                                    //check and where password is contain at least one lowercase letter
                                    if (!/[a-z]/.test(password)) {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'كلمة المرور يجب ان تحتوي على حرف صغير',
                                            showConfirmButton: false,
                                            timer: 1500
                                        });
                                    } else {
                                        //check and where password is contain at least one number
                                        if (!/[0-9]/.test(password)) {
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'كلمة المرور يجب ان تحتوي على رقم',
                                                showConfirmButton: false,
                                                timer: 1500
                                            });
                                        } else {
                                            //check and where password is contain at least one special character
                                            if (!/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/.test(password)) {
                                                Swal.fire({
                                                    icon: 'error',
                                                    title: 'كلمة المرور يجب ان تحتوي على رمز',
                                                    showConfirmButton: false,
                                                    timer: 1500
                                                });
                                            } else {
                                                //check and where email is valid
                                                if (!isNaN(email)) {
                                                    Swal.fire({
                                                        icon: 'error',
                                                        title: 'البريد الألكتروني غير صحيح',
                                                        showConfirmButton: false,
                                                        timer: 1500
                                                    });
                                                } else {
                                                    //check and where name is string
                                                    if (!isNaN(name)) {
                                                        Swal.fire({
                                                            icon: 'error',
                                                            title: 'اسم المستخدم يجب ان يكون حروف',
                                                            showConfirmButton: false,
                                                            timer: 1500
                                                        });
                                                    }
                                                    else {
                                                        $('#register').unbind('submit').submit();
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }

            });
        });

    </script>
@endpush
