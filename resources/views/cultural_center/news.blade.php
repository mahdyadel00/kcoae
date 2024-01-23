@extends('cultural_center.home')

@section('cultural')


    <!-- END NAVBAR -->

        <div class="blog-page pt-80 pb-80">
            <div class="container">
                <div class="row">
                    @foreach($news as $item)
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <a href="/news-details/{{$item->id}}">
                            <div class="single-blog">
                                <div class="log-img">
                                    <img src="{{asset($item->image) }}" alt="">
                                </div>
                                <div class="single-blog-content">
                                    <span class="black-bg">{{$item->created_at->toDateString()}}</span>
                                    <p class="black-c title d-block">{{$item->title}}</p>
                                    <div class="desc">{!! $item->description !!}</div>
                                    <div class="buttons pt-4">
                                        <button class="btn btn-button btn-button-1 blue-bg"> للمزيد </button>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <br>
                <div>{{$news->links()}}</div>
            </div>
        </div>




  @endsection
