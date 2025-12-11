<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package chess
 */

get_header();
?>

	<main id="primary" class="site-main position">
		<span class="green-left"></span>
		<span class="green-right"></span>
		<div class="container">
			<?php
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<div id="breadcrumbs" class="breadcrumbs">','</div>' );
				}
			?>
			<h1><?php the_title(); ?></h1>
			<div class="single__wrapper">
				<div class="single__content">
					<?php the_content(); ?>
				</div>
				<aside class="single__aside">
					<div class="single__aside--wrapper">
						<div class="single__aside--title"><?php echo esc_html__( 'Other', 'chess' ); ?></div>
						<?php 
							$recent_posts = new WP_Query([
								'post_type' => 'post',
								'posts_per_page' => 4,
								'post__not_in' => [get_the_ID()],
								'orderby' => 'date',
								'order' => 'DESC'
							]);
							if ( $recent_posts->have_posts() ) { ?>
							<div class="recent-posts swiper">
								<div class="swiper-wrapper">
									<?php while ( $recent_posts->have_posts() ) { $recent_posts->the_post(); ?>
										<div class="swiper-slide">
											<?php get_template_part( 'template-parts/content', 'resent' ); ?>
										</div>
									<?php } ?>
								</div>
							</div>
							<?php wp_reset_postdata(); ?>
						<?php } ?>
					</div>
				</aside>
			</div>
		</div>
	</main>

<?php
get_footer();
