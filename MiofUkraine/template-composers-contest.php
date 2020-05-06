<?php
/* 
Template Name: Конкурс композиторів
*/
?>

<?php get_header(); ?>
<section class="wrap">
    <div id="main" class="site-main" role="main">
        <h1 class="title text-center"><?php the_field ('title_page') ?></h1>
        <ul>
        <?php
            if( have_rows('composers') ):
            while ( have_rows('composers') ) : the_row();?>

            <li class="symfony-item">
                <h2 class="symfony-title"><?php the_sub_field('composers_item_title') ?></h2>
                <div><?php the_sub_field('composers_item_description') ?></div> 
            </li>

        <?php endwhile;
        else :
               echo 'Не знайдено';
        endif;
        ?>
        </ul>
    </div>
</section>
<section class="jury">
    <h2 class="text-center"><?php pll_e('Жюрі') ?></h2>
    <ul class="jury-slider">    
    <?php
        if( have_rows('jury_slider') ):
        while ( have_rows('jury_slider') ) : the_row(); ?>
            
        <li class="jury-item">
            <?php
            $img = get_sub_field('jury_item_img');
            ?>
			<img src="<?= esc_url($img['url']); ?>" alt="<?= esc_attr($img['alt']); ?>">
            <div class="jury-overlay">
                <h3><?php the_sub_field('jury_item_name') ?></h3>
                <p><?php the_sub_field('jury_item_description') ?></p>
            </div>
        </li>

        <?php   endwhile;
        else :
            echo 'Не знайдено';
        endif;
    ?>     
            
    </ul>	
</section>
<?php get_footer(); ?>
