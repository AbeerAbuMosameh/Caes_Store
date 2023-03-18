@extends('admin/layouts/contentLayoutMaster')

@section('content')
    <!-- Kick start -->
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Edit Page 🚀</h4>
        </div>
        <div class="card-body">
            <form action="{{route('page.update',$page->id)}}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('put')
                <div class="row">
                    @include('admin._msg')
                    <input id="textbody" type="hidden" name="description">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="basicInput11">Page Name</label>
                            <input type="text" class="form-control" id="basicInput11"
                                   placeholder="Enter Title" value="{{$page->name}}"  name="name" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="basicInput11">Page Title</label>
                            <input type="text" class="form-control" id="basicInput11"
                                   placeholder="Enter Title" value="{{$page->title}}"   name="title" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="basicInput11">Page Link</label>
                            <input type="text" class="form-control" id="basicInput11"
                                   placeholder="Enter Title" value="{{$page->link}}"   name="link" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="basicInputFile33">Cover Page Image</label>
                            <input type="file" class="form-control-file" id="basicInputFile33" name="cover_img"/>
                        </div>
                        <div style="margin-top: 10px;">
                            <img width="120" height="100"
                                 src="{{asset('uploads/images/pages/'.$page->cover_img)}}" alt="project">
                        </div>
                    </div>
                    <!-- Start quill editor (Description)-->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Page Description</label>
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
                                {!! $page->description !!}
                            </div>

                        </div>
                    </div>
                    <div  class="col-12">
                        <button onclick="MyFun()" type="submit" class="btn btn-primary mt-1">Submit</button>
                        <a href="{{route('all-pages')}}" class="btn btn-secondary mt-1">Cancel</a>

                    </div>
                </div>
            </form>
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
