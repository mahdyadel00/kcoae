@extends('cultural_center.home')

@section('cultural')


    <!-- END HEADER -->

        <!-- TEAM -->
        <div class="team-page">
            <div class="team-items">
                <div class="hadding-section pt-80 pb-80">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12 col-12 d-flex align-items-center c-center">
                                <div class="hadding-text-area">
                                    <h2 class="black-c popin small">نبذة تعريفية عن المكتب</h2>
                                    <p class="pt-4 pb-4">{!! $about->description !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- END TEAM -->
    </div>
@endsection
