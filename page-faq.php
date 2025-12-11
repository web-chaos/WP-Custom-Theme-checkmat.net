<?php
/**
 * Template Name: Faq
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
			<div class="faq__wrapper ptb">
				<div class="faq__column">
					<div class="faq__forms">
						<div class="faq__form--title"><?php echo get_field( 'form_title' ); ?></div>
						<div class="faq__form"><?php echo get_field( 'form' ); ?></div>
					</div>
				</div>
				<div class="faq__column">
					<?php if ( have_rows( 'faq' ) ) { ?>
						<div class="faq__accordion accordion">
							<?php while ( have_rows( 'faq' ) ) { the_row(); ?>
								<div class="faq__accordion--item accordion-item">
									<div class="faq__accordion--title accordion-button">
										<span><?php echo get_sub_field( 'title' ); ?></span>
										<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M2.0293 10.9858H20.0005" stroke="#19181A" stroke-width="2.9952" stroke-linecap="round" stroke-linejoin="round"/>
											<path class="hide" d="M11.0156 2.00024L11.0156 19.9714" stroke="#19181A" stroke-width="2.9952" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</div>
									<div class="faq__accordion--content accordion-content">
										<p><?php echo get_sub_field( 'description' ); ?></p>
									</div>
								</div>
							<?php } ?>
						</div>
					<?php } ?>
				</div>
			</div>
			<?php if( get_field( 'download_title' ) ){ ?>
				<div class="download-block ptb">
					<div class="download-block__wrapper">
						<div class="download-block__title"><?php echo get_field( 'download_title' ); ?></div>
						<div class="download-block__buttons">
							<?php if( get_field( 'appstore' ) ){ ?>
								<a href="<?php echo get_field( 'appstore' ); ?>" target="_blank" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/img/appstore-black.svg" alt="appstore"></a>
							<?php } ?>
							<?php if( get_field( 'google_play' ) ){ ?>
								<a href="<?php echo get_field( 'google_play' ); ?>" target="_blank" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/img/google-play-black.svg" alt="googleplay"></a>
							<?php } ?>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</main>

<?php
get_footer();
