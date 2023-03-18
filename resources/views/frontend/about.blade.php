@extends('frontend.layout.app')
@push('style')
    <style>
        .breadcumb-area {
            background: url({{asset('uploads/images/'.$page_setting->about_cover_img)}}) no-repeat center top / cover;
        }
    </style>
@endpush
@section('content')

<!-- .breadcumb-area start -->
<div class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcumb-wrap text-center">
                    <h2>Über uns</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><span>Über uns</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .breadcumb-area end -->
<!-- about-area start-->
<div class="hx-about-style-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <div class="hx-about-img">
                   <img src="{{asset('uploads/images/'.$page_setting->about_img)}}" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="hx-about-content">
                    <div class="hx-site-title">
                        <span>Unser Unternehmen</span>
                        <h2>{{$page_setting->about_title}}</h2>
                    </div>
                    <p>{{$page_setting->about_description}}</p>
                </div>
            </div>
        </div>
        <!-- .hx-counter-area start -->
        <div class="counter-style-2">
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
        <!-- .hx-counter-area end -->
    </div>
</div>
<!-- about-area end-->

<!--service area start -->
<div class="hx-service-style-2 ptb-100-70">
    <div class="container">
        <div class="col-12">
            <div class="hx-site-title-1 text-center">
                <span>What We Do</span>
                <h2>Our Services</h2>
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

@endsection
