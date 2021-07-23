<?php
$mainLogo     = get_field( 'main_logo', 'option' );
$menuIcon     = get_field( 'menu_icon', 'option' );
$menuOpenIcon = get_field( 'menu_open_icon', 'option' );

$firstText  = get_field( 'first_text', 'option' );
$middleText = get_field( 'middle_text', 'option' );
$lastText   = get_field( 'last_text', 'option' );


?>

    <!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="robots" content="index,follow"/>

        <title>
			<?php
			global $page, $paged;
			wp_title( '|', true, 'right' );
			// Add the blog name.
			bloginfo( 'name' );
			//Add the blog description for the home/fron page.
			$site_description = get_bloginfo( 'description', 'display' );
			if ( $site_description && ( is_home() || is_front_page() ) ) {
				echo " | $site_description";
			}
			?>
        </title>
		<?php wp_head(); ?>


    </head>
<body <?php body_class( $body_class ); ?>>

<?php if ( is_front_page() ) {
	?>


    <div id="loader-wrapper">
        <div class="container">
            <h1 class="loader-text"></h1>
        </div>
    </div>

    <audio id="my_audio" src="<?= get_template_directory_uri() ?>/images/audio.mp3" preload="auto"></audio>

    <div id="loader-wrapper-text">
        <span class="invisible"><?= $firstText ?></span>
        <span class="invisible"><?= $middleText ?></span>
        <span class="invisible"><?= $lastText ?></span>
    </div>
	<?php

} ?>
<?php if ( get_post_type() !== 'works' ) {
	?>
    <header id="main-header">
        <div class="container">
            <div class="header-flex">
                <a href="<?= get_home_url() ?>" class="header-logo module">
					<?= readSvg( $mainLogo['url'] ); ?>
                </a>

                <span id="menu-icon" class="header-menu-icon module">
                <?= readSvg( $menuIcon['url'] ); ?>
                <?= readSvg( $menuOpenIcon['url'] ); ?>
			</span>

            </div>

            <nav id="menu-items" class="nav-items d-none">
                <!--Bubble Menu START -->
                <div class="bubless">
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                </div>
                <!--Bubble Menu END-->
                <ul class="module">
					<?php
					echo wp_nav_menu_no_ul();
					?>
                </ul>
                <svg xmlns="http://www.w3.org/2000/svg" width="905.171" height="686.001" viewBox="0 0 905.171 686.001">
                    <g id="Group_247" data-name="Group 247" transform="translate(5232.401 -5381)" opacity="0.02">
                        <g id="Group_212" data-name="Group 212" transform="translate(-5232.401 5381)">
                            <g id="Group_211" data-name="Group 211" transform="translate(0 0)">
                                <g id="Group_210" data-name="Group 210" transform="translate(0 0)">
                                    <path id="Path_716" data-name="Path 716"
                                          d="M1742.918,164.271,1342.2,641.831a26.23,26.23,0,0,0,3.234,36.958L1524.693,829.2a26.229,26.229,0,0,0,36.955-3.23l541.719-645.595h0a18.952,18.952,0,0,0-14.6-31.036H1774.93A41.786,41.786,0,0,0,1742.918,164.271Z"
                                          transform="translate(-1202.584 -149.342)" fill="#fff" opacity="0.8"/>
                                    <rect id="Rectangle_176" data-name="Rectangle 176" width="365.015" height="685.999"
                                          rx="28" transform="translate(0 0)" fill="#fff"/>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>



            </nav>
            <div class="social-medias d-none">
	            <?php if (have_rows('social_links', 'option')):?>
		            <?php while (have_rows('social_links', 'option')): the_row();
			            $link = get_sub_field('media_link');?>
                        <a href="<?=$link['url']?>" class="module"><?=$link['title']?></a>
		            <?php endwhile; ?>
	            <?php endif?>
            </div>
        </div>
    </header>
<?php } ?>