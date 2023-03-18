@extends('frontend.layout.app')
@push('style')
    <style>
        .breadcumb-area {
            background: url({{asset('uploads/images/'.$page_setting->services_cover_img)}}) no-repeat center top / cover;
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
                        <h2>Unsere Dienstleistungen</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span>Service</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .breadcumb-area end -->
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
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="hx-service-wrap">
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
