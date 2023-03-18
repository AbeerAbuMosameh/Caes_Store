@extends('admin/layouts/contentLayoutMaster')

@section('title', 'Slides List')

@section('content')
    <!-- Kick start -->
    <div class="card">
        <!-- Basic Tables start -->
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Services List 🚀</h4>
                        <a class="btn btn-primary data-submit mr-1 waves-effect waves-float waves-light"
                           href="{{route('services.create')}}">Add Service</a>
                    </div>
                    @include('admin._msg')
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Sub Title</th>
                                    <th>Price</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($services as $service)
                                    <tr>
                                        <td>
                                            <img class="mr-75" height="50" width="50"
                                                src="{{asset('uploads/images/services/'.$service->img)}}" width="50%" alt="service">
                                        </td>
                                        <td>{{$service->title}}</td>
                                        <td>{{$service->description}}</td>
                                        <td>{{$service->price}}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow"
                                                        data-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{route('services.edit',$service->id)}}">
                                                        <i data-feather="edit-2" class="mr-50"></i>
                                                        <span>Edit</span>
                                                    </a>
{{--                                                    <a class="dropdown-item"--}}
{{--                                                    onclick="return confirm('Are you sure delete it?')"--}}
{{--                                                    href="{{route('services.destroy',$service->id)}}">--}}
{{--                                                        <i data-feather="trash" class="mr-50"></i>--}}
{{--                                                        <span>Delete</span>--}}
{{--                                                    </a>--}}
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Basic Tables end -->
    </div>
    <!--/ Kick start -->

@endsection
