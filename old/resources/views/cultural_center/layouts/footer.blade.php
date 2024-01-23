        <!-- FOOTER SECTION -->
        <footer class="footer-section black-bg">
            <div class="footer-inner p-5">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="ft-content">
                                <div class="ft-info">
                                    <div class="ft-logo pb-4">
                                        <img src="{{asset($meta->footer_logo)}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="ft-widget">
                                <div class="ft-widget-content">
                                    <h2 class="ft-title">البريد الالكتروني</h2>
                                    <ul class="pt-3 pb-3">
                                        <li><a href="mailto:{{$media->email}}" target="_blank">{{$media->email}}</a></li>
                                    </ul>
                                    <h2 class="ft-title">تواصل معنا</h2>
                                    <ul class="pt-3 footer-icon pb-3">

                                        @foreach($socials as $social)
                                            <li><a target="_blank" href="{{$social->link}}"><i class="{{$social->icon}}" aria-hidden="true"></i></a></li>
                                        @endforeach

                                    </ul>
                                    <div class="ft-twite-top">
                                        <h2 class="">باقي لانتهاء الدوام</h2>
                                        <div id="countdown">
                                            <ul class="counter-1">
                                                <li><span id="seconds"></span></li>
                                                <li><span>:</span></li>
                                                <li><span id="minutes"></span></li>
                                                <li><span>:</span></li>
                                                <li><span id="hours"></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-12">
                            <div class="ft-widget">
                                <div class="ft-widget-content">
                                    <h2 class="ft-title">روابط سريعة</h2>
                                    <ul class="pt-3">
                                        <li><a href="/" >الرئيسية</a></li>
                                        <li><a href="/office" >عن المكتب</a></li>
                                        <li><a href="/list" >اللوائح والقرارات</a></li>
                                        <li><a href="/university" >الجامعات المعتمدة</a></li>
                                        <li><a href="/electronic-gate" >البوابة الالكترونية</a></li>
                                        <li><a href="/news">الأخبار والفعاليات</a></li>
                                        <li><a href="/contact">التواصل</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="ft-widget">
                                <div class="ft-widget-content">
                                    <div class="ft-twite">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d68191.75224181556!2d47.99240677025903!3d29.368925879271522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2sus!4v1683750380738!5m2!1sar!2sus" class="map-1"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END FOOTER SECTION -->
