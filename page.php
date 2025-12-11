<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
			<h1><?php the_title(); ?></h1>
			<div class="policy-page__content">
				<?php the_content(); ?>
			</div>
		</div>

	</main>

<?php
get_footer();
