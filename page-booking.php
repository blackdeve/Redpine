<?php
/* Template Name: Booking Page */
get_header();
?>
	<?php $headerImage = get_field('acf-home-booking-teaser-background', '6'); ?> 
	<section class="banner banner-inner parallax" data-stellar-background-ratio="0.25" style="background-image: url(<?php echo $headerImage['url']; ?>);">
	<div class="banner-text">
		<div class="center-text">
			<div class="container">
				<h1 class="text-center"><?php echo the_title(); ?></h1>
			</div>
		</div>
	</div>
	</section>
	<div class="inner-main common-spacing container">
		<div class="row">
			<div class="col-md-6">
				<form class="booking-form" action="#">
				<div class="form-holder">
					<h2 class="small-size">Booking Request Form</h2>
					<div class="wrap">
						<div class="row">
							<div class="col-md-6">
								<div class="hold">
									<label for="name">First Name</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="hold">
									<label for="lname">Last Name</label>
									<input type="text" class="form-control">
								</div>
							</div>
						</div>
						<div class="hold">
							<label for="cname">Email Address</label>
							<input type="text" id="cname" class="form-control">
						</div>
						<div class="hold">
							<label for="address">Phone</label>
							<input type="text" id="address" class="form-control">
						</div>
						<ul class="option">
							<li>
								<header class="title">
									<label class="custom-radio">
										<input type="radio" name="pay">
										<span class="check-input"></span>
										<span class="check-label">Michigan Resident</span>
									</label>
								</header>
								<div class="info-hold">
									<p>Please select if you are a michigan resident.</p>
								</div>
							</li>
							<li>
								<header class="title">
									<label class="custom-radio">
										<input type="radio" name="pay">
										<span class="check-input"></span>
										<span class="check-label">Non-Resident</span>
									</label>
								</header>
								<div class="info-hold">
									<p>Please select if you are not a michigan resident.</p>
								</div>
							</li>
						</ul>
						<h2 class="small-size">Additional Notes</h2>
						<div class="wrap">
							<div class="hold">
								<textarea id="txt" class="form-control" placeholder="Please enter any additional information here."></textarea>
							</div>
						</div>
						<button type="submit" class="btn btn-default">Submit Request</button>
						<p>&nbsp;</p>
						<div class="comments reviews-body">
							<div class="holder">
								<ul class="content-list">
									<li><i class="icon-plus"></i> All hunts are 3-Day hunts with a hunt fee of $2,300.</li>
									<li><i class="icon-plus"></i> Hunt fee required upon booking as deposit and is <u>nonrefundable</u>.</li>
									<li><i class="icon-plus"></i> Daily Accommodation Fee: $150/day/non-hunters.</li>
									<li><i class="icon-plus"></i> All hunts are based on a "No Kill/No Pay" policy.</li>
									<li><i class="icon-plus"></i> Wounded game will be considered a kill and the appropriate trophy fee will be assessed.</li>
									<li><i class="icon-plus"></i> Our season is October to mid-November.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				</form>
			</div>
			<div class="col-md-6">
				<div class="comments reviews-body">
					<div class="text-center">
						<h2 class="small-size">Current Rates</h2>
					</div>
					<div class="comment-holder">
						<div class="comment-slot">
							<div class="row">
								<div class="col-md-4 img-block hidden-xs">
									<?php
									$supremeImages = get_field('acf-trophy-gallery-supreme', '14');
									if($supremeImages):
										shuffle($supremeImages);
										$supremeMax 	= 1;
										$supremeCount 	= 0;
										foreach($supremeImages as $supremeImage):
											$supremeCount++;
											if ($supremeCount > $supremeMax) {
												break;
											}
											?>
											<a href="<?php echo $supremeImage['sizes']['large']; ?>" class="fancybox"><img src="<?php echo $supremeImage['sizes']['medium']; ?>" alt="Supreme Bucks"></a>
											<?php 
										endforeach;
									endif;
									?>
								</div>
								<div class="col-md-8">
									<div class="text">
										<header class="comment-head">
											<strong class="name">
												<a href="#">Supreme Bucks</a>
											</strong>
											<div class="meta"><strong><?php the_field('acf-rates-supreme-headline'); ?></strong></div>
										</header>
										<div class="des">
											<?php the_field('acf-rates-supreme-information'); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="comment-slot">
							<div class="row">
								<div class="col-md-4 img-block hidden-xs">
									<?php
									$medallionImages = get_field('acf-trophy-gallery-medallion', '14');
									if($medallionImages):
										shuffle($medallionImages);
										$medallionMax 	= 1;
										$medallionCount 	= 0;
										foreach($medallionImages as $medallionImage):
											$medallionCount++;
											if ($medallionCount > $medallionMax) {
												break;
											}
											?>
											<a href="<?php echo $medallionImage['sizes']['large']; ?>" class="fancybox"><img src="<?php echo $medallionImage['sizes']['medium']; ?>" alt="Medallion Bucks"></a>
											<?php 
										endforeach;
									endif;
									?>
								</div>
								<div class="col-md-8">
									<div class="text">
										<header class="comment-head">
											<strong class="name">
												<a href="#">Medallion Bucks</a>
											</strong>
											<div class="meta"><?php the_field('acf-rates-medallion-headline'); ?></div>
										</header>
										<div class="des">
											<?php the_field('acf-rates-medallion-information'); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="comment-slot">
							<div class="row">
								<div class="col-md-4 img-block hidden-xs">
									<?php
									$managementImages = get_field('acf-trophy-gallery-management', '14');
									if($managementImages):
										shuffle($managementImages);
										$managementMax 	= 1;
										$managementCount 	= 0;
										foreach($managementImages as $managementImage):
											$managementCount++;
											if ($managementCount > $managementMax) {
												break;
											}
											?>
											<a href="<?php echo $managementImage['sizes']['large']; ?>" class="fancybox"><img src="<?php echo $managementImage['sizes']['medium']; ?>" alt="Management Bucks"></a>
											<?php 
										endforeach;
									endif;
									?>
								</div>
								<div class="col-md-8">
									<div class="text">
										<header class="comment-head">
											<strong class="name">
												<a href="#">Management Bucks</a>
											</strong>
											<div class="meta"><?php the_field('acf-rates-management-headline'); ?></div>
										</header>
										<div class="des">
											<?php the_field('acf-rates-management-information'); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>
<?php get_footer(); ?>