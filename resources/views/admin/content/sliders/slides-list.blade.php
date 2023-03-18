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
                        <h4 class="card-title">Slides List 🚀</h4>
                        <a class="btn btn-primary data-submit mr-1 waves-effect waves-float waves-light"
                           href="{{route('sliders.create')}}">Add Slide</a>
                    </div>
                    @include('admin._msg')
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Slide Title</th>
                                    <th>Description</th>

                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sliders as $slider)
                                    <tr>
                                        <td>{{$slider->title}}</td>
                                        <td>
                                            <p>{{$slider->description}}</p>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow"
                                                        data-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{route('sliders.edit',$slider->id)}}">
                                                        <i data-feather="edit-2" class="mr-50"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <a class="dropdown-item" onclick="return confirm('Are you sure delete it?')" href="{{route('sliders.destroy',$slider->id)}}">
                                                        <i data-feather="trash" class="mr-50"></i>
                                                        <span>Delete</span>
                                                    </a>
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
{{--            {{$sliders->links()}}--}}
        </div>
        <!-- Basic Tables end -->
    </div>
    <!--/ Kick start -->

@endsection
