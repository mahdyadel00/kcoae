<header class="header-section">
    <div class="header-menu">
        <div class="container">
            <nav class="navbar navbar-expand-xl btco-hover-menu">
                <a class="navbar-brand logo" href="{{ url('/') }}">
                    <div class="nav-logo">
                    <img src="{{asset($meta?->header_logo)}}" alt="{{$meta?->og_title}}">
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navmenu"
                        aria-controls="navmenu" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav">
                        <li><a class="dropdown-item" href="/" > الرئيسية</a></li>
                        <li><a class="dropdown-item" href="/office" > عن المكتب </a></li>
                        <li><a class="dropdown-item" href="/list" > اللوائح والقرارات</a></li>
                        <li><a class="dropdown-item" href="/university" > الجامعات المعتمدة</a></li>
                        <!--<li><a class="dropdown-item" href="/electronic-gate" >البوابة الالكترونية</a></li>-->
                        <li><a class="dropdown-item" href="/news" > الأخبار والفعاليات</a>
                        </li>
                        <li><a class="dropdown-item" href="/contact" > التواصل </a></li>
                    </ul>
                    <div class="button sign-1">

                        @if(auth('client')->user())
                          <ul class="navbar-nav">
                                    <li>
                                        <a class="dropdown-item dropdown-toggle pr-4" href="#"
                                            data-toggle="dropdown">{{auth('client')->user()->name}} </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{route('orders.index')}}">طلباتي</a></li>
                                            <li><a class="dropdown-item" href="/profile">بياناتي
                                                    </a></li>
                                            <li><a class="dropdown-item" href="/logout">تسجيل الخروج</a></li>
                                        </ul>
                                    </li>
                                </ul>
                        @else
                            <a href="{{ route('login_form') }}" class="btn btn-button btn-button-1 popin black-bg" >
                                <i class="fa fa-user" aria-hidden="true"></i>
                                دخول المستفيدين
                            </a>
                        @endif
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- END NAVBAR -->
</header>
