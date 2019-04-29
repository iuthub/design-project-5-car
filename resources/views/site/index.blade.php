<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Auto 5ell</title>
      <meta name="viewport" content="width=device-width; initial-scale=1.0">
      <link rel="stylesheet" href="{{ asset('site/font-awesome/css/font-awesome.min.css') }}">
      <!-- Owl carousel-->
      <link rel="stylesheet" href="{{ asset('site/css/owl.carousel.css') }}">
      <link rel="stylesheet" href="{{ asset('site/css/owl.theme.default.css') }}">
      <link rel="stylesheet" href="{{ asset('site/css/style_hero.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('site/css/hover.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('site/css/animate.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('site/css/bootstrap.min.css') }}"/>
      <link rel="stylesheet" type="text/css" href="{{ asset('site/css/style.css') }}"/>
      <link rel="stylesheet" type="text/css" href="{{ asset('site/css/responsive.css') }}"/>
      <!-- Replace favicon.ico & apple-touch-icon.png' ) }} in the root of your domain and delete these references -->
      <link rel="shortcut icon" href="{{ asset('images/imageedit_3_6106254637.png') }}">
      <link rel="apple-touch-icon" href="{{ asset('images/imageedit_3_6106254637.png') }}">
   </head>
   <body>
      <header class="main-header-four">
         <div class="top-line-four">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 col-sm-6">
                     <div class="welcome">
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                     <div class="social-icons">
                        <ul>
                           <li>
                              <a href="" ><i class="fa fa-facebook" aria-hidden="true"></i></a>
                           </li>
                           <li>
                              <a href="" ><i class="fa fa-vimeo" aria-hidden="true"></i></a>
                           </li>
                           <li>
                              <a href="" ><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                           </li>
                           <li>
                              <a href="" ><i class="fa fa-twitter" aria-hidden="true"></i></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="sec-line">
            <div class="container">
               <div class="row">
                  <div class="sec-line-wraper">
                     <div class="col-md-3">
                        <div class="logo">
                           <a href="{{ url('/') }}"><img style="width: 100%;" src="{{ asset('images/imageedit_3_6106254637.png') }}" alt="logo" /></a>
                        </div>
                     </div>
                     <div class="col-md-9">
                        <div class="general-info">
                           <ul>
                              <li>
                                 <div class="icon">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                 </div>
                                 <div class="text">
                                    <p>
                                       Phone Number
                                       <br>
                                       <span>+99871 289-99-99</span>
                                    </p>
                                 </div>
                              </li>
                              <li>
                                 <div class="icon">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                 </div>
                                 <div class="text">
                                    <p>
                                       Email Address
                                       <br>
                                       <span>info@factory.com</span>
                                    </p>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="border">
                     <div class="container">
                        <div class="line"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <section class="main-menu-four main-menu-two">
         <div class="container">
            <div class="row">
               <div class="main-menu-four-wraper">
                  <div class="col-md-9">
                     <nav id="main-navigation-wrapper" class="navbar navbar-default">
                        <div class="navbar-header">
                           <button type="button" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false" class="navbar-toggle collapsed">
                           <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                           </button>
                        </div>
                        <div id="main-navigation" class="collapse navbar-collapse">
                           <ul class="nav navbar-nav navbar-left">
                              <li><a href="{{ url('/') }}">Home</a>
                              </li>
                              <li><a href="{{ url('/about') }}">About</a></li>
                              <li>
                                 <a href="{{ url('/news') }}">News</a>
                              </li>
                              <li>
                                 <a href="{{ url('/cars') }}">Cars</a>
                              </li>
                              <li><a href="{{ url('/contact') }}">Contact</a></li>
                              @if(Auth::check())
                              <form action="{{ route('logout') }}" id="logoutForm" method="POST" style="display: none;">
                                 {{ csrf_field() }}
                              </form>
                              <li id="logout"><a href="#" onclick="document.getElementById('logoutForm').submit();">Logout</a></li>
                              @else
                              <li><a href="{{ route('login') }}">Login</a></li>
                              @endif
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div id="minimal-bootstrap-carousel" data-ride="carousel" class="carousel slide carousel-fade shop-slider">
         <!-- Wrapper for slides-->
         <div role="listbox" class="carousel-inner">
            <div style="background-image: url(https://s.auto.drom.ru/i24211/sales/dealer/info_images/5980-498289.jpg);background-position: center right;" class="item active slide-1">
               <div class="carousel-caption">
                  <div class="thm-container">
                     <div class="box valign-bottom">
                        <div class="content text-center">
                           <h2 data-animation="animated fadeInUp"><span>Buy the car of your dream</span><br>in 5 minutes</h2>
                           <p data-animation="animated fadeInDown">5 steps to deliver the car at your home door.</p>
                           <div class="buttons">
                              <a data-animation="animated fadeInLeft" href="{{ url('/about') }}" class="thm-button hvr-bounce-to-right">Learn more </a>
                              <a data-animation="animated fadeInRight" href="{{ url('/cars') }}" class="thm-button inverse hvr-bounce-to-right2">View cars</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div style="background-image: url(http://www.planetautobodyparts.com/wp-content/uploads/2018/06/8.jpg);background-position: center right;" class="item slide-2">
               <div class="carousel-caption">
                  <div class="thm-container">
                     <div class="box valign-bottom">
                        <div class="content text-center">
                           <h2 data-animation="animated fadeInUp"><span>Car rental</span><br>made easy</h2>
                           <p data-animation="animated fadeInDown">Rent your dream car for any period of time you want.</p>
                           <div class="buttons">
                              <a data-animation="animated fadeInLeft" href="#" class="thm-button hvr-bounce-to-right">Learn more</a>
                              <a data-animation="animated fadeInRight" href="#" class="thm-button inverse hvr-bounce-to-right2">View services</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Controls--><a href="#minimal-bootstrap-carousel" role="button" data-slide="prev" class="left carousel-control"><i class="fa fa-angle-left"></i><span class="sr-only">Previous</span></a><a href="#minimal-bootstrap-carousel" role="button" data-slide="next" class="right carousel-control"><i class="fa fa-angle-right"></i><span class="sr-only">Next</span></a>
      </div>
      <section class="why-choose-us-third">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="box">
                     <div class="icon-box"><i class="fa fa-globe" aria-hidden="true"></i></div>
                     <h4>Anywhere in Uzbekistan</h4>
                     <p>Branches in every city to help you with your needs.</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="box">
                     <div class="icon-box"><i class="fa fa-truck" aria-hidden="true"></i></div>
                     <h4>Fast Delivery</h4>
                     <p>To anywhere you wish in Uzbekistan within <br>2-3 days.</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="box">
                     <div class="icon-box"><i class="fa fa-thumbs-up" aria-hidden="true"></i></div>
                     <h4>Frendly Support</h4>
                     <p>Our friendly sales managers are at your service 24/7.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="offer-wraper">
         <div class="container">
            <div class="row">
               <div class="title">
                  <h2>Hot cars</h2>
               </div>
            </div>
            <div class="row">
               @foreach($hotSales as $hotSale)
               <?php 
                  $image = \App\File::where('value_id',$hotSale->id)->first();
                  ?>
               <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="item">
                     <figure class="img-box">
                        <a href="#"><img style="width: 100%;" src="{{ asset('images/cars/'.$image->path) }}" alt="image" /> </a>
                        <figcaption class="default-overlay-outer">
                           <div class="inner">
                              <div class="content-layer"><a class="this-link btn btn-primary" href="{{ route('car-single',['id' => $hotSale->id]) }}">See more</a> </div>
                           </div>
                        </figcaption>
                     </figure>
                     <h3>{{ $hotSale->name }}</h3>
                     <p>{{ strlen($hotSale->description) > 100 ? substr($hotSale->description, 0, 99).'...' : $hotSale->description }}</p>
                     <h6><a href="{{ route('car-single',['id' => $hotSale->id]) }}">Read More</a></h6>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </section>
      <section class="about-us-four">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="worker">
                     <img style="width: 100%; margin-bottom: 20px;" src="{{ asset('images/wp2671954.jpg') }}" alt="img"/>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="title">
                     <h2>We are leaders in car industry</h2>
                  </div>
                  <div class="text-box">
                     <p>Since 2014 we have been delivering these services</p>
                     <ul>
                        <li><i class="fa fa-caret-right" aria-hidden="true"></i>Selling cars</li>
                        <li><i class="fa fa-caret-right" aria-hidden="true"></i>Car rental</li>
                     </ul>
                     <a class="hvr-bounce-to-right btn" href="#"> SEE MORE</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="numbers">
         <div class="container">
            <div class="row statistic">
               <div class="col-md-4">
                  <h2>We are proud
                     <br>
                     <span>with our history</span>
                  </h2>
               </div>
               <div class="col-md-8">
                  <div class="box">
                     <div class="number-box">
                        <span class="counter">130</span>
                     </div>
                     <div class="text-box">
                        <p>STAFFS ACROSS UZBEKISTAN</p>
                     </div>
                  </div>
                  <div class="box">
                     <div class="number-box">
                        <span class="counter">982</span>
                     </div>
                     <div class="text-box">
                        <p>CARS SOLD</p>
                     </div>
                  </div>
                  <div class="box">
                     <div class="number-box">
                        <span class="counter">980</span>
                     </div>
                     <div class="text-box">
                        <p>SATISFIED CUSTUMERS</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="news">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="our-news">
                     <div class="title">
                        <h2>Latest news</h2>
                     </div>
                     @foreach($footerNews as $news)
                     <?php 
                        $image = \App\File::where('type','news')->where('value_id',$news->id)->first();
                     ?>
                     <div class="news1">
                        <figure>
                           <img src="{{ asset('images/small/news/'.$image->path) }}" alt="awsome photo"/>
                        </figure>
                        <div class="text-box">
                           <div class="date">
                              <p>
                                 {{ $news->created_at->day }}
                                 <br>
                                 {{ $news->created_at->format('F') }}
                              </p>
                           </div>
                           <h3>{{ $news->title }}
                              <br>
                           </h3>
                           <p class="opis">
                              {{ strlen($news->body) > 60 ? substr($news->body,0,59).'...' : $news->body}}
                           </p>
                           <a href="{{ route('news-single',['id' => $news->id]) }}">Read More</a>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="questions">
                     <div class="title">
                        <h2>Frequently Ask questions</h2>
                     </div>
                     <div id="accordion" role="tablist">
                        <div class="toggle">
                           <div class="toggle-heading" role="tab">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> <i class="fa fa-plus"></i>What do i have to buy a car?<i class="fa fa-minus"></i></a>
                           </div>
                           <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                              <div class="toggle-body">
                                 <p>
                                    5 easy steps:
                                 <ol>
                                    <li>Register</li>
                                    <li>Choose your dream car</li>
                                    <li>Make the payment</li>
                                    <li>Choose the method of delivery</li>
                                    <li>Wait</li>
                                 </ol>
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="toggle">
                           <div class="toggle-heading" role="tab">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseOne"><i class="fa fa-plus"></i> Where do I start?<i class="fa fa-minus"></i></a>
                           </div>
                           <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                              <div class="toggle-body">
                                 <p>
                                    Click <a href="{{ url('login') }}">here</a> to register
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="toggle">
                           <div class="toggle-heading" role="tab">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseOne"> <i class="fa fa-plus"></i>What are the methods of delivery?<i class="fa fa-minus"></i></a>
                           </div>
                           <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                              <div class="toggle-body">
                                 <p>
                                    There are 2 ways:
                                 <ul>
                                    <li>Take from our office</li>
                                    <li>We deliver to anyhwere you wish in Uzbekistan</li>
                                 </ul>
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="contact">
         <div class="container">
            <div class="row">
               <div class="contact-wraper">
                  <div class="col-md-6 nopd">
                     <div class="contact-info">
                        <h2>Contact</h2>
                        <p>
                           Please leave your feedback about our services and our sales manager will contact you within 2 days.
                        </p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     @include('partials.error')
                     <form id="request-call-form" action="{{ url('leave-contact') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="col-md-6">
                           <input id="email" type="text" placeholder="Email" name="email">
                        </div>
                        <div class="col-md-6">
                           <input id="phone" type="text" placeholder="Subject" name="topic">
                        </div>
                        <div class="col-md-12">
                           <textarea class="form-control" cols="40" rows="5" placeholder="Message" id="inputComments" name="body"></textarea>
                        </div>
                        <a class="btn hvr-bounce-to-right" onclick="document.getElementById('request-call-form').submit();" href="#">Send Message</a>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      @include('site.layouts.footer')
      <script src="{{ asset('site/plugins/jquery.min.js') }}"></script>
      <script src="{{ asset('site/plugins/owl.carousel.min.js') }}"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
      <script src="{{ asset('site/plugins/bootstrap.min.js') }}"></script>
      <script src="{{ asset('site/OwlCarousel2-2.2.1/dist/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('site/plugins/waypoints.min.js') }}"></script>
      <script src="{{ asset('site/plugins/jquery.counterup.min.js') }}"></script>
      <script src="{{ asset('site/plugins/theme.js') }}"></script>
   </body>
</html>