<?php
/* Template Name: Home Page */
get_header();
?>
			<?php if (get_field('acf-home-header-select') == 'slider') { ?>
			<!-- main banner -->
			<div id="slider-wrapper" class="banner banner-home banner-slider">
				<div id="rev_slider_70_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="web-product-light-hero66" style="margin:0px auto;background-color:#474d4b;padding:0px;margin-top:0px;margin-bottom:0px;">
					<div id="rev_slider_70_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
						<ul>
							<?php
							if( have_rows('acf-home-header-slider') ):
								$slideCount = 0;
								while( have_rows('acf-home-header-slider') ): the_row(); 
									$slideImage = get_sub_field('acf-home-header-slider-image');
									$slideCount++;
									?>
									<li class="slider-color-schema-dark" data-index="rs-<?php echo $slideCount; ?>" data-transition="fade" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="1000" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">
										<!-- main image for revolution slider -->
										<img src="<?php echo $slideImage['url']; ?>" alt="" data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-bgfit="cover" data-no-retina>
										
										<div class="tp-caption banner-heading-sub tp-resizeme" id="slide-<?php echo $slideCount; ?>-layer-2" 
											data-x="['center','center','center','center']" 
											data-hoffset="['0','0','0','0']" 
											data-y="['middle','middle','middle','middle']" 
											data-voffset="['-28','-28','-37','-28']" 
											data-fontsize="['60','60','50','24']" 
											data-lineheight="['70','70','50','30']" 
											data-width="none" 
											data-height="none" 
											data-whitespace="nowrap"
											data-start="0" 
											data-splitin="none" 
											data-splitout="none" 
											data-responsive_offset="on" 
											style="z-index: 10; white-space: nowrap; font-size: 60px; font-weight: 900; line-height: 60px; color:#682405; text-shadow: -1px 0 #fdd9ae, 0 1px #fdd9ae, 1px 0 #fdd9ae, 0 -1px #fdd9ae;">REDPINE WHITETAILS
										</div>
										
										<div class="tp-caption banner-heading-sub tp-resizeme" id="slide-<?php echo $slideCount; ?>-layer-4" 
											data-x="['center','center','center','center']" 
											data-hoffset="['0','0','0','0']" 
											data-y="['middle','middle','middle','middle']" 
											data-voffset="['40','40','44','20']" 
											data-fontsize="['44','44','36','24']" 
											data-lineheight="['20','20','30','30']" 
											data-width="none" 
											data-height="none" 
											data-whitespace="nowrap" 
											data-start="0" 
											data-splitin="none" 
											data-splitout="none" 
											data-responsive_offset="on" 
											style="z-index: 10; white-space: nowrap; font-weight: 300; line-height: 60px; color: #ffffff;">Michigan Trophy Whitetail Deer Hunts
										</div> 
										
									</li>
									<?php
								endwhile;
							endif;
							?>
						</ul>
					</div>
				</div>
			</div>
			<?php } ?>
			
			<?php if (get_field('acf-home-header-select') == 'static') { ?>
			<?php $staticImage = get_field('acf-home-header-static'); ?>
			<section class="banner banner-home parallax" data-stellar-background-ratio="0.5" style="background-image: url(<?php echo $staticImage['url']; ?>);">
					<div class="banner-text banner-caption-s1">
						<div class="center-text">
							<h1 class="wow animated fadeInLeft">REDPINE WHITETAILS</h1>
							<p class="wow animated fadeInRight"><strong class="banner-subtitle">Michigan Trophy Whitetail Deer Hunts</strong></p>
						</div>
					</div>
			</section>
			
			<?php } ?>

				<section class="content-block bg-white">
					<div class="container">
						<header class="content-heading">
							<h2 class="main-heading">THE ADVENTURE</h2>
							<span class="main-subtitle">Mastering the art of the perfect hunting adventure since the 1930's.</span>
							<div class="seperator"></div>
						</header>
						<div class="adventure-holder gallery-home-holder">
							<div class="row">
								<div class="col-md-6 img-block hidden-xs">
									<!-- gallery list -->
									<ul class="gallery-list gallery-with-icon gallery-main">
									<?php
									$galleryImages = get_field('acf-trophy-gallery-home', '6');
									if($galleryImages):
										shuffle($galleryImages);
										$galleryMax 	= 9;
										$galleryCount 	= 0;
										foreach($galleryImages as $galleryImage):
											$galleryCount++;
											if ($galleryCount > $galleryMax) {
												break;
											}
											?>
											<li>
												<a href="<?php echo $galleryImage['sizes']['large']; ?>" class="fancybox" data-fancybox-group="group">
												<span class="img-holder">
													<img src="<?php echo $galleryImage['sizes']['thumbnail']; ?>" height="165" width="170" alt="<?php echo $galleryImage['alt']; ?>">
												</span>
												<span class="hover icon-wildlife"></span>
												<span class="info"><?php echo $galleryImage['caption']; ?></span>
												</a>
											</li>
											<?php 
										endforeach;
									endif;
									?>
									</ul>
								</div>
								<div class="col-md-6 text-block">
									<div class="centered">
										<h2 class="intro-heading text-center">The Hunt</h2>
										<p class="intro">The staff at Redpine Whitetails stands ready to serve you, the customer. We want your stay with us to be enjoyable as well as successful. All hunts are fully guided, usually on a one-to-one basis. Our guides are employees of the Ranch and work here the year round. You will be guided by people who not only know the Ranch, but who are veteran hunters themselves. All meals are served in the main lodge and are of "good 'ole down home" quality. We try to think of all aspects of your stay with us rather than just your time in the field.</p>
										<a href="rates-booking/" class="btn btn-info-sub btn-md btn-shadow radius hidden-xs">Rates &amp; Booking</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				
				<?php if (get_field('acf-home-booking-teaser-switch') == true) { ?>
				<?php $bookingImage = get_field('acf-home-booking-teaser-background'); ?> 
				<div class="testimonial-holder parallax hidden-xs" data-stellar-background-ratio="0.25" style="background-image: url(<?php echo $bookingImage['url']; ?>);">
					<div class="container">
						<p class="special-text"><?php the_field('acf-home-booking-teaser-text'); ?><br /><strong>Call <a href="tel:(989)-732-0728">(989)-732-0728</a></strong></p>
					</div>
				</div>
				<?php } ?>
				
				<!-- featured adventure content -->
				<div class="featured-content adventure-holder">
					<div class="container-fluid">
						<div class="row same-height">
							<div class="col-md-6 image height wow animated fadeInLeft">
								<div class="bg-stretch">
									<img src="<?php bloginfo('template_directory'); ?>/img/the-ranch.jpg" height="627" width="960" alt="The Ranch">
								</div>
							</div>
							<div class="col-md-6 text-block height">
								<div class="centered">
									<h2 class="intro-heading">The Ranch</h2>
									<p class="intro text-left">The topography of the Ranch will yield to any hunter the challenges of hunting whitetail deer. The terrain varies from dense pine forest to more open forests and meadows, cedar swamp to hardwood ridges. The bucks travel the entire ranch and each area dictates the method of hunting employed. Opportunities at bucks can be as close as 20 yards in dense cover to as far away as 300 yards in the more open terrain.</p>
								</div>
							</div>
						</div>
						<div class="row same-height">
							<div class="col-md-6 image height wow animated fadeInRight">
								<div class="bg-stretch">
										<img src="<?php bloginfo('template_directory'); ?>/img/the-lodge.jpg" height="627" width="960" alt="The Lodge">
								</div>
							</div>
							<div class="col-md-6 text-block height">
								<div class="centered">
									<h2 class="intro-heading">The Lodge</h2>
									<p class="intro text-left">The hunter's lodge features an antique pot-bellied stove for atmosphere and cozy heat, comfortable bedrooms, full bath, and TV-VCR for relaxation after a full day of hunting. The main lodge, where meals are served, is reminiscent of the 1930's.</p>
								</div>
							</div>
						</div>
						<div class="row same-height">
							<div class="col-md-6 image height wow animated fadeInUp">
								<div class="bg-stretch">
									<img src="<?php bloginfo('template_directory'); ?>/img/deer-management.jpg" height="627" width="960" alt="Deer Management">
								</div>
							</div>
							<div class="col-md-6 text-block height">
								<div class="centered">
									<h2 class="intro-heading">Deer Management</h2>
									<p class="intro text-left">Our management plan for the deer, simply stated, has been to produce the largest bodies and antler growth we can given the age class of the deer. Obviously, 2 1/2 year old bucks won't, as a rule, have the body or antler mass of a 4 1/2 year old buck. However, age alone is not the determining factor. The genetic profile of the animals has a very strong influence on their offspring. At Redpine Whitetails we have assembled breeding stock with outstanding genetic backgrounds. The result of this effort has been the production of bucks we feel any serious hunter would call "trophies". In addition to genetics, protein rich crops are planted throughout the Ranch as well as a supplemental diet of high protein grain. Each year Ranch staff personnel take an accurate head-count of the type of animals inhabiting the grounds at the time. This enables us to maintain the buck to doe ratio we desire as well as balance the overall herd size. It is our belief, supported by research, that over-population can ultimately have an adverse impact on trophy quality.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>

<?php get_footer(); ?>