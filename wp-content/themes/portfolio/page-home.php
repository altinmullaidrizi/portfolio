<?php

/*
Template Name: Home
*/
get_header();

?>

<div class="page page-homepage">
	<div class="container homepage">
		<svg class="left-bubble" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="162.765" height="157.402" viewBox="0 0 162.765 157.402">
			<defs>
				<style>
					.cls-1 {
						/*mix-blend-mode: color-dodge;*/
                        opacity: 0.25;
						isolation: isolate;
						fill: url(#linear-gradient);
					}
				</style>
				<linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
					<stop offset="0" stop-color="#da272d"/>
					<stop offset="1" stop-color="#00aa40"/>
				</linearGradient>
			</defs>
			<path id="Path_520" data-name="Path 520" class="cls-1" d="M94.688,25.182c50.313,0,78.787,24.042,78.787,74.355S145,182.583,94.688,182.583,10.71,149.85,10.71,99.537,44.375,25.182,94.688,25.182Z" transform="translate(-10.71 -25.182)"/>
		</svg>
        <img class="homepage-main-img module" src="<?= get_template_directory_uri()?>/images/waist-up-portrait.png">
        <svg class="right-bubble" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="162.765" height="157.402" viewBox="0 0 162.765 157.402">
            <defs>
                <style>
                    .cls-1 {
                        /*mix-blend-mode: color-dodge;*/
                        opacity: 0.25;
                        isolation: isolate;
                        fill: url(#linear-gradient);
                    }
                </style>
                <linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
                    <stop offset="0" stop-color="#da272d"/>
                    <stop offset="1" stop-color="#00aa40"/>
                </linearGradient>
            </defs>
            <path id="Path_520" data-name="Path 520" class="cls-1" d="M94.688,25.182c50.313,0,78.787,24.042,78.787,74.355S145,182.583,94.688,182.583,10.71,149.85,10.71,99.537,44.375,25.182,94.688,25.182Z" transform="translate(-10.71 -25.182)"/>
        </svg>
    </div>

</div>

<?php get_footer(); ?>