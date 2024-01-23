@extends('cultural_center.home')

@section('cultural')


    <!-- END HEADER -->

    <!-- List -->
    <div class="team-page pb-5 orders_page">
        <div class="team-items">
            <div class="hadding-section pt-80 pb-5">
                <div class="container">
                    <div class="hadding-text-area">
                        <h2 class="black-c popin small">اللوائح و القرارات</h2>
                        <div class="row pt-5">
                            @foreach($certifications as $certification)
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="counts-2 client-count-item">
                                    <div class="popin lists file">
                                        <span class="popin"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                        <a href="/{{$certification->file}}" target="_blank">{{$certification->name}}</a></span>
                                    </div>
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
