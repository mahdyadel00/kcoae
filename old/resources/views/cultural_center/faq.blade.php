@extends('cultural_center.home')

@section('cultural')

    <!-- END HEADER -->

            <!-- QUESTIONS AND CONTACT -->
            <div class="question-contact pt-80 pb-200 ">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                            <div class="question-area">
                                <h2 class="popin">هل لديك أي اسئلة أو استفسارات ؟</h2>
{{--                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</p>--}}
                                <div class="ques-accodium">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                       @foreach($questions as $question)
                                        <div class="panel panel-default">
                                            <div class="panel-heading active" role="tab" id="headingOne">
                                                <h4 class="panel-title">
                                                 <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne{{$question->id}}" aria-controls="collapseOne{{$question->id}}">
                                                   {{$question->title}}
                                                  </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne{{$question->id}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" style="">
                                                <div class="panel-body">
                                                    {{$question->description}}
                                                </div>
                                        </div>
                                        @endforeach
{{--                                        <div class="panel panel-default">--}}
{{--                                            <div class="panel-heading" role="tab" id="headingTwo">--}}
{{--                                                <h4 class="panel-title">--}}
{{--                                                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-controls="collapseTwo">--}}
{{--                                                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة؟--}}
{{--                                                  </a>--}}
{{--                                                </h4>--}}
{{--                                            </div>--}}
{{--                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">--}}
{{--                                                <div class="panel-body">--}}
{{--                                                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="panel panel-default">--}}
{{--                                            <div class="panel-heading" role="tab" id="headingThree">--}}
{{--                                                <h4 class="panel-title">--}}
{{--                                                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-controls="collapseThree">--}}
{{--                                                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة؟--}}
{{--                                                  </a>--}}
{{--                                                </h4>--}}
{{--                                            </div>--}}
{{--                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">--}}
{{--                                                <div class="panel-body">--}}
{{--                                                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="panel panel-default">--}}
{{--                                            <div class="panel-heading" role="tab" id="headingfure">--}}
{{--                                                <h4 class="panel-title">--}}
{{--                                                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefoure" aria-controls="collapsefoure">--}}
{{--                                                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة؟--}}
{{--                                                  </a>--}}
{{--                                                </h4>--}}
{{--                                            </div>--}}
{{--                                            <div id="collapsefoure" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingfure">--}}
{{--                                                <div class="panel-body">--}}
{{--                                                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END QUESTIONS AND CONTACT -->
    </div>


   <!-- FOOTER SECTION -->


 @endsection
