<!DOCTYPE html>
<html lang="en">
<head>
<title><?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600&display=swap" rel="stylesheet">
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php wp_head();?>
</head>
<body>

<div class="openMenuWrap d-none">
    <div class="openMenuHeader">
        <svg xmlns="http://www.w3.org/2000/svg" width="146" height="50.028" viewBox="0 0 146 50.028">
            <g id="main1_1" transform="translate(0)">
                <g id="Layer_2" data-name="Layer 2" transform="translate(0)">
                    <g id="Layer_1" data-name="Layer 1">
                        <path id="Path_88504" data-name="Path 88504" d="M93.247,13.451V2.84h2.937V24.828H93.247V20.45L90.1,10.423V24.828H87.16V2.84H90.1Z" transform="translate(-20.149 3.167)" fill="#1e1e1e"/>
                        <path id="Path_88505" data-name="Path 88505" d="M106.53,24.828V2.84h7.3V5.5h-4.342v6.689h3.855v2.663h-3.855v7.3h4.342v2.682Z" transform="translate(-27.741 3.167)" fill="#1e1e1e"/>
                        <path id="Path_88506" data-name="Path 88506" d="M129.687,24.828h-2.834L125.2,16.473h-.061l-2,8.355H120.42L123.2,13.7,120.6,2.84h2.876l1.648,8.106h.061l1.824-8.106h2.724L127.115,13.7Z" transform="translate(-33.184 3.167)" fill="#1e1e1e"/>
                        <path id="Path_88507" data-name="Path 88507" d="M144.7,15.749,147.407,2.84h3.241V24.828h-2.937l.3-14.381-2.189,10.38h-2.262l-2.207-10.4.31,14.405H138.73V2.84h3.241Z" transform="translate(-40.36 3.167)" fill="#1e1e1e"/>
                        <path id="Path_88508" data-name="Path 88508" d="M165.567,24.82H162.63V6.578c0-2.505,1.167-3.758,3.515-3.758h2.183q3.521,0,3.521,3.758V24.82h-2.913V16.751h-3.363Zm3.369-10.732v-7.3A1.137,1.137,0,0,0,167.653,5.5h-.8a1.137,1.137,0,0,0-1.283,1.289v7.3Z" transform="translate(-49.727 3.175)" fill="#1e1e1e"/>
                        <path id="Path_88509" data-name="Path 88509" d="M182.1,2.84h5.746q3.363,0,3.369,3.758v5.418q0,2.87-1.745,3.648l2.049,9.121h-2.791L186.8,15.913h-1.776v8.914H182.1Zm2.931,10.58h1.928c.882,0,1.32-.529,1.32-1.587V7.09c0-1.058-.438-1.593-1.32-1.593h-1.928Z" transform="translate(-57.358 3.167)" fill="#1e1e1e"/>
                        <path id="Path_88510" data-name="Path 88510" d="M204.047,24.828H201.11V2.84h2.937Zm6.762,0h-2.937l-3.648-10.738v-.207l3.04-11.042h2.694l-3.089,10.945Z" transform="translate(-64.809 3.167)" fill="#1e1e1e"/>
                        <path id="Path_88511" class="Path_88511" data-name="Path 88511" d="M57.278,41.456h0V8.719a8.7,8.7,0,0,0-2.522-6.151h0A8.7,8.7,0,0,0,48.96,0h-.823a8.68,8.68,0,0,0-5.782,2.553L28.647,16.261,15.008,2.629a8.865,8.865,0,0,0-12.547,0A8.357,8.357,0,0,0,0,8.526H0V41.3a8.719,8.719,0,0,0,2.522,6.151h0A8.7,8.7,0,0,0,8.3,50.028h.815a8.688,8.688,0,0,0,5.789-2.545L28.631,33.76,42.286,47.4a8.88,8.88,0,0,0,12.547,0h0a8.457,8.457,0,0,0,2.437-5.882h0ZM44.9,32.522,37.389,25,44.9,17.491ZM12.378,17.506l7.512,7.512L12.378,32.53Z" transform="translate(0)" fill="#ffd201"/>
                        <path id="Path_88514" data-name="Path 88514" d="M87.7,49.2a2.584,2.584,0,0,1-.541-1.508v-.809a2.341,2.341,0,1,1,4.676,0v1.538l-.936.109V46.884a1.4,1.4,0,1,0-2.8,0v.809a1.514,1.514,0,0,0,.322.9l2.864,3.4a2.657,2.657,0,0,1,.553,1.544V54.7a2.341,2.341,0,1,1-4.676,0V52.928l.936-.109V54.7a1.4,1.4,0,1,0,2.8,0V53.536a1.642,1.642,0,0,0-.341-.936Z" transform="translate(-20.147 -13.131)" fill="#1e1e1e"/>
                        <path id="Path_88515" data-name="Path 88515" d="M100.737,45.856H99.065v11.2H98.11v-11.2H96.42V44.92h4.317Z" transform="translate(-23.778 -13.325)" fill="#1e1e1e"/>
                        <path id="Path_88516" data-name="Path 88516" d="M110.174,44.92V54.9a2.341,2.341,0,1,1-4.676,0V44.92h.912V54.9a1.4,1.4,0,1,0,2.8,0V44.92Z" transform="translate(-27.335 -13.325)" fill="#1e1e1e"/>
                        <path id="Path_88517" data-name="Path 88517" d="M120.766,54.524a2.523,2.523,0,0,1-2.517,2.517H116.09V44.88h2.159a2.523,2.523,0,0,1,2.517,2.517Zm-.936-7.1a1.569,1.569,0,0,0-1.581-1.581h-1.216v10.27h1.216a1.575,1.575,0,0,0,1.581-1.587Z" transform="translate(-31.487 -13.31)" fill="#1e1e1e"/>
                        <path id="Path_88518" data-name="Path 88518" d="M126.53,57.041V44.88h.936V57.041Z" transform="translate(-35.579 -13.31)" fill="#1e1e1e"/>
                        <path id="Path_88519" data-name="Path 88519" d="M130.878,46.884a2.341,2.341,0,1,1,4.676,0V54.7a2.341,2.341,0,1,1-4.676,0Zm.93,7.82a1.4,1.4,0,0,0,2.809,0v-7.82a1.4,1.4,0,0,0-2.809,0Z" transform="translate(-37.282 -13.131)" fill="#1e1e1e"/>
                        <path id="Path_88520" data-name="Path 88520" d="M141.439,49.2a2.584,2.584,0,0,1-.541-1.508v-.809a2.341,2.341,0,1,1,4.676,0v1.538l-.936.109V46.884a1.4,1.4,0,1,0-2.8,0v.809a1.514,1.514,0,0,0,.322.9l2.864,3.4a2.657,2.657,0,0,1,.553,1.544V54.7a2.341,2.341,0,1,1-4.676,0V52.928l.936-.109V54.7a1.4,1.4,0,1,0,2.8,0V53.536a1.642,1.642,0,0,0-.341-.936Z" transform="translate(-41.209 -13.131)" fill="#1e1e1e"/>
                    </g>
                </g>
            </g>
        </svg>
        <div class="saMenu closeMenu">
            <svg xmlns="http://www.w3.org/2000/svg" width="19.357" height="19.092" viewBox="0 0 19.357 19.092">
                <line id="Line_581" data-name="Line 581" x2="22" transform="translate(1.768 1.768) rotate(45)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2.5"/>
                <line id="Line_593" data-name="Line 593" x2="22" transform="translate(17.589 1.768) rotate(135)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2.5"/>
            </svg>

        </div>
    </div>
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'top-menu-2',
            'menu_id'        => 'top-menu-2',
            'container'      => 'ul',
            'menu_class'     => 'navbar-nav',

        )
    );
    ?>
    <a class="openMenuFooterBtn startNewProject">Start New Project</a>
</div>
<div class="overlay d-none"></div>

	
<div class="whole-wrap">		
<header>
<div class="per-10 flex-grow-1 d-flex align-items-center">
    <div class="saMenu openMenu">
        <svg xmlns="http://www.w3.org/2000/svg" width="29.5" height="26.5" viewBox="0 0 29.5 26.5">
            <g id="Group_20658" data-name="Group 20658" transform="translate(-154.75 -51.75)">
                <line id="Line_580" data-name="Line 580" x2="15" transform="translate(168 53)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2.5"/>
                <line id="Line_581" data-name="Line 581" x2="27" transform="translate(156 65)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2.5"/>
                <line id="Line_582" data-name="Line 582" x2="15" transform="translate(156 77)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2.5"/>
            </g>
        </svg>
    </div>
    <a href="<?php echo get_home_url()  ?>" class="saLogoHeader">
        <svg xmlns="http://www.w3.org/2000/svg" width="168" height="57.567" viewBox="0 0 168 57.567">
            <g id="Group_20657" data-name="Group 20657" transform="translate(-231 -36.216)">
                <g id="main1_1" transform="translate(231 36.216)">
                    <g id="Layer_2" data-name="Layer 2" transform="translate(0)">
                        <g id="Layer_1" data-name="Layer 1">
                            <path id="Path_88504" data-name="Path 88504" d="M94.164,15.05V2.84h3.38v25.3h-3.38V23.1L90.547,11.565V28.141H87.16V2.84h3.387Z" transform="translate(-10.051 4.072)" fill="#1e1e1e"/>
                            <path id="Path_88505" data-name="Path 88505" d="M106.53,28.141V2.84h8.4V5.9h-5v7.7h4.436v3.065h-4.436v8.4h5v3.086Z" transform="translate(-15.868 4.072)" fill="#1e1e1e"/>
                            <path id="Path_88506" data-name="Path 88506" d="M131.083,28.141h-3.261l-1.9-9.614h-.07l-2.3,9.614H120.42l3.2-12.8L120.63,2.84h3.31l1.9,9.327h.07L128,2.84h3.135l-3.016,12.5Z" transform="translate(-20.039 4.072)" fill="#1e1e1e"/>
                            <path id="Path_88507" data-name="Path 88507" d="M145.594,17.694,148.715,2.84h3.729v25.3h-3.38l.35-16.548L146.9,23.537h-2.6l-2.54-11.972.357,16.576h-3.38V2.84h3.729Z" transform="translate(-25.538 4.072)" fill="#1e1e1e"/>
                            <path id="Path_88508" data-name="Path 88508" d="M166.01,28.135h-3.38V7.144c0-2.883,1.343-4.324,4.044-4.324h2.512q4.051,0,4.051,4.324V28.135h-3.352V18.85h-3.869Zm3.876-12.35v-8.4a1.308,1.308,0,0,0-1.476-1.483h-.917a1.308,1.308,0,0,0-1.476,1.483v8.4Z" transform="translate(-32.715 4.078)" fill="#1e1e1e"/>
                            <path id="Path_88509" data-name="Path 88509" d="M182.1,2.84h6.612q3.869,0,3.876,4.324V13.4q0,3.3-2.008,4.2l2.358,10.5h-3.212l-2.218-10.208h-2.043V28.141H182.1Zm3.373,12.175h2.218c1.015,0,1.518-.609,1.518-1.826V7.731c0-1.217-.5-1.833-1.518-1.833h-2.218Z" transform="translate(-38.562 4.072)" fill="#1e1e1e"/>
                            <path id="Path_88510" data-name="Path 88510" d="M204.49,28.141h-3.38V2.84h3.38Zm7.781,0h-3.38l-4.2-12.357v-.238l3.5-12.706h3.1l-3.554,12.594Z" transform="translate(-44.27 4.072)" fill="#1e1e1e"/>
                            <path id="Path_88511" class="Path_88511" data-name="Path 88511" d="M65.909,47.7h0V10.032a10.015,10.015,0,0,0-2.9-7.078h0A10.015,10.015,0,0,0,56.337,0H55.39a9.988,9.988,0,0,0-6.653,2.937L32.964,18.711,17.269,3.026a10.2,10.2,0,0,0-14.438,0A9.617,9.617,0,0,0,0,9.811H0V47.526A10.032,10.032,0,0,0,2.9,54.6h0a10.006,10.006,0,0,0,6.653,2.964h.938a10,10,0,0,0,6.662-2.928L32.946,38.847,48.658,54.541a10.218,10.218,0,0,0,14.438,0h0a9.732,9.732,0,0,0,2.8-6.768h0ZM51.666,37.422,43.022,28.77l8.643-8.643ZM14.243,20.144l8.643,8.643-8.643,8.643Z" transform="translate(0)" fill="#FFD201"/>
                            <path id="Path_88514" data-name="Path 88514" d="M87.781,49.921a2.974,2.974,0,0,1-.623-1.735v-.931a2.694,2.694,0,1,1,5.381,0v1.77l-1.078.126v-1.9a1.616,1.616,0,1,0-3.226,0v.931a1.742,1.742,0,0,0,.371,1.036l3.3,3.911a3.058,3.058,0,0,1,.637,1.777v1.343a2.694,2.694,0,1,1-5.381,0V54.21l1.078-.126v2.169a1.616,1.616,0,1,0,3.226,0V54.91a1.889,1.889,0,0,0-.392-1.078Z" transform="translate(-10.05 -8.416)" fill="#1e1e1e"/>
                            <path id="Path_88515" data-name="Path 88515" d="M101.388,46H99.464V58.886h-1.1V46H96.42V44.92h4.968Z" transform="translate(-12.832 -8.565)" fill="#1e1e1e"/>
                            <path id="Path_88516" data-name="Path 88516" d="M110.879,44.92V56.4a2.694,2.694,0,1,1-5.381,0V44.92h1.05V56.4a1.616,1.616,0,1,0,3.226,0V44.92Z" transform="translate(-15.557 -8.565)" fill="#1e1e1e"/>
                            <path id="Path_88517" data-name="Path 88517" d="M121.471,55.977a2.9,2.9,0,0,1-2.9,2.9H116.09V44.88h2.484a2.9,2.9,0,0,1,2.9,2.9ZM120.393,47.8a1.805,1.805,0,0,0-1.819-1.819h-1.4V57.8h1.4a1.812,1.812,0,0,0,1.819-1.826Z" transform="translate(-18.739 -8.553)" fill="#1e1e1e"/>
                            <path id="Path_88518" data-name="Path 88518" d="M126.53,58.874V44.88h1.078V58.874Z" transform="translate(-21.874 -8.553)" fill="#1e1e1e"/>
                            <path id="Path_88519" data-name="Path 88519" d="M130.878,47.255a2.694,2.694,0,1,1,5.381,0v9a2.694,2.694,0,1,1-5.381,0Zm1.071,9a1.616,1.616,0,0,0,3.233,0v-9a1.616,1.616,0,0,0-3.233,0Z" transform="translate(-23.179 -8.416)" fill="#1e1e1e"/>
                            <path id="Path_88520" data-name="Path 88520" d="M141.521,49.921a2.974,2.974,0,0,1-.623-1.735v-.931a2.694,2.694,0,1,1,5.381,0v1.77l-1.078.126v-1.9a1.616,1.616,0,1,0-3.226,0v.931a1.742,1.742,0,0,0,.371,1.036l3.3,3.911a3.057,3.057,0,0,1,.637,1.777v1.343a2.694,2.694,0,1,1-5.381,0V54.21l1.078-.126v2.169a1.616,1.616,0,1,0,3.226,0V54.91a1.889,1.889,0,0,0-.392-1.078Z" transform="translate(-26.188 -8.416)" fill="#1e1e1e"/>
                        </g>
                    </g>
                </g>
            </g>
        </svg>
    </a>

</div>

</header>	
	


	
	
	
	
	
	
	
	
	


