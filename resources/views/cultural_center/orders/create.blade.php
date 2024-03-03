@extends('cultural_center.home')

@section('cultural')


    <!-- END NAVBAR -->
    <!-- contact -->
    <div class="paperwork-page pt-80 pb-80">
        <div class="container">
            <div class="contact-form">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                        <div class="comment-area mb-5">
                            <div class="comment-respond">
                                <h2>متطلبات الحصول على شهادة لامانع</h2>
                                <div class="respons-box pt-4">
                                    @if(session()->has('message'))

                                        <div class="alert alert-success">

                                            {{ session()->get('message') }}

                                        </div>
                                    @endif
                                    <div class="form">
                                        <form class="g-3" method="post" action="{{route('orders.store')}}" enctype="multipart/form-data" >
                                            @method('POST')
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="name">شهادة الثانوية</label>
                                                        <input id="name" class="form-control form-mane" required="" type="file" name="high_school_certificate">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="email">شهادة التأمينات الإجتماعية</label>
                                                        <input id="email" class="form-control form-email" required="" type="file" name="social_security">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="name">صورة جواز السفر </label>
                                                        <input id="name" class="form-control form-mane" required="" type="file" name="passport">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="name"> صورة البطاقة المدنية</label>
                                                        <input id="name" class="form-control form-mane" required="" type="file" name="national_ID">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="name">التخصص المطلوب  </label>
                                                        <input id="name" class="form-control form-mane" required="" type="file" name="good_conduct_certificate">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="name"> شهادة الميلاد </label>
                                                        <input id="name" class="form-control form-mane" required="" type="file" name="birth_certificate">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="buttons pt-4">
                                                <button type="submit" class="btn btn-button btn-button-1 blue-bg">التالي</button>
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
