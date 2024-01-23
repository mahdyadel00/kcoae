@extends('cultural_center.home')

@section('cultural')


<div class="container">
    <div class="main-carousel">
        @foreach($sliders as $slider)
            <div class="slide fad">
                <div class="image-slider">
                    <img src="{{asset($slider->image)}}" style="width: 100%" alt="">
                </div>
            </div>
        @endforeach
    <a class="prev pr" onclick="move(-1)">&#10094</a>
    <a class="next ne" onclick="move(1)">&#10095</a>
</div>
</div>

<!-- اخر الاخؤبار -->

<div class="ticker_wrap">
    <div class="ticker__viewport">
        <marquee direction="right" scrollamount="5" behavior="scroll" onmouseover="this.stop()"
            onmouseout="this.start()">
            <ul class="ticker__list">
                @foreach($news as $item)
                <li class="ticker__item">{{$item->description}}</li>
                @endforeach
            </ul>
        </marquee>
    </div>
</div>

<!-- CLIENT AREA -->
<div class="client-section pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 sm-50 col-12 link">
                <a href="/higher_education">
                    <div class="client-count-item smoth">
                        <div class="counts height">
                            <span class="gold popin"><i class="fa fa-university" aria-hidden="true"></i></span>
                            <p>  مميزات التعليم العالي في دولة الإمارات العربية المتحدة و دولة قطر و سلطنة عمان </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 sm-50 col-12 link">
                <a href="/government_contacts">
                <div class="client-count-item smoth">
                    <div class="counts height">
                        <span class="gold popin"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
                        <p>جهات التواصل الحكومية في الإمارات </p>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 sm-50 col-12 link">
                <a  href="/student_guides">
                <div class="client-count-item smoth">
                    <div class="counts height">
                        <span class="gold popin"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
                        <p>دليل الطالب</p>
                    </div>
                </div>
                </a>
            </div>

            

            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 sm-50 col-12 link">
                <a href="/financial_dues">
                <div class="client-count-item smoth">
                    <div class="counts height">
                        <span class="gold popin"><i class="fa fa-credit-card" aria-hidden="true"></i></span>
                        <p>المستحقات المالية </p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 sm-50 col-12 link">
                <a href="/health_insurance">
                <div class="client-count-item smoth">
                    <div class="counts height">
                        <span class="gold popin"><i class="fa fa-medkit" aria-hidden="true"></i></span>
                        <p>التأمين الصحي</p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 sm-50 col-12 link ">
                <a target="_blank" href="/{{$instructions->description}}">
                <div class="client-count-item smoth">
                    <div class="counts height">
                            <span class="gold popin"><i class="fa fa-files-o" aria-hidden="true"></i></span>
                            <p>اللوائح والتعليمات</p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 sm-50 col-12 link ">
                <a  href="/calendar">
                <div class="client-count-item smoth">
                    <div class="counts height">
                            <span class="gold popin"><i class="fa fa-files-o" aria-hidden="true"></i></span>
                            <p>التقويم</p>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 sm-50 col-12 link">
                        <a href="/faq">
                <div class="client-count-item smoth">
                    <div class="counts height">

                            <span class="gold popin"><i class="fa fa-question-circle" aria-hidden="true"></i></span>
                            <p>الأسئلة الشائعة</p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 sm-50 col-12 link ">
                <a target="_blank" href="/{{$circulars->description}}">
                <div class="client-count-item smoth">
                    <div class="counts height">
                            <span class="gold popin"><i class="fa fa-files-o" aria-hidden="true"></i></span>
                            <p>التعاميم </p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 sm-50 col-12 link">
                <a href="/useful_links">
                <div class="client-count-item smoth">
                    <div class="counts height">
                        <span class="gold popin"><i class="fa fa-link" aria-hidden="true"></i></span>
                        <p>روابط مفيدة</p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 sm-50 col-12 link">
                <a href="/technical_support">
                <div class="client-count-item smoth">
                    <div class="counts height">
                        <span class="gold popin"><i class="fa fa-handshake-o" aria-hidden="true"></i></span>
                        <p>الدعم الفني</p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 sm-50 col-12 link">
                <a href="/order-forms">
                <div class="client-count-item smoth">
                    <div class="counts height">
                        <span class="gold popin"><i class="fa fa-book" aria-hidden="true"></i></span>
                        <p>نماذج الطلبات  </p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</div>
<!-- END CLIENT AREA -->

<!-- CLIENT AREA
<div class="client-section pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 sm-50 col-12 link">
                <a href="/news">
                <div class="client-count-item smoth">
                    <div class="counts height">
                           <span class="gold popin"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
                           <p>الأخبار</p>
                    </div>
                </div>
                </a>
            </div>






        </div>
    </div>
</div>-->


@if($media->whatsapp)

    <div class="icon whatsapp">
        <a target="_blank" href="https://wa.me/{{$media->whatsapp}}"> <i class="fab fa-whatsapp" aria-hidden="true"></i></a>
    </div>

@endif

@if($media->call)

    <div class="icon phone">
        <a target="_blank" href="tel:{{$media->call}}"><i class="fa fa-phone" aria-hidden="true"></i></a>
    </div>

@endif



@endsection
