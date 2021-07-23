<?php

/*
Template Name: About Us
*/
get_header();

$aboutSvgLine           = get_field( 'about_svg_line' );
$aboutSideTitle         = get_field( 'about_side_title' );
$aboutSideMainSvg       = get_field( 'about_side_main_svg' );
$aboutSideBackgroundSvg = get_field( 'about_side_background_svg' );

$aboutTitle         = get_field( 'about_title' );
$aboutDescription   = get_field( 'about_description' );
$aboutSkillsTitle   = get_field( 'about_skills_title' );
$aboutDownloadTitle = get_field( 'about_download_title' );
//$aboutSkills =  get_field_object('about_skills');

$aboutDownloadUrl         = get_field( 'about_download_file' );
$aboutDownloadText        = get_field( 'about_download_button_text' );
$aboutSecondaryTitle      = get_field( 'about_secondary_title' );
$aboutSecondaryEmailTitle = get_field( 'about_secondary_email_title' );
$aboutSecondaryEmail      = get_field( 'about_secondary_email' );

$aboutSecondaryPhoneTitle = get_field( 'about_secondary_phone_title' );
$aboutSecondaryPhone      = get_field_object( 'about_secondary_phone' );
$aboutSecondaryPhoneSvg   = get_field( 'about_secondary_phone_svg' );

$aboutSecondaryDescription = get_field( 'about_secondary_description' );

?>


<div class="page page-about">
    <div class="orange-center-line">
		<?= $aboutSvgLine ?>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="personal-info">
                    <h1 class="unique-title module"><?= $aboutTitle ?></h1>
                    <p class="about-area  module">
						<?= $aboutDescription ?>
                    </p>
                    <div class="about-details">
                        <div class="row">
                            <div class="d-md-none d-sm-block mobile-content">
                                <h1 class="mobile-content-title">Visar Uka</h1>
                                <p class="mobile-content-paragraph">UI UX & Product
                                    Designer</p>
                            </div>
                            <div class="col-12 col-xl-7">
                                <h1 class="secondary-title module d-none d-md-block"><?= $aboutSkillsTitle ?></h1>
								<?php if ( have_rows( 'about_skills' ) ): ?>
									<?php while ( have_rows( 'about_skills' ) ): the_row();
										$skillTitle       = get_sub_field( 'about_skill_title' );
										$skillDescription = get_sub_field( 'about_skill_description' );
										?>
                                        <p class="skills-title module"><?= $skillTitle ?><br/>
                                            <span class="skills-description module"><?= $skillDescription ?></span>
                                        </p>
									<?php endwhile; ?>
								<?php endif; ?>
                            </div>
                            <div class="col-12 col-xl-5">
                                <h1 class="secondary-title module"><?= $aboutDownloadTitle ?></h1>
                                <a class="download-cv-btn module"
                                   href="<?= $aboutDownloadUrl ?>"><?= $aboutDownloadText ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="secondary-content">
                    <h1 class="module"><?= $aboutSecondaryTitle ?></h1>

                    <div class="contact-area">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="contact-area-titles  module"><?= $aboutSecondaryEmailTitle ?><br/>
                                    <a href="mailto:<?= $aboutSecondaryEmail ?>"
                                       class="email"><?= $aboutSecondaryEmail ?></a>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p class="contact-area-titles module"><?= $aboutSecondaryPhoneTitle ?><br/>
                                    <button class="whatsapp-button module">
                                        <a href="tel:<?= $aboutSecondaryPhone['prepend'] . $aboutSecondaryPhone['value'] ?>"
                                           class="phonenum">
											<?= $aboutSecondaryPhoneSvg ?>
											<?= $aboutSecondaryPhone['prepend'] . $aboutSecondaryPhone['value'] ?></a>
                                    </button>
                                </p>
                            </div>
                        </div>
                        <p class="reach-me module">
							<?= $aboutSecondaryDescription ?>
                        </p>
                        <div class="social-medias">
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
            <div class="col-md-6">
                <div class="dark-content">
                    <div class="dark-content-fixed">
                        <div class="dark-content-side">
                            <h1 class="module"><?= $aboutSideTitle ?></h1>
                        </div>
                        <div class="dark-content-svg module">
							<?= $aboutSideMainSvg ?>
							<?= $aboutSideBackgroundSvg ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
