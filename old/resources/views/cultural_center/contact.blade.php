@extends('cultural_center.home')

@section('cultural')

        <!-- contact -->
        <div class="team-page">
            <div class="team-items">
                <div class="hadding-section pt-80 pb-80">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5 col-md-12 align-items-center c-center mb-5">
                                <div class="hadding-text-area">
                                    <h2 class="black-c popin small">اتصل بنا</h2>
                                    <p>{!! $contact_us->description !!}</p>
                                </div>

                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-12   align-items-center c-center">
                                <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d68191.75224181556!2d47.99240677025903!3d29.368925879271522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2sus!4v1683750380738!5m2!1sar!2sus"
                                class="map-2"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
              <!-- end contact -->


    @endsection
