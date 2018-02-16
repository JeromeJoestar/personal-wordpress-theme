<?php 

$title = get_field('skill_section_title');
$subTitle = get_field('skill_section_subtitle');
$skillItem = get_field('skill_item');
$buttonText = get_field('skill_section_button_text');
$resume = get_field('skill_section_resume');

?>


    <section id="skills">
        <div>
            <h2><?php echo $title ?></h2>
            <h3><?php echo $subTitle ?></h3>
            <div class="templateContainer row">
                <ul>

    <?php

        if(have_rows('skill_item')):
            while(have_rows('skill_item')): the_row();
                $itemIcon = get_sub_field('skill_item_icon');
                $itemTitle = get_sub_field('skill_item_title');
                $iconURL = $itemIcon['url'];
    ?>
                        <li class="col-sm-6 col-md-4 col-centered">
                            <h3><?php echo file_get_contents($iconURL); ?><?php echo $itemTitle ?></h3>
                            <ul>
                                <?php
                                
                                    if(have_rows('skill_item_list')):
                                
                                while(have_rows('skill_item_list')): the_row();
                                $skillItemDescription = get_sub_field('skill_item_description');
                                ?>
                                <li><?php echo $skillItemDescription ?></li>
                                <?php
                                        endwhile;

                                    else:
                                    endif;
                                ?>
                            </ul>
                        </li>
                        <?php
    endwhile;

                        else:
                        endif;
                ?>


                </ul>
            </div>
            <a href="<?php echo $resume['url'] ?>" download>
                <?php echo $buttonText ?>
            </a>
        </div>
    </section>
