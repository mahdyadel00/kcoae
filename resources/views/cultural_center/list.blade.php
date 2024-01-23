@extends('cultural_center.home')

@section('cultural')


    <!-- END NAVBAR -->
    </header>
    <!-- END HEADER -->
    <div class="client-section pt-2 pb-2">
        <div class="container">
            <div class="stuff-box">
                <div class="container">
                    <div class="row d-block">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="our-team counts-2">
                                    <span class="popin"><i class="fa fa-list-alt gold" aria-hidden="true"></i>
                                        لائحة الشهادات</span>
                                <div class="button">
                                    <a href="/certificate_list" class="btn btn-button btn-button-1 blue-bg" >
                                        للمزيد</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="our-team counts-2">
                                    <span class="popin"><i class="gold fa fa-users" aria-hidden="true"></i>
                                         لائحة البعثات</span>
                                <div class="button">
                                    <a href="/mission_list" class="btn btn-button btn-button-1 blue-bg" >
                                        للمزيد</a>
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
