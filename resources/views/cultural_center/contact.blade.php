@extends('cultural_center.home')

@section('cultural')

        <!-- contact -->
        <div class="team-page">
            <div class="team-items">
                <div class="hadding-section pt-80 pb-80">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5 col-md-12 align-items-center c-center mb-3">
                                <div class="hadding-text-area">
                                    <h2 class="black-c popin small">اتصل بنا</h2>
                                    <p>{!! $contact_us->description !!}</p>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-12 align-items-center c-center" >
                                <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3608.4153753930923!2d55.3133384!3d25.2566088!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f432dbd28cc83%3A0xa727e79897b9f8b5!2z2KfZhNmC2YbYtdmE2YrYqSDYp9mE2YPZiNmK2KrZitip!5e0!3m2!1sar!2s!4v1684771306030!5m2!1sar!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
              <!-- end contact -->


    @endsection
