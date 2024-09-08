@extends('layouts.app')
@section('content')


    	<section class="slider" id="home">
			<div class="hero-slider">

				<div class="single-slider" style="background-image:url('img/Frame1.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>Expert <span>Care</span> Anytime in <span> Bali </span> </h1>
									<p>Our medical clinic in Bali offers expert care from experienced medical doctors, ensuring your health is in the best hands.</p>
									<div class="button">
										<a href="#appoitment" class="btn">Get Appointment</a>
										<a href="#home2" class="btn primary">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="single-slider" style="background-image:url('img/Frame2.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>Trusted <span>Doctors</span> and Clinics Near You in<span> Bali!</span></h1>
									<p>Find expert medical care and local clinics conveniently located near you throughout Bali for your health and wellness needs.</p>
									<div class="button">
										<a href="#appoitment" class="btn">Get Appointment</a>
										<a href="#aboutus" class="btn primary">About Us</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="single-slider" style="background-image:url('img/Frame3.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1> 24/7 Doctor <span>On-Call</span> in <span> Canggu </span> & <span> Seminyak </span></h1>
									<p>Reliable medical care anytime, with top doctors and clinics conveniently <br> located near you in Bali.</p>
									
                                    <div class="button">
										<a href="#appoitment" class="btn">Get Appointment</a>
										<a href="#contact" class="btn primary">Conatct Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- End Single Slider -->
			</div>
		</section>

        <section class="schedule" id="home2">
			<div class="container">
				<div class="schedule-inner">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12 ">
							<!-- single-schedule -->
							<div class="single-schedule first">
								<div class="inner">
									<div class="icon">
										<i class="fa fa-ambulance"></i>
									</div>
									<div class="single-content">
										<span>Urgent Care</span>
										<h4>Emergency Cases</h4>
										<p>Immediate relief for Bali belly with effective treatments and remedies for parasites and digestive issues.</p>
										<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<!-- single-schedule -->
							<div class="single-schedule middle">
								<div class="inner">
									<div class="icon">
										<i class="icofont-prescription"></i>
									</div>
									<div class="single-content">
										<span>Doctor Availability</span>
										<h4>Doctors Timetable</h4>
										<p>Check our doctors' timetable for 24/7 on-call availability. Schedule appointments or walk in anytime for expert care.</p>
										<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-12">
							<!-- single-schedule -->
							<div class="single-schedule last">
								<div class="inner">
									<div class="icon">
										<i class="icofont-ui-clock"></i>
									</div>
									<div class="single-content">
										<span>Clinic Hours</span>
										<h4>Opening Hours</h4>
                                        <p>CITO Medical is available 24 Hours a Day. You can walk in anytime or schedule a visit to receive comprehensive care.</p>
										<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

        <section class="Feautes section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Are Always Ready to Help You & Your Family</h2>
							<img src="img/section-img.png" alt="#">
							<p>Dedicated to providing support and care for you and your loved ones, anytime you need it</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-12">
						<div class="single-features">
							<div class="signle-icon">
								<i class="icofont icofont-doctor"></i>
							</div>
							<h3>Emergency Help</h3>
							<p>Rapid response from a general practitioner near you, ready to assist with Bali belly, rabies, and other urgent needs.</p>
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="single-features">
							<div class="signle-icon">
								<i class="icofont icofont-plus-circle"></i>
							</div>
							<h3>Enriched Pharmecy</h3>
							<p>Find essential medications and expert advice from a general practitioner, conveniently located at your nearby medical clinic.</p>
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="single-features last">
							<div class="signle-icon">
								<i class="icofont icofont-stethoscope"></i>
							</div>
							<h3>Medical Treatment</h3>
							<p>Personalized care from a general practitioner for Bali belly, rabies, and more, offered at your local medical clinic.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

        <div id="fun-facts" class="fun-facts section overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<div class="single-fun">
							<i class="icofont icofont-user-alt-3"></i>
							<div class="content">
								<span class="counter">11</span>
								<p>Doctors</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<div class="single-fun">
							<i class="icofont-simple-smile"></i>
							<div class="content">
								<span class="counter">59</span>
								<p>Happy Patients</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-table"></i>
							<div class="content">
								<span class="counter">+6</span>
								<p>Years of Experience</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

        <section class="why-choose section" id="aboutus">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>About Us</h2>
                            <img src="img/section-img.png" alt="About Us">
                            <p>CITO Medical provides expert health services with a focus on medical tourism, addressing common ailments such as diarrhea, nausea, and vomiting, often referred to as Bali Belly. We also treat ear, nose, and throat issues, including ear blockages. Our offerings include essential vaccinations like rabies and tetanus, and a holistic approach to patient care to ensure professional and comprehensive treatments.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="choose-left">
                            <h3>
                            <a href="index.html">
                                <img src="img/logo.png" alt="CITO Medical Logo" style="width: 250px; height: auto;">
                            </a>
                        </h3>
                            <p>CITO Medical is dedicated to providing top-notch healthcare services in Bali. We specialize in treating Bali Belly and other common ailments, offer essential vaccinations, and deliver holistic care to ensure the best outcomes for our patients.</p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="list">
                                        <li><i class="fa fa-caret-right"></i> Expert care for Bali Belly and related conditions.</li>
                                        <li><i class="fa fa-caret-right"></i> Essential vaccinations including rabies and tetanus.</li>
                                        <li><i class="fa fa-caret-right"></i> Holistic and professional treatment approach.</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="list">
                                        <li><i class="fa fa-caret-right"></i> Comprehensive care for ear, nose, and throat issues.</li>
                                        <li><i class="fa fa-caret-right"></i> Dedicated to medical tourism and patient well-being.</li>
                                        <li><i class="fa fa-caret-right"></i> Convenient location in Bali for all your health needs.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <!-- Start Choose Rights -->
                        <div class="choose-right">
                            <div class="video-image">
                                <!-- Google Maps Frame -->
                                <div class="map-frame">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.19659153143!2d115.14523217501461!3d-8.672846091374927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2471f5e14617f%3A0xbffebccf831fed12!2sCITO%20Medical!5e0!3m2!1sid!2sid!4v1725740776387!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="call-action overlay" data-stellar-background-ratio="0.5" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="content">
                            <h2>Urgent Medical Help in Bali? Contact Us on WhatsApp</h2>
                            <p>Need immediate assistance for Bali Belly, rabies treatment, or any other medical concern? Our clinic offers 24/7 care and professional guidance. Reach out now for fast, reliable support.</p>
                            <div class="button">
                                <a href="https://wa.me/6287844356268" class="btn"><i class="icofont-whatsapp"></i> Contact on WhatsApp</a>
                                <a href="mailto:support@yourmail.com" class="btn second">Email Us<i class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="services section" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>We Offer Comprehensive Health Services</h2>
                            <img src="img/section-img.png" alt="#">
                            <p>Discover our range of services tailored to meet your health needs, from Bali Belly treatments to expert consultations.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-service">
                            <i class="icofont icofont-pear"></i> <!-- Change icon -->
                            <h4><a href="service-details.html">Bali Belly Treatment</a></h4>
                            <p>Expert care for Bali Belly, including diagnosis and effective treatment solutions.</p>	
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-service">
                            <i class="icofont icofont-ui-search"></i> <!-- Change icon -->
                            <h4><a href="service-details.html">Ear, Nose, and Throat Care</a></h4>
                            <p>Comprehensive care for ear, nose, and throat issues to ensure your well-being.</p>	
                        </div>
                            </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-service">
                            <i class="icofont icofont-home"></i> <!-- Change icon -->
                            <h4><a href="service-details.html">Home Care</a></h4>
                            <p>Professional home care services to assist with recovery and daily health management.</p>	
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="icofont icofont-female"></i> <!-- Change icon -->
                            <h4><a href="service-details.html">Vaccination</a></h4>
                            <p>Essential vaccinations including rabies and tetanus to protect your health.</p>	
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-service">
                            <i class="icofont icofont-laboratory"></i> <!-- Change icon -->
                            <h4><a href="service-details.html">Laboratory Tests</a></h4>
                            <p>Accurate and timely laboratory tests to support diagnosis and treatment.</p>	
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                    <i class="icofont icofont-doctor"></i> <!-- Change icon -->
                    <h4><a href="service-details.html">Doctor Consultation</a></h4>
                    <p>Consultations with experienced doctors for personalized medical advice and care.</p>	
                        </div>
        
                    </div>
                </div>
            </div>
        </section>

        <section class="appointment" id="appoitment">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Book Your Appointment with <br>CITO Medical</h2>
                            <img src="img/section-img.png" alt="#">
                            <p>Experience exceptional care at CITO Medical. Schedule your appointment today and get personalized medical support.</p>
                        </div>
                    </div>
            </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12">
                        <form class="form" action="#">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input name="name" type="text" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input name="email" type="email" placeholder="Email (Optional)">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input name="phone" type="text" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input type="datetime-local" placeholder="Date" id="datepicker">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Write Your Message Here..... (Optional)"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-5 col-md-4 col-12">
                                    <div class="form-group">
                                        <div class="button">
                                            <button type="submit" class="btn">Book An Appointment</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-8 col-12">
                                    <p>( We will confirm your appointment via text message )</p>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="appointment-image">
                            <img src="img/contact-img.png" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="newsletter section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <!-- Start Newsletter Form -->
                        <div class="subscribe-text">
                            <h6>Stay Updated with CITO Medical</h6>
                            <p>Subscribe to our newsletter for the latest updates on medical services, health tips, and special offers at CITO Medical.</p>
                        </div>
                        <!-- End Newsletter Form -->
                    </div>
                    <div class="col-lg-6 col-12">
                        <!-- Start Newsletter Form -->
                        <div class="subscribe-form">
                            <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                                <input name="EMAIL" placeholder="Your email address" class="common-input" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Your email address'" required="" type="email">
                                <button class="btn">Subscribe</button>
                            </form>
                        </div>
                        <!-- End Newsletter Form -->
                    </div>
                </div>
            </div>
        </section>


        <section class="testimonial-section" id="testomonial">
            <div class="container">
                <h2 class="section-title">What Our Clients Say</h2>
                <div class="testimonial-wrapper">
        
              <div class="testimonial-item">
                
              
                <div class="testimonial-content">
                    <p class="testimonial-text">"Super helpful and all the staff is very informative and friendly. Thank you for the good services Cito!🙏🏻🥰"</p>
                </div>
                <div class="testimonial-info">
                    <img src="img/letisya.png" alt="John Doe" class="testimonial-img">
                    <div>
                        <h4 class="testimonial-name">Leticia Tisya</h4>
                        <span class="testimonial-role">Visitor</span>
                        <div class="rating">
                            <span>★★★★★</span>
                        </div>
                        <a href="https://maps.app.goo.gl/TSAzGQc883gFcFu68" class="btn-review" target="_blank">See Review</a>
                    </div>
                </div>
                </div>
        
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <p class="testimonial-text">"The staff are very kind and welcoming, making me feel so comfortable , thank you cito medical👍👍👍👍👍"</p>
                        </div>
                        <div class="testimonial-info">
                            <img src="img/unnamed.png" alt="Jane Smith" class="testimonial-img">
                            <div>
                                <h4 class="testimonial-name">Marvin Dirk</h4>
                                <span class="testimonial-role">Lawyer</span>
                                <div class="rating">
                                    <span>★★★★★</span>
                                </div>
                                <a href="https://maps.app.goo.gl/F1QmctVRju2CywiK6" class="btn-review" target="_blank">See Review</a>
                            </div>
                        </div>
                    </div>
        
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <p class="testimonial-text">"Very friendly and helpful staff! The doctors are knowledgeable and made me feel comfortable during my visit."</p>
                        </div>
                            <div class="testimonial-info">
                                <img src="img/kovla.png" alt="Michael Johnson" class="testimonial-img">
                            <div>
                            <h4 class="testimonial-name">Karline Belkovna</h4>
                            <span class="testimonial-role">Visitor</span>
                            <div class="rating">
                                <span>★★★★★</span>
                            </div>
                                <a href="https://maps.app.goo.gl/zJEK9UMijhFVVzpMA" class="btn-review" target="_blank">See Review</a>
                            </div>
                        </div>
                    </div>

        
               </div>
               
            </div>

        </section>



@endsection