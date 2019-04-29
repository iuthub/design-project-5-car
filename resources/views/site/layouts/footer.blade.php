<footer class="main-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<figure>
						<img style="width: 100%;" src="{{ asset('images/imageedit_3_6106254637.png') }}" alt="logo" />
						</figure>
						<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio dolores, iste facilis veniam dolor quae provident, deserunt asperiores blanditiis quisquam eveniet iure. Odit quos repellendus consequatur id temporibus, optio cumque.</p>
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
					<div class="col-md-3 sec-tab">
						<h2>Site Map</h2>
						<ul class="solutions">
                         <li><a href="{{ url('/about') }}">About</a></li>
                         <li><a href="{{ url('/news') }}">News</a></li>
                         <li><a href="{{ url('/cars') }}">Cars</a></li>
                         <li><a href="{{ url('/contact') }}">Contact</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<h2>Latest news</h2>
						<div class="footer-news">
						@foreach($footerNews as $news)
							<p>
								{{ $news->title }}
								<br>
								<span>{{ $news->created_at }}</span>
							</p>
						@endforeach
						</div>
					</div>
					<div class="col-md-3">
						<h2>Get in Touch</h2>
						<ul class="contact-info">
                         <li><i class="fa fa-map-marker" aria-hidden="true"></i><div class="address">Mirzo Ulugbek distict, Ziyolilar Str.,<br> Tashkent</div></li>
                         <li><i class="fa fa-phone" aria-hidden="true"></i><div class="address">+99871 299-99-99</div></li>
                         <li><i class="fa fa-clock-o" aria-hidden="true"></i><div class="address">Mon to Fri - 08:00 to 16:30 </div></li>
                         <li><i class="fa fa-envelope" aria-hidden="true"></i><div class="address"><a href="#">contact@factory.com  </a></div></li>
                         
						</ul>
					</div>
					</div>
					</div>
					</footer>
					
					<a class="scroll-top" href="#"><i class="fa fa-angle-up"></i> </a>
		