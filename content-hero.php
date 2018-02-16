<?php

$image = get_field('hero_image');
$title = get_field('hero_title');
$subtitle = get_field('hero_subtitle');
$signature = get_field('hero_signature');

?>

<section id="hero" data-type="background" data-speed="50" style="background-image:url(<?php echo $image['url'] ?>)">
    <div>
        <h2><?php echo $title ?></h2>
        <h3><?php echo $subtitle ?></h3>
        <p><?php echo $signature ?></p>
    </div>
</section>