<?php
/**
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	<?php
		// Show the selected front page content.
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/page/content', 'front-page' );
			endwhile;
		else :
			get_template_part( 'template-parts/post/content', 'none' );
		endif;
		?>

		<article class="impreza twentyseventeen-panel page type-page status-publish hentry" >
			<div class="panel-image" style="background-image: url(<?php the_field('impreza_img') ?>);">
				<div class="panel-image-prop"></div>
			</div>
			<div class="panel-content">
				<div class="wrap">
					<div class="entry-header">
						<h2 class="entry-title"><?php the_field( "impreza_title") ?></h2>	
					</div>
					<div class="entry-content"><?php the_field("impreza_content") ?></div>
				</div>
			</div>
		</article>
		<article class="history twentyseventeen-panel page type-page status-publish hentry" >
			<div class="panel-image" style="background-image: url(<?php the_field('history_img') ?>);">
				<div class="panel-image-prop"></div>
			</div>
			<div class="panel-content">
				<div class="wrap">
					<div class="entry-header">
						<h2 class="entry-title"><?php the_field('history_title') ?></h2>	
					</div>
					<div class="entry-content"><?php the_field('history_content') ?></div>
					<div class="text-center">
						<a href="<?php the_field('history_link') ?>" class="btn text-center"><?php pll_e('Читати далі') ?></a>
					</div>
					
				</div>
			</div>
		</article>
		<section class="organizators twentyseventeen-panel page type-page status-publish hentry" >
			<div class="panel-image" style="background-image: url(<?php the_field('organizators_img') ?>);">
				<div class="panel-image-prop"></div>
			</div>
			<div class="panel-content">
				<div class="wrap organizators-wrap">
					<div class="entry-header">
							<h2 class="entry-title"><?php the_field('organizators_title') ?></h2>	
					</div>
				</div>
			</div>
			<ul class="organizator-slider"> 
				
			<?php
			if( have_rows('organizators_slider') ):
				while ( have_rows('organizators_slider') ) : the_row(); ?>

				<li style="background: url(<?php the_sub_field('organizators_img')?>) no-repeat center top/cover">
					<div class="organizator-description">
						<h3><?php the_sub_field('organizators_name') ?></h3>
						<p><?php the_sub_field('organizators_description') ?></p>
					</div>
				</li>

			<?php   endwhile;
			else :
			endif;
			?>

			</ul>
		</section>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
