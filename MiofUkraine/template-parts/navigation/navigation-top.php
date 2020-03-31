<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentyseventeen' ); ?>">
	<div class="menu-btn-wrap">
		<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
			<?php
			echo twentyseventeen_get_svg( array( 'icon' => 'bars' ) );
			echo twentyseventeen_get_svg( array( 'icon' => 'close' ) );
			pll_e( 'Меню', 'twentyseventeen' );
			?>
		</button>
		<?php $donat_btn = get_theme_mod('donat_button_setting'); 
	if (!empty($donat_btn)) {?>
	
		<a href="#colophon" class="menu-scroll-down mobile-btn"><?php pll_e('Підтримати'); ?></a>
		
	<?php } ?>
	</div>
	<?php the_custom_logo(); ?>
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'top',
			'menu_id'        => 'top-menu',
		)
	);
	?>
		<a href="#colophon" class="menu-scroll-down desktop-btn"><?php pll_e('Підтримати'); ?></a>
		<?php // outputs a flags list (without languages names) ?>
		<ul class="language-list"><?php pll_the_languages(array('show_flags'=>1,'show_names'=>1)); ?></ul>

	
</nav><!-- #site-navigation -->
