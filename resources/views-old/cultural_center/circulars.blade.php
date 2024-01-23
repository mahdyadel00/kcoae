@extends('cultural_center.home')

@section('cultural')


    <!-- END HEADER -->

    <!-- List -->
    <div class="team-page pb-5">
        <div class="team-items">
            <div class="hadding-section pt-80 pb-5">
                <div class="container">
                    <div class="hadding-text-area">
                        <h2 class="black-c popin small"> التعاميم </h2>
                        <div class="row pt-5 d-block">
                            @foreach($circulars as $circular)
                                <div class="col-lg-6 pb-4">
                                    <div class="lists">
                                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                        <span><a href="/{{$circular->file}}" target="_blank">{{$circular->name}}</a></span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- END List -->

    <!-- FOOTER SECTION -->
@endsection
