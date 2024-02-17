<header class="header-section">
  <!-- small header -->
  <div class="small-header"> 
    <nav class="samll-nav">
                <div>
                        <a href="/register" style="color:#fff !important ; font-weight:bold;padding:0 7px;" >
                                <i class="fa fa-user" aria-hidden="true"></i>
                                دخول المستفيدين
                            </a>
                </div>
    </nav>
  </div>
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
                        <!-- <a href="/register" class="btn btn-button btn-button-1 popin black-bg" style="color:#fff !important" >
                                <i class="fa fa-user" aria-hidden="true"></i>
                                دخول المستفيدين
                            </a> -->
                            <ul class="pt-3 footer-icon">

                                        @foreach($socials as $social)
                                            <li style="list-style: none;"><a target="_blank" href="{{$social->link}}"><i class="{{$social->icon}}" aria-hidden="true"></i></a></li>
                                        @endforeach

                                    </ul>
                        @endif
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- END NAVBAR -->
</header>
