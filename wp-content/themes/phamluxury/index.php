<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage phamluxury
 * @since phamluxury 1.0
 */

get_header(); ?>

<!-- Banner Section -->
<?php if(is_home()) { ?>
  <?php
      $page_for_posts = get_option( 'page_for_posts' );
      $featured_image = get_the_post_thumbnail_url($page_for_posts);
      $page_title = get_the_title($page_for_posts);
      $page_content = get_the_content( null, false, $page_for_posts );;
  ?>
<?php } ?>
<section class="custom-inner-banner inner-banner-alt wow animate__animated animate__fadeIn"
data-wow-duration="700ms" data-wow-delay="0.1s" style="background-image: url('<?php echo $featured_image; ?>')" alt="inner-banner-2">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="inner-banner-content">
					<h1><?php echo $page_title; ?></h1>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Post Section -->
<section class="gallery-inner custom-pad">
	<div class="container">
		<div class="row">
			<div class="col-md-12 align-self-center">
				<div class="gallery-inner-heading">
					<h3 class="inner-heading"><?php echo $page_title; ?></h3>
					<?php echo $page_content; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="news-gallery">
		<div class="container">
			<div class="row">
				<?php if ( have_posts() ) {
					while ( have_posts() ) {
						the_post(); ?>
						<div class="col-lg-4 col-md-6 p-2 align-self-center">
							<div class="gallery-img-wrap">
								<div class="gallery-custom-img">
									<a href="<?php echo get_the_post_thumbnail_url(); ?>" data-fancybox="custom-gallery-image">
										<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="thumbnail-news">
									</a>
								</div>
								<h3 class="inner-heading">
									<a href="<?php echo get_the_permalink(); ?>">
										<?php echo get_the_title(); ?>
									</a>
								</h3>
							</div>
						</div>
				<?php } } ?>
			</div>
		</div>
	</div>
</section>
<?php
	get_footer();
