@extends('admin/layouts/contentLayoutMaster')

@section('content')
    <!-- Kick start -->
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Pages 🚀</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Title</th>
                        <th>Link</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pages as $page)
                        <tr>
                            <td>{{$page->name}}</td>
                            <td>{{$page->title}}</td>
                            <td><a href="{{asset('pages/'.$page->link)}}">{{$page->link}}</a></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow"
                                            data-toggle="dropdown">
                                        <i data-feather="more-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{route('page.edit',$page->id)}}">
                                            <i data-feather="edit" class="mr-50"></i>
                                            <span>Edit</span>
                                        </a>
                                        <a onclick="return confirm('Are you sure delete it?')" class="dropdown-item" href="{{route('page.delete',$page->id)}}">
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
    <!--/ Kick start -->

@endsection
