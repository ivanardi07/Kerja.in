@extends('layouts.main')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/styles/contact_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/styles/contact_responsive.css')}}">
@endsection


@section('content')
    <div class="container contact_container">
        <div class="row">
            <div class="col">

                <!-- Breadcrumbs -->

                <div class="breadcrumbs d-flex flex-row align-items-center">
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Tentang Kami</a></li>
                    </ul>
                </div>

            </div>
        </div>

        
        <!-- Contact Us -->

        <div class="row">

            <div class="col-lg-6 contact_col">
                <div class="contact_contents">
                    <h1>Deskripsi Singkat</h1>
                    <p>Website ini bertujuan untuk memberikan sebuah platform dimana masyarakat dan karyawan yang terkena PHK 
                    untuk dapat menjual skill mereka sesuai nilai yang dimiliki. 
                    Selain itu dengan adanya platform ini bisa menjadi tempat orang-orang untuk mencari 
                    sesuatu dengan metode <i>By Request.</i></p>
                    <div>
                        <p>(0341) 404424</p>
                        <p>Politeknik Negeri Malang</p>                        
                    </div>
                    
                    <div>
                        <p>Buka jam: 8.00-18.00</p>                        
                    </div>
                </div>

                <!-- Follow Us -->

                <div class="follow_us_contents">
                    <h1>Follow Us</h1>
                    <ul class="social d-flex flex-row">
                        <li><a href="#" style="background-color: #3a61c9"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" style="background-color: #41a1f6"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" style="background-color: #fb4343"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#" style="background-color: #8f6247"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>

            </div>

            <div class="col-lg-6 get_in_touch_col">
                <div class="get_in_touch_contents">
                    <h1>Kirim Masukan Kepada Kami</h1>
                    <p>Isi form di bawah untuk memberikan kritik dan masukan kepada website kami</p>
                    <form action="post">
                        <div>
                            <input id="input_name" class="form_input input_name input_ph" type="text" name="name" placeholder="Nama" required="required" data-error="Name is required.">
                            <input id="input_email" class="form_input input_email input_ph" type="email" name="email" placeholder="Email" required="required" data-error="Valid email is required.">
                            <!-- <input id="input_website" class="form_input input_website input_ph" type="url" name="name" placeholder="Website" required="required" data-error="Name is required."> -->
                            <textarea id="input_message" class="input_ph input_message" name="message"  placeholder="Pesan" rows="3" required data-error="Please, write us a message."></textarea>
                        </div>
                        <div>
                            <button id="review_submit" type="submit" class="red_button message_submit_btn trans_300" value="Submit">kirim pesan</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    <br><br><br>

    <!-- Map Container -->

        <div class="row">
            <div class="col">
                <div id="google_map">
                    <div class="map_container">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter -->

    <!-- <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
                        <h4>Newsletter</h4>
                        <p>Subscribe to our newsletter and get 20% off your first purchase</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="post">
                        <div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
                            <input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
                            <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->

@endsection

@section('js')
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
    <script src="{{asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.js')}}"></script>
    <script src="{{asset('assets/js/contact_custom.js')}}"></script>
@endsection