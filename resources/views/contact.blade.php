<!-- Start Contact Area -->
		<section id="contact" class="section-full gray-bg">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="product-area-title text-center">
							<p class="text-uppercase">Contact Us</p>
							<h2 class="h1">We'd like to <br> hear from you!</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 mt-30">
						<p>We are passionate about creating a one-of-a-kind experience for your wedding or event occassions. Reach out to us through any of our below listed contacts so we can get to know more about you and your vision.</p>
						<div class="row">
							<div class="col-sm-6">
								<div class="address mt-20">
									<h6 class="text-uppercase mb-15">Physical Address</h6>
									<p>Oworonshoki<br>, Lagos</p>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="address mt-20">
									<h6 class="text-uppercase mb-15">Contact</h6>
									<a href="tel:2348183283744">(234) 818 328 3744</a> <br>
									<a href="mailto:info@baradinnovations.com.ng">info@baradinnovations.com.ng</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 mt-30">
						<form id="myForm" action="{{url('contact')}}" method="post" class="contact-form">
							{!! csrf_field() !!}
							<div class="single-input color-2 mb-10">
								<input type="text" name="fname" placeholder="Full Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'" required>
							</div>
							<div class="single-input color-2 mb-10">
								<input type="email" name="email" placeholder="Email Address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" required>
							</div>
							<div class="single-input color-2 mb-10">
								<input type="text" name="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'" required>
							</div>

							<div class="single-input color-2 mb-10">
								<textarea name="message" placeholder="Type your message here..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Type your message here...'" required></textarea>
							</div>
							<div class="d-flex justify-content-end"><button class="mt-10 primary-btn d-inline-flex text-uppercase align-items-center" type="submit">Send Message<span class="lnr lnr-arrow-right"></span></button></div>
							<div class="alert">
							  @if(Session::has('contact-status') && Session::get('contact-status') == "sent")
								  
							  @endif
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact Area -->