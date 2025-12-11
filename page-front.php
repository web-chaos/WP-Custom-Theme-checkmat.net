<?php
/**
 * Template Name: Front
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

	<main id="primary" class="site-main">
		<section class="hero position">
			<span class="green-left"></span>
			<span class="green-right"></span>
			<span class="black-left"></span>
			<span class="black-right"></span>
			
			<?php $image = get_field( 'image' ); ?>
			<div class="container">
				<div class="hero__wrapper">
					<div class="hero__content">
						<h1><?php the_title(); ?></h1>
						<p><?php echo get_field( 'description' ); ?></p>
						<div class="hero__store">
							<?php if( get_field( 'appstore' ) ){ ?>
								<a href="<?php echo get_field( 'appstore' ); ?>" rel="nofollow" target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/img/appstore.svg" alt="appstore" width="203" height="64">
								</a>
							<?php } ?>
							<?php if( get_field( 'google_play' ) ){ ?>
								<a href="<?php echo get_field( 'google_play' ); ?>#" rel="nofollow" target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/img/googleplay.svg" alt="googleplay" width="203" height="64">
								</a>
							<?php } ?>
                    	</div>

						<div class="hero__mob">
							<div class="hero__mob--store">
								<?php if( get_field( 'appstore' ) ){ ?>
									<a href="<?php echo get_field( 'appstore' ); ?>" rel="nofollow" target="_blank">
										<img src="<?php echo get_template_directory_uri(); ?>/img/appstore.svg" alt="appstore" width="203" height="64">
									</a>
								<?php } ?>
								<?php if( get_field( 'google_play' ) ){ ?>
									<a href="<?php echo get_field( 'google_play' ); ?>#" rel="nofollow" target="_blank">
										<img src="<?php echo get_template_directory_uri(); ?>/img/googleplay.svg" alt="googleplay" width="203" height="64">
									</a>
								<?php } ?>
							</div>
							<?php if ( $image ) { ?>
								<div class="hero__mob--image">
									<img class="hero__mob--image--main" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" width="<?php echo esc_attr( $image['width'] ); ?>" height="<?php echo esc_attr( $image['height'] ); ?>"/>
									<img class="hero__mob--image--peshka" src="<?php echo get_template_directory_uri(); ?>/img/peshka.svg" alt="<?php the_title(); ?>">
								</div>
							<?php } ?>
						</div>
					</div>
					<?php if ( $image ) { ?>
						<div class="hero__image">
							<img class="hero__image--main" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" width="<?php echo esc_attr( $image['width'] ); ?>" height="<?php echo esc_attr( $image['height'] ); ?>"/>
							<img class="hero__image--peshka" src="<?php echo get_template_directory_uri(); ?>/img/peshka.svg" alt="<?php the_title(); ?>">
						</div>
					<?php } ?>
				</div>
			</div>
		</section>
		<section class="video position">
			<span class="green-left"></span>
			<span class="green-right"></span>
			<div class="container">
				<div class="video__video">
					<a href="<?php echo get_field( 'video' ); ?>" data-fancybox data-width="640" data-height="360">
						<svg width="624" height="339" viewBox="0 0 624 339" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_704_858)"><rect width="624" height="339" fill="white"/><path d="M44.0666 95.4616L-36.5303 107.118V-8.75057L44.0666 -38.6601V95.4616Z" fill="black"/><path d="M316.405 55.9778L154.77 79.3895V-79.7808L316.405 -139.798V55.9778Z" fill="black"/><path d="M154.77 238.61L44.0718 229.583V95.4613L154.77 79.3905V238.61Z" fill="black"/><path d="M44.0666 363.705L-36.5303 338.904V222.986L44.0666 229.583V363.705Z" fill="black"/><path d="M316.405 447.58L154.77 397.83V238.61L316.405 251.804V447.58Z" fill="black"/><path d="M579.933 95.4616L660.53 107.118V-8.75057L579.933 -38.6601V95.4616Z" fill="black"/><path d="M307.595 55.9778L469.23 79.3896V-79.7807L307.595 -139.798V55.9778Z" fill="black"/><path d="M469.23 238.61L579.928 229.583V95.4613L469.23 79.3905V238.61Z" fill="black"/><path d="M579.933 363.705L660.53 338.904V222.986L579.933 229.583V363.705Z" fill="black"/><path d="M307.595 447.58L469.23 397.83V238.61L307.595 251.804V447.58Z" fill="black"/><path class="play" d="M348.979 157.765C350.318 158.534 350.318 160.466 348.979 161.235L273.996 204.28C272.662 205.046 271 204.083 271 202.546L271 116.454C271 114.917 272.662 113.954 273.996 114.72L348.979 157.765Z" fill="#FF80C3"/></g><defs><clipPath id="clip0_704_858"><rect width="624" height="339" fill="white"/></clipPath></defs></svg>
					</a>
				</div>
			</div>
		</section>
		<?php if ( have_rows( 'steps' ) ) { ?>
			<section class="steps ptb position">
				<span class="green-left"></span>
				<span class="green-right"></span>
				<div class="container">
					<div class="steps__slider--wrapper">
						<div class="steps__slider swiper">
							<div class="swiper-wrapper">
								<?php $count = 0; while ( have_rows( 'steps' ) ) { the_row(); $count++; ?>
									<div class="swiper-slide">
										<div class="steps__item">
											<div class="steps__item--title">
												<span><?php echo $count; ?></span>
												<strong><?php echo get_sub_field( 'title' ); ?></strong>
											</div>								
											<?php $image = get_sub_field( 'image' ); ?>
											<?php if ( $image ) { ?>
												<div class="steps__item--image">
													<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" width="<?php echo esc_attr( $image['width'] ); ?>" height="<?php echo esc_attr( $image['height'] ); ?>"/>
												</div>
											<?php } ?>
										</div>
									</div>
								<?php } ?>
							</div>
							<div class="swiper-pagination"></div>
							
						</div>
						<div class="swiper-prev"><svg width="39" height="78" viewBox="0 0 39 78" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.5" d="M35.9998 51.8757L25.4873 39.0287L35.9998 26.1816" stroke="#9AFF00" stroke-width="5" stroke-linecap="round"/><path opacity="0.5" d="M33.4581 75L4 39L33.4581 3" stroke="#9AFF00" stroke-width="5" stroke-linecap="round"/><path d="M35.9998 51.8757L25.4873 39.0287L35.9998 26.1816" stroke="white" stroke-linecap="round"/><path d="M33.4581 75L4 39L33.4581 3" stroke="white" stroke-linecap="round"/></svg></div>
							<div class="swiper-next"><svg width="39" height="78" viewBox="0 0 39 78" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.5" d="M3.00021 26.1243L13.5127 38.9713L3.00021 51.8184" stroke="#9AFF00" stroke-width="5" stroke-linecap="round"/><path opacity="0.5" d="M5.54193 3L35 39L5.54193 75" stroke="#9AFF00" stroke-width="5" stroke-linecap="round"/><path d="M3.00021 26.1243L13.5127 38.9713L3.00021 51.8184" stroke="white" stroke-linecap="round"/><path d="M5.54193 3L35 39L5.54193 75" stroke="white" stroke-linecap="round"/></svg></div>
					</div>
				</div>
			</section>
		<?php } ?>

		<?php if( get_field( 'chapm_title' ) ){ ?>
			<section class="champion ptb position">
				<span class="green-left"></span>
				<span class="green-right"></span>
				<div class="container">
					<div class="champion__title section-title"><?php echo get_field( 'chapm_title' ); ?></div>
					<div class="champion__wrapper">
						<div class="champion__column">
							<div class="champion__description"><?php echo get_field( 'chapm_description' ); ?></div>
							<?php $chapm_link = get_field( 'chapm_link' ); ?>
							<?php if ( $chapm_link ) { ?>
								<a class="button" href="<?php echo esc_url( $chapm_link['url'] ); ?>" target="<?php echo esc_attr( $chapm_link['target'] ); ?>"><?php echo esc_html( $chapm_link['title'] ); ?></a>
							<?php } ?>
						</div>
						<?php $chapm_image = get_field( 'chapm_image' ); ?>
						<?php if ( $chapm_image ) : ?>
							<div class="champion__image">
								<img src="<?php echo esc_url( $chapm_image['url'] ); ?>" alt="<?php echo esc_attr( $chapm_image['alt'] ); ?>" width="<?php echo esc_attr( $chapm_image['width'] ); ?>" height="<?php echo esc_attr( $chapm_image['height'] ); ?>"/>
							</div>
						<?php endif; ?>
					</div>
					<?php if ( $chapm_link ) { ?>
						<a class="button champion__button" href="<?php echo esc_url( $chapm_link['url'] ); ?>" target="<?php echo esc_attr( $chapm_link['target'] ); ?>"><?php echo esc_html( $chapm_link['title'] ); ?></a>
					<?php } ?>
				</div>
			</section>
		<?php } ?>

		<?php if ( have_rows( 'pass_list' ) ) { ?>
			<section class="ptb subscriptions-home position">
				<span class="green-left"></span>
				<span class="green-right"></span>
				<div class="container">
					<div class="subscriptions__pass swiper">
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
				</div>
			</section>
		<?php } ?>

		<?php if( get_field( 'faq_title' ) ){ ?>
			<section class="faq-home ptb">
				<div class="container">
					<div class="faq-home__wrapper">
						<div class="faq-home__column">
							<div class="faq-home__title section-title"><?php echo get_field( 'faq_title' ); ?></div>
							<div class="faq-home__description"><?php echo get_field( 'faq_description' ); ?></div>
							<?php $faq_link = get_field( 'faq_link' ); ?>
							<?php if ( $faq_link ) { ?>
								<a class="button" href="<?php echo esc_url( $faq_link['url'] ); ?>" target="<?php echo esc_attr( $faq_link['target'] ); ?>"><?php echo esc_html( $faq_link['title'] ); ?></a>
							<?php } ?>
						</div>
						<div class="faq-home__faqList">
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
				</div>
			</section>
		<?php } ?>

		<?php if( get_field( 'blog_title' ) ){ ?>
			<section class="blog-home ptb">
				<div class="container">
					<div class="blog-home__wrapper">
						<div class="blog-home__header">
							<div class="blog-home__title section-title"><?php echo get_field( 'blog_title' ); ?></div>
							<div class="blog-home__nav">
								<div class="blog-home__swiper-prev"><svg width="52" height="53" viewBox="0 0 52 53" fill="none" xmlns="http://www.w3.org/2000/svg"><rect y="0.971191" width="52" height="52" rx="9.17647" fill="#9AFF00"/><path d="M30.5887 14.1243L19.8828 26.9713L30.5887 39.8184" stroke="#19181A" stroke-width="4.28235" stroke-linecap="round"/></svg></div>
								<div class="blog-home__swiper-next"><svg width="52" height="53" viewBox="0 0 52 53" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="52" height="52" rx="9.17647" transform="matrix(-1 0 0 1 52 0.971191)" fill="#9AFF00"/><path d="M21.4113 14.1243L32.1172 26.9713L21.4113 39.8184" stroke="#19181A" stroke-width="4.28235" stroke-linecap="round"/></svg></div>
							</div>
						</div>
					<?php 
						$recent_posts = new WP_Query([
							'post_type' => 'post',
							'posts_per_page' => 10,
							'orderby' => 'date',
							'order' => 'DESC'
						]);
						if ( $recent_posts->have_posts() ) { ?>
						<div class="blog-home__posts swiper">
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
				</div>
			</section>
		<?php } ?>

		<?php if( get_field( 'reviews_title' ) ){ ?>
			<section class="reviews ptb">
				<div class="container">
					<div class="reviews__title section-title"><?php echo get_field( 'reviews_title' ); ?></div>
					<?php if ( have_rows( 'reviews' ) ) { ?>
						<div class="reviews__wrapper">
							<div class="reviews__slider swiper">
								<div class="swiper-wrapper">
									<?php while ( have_rows( 'reviews' ) ) { the_row(); ?>
										<div class="swiper-slide">
											<div class="reviews__item">
												<?php $icon = get_sub_field( 'icon' ); ?>
												<?php if ( $icon ) { ?>
													<div class="reviews__item--icon">
														<img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" width="<?php echo esc_attr( $icon['width'] ); ?>" height="<?php echo esc_attr( $icon['height'] ); ?>"/>
													</div>
												<?php } ?>
												<div class="reviews__item--column">
													<div class="reviews__item--name"><?php echo get_sub_field( 'name' ); ?></div>
													<div class="reviews__item--review"><?php echo get_sub_field( 'description' ); ?></div>
													<div class="reviews__item--rating">
														<?php
															$rating = get_sub_field('rating');
															$max_stars = 5;

															if ($rating !== null) { ?>
																<div class="rating">
																	<?php
																	$rounded_rating = round($rating); 
																	for ($i = 1; $i <= $rounded_rating; $i++) { ?>
																		<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 0.859375L9.79611 6.38724H15.6085L10.9062 9.80365L12.7023 15.3315L8 11.9151L3.29772 15.3315L5.09383 9.80365L0.391548 6.38724H6.20389L8 0.859375Z" fill="#FF80C3"/></svg>
																	<?php } for ($i = $rounded_rating + 1; $i <= $max_stars; $i++) { ?>
																		<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 0.859375L9.79611 6.38724H15.6085L10.9062 9.80365L12.7023 15.3315L8 11.9151L3.29772 15.3315L5.09383 9.80365L0.391548 6.38724H6.20389L8 0.859375Z" fill="grey"/></svg>
																	<?php } ?>
																</div>
															<?php } ?>

													</div>
												</div>
												<svg width="168" height="122" viewBox="0 0 168 122" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M163.183 17.4865C170.689 12.2766 167.002 0.499937 157.865 0.499941L11.0866 0.499997C5.97351 0.499999 1.81388 4.61718 1.76144 9.73001L0.709013 112.344C0.631363 119.915 9.13196 124.418 15.3519 120.101L163.183 17.4865Z" fill="#9AFF00"/></svg>
											</div>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</section>
		<?php } ?>




	</main>

<?php
get_footer();
