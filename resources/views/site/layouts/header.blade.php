<header class="main-header">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
                  <div class="logo">
                     <a href="index.html"><img src="img/logo.jpg" alt="logo" /></a>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="general-info">
                     <ul>
                        <li>
                           <div class="icon">
                              <i class="fa fa-map-marker" aria-hidden="true"></i>											
                           </div>
                           <div class="text">
                              <p>
                                 <span class="add">ADDRESS</span>
                                 <br>
                                 <span>Mirzo Ulugbek district,<br>
                                 Tashkent</span>
                              </p>
                           </div>
                        </li>
                        <li>
                           <div class="icon">
                              <i class="fa fa-phone" aria-hidden="true"></i>
                           </div>
                           <div class="text">
                              <p>
                                 <span class="add">CONTACT</span>
                                 <br>
                                 <span>+99871 299-99-99,<br>
                                 +99893 514-80-85</span>
                              </p>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="social-icons">
                     <ul>
                        <li>
                           <a href="" ><i class="fa fa-facebook" aria-hidden="true"></i></a>
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
      </header>
      <section class="main-menu-one finance-navbar">
         <div class="container">
            <div class="row">
               <div class="col-md-9">
                  <nav id="main-navigation-wrapper" class="navbar navbar-default">
                     <div class="navbar-header">
                        <button type="button" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false" class="navbar-toggle collapsed">
                        <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                        </button>
                     </div>
                     <div id="main-navigation" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-left">
                           <li>
                              <a href="{{ url('/') }}">Home</a>
                           </li>
                           <li>
                              <a href="{{ url('/about') }}">About</a>
                           </li>
                           <li>
                              <a href="{{ url('/news') }}">News</a>
                           </li>
                           <li>
                              <a href="{{ url('/cars') }}">Cars</a>
                           </li>
                           <li><a href="{{ url('/contact') }}">Contact</a></li>
                           @if(Auth::check())
                           <form action="{{ route('logout') }}" id="logoutForm" method="POST" style="display:none;">
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
      </section>