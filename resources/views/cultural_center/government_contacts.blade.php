@extends('cultural_center.home')

@section('cultural')


    <!-- END HEADER -->

    <!-- TEAM -->
    <div class="team-page">
        <div class="team-items">
            <div class="hadding-section pt-80 pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-12 d-flex align-items-center c-center" style="width: 100%; margin: auto;display: flex;align-items: center;flex-direction: column;">
                            <div class="hadding-text-area">
                                <h2 class="black-c popin small text-center"> جهات التواصل الحكومية في الإمارات </h2>
                                <p class="pt-4 pb-4">{!! $government_contacts->description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- END TEAM -->
@endsection
