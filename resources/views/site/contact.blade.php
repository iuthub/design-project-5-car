@extends('site/layouts/master')

@section('title')
Contact
@stop

@section('content')
<section class="contact_us-second">
   <div class="container">
      @include('partials.error')
      <div class="row">
         <div class="col-md-8 col-sm-12 col-xs-12">
            <header>
               <h2>Contact us today</h2>
               <p>
                  Please leave your feedback about our services and our sales manager will contact you within 2 days.
               </p>
            </header>
            <form action="{{ url('/leave-contact') }}" method="POST" class="contact-form">
               {{ csrf_field() }}
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-grp">
                        <label>Your Email</label>
                        <input id="email" placeholder="E-mail" type="text" name="email">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-grp">
                        <label>Subject</label>
                        <input id="phone" type="text" placeholder="Phone" name="topic">
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-grp">
                        <label>Message</label>
                        <textarea class="form-control" cols="40" rows="5" placeholder="Message" id="inputComments" name="body"></textarea>
                     </div>
                  </div>
                  <button class="btn btn-default hvr-bounce-to-right" type="submit">
                  Send Message
                  </button>
               </div>
            </form>
         </div>
         <div class="col-md-4 col-sm-8 col-xs-12 keep-in">
            <header>
               <h2>Keep In Touch!</h2>
            </header>
            <ul class="social-icons">
               <li>
                  <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
               </li>
               <li>
                  <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
               </li>
               <li>
                  <a href=""><i class="fa fa-dribbble" aria-hidden="true"></i></a>
               </li>
               <li>
                  <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
               </li>
               <li>
                  <a href=""><i class="fa fa-vimeo" aria-hidden="true"></i></a>
               </li>
            </ul>
            <div class="contact-box">
               <h2>Locations</h2>
               <div class="address-box">
                  <div class="icon-box">
                     <i class="fa fa-map-marker" aria-hidden="true"></i>
                  </div>
                  <p class="address-text">
                     Mirzo Ulugbek, Ziyolilar Street, Tashkent
                  </p>
               </div>
               <div class="address-box">
                  <div class="icon-box">
                     <i class="fa fa-phone" aria-hidden="true"></i>
                  </div>
                  <p class="address-text">
                     +99871 299-99-99
                  </p>
               </div>
               <div class="address-box">
                  <div class="icon-box">
                     <i class="fa fa-envelope" aria-hidden="true"></i>
                  </div>
                  <p class="address-text">
                     info@structure.com
                  </p>
               </div>
               <div class="address-box">
                  <div class="icon-box">
                     <i class="fa fa-clock-o" aria-hidden="true"></i>
                  </div>
                  <p class="address-text">
                     Mon - Sat: 09.00am to 18.00pm
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<div class="mapouter">
   <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=uzbekistan%20tashkent&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
   <style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style>
</div>
@stop

@section('js')	
<script src="{{ asset('site/plugins/jquery.min.js') }}"></script>
<script src="{{ asset('site/plugins/owl.carousel.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gmaps.js') }}/0.4.24/gmaps.min.js') }}"></script>
<script src="{{ asset('site/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('site/plugins/map-helper.js') }}"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-AVuzYG1-KEYwHw0gLOmlFX2I2YBzZGw&callback=initMap"></script>
<script src="{{ asset('site/plugins/jquery-validation/dist/jquery.validate.min.js') }}"></script>
<script src="{{ asset('site/OwlCarousel2-2.2.1/dist/owl.carousel.min.js') }}"></script>
<script src="{{ asset('site/plugins/theme.js') }}"></script>
@stop