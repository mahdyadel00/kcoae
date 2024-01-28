@extends('cultural_center.home')

@section('cultural')


    <!-- END NAVBAR -->


        <!-- news details -->
        <div class="service-details pb-80 pt-80">
            <div class="container">
                <div class="tab-content col-xl-10 col-lg-10 col-md-8 col-sm-12 col-12" style="width:100%;margin:0 auto;">
                    <div class="tab-pane fade show active" id="Sales">
                        <div class="service-details-content">
                            <div class="service-d-img">
                                <img src="/{{$news->image}}" alt="">
                            </div>
                            <div class="single-blog-content">
                                <span>{{$news->created_at->toDateString()}}</span>
                                <h2>{{$news->title}}</h2>
                                <p>{!! $news->description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- end news details -->


  @endsection
