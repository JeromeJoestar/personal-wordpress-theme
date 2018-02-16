<nav id="mobileNavBar" class="hidden-lg">
    <ul>
        <?php

if(have_rows('nav_item')):

while(have_rows('nav_item')): the_row();
    $icon = get_sub_field('nav_item_icon');
    $title = get_sub_field('nav_item_title');
    $url = get_sub_field('nav_item_url');
    $iconURL = $icon['url'];
?>

            <li>
                <a href="<?php echo $url?>">
                    <?php echo file_get_contents($iconURL); ?>
                    <span><?php echo $title ?></span>
                </a>
                
            </li>
            <?php
endwhile;
    
else:
endif;
?>
    </ul>
</nav>