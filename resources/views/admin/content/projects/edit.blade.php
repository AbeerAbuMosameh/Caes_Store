@extends('admin/layouts/contentLayoutMaster')

@section('content')
    <!-- Kick start -->
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Edit Project 🚀</h4>
        </div>
        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane active" id="slider" aria-labelledby="slider-tab" role="tabpanel">
                    <form enctype="multipart/form-data" method="POST"
                          action="{{route('projects.update',$project->id)}}">
                        @csrf
                        @method('put')
                        <div class="row">
                            @include('admin._msg')
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="basicInput1">Project Name</label>
                                    <input type="text" class="form-control" id="basicInput1"
                                           placeholder="Enter Name" value="{{$project->name}}" name="name"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="basicSelect">Select Project Category</label>
                                    <select class="form-control" id="basicSelect" name="category_id">
                                        @foreach($categories as $category)
                                            <option
                                                {{isset($project) && $project->category_id==$category->id?"selected":" "}}
                                                value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="basicInput1">Discount</label>
                                    <input type="text" class="form-control" id="basicInput1"
                                           placeholder="Enter Title" value="{{$project->discount}}"
                                           name="discount"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="basicInputFile3">Project image</label>
                                    <input type="file" class="form-control-file" id="basicInputFile3"
                                           name="img"/>
                                    <div style="margin-top: 10px;">
                                        <img width="120" height="100"
                                             src="{{asset('uploads/images/projects/'.$project->img)}}" alt="project">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1"> Description</label>
                                    <div id="toolbar">

                                      <span class="ql-formats">
                                        <select class="ql-font">
                                          <option selected=""></option>
                                          <option value="serif"></option>
                                          <option value="monospace"></option>
                                        </select>
                                        <select class="ql-size">
                                          <option value="small"></option>
                                          <option selected=""></option>
                                          <option value="large"></option>
                                          <option value="huge"></option>
                                        </select>
                                      </span>
                                        <span class="ql-formats">
                                        <button class="ql-bold"></button>
                                        <button class="ql-italic"></button>
                                        <button class="ql-underline"></button>
                                        <button class="ql-strike"></button>
                                      </span>
                                        <span class="ql-formats">
                                        <button class="ql-blockquote">Blockquote</button>
                                        <button class="ql-code-block">Code-block</button>
                                        <button class="ql-script" value="sub"> </button>
                                        <button class="ql-script" value="super"></button>
                                      </span>
                                        <span class="ql-formats">
                                        <select class="ql-color"></select>
                                        <select class="ql-background"></select>
                                      </span>
                                        <span class="ql-formats">
                                        <button class="ql-list" value="ordered"></button>
                                        <button class="ql-list" value="bullet"></button>
                                        <select class="ql-align">
                                          <option selected=""></option>
                                          <option value="center"></option>
                                          <option value="right"></option>
                                          <option value="justify"></option>
                                        </select>
                                      </span>
                                        <span class="ql-formats">
                                        <button class="ql-link"></button>
                                        <button class="ql-image"></button>
                                        <button class="ql-video"></button>
                                      </span>
                                        <span class="ql-formats">
                                        <button class="ql-formula"></button>
                                        <button class="ql-code-block"></button>
                                      </span>
                                        <span class="ql-formats">
                                        <button class="ql-clean"></button>
                                      </span>


                                    </div>
                                    <div id="editor">
                                        {!! $project->description??'' !!}

                                    </div>
                                </div>
                            </div>
                            <input id="textbody" type="hidden" name="description">
                            <div class="col-12">
                                <button type="submit" onclick="MyFun()" class="btn btn-primary">Submit</button>
                                <a href="{{route('projects')}}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!--/ Kick start -->

@endsection
@section('page-script')
    <script>
        var quill = new Quill('#editor', {
            modules: { toolbar: '#toolbar' },
            theme: 'snow'
        });
        function MyFun() {
            $("#textbody").val($("#editor .ql-editor").html());
        }
    </script>
@endsection
