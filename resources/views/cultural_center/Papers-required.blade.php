@extends('cultural_center.home')

@section('cultural')


    <!-- END NAVBAR -->
        <div class="team-page pb-5">
            <div class="team-items">
                <div class="hadding-section pt-80 pb-5">
                    <div class="container">
                        <div class="hadding-text-area">
                            <h2 class="black-c popin small">الأوراق الثبوتية المطلوبة :</h2>
                        </div>
                        <div class="paperwork">
                            <ul>
                                <li>
                                    <p>درجة البكالوريوس للشهادات الحديثة او التي مر عليها سنه واحدة</p>
                                </li>
                                <li>
                                    <p>صوره طبق الاصل عن شهادة شهادة الثانوية العامة</p>
                                </li>
                                <li>
                                    <p> التامينات الاجتماعية</p>
                                </li>
                                <li>
                                    <p> شهادة حسن السيرة والسلوك</p>
                                </li>
                                <li>
                                    <p> جواز السفر</p>
                                </li>
                                <li>
                                    <p>البطاقة المدنية</p>
                                </li>
                                <li>
                                    <p> شهادة الميلاد</p>
                                </li>
                                <li>
                                  {!! $order_note->description !!}
                                </li>

                            </ul>
                            <div class="button pt-5">
                                <a href="{{route('orders.create')}}" class="btn btn-button btn-button-1 blue-bg" >
                                    قدم الآن </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END TEAM -->
        </div>


        @endsection
