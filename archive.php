<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
			<h1><?php echo single_cat_title('', false); ?></h1>

			<?php
			
				$categories = get_categories( array(
					'exclude' => [1, 3],
					'hide_empty' => false
				) );

				if ( ! empty( $categories ) ) { 
					$current_category_id = is_category() ? get_queried_object_id() : null;
				?>
					<ul class="archive__filter">
						<?php foreach ( $categories as $category ) { ?>
							<li>
								<a class="<?php echo $category->term_id === $current_category_id ? 'active' : ''; ?>" href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>">
									<?php echo esc_html( $category->name ); ?>
								</a>
							</li>
						<?php } ?>
					</ul>
			<?php } ?>

			<div class="archive__wrapper">
				<?php if ( have_posts() ) : ?>
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', 'blog' );

					endwhile;

					$pagination_args = array(
						'prev_text' => '<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.4822 22.6067L0.936291 13.0608C0.350505 12.475 0.350505 11.5253 0.936291 10.9395L10.4822 1.39354C11.068 0.807756 12.0178 0.807756 12.6036 1.39354C13.1893 1.97933 13.1893 2.92908 12.6036 3.51486L5.61827 10.5001L24.6244 10.5001L24.6244 13.5001L5.61827 13.5001L12.6036 20.4854C13.1893 21.0712 13.1893 22.021 12.6036 22.6067C12.0178 23.1925 11.068 23.1925 10.4822 22.6067Z" fill="white"/></svg>',
						'next_text' => '<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.5178 1.3935L24.0637 10.9394C24.6495 11.5252 24.6495 12.475 24.0637 13.0608L14.5178 22.6067C13.932 23.1925 12.9822 23.1925 12.3964 22.6067C11.8107 22.0209 11.8107 21.0712 12.3964 20.4854L19.3817 13.5001L0.375632 13.5001L0.375632 10.5001L19.3817 10.5001L12.3964 3.51482C11.8107 2.92903 11.8107 1.97929 12.3964 1.3935C12.9822 0.807713 13.932 0.807713 14.5178 1.3935Z" fill="white"/></svg>',
					);

					echo '<nav class="pagination">';
					echo paginate_links($pagination_args);
					echo '</nav>';

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
			</div>
		</div>

	</main>

<?php
get_footer();
