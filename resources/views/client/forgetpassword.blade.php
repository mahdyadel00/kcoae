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

                            <h2 style="color:#d1b686"> نسيت كلمة السر</h2>
                                <div class="respons-box pt-4">
                                    <div class="form">
                                    <form method="post" action="reset_code">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="name">البريد الالكتروني</label>
                                                    <input id="name" placeholder="ادخل البريد الالكتروني" class="form-control form-mane" required="" type="text" name="email" style="padding: 10px !important;">
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
                            <!-- END COMMENT RESPOND -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->
@endsection
