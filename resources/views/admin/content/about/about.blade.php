@extends('admin/layouts/contentLayoutMaster')

@section('title', 'About')

@section('content')
<!-- Kick start -->
<div class="card">
  <div class="card-header">
    <h4 class="card-title">About 🚀</h4>
  </div>
  <div class="card-body">
    <form action="{{route('settings.update.about')}}" enctype="multipart/form-data" method="POST">
      @csrf
      @method('put')
      <div class="row">
          @include('admin._msg')
        <div class="col-md-12">
          <div class="form-group">
            <label for="basicInput12">Title</label>
            <input type="text" class="form-control" id="basicInput12" placeholder="Enter Title"
                 value="{{$page_setting->about_title}}"  name="about_title" />
          </div>
        </div>
          <div class="col-12">
              <div class="form-group">
                  <label for="exampleFormControlTextarea1">About Description</label>
                  <textarea
                      class="form-control"
                      id="exampleFormControlTextarea1"
                      rows="6"
                      placeholder="Inter about description"
                      name="about_description"
                  > {{$page_setting->about_description}} </textarea>
              </div>
          </div>
          <div class="col-md-6">
          <div class="form-group">
            <label for="basicInputFile5">About Image</label>
            <input type="file" class="form-control-file" id="basicInputFile5" name="about_img"/>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="basicInputFile5">About Cover Image</label>
            <input type="file" class="form-control-file" id="basicInputFile5" name="about_cover_img"/>
          </div>
        </div>

          <div class="col-md-6" >
              <img style="background-color: #d9e0e5" src="{{asset('uploads/images/'.$page_setting->about_img)}}" width="50%" alt="img">
          </div>

          <div class="col-md-6">
              <img style="background-color: #d9e0e7" src="{{asset('uploads/images/'.$page_setting->about_cover_img)}}"
                   width="50%" alt="img">
          </div>

          <div class="col-12"><button type="submit" class="btn btn-primary">Submit</button></div>
      </div>
    </form>
  </div>
</div>
<!--/ Kick start -->

@endsection
