<?php 

$title = get_field('project_section_title');
$subTitle = get_field('project_section_subtitle');
$index = 1;
?>   

<section id="projects">
    <div>
        <h2><?php echo $title ?></h2>
        <h3><?php echo $subTitle ?></h3>
        <div class="projectListContainer">
            <?php $totalNum = count( get_field('project_item')); ?>
           <ul>
            <?php
    if(have_rows('project_item')):
               while(have_rows('project_item')): the_row();
               $itemImage = get_sub_field('project_item_image');
               $itemDescription = get_sub_field('project_item_description');
               $itemURL = get_sub_field('project_item_url');
               ?>
               <li class="projectItems col-lg-4 col-centered" style="background-image: url('<?php echo $itemImage['url'] ?>');     background-size: cover; background-repeat: no-repeat; background-position: 50% 50%"><a target="_blank" href="<?php echo $itemURL ?>"><div class="projectDetails"><span><?php echo $itemDescription ?></span></div></a></li>
               <?php if($index % 3 === 0): ?>
                   <?php if ($index < $totalNum): ?>
            </ul>
            <ul class="hiddenProjectList">
               
               <?php elseif ($index == $totalNum): ?>
            </ul>
               <?php endif; ?>
            <?php endif; ?>
                
            <?php $index++; ?>
            <?php endwhile;

                    else:
                    endif;
            ?>          
        </div>
        <?php if($index > 3): ?>
        <a id="seeMoreProjects">See More Projects</a>
        <?php endif; ?>
    </div>
</section> 






