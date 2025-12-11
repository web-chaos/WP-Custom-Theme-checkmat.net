<?php
/**
 * Template Name: About
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

	<main id="primary" class="site-main about-page">
		<div class="container">
			<section class="about-page__header">
				<h1><?php the_title(); ?></h1>
				<div class="about-page__description">
					<?php if( get_field( 'description' ) ){ ?>
						<p><?php echo get_field( 'description' ); ?></p>
					<?php } ?>
					<div class="about-page__store">
						<?php if( get_field( 'descr_appstore' ) ){ ?>
							<a href="<?php echo get_field( 'descr_appstore' ); ?>" target="_blank" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/img/appstore-black.svg" alt="appstore"></a>
						<?php } ?>
						<?php if( get_field( 'descr_google_play' ) ){ ?>
							<a href="<?php echo get_field( 'descr_google_play' ); ?>" target="_blank" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/img/google-play-black.svg" alt="googleplay"></a>
						<?php } ?>
					</div>
				</div>
			</section>
		</div>
			<?php if ( have_rows( 'steps_list' ) ) { ?>
				<div class="position">
					<span class="green-left"></span>
					<span class="green-right"></span>
					<span class="black-left"></span>
					<span class="black-right"></span>
					<div class="container">
						<section class="about-page__steps ptb">
							<?php $count = 0; while ( have_rows( 'steps_list' ) ) { the_row(); $count++; ?>
								<div class="about-page__step about-page__step--<?php echo $count; ?>">
									<div class="about-page__step--column">
										<div class="about-page__step--title"><span><?php echo $count; ?></span> <?php echo get_sub_field( 'title' ); ?></div>
										<div class="about-page__step--description"><?php echo get_sub_field( 'description' ); ?></div>
									</div>
									<?php $image = get_sub_field( 'image' ); ?>
									<?php if ( $image ) { ?>
										<div class="about-page__step--image">
											<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" width="<?php echo esc_attr( $image['width'] ); ?>" height="<?php echo esc_attr( $image['height'] ); ?>"/>
										</div>
									<?php } ?>
								</div>
							<?php } ?>
						</section>
					</div>
				</div>
			<?php } ?>

			<?php if ( have_rows( 'lists' ) ) { ?>
				<div class="position">
					<div class="container">
						<span class="green-left"></span>
						<span class="green-right"></span>
						<span class="black-left"></span>
						<span class="black-right"></span>
						<section class="about-page__lists ptb">
							<?php $list = 0; while ( have_rows( 'lists' ) ) { the_row(); $list++; ?>
								<div class="about-page__list list<?php echo $list; ?>">
									<div class="about-page__list--title"><?php echo get_sub_field( 'title' ); ?></div>
									<div class="about-page__list--description"><?php echo get_sub_field( 'description' ); ?></div>
									<?php $image_1 = get_sub_field( 'image_1' ); ?>
									<?php if ( $image_1 ) { ?>
										<div class="about-page__list--image1">
											<img src="<?php echo esc_url( $image_1['url'] ); ?>" alt="<?php echo esc_attr( $image_1['alt'] ); ?>" width="<?php echo esc_attr( $image_1['width'] ); ?>" height="<?php echo esc_attr( $image['height'] ); ?>"/>
										</div>
									<?php } ?>
									<?php $image_2 = get_sub_field( 'image_2' ); ?>
									<?php if ( $image_2 ) { ?>
										<div class="about-page__list--image2">
											<img src="<?php echo esc_url( $image_2['url'] ); ?>" alt="<?php echo esc_attr( $image_2['alt'] ); ?>" width="<?php echo esc_attr( $image_2['width'] ); ?>" height="<?php echo esc_attr( $image_2['height'] ); ?>"/>
										</div>
									<?php } ?>
								</div>
							<?php } ?>
						</section>
					</div>
				</div>
			<?php } ?>

			<?php if( get_field( 'download_title' ) ){ ?>
				<div class="container">
					<section class="download-block ptb">
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
					</section>
				</div>
			<?php } ?>
		</div>
	</main>

<?php
get_footer();
