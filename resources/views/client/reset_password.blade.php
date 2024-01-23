
@extends('cultural_center.home')

@section('cultural')


    <!-- END NAVBAR -->
    <!-- END HEADER -->

    <!-- contact -->
    <div class="contact-page pt-80 pb-80">
        <div class="container">
            <div class="contact-form">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                        <div class="comment-area mb-5">
                            <div class="comment-respond">
                                <h2>أدخل  كلمة السر الجديدة</h2>
                                <form method="post" action="reset_password">
                                    @csrf
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul style="list-style: none;margin:0">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="row">
{{--                                        <div class="col-md-12">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <input id="name" class="form-control form-mane" required=""--}}
{{--                                                       type="text">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-label">كلمة المرور</label>
                                                <input type="password" title="كلمة المرور يجب ان تتكون من ثمانية محارف على الأقل و تحوي محرف صغير و محرف كبير و رمز " class="form-control form-mane" name="password" required>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-label"> تأكيد كلمة المرور</label>
                                                <input type="password" class="form-control form-mane" name="password_confirmation" required>
                                            </div>
                                        </div>
                                        <input type="hidden"  name="client_id" value="{{$client_id}}">

                                    </div>
                                    <div class="buttons pt-4">
                                        <button type="submit"
                                                class="btn btn-button btn-button-1 blue-bg">تأكيد كلمة السر الجديدة</button>
                                    </div>
                                </form>
                            </div>
                            <!-- END COMMENT RESPOND -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->

    </div>
@endsection
