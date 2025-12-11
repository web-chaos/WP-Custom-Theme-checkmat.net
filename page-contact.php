<?php
/**
 * Template Name: Contact
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
			<div class="faq__wrapper contact__wrapper ptb">
				<div class="faq__column">
					<div class="faq__forms">
						<div class="faq__form--title"><?php echo get_field( 'form_title' ); ?></div>
						<div class="faq__form"><?php echo get_field( 'select_form' ); ?></div>
					</div>
				</div>
				<div class="faq__column">
					<div class="contact__block">
						<div class="contact__block--description"><?php echo get_field( 'description' ); ?></div>
						<div class="contact__block--tel">
							<strong><?php echo esc_html__( 'Phone Number', 'chess' ); ?></strong>
							<a href="tel:<?php echo get_field( 'phone_number' ); ?>"><?php echo get_field( 'phone_number' ); ?></a>
						</div>
						<div class="contact__block--email">
							<strong><?php echo esc_html__( 'Email Address', 'chess' ); ?></strong>
							<a href="mailto:<?php echo get_field( 'email_address' ); ?>"><?php echo get_field( 'email_address' ); ?></a>
						</div>
						<div class="contact__block--fax">
							<strong><?php echo esc_html__( 'Whatsapp', 'chess' ); ?></strong>
							<a href="tel:<?php echo get_field( 'whatsapp' ); ?>"><?php echo get_field( 'whatsapp' ); ?></a>
						</div>
						<div class="contact__block--address">
							<strong><?php echo esc_html__( 'Our Office', 'chess' ); ?></strong>
							<address><?php echo get_field( 'our_office' ); ?></address>
						</div>
					</div>
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
