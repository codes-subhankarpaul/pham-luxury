<?php
/*
 * Templates for Luxury Car inner page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage phamluxury
 * @since phamluxury 1.0
 *
*/

	get_header();

	get_template_part( 'template-parts/header/luxury-car-inner-banner' );

	$eachCar = get_the_ID();
?>

<section class="car-deals-inner custom-pad">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-md-12">
				<div class="car-deals-inner-gallery">
					<!-- Gallery Starts -->
					<?php $car_gallery_section = get_field('car_gallery_section', $eachCar); ?>
					<div class="outer gallery-section-outer">
						<div id="big" class="owl-carousel owl-theme">
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
						<div id="thumbs" class="owl-carousel owl-theme">
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
					<!-- Overview Starts -->
					<?php $car_overview_section = get_field('car_overview_section', $eachCar); ?>
					<div class="car-overview">
						<div class="custom-heading">
							<h2>Car Overview</h2>
						</div>
						<?php if($car_overview_section['car_overview']) { ?>
							<div class="car-overview">
								<?php echo $car_overview_section['car_overview']; ?>
							</div>
						<?php } ?>
						<div class="car-overview-tabs">
							<ul class="nav nav-tabs" role="tablist">
								<li class="nav-item" role="presentation">
									<a class="nav-link active" id="simple-tab-0" data-bs-toggle="tab" href="#simple-tabpanel-0"
										role="tab" aria-controls="simple-tabpanel-0" aria-selected="true">Car Features</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" id="simple-tab-1" data-bs-toggle="tab" href="#simple-tabpanel-1" role="tab"
										aria-controls="simple-tabpanel-1" aria-selected="false">Specification</a>
								</li>
							</ul>
							<div class="tab-content pt-5" id="tab-content">
								<div class="tab-pane active" id="simple-tabpanel-0" role="tabpanel" aria-labelledby="simple-tab-0">
									<?php echo $car_overview_section['car_features']; ?>
								</div>
								<div class="tab-pane" id="simple-tabpanel-1" role="tabpanel" aria-labelledby="simple-tab-1">
									<?php echo $car_overview_section['specification']; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5 col-md-12">
				<div class="car-deals-inner-content">
					<div class="car-deals-top-content">
						<div class="custom-heading">
							<h2><?php echo get_the_title(); ?></h2>
						</div>
						<!-- Car Details Starts -->
						<?php $car_details_section = get_field('car_details_section', $eachCar); ?>
						<ul>
							<?php if($car_details_section['transmission']) { ?>
								<li>Transmission <span><?php echo $car_details_section['transmission']; ?></span></li>
							<?php } ?>

							<?php if($car_details_section['fuel']) { ?>
								<li>Fuel <span><?php echo $car_details_section['fuel']; ?></span></li>
							<?php } ?>

							<?php if($car_details_section['seating_capacity']) { ?>
								<li>Seats <span><?php echo $car_details_section['seating_capacity']; ?></span></li>
							<?php } ?>

							<?php if($car_details_section['doors']) { ?>
								<li>Doors <span><?php echo $car_details_section['doors']; ?></span></li>
							<?php } ?>

							<?php if($car_details_section['color']) { ?>
								<li>Color <span><?php echo $car_details_section['color']; ?></span></li>
							<?php } ?>

							<?php if($car_details_section['engine']) { ?>
								<li>Engine <span><?php echo $car_details_section['engine']; ?></span></li>
							<?php } ?>

							<?php if($car_details_section['year']) { ?>
								<li>Year <span><?php echo $car_details_section['year']; ?></span></li>
							<?php } ?>
						</ul>
					</div>
					<!-- Car Rent Starts -->
					<?php $car_rent_section = get_field('car_rent_section'); ?>
					<?php $car_security_section = get_field('car_security_section'); ?>
					<!-- Car Rent & Security -->
					<div class="market-rate">
						<div class="market-currency">
							<h6>Currency</h6>
							<form>
								<select class="form-select <?php echo $eachCar; ?>-deal car-rental-currency" id="car-rental-currency-<?php echo $eachCar; ?>">
									<option value="aed" class="currency-option currency-option-<?php echo $eachCar; ?>" id="aed-<?php echo $eachCar; ?>" currency="aed" rental="<?php echo $eachCar; ?>" selected>AED</option>
									<option value="usd" class="currency-option currency-option-<?php echo $eachCar; ?>" id="usd-<?php echo $eachCar; ?>" currency="usd" rental="<?php echo $eachCar; ?>">USD</option>
									<option value="eur" class="currency-option currency-option-<?php echo $eachCar; ?>" id="eur-<?php echo $eachCar; ?>" currency="eur" rental="<?php echo $eachCar; ?>">EUR</option>
									<option value="gbp" class="currency-option currency-option-<?php echo $eachCar; ?>" id="gbp-<?php echo $eachCar; ?>" currency="gbp" rental="<?php echo $eachCar; ?>">GBP</option>
								</select>
							</form>
						</div>
						<span>*Varies Subject To Market Rate</span>
					</div>
					<!-- Amounts -->
					<div class="car-deals-price">
						<!-- Car Rent Starts -->
						<div class="deal-price">
							<div class="rent-price">
								<!-- AED Rent -->
								<p class="amount rent-amount rent-<?php echo $eachCar; ?> first-rent" id="rent-aed-<?php echo $eachCar; ?>" currency="aed">
									<span>Price:</span>
									<span class="aed-rent" id="aed-rent">AED</span>
									<b><?php echo $car_rent_section['aed_deals']; ?></b>
									<span class="small-text">/Per Day</span>
								</p>
								<!-- USD Rent -->
								<p class="amount rent-amount rent-<?php echo $eachCar; ?>" id="rent-usd-<?php echo $eachCar; ?>" currency="usd">
									<span>Price:</span>
									<span class="usd-rent" id="usd-rent">USD</span>
									<b><?php echo $car_rent_section['usd_deals']; ?></b>
									<span class="small-text">/Per Day</span>
								</p>
								<!-- EUR Rent -->
								<p class="amount rent-amount rent-<?php echo $eachCar; ?>" id="rent-eur-<?php echo $eachCar; ?>" currency="eur">
									<span>Price:</span>
									<span class="eur-rent" id="eur-rent">EUR</span>
									<b><?php echo $car_rent_section['eur_deals']; ?></b>
									<span class="small-text">/Per Day</span>
								</p>
								<!-- GBP Rent -->
								<p class="amount rent-amount rent-<?php echo $eachCar; ?>" id="rent-gbp-<?php echo $eachCar; ?>" currency="gbp">
									<span>Price:</span>
									<span class="gbp-rent" id="gbp-rent">GBP</span>
									<b><?php echo $car_rent_section['gbp_deals']; ?></b>
									<span class="small-text">/Per Day</span>
								</p>
							</div>
						</div>
						<!-- Car Security Starts -->
						<div class="deal-security">
							<!-- AED Security -->
							<p class="amount security-amount security-<?php echo $eachCar; ?> first-security" id="security-aed-<?php echo $eachCar; ?>" currency="aed">
								<span>Security:</span>
								<span class="aed-security" id="aed-security">AED</span>
								<b><?php echo $car_security_section['aed_deals']; ?></b>
								<span class="small-text">/Per Day</span>
							</p>
							<!-- USD Security -->
							<p class="amount security-amount security-<?php echo $eachCar; ?>" id="security-usd-<?php echo $eachCar; ?>" currency="usd">
								<span>Security:</span>
								<span class="usd-security" id="usd-security">USD</span>
								<b><?php echo $car_security_section['usd_deals']; ?></b>
								<span class="small-text">/Per Day</span>
							</p>
							<!-- EUR Security -->
							<p class="amount security-amount security-<?php echo $eachCar; ?>" id="security-eur-<?php echo $eachCar; ?>" currency="eur">
								<span>Security:</span>
								<span class="eur-security" id="eur-security">EUR</span>
								<b><?php echo $car_security_section['eur_deals']; ?></b>
								<span class="small-text">/Per Day</span>
							</p>
							<!-- GBP Security -->
							<p class="amount security-amount security-<?php echo $eachCar; ?>" id="security-gbp-<?php echo $eachCar; ?>" currency="gbp">
								<span>Security:</span>
								<span class="gbp-security" id="gbp-security">GBP</span>
								<b><?php echo $car_security_section['gbp_deals']; ?></b>
								<span class="small-text">/Per Day</span>
							</p>
						</div>
					</div>
					<!-- Booking -->
					<div class="car-deals-inner-btn">
						<a class="custom-btn" href="tel:<?php echo get_theme_mod('primary_phone_number'); ?>"><span><i class="fa fa-phone" aria-hidden="true"></i></span> Call</a>
						<a class="custom-btn" href="https://wa.me/<?php echo get_theme_mod('whatsapp_number'); ?>"><span><i class="fa fa-whatsapp" aria-hidden="true"></i></span> Whatsapp</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>

<script type="text/javascript">
	jQuery( document ).ready(function() {
		jQuery(".rent-amount").hide();
		jQuery(".security-amount").hide();

		jQuery(".first-rent").show();
		jQuery(".first-security").show();

		jQuery(".car-rental-currency").change(function() {
			var currency = jQuery(this).val();
			var class_name1 = this.className;
			var class_name2 = class_name1.replace('form-select ','');
			var rental = class_name2.replace('-deal car-rental-currency','');

			jQuery(".rent-amount").hide();
			jQuery("#rent-" + currency + "-" + rental).show();

			jQuery(".security-amount").hide();
			jQuery("#security-" + currency + "-" + rental).show();
		});
	});
</script>
