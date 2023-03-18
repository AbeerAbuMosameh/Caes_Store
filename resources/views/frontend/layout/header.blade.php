<!-- header-area start -->
<header>
    <div class="hx-header-top-1">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-12 col-lg-6 col-t">
                    <ul class="d-flex account_login-area">
                        <li><i class="fa fa-clock-o" aria-hidden="true"></i>{{\App\Models\Setting::find(1)->days}}
                            : {{\App\Models\Setting::find(1)->time}}</li>
                        <li><i class="fa fa-map-marker"></i>{{\App\Models\Setting::find(1)->location}}</li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 col-12 col-lg-6 col-m">
                    <ul class="d-flex header-social">
                        <li><a href="{{\App\Models\Setting::find(1)->facebook}}"><i class="fa fa-facebook"
                                                                                    aria-hidden="true"></i></a></li>
                        <li><a href="{{\App\Models\Setting::find(1)->insta}}"><i class="fa fa-twitter"
                                                                                 aria-hidden="true"></i></a></li>
                        <li><a href="{{\App\Models\Setting::find(1)->twitter}}"><i class="fa fa-instagram"
                                                                                   aria-hidden="true"></i></a></li>
                        <li><a href="{{\App\Models\Setting::find(1)->gmail}}"><i class="fa fa-google-plus"
                                                                                 aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="hx-header-style-1" id="sticky-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-7 col-sm-10 col-8 col-t">
                    <div class="logo">
                        <a href="/"><img src="{{asset('uploads/images/logo/'.\App\Models\Setting::find(1)->logo)}}"
                                         alt=""></a>
                    </div>
                </div>
                <div class="col-lg-8 d-none d-lg-block col-m">
                    <div class="main-menu">
                        <nav class="nav_mobile_menu">
                            <ul>
                                <li class="active"><a href="/">Home</a></li>
                                <li><a href="{{route('about-us')}}">Über uns</a></li>
                                <li><a href="{{route('front.services')}}">Service</a></li>
                                <li><a href="{{route('front.projects')}}">Projekte</a>
                                    {{-- <ul class="submenu">
                                        <li><a href="project.html">project</a></li>
                                        <li><a href="project-details.html">project details</a></li>
                                    </ul> --}}
                                </li>
                                <li><a href="#">Pages</a>
                                    <ul class="submenu">
                                        @foreach(\App\Models\Page::all() as $page)
                                            <li><a href="{{asset('pages/'.$page->link)}}">{{$page->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{route('contact')}}">Kontakt</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-1 col-md-3 col-sm-2 col-2 search col-t">
                    <ul>
                        <li><a href="javascript:void(0);"><i class="fa fa-search"></i></a>
                            <ul>
                                <li>
                                    <form action="search">
                                        <input type="text" placeholder="search here..">
                                        <button><i class="fa fa-search"></i></button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-12 d-block d-lg-none">
                    <div class="mobile_menu"></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-area end -->
