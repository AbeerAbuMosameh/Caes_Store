<!-- .hx-site-footer-area start -->
<div class="hx-site-footer-area">
    <div class="hx-site-footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 footer-t">
                    <div class="hx-site-logo">
                        <img src="assets/images/logo/logo-2.png" alt="">
                    </div>
                    <p>Willkommen bei Die-KfzWerkstatt der Name ist Programm. Stehts im Fokus, besten Service zu vernünftigen Preisen. Natürlich mit Handschlagqualität.</p>
                    <div class="social">
                        <ul class="d-flex">
                            <li><a href="https://www.facebook.com/ronnybergerried" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <!-- <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li> -->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 footer-t">
                    <div class="hx-site-footer-adress">
                        <h3>Address</h3>
                        <div class="adress-section">
                            <ul>
                                <li>Die Kfz-Werkstatt Ronny Berger</li>
                                <li>Bahnhofstraße 36, </li>
                                <li>4910 Ried im Innkreis</li>
                            </ul>
                            <ul class="ad">
                                <li><span><i class="fa fa-phone fa-lg"></i> :</span> {{\App\Models\Setting::find(1)->phone}}</li>
                                <li><span><i class="fa fa-envelope fa-lg"></i> :</span> {{\App\Models\Setting::find(1)->email}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 footer-t">
                    <div class="hx-site-footer-service">
                        <h3>Services</h3>
                        <div class="service-section">
                            <ul>
                               <li>Engine Repair</li>
                               <li>Tire Replacement</li>
                               <li>Trandmission</li>
                               <li>Diagnostic</li>
                               <li>Batteries</li>
                               <li>Break Repair</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 footer-t">
                    <div class="hx-site-footer-service">
                        <h3>Links</h3>
                        <div class="service-section">
                            <ul>
                                <li>
                                    <a href="https://dev.thearab.net/pages/Datenschutzerklärung">Datenschutzerklärung</a>
                                </li>
                                <li>
                                     <a href="https://dev.thearab.net/pages/IMPRESSUM">IMPRESSUM</a>
                                </li>                               
                             </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hx-site-footer-bottom">
        <div class="container">
            <div class="hx-site-footer-bottom-content">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex justify-content-between">
                            <span>All copyright reserved © <span>Autalogic</span> 2021</span>
                            <span>powered by: <a href="index.html" target="_blank">MOTIV-X</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .hx-site-footer-area end -->


<!-- All JavaScript files
================================================== -->
<script src="{{asset('/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
<!-- Plugins for this template -->
<script src="{{asset('/assets/js/jquery-plugin-collection.js')}}"></script>
<script src="{{asset('/assets/js/jquery.slicknav.min.js')}}"></script>
<!-- Custom script for this template -->
<script src="{{asset('/assets/js/script.js')}}"></script>
<script>
  new WOW().init();
</script>

