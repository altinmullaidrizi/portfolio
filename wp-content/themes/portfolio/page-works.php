<?php

/*
Template Name: Works
*/

$args      = array(
	'numberposts' => - 1,
	'post_type'   => 'works',
    'order' => 'ASC',
    'orderby' => 'work_number'
);
$the_query = new WP_Query( $args );

get_header();
?>

    <div class="page page-works">
        <div class="container">
            <div class="swiper-container">
                <div class="swiper-wrapper">
	                <?php if ( $the_query->have_posts() ):
		                while ( $the_query->have_posts() ) : $the_query->the_post();
			                $workNumber = get_field( 'work_number' );
			                $workTitle  = get_field( 'work_title' );
			                $workSvg  = readSvg( get_field( 'work_slider_svg')['url']);
			                $link = get_permalink();
			                ?>
                            <div class="swiper-slide">
                                <h1 class="work-number module"><?=sprintf("%02d", $workNumber)?></h1>
                                <h1><a href="<?=$link?>" class="module"><?=$workTitle?></a></h1>
				                <?=$workSvg?>
                            </div>
			                <?php

		                endwhile;
		                wp_reset_postdata();
	                else:?>
                        <div class="swiper-slide">
                            <h1 class="work-number module">00</h1>
                            <h1 class="module">No works found!</h1>
                        </div>
                    <?php
	                endif;
	                ?>
                </div>
                <div class="swiper-scrollbar"></div>
                <div class="projects-text">
                    <span class="module d-none d-sm-block">Scroll to navigate projects :)</span>
                    <span class="module d-block d-sm-none">Swipe to navigate projects :)</span>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>