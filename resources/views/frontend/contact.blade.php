@extends('layout.master')
@section('title')
Contact || Rssosa
@endsection
@section('content')

<!--== Page Title Area Start ==-->
<section id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2">Contact Us</h1>

                </div>
            </div>
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Contact Page Content Start ==-->
<section id="page-content-wrap">
    <div class="contact-page-wrap section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-content-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <!-- Map Area Start -->
                                <div class="map-area-wrap">
                                    <!--  cbx-gmap start
                                    <div id="cbx-gmap">
                                        <div id="map_canvas" class="cbx-map map_canvas" data-lat="44.5403" data-lng="-78.5463" data-title="" data-content="<strong>6H Dilara Tower</strong><br /> <br />77 Bir Uttam C.R. Dutta Road <br /> Dhaka 1205 "></div>
                                    </div>
                                     cbx-gmap end -->
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.235498002701!2d3.6545099999999997!3d6.8623559!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bdbd3827ef71d%3A0xe7cf68e0c2a7564!2sRemo%20Secondary%20School%20Sagamu!5e0!3m2!1sen!2sng!4v1671062883654!5m2!1sen!2sng" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <!-- Map Area End -->
                            </div>

                            <div class="col-lg-6 m-auto">
                                <div class="contact-form-wrap">
                                    <h3>send message</h3>
                                    <form action="#" id="cbx-contact-form">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="cbxname">Name</label>
                                                    <input type="text" name="cbxname" required id="cbxname" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="cbxemail">Email</label>
                                                    <input type="email" name="cbxemail" required id="cbxemail" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="cbxsubject">Subjet</label>
                                            <input type="text" name="cbxsubject" id="cbxsubject" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="cbxmessage">Message</label>
                                            <textarea name="cbxmessage" id="cbxmessage" rows="10" cols="80" class="form-control"></textarea>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cbxsendme" name="cbxsendme" value="on">
                                            <label class="custom-control-label" for="cbxsendme">Send Me CC</label>
                                        </div>

                                        <button class="btn btn-reg">Send</button>
                                        <div id="cbx-formalert"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Contact Page Content End ==-->

@endsection