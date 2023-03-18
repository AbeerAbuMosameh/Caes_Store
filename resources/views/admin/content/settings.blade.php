@extends('admin/layouts/contentLayoutMaster')

@section('title', 'Settings page')

@section('content')
    <!-- Kick start -->
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">settings 🚀</h4>
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="settings-tab" data-toggle="tab" href="#settings"
                       aria-controls="settings" role="tab" aria-selected="false">Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="password-tab" data-toggle="tab" href="#covers" aria-controls="password"
                       role="tab" aria-selected="false">Covers Page </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="password-tab" data-toggle="tab" href="#project" aria-controls="password"
                       role="tab" aria-selected="false">Advertising </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="password-tab" data-toggle="tab" href="#password" aria-controls="password"
                       role="tab" aria-selected="false">Change Password </a>
                </li>

            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="settings" aria-labelledby="settings-tab" role="tabpanel">
                    <form action="{{route('settings.update')}}"  enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('put')
                        <div class="row">
                            @include('admin._msg')
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="basicInput20">Time *</label>
                                    <input type="text" class="form-control" value="{{$setting->time}}" id="basicInput20" placeholder="Time"
                                           name="time"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="basicInput21">Days *</label>
                                    <input type="text" class="form-control" id="basicInput21"
                                           placeholder="Days" value="{{$setting->days}}" name="days"/>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="basicInput20">Address *</label>
                                    <input type="text" value="{{$setting->location}}" class="form-control" id="basicInput20" placeholder="Address"
                                           name="location"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="basicInput22">E-mail *</label>
                                    <input type="email" value="{{$setting->email}}" class="form-control"
                                           id="basicInput22" placeholder="Email"
                                           name="email"/>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="basicInputFile23">Mobile *</label>
                                    <input type="text" value="{{$setting->phone}}" class="form-control"
                                           id="basicInputFile23" placeholder="Mobile"
                                           name="phone"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="basicInputFile25">Facebook</label>
                                    <input type="text" value="{{$setting->facebook}}" class="form-control" id="basicInputFile25"
                                           placeholder="Facebook" name="facebook"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="basicInputFile25">Insta</label>
                                    <input value="{{$setting->insta}}" type="text" class="form-control" id="basicInputFile25" placeholder="Insta"
                                           name="insta"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="basicInputFile25">Twitter</label>
                                    <input value="{{$setting->twitter}}" type="text" class="form-control" id="basicInputFile25"
                                           placeholder="Twitter" name="twitter"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="basicInputFile25">Gmail</label>
                                    <input value="{{$setting->gmail}}" type="text" class="form-control" id="basicInputFile25" placeholder="Gmail"
                                           name="gmail"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="basicInputFile24">Set Logo</label>
                                    <input type="file" class="form-control-file" id="basicInputFile24" name="logo"/>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="basicInputFile24">Set Background</label>
                                    <input type="file" class="form-control-file" id="basicInputFile24"
                                           name="background"/>
                                </div>
                            </div>

                            <div class="col-md-6" >
                                <img  src="{{asset('uploads/images/logo/'.$setting->logo)}}" width="50%"
                                      alt="img">
                            </div>
                            <div class="col-md-6">
                                <img style="background-color: #d9e0e7" src="{{asset('uploads/images/background/'.$setting->background)}}"
                                     width="50%" alt="img">
                            </div>


                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane" id="covers" aria-labelledby="password-tab" role="tabpanel">
                    <form enctype="multipart/form-data" action="{{route('settings.updateCover')}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="basicInputFile2">Services Page</label>
                                    <input type="file" class="form-control-file" id="basicInputFile2"
                                           name="services_cover_img"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="basicInputFile2">Projects  Page</label>
                                    <input type="file" class="form-control-file" id="basicInputFile2"
                                           name="projects_cover_img"/>
                                </div>
                            </div>
                            <div class="col-md-6" >
                                <img  src="{{asset('uploads/images/'.$set->services_cover_img)}}"
                                      width="50%" alt="img">
                            </div>
                            <div class="col-md-6">
                                <img src="{{asset('uploads/images/'.$set->projects_cover_img)}}"
                                     width="50%" alt="img">
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="basicInputFile2">Contacts Page</label>
                                    <input type="file" class="form-control-file" id="basicInputFile2"
                                           name="contacts_cover_img"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="basicInputFile2">Project Details Page</label>
                                    <input type="file" class="form-control-file" id="basicInputFile2"
                                           name="project_details_cover"/>
                                </div>
                            </div>
                            <div class="col-md-6" >
                                <img  src="{{asset('uploads/images/'.$set->contacts_cover_img)}}"
                                      width="50%" alt="img">
                            </div>
                            <div class="col-md-6">
                                <img style="background-color: #d9e0e7"
                                     src="{{asset('uploads/images/'.$set->project_details_cover)}}"
                                     width="50%" alt="img">
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="basicInputFile2">Contacts Page Image</label>
                                    <input type="file" class="form-control-file" id="basicInputFile2"
                                           name="contacts_img"/>

                                    <img  src="{{asset('uploads/images/'.$set->contacts_img)}}"
                                          width="50%" alt="img">

                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="tab-pane" id="project" aria-labelledby="password-tab" role="tabpanel">
                    <form action="{{route('projDetails')}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="row">
                            @include('admin._msg')
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="basicInput26">Discount</label>
                                    <input type="text" class="form-control" id="basicInput26"
                                           placeholder="Discount" value="{{$set->project_details_description}}" name="project_details_description" />
                                </div>
                            </div>
                            <div class="col-md-6">

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="basicInput28">Image</label>
                                    <input type="file" class="form-control" id="basicInput28"
                                           placeholder="Image"  name="project_details_img" />

                                    <img style="margin-top: 10px;" src="{{asset('uploads/images/'.$set->project_details_img)}}"
                                          width="25%" alt="img">

                                </div>
                            </div>


                            <div class="col-12"><button type="submit" class="btn btn-primary">Submit</button></div>
                        </div>
                    </form>
                </div>


                <div class="tab-pane" id="password" aria-labelledby="password-tab" role="tabpanel">
                    <form action="{{route('changePassword')}}" method="POST">
                        @csrf
                        <div class="row">
                            @include('admin._msg')
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="basicInput26">Old Password *</label>
                                    <input type="password" class="form-control" id="basicInput26"
                                           placeholder="Old Password" name="password" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="basicInput28">New Password *</label>
                                    <input type="password" class="form-control" id="basicInput28"
                                           placeholder="New Password" name="newPassword" />
                                </div>
                            </div>
                            <div class="col-12"><button type="submit" class="btn btn-primary">Submit</button></div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
            </div>
        </div>
    </div>
    <!--/ Kick start -->

@endsection
