<?php

$title = get_field('contact_section_title');
$subTitle = get_field('contact_section_subtitle');

?>
  

  <section id="contact">
  
  <div>
   <h2><?php echo $title ?></h2>
      <h3><?php echo $subTitle ?></h3>
    <span style="text-align: left; display: block; max-width: 350px; margin-left: auto; margin-right: auto;">* denotes a required field.</span>
    <?php echo do_shortcode( '[contact-form-7 id="4" title="Contact form 1"]' ); ?>
      </div>
</section>