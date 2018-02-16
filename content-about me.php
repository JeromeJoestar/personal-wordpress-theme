
<?php 
$title = get_field('about_me_section_title');
$subtitle = get_field('about_me_section_subtitle');
$item = get_field('about_me_item');
?>


<section id="aboutMe">
    <div>
        <h2><?php echo $title ?></h2>
        <h3><?php echo $subtitle ?></h3>
        <ul>  <?php

    if(have_rows('about_me_item')):

            while(have_rows('about_me_item')): the_row();
            $itemTitle = get_sub_field('about_me_item_title');
            $itemSubtitle = get_sub_field('about_me_item_description');
            ?>

            <li class="col-lg-3 col-md-6 col-sm-1">
                <h3><?php echo $itemTitle ?></h3>
                <p><?php echo $itemSubtitle ?></p>
            </li>
            <?php
    endwhile;

                    else:
                    endif;
            ?>
            
        </ul>
    </div>
</section>