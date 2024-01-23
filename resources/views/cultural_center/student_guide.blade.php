@extends('cultural_center.home')

@section('cultural')


    <!-- END HEADER -->

    <!-- List -->
    <div class="team-page pb-5">
        <div class="team-items">
            <div class="hadding-section pt-80 pb-5">
                <div class="container">
                    <div class="hadding-text-area">
                        <h2 class="black-c popin small">دليل الطالب </h2>
                        <div class="row pt-5">
                            @foreach($guides as $guide)
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 sm-50">
                                    
                                       
                                    <div class="lists client-count-item link-list"><a target="_blank" href="{{$guide->link}}"><i class="{{$guide->icon}}" aria-hidden="true"></i> {{$guide->title}}</a></div>
                                       
                               
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
