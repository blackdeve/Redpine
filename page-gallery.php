<?php
/* Template Name: Trophy Gallery Page */
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
				<div class="tab-container">
					<nav class="nav-wrap" id="sticky-tab">
						<div class="container">
							<!-- nav tabs -->
							<ul class="nav nav-tabs text-center" role="tablist">
								<li role="presentation" class="active"><a href="#Supreme" aria-controls="Supreme" role="tab" data-toggle="tab">Supreme Bucks</a></li>
								<li role="presentation"><a href="#Medallion" aria-controls="Medallion" role="tab" data-toggle="tab">Medallion Bucks</a></li>
								<li role="presentation"><a href="#Management" aria-controls="Management" role="tab" data-toggle="tab">Management Bucks</a></li>
							</ul>
						</div>
					</nav>
					<!-- tab panes -->
					<div class="container tab-content trip-detail">
						<!-- gallery tab content -->
						<div role="tabpanel" class="tab-pane active" id="Supreme">
							<ul class="row gallery-list has-center">
								<?php
								$supremeImages = get_field('acf-trophy-gallery-supreme');
								if($supremeImages):
									shuffle($supremeImages);
									foreach($supremeImages as $supremeImage):
										?>
										<li class="col-sm-6">
											<a class="fancybox" data-fancybox-group="group1" href="<?php echo $supremeImage['sizes']['large']; ?>" title="">
												<span class="img-holder">
													<img src="<?php echo $supremeImage['sizes']['gallery-thumbnail']; ?>" height="450" width="450" alt="">
												</span>
											</a>
										</li>
										<?php 
									endforeach;
								endif;
								?>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="Medallion">
							<ul class="row gallery-list has-center">
								<?php
								$medallionImages = get_field('acf-trophy-gallery-medallion');
								if($medallionImages):
									foreach($medallionImages as $medallionImage):
										?>
										<li class="col-sm-6">
											<a class="fancybox" data-fancybox-group="group2" href="<?php echo $medallionImage['sizes']['large']; ?>" title="">
												<span class="img-holder">
													<img src="<?php echo $medallionImage['sizes']['gallery-thumbnail']; ?>" height="450" width="450" alt="">
												</span>
											</a>
										</li>
										<?php 
									endforeach;
								endif;
								?>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="Management">
							<ul class="row gallery-list has-center">
								<?php
								$managementImages = get_field('acf-trophy-gallery-management');
								if($managementImages):
									foreach($managementImages as $managementImage):
										?>
										<li class="col-sm-6">
											<a class="fancybox" data-fancybox-group="group3" href="<?php echo $managementImage['sizes']['large']; ?>" title="">
												<span class="img-holder">
													<img src="<?php echo $managementImage['sizes']['gallery-thumbnail']; ?>" height="450" width="450" alt="">
												</span>
											</a>
										</li>
										<?php 
									endforeach;
								endif;
								?>
							</ul>
						</div>
					</div>
				</div>
				
		</div>


<?php get_footer(); ?>