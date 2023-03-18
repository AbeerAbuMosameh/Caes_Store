@extends('frontend.layout.app')
@push('style')
    <style>
        .breadcumb-area {
            background: url({{asset('uploads/images/'.$page_setting->projects_cover_img)}}) no-repeat center top / cover;
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
                        <h2>Unsere Projekte</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span>Projekte</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .breadcumb-area end -->
    <!--Start project area-->
    <section class="hx-project-section hx-section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12 sortable-project">
                    <div class="hx-project-filters">
                        <ul>
                            <li><a data-filter="*" href="#" class="current">All</a></li>
                            @foreach($categories as $category)
                                <li><a data-filter=".{{$category->name}}" href="#">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
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

@endsection
