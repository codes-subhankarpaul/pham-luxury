<?php
/**
 * Template Page.
 *
 * This is the template that displays the specific template page.
 * 
 * Template Name: Blog
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

<section class="blog blog-inner custom-pad">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="custom-heading">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<?php
				$i = 1;
				$blog_query = new WP_Query(
					array(
						'posts_per_page' => 4,
						'post_type' => 'post',
						'order' => 'ASC',
						'paged' => get_query_var('paged') ? get_query_var('paged') : 1 )
				);
				while ( $blog_query->have_posts() ): $blog_query->the_post();
				?>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="blog-box">
						<div class="blog-img">
							<a href="<?php echo get_the_permalink(); ?>">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>">
							</a>
						</div>
						<div class="blog-content">
							<a href="<?php echo get_the_permalink(); ?>">
								<?php echo get_the_title(); ?>
							</a>
							<?php
								$my_postid = get_the_ID();
								$content_post = get_post($my_postid);
								$content = $content_post->post_content;
								$content = apply_filters('the_content',$content);
								$content = str_replace(']]>', ']]&gt;',$content);
								$content = strip_tags($content);
							?>
							<p><?php echo wp_trim_words( $content, 15, '...' ); ?></p>
							<span><i class="fa fa-calendar main-color"></i> <?php echo get_the_date(); ?></span>
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
				    'total' => $blog_query->max_num_pages
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

<?php
	get_footer();