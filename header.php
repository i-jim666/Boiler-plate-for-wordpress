<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/* Custom root paths */

define('ROOTPATH',get_template_directory_uri());
define('ICONS',get_template_directory_uri().'/src/assets/icons');
define('IMG',get_template_directory_uri().'/src/assets/images');
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://api.fontshare.com/css?f[]=switzer@300,400,500,700&f[]=clash-display@300,400,500,700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>

<!-- 
<header>
	<div class="header-desktop" id="header-desktop">

		<div class="container">

			<div class="left-col">
				<div class="site-logo">
					<a href="php echo home_url('/') ?>">
						php echo file_get_contents(wp_get_attachment_url(carbon_get_theme_option('header_logo'))); ?>
					</a>
				</div>
				<nav>
					php
						$menu = wp_nav_menu(array(
							'theme_location'  => '',
							'menu'            => carbon_get_post_meta($post->ID, 'page_menu'),
							'container'       => '',
							'container_class' => false,
							'container_id'    => '',
							'menu_class'      => 'menu nav-item',
							'menu_id'         => 'primary-menu',
							'echo'            => false,
							// 'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'depth'           => '',
							'walker'          => ''
						) );
						echo $menu;
					?>
				</nav>
			</div>
			
			<div class="right-col">
				php if(!empty(carbon_get_theme_option('login_url'))): ?>
				<a href="php echo carbon_get_theme_option('login_url') ?>" class="login-btn btn">
					php echo carbon_get_theme_option('login_text') ?>
				</a>
				php endif ?>
				php if(!empty(carbon_get_theme_option('signup_url'))): ?>
				<a href="php echo carbon_get_theme_option('signup_url') ?>" class="sign-up-btn btn">
					php echo carbon_get_theme_option('signup_text') ?>	
				</a>
				php endif ?>
			</div>

			<div class="hamburger">
				<div class="open">
					php echo file_get_contents(ICONS.'/ham.svg') ?>
				</div>
				<div class="close">
					<img src="php echo ICONS.'/ham-close.svg' ?>" alt="Hamburger close">
				</div>
			</div>

		</div>

	</div>
</header>


<div class="mobile-navigation" id="mobile-navigation">
	<div class="container">
		<nav>
			php
				$menu = wp_nav_menu(array(
					'theme_location'  => '',
					'menu'            => carbon_get_post_meta($post->ID, 'page_menu'),
					'container'       => '',
					'container_class' => false,
					'container_id'    => '',
					'menu_class'      => 'menu nav-item',
					'menu_id'         => 'primary-menu-mob',
					'echo'            => false,
					// 'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'depth'           => '',
					'walker'          => ''
				) );
				echo $menu;
			?>
		</nav>

		<div class="bottom-btns">
			php if(!empty(carbon_get_theme_option('login_url'))): ?>
			<a href="php echo carbon_get_theme_option('login_url') ?>" class="login-btn btn">
				php echo carbon_get_theme_option('login_text') ?>
			</a>
			php endif ?>
			php if(!empty(carbon_get_theme_option('signup_url'))): ?>
			<a href="php echo carbon_get_theme_option('signup_url') ?>" class="sign-up-btn btn">
				php echo carbon_get_theme_option('signup_text') ?>
			</a>
			php endif ?>
		</div>
	</div>
</div> -->