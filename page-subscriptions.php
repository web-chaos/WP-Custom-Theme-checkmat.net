<?php
/**
 * Template Name: Subscriptions
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
			<div class="subscriptions__wrapper">
				<h1><?php the_title(); ?></h1>

				<?php if ( have_rows( 'pass_list' ) ) { ?>
					<div class="subscriptions__pass swiper" id="subscriptions__pass">
						<div class="swiper-wrapper">
							<?php while ( have_rows( 'pass_list' ) ) { the_row(); ?>
								<div class="swiper-slide">
									<div class="subscriptions__item">
										<?php $image = get_sub_field( 'image' ); ?>
										<?php if ( $image ) { ?>
											<div class="subscriptions__pass--image">
												<?php if ( get_sub_field( 'limited' ) == 1 ) { ?>
													<div class="subscriptions__pass--limited"><?php echo esc_html__( 'Limited-time ', 'chess' ); ?></div>
												<?php } ?>
												<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
											</div>
										<?php } ?>
										<div class="subscriptions__pass--name"><?php echo get_sub_field( 'name' ); ?></div>
										<div class="subscriptions__pass--wrapper">
											<?php if ( have_rows( 'list' ) ) { ?>
												<ul class="subscriptions__pass--list">
													<?php while ( have_rows( 'list' ) ) { the_row(); ?>
														<li><?php echo get_sub_field( 'title' ); ?></li>
													<?php } ?>
												</ul>
											<?php } ?>
											<?php $buy_link = get_sub_field( 'buy_link' ); ?>
											<?php if ( $buy_link ) { ?>
												<a class="subscriptions__pass--link" href="<?php echo esc_url( $buy_link['url'] ); ?>" target="<?php echo esc_attr( $buy_link['target'] ); ?>"><?php echo esc_html( $buy_link['title'] ); ?></a>
											<?php } ?>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
						<div class="swiper-pagination"></div>
					</div>
				<?php } ?>
				
				<?php if ( have_rows( 'benefits_list' ) ) { ?>
					<div class="subscriptions__benefits">
						
						<ul class="subscriptions__benefits--list">
							<li class="subscriptions__benefits--name">
								<span><?php echo esc_html__( 'Benefits', 'chess' ); ?></span>
								<span><?php echo esc_html__( 'Basic', 'chess' ); ?></span>
								<span><?php echo esc_html__( 'Battle Pass', 'chess' ); ?></span>
								<span><?php echo esc_html__( 'Lifetime', 'chess' ); ?></span>
							</li>
							<?php while ( have_rows( 'benefits_list' ) ) { the_row(); ?>
								<li>
									<span><?php echo get_sub_field( 'benefits' ); ?></span>
									<span>
										<?php if ( get_sub_field( 'basic' ) == 1 ) { ?>
											<svg width="45" height="47" viewBox="0 0 45 47" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M44.0303 5.1218L15.0824 46.476L0.957031 26.0727L7.04125 21.8606L15.1159 33.524L37.968 0.878174L44.0303 5.1218Z" fill="#9AFF00"/></svg>
										<?php } ?>
									</span>
									<span>
										<?php if ( get_sub_field( 'battle_pass' ) == 1 ) { ?>
											<svg width="45" height="47" viewBox="0 0 45 47" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M44.0303 5.1218L15.0824 46.476L0.957031 26.0727L7.04125 21.8606L15.1159 33.524L37.968 0.878174L44.0303 5.1218Z" fill="#9AFF00"/></svg>
										<?php } ?>
									</span>
									<span>
										<?php if ( get_sub_field( 'lifetime' ) == 1 ) { ?>
											<svg width="45" height="47" viewBox="0 0 45 47" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M44.0303 5.1218L15.0824 46.476L0.957031 26.0727L7.04125 21.8606L15.1159 33.524L37.968 0.878174L44.0303 5.1218Z" fill="#9AFF00"/></svg>
										<?php } ?>
									</span>
								</li>
							<?php } ?>
						</ul>
					</div>
				<?php } ?>

				<?php $buy_now_link = get_field( 'buy_now_link' ); ?>
				<?php if ( $buy_now_link ) { ?>
					<div class="subscriptions__buy">
						<a href="<?php echo (isset($buy_now_link['url']) && $buy_now_link['url'] === '#') ? '#subscriptions__pass' : esc_url( $buy_now_link['url'] ); ?>" target="<?php echo esc_attr( $buy_now_link['target'] ); ?>" class="<?php echo (isset($buy_now_link['url']) && $buy_now_link['url'] === '#') ? 'scroll-to' : ''; ?>"><?php echo esc_html( $buy_now_link['title'] ); ?></a>
					</div>
				<?php } ?>
			</div>
		</div>
	</main>

<?php
get_footer();
