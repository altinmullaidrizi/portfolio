<?php
get_header();

/*
Template Name: Coming soon
*/

$comingSoonTitle = get_field('coming_soon_text');
$comingSoonImg = get_field('coming_soon_image');
$comingSoonImgShadow = get_field('coming_soon_image_shadow');

?>


<div class="page page-comingsoon page-dark">
    <div class="page-center-content">
        <h1 class="module"><?=$comingSoonTitle ?></h1>
    </div>
    <div class="page-bubble module">

        <?=$comingSoonImg?>

        <?=$comingSoonImgShadow?>

    </div>

    <div class="page-dark-svg">

    </div>
</div>


<?php
get_footer();

?>

