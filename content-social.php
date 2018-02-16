
<?php

$title = get_field('social_section_title');
$subTitle = get_field('social_section_subtitle');
    $image = get_field('social_section_image');
?>


<section id="social" style="background-image:url('<?php echo $image['url'] ?>')">
    <div>
        <h2><?php echo $title ?></h2>
        <h3><?php echo $subTitle ?></h3>
        <div class="templateContainer row">
            <ul>
                <?php

    if(have_rows('social_item')):

while(have_rows('social_item')): the_row();
$itemIcon = get_sub_field('social_item_icon');
$itemTitle = get_sub_field('social_item_title');
$itemURL = get_sub_field('social_item_url');
$itemDescription = get_sub_field('social_item_description');
$itemImage = $itemIcon['url'];
                ?>

                <li class="col-sm-6 col-md-6 col-lg-6 col-centered">
                    <?php echo file_get_contents($itemImage); ?>
                    <p><a href="<?php echo $itemURL ?>" target="_blank"><?php echo $itemTitle ?></a><?php echo $itemDescription ?></p>
                </li>
                <?php
    endwhile;

                        else:
                        endif;
                ?>

            </ul>
        </div>
    </div>
</section> 




