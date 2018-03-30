<?php
/* Template Name: Contact Page */
get_header();
?>
<?php $headerImage = get_field('acf-home-booking-teaser-background', '6'); ?> 
	<section class="banner banner-inner parallax" data-stellar-background-ratio="0.25" style="background-image: url(<?php echo $headerImage['url']; ?>);">
	<div class="banner-text">
		<div class="center-text">
			<div class="container">
				<h1 class="text-center">Get In Touch</h1>
			</div>
		</div>
	</div>
	</section>
				<div class="content-block bg-white">
					<div class="container">
						<header class="content-heading hidden-xs">
							<strong class="main-subtitle">Contact us by phone or through our web form below.</strong>
							<div class="seperator"></div>
						</header>
						<p>&nbsp;</p>
						<div class="contact-info row">
							<div class="col-sm-6">
								<span class="tel has-border">
									<span class="icon-tel-big"></span>
									<a href="tel:(989) 732-0728">(989) 732-0728</a>
								</span>
							</div>
							<div class="col-sm-6 hidden-xs">
								<span class="tel has-border bg-blue">
									<a href="https://www.google.com/maps/dir//45.0880664,-84.6356607/@45.088066,-84.635661,1600m/data=!3m1!1e3?hl=en-US" target="_blank">1894 Kosiara Road, Gaylord MI</a>
								</span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 wow fadeInLeft">
								<!-- main contact form -->
								<form class="contact-form has-border" action="#">
									<fieldset>
										<div class="form-group">
											<div class="col-sm-4">
												<strong class="form-title"><label for="fname">First name</label></strong>
											</div>
											<div class="col-sm-8">
												<div class="input-wrap">
													<input type="text" class="form-control" id="fname" name="fname">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-4">
												<strong class="form-title"><label for="lname">Last name</label></strong>
											</div>
											<div class="col-sm-8">
												<div class="input-wrap">
													<input type="text" class="form-control" id="lname" name="lname">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-4">
												<strong class="form-title"><label for="con_email">Email</label></strong>
											</div>
											<div class="col-sm-8">
												<div class="input-wrap">
													<input type="email" class="form-control" id="con_email" name="con_email">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-4">
												<strong class="form-title"><label for="con_phone">Phone number</label></strong>
											</div>
											<div class="col-sm-8">
												<div class="input-wrap">
													<input type="text" class="form-control" id="con_phone" name="con_phone">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-4">
												<strong class="form-title"><label for="con_message">Message</label></strong>
											</div>
											<div class="col-sm-8">
												<div class="input-wrap">
													<textarea cols="30" rows="10" class="form-control" id="con_message" name="con_message"></textarea>
												</div>
											</div>
										</div>
										<div class="form-group btn-holder">
											<div class="col-sm-4">&nbsp;</div>
											<div class="col-sm-8">
												<div class="input-wrap">
													<input type="submit" id="btn_sent" value="Send enquiry" class="btn btn-white">
														<p id="error_message"> </p>
												</div>
											</div>
										</div>
									</fieldset>
								</form>
							</div>
							<div class="col-md-6 map-col-main wow fadeInRight">
								<!-- google map  -->
								<div class="map-holder">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3302.126774433426!2d-84.55036898430579!3d45.129157463757394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4d353f79b7c7fc0b%3A0x12518b4183e042da!2s6224+Old+Vanderbilt+Rd%2C+Vanderbilt%2C+MI+49795%2C+USA!5e1!3m2!1sen!2spa!4v1500399399553" width="600" height="670" allowfullscreen></iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>


<?php get_footer(); ?>