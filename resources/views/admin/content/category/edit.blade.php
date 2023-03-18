@extends('admin/layouts/contentLayoutMaster')

@section('title', 'Home Page')

@section('content')
    <!-- Kick start -->
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Edit Category 🚀</h4>
        </div>
        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane active" id="slider" aria-labelledby="slider-tab" role="tabpanel">
                    <form action="" method="POST" action="{{route('categories',$category->id)}}">
                        @csrf
                        @method('put')
                        <div class="row">
                            @include('admin._msg')
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="basicInput1">Category Name</label>
                                    <input type="text" value="{{$category->name}}" class="form-control" id="basicInput1"
                                           placeholder="Enter Name" name="name"/>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{route('categories')}}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!--/ Kick start -->

@endsection
