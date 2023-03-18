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
                        <h4 class="card-title">Categories List 🚀</h4>
                        <a class="btn btn-primary data-submit mr-1 waves-effect waves-float waves-light"
                           href="{{route('categories.create')}}">Add Category</a>
                    </div>
                    @include('admin._msg')
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Category Name</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $cat)
                                    <tr>
                                        <td>{{$cat->name}}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow"
                                                        data-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{route('categories.edit',$cat->id)}}">
                                                        <i data-feather="edit-2" class="mr-50"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <a class="dropdown-item"
                                                    onclick="return confirm('Are you sure delete it?')"
                                                    href="{{route('categories.destroy',$cat->id)}}">
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
        </div>
        <!-- Basic Tables end -->
    </div>
    <!--/ Kick start -->

@endsection
