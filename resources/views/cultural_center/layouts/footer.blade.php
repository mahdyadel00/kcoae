        <!-- FOOTER SECTION -->
        <footer class="footer-section black-bg">
            <div class="footer-inner" >
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="ft-content">
                                <div class="ft-info">
                                    <div class="ft-logo pb-4">
                                        <img src="{{asset($meta?->footer_logo)}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="ft-widget">
                                <div class="ft-widget-content">
                                    <h2 class="ft-title">البريد الالكتروني</h2>
                                    <ul class="pt-3 pb-3">
                                        <li><a href="mailto:{{$media?->email}}" target="_blank">{{$media?->email}}</a></li>
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
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3608.4153753930923!2d55.3133384!3d25.2566088!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f432dbd28cc83%3A0xa727e79897b9f8b5!2z2KfZhNmC2YbYtdmE2YrYqSDYp9mE2YPZiNmK2KrZitip!5e0!3m2!1sar!2s!4v1684771306030!5m2!1sar!2s" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END FOOTER SECTION -->
{{--@if($closing_hour)--}}
{{--<script>--}}
{{--    (function () {--}}
{{--        const second = 1000,--}}
{{--            minute = second * 60,--}}
{{--            hour = minute * 60,--}}
{{--            day = hour * 24;--}}


{{--        const countDown = new Date('{{$now->toDateString()}} {{$closing_hour}}').getTime(),--}}
{{--            x = setInterval(function() {--}}

{{--                const d = new Date();--}}
{{--                const localTime = d.getTime();--}}
{{--                const localOffset = d.getTimezoneOffset() * 60000;--}}

{{--                const utc = localTime + localOffset;--}}
{{--                const offset = 4; // UTC of Dubai is +04.00--}}
{{--                const dubai = utc + (3600000 * offset);--}}
{{--                const now = new Date(dubai).getTime(),--}}
{{--                    distance = countDown - now;--}}
{{--                if(distance <= 0 ){--}}
{{--                    document.getElementById("countdown").innerHTML = '<p style="color:#fff">  انتهى الدوام </p>';--}}
{{--                }else--}}
{{--                {--}}
{{--                    document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),--}}
{{--                        document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),--}}
{{--                        document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);--}}

{{--                }--}}
{{--                    }, 0)--}}
{{--    }());--}}
{{--</script>--}}
{{--@else--}}
{{--            <script>--}}
{{--                (function () {--}}
{{--                    document.getElementById("time").innerHTML = '<h2 class="">عطلة رسمية  </h2>';--}}
{{--                }());--}}
{{--            </script>--}}
{{--@endif--}}


