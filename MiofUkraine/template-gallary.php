<?php
/* 
Template Name: Галерея
*/
?>

<?php get_header(); ?>

    <h1 class="title text-center"><?php the_title() ?></h1>

    <section class="gallary-years">
        <ul class="gallary-years-list">
        <?php
            $first_btn = get_field('gallary_title1');
            $second_btn = get_field('gallary_title2');
            $third_btn = get_field('gallary_title3');
            $four_btn = get_field('gallary_title4');

            if(!empty($first_btn)){ ?>
                <li class="gallary-years-btn"><?= $first_btn ?></li>
            <?php }

             if(!empty($second_btn)){ ?>
                <li class="gallary-years-btn"><?= $second_btn ?></li>
            <?php }
          
             if(!empty($third_btn)){ ?>
                <li class="gallary-years-btn"><?= $third_btn ?></li>
            <?php }

            if(!empty($four_btn)){ ?>
                <li class="gallary-years-btn year-btn-active"><?= $four_btn ?></li>
            <?php }
            ?>
            
        </ul>
        <ul class="gallary-list">
        <?php
            $first_gallary = get_field('gallary_item1');
            $second_gallary = get_field('gallary_item2');
            $third_gallary = get_field('gallary_item3');
            $four_gallary = get_field('gallary_item4');

            if(isset($first_btn)){ ?>
                <li class="gallary-list-item"><?= $first_gallary ?></li>
            <?php }
            
            if(isset($first_btn)){ ?>
                <li class="gallary-list-item"><?= $second_gallary ?></li>
            <?php }

            if(isset($first_btn)){ ?>
                <li class="gallary-list-item"><?= $third_gallary ?></li>
            <?php }

            if(isset($first_btn)){ ?>
                <li class="gallary-list-item gallary-item-active"><?= $four_gallary ?></li>
            <?php }
            ?>
        </ul>
    </section>
    <section class="video">
        <h2 class="text-center"><?php pll_e('Відео') ?></h2>
        <div class="video-wrap">
            <div class="video">
                <?php the_field('video') ?>
            </div>
            <div class="text-center description-wrap">
                <h3><?php the_field('video_title') ?></h3>
                <p><?php the_field('video_description') ?></p>
                <a href="<?php the_field('video_link') ?>" target="_blank" class="btn"><?php pll_e('Більше відео') ?></a>
            </div>
        </div>	  	
    </section>
       
<?php get_footer(); ?>