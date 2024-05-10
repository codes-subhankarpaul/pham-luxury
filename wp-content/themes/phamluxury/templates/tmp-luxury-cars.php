<?php
/**
 * Template Page.
 *
 * This is the template that displays the specific template page.
 * 
 * Template Name: Luxury Cars
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage phamluxury
 * @since phamluxury 1.0
 */

	get_header();

	get_template_part( 'template-parts/header/innerpage-banner' );
?>

<section class="luxury-brands-logo custom-pad">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="luxury-brands-logo-head">
					<div class="custom-heading">
						<?php the_content(); ?>
					</div>
					<div class="brands-slider">
						<div id="brands-owl" class="owl-carousel owl-theme">
							<?php
								$taxonomy = 'brand';
								$terms = get_terms([
							    'taxonomy' => $taxonomy,
							    'hide_empty' => false,
								]);

								foreach($terms as $eachTerm) {
									$term_link = get_term_link( $eachTerm, $taxonomy );
									$term_image = get_field('featured_image', $eachTerm);
							?>
							<div class="item">
								<div class="brands-logo">
									<a href="<?php echo $term_link ?>"><img src="<?php echo $term_image; ?>"></a>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="car-deals custom-pad">
	<div class="container">
		<div class="row">
			<?php
				$i = 1;
				$luxury_cars_query = new WP_Query(
					array(
						'posts_per_page' => 6,
						'post_type' => 'luxury-car-rental',
						'order' => 'ASC',
						'paged' => get_query_var('paged') ? get_query_var('paged') : 1 )
				);
				while ( $luxury_cars_query->have_posts() ): $luxury_cars_query->the_post();
					$eachCar = get_the_ID();
				?>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="luxury-car-box">
						<!-- Gallery Starts -->
						<?php $car_gallery_section = get_field('car_gallery_section'); ?>
						<div class="luxury-car-box-img">
							<div class="owl-carousel nested-slider">
								<?php if(get_the_post_thumbnail_url()) { ?>
									<div class="item">
										<img src="<?php echo get_the_post_thumbnail_url(); ?>">
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
						<a class="luxury-box-head" href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>

						<!-- Car Details Starts -->
						<?php $car_details_section = get_field('car_details_section'); ?>
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
						<?php $car_rent_section = get_field('car_rent_section'); ?>
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
				<?php endwhile; ?>
				<div class="page-count">
				<?php
					$big = 999999999;
				 	echo paginate_links(
				 		array(
				    'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
				    'format' => '?paged=%#%',
				    'current' => max( 1, get_query_var('paged') ),
				    'total' => $luxury_cars_query->max_num_pages
				  	)
				 	);
				?>
				</div>
				<?php
				wp_reset_query();
			?>
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