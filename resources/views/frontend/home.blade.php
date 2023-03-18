@extends('frontend.layout.app')
@section('content')

    <!-- start of hero -->
    <section class="hero hero-slider-wrapper hx-hero-style-1">
        <div class="hero-slider">
            @foreach($sliders as $slider)
                <div class="slide">
                    <img src="{{asset('uploads/images/background/'.\App\Models\Setting::find(1)->background)}}" alt
                         class="slider-bg">
                    <div class="container header-p">
                        <div class="row">
                            <div class="col col-lg-6  hx-slide-caption">
                                <h2>{{$slider->title}}</h2>
                                <p>{{$slider->description}}</p>
                                <div class="hx-video-btns">
                                    <ul>
                                        <li><a href="https://www.youtube.com/embed/uQBL7pSAXR8?autoplay=1"
                                               class="video-btn"
                                               data-type="iframe">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hx-hero-contact">
                                    <div class="hx-contact-form">
                                      <h2>Schreiben Sie uns</h2>
                                      <p>Wir freuen uns auf Ihre Anfrage.</p>
                                        <form method="post" action="{{route('contact.sendM')}}">
                                            @csrf
                                            @include('admin._msg')
                                            <div class="half-colt">
                                                <input type="text" name="name" class="form-control" placeholder="Vor-nachname*">
                                            </div>
                                            <div class="half-colt">
                                                <input type="email" name="email" class="form-control" placeholder="E-Mail*">
                                            </div>
                                            <div>
                                            <textarea class="form-control" name="note" placeholder="Ihre Nachricht..."></textarea>
                                            </div>
                                            <div class="submit-btn-wrapper">
                                                <button type="submit" class="theme-btn">Senden</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- end of hero slider -->
    <!-- about-area start-->
    <div class="hx-about-style-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="hx-about-content">
                        <div class="hx-site-title">
                            <span>Unser Unternehmen</span>
                            <h2>{{$page_setting->home_title}}</h2>
                        </div>
                        <p>{{$page_setting->home_description}}</p>
                        <div class="btns">
                            <div class="btn-style"><a href="{{route('about-us')}}">Mehr dazu!</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-m">
                    <div class="hx-about-img">
                        <img src="{{asset('uploads/images/'.$page_setting->home_img)}}" alt="">
                    </div>
                    <div class="video-btn">
                        <ul>
                            @if($page_setting->video)
                                <li><a href="{{$page_setting->video}}?autoplay=1" class="video-btn"
                                       data-type="iframe">
                                        <i class="fi flaticon-play-button"></i>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about-area end-->

    <!--service area start -->
    <div class="hx-service-style-2 ptb-100-70">
        <div class="container">
            <div class="col-12">
                <div class="hx-site-title-1 text-center">
                    <span>Was wir tun</span>
                    <h2>Unsere Dienstleistungen</h2>
                </div>
            </div>

            <div class="row">
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="hx-service-wrap h-100 mb-0">
                            <div class="hx-service-icon">
                                <i class="{{$service->icon}}"></i>
                            </div>
                            <div class="hx-service-text">
                                <h2>{{$service->title}}</h2>
                                <p>{{$service->description}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- service area end -->
    <!-- .hx-counter-area start -->
    <div class="hx-counter-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hx-counter-grids">
                        <div class="grid">
                            <div class="hx-counter-icon">
                                <i class="fi flaticon-worker"></i>
                            </div>
                            <div>
                                <h2><span class="odometer" data-count="2">00</span>+</h2>
                            </div>
                            <p>Expert Technicians</p>
                        </div>
                        <div class="grid">
                            <div class="hx-counter-icon">
                                <i class="fi flaticon-employee"></i>
                            </div>
                            <div>
                                <h2><span class="odometer" data-count="1026">00</span></h2>
                            </div>
                            <p>Satisfied Client</p>
                        </div>
                        <div class="grid">
                            <div class="hx-counter-icon">
                                <i class="fi flaticon-business-and-finance"></i>
                            </div>
                            <div>
                                <h2><span class="odometer" data-count="25">00</span>+</h2>
                            </div>
                            <p>Years Experience</p>
                        </div>
                        <div class="grid">
                            <div class="hx-counter-icon">
                                <i class="fi flaticon-car"></i>
                            </div>
                            <div>
                                <h2><span class="odometer" data-count="3215">00</span></h2>
                            </div>
                            <p>Compleate Project</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .hx-counter-area end -->
    <!-- pricing-area -->
    <div class="hx-pricing-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hx-site-title-1 text-center">
                        <span>Bester Preisplan</span>
                        <h2>Dienstleistungen Pakete</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="hx-pricing-content tabs-site-button">
                        <div class="row hx-pricing-tabs">
                            <div class="col-lg-2 col-md-12">
                                <ul class="nav nav-tabs">
                                    <li><a data-toggle="tab" href="#turbo"><i class="fi flaticon-turbo"></i></a></li>
                                    <li><a data-toggle="tab" href="#tyre"><i class="fi flaticon-tyre"></i></a></li>
                                    <li><a data-toggle="tab" href="#car-1"><i class="fi flaticon-car-1"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-lg-8 col-md-12">
                                <div class="hx-tab-content">
                                    <div id="turbo" class="tab-pane active">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-12">
                                                <div class="hx-pricing-wrap">
                                                    <div class="hx-pricing-single">
                                                        <div class="hx-pricing-img">
                                                            <img
                                                                src="{{asset('uploads/images/services/'.$services[2]->img)}}"
                                                                alt="">
                                                        </div>
                                                        <div class="hx-pricing-text">
                                                            <span>{{$services[2]->price}}</span>
                                                            <h4><a href="#">{{$services[2]->title}}</a></h4>
                                                            <p>{{$services[2]->subtitle}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tyre" class="tab-pane">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-12">
                                                <div class="hx-pricing-wrap">
                                                    <div class="hx-pricing-single">
                                                        <div class="hx-pricing-img">
                                                            <img
                                                                src="{{asset('uploads/images/services/'.$services[4]->img)}}"
                                                                alt="">
                                                        </div>
                                                        <div class="hx-pricing-text">
                                                            <span>{{$services[4]->price}}</span>
                                                            <h4><a href="#">{{$services[4]->title}}</a></h4>
                                                            <p>{{$services[4]->price}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="car-1" class="tab-pane">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-12">
                                                <div class="hx-pricing-wrap">
                                                    <div class="hx-pricing-single">
                                                        <div class="hx-pricing-img">
                                                            <img
                                                                src="{{asset('uploads/images/services/'.$services[5]->img)}}"
                                                                alt="">
                                                        </div>
                                                        <div class="hx-pricing-text">
                                                            <span>{{$services[5]->price}}</span>
                                                            <h4><a href="#">{{$services[5]->title}}</a></h4>
                                                            <p>{{$services[5]->price}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="repair" class="tab-pane">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-12">
                                                <div class="hx-pricing-wrap">
                                                    <div class="hx-pricing-single">
                                                        <div class="hx-pricing-img">
                                                            <img
                                                                src="{{asset('uploads/images/services/'.$services[0]->img)}}"
                                                                alt="">
                                                        </div>
                                                        <div class="hx-pricing-text">
                                                            <span>{{$services[0]->price}}</span>
                                                            <h4><a href="#">{{$services[0]->title}}</a></h4>
                                                            <p>{{$services[0]->subtitle}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="battery" class="tab-pane">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-12">
                                                <div class="hx-pricing-wrap">
                                                    <div class="hx-pricing-single">
                                                        <div class="hx-pricing-img">
                                                            <img
                                                                src="{{asset('uploads/images/services/'.$services[1]->img)}}"
                                                                alt="">
                                                        </div>
                                                        <div class="hx-pricing-text">
                                                            <span>{{$services[1]->price}}</span>
                                                            <h4><a href="#">{{$services[1]->title}}</a></h4>
                                                            <p>{{$services[1]->subtitle}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="electricity" class="tab-pane">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-12">
                                                <div class="hx-pricing-wrap">
                                                    <div class="hx-pricing-single">
                                                        <div class="hx-pricing-img">
                                                            <img
                                                                src="{{asset('uploads/images/services/'.$services[3]->img)}}"
                                                                alt="">
                                                        </div>
                                                        <div class="hx-pricing-text">
                                                            <span>{{$services[3]->price}}</span>
                                                            <h4><a href="#">{{$services[3]->title}}</a></h4>
                                                            <p>{{$services[3]->subtitle}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-12">
                                <ul class="nav nav-tabs">
                                    <li><a data-toggle="tab" href="#repair"><i class="fi flaticon-car-repair"></i></a>
                                    </li>
                                    <li><a data-toggle="tab" href="#battery"><i class="fi flaticon-battery"></i></a>
                                    </li>
                                    <li><a data-toggle="tab" href="#electricity"><i class="fi flaticon-electricity"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pricing-area end -->


@endsection
