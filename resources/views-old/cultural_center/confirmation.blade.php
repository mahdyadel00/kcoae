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
                                    <h2>أدخل رمز التحقق الذي تم ارساله عبر البريد الالكتروني</h2>
                                    <form class="pt-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input id="name" class="form-control form-mane" required=""
                                                        type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons pt-4">
                                            <button type="submit"
                                                class="btn btn-button btn-button-1 blue-bg">ارسال</button>
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


    @endsection
