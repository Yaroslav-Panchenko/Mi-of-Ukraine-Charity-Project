<?php 
/*
    Template Name: Новини
*/
?>
<?php get_header(); ?>

<div class="wrap">
	<main id="main" class="site-main" role="main">
		<h1 class="title text-center"><?php the_title() ?></h1>
		<?php
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => 1,
		);

		$query = new WP_Query( $args );

		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post(); ?>
				
		<article class="post-item">
			<div class="post-content width">
				<h3><?php the_title() ?></h3>
				<?php the_excerpt(); ?>
				<div class="btn-wrap">
					<a href="<?php bloginfo('template_url'); ?>/vsi-novyny/" class="btn"><?php pll_e('Переглянути всі')?></a>
				</div>
			</div>
			<div class="post-img width">
				<?php the_post_thumbnail(); ?>
			</div>
		</article>
			
			<?php }
		} else {
			echo 'Новин немає';
		}
		wp_reset_postdata();
		?>
	</main>
	<section>
		<h2 class="title text-center"><?php pll_e('Преса') ?></h2>

		<?php if( have_rows('press_articles') ): ?>

		<ul class="press-slider">
			<?php while( have_rows('press_articles') ): the_row(); 

			$description = get_sub_field('content_article');
			$title = get_sub_field('title_article');
			$link = get_sub_field('link_article');
			?>
			<li>
				<article class="press">
					<div class="press-content width">
						<h3><?= $title ?></h3>
						<p><?= $description ?></p>
						<div class="btn-wrap">
							<a href="<?= $link ?>" target="_blank" class="btn press-btn"><?php pll_e('Читати більше') ?></a>
						</div>
					</div>
					<div class="press-img width">
						<?php 
						$img = get_sub_field('img_article') ?>
						<img src="<?= esc_url($img['url']); ?>" alt="<?= esc_attr($img['alt']); ?>">
					</div>
				</article>
			</li>
			<?php endwhile; ?>
			</ul>
			<?php endif; ?>				
	</section>
	<section class="notes-audio">
		<h2 class="notes-title title text-center"><?php pll_e('Ноти і Аудіо') ?></h2>
		<div class="notes-wrap">
			<?php if( have_rows('notna_zbirka') ): ?>

			<ul class="book-slider">
			<?php while( have_rows('notna_zbirka') ): the_row(); 

				$description = get_sub_field('book_description');
				$title = get_sub_field('book_title');
				?>

				<li>
					<?php if( have_rows('book_img_repeat') ): ?>
					<ul class="book-img-slider">				
					<?php while( have_rows('book_img_repeat') ): the_row(); 
						$img = get_sub_field('book_img')
					?>

						<li>
							<img src="<?= esc_url($img['url']); ?>" alt="<?= esc_attr($img['alt']); ?>">
						</li>

					<?php endwhile; ?>
					</ul>
					<?php endif; ?>	
					<div class="notes-description text-center">
						<h3><?= $title ?></h3>
						<p><?= $description ?></p>
						<a href="mailto:<?php the_field('book_email') ?>" class="btn"><?php pll_e('Замовити') ?></a>
					</div>
				</li>
			<?php endwhile; ?>
			</ul>
				<?php endif; ?>			
		</div>
		<div class="audio-wrap text-center">

			<?php if( have_rows('audio') ): ?>
			<ul class="audio-slider">

			<?php while( have_rows('audio') ): the_row(); 
				$audio = get_sub_field('audio_file');
				$description = get_sub_field('audio_description');
				$title = get_sub_field('audio_title');
				?>

				<li>
					<h3><?= $title ?></h3>
					<audio controls controlsList="nodownload" class="audio">
						<source src="<?= $audio ?>">
					</audio>
					<p><?= $description ?></p>
					<a href="mailto:<?php the_field('audio_email') ?>" class="btn"><?php pll_e('Замовити') ?></a>
				</li>
				

			<?php endwhile; ?>
			</ul>
			<?php endif; ?>
			   
		</div>		
	</section>
</div><!-- .wrap -->

<?php get_footer(); ?>


