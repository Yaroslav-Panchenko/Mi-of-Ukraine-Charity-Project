<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */
?>
<footer  class="site-footer">
	<div class="wrap footer-wrap">
		<div class="footer-social">
			<?php $email_footer = get_theme_mod('email_address_settings'); ?>	
				<h3><?php pll_e('Напишіть нам'); ?></h3>
				<a href="mailto:<?= $email_footer['email']?>" class="footer-mail"><?= $email_footer['email']?></a>
				<?php 	
				$soc_icons = get_theme_mod('social_icons_settings');
				if (!empty($soc_icons['links'])) { ?>
					<ul class="social-icons">
					<?php $social_icons_order = array('Facebook', 'Youtube', 'Instagram', 'Twitter', 'VK');
					foreach ($social_icons_order as $item) {
						if (!empty($soc_icons['links'][$item])) {?>

						<li class="social-icons-item">
							<a href="<?= $soc_icons['links'][$item] ?> " target="_blank" rel = "noopener"><span class="screen-reader-text"><?=$item?></span><svg class="icon icon-<?= $item = mb_strtolower($item)?>" aria-hidden="true" role="img"> <use href="#icon-<?=$item?>" xlink:href="#icon-<?=$item?>"></use> </svg></a>
						</li>
						
						<?php }
					} ?>
					</ul>
				<?php } ?> 
		</div> 
		<?php get_template_part( 'template-parts/footer/footer', 'widgets' ) ?>		
	</div>
</footer>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
