<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package zenzero
 */
?>

	</div><!-- #content -->
	<?php if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) : ?>
		<footer id="colophon" class="site-footer">
			<div class="site-info smallPart">
				<?php $zenzero_copyrightText = get_theme_mod('zenzero_theme_options_copyright', '&copy; 2011-'.date('Y').' FCO'); ?>
				<?php echo wp_kses($zenzero_copyrightText, zenzero_allowed_html()); ?>
				<span class="sep"> | </span>
				<a target="_blank" href="https://github.com/mheyd/zenzero-fco" rel="noopener noreferrer" title="Zenzero-FCO">Zenzero-FCO</a> by Manfred Heyd
				| based on 
				<a target="_blank" href="https://crestaproject.com/downloads/zenzero/" rel="noopener noreferrer" title="Zenzero Theme">Zenzero</a> by CrestaProject
			</div><!-- .site-info -->
			<?php $zenzero_hideSearch = get_theme_mod('zenzero_theme_options_hidesearch', '1'); ?>
			<div class="site-social smallPart">
				<a href="/impressum/">Impressum und Datenschutz</a>
				<a href="https://www.facebook.com/FCObergessenbach/" title="Facebook"><i class="fa spaceLeftRight fa-facebook"><span class="screen-reader-text"><?php esc_html_e( 'Facebook', 'zenzero' ); ?></span></i></a>
				<a href="<?php esc_url(bloginfo( 'rss2_url' )); ?>" title="<?php esc_attr_e( 'RSS', 'zenzero' ); ?>"><i class="fa spaceLeftRight fa-rss"><span class="screen-reader-text"><?php esc_html_e( 'RSS', 'zenzero' ); ?></span></i></a>
			</div>
		</footer><!-- #colophon -->
	<?php endif; ?>
</div><!-- #page -->
<?php get_sidebar(); ?>
<a href="#top" id="toTop" aria-hidden="true" class="showTop"><i class="fa fa-angle-up"></i></a>
<?php if ($zenzero_hideSearch == 1 ) : ?>
	<div id="open-search" class="showSearch"><i class="fa fa-search"></i></div>
	<!-- Start: Search Form -->
	<div id="search-full">
		<div class="search-container">
			<form id="search-form" method="get" action="<?php echo esc_url(home_url( '/' )); ?>">
				<input id="search-field" type="text" name="s" value="" placeholder="<?php esc_attr_e('Type here and hit enter...', 'zenzero'); ?>" />
			</form>
			<span><a id="close-search"><i class="fa fa-close"></i> <?php esc_html_e('Close', 'zenzero'); ?></a></span>
		</div>
	</div>
	<!-- End: Search Form -->
<?php endif; ?>
<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="open-sidebar" class="showSide"><span class="sidebarButton"></span></div>
<?php endif; ?>
<?php wp_footer(); ?>

</body>
</html>
