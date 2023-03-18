@extends('admin/layouts/contentLayoutMaster')

@section('title', 'Home Page')

@section('content')
<!-- Kick start -->
<div class="card">
  <div class="card-header">
    <h4 class="card-title">Add Slide 🚀</h4>
  </div>
  <div class="card-body">
    <div class="tab-content">
      <div class="tab-pane active" id="slider" aria-labelledby="slider-tab" role="tabpanel">
        <form action="" method="POST" action="{{route('sliders.store')}}">
          @csrf
          <div class="row">
              @include('admin._msg')
              <div class="col-md-10">
              <div class="form-group">
                <label for="basicInput1">Slide Title</label>
                <input type="text" class="form-control" id="basicInput1" placeholder="Enter Title" name="title" />
              </div>
            </div>
            <div class="col-md-10">
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Slide Description</label>
                <textarea
                  class="form-control"
                  id="exampleFormControlTextarea1"
                  rows="3"
                  placeholder="Textarea"
                  name="description"
                ></textarea>
              </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{route('sliders')}}" class="btn btn-secondary">Cancel</a>
            </div>
          </div>
        </form>
      </div>
      <div class="tab-pane" id="services" aria-labelledby="services-tab" role="tabpanel">
        <form action="" method="POST">
          @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="basicInput2">Service Title</label>
                <input type="text" class="form-control" id="basicInput2" placeholder="Enter Title" name="service_title" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="basicInput2">Sub Title</label>
                <input type="text" class="form-control" id="basicInput2" placeholder="Enter Title" name="service_sub_title" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="basicInputFile3">service image</label>
                <input type="file" class="form-control-file" id="basicInputFile3" name="service_image"/>
              </div>
            </div>
            <div class="col-md-6">

              <div class="form-group">
                <label for="basicInput4">Service Price</label>
                <input type="number" class="form-control" id="basicInput4" placeholder="Enter Price" name="service_price" />
              </div>
            </div>
            <div class="col-12"><button type="submit" class="btn btn-primary">Submit</button></div>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
<!--/ Kick start -->

@endsection
