<?php
/* 
Template Name: Симфонічна майстерня
*/
?>
<?php get_header(); ?>
<div class="wrap">
    <main id="main" class="site-main" role="main">
        <h1 class="title text-center"><?php the_title() ?></h1>
        <ul>
        <?php
            if( have_rows('workshop') ):
            while ( have_rows('workshop') ) : the_row();?>

            <li class="symfony-item">
                <h2 class="symfony-title"><?php the_sub_field('workshop_title') ?></h2>
                <div><?php the_sub_field('workshop_description') ?></div> 
            </li>

        <?php endwhile;
        else :
               echo 'Не знайдено';
        endif;
        ?>          
        </ul>
    </main><!-- #main -->
</div><!-- .wrap -->

<?php get_footer(); ?>
