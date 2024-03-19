@extends('cultural_center.home')

@section('cultural')
    <!-- END HEADER -->
        <div class="client-section pt-5 pb-5">
            <div class="container">
                <div class="stuff-box">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <div class="our-team counts-2">
                                    <div class="col-lg-10 col-md-8 col-sm-12 mt-5 ">
                                        <div class="counts-2 client-count-item">
                                            <div class="popin lists file">
                                                <span class="popin"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                                    <a href="{{ route('paper') }}">تقديم طلب إلى من يهمه الأمر</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection
