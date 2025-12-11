<?php
/**
 * Template Name: Policy
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

	<main id="primary" class="site-main policy-page position">
		<span class="green-left"></span>
		<span class="green-right"></span>

		<div class="container">
			<h1><?php the_title(); ?></h1>
			<div class="policy-page__wrapper">
				<div class="policy-page__content">
					<?php the_content(); ?>
				</div>
				<div class="policy-page__image">
					<svg width="362" height="624" viewBox="0 0 362 624" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M85.7029 180.808L37.7266 198.63V118.762L85.7029 90.1073V180.808Z" fill="white"/><path d="M235.457 125.207L148.793 157.395V52.3669L235.457 0.570984V125.207Z" fill="white"/><path d="M37.7286 278.459L0 283.934V212.647L37.7286 198.63V278.459Z" fill="white"/><path d="M148.8 262.386L85.7012 271.51V180.809L148.8 157.396V262.386Z" fill="white"/><path d="M361.999 231.478L235.457 249.804V125.207L361.999 78.2255V231.478Z" fill="white"/><path d="M85.7029 362.211L37.7266 358.328V278.46L85.7029 271.51V362.211Z" fill="white"/><path d="M235.457 374.442L148.793 367.375V262.385L235.457 249.805V374.442Z" fill="white"/><path d="M37.7286 438.157L0 426.547V355.26L37.7286 358.327V438.157Z" fill="white"/><path d="M148.8 472.365L85.7012 452.951V362.211L148.8 367.375V472.365Z" fill="white"/><path d="M361.999 538.022L235.457 499.078V374.441L361.999 384.769V538.022Z" fill="white"/><path d="M85.7029 543.652L37.7266 518.026V438.158L85.7029 452.951V543.652Z" fill="white"/><path d="M235.457 623.675L148.793 577.354V472.364L235.457 499.078V623.675Z" fill="white"/></svg>
				</div>
			</div>
		</div>
	</main>
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
<?php
get_footer();
