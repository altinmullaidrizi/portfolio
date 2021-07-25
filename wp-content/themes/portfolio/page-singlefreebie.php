<?php

/*
Template Name: Single Freebie
*/
get_header();

?>
    <div class="page single-freebie">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="freebie-preview">
                        <img src="<?= get_template_directory_uri() ?>./images/preview1.jpg" class="module">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="freebie-data">
                        <div class="main-data">
                            <h5 class="module">Share</h5>
                            <button class="share-btn module" data-toggle="modal" data-target="#share-modal">
                                <svg id="Group_192" data-name="Group 192" xmlns="http://www.w3.org/2000/svg"
                                     width="24" height="24" viewBox="0 0 24 24">
                                    <path id="Path_516" data-name="Path 516" d="M0,0H24V24H0Z" fill="none"/>
                                    <circle id="Ellipse_14" data-name="Ellipse 14" cx="3" cy="3" r="3"
                                            transform="translate(3 9)" stroke-width="2" stroke="#fff"
                                            stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                    <circle id="Ellipse_15" data-name="Ellipse 15" cx="3" cy="3" r="3"
                                            transform="translate(15 3)" stroke-width="2" stroke="#fff"
                                            stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                    <circle id="Ellipse_16" data-name="Ellipse 16" cx="3" cy="3" r="3"
                                            transform="translate(15 15)" stroke-width="2" stroke="#fff"
                                            stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                    <line id="Line_1" data-name="Line 1" y1="3.4" x2="6.6"
                                          transform="translate(8.7 7.3)" fill="none" stroke="#fff"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                    <line id="Line_2" data-name="Line 2" x2="6.6" y2="3.4"
                                          transform="translate(8.7 13.3)" fill="none" stroke="#fff"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                </svg>
                            </button>
                        </div>
                        <div class="box-data">
                            <h5 class="module">Lions app UI</h5>
                            <p class="module">30 April 2020</p>
                            <a class="freebie-download module" href="#">Download</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Modal -->
        <div class="modal fade" id="share-modal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="share-content">
                    <div class="share-header">
                        <span>Share this design</span>
                        <div class="close-icon">
                            <div class="close-border">
                            </div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <svg id="Group_193" data-name="Group 193" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
		                            <path id="Path_517" data-name="Path 517" d="M0,0H24V24H0Z" fill="none"/>
		                            <line id="Line_3" data-name="Line 3" x1="12" y2="12" transform="translate(6 6)" fill="none" stroke="#ff6e63" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
		                            <line id="Line_4" data-name="Line 4" x2="12" y2="12" transform="translate(6 6)" fill="none" stroke="#ff6e63" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
	                            </svg>
                            </button>
                        </div>
                    </div>
                    <div class="share-social">
                        <div class="icon-container">
                            <div class="social-icon">
                                <div class="social-border fb">
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                                    <g id="facebook-3" transform="translate(-126.445 -2.281)">
                                        <circle id="Ellipse_20" data-name="Ellipse 20" cx="25" cy="25" r="25"
                                                transform="translate(126.445 2.281)" fill="#3c5a9a"/>
                                        <path id="Path_524" data-name="Path 524"
                                              d="M341.182,92.677h-5.538c-3.286,0-6.942,1.382-6.942,6.146.016,1.66,0,3.25,0,5.039h-3.8v6.05h3.92V127.33h7.2V109.8h4.754l.43-5.952H335.9s.012-2.648,0-3.417c0-1.883,1.959-1.775,2.077-1.775.932,0,2.745,0,3.21,0V92.677h0Z"
                                              transform="translate(-181.608 -82.722)" fill="#fff"/>
                                    </g>
                                </svg>
                            </div>
                            <div class="social-icon">
                                <div class="social-border li">
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     width="50" height="50" viewBox="0 0 50 50">
                                    <defs>
                                        <linearGradient id="linear-gradient" x1="-1.971" y1="2.61" x2="-1.264"
                                                        y2="3.317" gradientUnits="objectBoundingBox">
                                            <stop offset="0" stop-color="#2489be"/>
                                            <stop offset="1" stop-color="#0575b3"/>
                                        </linearGradient>
                                    </defs>
                                    <path id="linkedin-icon"
                                          d="M32.025,7.025a25,25,0,1,0,25,25A25,25,0,0,0,32.025,7.025Zm-6.67,37.086H19.866V26.378h5.489ZM22.584,24.056a3.272,3.272,0,1,1,3.246-3.272A3.259,3.259,0,0,1,22.584,24.056ZM45.925,44.111H40.463V34.8c0-2.553-.97-3.978-2.989-3.978-2.2,0-3.345,1.484-3.345,3.978v9.309H28.864V26.378h5.265v2.388a6.185,6.185,0,0,1,5.344-2.929c3.76,0,6.452,2.3,6.452,7.046V44.111Z"
                                          transform="translate(-7.025 -7.025)" fill="url(#linear-gradient)"/>
                                </svg>
                            </div>
                            <div class="social-icon">
                                <div class="social-border pi">
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                                    <g id="pinterest-1" transform="translate(-4.1 -4.2)">
                                        <path id="Path_522" data-name="Path 522"
                                              d="M54.1,29.2a25,25,0,1,1-25-25A25,25,0,0,1,54.1,29.2Z" fill="#ca2127"/>
                                        <path id="Path_523" data-name="Path 523"
                                              d="M78.138,62.079c-6.929.78-13.829,6.373-14.11,14.379-.182,4.886,1.767,8.551,6.424,9.581a27.253,27.253,0,0,0,.631-3.562s-2.048-2.06-2.258-3.37c-1.711-10.538,12.16-17.735,19.44-10.376,5.021,5.107,1.711,20.811-6.4,19.177-7.77-1.56,3.8-14.055-2.4-16.513-5.035-2-7.714,6.108-5.33,10.126-1.4,6.917-4.418,13.437-3.2,22.106,3.969-2.87,5.3-8.374,6.4-14.114,1.992,1.207,3.058,2.473,5.6,2.664,9.369.721,14.6-9.346,13.324-18.647-1.15-8.242-9.369-12.436-18.121-11.45Z"
                                              transform="translate(-51.099 -50.839)" fill="#fff"/>
                                    </g>
                                </svg>

                            </div>
                            <div class="social-icon">
                                <div class="social-border tw">
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                                    <g id="twitter-3" transform="translate(-126.444 -2.281)">
                                        <circle id="Ellipse_21" data-name="Ellipse 21" cx="25" cy="25" r="25"
                                                transform="translate(126.444 2.281)" fill="#2daae1"/>
                                        <path id="Path_525" data-name="Path 525"
                                              d="M264.174,146.405a13.131,13.131,0,0,1-3.777,1.036,6.6,6.6,0,0,0,2.892-3.638,13.14,13.14,0,0,1-4.177,1.6,6.58,6.58,0,0,0-11.376,4.5,6.653,6.653,0,0,0,.169,1.5,18.674,18.674,0,0,1-13.556-6.871,6.583,6.583,0,0,0,2.035,8.78,6.547,6.547,0,0,1-2.979-.822v.083a6.58,6.58,0,0,0,5.275,6.448,6.543,6.543,0,0,1-1.733.231,6.674,6.674,0,0,1-1.238-.116,6.585,6.585,0,0,0,6.143,4.567,13.243,13.243,0,0,1-9.737,2.723,18.612,18.612,0,0,0,10.081,2.956c12.1,0,18.712-10.021,18.712-18.712q0-.428-.02-.851a13.4,13.4,0,0,0,3.286-3.409Z"
                                              transform="translate(-96.701 -129.069)" fill="#fff"/>
                                    </g>
                                </svg>

                            </div>
                        </div>
                    </div>
	                <span class="copy-text module">Or copy link</span>
	                <div class="share-input">
		                <input id="input-link" type="text" readonly value="www.visaruka.com/posts/adobexd-flower-ui-app">
                        <button class="copy-btn module" onclick="copy()">copy</button>
	                </div>
                </div>
            </div>

        </div>
    </div>
<?php get_footer(); ?><?php
