@extends('cultural_center.home')

@section('cultural')


    <!-- contact -->
    <div class="contact-page pt-80 pb-80">
        <div class="container">
            <div class="contact-form">
            <div class="row" style="display: flex;justify-content: space-around;flex-wrap: wrap;">
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
                        <div class="comment-area mb-5 mt-5">
                            <div class="comment-respond">

                                <h2 style="color:#d1b686">الدخول للحساب</h2>
                                <div class="respons-box pt-4">
                                    <div class="form">
                                    <form method="post" action="{{ route('client_login') }}" id="login">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="ID_number">الرقم الوطني</label>
                                                        <input id="ID_number"  placeholder="ادخل الرقم الوطني" class="form-control form-mane" required="" type="text" name="ID_number" style="padding: 10px !important;">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="password">كلمة السر</label>
                                                        <input id="password" placeholder="ادخل كلمه السر" class="form-control form-mane" required="" type="password" name="password" style="padding: 10px !important;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="buttons pt-4 col-md-12" style="display: flex;justify-content: center;align-items: center;">
                                                <button type="submit" class="btn btn-button btn-button-1 blue-bg"> دخول </button>
                                            </div>
                                            <div class="pt-5" style="display: flex;justify-content: space-between;flex-wrap: wrap;">
                                                <a href="{{ route('forget_password') }}"  class="btn"> هل نسيت كلمة المرور </a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- END COMMENT RESPOND -->
                        </div>
                    </div>
                    <div class="pt-5 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                    <a href="{{ route('register_form') }}"  class="btn btn-button btn-button-1 blue-bg">   انشاء حساب </a>
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
            $('#login').submit(function (e) {
                e.preventDefault();
                var ID_number = $("input[name='ID_number']").val();
                var password = $("input[name='password']").val();
                //check and where ID_number is number and == 12
                if (isNaN(ID_number) || ID_number.length != 12) {
                    Swal.fire({
                        icon: 'error',
                        title: 'الرقم الوطني يجب ان يكون 12 رقم',
                        showConfirmButton: false,
                        timer: 1500
                    });
                    return false;
                }
                //check and where password is string and > 6
                if (password.length < 6) {
                    Swal.fire({
                        icon: 'error',
                        title: 'كلمة السر يجب ان تكون اكبر من 6 احرف',
                        showConfirmButton: false,
                        timer: 1500
                    });
                    return false;
                }
                this.submit();

            });
        });

    </script>
@endpush

