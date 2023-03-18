@extends('admin/layouts/contentLayoutMaster')

@section('title', 'Services Packages')

@section('content')
<!-- Kick start -->
<div class="card">
    <!-- Basic Tables start -->
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">  
                <div class="card-header">
                    <h4 class="card-title">Services Packages List 🚀</h4>
                    <a class="btn btn-primary data-submit mr-1 waves-effect waves-float waves-light" href="#">Add Service</a>
                </div>
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
                                <tr>
                                    <td>
                                        <img
                                            src="{{asset('images/icons/angular.svg')}}"
                                            class="mr-75"
                                            height="50"
                                            width="50"
                                            alt="Angular"
                                        />                            
                                    </td>
                                    <td>Peter Charls</td>                            
                                    <td>
                                        istiae asperiores.
                                    </td>
                                    <td>
                                        250 $
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                            <i data-feather="more-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">
                                                <i data-feather="edit-2" class="mr-50"></i>
                                                <span>Edit</span>
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0);">
                                                <i data-feather="trash" class="mr-50"></i>
                                                <span>Delete</span>
                                            </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img
                                            src="{{asset('images/icons/angular.svg')}}"
                                            class="mr-75"
                                            height="50"
                                            width="50"
                                            alt="Angular"
                                        />                            
                                    </td>
                                    <td>Peter Charls</td>                            
                                    <td>
                                        istiae asperiores.
                                    </td>
                                    <td>
                                        250 $
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                            <i data-feather="more-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">
                                                <i data-feather="edit-2" class="mr-50"></i>
                                                <span>Edit</span>
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0);">
                                                <i data-feather="trash" class="mr-50"></i>
                                                <span>Delete</span>
                                            </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img
                                            src="{{asset('images/icons/angular.svg')}}"
                                            class="mr-75"
                                            height="50"
                                            width="50"
                                            alt="Angular"
                                        />                            
                                    </td>
                                    <td>Peter Charls</td>                            
                                    <td>
                                        istiae asperiores.
                                    </td>
                                    <td>
                                        250 $
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                            <i data-feather="more-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">
                                                <i data-feather="edit-2" class="mr-50"></i>
                                                <span>Edit</span>
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0);">
                                                <i data-feather="trash" class="mr-50"></i>
                                                <span>Delete</span>
                                            </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
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