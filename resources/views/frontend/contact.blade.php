@extends('frontend.layout.app')
@push('style')
    <style>
        .breadcumb-area {
            background: url({{asset('uploads/images/'.$page_setting->contacts_cover_img)}}) no-repeat center top / cover;
        }
    </style>
@endpush
@section('content')
    @push('style')
        <style>
            .captcha img {
                width: 258px;
                height: 70px;
            }
        </style>
    @endpush
    <!-- .breadcumb-area start -->
    <div class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-wrap text-center">
                        <h2>Kontaktieren Sie uns</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span>Kontakt</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .breadcumb-area end -->

    <!-- .contact area start -->
    <div class="hx-contact-area-s2 ptb-100-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="hx-contact-img">
                        <img src="{{asset('uploads/images/'.$page_setting->contacts_img)}}" alt="">
                    </div>
                </div>
                <div class="col col-lg-7 col-md-12 col-sm-12">
                    <div class="hx-contact-content">
                        <h2>Get In Touch</h2>
                        @include('admin._msg')
                        <div class="hx-contact-form">
                            <form method="post" action="{{route('contact.send')}}"
                                  class="contact-validation-active" id="hx-contact">
                                @csrf
                                <div class="half-col">
                                    <input type="text" name="name" id="name" class="form-control"
                                           placeholder="Vor-Nachnahme">
                                </div>
                                <div class="half-col">
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Telefonnummer">
                                </div>
                                <div class="half-col">
                                    <input type="email" name="email" id="email" class="form-control"
                                           placeholder="E-Mail">
                                </div>
                                <div class="half-col">
                                    <input type="text" name="address" id="address" class="form-control"
                                           placeholder="Betreff">
                                </div>
                                <div class="half-col captcha">
                                    <span>{!! captcha_img() !!}</span>
                                    <button style="height: 70px;" type="button" class="btn btn-danger" class="reload"
                                            id="reload">
                                        &#x21bb;
                                    </button>
                                </div>
                                {{----}}
                                <div class="half-col">
                                    <input style="height: 70px;" id="captcha" type="text" class="form-control"
                                           placeholder="Enter Captcha"
                                           name="captcha">
                                </div>
                                <div>
                                    <textarea class="form-control" name="note" id="note"
                                              placeholder="Ihre Nachricht"></textarea>
                                </div>


                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
{{----}}
                                            <div class="modal-body">
                                                <div class="captcha" style="margin-top:25px; ">
                                                    <span>{!! captcha_img() !!}</span>
                                                    <button type="button" class="btn btn-danger" class="reload"
                                                            id="reload">
                                                        &#x21bb;
                                                    </button>
                                                </div>
{{----}}
                                                <div class="col">
                                                    <input id="captcha" type="text" class="form-control"
                                                           placeholder="Enter Captcha"
                                                           name="captcha">
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top: 5px;">
                                                <hr>
                                                <button type="button" class="theme-btn2 mr-2" data-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit" class="theme-btn">Senden</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-btn-wrapper">
                                    <button data-toggle="modal" data-target="#exampleModal" class="theme-btn">Send
                                        Message
                                    </button>

                                    <div id="loader">
                                        <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                                    </div>
                                </div>
                                <div class="clearfix error-handling-messages">
                                    <div id="success">Thank you</div>
                                    <div id="error"> Error occurred while sending email. Please try again later.</div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .contact area start -->
    <!-- .hx-contact-grid-area start -->
    <div class="hx-contact-grid-area hx-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="hx-contact-gd-wrap">
                        <div class="hx-contact-gd-icon">
                            <i class="fi flaticon-call"></i>
                        </div>
                        <div class="hx-contact-gd-text">
                            <h4>Call Us Now</h4>
                            <span>{{\App\Models\Setting::find(1)->phone}} </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="hx-contact-gd-wrap">
                        <div class="hx-contact-gd-icon">
                            <i class="fi flaticon-message"></i>
                        </div>
                        <div class="hx-contact-gd-text">
                            <h4>Mail Us Today</h4>
                            <span>{{\App\Models\Setting::find(1)->email}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="hx-contact-gd-wrap">
                        <div class="hx-contact-gd-icon">
                            <i class="fi flaticon-placeholder"></i>
                        </div>
                        <div class="hx-contact-gd-text">
                            <h4>Our Location</h4>
                            <span>{{\App\Models\Setting::find(1)->location}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-xs-12">
                    <div class="contact-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.9147703055!2d-74.11976314309273!3d40.69740344223377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1547528325671"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .hx-contact-grid-area end -->

@endsection
@push('js')
    <script type="text/javascript">
        $('#reload').click(function () {
            $.ajax({
                type: 'GET',
                url: 'reload-captcha',
                success: function (data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });

    </script>
@endpush
