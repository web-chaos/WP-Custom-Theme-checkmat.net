<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package chess
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header id="masthead" class="header">	
		<div class="container">
			<div class="header__wrapper">
				<div class="header__logo"><?php the_custom_logo(); ?></div>
				<a href="#" class="hamburger"><svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.3335 16.5H26.6668M5.3335 8.5H26.6668M5.3335 24.5H26.6668" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
				<nav class="header__nav nav">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'container'		 => ''
							)
						);
					?>
					<?php if( get_field( 'header_download_link', 'option' ) ){ ?>
						<a href="<?php echo get_field( 'header_download_link', 'option' ); ?>" class="button" target="_blank" rel="nofollow"><?php echo esc_html__( 'Download', 'chess' ); ?></a>
					<?php } ?>
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-lang',
								'menu_id'        => 'lang-menu',
								'menu_class'	 => 'menu__lang-list menu__language',
								'container'		 => false,
							)
						);
					?>
				</nav>
			</div>
		</div>
	</header>

	<div class="mob-nav">
		<div class="mob-nav__header">
			<?php the_custom_logo(); ?>
			<a href="#" class="mob-nav__close"><svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 9L24 25" stroke="white" stroke-width="3" stroke-linecap="round"/><path d="M24 9L8 25" stroke="white" stroke-width="3" stroke-linecap="round"/></svg></a>
		</div>
		<div class="mob-nav__menu">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'container'		 => ''
					)
				);
			?>
		</div>
		<div class="mob-nav__store">
			<?php if( get_field( 'appstore', 'option' ) ){ ?>
				<a href="<?php echo get_field( 'appstore', 'option' ); ?>" rel="nofollow" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/img/appstore.svg" alt="appstore" width="152" height="48">
				</a>
			<?php } ?>

			<?php if( get_field( 'google_play', 'option' ) ){ ?>
				<a href="<?php echo get_field( 'google_play', 'option' ); ?>" rel="nofollow" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/img/googleplay.svg" alt="googleplay" width="152" height="48">
				</a>
			<?php } ?>
		</div>
		<div class="mob-nav__link">
			<?php if( get_field( 'facebook', 'option' ) ){ ?>
				<a href="<?php echo get_field( 'facebook', 'option' ); ?>" rel="nofollow" target="_blank">
					<svg width="50" height="51" viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_708_10164)"><path d="M45.8332 25.1785C45.8332 13.6785 36.4998 4.34521 24.9998 4.34521C13.4998 4.34521 4.1665 13.6785 4.1665 25.1785C4.1665 35.2619 11.3332 43.6577 20.8332 45.5952V31.4285H16.6665V25.1785H20.8332V19.9702C20.8332 15.9494 24.104 12.6785 28.1248 12.6785H33.3332V18.9285H29.1665C28.0207 18.9285 27.0832 19.866 27.0832 21.0119V25.1785H33.3332V31.4285H27.0832V45.9077C37.604 44.866 45.8332 35.991 45.8332 25.1785Z" fill="white"/></g><defs><clipPath id="clip0_708_10164"><rect width="50" height="50" fill="white" transform="translate(0 0.178711)"/></clipPath></defs></svg>
				</a>
			<?php } ?>
			
			<?php if( get_field( 'instagram', 'option' ) ){ ?>
				<a href="<?php echo get_field( 'instagram', 'option' ); ?>" rel="nofollow" target="_blank">
					<svg width="50" height="51" viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M26.799 7.67871C28.7678 7.68396 29.767 7.69446 30.6298 7.71896L30.9693 7.73121C31.3613 7.74521 31.748 7.76271 32.2153 7.78371C34.0773 7.87121 35.3478 8.16521 36.4625 8.59746C37.6175 9.04196 38.5905 9.64396 39.5635 10.6152C40.4537 11.4897 41.1423 12.548 41.5813 13.7162C42.0135 14.831 42.3075 16.1015 42.395 17.9652C42.416 18.4307 42.4335 18.8175 42.4475 19.2112L42.458 19.5507C42.4843 20.4117 42.4948 21.411 42.4983 23.3797L42.5 24.6852V26.9777C42.5043 28.2542 42.4909 29.5306 42.4598 30.8067L42.4493 31.1462C42.4353 31.54 42.4178 31.9267 42.3968 32.3922C42.3093 34.256 42.0118 35.5247 41.5813 36.6412C41.1423 37.8094 40.4537 38.8677 39.5635 39.7422C38.689 40.6324 37.6307 41.321 36.4625 41.76C35.3478 42.1922 34.0773 42.4862 32.2153 42.5737L30.9693 42.6262L30.6298 42.6367C29.767 42.6612 28.7678 42.6735 26.799 42.677L25.4935 42.6787H23.2028C21.9257 42.6832 20.6487 42.6698 19.372 42.6385L19.0325 42.628C18.6171 42.6122 18.2017 42.5941 17.7865 42.5737C15.9245 42.4862 14.654 42.1922 13.5375 41.76C12.37 41.3208 11.3123 40.6322 10.4383 39.7422C9.54742 38.8679 8.85821 37.8095 8.41877 36.6412C7.98652 35.5265 7.69252 34.256 7.60502 32.3922L7.55252 31.1462L7.54377 30.8067C7.51151 29.5306 7.49692 28.2542 7.50002 26.9777V23.3797C7.49518 22.1033 7.50801 20.8268 7.53852 19.5507L7.55077 19.2112C7.56477 18.8175 7.58227 18.4307 7.60327 17.9652C7.69077 16.1015 7.98477 14.8327 8.41702 13.7162C8.85748 12.5476 9.54791 11.4892 10.44 10.6152C11.3135 9.72542 12.3706 9.03684 13.5375 8.59746C14.654 8.16521 15.9228 7.87121 17.7865 7.78371C18.252 7.76271 18.6405 7.74521 19.0325 7.73121L19.372 7.72071C20.6481 7.68962 21.9246 7.6762 23.201 7.68046L26.799 7.67871ZM25 16.4287C22.6794 16.4287 20.4538 17.3506 18.8128 18.9915C17.1719 20.6325 16.25 22.8581 16.25 25.1787C16.25 27.4994 17.1719 29.725 18.8128 31.3659C20.4538 33.0068 22.6794 33.9287 25 33.9287C27.3207 33.9287 29.5463 33.0068 31.1872 31.3659C32.8281 29.725 33.75 27.4994 33.75 25.1787C33.75 22.8581 32.8281 20.6325 31.1872 18.9915C29.5463 17.3506 27.3207 16.4287 25 16.4287ZM25 19.9287C25.6895 19.9286 26.3722 20.0643 27.0092 20.328C27.6462 20.5917 28.225 20.9784 28.7126 21.4658C29.2002 21.9532 29.587 22.5319 29.8509 23.1688C30.1149 23.8057 30.2508 24.4884 30.2509 25.1778C30.251 25.8673 30.1153 26.55 29.8516 27.187C29.5879 27.824 29.2013 28.4028 28.7138 28.8904C28.2264 29.378 27.6477 29.7648 27.0108 30.0287C26.3739 30.2927 25.6912 30.4286 25.0018 30.4287C23.6094 30.4287 22.274 29.8756 21.2895 28.891C20.3049 27.9065 19.7518 26.5711 19.7518 25.1787C19.7518 23.7863 20.3049 22.451 21.2895 21.4664C22.274 20.4818 23.6094 19.9287 25.0018 19.9287M34.1893 13.8037C33.6091 13.8037 33.0527 14.0342 32.6425 14.4444C32.2322 14.8547 32.0018 15.411 32.0018 15.9912C32.0018 16.5714 32.2322 17.1278 32.6425 17.538C33.0527 17.9482 33.6091 18.1787 34.1893 18.1787C34.7694 18.1787 35.3258 17.9482 35.7361 17.538C36.1463 17.1278 36.3768 16.5714 36.3768 15.9912C36.3768 15.411 36.1463 14.8547 35.7361 14.4444C35.3258 14.0342 34.7694 13.8037 34.1893 13.8037Z" fill="white"/></svg>
				</a>
			<?php } ?>

			<?php if( get_field( 'x', 'option' ) ){ ?>
				<a href="<?php echo get_field( 'x', 'option' ); ?>" rel="nofollow" target="_blank">
					<svg width="50" height="51" viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_708_10166)"><mask id="mask0_708_10166" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="7" y="7" width="36" height="37"><path d="M7 7.17871H43V43.1787H7V7.17871Z" fill="white"/></mask><g mask="url(#mask0_708_10166)"><path d="M35.35 8.86572H40.8709L28.8109 22.6846L43 41.492H31.8914L23.1846 30.0877L13.2331 41.492H7.70714L20.6054 26.7063L7 8.86829H18.3914L26.2497 19.2903L35.35 8.86572ZM33.4086 38.18H36.4686L16.72 12.0054H13.4389L33.4086 38.18Z" fill="white"/></g></g><defs><clipPath id="clip0_708_10166"><rect width="36" height="36" fill="white" transform="translate(7 7.17871)"/></clipPath></defs></svg>
				</a>
			<?php } ?>
		</div>
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'footer-menu',
					'container'		 => ''
				)
			);
		?>
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-lang',
					'menu_id'        => 'lang-menu',
					'menu_class'	 => 'menu__lang-list menu__language--mobile',
					'container'		 => false,
				)
			);
		?>
	</div>