@extends('admin/layouts/contentLayoutMaster')

@section('title', 'Projects page')

@section('content')
<!-- Kick start -->
<div class="card">
  <div class="card-header">
    <h4 class="card-title">Add Category</h4>
  </div>
  <div class="card-body">
    <form action="" method="POST">
      @csrf              
        <div class="form-group">
          <label for="basicInput15">Category Name</label>
          <input type="text" class="form-control" id="basicInput15" placeholder="Enter Name" name="category_name" />
        </div>        
        <div><button type="submit" class="btn btn-primary">Save Category</button></div>      
    </form>
  </div>
</div>
<div class="card">
  <div class="card-header">
    <h4 class="card-title">Add Project 🚀</h4>
  </div>
  <div class="card-body">    
    <form action="" method="POST">
      @csrf
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="basicInput16">Project Name</label>
            <input type="text" class="form-control" id="basicInput16" placeholder="Enter Name" name="project_name" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="basicSelect">Select Project Category</label>
            <select class="form-control" id="basicSelect" name="category">
              <option>IT</option>
              <option>Blade Runner</option>
              <option>Thor Ragnarok</option>
              <option>test</option>
              <option>php</option>
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="basicInputFile122">Project Image</label>
            <input type="file" class="form-control-file" id="basicInputFile122" name="project_image"/>
          </div>
        </div>
        <div class="col-12">
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Project Description</label>
            <textarea
              class="form-control"
              id="exampleFormControlTextarea1"
              rows="3"
              placeholder="Inter about description"
              name="about_description"
            ></textarea>
          </div>
        </div>
        <div class="col-12">
          <div class="form-group">
            <label for="basicInputFile102">Thumbnails Image</label>
            <input type="file" class="form-control-file" id="basicInputFile102" name="thumb_image"/>
          </div>
        </div>
        <div class="col-12"><button type="submit" class="btn btn-primary">Submit</button></div>
      </div>
    </form>
  </div>
</div>
<div class="card">
  <div class="card-header">
    <h4 class="card-title">Add Discount 🚀</h4>
  </div>
  <div class="card-body">    
    <form action="" method="POST">
      @csrf
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="basicSelect1">Select Project</label>
            <select class="form-control" id="basicSelect1" name="project">
              <option>IT</option>
              <option>Blade Runner</option>
              <option>Thor Ragnarok</option>
              <option>test</option>
              <option>php</option>
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="discount15">Discount Percentage</label>
            <input type="number" class="form-control" id="discount15" placeholder="Enter Name" name="category_name" />
          </div>
        </div>
        
        <div class="col-md-6">
          <div class="form-group">
            <label for="discount122">Discount Image</label>
            <input type="file" class="form-control-file" id="discount122" name="discount_image"/>
          </div>
        </div>
        
        <div class="col-12"><button type="submit" class="btn btn-primary">Submit</button></div>
      </div>
    </form>
  </div>
</div>
<!--/ Kick start -->

@endsection