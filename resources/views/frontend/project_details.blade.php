@extends('frontend.layout.app')
@push('style')
    <style>
        .breadcumb-area {
            background: url({{asset('uploads/images/'.$page_setting->project_details_cover)}}) no-repeat center top / cover;
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
                        <h2>Our Projects</h2>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><span>Projects</span></li>
                            <li><span>Projects Details</span></li>
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
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="hx-service-dt-left">
                        <div class="widget category-widget">
                            <h3>Categories</h3>
                            <ul>
                                @foreach($categories  as $category)
                                    <li><a href="#">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="hx-field-section">
                            <div class="hx-field-img">
                                <img src="{{asset('uploads/images/'.$page_setting->project_details_img)}}" alt="">
                            </div>
                            <div class="hx-field-content">
                                <h3>Get<span>{{$page_setting->project_details_description}}%</span>Off</h3>
                                <h2>ALL ORDER</h2>
                            </div>
                        </div>
                        <div class="hx-contact-ad">
                            <div class="hx-contact-sub">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <h4>Phone</h4>
                                <p>{{\App\Models\Setting::find(1)->phone}}</p>
                            </div>
                            <div class="hx-contact-sub">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <h4>Email</h4>
                                <p>{{\App\Models\Setting::find(1)->email}}</p>
                            </div>
                            <div class="hx-contact-sub hx-contact-sub-2">
                                <i class="fa fa-map-o" aria-hidden="true"></i>
                                <h4>Address</h4>
                                <p> {{\App\Models\Setting::find(1)->location}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="hx-service-dt-right">
                        <div class="hx-service-dt-img">
                            <img src="{{asset('uploads/images/projects/'.$proj->img)}}" alt="">
                        </div>
                        <p><span>T</span>
                        {!! $proj->description??'' !!}

                        </div>
                    </div>

{{--                    <div class="prv-nx">--}}
{{--                        <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,--}}
{{--                            making this the first true generator on the Internet. </p>--}}
{{--                    </div>--}}
                    <!--Start project area-->
                    <section class="hx-project-section">
                        <div class="container">
                            <div class="row">
                                <div class="col col-xs-12 sortable-project col-r">
                                    <h2>Related Projects</h2>
                                    <div class="project-container project-fancybox masonry-project">
                                        @foreach($projects as $project)
                                            <div class="grid {{$project->category->name}}">
                                                <a href="{{route('project_details',$project->id)}}" class="fancybox"
                                                   data-fancybox-group="gall-1">
                                                    <img width="50" src="{{asset('uploads/images/projects/'.$project->img)}}" alt
                                                         class="img img-responsive">
                                                    <div class="hx-project-text">
                                                        <ul>
                                                            <li>
                                                                <i class="fa fa-link"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                                            </li>
                                                        </ul>
                                                        <h4>{{$project->name}}</h4>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div> <!-- end row -->
                        </div>
                    </section>
                    <!--End project area-->
                </div>
            </div>
        </div>
    </div>
    <!-- hx-service-dt-area end -->

@endsection
