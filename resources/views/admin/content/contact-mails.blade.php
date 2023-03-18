@extends('admin/layouts/contentLayoutMaster')

@section('title', 'Mails List')

@section('content')
    <!-- Kick start -->
    <div class="card">
        <!-- Basic Tables start -->
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Mails List 🚀</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Subject</th>
                                    <th>Sent At</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $contact)
                                    <tr>
                                        <td>
                                            {{$contact->name}}
                                        </td>
                                        <td> {{$contact->email}}</td>
                                        <td>
                                            {{$contact->message}}
                                        </td>
                                        <td>
                                            {{$contact->subject??'ـــ'}}
                                        </td>
                                        <td>
                                            {{$contact->created_at->format('Y-m-d')??''}}
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow"
                                                        data-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu">
{{--                                                    <a class="dropdown-item" href="javascript:void(0);"--}}
{{--                                                       data-toggle="modal" data-target="#exampleModal1">--}}
{{--                                                        <i data-feather="eye" data-contact-id="{{$contact->id}}"--}}
{{--                                                           class="mr-50"></i>--}}
{{--                                                        <span>Show</span>--}}
{{--                                                    </a>--}}
                                                    <a class="dropdown-item" onclick="return confirm('Are you sure delete it')" href="{{route('contact.delete',$contact->id)}}">
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
            </div>
        </div>
        <!-- Basic Tables end -->
    </div>
    <!--/ Kick start -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Email Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <tr data-dt-row="97" data-dt-column="2">
                            <td>Name:</td>
                            <td>Nserallah Motawea</td>
                        </tr>
                        <tr data-dt-row="97" data-dt-column="2">
                            <td>subject:</td>
                            <td>Subject Name</td>
                        </tr>
                        <tr data-dt-row="97" data-dt-column="2">
                            <td>Email:</td>
                            <td>dev.n.mot@gmail.com</td>
                        </tr>
                        <tr data-dt-row="97" data-dt-column="4">
                            <td>service:</td>
                            <td>service name</td>
                        </tr>
                        <tr data-dt-row="97" data-dt-column="5">
                            <td>Sent At:</td>
                            <td>1 Month A go</td>
                        </tr>
                        <tr data-dt-row="97" data-dt-column="5">
                            <td colspan="2">
                                <p>Message Details:</p>
                                <p class="mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt reiciendis porro
                                    cum dignissimos omnis in ipsa assumenda officiis molestias numquam, impedit
                                    temporibus exercitationem tempora repudiandae fugit voluptate amet, ex nostrum.
                                </p>
                            </td>
                        </tr>
                    </table>


                </div>

            </div>
        </div>
    </div>

@endsection
@section('page-script')
    <script>
        $('#exampleModalLabel').on('show.bs.modal', function(e) {
            var contactId = $(e.relatedTarget).data('contact-id');
            $(e.currentTarget).find('input[name="contact_id"]').val(contactId);
        });
    </script>
@endsection
