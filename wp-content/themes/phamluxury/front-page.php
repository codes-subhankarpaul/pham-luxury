<?php
/**
 * Front Page.
 *
 * This is the template that displays the landing page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage phamluxury
 * @since phamluxury 1.0
 */

	get_header();
?>

<!-- Banner Section Starts Here -->
<?php $banner_section = get_field('banner_section'); ?>
<section class="banner">
	<div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
		<div class="carousel-inner">
			<?php for($i=1; $i<=4; $i++) { ?>
				<?php $banner = $banner_section['section_'.$i]; ?>
				<div class="carousel-item <?php if($i==1) { echo 'active'; } ?> ">
					<img src="<?php echo $banner['banner_image']; ?>" class="d-block w-100" alt="banner-new">
					<div class="carousel-caption d-none d-md-block">
						<div class="container-fluid">
							<div class="row">
								<div class="col-12">
									<div class="banner-content">
										<h1><?php echo $banner['banner_title']; ?></h1>
										<?php echo $banner['banner_content']; ?>
										<div class="banner-btn">
											<a class="custom-btn" href="<?php echo $banner['button_1_link']; ?>"><?php echo $banner['button_1_text']; ?></a>
											<a class="custom-btn" href="<?php echo $banner['button_2_link']; ?>"><?php echo $banner['button_2_text']; ?></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching"
			data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching"
			data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
</section>
<!-- Banner Section Ends Here -->

<!-- Booking Form Section Starts Here -->
<?php $booking_form_section = get_field('booking_form_section'); ?>
<section class="banner-form">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="banner-form-wrap">
					<?php
						$booking_form_shortcode = $booking_form_section['booking_form_shortcode'];
						echo do_shortcode($booking_form_shortcode);
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Booking Form Section Starts Here -->

<!-- Car Rental Section Starts Here -->
<?php $car_rental_section = get_field('car_rental_section'); ?>
<section class="luxury-car-deals custom-pad">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="luxury-car-deals-wrap">
					<div class="custom-heading">
						<h2>Luxury Car Rental Deals</h2>
					</div>
					<div class="luxury-car-testimonial">
						<div id="luxury-car-owl" class="owl-carousel owl-theme">
							<?php $car_rental = $car_rental_section['select_rental_cars']; ?>
							<?php foreach($car_rental as $eachCar) { ?>
								<div class="item">
									<div class="luxury-car-box">
										<!-- Gallery Starts -->
										<?php $car_gallery_section = get_field('car_gallery_section', $eachCar); ?>
										<div class="luxury-car-box-img">
											<div class="owl-carousel nested-slider">
												<?php if(get_the_post_thumbnail_url($eachCar)) { ?>
													<div class="item">
														<img src="<?php echo get_the_post_thumbnail_url($eachCar); ?>">
													</div>
												<?php } ?>
												<?php for($i=1; $i<=6; $i++) { ?>
													<?php $gallery_image = $car_gallery_section['gallery_image_'.$i]; ?>
													<?php if($gallery_image) { ?>
														<div class="item">
															<img src="<?php echo $gallery_image; ?>">
														</div>
													<?php } ?>
												<?php } ?>
											</div>
										</div>

										<!-- Title -->
										<a class="luxury-box-head" href="<?php echo get_the_permalink($eachCar); ?>"><?php echo get_the_title($eachCar); ?></a>

										<!-- Car Details Starts -->
										<?php $car_details_section = get_field('car_details_section', $eachCar); ?>
										<?php if($car_details_section['car_info']) { ?>
											<p><?php echo $car_details_section['car_info']; ?></p>
										<?php } ?>
										<ul class="icon-box">
											<li>
												<div class="box-icon">
													<img src="<?php echo get_theme_file_uri(); ?>/assets/images/seat-icon.webp">
													<h5><?php echo $car_details_section['seating_capacity']; ?></h5>
												</div>
											</li>
											<li>
												<div class="box-icon">
													<img src="<?php echo get_theme_file_uri(); ?>/assets/images/transmission-icon.webp">
													<h5><?php echo $car_details_section['transmission']; ?></h5>
												</div>
											</li>
											<li>
												<div class="box-icon">
													<img src="<?php echo get_theme_file_uri(); ?>/assets/images/fuel-icon.webp">
													<h5><?php echo $car_details_section['fuel']; ?></h5>
												</div>
											</li>
										</ul>

										<!-- Car Rent Starts -->
										<?php $car_rent_section = get_field('car_rent_section', $eachCar); ?>
										<div class="currency">
											<div class="currency-price" id="<?php echo $eachCar; ?>-deal">
												<p class="currency-item deal-<?php echo $eachCar; ?> first-deal" id="aed-<?php echo $eachCar; ?>" currency="aed">
													<span class="aed" id="aed">AED</span>
													<?php echo $car_rent_section['aed_deals']; ?>
													<span>/per Day</span>
												</p>

												<p class="currency-item deal-<?php echo $eachCar; ?>" id="usd-<?php echo $eachCar; ?>" currency="usd">
													<span class="usd" id="usd">USD</span>
													<?php echo $car_rent_section['usd_deals']; ?>
													<span>/per Day</span>
												</p>

												<p class="currency-item deal-<?php echo $eachCar; ?>" id="eur-<?php echo $eachCar; ?>" currency="eur">
													<span class="eur" id="eur">EUR</span>
													<?php echo $car_rent_section['eur_deals']; ?>
													<span>/per Day</span>
												</p>

												<p class="currency-item deal-<?php echo $eachCar; ?>" id="gbp-<?php echo $eachCar; ?>" currency="gbp">
													<span class="gbp" id="gbp">GBP</span>
													<?php echo $car_rent_section['gbp_deals']; ?>
													<span>/per Day</span>
												</p>

											</div>
											<div class="currency-detail">
												<form>
													<select class="form-select <?php echo $eachCar; ?>-deal car-rental-currency" id="car-rental-currency-<?php echo $eachCar; ?>">
														<option value="aed" class="currency-option currency-option-<?php echo $eachCar; ?>" id="aed-<?php echo $eachCar; ?>" currency="aed" rental="<?php echo $eachCar; ?>" selected>AED</option>
														<option value="usd" class="currency-option currency-option-<?php echo $eachCar; ?>" id="usd-<?php echo $eachCar; ?>" currency="usd" rental="<?php echo $eachCar; ?>">USD</option>
														<option value="eur" class="currency-option currency-option-<?php echo $eachCar; ?>" id="eur-<?php echo $eachCar; ?>" currency="eur" rental="<?php echo $eachCar; ?>">EUR</option>
														<option value="gbp" class="currency-option currency-option-<?php echo $eachCar; ?>" id="gbp-<?php echo $eachCar; ?>" currency="gbp" rental="<?php echo $eachCar; ?>">GBP</option>
													</select>
												</form>
											</div>
										</div>

										<!-- Car Booking Starts -->
										<div class="luxury-car-box-btn">
											<a class="custom-btn" href="tel:<?php echo get_theme_mod('primary_phone_number'); ?>"><span><i class="fa fa-phone" aria-hidden="true"></i></span> Call</a>
											<a class="custom-btn" href="https://wa.me/<?php echo get_theme_mod('whatsapp_number'); ?>"><span><i class="fa fa-whatsapp" aria-hidden="true"></i></span> Whatsapp</a>
										</div>
									</div>
								</div>
							<?php
								}
							?>
						</div>
					</div>
					<div class="view-all-btn">
						<a href="#">View All Fleet <span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
					</div>
				</div>
			</div>
		</div>
</section>

<!-- Car Rental Info Section Starts Here -->
<?php $car_rental_info_section = get_field('car_rental_info_section'); ?>
<section class="about custom-pad">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 align-self-center">
				<div class="about-video">
					<?php echo $car_rental_info_section['section_video_url']; ?>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="about-content">
					<?php echo $car_rental_info_section['section_content']; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Brands Section Starts Here -->
<?php $brands_section = get_field('brands_section'); ?>
<section class="brands custom-pad">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="brands-slider">
					<div id="brands-owl" class="owl-carousel owl-theme">
						<?php $select_brands = $brands_section['select_brands']; ?>
						<?php foreach($select_brands as $eachBrand) { ?>
							<div class="item">
								<div class="brands-logo">
									<?php $term = get_term_by('id', $eachBrand, 'brand'); ?>
									<?php $term_link = get_term_link( $eachBrand, 'brand' ); ?>
									<a href="<?php echo $term_link; ?>">
										<img src="<?php echo get_field('featured_image', $term); ?>">
									</a>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Car Hire Section Starts Here -->
<?php $car_hire_section = get_field('car_hire_section'); ?>
<section class="car-hire custom-pad">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="car-hire-wrap">
					<div class="custom-heading">
						<h2><?php echo $car_hire_section['section_title']; ?></h2>
					</div>
					<div class="car-hire-nav-sliders">
						<ul class="nav nav-tabs" role="tablist">
							<?php $latest_vehicle_section = $car_hire_section['latest_vehicle_section']; ?>
							<?php $bestseller_section = $car_hire_section['bestseller_section']; ?>
							<li class="nav-item" role="presentation">
								<a class="nav-link active" id="simple-tab-0" data-bs-toggle="tab" href="#simple-tabpanel-0" role="tab"
									aria-controls="simple-tabpanel-0" aria-selected="true"><?php echo $latest_vehicle_section['title']; ?></a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="nav-link" id="simple-tab-1" data-bs-toggle="tab" href="#simple-tabpanel-1" role="tab"
									aria-controls="simple-tabpanel-1" aria-selected="false"><?php echo $bestseller_section['title']; ?></a>
							</li>
						</ul>
						<div class="tab-content pt-5" id="tab-content">
							<div class="tab-pane active" id="simple-tabpanel-0" role="tabpanel" aria-labelledby="simple-tab-0">
								<div id="car-hire-owl" class="owl-carousel owl-theme">
									<?php $select_latest_vehicle = $latest_vehicle_section['select_cars']; ?>
									<?php foreach($select_latest_vehicle as $eachVehicle) { ?>
										<div class="item">
											<div class="car-hire-box">
												<div class="car-hire-box-img">
													<img src="<?php echo get_the_post_thumbnail_url($eachVehicle); ?>">
													<div class="car-hire-box-content">
														<h3><?php echo get_the_title($eachVehicle); ?></h3>
														<?php $car_rent = get_field('car_rent_section', $eachVehicle); ?>
														<p>From <span>AED <?php echo $car_rent['aed_deals']; ?></span> / Per Day</p>
														<a href="<?php echo get_the_permalink($eachVehicle); ?>"><i class="las la-arrow-right"></i></a>
													</div>
												</div>
											</div>
										</div>
									<?php } ?>
								</div>
							</div>
							<div class="tab-pane" id="simple-tabpanel-1" role="tabpanel" aria-labelledby="simple-tab-1">
								<div id="car-hire-owl-2" class="owl-carousel owl-theme">
									<?php $select_bestseller = $bestseller_section['select_cars']; ?>
									<?php foreach($select_bestseller as $eachVehicle) { ?>
										<div class="item">
											<div class="car-hire-box">
												<div class="car-hire-box-img">
													<img src="<?php echo get_the_post_thumbnail_url($eachVehicle); ?>">
													<div class="car-hire-box-content">
														<h3><?php echo get_the_title($eachVehicle); ?></h3>
														<?php $car_rent = get_field('car_rent_section', $eachVehicle); ?>
														<p>From <span>AED <?php echo $car_rent['aed_deals']; ?></span> / Per Day</p>
														<a href="<?php echo get_the_permalink($eachVehicle); ?>"><i class="las la-arrow-right"></i></a>
													</div>
												</div>
											</div>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
					<div class="view-all-btn">
						<a href="#">Discover All <span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Contact Section Starts Here -->
<section class="contact custom-pad" style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/contact-bg.webp);">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<div class="contact-info">
					<div class="custom-heading">
						<h2>How Can We Help You?</h2>
					</div>
					<p>Book Us For All Of Your Luxury Transportation Needs</p>
					<div class="contact-detail">
						<span><i class="fa fa-phone" aria-hidden="true"></i></span>
						<div class="contact-detail-wrap">
							<h5>Phone</h5>
							<a href="tel:<?php echo get_theme_mod('primary_phone_number'); ?>"><?php echo get_theme_mod('primary_phone_number'); ?></a>
							<a href="tel:<?php echo get_theme_mod('secondary_phone_number'); ?>"><?php echo get_theme_mod('secondary_phone_number'); ?></a>
							<p>Landline:</p>
							<a href="tel:<?php echo get_theme_mod('landline_number'); ?>"><?php echo get_theme_mod('landline_number'); ?></a>
						</div>
					</div>
					<div class="contact-detail">
						<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
						<div class="contact-detail-wrap">
							<h5>Email</h5>
							<a href="mailto:<?php echo get_theme_mod('landline_number'); ?>"><?php echo get_theme_mod('landline_number'); ?></a>
						</div>
					</div>
					<div class="contact-detail">
						<span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
						<div class="contact-detail-wrap">
							<h5>Address</h5>
							<a href="<?php echo get_theme_mod('office_address_direction_link'); ?>"><?php echo get_theme_mod('office_address'); ?></a>
						</div>
					</div>
					<img src="<?php echo get_theme_file_uri(); ?>/assets/images/24-7.svg">
					<p>Rental Service</p>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="contact-form">
					<?php echo do_shortcode('[contact-form-7 id="810cde3" title="Contact Form HomePage"]'); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="follow-insta custom-pad">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="follow-insta-content">
					<div class="custom-heading">
						<h2>Follow Us On Instagram</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- FAQ Section Starts Here -->
<?php $faq_section = get_field('faq_section'); ?>
<section class="faq custom-pad">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="faq-content">
					<div class="custom-heading">
						<h2><?php echo $faq_section['section_title']; ?></h2>
					</div>
					<div class="faq-wrap">
						<div class="accordion accordion-flush" id="accordionFlushExample">
							<?php $select_faqs = $faq_section['select_faqs']; ?>
							<?php $i=1; foreach($select_faqs as $eachFAQ) { ?>
								<div class="accordion-item">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $i; ?>">
											<?php echo get_the_title($eachFAQ); ?>
										</button>
									</h2>
									<div id="flush-collapse<?php echo $i; ?>" class="accordion-collapse collapse"
										data-bs-parent="#accordionFlushExample">
										<div class="accordion-body">
											<?php $my_postid = $eachFAQ;
												$content_post = get_post($my_postid);
												$content = $content_post->post_content;
												$content = apply_filters('the_content', $content);
												$content = str_replace(']]>', ']]&gt;', $content);
												echo strip_tags($content);
											?>
										</div>
									</div>
								</div>
							<?php $i++; } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Blog Section Starts Here -->
<?php $news_articles_section = get_field('news_articles_section'); ?>
<section class="blog custom-pad">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="custom-heading">
					<h2><?php echo $news_articles_section['section_title']; ?></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<?php $select_articles = $news_articles_section['select_articles']; ?>
			<?php foreach($select_articles as $eachArticle) { ?>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="blog-box">
						<div class="blog-img">
							<img src="<?php echo get_the_post_thumbnail_url($eachArticle); ?>">
						</div>
						<div class="blog-content">
							<a href="<?php echo get_the_permalink($eachArticle); ?>"><?php echo get_the_title($eachArticle); ?></a>
							<?php $my_postid = $eachArticle;
								$content_post = get_post($my_postid);
								$content = $content_post->post_content;
								$content = apply_filters('the_content', $content);
								$content = str_replace(']]>', ']]&gt;', $content);
								$content = strip_tags($content);
							?>
							<p><?php echo wp_trim_words( $content, 30, '...' ); ?></p>
							<span><i class="fa fa-calendar main-color"></i> <?php echo get_the_date(); ?></span>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>

<script type="text/javascript">
	jQuery( document ).ready(function() {
		jQuery(".currency-price .currency-item").hide();
		jQuery(".currency-price .first-deal").show();
		jQuery(".car-rental-currency").change(function() {
	    var selectedOption = jQuery(this).val();
	    var class_name1 = this.className;
			var class_name2 = class_name1.replace('form-select ','');
			var rental = class_name2.replace('-deal car-rental-currency','');
	    jQuery(".deal-" + rental).hide();
	    jQuery("#" + selectedOption + "-" + rental).show();
	  });
	});
</script>