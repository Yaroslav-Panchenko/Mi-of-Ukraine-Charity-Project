<?php
/* 
Template Name: Історія
*/
?>

<?php get_header(); ?>
<div class="wrap">
    <main id="main" class="site-main" role="main">
        <?php while ( have_posts() ) :
            the_post();?>
  
            <h1 class="title text-center"><?php the_title() ?></h1>
            <div><?php the_content() ?></div>

        <?php endwhile; 
        ?>
    </main><!-- #main -->
</div><!-- .wrap -->

<?php get_footer(); ?>
