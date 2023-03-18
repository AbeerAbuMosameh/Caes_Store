@extends('admin/layouts/contentLayoutMaster')

@section('title', 'Home Page')

@section('content')
<!-- Kick start -->
<div class="card">
  <div class="card-header">
    <h4 class="card-title">Home page 🚀</h4>
  </div>
  <div class="card-body">
    <div class="tab-content">
      <div class="tab-pane active" id="slider" aria-labelledby="slider-tab" role="tabpanel">
        <form action="{{route('settings.update.home')}}" enctype="multipart/form-data" method="POST">
          @csrf
            @method('put')
          <div class="row">
              @include('admin._msg')
            <div class="col-md-6">
              <div class="form-group">
                <label for="basicInput1">Home Title</label>
                <input type="text" class="form-control" id="basicInput1" placeholder="Enter Title"
                     value="{{$page_setting->home_title}}"  name="home_title" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="basicInput1">Home Vedio Link</label>
                <input type="text" class="form-control" id="basicInput1" placeholder="Enter Title"
                     value="{{$page_setting->video}}"  name="video" />
              </div>
            </div>
              <div class="col-md-12">
                  <div class="form-group">
                      <label for="exampleFormControlTextarea1">Home Description</label>
                      <textarea
                          class="form-control"
                          id="exampleFormControlTextarea1"
                          rows="6"
                          placeholder="Textarea"
                          name="home_description"
                      >{{$page_setting->home_description}}</textarea>
                  </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
                <label for="basicInputFile2">Home image</label>
                <input type="file" class="form-control-file" id="basicInputFile2" name="home_img"/>
                  <img style="background-color: #d9e0e5; margin-top: 10px;" src="{{asset('uploads/images/'.$page_setting->home_img)}}" width="50%" alt="img">
              </div>
            </div>
{{--              <div class="col-md-4">--}}
{{--                  <div class="form-group">--}}
{{--                      <label for="basicInputFile2">Home Section Image</label>--}}
{{--                      <input type="file" class="form-control-file" id="basicInputFile2" name="home_section_img"/>--}}
{{--                  </div>--}}
{{--              </div>--}}
{{--              <div class="col-md-6">--}}
{{--                  <div class="form-group">--}}
{{--                      <label for="basicInputFile2">Home Video</label>--}}
{{--                      <input type="file" class="form-control-file" id="basicInputFile2" name="video"/>--}}
{{--                  </div>--}}
{{--              </div>--}}

{{--              <div class="col-md-6" >--}}
{{--                  <img style="background-color: #d9e0e5" src="{{asset('uploads/images/'.$page_setting->home_img)}}" width="50%" alt="img">--}}
{{--              </div>--}}
{{--              <div class="col-md-4">--}}
{{--                  <img style="background-color: #d9e0e7" src="{{asset('uploads/images/'.$page_setting->home_section_img)}}"--}}
{{--                       width="50%" alt="img">--}}
{{--              </div>--}}
{{--              <div class="col-md-6">--}}
{{--                  <img style="background-color: #d9e0e7" src="{{asset('uploads/images/'.$page_setting->video)}}"--}}
{{--                       width="50%" alt="img">--}}
{{--              </div>--}}

              <div  class="col-12"><button style="margin-top: 10px;" type="submit" class="btn btn-primary">Submit</button></div>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
<!--/ Kick start -->

@endsection
