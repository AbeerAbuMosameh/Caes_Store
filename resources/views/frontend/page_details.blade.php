@extends('frontend.layout.app')
@push('style')
    <style>
        .breadcumb-area {
            background: url({{asset('uploads/images/pages/'.$page->cover_img)}}) no-repeat center top / cover;
        }
        .hx-site-title h2:before, .hx-site-title-1 h2:before {
            margin-left: 513px;
            margin-right: auto;
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
                        <h2>Our Pages</h2>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><span>Pages</span></li>
                            <li><span>{{$page->name}}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .breadcumb-area end -->
    <!-- hx-service-dt-area start -->
    <div class="hx-service-dt-area hx-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hx-about-content text-center">
                        <div class="hx-site-title text-center">
                            <span>Our Company</span>
                            <h2>{{$page->title}}</h2>
                        </div>
                    </div>
                </div>

                <div class="col-lg-10 offset-1">
                        {!! $page->description??'' !!}
                        </div>
                    </div>

                    <!--Start project area-->
                    <!--End project area-->
                </div>
            </div>
        </div>
    </div>
    <!-- hx-service-dt-area end -->

@endsection
