<?php
/* 
Template Name: Контакти
*/
?>

<?php get_header(); ?>
     
<div class="wrap">
    <main id="main" class="site-main" role="main">
        <h1 class="title text-center"><?php the_title() ?></h1>
        <div class="contact-wrap">
            <div class="contact-form">
                <h2><?php the_field('form_title') ?></h2>
                <?= do_shortcode(get_field('form')); ?>
            </div>
            <div class="contact-info">
                <ul class="managers-info">
                    <li>
                        <p class="manager-position"><?php the_field('manager_position1') ?></p>
                        <div class="manager-name">
                            <p><?php the_field('manager_name1') ?></p>
                            <a href="mailto:<?php the_field('manager_mail1') ?>"><?php the_field('manager_mail1') ?></a> 
                        </div>
                    </li>
                    <li>
                        <p class="manager-position"><?php the_field('manager_position2') ?></p>
                        <div class="manager-name">
                            <p><?php the_field('manager_name2') ?></p> 
                            <a href="mailto:<?php the_field('manager_mail2') ?>"><?php the_field('manager_mail2') ?></a>
                        </div> 
                    </li>
                </ul>
            </div>
        </div>
    </main><!-- #main -->
</div><!-- .wrap -->
<?php get_footer(); ?>