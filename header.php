<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package zenzero
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php 
if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
} else {
    do_action( 'wp_body_open' );
}
?>
<div id="page" class="hfeed site">
	<?php if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) : ?>
		<header id="masthead" class="site-header">
			<div class="site-branding">
				<a href="/"><img src="<?php bloginfo('template_url'); ?>/images/fco-logo.png"></a>
			</div>
			
			<?php $zenzero_theme_options_socialheader = get_theme_mod('zenzero_theme_options_socialheader', '');  
			if ($zenzero_theme_options_socialheader == 1) : ?>
			<?php zenzero_social_button(); ?>
			<?php endif; ?>

			<nav id="site-navigation" class="main-navigation smallPart">
				<button class="menu-toggle" aria-label="<?php esc_attr_e( 'Main Menu', 'zenzero' ); ?>"><?php esc_html_e( 'Main Menu', 'zenzero' ); ?><i class="fa fa-align-justify"></i></button>
				<?php wp_nav_menu(array('theme_location' => 'primary', 'exclude' => '223')); /* Exclude "Impressum und Datenschutz" */ ?>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->
	<?php endif; ?>
	<div id="content" class="site-content">