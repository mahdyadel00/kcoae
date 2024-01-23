@extends('cultural_center.home')

@section('cultural')


    <!-- END HEADER -->

    <!-- List -->
    <div class="team-page pb-5">
        <div class="team-items">
            <div class="hadding-section pt-80 pb-5">
                <div class="container">
                    <div class="hadding-text-area">
                        <h2 class="black-c popin small">روابط مفيدة</h2>
                        <div class="row pt-5 d-block">
                            @foreach($useful_links as $useful_link)
                                <div class="col-lg-6 pb-4">
                                    <div class="lists">
                                        <li><a target="_blank" href="{{$useful_link->link}}"><i class="{{$useful_link->icon}}" aria-hidden="true"></i> {{$useful_link->title}}</a></li>
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
