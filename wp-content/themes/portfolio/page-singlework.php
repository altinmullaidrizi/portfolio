<?php

/*
Template Name: Single Work
*/
get_header();

?>
<div class="page single-work">
    <div class="study-details">
        <div class="container">
            <div class="identification">
                <div class="singlework-index">
                    <div class="line"></div>
                    <h2 class="module">01</h2>
                </div>
                <div class="singlework-name">
                    <div class="line"></div>
                    <a class="module">Back to projects</a>
                </div>
            </div>
            <h1 class="module">T’mijat</h1>
            <div class="casestudy">

                <div class="col-md-7">
                    <div class="casestudy-left">
                        <p class="module">T'mijat is a free platform that allows students in grades 6, 7, 8 and 9 to report bullying at school. These reports are taken by the caretakers of the respective classes and reviewed by them, in case the harassment is on a more serious scale then the psychology of the school will deal with it.<br><br>
                            Their goal is to support and help people who are part of any kind of bullying, so that everyone feels safe and worthy of being educated because peace and education is the right of all of us.</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="casestudy-right">
                        <span class="module">Introduction</span>
                    </div>
                </div>
            </div>
            <div class="singlework-footer">
                <div class="top">
                   <p class="module">Services</p>
                   <p class="module">Year</p>
                   <p class="module">Link</p>
                </div>
                <div class="bottom">
                    <p class="module">Concept, UI UX Design</p>
                    <p class="module">2019</p>
                    <a class="single-work-link module">http://tmijat.com</a>
                </div>

            </div>
        </div>
    </div>
    <div class="first-view">
        <img src="<?= get_template_directory_uri() ?>./images/first-screenshoot.png" class="module">
    </div>
    <div class="second-view">
        <img src="<?= get_template_directory_uri() ?>./images/second-screenshoot.jpg" class="module">
    </div>
    <div class="third-view">
        <div class="container">
            <img src="<?= get_template_directory_uri() ?>./images/third-screenshoot.jpg" class="module">
            <img src="<?= get_template_directory_uri() ?>./images/fourth-screenshoot.jpg" class="module">
        </div>
    </div>
    <div class="fourth-view">
        <img src="<?= get_template_directory_uri() ?>./images/fifth-screenshoot.jpg" class="module">
    </div>
    <div class="fifth-view">
        <img src="<?= get_template_directory_uri() ?>./images/sixth-screenshoot.png" class="module">

    </div>
    <div class="sixth-view">
        <div class="container">
            <div class="content-circle">
                <h1 class="class="module"">
                    next project
                </h1>
            </div>
            <div class="img-circle">
                <svg class="img-svg module" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="640.379" height="619.277" viewBox="0 0 640.379 619.277">
                    <defs>
                        <linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#da272d" />
                            <stop offset="1" stop-color="#00aa40" />
                        </linearGradient>
                    </defs>
                    <path id="Path_520" data-name="Path 520" d="M341.111,25.182c197.95,0,309.978,94.59,309.978,292.54S539.061,644.459,341.111,644.459,10.71,515.672,10.71,317.722,143.16,25.182,341.111,25.182Z" transform="translate(-10.71 -25.182)" fill="url(#linear-gradient)" style="mix-blend-mode: color-dodge;isolation: isolate" />
                </svg>

            </div>
            <div class="circle-social-icon">
	            <?php if (have_rows('social_links', 'option')):?>
		            <?php while (have_rows('social_links', 'option')): the_row();
			            $link = get_sub_field('media_link');?>
                        <a href="<?=$link['url']?>" class="module"><?=$link['title']?></a>
		            <?php endwhile; ?>
	            <?php endif?>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php get_footer(); ?>