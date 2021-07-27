<?php


/*
Template Post Type: works
*/

get_header();
$workNumber           = get_field( 'work_number' );
$workTitle            = get_field( 'work_title' );
$workDescription      = get_field( 'work_description' );
$workYearTitle        = get_field( 'work_year_title' );
$workYear             = get_field( 'work_year' );
$workServiceTitle     = get_field( 'work_service_title' );
$workServices         = get_field( 'work_services' );
$workLinkTitle        = get_field( 'work_link_title' );
$workLink             = get_field( 'work_link' );
$workNextProject      = get_field( 'work_next_project' );
$workNextProjectTitle = get_field( 'work_next_project_title' );

$image1 = get_field( 'project_image_1' );
$image2 = get_field( 'project_image_2' );
$image3 = get_field( 'project_image_3' );
$image4 = get_field( 'project_image_4' );
$image5 = get_field( 'project_image_5' );
$image6 = get_field( 'project_image_6' );


?>
<div class="page single-work">
    <div class="study-details">
        <div class="container">
            <div class="identification">
                <div class="singlework-index">
                    <div class="line"></div>
                    <h2 class="module"><?= sprintf( "%02d", $workNumber ) ?></h2>
                </div>
                <div class="singlework-name">
                    <div class="line"></div>
                    <a href="<?= get_home_url() . '/works' ?>" class="module">Back to projects</a>
                </div>
            </div>
            <h1 class="module"><?= $workTitle ?></h1>
            <div class="casestudy">

                <div class="col-11 col-lg-7">
                    <div class="casestudy-left">
                        <p class="module"><?= $workDescription ?></p>
                    </div>
                </div>
                <div class="col-1 col-lg-5">
                    <div class="casestudy-right">
                        <span class="module">Introduction</span>
                    </div>
                </div>
            </div>
            <div class="singlework-footer">
                <div class="footer-item">
                    <div class="top">
                        <p class="module"><?= $workServiceTitle ?></p>
                    </div>
                    <div class="bottom">
                        <p class="module"><?= $workServices ?></p>
                    </div>
                </div>
                <div class="footer-item">
                    <div class="top">
                        <p class="module"><?= $workYearTitle ?></p>
                    </div>
                    <div class="bottom">
                        <p class="module"><?= $workYear ?></p>
                    </div>
                </div>
                <div class="footer-item">
                    <div class="top">
                        <p class="module"><?= $workLinkTitle ?></p>
                    </div>
                    <div class="bottom">
                        <a class="module" href="<?= $workLink['url'] ?>"><?= $workLink['title'] ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="first-view">
        <img src="<?= $image1['url'] ?>" class="module">
    </div>
    <div class="second-view">
        <img src="<?= $image2['url'] ?>" class="module">
    </div>
    <div class="third-view">
        <div class="container">
            <img src="<?= $image3['url'] ?>" class="module">
            <img src="<?= $image4['url'] ?>" class="module">
        </div>
    </div>
    <div class="fourth-view">
        <img src="<?= $image5['url'] ?>" class="module">
    </div>
    <div class="fifth-view">
        <img src="<?= $image6['url'] ?>" class="module">

    </div>
    <div class="sixth-view">
        <div class="container">
            <div class="content-circle">
                <h1 class="module">
                    <a href="<?= $workNextProject['url'] ?>"><?= $workNextProjectTitle ?></a>
                </h1>
            </div>
            <div class="img-circle">
                <svg class="img-svg module" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink" width="640.379" height="619.277"
                     viewBox="0 0 640.379 619.277">
                    <defs>
                        <linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#da272d"/>
                            <stop offset="1" stop-color="#00aa40"/>
                        </linearGradient>
                    </defs>
                    <path id="Path_520" data-name="Path 520"
                          d="M341.111,25.182c197.95,0,309.978,94.59,309.978,292.54S539.061,644.459,341.111,644.459,10.71,515.672,10.71,317.722,143.16,25.182,341.111,25.182Z"
                          transform="translate(-10.71 -25.182)" fill="url(#linear-gradient)"
                          style="mix-blend-mode: color-dodge;isolation: isolate"/>
                </svg>

            </div>
            <div class="circle-social-icon">
				<?php if ( have_rows( 'social_links', 'option' ) ): ?>
					<?php while ( have_rows( 'social_links', 'option' ) ): the_row();
						$link = get_sub_field( 'media_link' ); ?>
                        <a href="<?= $link['url'] ?>" class="module"><?= $link['title'] ?></a>
					<?php endwhile; ?>
				<?php endif ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>



