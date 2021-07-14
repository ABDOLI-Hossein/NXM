<?php
/*Template Name: portfolios */
get_header();
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$my_query = new WP_Query(array(
    'post_type' => 'portfolio',
    'paged' => $paged,
    'posts_per_page' => 12
)); ?>

    <style>
        .saEachPortfolioCard{
            width: 345px;
            height: 430px;
            border: 1px solid #E0E0E0;
            border-radius: 20px;
            margin-bottom: 100px;
            padding: 26px 28px;
            margin-right: 23px;
            position: relative;
        }
        .saEachPortfolioCard img{
            max-width: 90%;
            position: absolute;
            right: 0;
            left: 0;
            margin: 0 auto;
            bottom: -40px;
			height: auto;
        }

        .saEachPortfolioCard h6{
            font-size: 20px;
            line-height: 24px;
            color: #000;
            font-weight: 600;
            margin: 0;
        }
        .saEachPortfolioCard p{
            color:#B9B9B9;
            font-size: 14px;
            line-height: 17px;
            align-items: center;
            display: flex;
            margin: 0;
        }
        .saEachPortfolioCard p svg{
            margin-right:10px
        }
        .saPortfolioCardWrap{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top:54px!important;
        }
        .saEachRowPortfolio{
            display: flex;
            justify-content: space-between;
        }
        @media only screen and (max-width: 1000px) {
            .saEachPortfolioCard {
                margin-right: 0 !important;
            }
			.saPortfolioCardWrap{
				margin-top:50px!important;
			}
        }
		.saFilterWrap{
            height: 65px;
            border: 1px solid #E0E0E0;
            border-radius: 12px;
            display: flex;
            align-items: center;
            padding: 11px;
            box-shadow: 0 10px 35px rgba(0,0,0,0.02);
            cursor: pointer;
            position: relative;
            margin-top: 100px;

        }
        #arrowDropDown{
            position: absolute;
            right: 18px;
            margin: auto;
        }


        .saFilterWrap p{
            font-size: 20px;
            line-height: 55px;
            margin-left: 10px;
            font-weight: 600;
        }
        .saFilterWrapOptions{
            position: absolute;
            top: 100%;
            background-color: #fff;
            z-index: 1;
            width: 100%;
            left: 0;
            right: 0;
            padding: 20px;
            border: 1px solid #E0E0E0;
            max-width: 95%;
            display: none;
            border-radius: 0 0 12px 12px;
        }
        .saFilterWrapOptions label{
            font-size:17px;
            line-height:35px;
            cursor: pointer;
        }
        .saFilterWrapOptions h6{
            font-size: 20px;
            line-height: 55px;
            margin: 0;
            font-weight: 600;
        }
        .saFilterWrapOptions a{
            height: 55px;
            background-color: #46389C;
            border-radius: 12px;
            box-shadow: 0 15px 35px rgba(70,56,156,0.15);
            color: #fff;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 30px;
        }

        .rotated{
            transform: rotate(180deg);
        }
    </style>


    <div class="flex-grow-1 per-10 d-flex homePart1 flex-direction-column-reverse" style="min-height: 586px">
        <div class="per-5 flex-grow-1 left mw-100m paddingM-30">
            <h1>Portfolio</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Egestas purus viverra accumsan in nisl nisi Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque </p>
            <a class="saBtnStyle1" id="startNewProject">Start New Project</a>
            <svg id="svg1" class="d-noneM" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
                <g id="Ellipse_821" data-name="Ellipse 821" fill="none" stroke="#ffd201" stroke-width="2">
                    <circle cx="15" cy="15" r="15" stroke="none"/>
                    <circle cx="15" cy="15" r="14" fill="none"/>
                </g>
            </svg>
            <svg id="svg2" class="d-noneM" xmlns="http://www.w3.org/2000/svg" width="53.334" height="54.343" viewBox="0 0 53.334 54.343">
                <g id="Group_20839" data-name="Group 20839" transform="translate(-504.833 -473.332)">
                    <path id="Rectangle_4770" data-name="Rectangle 4770" d="M1.731,0h0A43.269,43.269,0,0,1,45,43.269v0A1.731,1.731,0,0,1,43.269,45H1.731A1.731,1.731,0,0,1,0,43.269V1.731A1.731,1.731,0,0,1,1.731,0Z" transform="translate(510.138 524.535) rotate(-86)" fill="#f5632c"/>
                    <g id="Rectangle_4771" data-name="Rectangle 4771" transform="translate(504.833 518.222) rotate(-86)" fill="none" stroke="#000" stroke-width="1">
                        <path d="M1.731,0h0A43.269,43.269,0,0,1,45,43.269v0A1.731,1.731,0,0,1,43.269,45H1.731A1.731,1.731,0,0,1,0,43.269V1.731A1.731,1.731,0,0,1,1.731,0Z" stroke="none"/>
                        <path d="M2.153.5h0A42.347,42.347,0,0,1,44.5,42.847v0A1.653,1.653,0,0,1,42.847,44.5H2.153A1.653,1.653,0,0,1,.5,42.847V2.153A1.653,1.653,0,0,1,2.153.5Z" fill="none"/>
                    </g>
                </g>
            </svg>
            <svg id="svg3" xmlns="http://www.w3.org/2000/svg" width="25.72" height="25.72" viewBox="0 0 25.72 25.72">
                <path id="Rectangle_4768" data-name="Rectangle 4768" d="M.808,0h0A20.192,20.192,0,0,1,21,20.192v0a.808.808,0,0,1-.808.808H.808A.808.808,0,0,1,0,20.192V.808A.808.808,0,0,1,.808,0Z" transform="translate(0 5.435) rotate(-15)" fill="#ffd201"/>
            </svg>

        </div>
        <div class="per-5 flex-grow-1 right mw-100m paddingM-30">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="663" height="673.508" viewBox="0 0 663 673.508">
                <defs>
                    <linearGradient id="linear-gradient" x1="0.862" y1="0.761" x2="-0.191" y2="0.256" gradientUnits="objectBoundingBox">
                        <stop offset="0" stop-color="#fff" stop-opacity="0"/>
                        <stop offset="0.12" stop-color="#fffdf7" stop-opacity="0.02"/>
                        <stop offset="0.28" stop-color="#fff7e1" stop-opacity="0.078"/>
                        <stop offset="0.45" stop-color="#ffecbd" stop-opacity="0.18"/>
                        <stop offset="0.63" stop-color="#ffde8a" stop-opacity="0.322"/>
                        <stop offset="0.82" stop-color="#fecc4a" stop-opacity="0.502"/>
                        <stop offset="1" stop-color="#feb701" stop-opacity="0.702"/>
                    </linearGradient>
                </defs>
                <g id="Group_33652" data-name="Group 33652" transform="translate(-703 7)">
                    <rect id="Rectangle_4756" data-name="Rectangle 4756" width="219" height="223" transform="translate(1147 219)" fill="#f8f9fe"/>
                    <path id="click" d="M16.182,21.158A39.306,39.306,0,0,0,17.8,14.071V8.592a1.322,1.322,0,1,0-2.643,0v2.336a.249.249,0,1,1-.5,0V7.278a1.322,1.322,0,1,0-2.644,0v2.6a.249.249,0,1,1-.5,0V6.23a1.322,1.322,0,1,0-2.643,0v2.6a.249.249,0,0,1-.5,0v-7.5a1.322,1.322,0,1,0-2.644,0V12.944a.249.249,0,0,1-.436.164L2.2,9.566l-.036-.038a1.339,1.339,0,0,0-.916-.367H1.243a1.321,1.321,0,0,0-.928.382c-.3.305-.544.888.051,1.935.9,1.587,1.891,3.092,2.766,4.426.65.992,1.265,1.928,1.723,2.718.293.506.9,1.833,1.242,2.536H16.182Z" transform="matrix(0.848, -0.53, 0.53, 0.848, 801.391, 648.565)" fill="#fff"/>
                    <path id="Rectangle_4757" data-name="Rectangle 4757" d="M0,0H0A110,110,0,0,1,110,110v3A110,110,0,0,1,0,223H0a0,0,0,0,1,0,0V0A0,0,0,0,1,0,0Z" transform="translate(1147 219)" fill="#eee"/>
                    <path id="Rectangle_4758" data-name="Rectangle 4758" d="M109,0h0a0,0,0,0,1,0,0V223a0,0,0,0,1,0,0h0A109,109,0,0,1,0,114v-5A109,109,0,0,1,109,0Z" transform="translate(1257 219)" fill="#46389c"/>
                    <rect id="Rectangle_4752" data-name="Rectangle 4752" width="219" height="221" transform="translate(1147 442)" fill="#f8f9fe"/>
                    <path id="Rectangle_4755" data-name="Rectangle 4755" d="M0,0H0A109,109,0,0,1,109,109v1A109,109,0,0,1,0,219H0a0,0,0,0,1,0,0V0A0,0,0,0,1,0,0Z" transform="translate(1366 442) rotate(90)" fill="#eff1fb"/>
                    <path id="Rectangle_4753" data-name="Rectangle 4753" d="M0,0H17a93,93,0,0,1,93,93v0a0,0,0,0,1,0,0H0a0,0,0,0,1,0,0V0A0,0,0,0,1,0,0Z" transform="translate(1147 570)" fill="#ffd201"/>
                    <path id="Rectangle_4754" data-name="Rectangle 4754" d="M93,0h16a0,0,0,0,1,0,0V93a0,0,0,0,1,0,0H0a0,0,0,0,1,0,0v0A93,93,0,0,1,93,0Z" transform="translate(1257 570)"/>
                    <path id="Path_88543" data-name="Path 88543" d="M0,0H119.5L0,128.118Z" transform="translate(818 663.498) rotate(-90)" fill="#eee"/>
                    <path id="Rectangle_4761" data-name="Rectangle 4761" d="M0,0H19A200,200,0,0,1,219,200v19a0,0,0,0,1,0,0H0a0,0,0,0,1,0,0V0A0,0,0,0,1,0,0Z" transform="translate(1147)"/>
                    <path id="Path_88571" data-name="Path 88571" d="M0,0H224V221H0Z" transform="translate(923)" fill="#fff"/>
                    <rect id="Rectangle_4763" data-name="Rectangle 4763" width="113" height="221" transform="translate(1034)" fill="#ffd201"/>
                    <path id="Rectangle_4764" data-name="Rectangle 4764" d="M0,0H111a0,0,0,0,1,0,0V171a50,50,0,0,1-50,50H50A50,50,0,0,1,0,171V0A0,0,0,0,1,0,0Z" transform="translate(923)" fill="#46389c"/>
                    <path id="Rectangle_4765" data-name="Rectangle 4765" d="M0,0H2.5A110.5,110.5,0,0,1,113,110.5v0A110.5,110.5,0,0,1,2.5,221H0a0,0,0,0,1,0,0V0A0,0,0,0,1,0,0Z" transform="translate(1034)" fill="#fff"/>
                    <rect id="Rectangle_4766" data-name="Rectangle 4766" width="220" height="221" transform="translate(703)" fill="#fff"/>
                    <path id="Rectangle_4767" data-name="Rectangle 4767" d="M109.5,0H228a0,0,0,0,1,0,0V219a0,0,0,0,1,0,0H109.5A109.5,109.5,0,0,1,0,109.5v0A109.5,109.5,0,0,1,109.5,0Z" transform="translate(923 -7) rotate(90)" fill="#eff1fb"/>
                    <path id="Rectangle_4759" data-name="Rectangle 4759" d="M0,0H114a0,0,0,0,1,0,0V222a0,0,0,0,1,0,0h0A114,114,0,0,1,0,108V0A0,0,0,0,1,0,0Z" transform="translate(704 441)" fill="#ffd201"/>
                    <g id="Group_20754" data-name="Group 20754" transform="translate(704 219)">
                        <rect id="Rectangle_36" data-name="Rectangle 36" width="217" height="219" transform="translate(1 1)"/>
                        <rect id="Rectangle_37" data-name="Rectangle 37" width="221" height="226" rx="110.5" transform="translate(-1 -1)" fill="#fff"/>
                        <rect id="Rectangle_38" data-name="Rectangle 38" width="61" height="102" transform="translate(0 121)" fill="#fff"/>
                        <rect id="Rectangle_39" data-name="Rectangle 39" width="61" height="104" transform="translate(219) rotate(90)" fill="#fff"/>
                        <path id="Path_1622" data-name="Path 1622" d="M218.551,0V221.913H0Z" transform="translate(0.623 1.087)" fill="#eff1fb"/>
                    </g>
                    <path id="Rectangle_4760" data-name="Rectangle 4760" d="M112.5,0h0A112.5,112.5,0,0,1,225,112.5v.5a0,0,0,0,1,0,0H0a0,0,0,0,1,0,0v-.5A112.5,112.5,0,0,1,112.5,0Z" transform="translate(922 328)" fill="#ffd201"/>
                    <g id="Group_20811" data-name="Group 20811" transform="translate(723.132 70.396)">
                        <g id="COFFEE-BREAK-01" transform="translate(0 0)">
                            <g id="chair" transform="translate(264.108 363.68)">
                                <path id="Path" d="M329.475,44.457,259.839,209.58" transform="translate(-259.839 -19.138)" fill="none" stroke="#0a1658" stroke-linecap="round" stroke-width="9" fill-rule="evenodd"/>
                                <path id="Path-2" data-name="Path" d="M223.689,22.3s3.8-22.16-91.5-22.16S21.156,11.3,21.156,22.3Z" transform="translate(-17.708 -0.142)" fill="#303d8b" fill-rule="evenodd"/>
                                <rect id="Rectangle" width="202.534" height="13.071" rx="6.535" transform="translate(3.448 15.625)" fill="#0a1658"/>
                                <path id="Path-3" data-name="Path" d="M.408,46.055l70.368,163.3" transform="translate(147.081 -19.823)" fill="none" stroke="#0a1658" stroke-linecap="round" stroke-width="9" fill-rule="evenodd"/>
                                <path id="Path-4" data-name="Path" d="M117.988,46.055l70.368,163.3" transform="translate(-37.676 -19.823)" fill="none" stroke="#0a1658" stroke-linecap="round" stroke-width="9" fill-rule="evenodd"/>
                            </g>
                            <path id="Path-5" data-name="Path" d="M118.412,595.56V806.94" transform="translate(411.693 -265.08)" fill="none" stroke="#0a1658" stroke-linecap="round" stroke-width="9" fill-rule="evenodd"/>
                            <rect id="Rectangle-2" data-name="Rectangle" width="135.005" height="6.217" rx="3.108" transform="translate(462.605 327.374)" fill="#303d8b"/>
                            <rect id="Rectangle-3" data-name="Rectangle" width="120.662" height="3.934" rx="1.967" transform="translate(469.776 333.591)" fill="#0a1658"/>
                            <g id="lamp" transform="translate(0 20.191)">
                                <path id="Path-6" data-name="Path" d="M265.055,944.494l42.936,18.351a4.477,4.477,0,0,1,2.72,4.118v7.921H219.386v-7.358a5.334,5.334,0,0,1,3.239-4.905Z" transform="translate(-219.386 -403.574)" fill="#0a1658" fill-rule="evenodd"/>
                                <path id="Path-7" data-name="Path" d="M299.044,682.33V295.936" transform="translate(-253.375 -126.733)" fill="none" stroke="#0a1658" stroke-linecap="round" stroke-width="13" fill-rule="evenodd"/>
                                <path id="Path-8" data-name="Path" d="M250.895,9.641l-99.3,233.18" transform="translate(-120.719 -4.525)" fill="none" stroke="#0a1658" stroke-linecap="round" stroke-width="13" fill-rule="evenodd"/>
                                <path id="Path-9" data-name="Path" d="M65.757.716,151.251,61.7" transform="translate(28.125 -0.716)" fill="none" stroke="#0a1658" stroke-linecap="round" stroke-width="13" fill-rule="evenodd"/>
                                <ellipse id="Oval" cx="9.675" cy="9.677" rx="9.675" ry="9.677" transform="translate(112.587 10.712)" fill="#303d8b"/>
                                <ellipse id="Oval-2" data-name="Oval" cx="9.675" cy="9.677" rx="9.675" ry="9.677" transform="translate(35.994 191.596)" fill="#303d8b"/>
                                <path id="Path-10" data-name="Path" d="M14.689,130.418S-3.63,104.732,16.75,88.309c22.494-18.132,43.2,5.84,43.2,5.84Z" transform="translate(153.027 -35.211)" fill="#303d8b" fill-rule="evenodd"/>
                                <ellipse id="Oval-3" data-name="Oval" cx="6.222" cy="29.003" rx="6.222" ry="29.003" transform="translate(171.596 100.074) rotate(-128.7)" fill="#0a1658"/>
                                <path id="Path-11" data-name="Path" d="M52,114.4s3.2,5.249-3.888,12.354-12.9.806-12.9.806S45.9,117.674,52,114.4Z" transform="translate(144.159 -49.245)" fill="#feb701" fill-rule="evenodd"/>
                            </g>
                            <g id="lady" transform="translate(97.505 29.45)">
                                <path id="Path-12" data-name="Path" d="M264.895,59.691c-.147-.11-.294-.211-.436-.307C264.6,59.5,264.766,59.6,264.895,59.691Z" transform="translate(-37.822 -26.993)" fill="none" fill-rule="evenodd"/>
                                <path id="Path-13" data-name="Path" d="M255.109,68.533l-.563-.591Z" transform="translate(-22.577 -30.838)" fill="none" fill-rule="evenodd"/>
                                <path id="Path-14" data-name="Path" d="M252.475,71.349l-.518-.569Z" transform="translate(-18.517 -32.113)" fill="none" fill-rule="evenodd"/>
                                <path id="Path-15" data-name="Path" d="M253.849,69.888c-.22-.238-.458-.458-.66-.706C253.409,69.412,253.629,69.65,253.849,69.888Z" transform="translate(-20.57 -31.395)" fill="none" fill-rule="evenodd"/>
                                <path id="Path-16" data-name="Path" d="M261.41,62.465l-.513-.458Z" transform="translate(-32.376 -28.171)" fill="none" fill-rule="evenodd"/>
                                <path id="Path-17" data-name="Path" d="M262.59,61.516c-.2-.165-.389-.321-.587-.459C262.2,61.195,262.394,61.36,262.59,61.516Z" transform="translate(-34.166 -27.745)" fill="none" fill-rule="evenodd"/>
                                <path id="Path-18" data-name="Path" d="M263.782,60.512l-.422-.321Z" transform="translate(-36.104 -27.356)" fill="none" fill-rule="evenodd"/>
                                <path id="Path-19" data-name="Path" d="M251.174,72.814c-.179-.206-.362-.408-.541-.61C250.812,72.406,251,72.608,251.174,72.814Z" transform="translate(-16.487 -32.753)" fill="none" fill-rule="evenodd"/>
                                <path id="Path-20" data-name="Path" d="M260.2,63.542l-.458-.4Z" transform="translate(-30.527 -28.68)" fill="none" fill-rule="evenodd"/>
                                <path id="Path-21" data-name="Path" d="M258.379,65.389q-.639-.633-1.261-1.21Q257.738,64.757,258.379,65.389Z" transform="translate(-27.263 -29.147)" fill="none" fill-rule="evenodd"/>
                                <path id="Path-22" data-name="Path" d="M256.377,67.191c-.16-.16-.316-.326-.458-.481C256.061,66.866,256.217,67.031,256.377,67.191Z" transform="translate(-24.601 -30.284)" fill="none" fill-rule="evenodd"/>
                                <path id="Path-23" data-name="Path" d="M239.3,87.371l-.573-.747Z" transform="translate(1.951 -39.231)" fill="none" fill-rule="evenodd"/>
                                <path id="Path-24" data-name="Path" d="M237.454,90q-.646-.88-1.32-1.761Q236.808,89.119,237.454,90Z" transform="translate(5.218 -39.957)" fill="none" fill-rule="evenodd"/>
                                <path id="Path-25" data-name="Path" d="M249.847,74.358c-.224-.266-.458-.523-.678-.779C249.4,73.835,249.623,74.092,249.847,74.358Z" transform="translate(-14.354 -33.37)" fill="none" fill-rule="evenodd"/>
                                <path id="Path-26" data-name="Path" d="M235.568,92.342l-.591-.8Z" transform="translate(7.741 -41.441)" fill="none" fill-rule="evenodd"/>
                                <path id="Path-27" data-name="Path" d="M241.3,84.964q-.669-.867-1.343-1.729Q240.628,84.1,241.3,84.964Z" transform="translate(-0.729 -37.709)" fill="none" fill-rule="evenodd"/>
                                <path id="Path-28" data-name="Path" d="M248.505,75.891c-.188-.225-.38-.458-.568-.665C248.125,75.447,248.318,75.667,248.505,75.891Z" transform="translate(-12.334 -34.111)" fill="none" fill-rule="evenodd"/>
                                <path id="Path-29" data-name="Path" d="M247.171,77.471l-.541-.646Z" transform="translate(-10.279 -34.829)" fill="none" fill-rule="evenodd"/>
                                <path id="Path-30" data-name="Path" d="M244.538,80.671l-.655-.807Z" transform="translate(-6.134 -36.194)" fill="none" fill-rule="evenodd"/>
                                <path id="Path-31" data-name="Path" d="M243.193,82.363l-.55-.692Z" transform="translate(-4.106 -37.006)" fill="none" fill-rule="evenodd"/>
                                <path id="Path-32" data-name="Path" d="M245.819,79.138l-.687-.839Z" transform="translate(-8.103 -35.491)" fill="none" fill-rule="evenodd"/>
                                <path id="Path-33" data-name="Path" d="M268.115,57.752l-.376-.183Z" transform="translate(-42.848 -26.177)" fill="none" fill-rule="evenodd"/>
                                <path id="Path-34" data-name="Path" d="M267.106,58.3l-.408-.234Z" transform="translate(-41.267 -26.402)" fill="none" fill-rule="evenodd"/>
                                <path id="Path-35" data-name="Path" d="M270.08,56.943l-.394-.124Z" transform="translate(-45.886 -25.841)" fill="none" fill-rule="evenodd"/>
                                <path id="Path-36" data-name="Path" d="M271.914,56.585a3.314,3.314,0,0,0-.421-.032A3.314,3.314,0,0,1,271.914,56.585Z" transform="translate(-48.716 -25.721)" fill="none" fill-rule="evenodd"/>
                                <path id="Path-37" data-name="Path" d="M270.989,56.7l-.321-.064Z" transform="translate(-47.336 -25.759)" fill="none" fill-rule="evenodd"/>
                                <path id="Path-38" data-name="Path" d="M233.695,93.242l.614.839h0Z" transform="translate(9.706 -42.205)" fill="none" fill-rule="evenodd"/>
                                <path id="Path-39" data-name="Path" d="M266.065,58.97c-.183-.119-.362-.238-.541-.344A4.775,4.775,0,0,1,266.065,58.97Z" transform="translate(-39.579 -26.652)" fill="none" fill-rule="evenodd"/>
                                <path id="Path-40" data-name="Path" d="M269.165,57.279c-.165-.078-.326-.142-.486-.2C268.839,57.142,269,57.206,269.165,57.279Z" transform="translate(-44.416 -25.957)" fill="none" fill-rule="evenodd"/>
                                <path id="Path-41" data-name="Path" d="M23.015,79.062c11.46-2.8-2.87-13.191-10.86-33.883S27.517,18.334,27.517,18.334A128.845,128.845,0,0,1,38.784,6.45C50.432-4.059,67.875.49,86.11,12.41S102.695,46.2,106.821,63.005s18.85,18.028,42.815,22.324,14.752,23.984,14.752,23.984,24.378,9.422,22.127,26.84c-.339,2.6-2.044,4.851-4.818,6.786,3.511-12.929-31.479-28.45-50.31-35.982C111.414,98.965,96.255,83.5,95.333,68.535a204.311,204.311,0,0,0-3.562-27.225L65.184,46.353l-6.376,6.07-.623-.816-.092-.128-.591-.8-.046-.06q-.646-.88-1.32-1.761l-.105-.142-.573-.747-.105-.138q-.669-.867-1.343-1.729l-.138-.17-.55-.692c-.05-.06-.1-.124-.147-.188l-.655-.807v-.023l-.688-.839-.137-.165-.541-.647-.178-.215c-.188-.225-.381-.458-.568-.665l-.11-.128c-.225-.266-.459-.523-.678-.779-.041-.05-.083-.1-.128-.147-.179-.206-.362-.408-.541-.61-.064-.073-.128-.142-.188-.215l-.518-.569c-.055-.055-.106-.115-.161-.174-.22-.238-.458-.458-.66-.706l-.087-.092-.564-.591-.193-.2c-.16-.16-.316-.325-.458-.481l-.183-.183c-.426-.422-.848-.825-1.261-1.21l-.183-.17-.458-.4-.188-.165-.513-.458-.1-.078c-.2-.165-.389-.321-.587-.458-.051-.046-.106-.087-.16-.128l-.422-.321-.183-.133c-.146-.11-.294-.211-.436-.307l-.133-.092c-.183-.119-.362-.238-.541-.344l-.124-.073-.408-.234-.165-.092L39.7,31.97l-.142-.064c-.165-.078-.325-.142-.486-.2L39,31.681l-.394-.124-.142-.037-.321-.064h-.133a3.325,3.325,0,0,0-.421-.032s-9.448,16.29-1.806,40.265,9.48,28.582-4.034,29.66-19.381,1.834-13.61,16.291c-6.807-5.86-11.813-11.756-14.353-16.992C-4.434,83.729,11.541,81.868,23.015,79.062Z" transform="translate(185.217 -0.569)" fill-rule="evenodd"/>
                                <path id="Path-42" data-name="Path" d="M247.791,76.649l-.179-.215Z" transform="translate(-11.44 -34.653)" fill="#0a1658" fill-rule="evenodd"/>
                                <path id="Path-43" data-name="Path" d="M271.384,56.611h0Z" transform="translate(-48.052 -25.747)" fill="#0a1658" fill-rule="evenodd"/>
                                <path id="Path-44" data-name="Path" d="M246.518,78.164,246.38,78Z" transform="translate(-9.489 -35.356)" fill="#0a1658" fill-rule="evenodd"/>
                                <path id="Path-45" data-name="Path" d="M245.1,79.845v0Z" transform="translate(-7.363 -36.175)" fill="#0a1658" fill-rule="evenodd"/>
                                <path id="Path-46" data-name="Path" d="M236.1,91.529l-.046-.06Z" transform="translate(6.622 -41.408)" fill="#0a1658" fill-rule="evenodd"/>
                                <path id="Path-47" data-name="Path" d="M238.636,88.131l-.105-.142Z" transform="translate(2.716 -39.844)" fill="#0a1658" fill-rule="evenodd"/>
                                <path id="Path-48" data-name="Path" d="M234.9,93.138l-.092-.128Z" transform="translate(8.499 -42.1)" fill="#0a1658" fill-rule="evenodd"/>
                                <path id="Path-49" data-name="Path" d="M239.868,86.512l-.105-.138Z" transform="translate(0.805 -39.119)" fill="#0a1658" fill-rule="evenodd"/>
                                <path id="Path-50" data-name="Path" d="M242.531,83.114l-.138-.17Z" transform="translate(-3.306 -37.578)" fill="#0a1658" fill-rule="evenodd"/>
                                <path id="Path-51" data-name="Path" d="M25.943,126.469c13.514-1.077,11.68-5.685,4.034-29.66s1.806-40.265,1.806-40.265a3.306,3.306,0,0,1,.421.032h.133l.321.064.142.037.394.124.074.023c.16.06.321.124.486.2l.142.064.376.183.165.092.408.234.124.073c.178.105.357.225.541.344l.133.092c.142.1.289.2.436.307l.183.133.422.321c.055.041.11.082.16.128.2.151.39.307.587.458l.1.078.513.458.188.165.458.4.183.17c.413.385.834.789,1.261,1.21l.183.183c.16.156.316.321.458.481l.193.2.564.591.087.092c.22.229.458.459.66.706.055.06.105.119.16.174l.518.569c.06.073.124.142.188.215.178.2.362.4.541.61.046.046.087.1.128.147.229.257.458.514.679.779l.11.128c.188.22.38.459.568.665l.178.216.541.646.137.165.688.839v.023l.7.825c.046.064.1.128.146.188l.55.692.138.17q.674.862,1.343,1.729l.105.138.573.747.105.142q.674.88,1.32,1.761l.046.06.591.8.092.128.614.839,6.376-6.07L86,66.471A204.31,204.31,0,0,1,89.561,93.7c.917,14.961,16.081,30.43,36.054,38.422,18.827,7.519,53.817,23.039,50.287,35.969-15.783,11-66.331,11.609-98.241,5.544l-.193-.037C51.6,168.646,27.5,155.8,12.332,142.76,6.561,128.318,12.424,127.543,25.943,126.469Z" transform="translate(190.994 -25.717)" fill-rule="evenodd"/>
                                <path id="Path-52" data-name="Path" d="M243.788,81.517c-.05-.06-.1-.124-.146-.188A1.279,1.279,0,0,0,243.788,81.517Z" transform="translate(-5.251 -36.852)" fill="#0a1658" fill-rule="evenodd"/>
                                <path id="Path-53" data-name="Path" d="M267.6,57.993l-.165-.092Z" transform="translate(-42.173 -26.327)" fill="#0a1658" fill-rule="evenodd"/>
                                <path id="Path-54" data-name="Path" d="M256.968,66.56l-.183-.183Z" transform="translate(-25.67 -30.135)" fill="#0a1658" fill-rule="evenodd"/>
                                <path id="Path-55" data-name="Path" d="M260.718,63l-.188-.165Z" transform="translate(-31.482 -28.545)" fill="#0a1658" fill-rule="evenodd"/>
                                <path id="Path-56" data-name="Path" d="M266.6,58.566l-.124-.073Z" transform="translate(-40.633 -26.593)" fill="#0a1658" fill-rule="evenodd"/>
                                <path id="Path-57" data-name="Path" d="M264.309,60.108l-.183-.133Z" transform="translate(-37.053 -27.258)" fill="#0a1658" fill-rule="evenodd"/>
                                <path id="Path-58" data-name="Path" d="M259.59,64.041l-.183-.17Z" transform="translate(-29.736 -29.009)" fill="#0a1658" fill-rule="evenodd"/>
                                <path id="Path-59" data-name="Path" d="M265.383,59.342l-.133-.092Z" transform="translate(-38.746 -26.933)" fill="#0a1658" fill-rule="evenodd"/>
                                <path id="Path-60" data-name="Path" d="M263.229,60.927c-.051-.046-.105-.087-.16-.128C263.124,60.84,263.179,60.882,263.229,60.927Z" transform="translate(-35.391 -27.629)" fill="#0a1658" fill-rule="evenodd"/>
                                <path id="Path-61" data-name="Path" d="M261.925,61.968l-.1-.078Z" transform="translate(-33.404 -28.119)" fill="#0a1658" fill-rule="evenodd"/>
                                <path id="Path-62" data-name="Path" d="M254.475,69.108l-.088-.092Z" transform="translate(-21.855 -31.32)" fill="#0a1658" fill-rule="evenodd"/>
                                <path id="Path-63" data-name="Path" d="M251.8,72.029c-.064-.073-.128-.142-.188-.215C251.675,71.887,251.74,71.955,251.8,72.029Z" transform="translate(-17.658 -32.577)" fill="#0a1658" fill-rule="evenodd"/>
                                <path id="Path-64" data-name="Path" d="M269.635,57.067l-.074-.023Z" transform="translate(-45.372 -25.942)" fill="#0a1658" fill-rule="evenodd"/>
                                <path id="Path-65" data-name="Path" d="M250.528,73.458c-.041-.05-.083-.1-.128-.147A1.32,1.32,0,0,1,250.528,73.458Z" transform="translate(-15.713 -33.25)" fill="#0a1658" fill-rule="evenodd"/>
                                <path id="Path-66" data-name="Path" d="M270.552,56.79l-.142-.037Z" transform="translate(-46.757 -25.811)" fill="#0a1658" fill-rule="evenodd"/>
                                <path id="Path-67" data-name="Path" d="M253.058,70.622c-.055-.055-.105-.115-.16-.174A.587.587,0,0,0,253.058,70.622Z" transform="translate(-19.619 -31.964)" fill="#0a1658" fill-rule="evenodd"/>
                                <path id="Path-68" data-name="Path" d="M255.729,67.781l-.193-.2Z" transform="translate(-23.742 -30.677)" fill="#0a1658" fill-rule="evenodd"/>
                                <path id="Path-69" data-name="Path" d="M268.563,57.516l-.142-.064Z" transform="translate(-43.673 -26.125)" fill="#0a1658" fill-rule="evenodd"/>
                                <path id="Path-70" data-name="Path" d="M249.079,75.122l-.11-.128Z" transform="translate(-13.476 -34.006)" fill="#0a1658" fill-rule="evenodd"/>
                                <g id="top" transform="translate(159.162 103.902)">
                                    <path id="Path-71" data-name="Path" d="M125.975,53.036l-1.692,33.809S93.4,100.059,80.85,95.759s-29.242,2.751-39.689,7.684-41.174-.307-40.867-8.3S18.731,40.46,18.731,40.46c10.543-28.427,40.56-17.308,40.56-17.308S50.122,12.872,40.418,6.073c30.856,1.6,43.168-12.246,83.889-2.036C169.02,15.257,186.65,88.3,186.65,88.3l-35.032,6.148-13.624,1.023Z" transform="translate(24.911 -0.251)" fill="#fff" fill-rule="evenodd"/>
                                    <path id="Path-72" data-name="Path" d="M34.752,141.8C23.691,101.229,65.636,30,71.242,19.842S88.528,9.008,88.528,9.008c3.447.514,6.656.821,9.7,1,9.686,6.8,18.873,17.079,18.873,17.079S87.094,15.968,76.546,44.394c0,0-18.13,46.716-18.437,54.707s30.42,13.214,40.867,8.3,27.138-11.985,39.689-7.684S182.1,90.8,182.1,90.8l1.692-33.809,11.983,42.415L209.4,98.386,226.5,153.479C206.839,171.92,45.814,182.369,34.752,141.8Z" transform="translate(-32.903 -4.185)" fill="#c9e2f4" fill-rule="evenodd"/>
                                </g>
                                <path id="Path-73" data-name="Path" d="M147.368,117.528C153.9,111.38,153.2,97.4,153.2,97.4a15.839,15.839,0,0,1-8.476,6.222c-21.2,6.456-27.349-35.345-27.349-35.345-1.435-8.193.252-12.92,3.52-15.382,7.413,15.937,28.39,19.532,28.39,19.532,1.609,6.148,13.646,11.719,13.646,11.719,3.356,8.44,6.849,17.211,9.7,23.319,6.762,14.447,35.646,24.3,35.646,24.3-2.292,4.612-22.43,21.668-53.634,20.44a71.764,71.764,0,0,1-11.373-1.325C127.4,139.852,140.836,123.672,147.368,117.528Z" transform="translate(100.071 -24.075)" fill="#ff7977" fill-rule="evenodd"/>
                                <path id="Path-74" data-name="Path" d="M242.5,229.083a57.293,57.293,0,0,1-7.568-2.063C239.172,228.207,242.147,229,242.5,229.083Z" transform="translate(0.842 -102.307)" fill="#ff7977" fill-rule="evenodd"/>
                                <path id="Path-75" data-name="Path" d="M234.9,230.783h0Z" transform="translate(8.469 -103.998)" fill="#f35757" fill-rule="evenodd"/>
                                <path id="Path-76" data-name="Path" d="M216.842,169.126c32.574-2.921,30.012-29.2,30.012-29.2a15.775,15.775,0,0,0,8.476-6.222s.692,13.984-5.836,20.132-19.968,22.324-4.075,33.328h-.028c-.344-.092-3.323-.876-7.568-2.064C221.862,179.511,216.842,169.126,216.842,169.126Z" transform="translate(-2.055 -60.382)" fill="#f35757" fill-rule="evenodd"/>
                                <path id="Path-77" data-name="Path" d="M227.6,70.588s-20.977-3.595-28.39-19.532c8.632-6.5,28.325,2.82,31,6.162,2.131,2.664,6.459,13.567,11.038,25.089C241.246,82.307,229.208,76.736,227.6,70.588Z" transform="translate(21.761 -22.241)" fill="#f35757" fill-rule="evenodd"/>
                                <path id="Path-78" data-name="Path" d="M205.674,49.349c.963-4,22.806-3.581,28.027-2.453s27.555,21.205,3.484,20.077C222.639,66.295,214.177,60,209.749,55.13c-.087,4.773-1.834,11.045-9.132,15.428C200.6,70.559,193.146,54.933,205.674,49.349Z" transform="translate(15.311 -21.034)" fill-rule="evenodd"/>
                                <g id="hand" transform="translate(160.607 189.117)">
                                    <path id="Path-79" data-name="Path" d="M177.986,28.876c-2.178-8.487,2.364-12.1,6.032-13.617,3.447-.917,25.328-6.621,29.588-7.753,4.619-1.229,9.066-7.373,9.066-7.373a30.129,30.129,0,0,0,.575,5.374c.649,3.971,19.821,1.233,19.821,1.233-3.947,23.97-14.938,12.907-20.893,13.3a6.838,6.838,0,0,0-4.217,1.834s-15.716,12.233-20.625,15.3S181.453,42.392,177.986,28.876Z" transform="translate(-167.779 -0.133)" fill="#ff7976" fill-rule="evenodd"/>
                                    <path id="Path-80" data-name="Path" d="M251.608,56.865C243.769,35.2,269.582,27.7,269.582,27.7l.734-.119c-5.872,1.513-13.12,5.131-9.627,13.617,5.533,13.516,23.049,11.361,30.883,8.29s32.9-15.3,32.914-15.3c-5.68,3.072-11.208,9.945-25.382,20.508C279.722,69.125,259.442,78.543,251.608,56.865Z" transform="translate(-250.126 -12.465)" fill="#f35757" fill-rule="evenodd"/>
                                    <path id="Path-81" data-name="Path" d="M62.043,23.8c-7.079-5.529-16.776,3.59-57.1-8.418C-.658,9.078,1.06.133,1.06.133,5.818,8.89,47.019,6.126,47.019,6.126L47.69.133c6.858,3.92,5.368,6.066,17.655,10.756,18.413,7.038,52.179-.77,52.179-.77l71.222-7.171s12,33.14-18.594,38.215a103.771,103.771,0,0,1-15.736,1.206C154.228,42.351,74.832,33.791,62.043,23.8Z" transform="translate(20.6 -0.133)" fill="#ff7976" fill-rule="evenodd"/>
                                    <path id="Path-82" data-name="Path" d="M83.751,39.974c-14.485-6.125-24.791-2.751-33.395-7.992a12.184,12.184,0,0,1-4.085-4.168c27.55,12.008,34.174,2.889,39.01,8.418,8.737,10,62.976,18.555,63.1,18.574C126.891,55.1,97.145,45.636,83.751,39.974Z" transform="translate(-22.04 -12.57)" fill="#f35757" fill-rule="evenodd"/>
                                </g>
                                <g id="pants" transform="translate(50.76 218.967)">
                                    <path id="Path-83" data-name="Path" d="M132.388,117.416c40.564-19.362,156.083,13.246,194.044,54.561,0,0-27.8,6.006-80.038,0s-90.65-.17-109.7,24.419c-13.886,17.914-45.869,61.282-61.257,89.681l-21.756-9.138C67.335,237.023,96.925,134.344,132.388,117.416Z" transform="translate(-46.413 -50.299)" fill="#0a1658" fill-rule="evenodd"/>
                                    <path id="Path-84" data-name="Path" d="M235.834,298.8s67.386-125.572,85.333-130.867,42.2-6.827,69.852,3.31" transform="translate(-211.319 -73.701)" fill="none" stroke="#050d2d" stroke-linecap="round" stroke-width="2" fill-rule="evenodd"/>
                                    <path id="Path-85" data-name="Path" d="M60.549,6.517C89.7,17.668,125.583,34.779,153.234,42.335c15.673,6.144,28.88,11.494,33.464,13.755,9.168,4.585,33.583-.761,48.99-4.883,5.441,25.8,8.206,72.226-42.394,72.685-70.063.615-125.581-44.716-125.581-44.716s2.008,56.972,5.927,87.031l-19.565,7.038C37.678,139.577.827,58.107.3,34.449-.3,5.866,19.681-9.1,60.549,6.517Z" transform="translate(70.904 -0.219)" fill="#46389c" fill-rule="evenodd"/>
                                    <path id="Path-86" data-name="Path" d="M38.908,84.056C34.323,81.763,21.121,76.426,5.444,70.3c11.116,3.04,20.9,4.534,28.39,3.475C59.962,70.108,74.4,69.783,83.309,62.406a137.958,137.958,0,0,1,4.584,16.785C72.49,83.294,48.08,88.641,38.908,84.056Z" transform="translate(218.69 -28.158)" fill="#0a1658" fill-rule="evenodd"/>
                                    <path id="Path-87" data-name="Path" d="M210.4,83.62s13.725,30.215-11.882,31.856S120.265,95.6,98.546,80.846s-57.562-38.931-60.024-29.5,7.99,23.424,12.909,57.426,11.46,74.964,11.46,74.964" transform="translate(74.493 -22.234)" fill="none" stroke="#f1f2f2" stroke-linecap="round" stroke-width="2" fill-rule="evenodd"/>
                                    <path id="Path-88" data-name="Path" d="M300.811,322.5c-1.128-1.908-3.667-6.846-7.078-13.86L313.3,301.6c.967,7.437,2.058,13.219,3.259,16.089a66.728,66.728,0,0,1-13.825,9.757A17.929,17.929,0,0,0,300.811,322.5Z" transform="translate(-168.744 -135.623)" fill="#ff7976" fill-rule="evenodd"/>
                                    <path id="Path-89" data-name="Path" d="M511.8,424.658c1.274-2.705,2.907-7.152,4.873-12.893l21.77,9.138a105.855,105.855,0,0,0-7.225,15.671l-21.81-7.409C510.26,427.7,511.071,426.2,511.8,424.658Z" transform="translate(-509.407 -185.115)" fill="#ff7976" fill-rule="evenodd"/>
                                </g>
                                <g id="shoes" transform="translate(0 401.038)">
                                    <path id="Path-90" data-name="Path" d="M3.412,70.343c-1.476-5.094-1.375-17.327-.458-22.4C4.022,42.058,9.28,22.366,6.3,10.065A66.834,66.834,0,0,0,20.13.308a9.137,9.137,0,0,0,.458.917c4.827,8.409,10.355,14.089,12.469,19.037C29.17,28.643,13.341,61.952,3.412,70.343Z" transform="translate(178.42 -0.308)" fill="#f5632c" fill-rule="evenodd"/>
                                    <path id="Path-91" data-name="Path" d="M31.191,41.065C30.577,47.213,6.2,87.171,2.715,88.808c-.871.408-1.536-.5-2.022-2.187,9.929-8.391,25.758-41.7,29.65-50.081A9.171,9.171,0,0,1,31.191,41.065Z" transform="translate(181.139 -16.586)" fill="#c9e2f3" fill-rule="evenodd"/>
                                    <path id="Path-92" data-name="Path" d="M43.409,39.673a11.719,11.719,0,0,0-7.335.536" transform="translate(149.457 -17.835)" fill="none" stroke="#c9e2f3" stroke-linecap="round" stroke-width="2" fill-rule="evenodd"/>
                                    <path id="Path-93" data-name="Path" d="M36.041,49.206s2.86-1.6,7.793-.564" transform="translate(149.05 -21.866)" fill="none" stroke="#c9e2f3" stroke-linecap="round" stroke-width="2" fill-rule="evenodd"/>
                                    <path id="Path-94" data-name="Path" d="M44.754,55.092s-4.974-.834-7.614.275" transform="translate(147.525 -24.786)" fill="none" stroke="#c9e2f3" stroke-linecap="round" stroke-width="2" fill-rule="evenodd"/>
                                    <path id="Path-95" data-name="Path" d="M254.529,157.976q1.328-1.375,3.507-3.251c11.983-10.27,34.019-22.925,45.226-41.9l21.811,7.41c-1.087,3.242-1.563,5.887-1.274,7.753.669,4.346,1.242,7.441.995,9.857a41.665,41.665,0,0,1-10.52,5.355C305.513,146.44,261.163,158.627,254.529,157.976Z" transform="translate(-252.516 -50.858)" fill="#e55017" fill-rule="evenodd"/>
                                    <path id="Path-96" data-name="Path" d="M293.438,173.932c-32.451,9.271-43.361,11.765-36.389,4.48,6.634.637,50.984-11.549,59.745-14.777a41.347,41.347,0,0,0,10.52-5.355C326.645,164.739,320.058,166.321,293.438,173.932Z" transform="translate(-255.037 -71.28)" fill="#c9e2f3" fill-rule="evenodd"/>
                                    <path id="Path-97" data-name="Path" d="M307.617,136.35l2.531,2.912" transform="translate(-266.828 -61.428)" fill="none" stroke="#c9e2f3" stroke-linecap="round" stroke-width="2" fill-rule="evenodd"/>
                                    <path id="Path-98" data-name="Path" d="M313.344,141.37l2.1,2.6" transform="translate(-275.282 -63.683)" fill="none" stroke="#c9e2f3" stroke-linecap="round" stroke-width="2" fill-rule="evenodd"/>
                                    <path id="Path-99" data-name="Path" d="M318.571,146.34l2.132,2.554" transform="translate(-283.416 -65.916)" fill="none" stroke="#c9e2f3" stroke-linecap="round" stroke-width="2" fill-rule="evenodd"/>
                                </g>
                            </g>
                            <path id="Path-100" data-name="Path" d="M454.208,116.349c12.5-10.02,24.373-15.961,26.52-13.279l43.68,29.674,44.319,25.575s-7.886,16.634-10.524,31.373,20.867,19.167,20.867,19.167c-10.877,16.953,1.274,69.745,1.274,69.745L529.012,320.26c-59.633-28.056-74.47-12.115-74.47-12.115L435.46,139.338C433.289,136.661,441.709,126.364,454.208,116.349Z" transform="translate(-267.748 -23.94)" fill-rule="evenodd" fill="url(#linear-gradient)"/>
                            <g id="plant" transform="translate(475.501 392.42)">
                                <path id="Path-101" data-name="Path" d="M81,87.171c-3.743,5.275-15.95.58-23.592-3.087C54.47,51.2,56.99,18.921,68.912,6.859c16.8-17.014,29.2,4.695,27.4,26.441-.542,6.559-2.73,18.184-5.36,31.949C86.879,75.4,83.032,84.3,81,87.171Z" transform="translate(-19.188 -0.754)" fill="#e17000" fill-rule="evenodd"/>
                                <path id="Path-102" data-name="Path" d="M82.745,290.794q.594-.157,1.17-.328C83.725,291.113,83.316,291.2,82.745,290.794Z" transform="translate(-21.737 -124.945)" fill="#c64e27" fill-rule="evenodd"/>
                                <path id="Path-103" data-name="Path" d="M65.973,132.475c7.642,3.667,19.849,8.362,23.592,3.087,2.035-2.854,5.883-11.772,9.953-21.922-6.092,31.868-14.547,75.237-10.391,93.7.9,3.99,1.108,6.345.808,7.348q-.575.171-1.17.328a16.084,16.084,0,0,1-3.329-4.452C76.317,194.836,68.731,163.386,65.973,132.475Z" transform="translate(-27.758 -49.145)" fill="#c1610a" fill-rule="evenodd"/>
                                <path id="Path-104" data-name="Path" d="M93.166,173.316c-.323,1.013-1.194.571-2.421-1.008C68.647,111.8,92.048,18.095,92.124,17.8a.964.964,0,1,1,1.869.476C93.917,18.542,70.2,113.528,93.166,173.316Z" transform="translate(-30.992 -7.748)" fill="#010b46" fill-rule="evenodd"/>
                                <path id="Path-105" data-name="Path" d="M134.107,162.488c-5.512-5.037-12.878-15.582-19.8-23.782-4.47-13.936-.542-28.191,14.533-21.556,11.233,4.947,21.59,24.81,28.871,47.369C155.92,183.008,140.413,168.253,134.107,162.488Z" transform="translate(-112.569 -49.931)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-106" data-name="Path" d="M147.439,249.608c-.875,5.8-2.33,6.806-3.6-1.289-3.267-20.881-39.98-71.418-47.555-86.691a39.952,39.952,0,0,1-2.23-5.522c6.924,8.219,14.291,18.764,19.8,23.782,6.306,5.765,21.823,20.519,23.6,2.012C145.441,206.586,149.726,234.477,147.439,249.608Z" transform="translate(-92.336 -67.349)" fill="#e0a010" fill-rule="evenodd"/>
                                <path id="Path-107" data-name="Path" d="M141.465,242.1c.523.642,1.027.071,1.465-1.427-1.341-50.289-45.263-111.6-45.4-111.8a.752.752,0,0,0-1.227.871C96.444,129.939,140.961,192.092,141.465,242.1Z" transform="translate(-88.417 -55.537)" fill="#010b46" fill-rule="evenodd"/>
                                <path id="Path-108" data-name="Path" d="M6.121,97.137c2.568-5.056,3.557-11.168,3.919-15.815A25.014,25.014,0,0,1,16.887,75.7c17.681-9.3,22.07,11.121,15.142,27.987-4.185,10.183-18.756,34.888-30.074,57.819C-1.621,155.441,1.584,106.084,6.121,97.137Z" transform="translate(74.058 -31.882)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-109" data-name="Path" d="M46.007,207.375c-6.158-27.587,5.764-97.34,26.041-120.085-.361,4.647-1.351,10.759-3.919,15.815-4.537,8.947-7.742,58.3-4.166,64.369-7.423,15.049-13.449,29.333-14.214,38.261C49,214.467,47.376,213.506,46.007,207.375Z" transform="translate(12.049 -37.85)" fill="#e0a010" fill-rule="evenodd"/>
                                <path id="Path-110" data-name="Path" d="M17.376,211.826c-.509.723-1.094.153-1.669-1.427-2.311-53.781,40-122.5,40.137-122.716a.806.806,0,1,1,1.374.842C57.08,88.744,14.19,158.407,17.376,211.826Z" transform="translate(43.195 -37.853)" fill="#010b46" fill-rule="evenodd"/>
                                <path id="Path-111" data-name="Path" d="M35.167,282.89l1.464,7.144,6.235,30.745h57.294l6.235-30.745,1.46-7.144Z" transform="translate(-18.494 -121.698)" fill="#303d8b" stroke="#010b46" stroke-width="1" fill-rule="evenodd"/>
                                <path id="Path-112" data-name="Path" d="M48.635,287.969H74.567l38.467,34.988H55.74Z" transform="translate(-31.368 -123.875)" fill="#010b46" fill-rule="evenodd" opacity="0.68"/>
                                <rect id="Rectangle-4" data-name="Rectangle" width="83.683" height="12.281" transform="translate(12.284 151.813)" fill="#303d8b" stroke="#010b46" stroke-width="1"/>
                            </g>
                            <g id="pencils" transform="translate(485.65 251.638)">
                                <path id="Rectangle-5" data-name="Rectangle" d="M0,65.9H7.636l0-65.9H0Z" transform="translate(20.052 74.587) rotate(-162.23)" fill="#303d8b" fill-rule="evenodd"/>
                                <path id="Rectangle-6" data-name="Rectangle" d="M0,.156H2.387V0H0Z" transform="translate(39.363 14.366) rotate(-162.24)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Rectangle-7" data-name="Rectangle" d="M0,.156H2.387V0H0Z" transform="translate(39.792 13.008) rotate(-162.23)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Rectangle-8" data-name="Rectangle" d="M0,.155H2.381V0H0Z" transform="translate(37.517 14.343) rotate(-161.928)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Path-113" data-name="Path" d="M3.08,29.15l2.273.728.114-.361L3.2,28.789Z" transform="translate(33.072 -12.631)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Rectangle-9" data-name="Rectangle" d="M0,.156H3.457V0H0Z" transform="translate(38.004 18.529) rotate(-162.23)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Path-114" data-name="Path" d="M5.46,36.576l2.273.732.114-.366-2.268-.728Z" transform="translate(29.331 -15.814)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Rectangle-10" data-name="Rectangle" d="M0,.156H2.387V0H0Z" transform="translate(37.541 20.047) rotate(-162.22)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Rectangle-11" data-name="Rectangle" d="M0,.156H2.383V0H0Z" transform="translate(36.636 22.784) rotate(-162.22)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Path-115" data-name="Path" d="M7.025,41.455l2.273.728.114-.361-2.268-.728Z" transform="translate(26.872 -17.906)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Path-116" data-name="Path" d="M7.808,43.324l3.3,1.051.114-.362L7.926,42.958Z" transform="translate(24.62 -18.705)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Rectangle-12" data-name="Rectangle" d="M0,.156H2.383V0H0Z" transform="translate(34.854 28.343) rotate(-162.22)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Path-117" data-name="Path" d="M8.607,46.408l2.268.728.119-.361-2.273-.728Z" transform="translate(24.387 -20.029)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Rectangle-13" data-name="Rectangle" d="M0,.156H2.387V0H0Z" transform="translate(34.42 29.77) rotate(-162.23)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Rectangle-14" data-name="Rectangle" d="M0,.156H2.387V0H0Z" transform="translate(33.946 31.116) rotate(-162.22)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Rectangle-15" data-name="Rectangle" d="M0,.156H3.457V0H0Z" transform="translate(33.514 32.522) rotate(-162.23)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Rectangle-16" data-name="Rectangle" d="M0,.156H2.383V0H0Z" transform="translate(32.595 35.376) rotate(-162.22)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Rectangle-17" data-name="Rectangle" d="M0,.156H2.387V0H0Z" transform="translate(33.036 34.019) rotate(-162.22)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Rectangle-18" data-name="Rectangle" d="M0,.156H2.387V0H0Z" transform="translate(32.168 36.8) rotate(-162.23)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Rectangle-19" data-name="Rectangle" d="M0,.156H2.383V0H0Z" transform="translate(31.748 38.185) rotate(-162.24)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Path-118" data-name="Path" d="M15.657,67.821l3.3,1.056.114-.361-3.291-1.056Z" transform="translate(12.287 -29.208)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Rectangle-20" data-name="Rectangle" d="M0,.156H2.383V0H0Z" transform="translate(30.383 42.287) rotate(-162.23)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Rectangle-21" data-name="Rectangle" d="M0,.156H2.383V0H0Z" transform="translate(30.822 40.932) rotate(-162.22)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Rectangle-22" data-name="Rectangle" d="M0,.156H2.387V0H0Z" transform="translate(29.929 43.69) rotate(-162.21)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Rectangle-23" data-name="Rectangle" d="M0,.156H2.387V0H0Z" transform="translate(29.478 45.054) rotate(-162.21)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Rectangle-24" data-name="Rectangle" d="M0,.156H3.457V0H0Z" transform="translate(29.069 46.48) rotate(-162.23)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Path-119" data-name="Path" d="M21.134,85.478l2.273.732.114-.366-2.268-.728Z" transform="translate(4.703 -36.777)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Rectangle-25" data-name="Rectangle" d="M0,.156H2.387V0H0Z" transform="translate(28.547 47.952) rotate(-162.21)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Rectangle-26" data-name="Rectangle" d="M0,.156H2.383V0H0Z" transform="translate(27.681 50.724) rotate(-162.23)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Rectangle-27" data-name="Rectangle" d="M0,.156H2.387V0H0Z" transform="translate(27.26 52.119) rotate(-162.24)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Path-120" data-name="Path" d="M23.473,92.222l3.291,1.061.119-.366-3.3-1.056Z" transform="translate(0.005 -39.668)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Rectangle-28" data-name="Rectangle" d="M0,.156H2.387V0H0Z" transform="translate(25.899 56.28) rotate(-162.23)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Rectangle-29" data-name="Rectangle" d="M0,.156H2.387V0H0Z" transform="translate(26.356 54.943) rotate(-162.24)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Rectangle-30" data-name="Rectangle" d="M0,.156H2.387V0H0Z" transform="translate(25.429 57.679) rotate(-162.21)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Rectangle-31" data-name="Rectangle" d="M0,.156H2.387V0H0Z" transform="translate(25.048 59.098) rotate(-162.24)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Rectangle-32" data-name="Rectangle" d="M0,.155H3.455V0H0Z" transform="translate(22.928 58.817) rotate(-161.928)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Rectangle-33" data-name="Rectangle" d="M0,.156H2.383V0H0Z" transform="translate(23.684 63.346) rotate(-162.24)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Rectangle-34" data-name="Rectangle" d="M0,.156H2.387V0H0Z" transform="translate(24.076 61.96) rotate(-162.23)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Rectangle-35" data-name="Rectangle" d="M0,.156H2.387V0H0Z" transform="translate(23.223 64.745) rotate(-162.2)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Rectangle-36" data-name="Rectangle" d="M0,.156H2.387V0H0Z" transform="translate(22.798 66.128) rotate(-162.26)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Rectangle-37" data-name="Rectangle" d="M0,.155H3.457V0H0Z" transform="translate(22.332 67.509) rotate(-162.23)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Rectangle-38" data-name="Rectangle" d="M0,64.049H.132L.129,0H0Z" transform="translate(14.059 71.74) rotate(-162.22)" fill="#29235c" fill-rule="evenodd"/>
                                <rect id="Rectangle-39" data-name="Rectangle" width="6.211" height="44.249" transform="translate(12.778 7.943)" fill="#ff7976"/>
                                <path id="Path-121" data-name="Path" d="M37.3,8.469,40.4.549l3.105,7.919Z" transform="translate(-24.52 -0.526)" fill="#fff" fill-rule="evenodd"/>
                                <path id="Path-122" data-name="Path" d="M42.918,2.41l-.737-1.9-.737,1.9A1.114,1.114,0,0,0,42.918,2.41Z" transform="translate(-26.297 -0.508)" fill="#29235c" fill-rule="evenodd"/>
                                <rect id="Rectangle-40" data-name="Rectangle" width="1.474" height="44.249" transform="translate(15.146 7.943)" fill="#d8154a" opacity="0.5"/>
                                <path id="Rectangle-41" data-name="Rectangle" d="M0,6.211l44.248,0V0L0,0Z" transform="translate(19.964 69.994) rotate(-115.87)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-123" data-name="Path" d="M60.258,47.014,59.6,38.529,65.846,44.3Z" transform="translate(-59.597 -16.806)" fill="#d0d0d0" fill-rule="evenodd"/>
                                <path id="Path-124" data-name="Path" d="M69.421,39.9l-1.484-1.37.157,2.017S68.841,40.841,69.421,39.9Z" transform="translate(-67.938 -16.806)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Rectangle-42" data-name="Rectangle" d="M0,1.474l44.247,0V0L0,0Z" transform="translate(22.105 68.975) rotate(-115.89)" fill="#29235c" fill-rule="evenodd"/>
                                <path id="Path-125" data-name="Path" d="M17.176,105.054H38.623L42,69.457H13.942Z" transform="translate(-9.672 -30.064)" fill="#feb701" fill-rule="evenodd"/>
                                <rect id="Rectangle-43" data-name="Rectangle" width="19.607" height="1.455" transform="translate(8.346 74.99)" fill="#bc810c"/>
                                <path id="Path-126" data-name="Path" d="M44.541,105.054s-13.6-1.275-13.206-9.322S19.86,69.457,19.86,69.457l3.215,35.6Z" transform="translate(-15.59 -30.064)" fill="#db9c0f" fill-rule="evenodd"/>
                            </g>
                            <g id="cactus" transform="translate(540.876 265.222)">
                                <path id="Path-127" data-name="Path" d="M10.7,33.428a33.5,33.5,0,0,1-.585-6.464v-.537L7.741,25l2.506-1.075a36.219,36.219,0,0,1,.685-4.395,21.711,21.711,0,0,1,.785-2.683l-1.669-1.874,2.568-.252a19.026,19.026,0,0,1,3.329-4.8l-.671-2.7,2.516,1.051A12.063,12.063,0,0,1,23.41,5.94l1.2-2.3,1.1,2.226a11.45,11.45,0,0,1,6.23,2.183l1.978-.809L33.4,9.317a16.647,16.647,0,0,1,3.443,5.446l2.278.224-1.574,1.765A31.62,31.62,0,0,1,38.8,23.886l2.62,1.123-2.549,1.513a51.4,51.4,0,0,1-.4,6.883l2.045,1.589-2.454.7a19.5,19.5,0,0,1-2.616,6.5l1.36,2.121-2.787-.2a16.75,16.75,0,0,1-2.311,2.155,12.025,12.025,0,0,1-13.639.832,11.618,11.618,0,0,1-3.191-2.968l-2.463.176,1.274-2.031a29.969,29.969,0,0,1-2.43-6.469v-.081L8.7,35Z" transform="translate(-3.708 -1.64)" fill="#c1610a" fill-rule="evenodd"/>
                                <path id="Path-128" data-name="Path" d="M11.28,46.417a11.643,11.643,0,0,0,4.3-6.255,35.923,35.923,0,0,0,1.346-8.038,48.327,48.327,0,0,0,0-10.421,21.127,21.127,0,0,0-3.648-9.722A23.081,23.081,0,0,0,8.161,6.92a11.668,11.668,0,0,1,3.353-.98l1.2-2.3,1.1,2.226a11.45,11.45,0,0,1,6.23,2.183l1.978-.809L21.5,9.317a16.647,16.647,0,0,1,3.443,5.446l2.278.224-1.574,1.765a31.62,31.62,0,0,1,1.255,7.135l2.62,1.123-2.549,1.513a51.409,51.409,0,0,1-.4,6.883l2.045,1.589-2.454.7a19.5,19.5,0,0,1-2.616,6.5l1.336,2.121-2.787-.2a16.75,16.75,0,0,1-2.311,2.155A12.115,12.115,0,0,1,7.7,47.911,9.786,9.786,0,0,0,11.28,46.417Z" transform="translate(8.213 -1.64)" fill="#eaeaea" fill-rule="evenodd" opacity="0.5"/>
                                <path id="Path-129" data-name="Path" d="M18.16,38.389a39.906,39.906,0,0,0,1.227-11.468c0-3.6-.033-7.235-1.208-10.683A15.269,15.269,0,0,0,15.8,11.7a12.294,12.294,0,0,0-3.724-3.073c-.732-.409-1.484-.771-2.249-1.108A6.605,6.605,0,0,1,8.05,6.454a3.365,3.365,0,0,1-.342-.347c.309-.067.623-.124.951-.166l1.2-2.3,1.1,2.226a11.45,11.45,0,0,1,6.23,2.183l1.978-.809L18.65,9.317a16.647,16.647,0,0,1,3.443,5.446l2.278.224L22.8,16.752a31.62,31.62,0,0,1,1.255,7.135l2.62,1.123-2.549,1.513a51.4,51.4,0,0,1-.4,6.883l2.045,1.589-2.454.7a19.5,19.5,0,0,1-2.616,6.5l1.341,2.121-2.787-.2a16.75,16.75,0,0,1-2.311,2.155,12.268,12.268,0,0,1-7.338,2.564A18.4,18.4,0,0,0,18.16,38.389Z" transform="translate(11.062 -1.64)" fill="#eaeaea" fill-rule="evenodd" opacity="0.5"/>
                                <path id="Path-130" data-name="Path" d="M44.985,18.718c.086.252.171.509.271.761a36.75,36.75,0,0,1,2.378,8.5,33.428,33.428,0,0,1-.766,10.864c-.442,2.193-.756,4.923-2,6.835a3.329,3.329,0,0,1-2.454,1.541,5.785,5.785,0,0,1-3.424-1.655c-1.517-1.689-1.736-3.943-1.9-6.107-.1-1.284-.124-2.583-.276-3.862-.547-4.495-1.322-9.118-.252-13.608a15.7,15.7,0,0,1,1.37-3.715c1.07-2.026,4.052-5.556,5.921-2.431A14.462,14.462,0,0,1,44.985,18.718Z" transform="translate(-26.257 -6.342)" fill="#e17000" fill-rule="evenodd"/>
                                <path id="Path-131" data-name="Path" d="M64.108,25.111a5.684,5.684,0,0,1-.842-.1,7.242,7.242,0,0,1-1.783-.528,5.894,5.894,0,0,1-.88-.476c-.138-.081-.262-.176-.38-.257A2.637,2.637,0,0,1,59.9,23.5a4.5,4.5,0,0,1-.476-.414l-.166-.162s.057.062.152.181a3.806,3.806,0,0,0,.428.476,2.243,2.243,0,0,0,.314.276,3.211,3.211,0,0,0,.376.281,5.974,5.974,0,0,0,.894.476,6.26,6.26,0,0,0,1.84.476,4.669,4.669,0,0,0,.866,0,.016.016,0,1,0-.019.019Z" transform="translate(-55.848 -9.909)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-132" data-name="Path" d="M63.161,23.818a6.163,6.163,0,0,1-.742-.423,7.291,7.291,0,0,1-1.427-1.184,5.864,5.864,0,0,1-.628-.77,4.3,4.3,0,0,1-.247-.381,2.783,2.783,0,0,1-.2-.361c-.119-.224-.2-.419-.262-.556l-.09-.219h0a.038.038,0,0,0,0,.024l.067.228a3.729,3.729,0,0,0,.214.59,2.685,2.685,0,0,0,.181.376,3.21,3.21,0,0,0,.238.4,5.831,5.831,0,0,0,.628.8,6.183,6.183,0,0,0,1.5,1.17,4.622,4.622,0,0,0,.789.361.024.024,0,0,0,.033,0,.04.04,0,1,0-.052-.062Z" transform="translate(-55.119 -8.621)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-133" data-name="Path" d="M61.646,26.74a.676.676,0,0,1-.276.138,1.6,1.6,0,0,1-.314.076,3.076,3.076,0,0,1-.371.029,6.546,6.546,0,0,1-.713,0h-.333l.319.09a2.842,2.842,0,0,0,.338.062h.4a2.776,2.776,0,0,0,.4-.048,1.308,1.308,0,0,0,.333-.119.713.713,0,0,0,.266-.224.024.024,0,0,0,0-.038.029.029,0,1,0-.048.033Z" transform="translate(-53.637 -11.524)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-134" data-name="Path" d="M61.253,21.081a6.707,6.707,0,0,1-.842-.1,7.682,7.682,0,0,1-1.783-.528,5.5,5.5,0,0,1-.88-.476c-.138-.081-.257-.171-.38-.257a3.05,3.05,0,0,1-.323-.252,5.039,5.039,0,0,1-.476-.409L56.4,18.9h0l.152.181a3.81,3.81,0,0,0,.428.476,3.089,3.089,0,0,0,.314.276,3.394,3.394,0,0,0,.38.276,5.761,5.761,0,0,0,.894.476,6.182,6.182,0,0,0,1.836.476,4.67,4.67,0,0,0,.866,0,.029.029,0,1,0,0-.052Z" transform="translate(-51.39 -8.182)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-135" data-name="Path" d="M60.331,19.78a5.474,5.474,0,0,1-.737-.419,7.523,7.523,0,0,1-1.427-1.189,5.894,5.894,0,0,1-.628-.766c-.1-.128-.171-.262-.247-.385a3.022,3.022,0,0,1-.2-.357,5.44,5.44,0,0,1-.257-.561l-.09-.219v.024c0,.024.029.081.071.224a3.77,3.77,0,0,0,.209.59,3.045,3.045,0,0,0,.181.381c.076.128.143.271.238.4a6.081,6.081,0,0,0,.633.8,6.318,6.318,0,0,0,1.5,1.17,5,5,0,0,0,.785.362.029.029,0,0,0,.033,0,.044.044,0,0,0-.062-.062Z" transform="translate(-50.686 -6.89)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-136" data-name="Path" d="M58.845,22.724a.628.628,0,0,1-.276.143,1.653,1.653,0,0,1-.309.071,3.167,3.167,0,0,1-.376.029,6.661,6.661,0,0,1-.713,0h-.333s.128.043.323.09a1.588,1.588,0,0,0,.338.062c.124,0,.262.024.395.029a3.52,3.52,0,0,0,.4-.052,1.184,1.184,0,0,0,.333-.119.557.557,0,0,0,.266-.224.029.029,0,0,0,0-.038.033.033,0,0,0-.048.009Z" transform="translate(-49.234 -9.815)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-137" data-name="Path" d="M57.921,17.246a5.4,5.4,0,0,1-.837-.124,7.408,7.408,0,0,1-1.76-.6,5.555,5.555,0,0,1-.861-.476c-.138-.086-.257-.186-.371-.271a2.557,2.557,0,0,1-.314-.266,4.942,4.942,0,0,1-.442-.428l-.162-.171a.029.029,0,0,0,0,.029l.143.186a4.063,4.063,0,0,0,.409.476,2.941,2.941,0,0,0,.3.285,2.857,2.857,0,0,0,.366.295,6.1,6.1,0,0,0,.875.528,6.358,6.358,0,0,0,1.817.556,4.724,4.724,0,0,0,.861.057.028.028,0,0,0,.029-.029S57.955,17.251,57.921,17.246Z" transform="translate(-46.218 -6.473)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-138" data-name="Path" d="M57.052,15.957a6.27,6.27,0,0,1-.723-.447,7.491,7.491,0,0,1-1.384-1.241,5.8,5.8,0,0,1-.6-.794c-.09-.128-.157-.266-.233-.39a3.329,3.329,0,0,1-.19-.357,5.614,5.614,0,0,1-.238-.571l-.081-.219H53.58c-.024,0,0,0,0,.024l.057.228a3.709,3.709,0,0,0,.19.595,2.418,2.418,0,0,0,.166.385,2.944,2.944,0,0,0,.224.414,5.656,5.656,0,0,0,.594.828,6.239,6.239,0,0,0,1.455,1.227,4.721,4.721,0,0,0,.77.39.036.036,0,1,0,.014-.071Z" transform="translate(-45.548 -5.198)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-139" data-name="Path" d="M55.591,18.975a.713.713,0,0,1-.281.128,1.8,1.8,0,0,1-.319.062,3.138,3.138,0,0,1-.371,0,3.3,3.3,0,0,1-.713-.048.639.639,0,0,0-.333,0h0s.128.048.319.1a2.575,2.575,0,0,0,.338.076c.124,0,.262.033.395.038a2.673,2.673,0,0,0,.4-.033,1.317,1.317,0,0,0,.342-.1.608.608,0,0,0,.271-.214.029.029,0,0,0,0-.038.028.028,0,0,0-.048.029Z" transform="translate(-44.116 -8.197)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-140" data-name="Path" d="M64.747,59.575a5.51,5.51,0,0,1-.556.637,7.455,7.455,0,0,1-1.427,1.165,5.569,5.569,0,0,1-.88.476c-.143.071-.29.114-.423.166a2.48,2.48,0,0,1-.395.124,5.143,5.143,0,0,1-.6.143l-.228.043.238-.024a3.357,3.357,0,0,0,.618-.086,3.039,3.039,0,0,0,.409-.1,2.846,2.846,0,0,0,.442-.152,5.8,5.8,0,0,0,.913-.452,6.425,6.425,0,0,0,1.45-1.232,4.9,4.9,0,0,0,.509-.7.024.024,0,0,0,0-.038.039.039,0,0,0-.071.033Z" transform="translate(-57.104 -25.595)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-141" data-name="Path" d="M65.883,59.926a6.353,6.353,0,0,1-.77.371,7.372,7.372,0,0,1-1.788.476,5.9,5.9,0,0,1-.989.081h-.476a2.72,2.72,0,0,1-.409-.038,5.586,5.586,0,0,1-.609-.1l-.228-.052a.024.024,0,0,0-.024,0v.024l.224.071a3.754,3.754,0,0,0,.6.162,3.433,3.433,0,0,0,.414.067,3.659,3.659,0,0,0,.476.033,5.737,5.737,0,0,0,1.018-.057,6.386,6.386,0,0,0,1.817-.566,4.916,4.916,0,0,0,.742-.438.029.029,0,0,0-.029-.048Z" transform="translate(-58.369 -25.761)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-142" data-name="Path" d="M61.453,59.947a.58.58,0,0,1-.038.3,1.674,1.674,0,0,1-.124.3,2.806,2.806,0,0,1-.186.323,6.726,6.726,0,0,1-.423.576c-.119.157-.195.266-.195.266v.024h0l.257-.214a1.945,1.945,0,0,0,.243-.243c.081-.1.166-.2.247-.314a2.856,2.856,0,0,0,.185-.357,1.094,1.094,0,0,0,.1-.342.647.647,0,0,0-.033-.342.029.029,0,1,0-.052,0Z" transform="translate(-53.944 -25.753)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-143" data-name="Path" d="M59.571,62.417a6.845,6.845,0,0,1-.338.78,7.513,7.513,0,0,1-1.027,1.551,5.168,5.168,0,0,1-.694.709c-.114.109-.243.2-.357.29a2.4,2.4,0,0,1-.333.238,5.735,5.735,0,0,1-.528.319l-.209.109.219-.09a3.5,3.5,0,0,0,.566-.276,4.864,4.864,0,0,0,.732-.476,5.711,5.711,0,0,0,.728-.713,6.262,6.262,0,0,0,1-1.617,4.758,4.758,0,0,0,.276-.818.038.038,0,0,0-.024-.033S59.571,62.384,59.571,62.417Z" transform="translate(-49.513 -26.825)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-144" data-name="Path" d="M60.924,62.711a5.848,5.848,0,0,1-.618.585,7.135,7.135,0,0,1-1.55,1.023,5.6,5.6,0,0,1-.918.38c-.147.052-.3.086-.438.124a2.889,2.889,0,0,1-.4.086,4.5,4.5,0,0,1-.613.086h0a4.508,4.508,0,0,0,.623-.029,3.553,3.553,0,0,0,.414-.067,3.318,3.318,0,0,0,.476-.109,5.837,5.837,0,0,0,.951-.366,6.237,6.237,0,0,0,1.56-1.094,4.643,4.643,0,0,0,.571-.647.029.029,0,1,0-.043-.033Z" transform="translate(-50.942 -26.929)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-145" data-name="Path" d="M56.337,62.789a.6.6,0,0,1,.057.3,1.593,1.593,0,0,1-.024.323,2.672,2.672,0,0,1-.081.366,6.541,6.541,0,0,1-.228.675c-.067.185-.1.314-.1.314s.076-.109.181-.285a1.8,1.8,0,0,0,.157-.3c.043-.119.1-.243.138-.371a1.914,1.914,0,0,0,.071-.395,1.423,1.423,0,0,0,0-.357.647.647,0,0,0-.138-.319.028.028,0,0,0-.038,0,.033.033,0,0,0-.006.026A.034.034,0,0,0,56.337,62.789Z" transform="translate(-46.346 -26.973)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-146" data-name="Path" d="M63.646,47.87a5.707,5.707,0,0,1-.671.528,7.674,7.674,0,0,1-1.636.875,5.706,5.706,0,0,1-.951.29,4.082,4.082,0,0,1-.447.086,2.569,2.569,0,0,1-.409.048,4.391,4.391,0,0,1-.618.029h-.233l.238.024a3.9,3.9,0,0,0,.623,0,5.23,5.23,0,0,0,.885-.09,5.936,5.936,0,0,0,.98-.276,6.307,6.307,0,0,0,1.65-.951,4.7,4.7,0,0,0,.632-.59.024.024,0,0,0,0-.038Z" transform="translate(-55.087 -20.573)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-147" data-name="Path" d="M64.262,48a6.231,6.231,0,0,1-.818.224,7.54,7.54,0,0,1-1.855.162,5.94,5.94,0,0,1-.984-.1c-.157-.024-.3-.067-.447-.1a2.768,2.768,0,0,1-.395-.114,4.866,4.866,0,0,1-.575-.219l-.219-.09.209.114a4.022,4.022,0,0,0,.566.271,2.733,2.733,0,0,0,.395.138,3.132,3.132,0,0,0,.452.124,5.781,5.781,0,0,0,1.013.128,6.261,6.261,0,0,0,1.9-.219,4.722,4.722,0,0,0,.813-.295.029.029,0,0,0-.024-.052Z" transform="translate(-55.887 -20.551)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-148" data-name="Path" d="M60.3,48.244a.7.7,0,0,1-.1.29,1.506,1.506,0,0,1-.171.276c-.067.1-.162.186-.243.281a4.942,4.942,0,0,1-.523.476,1.319,1.319,0,0,0-.243.224s.119-.057.29-.162a1.862,1.862,0,0,0,.285-.19c.1-.086.2-.166.3-.262a1.528,1.528,0,0,0,.247-.314,1.233,1.233,0,0,0,.152-.323.642.642,0,0,0,.033-.347.029.029,0,0,0-.029,0A.038.038,0,0,0,60.3,48.244Z" transform="translate(-51.926 -20.738)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-149" data-name="Path" d="M49.538,8.317a5.808,5.808,0,0,1-.442-.723,7.387,7.387,0,0,1-.675-1.731,5.6,5.6,0,0,1-.176-.98,2.333,2.333,0,0,0-.033-.476,3.908,3.908,0,0,1,0-.409,5.473,5.473,0,0,1,.048-.614.911.911,0,0,1,.024-.233V3.128a.024.024,0,0,0-.024,0l-.052.233a4.665,4.665,0,0,0-.1.618,2.875,2.875,0,0,0,0,.419,3.886,3.886,0,0,0,0,.476,6.06,6.06,0,0,0,.9,2.759,4.633,4.633,0,0,0,.514.7.029.029,0,1,0,.038-.038Z" transform="translate(-34.919 -1.42)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-150" data-name="Path" d="M47.182,7.99a5.751,5.751,0,0,1-.119-.842,7.363,7.363,0,0,1,.057-1.86,5.607,5.607,0,0,1,.219-.951c.043-.152.1-.295.152-.433a3.084,3.084,0,0,1,.162-.376,4.7,4.7,0,0,1,.285-.552l.114-.2h-.024l-.138.2a4.756,4.756,0,0,0-.523.9,4.573,4.573,0,0,0-.176.433,5.909,5.909,0,0,0-.247.989,6.208,6.208,0,0,0,0,1.9,4.752,4.752,0,0,0,.195.842.033.033,0,0,0,.038,0,.024.024,0,0,0,0-.048Z" transform="translate(-32.691 -1.269)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-151" data-name="Path" d="M49.742,10.788a.69.69,0,0,1-.281-.133,1.47,1.47,0,0,1-.247-.2c-.09-.076-.166-.186-.257-.276-.157-.2-.314-.409-.418-.576l-.195-.271h0s.048.124.128.309a2.072,2.072,0,0,0,.157.3c.071.1.143.219.223.328a3.972,3.972,0,0,0,.281.285,1.559,1.559,0,0,0,.3.19.728.728,0,0,0,.342.076.029.029,0,0,0,0-.057Z" transform="translate(-35.285 -4.081)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-152" data-name="Path" d="M67.221,38.786a5.479,5.479,0,0,1-.794.3,7.332,7.332,0,0,1-1.812.371,5.277,5.277,0,0,1-.989,0,4.313,4.313,0,0,1-.476-.052,2.442,2.442,0,0,1-.4-.076,4.65,4.65,0,0,1-.594-.157l-.228-.067.219.09a3.747,3.747,0,0,0,.59.214,3.03,3.03,0,0,0,.409.1,3.457,3.457,0,0,0,.476.076,6.6,6.6,0,0,0,1.022.029,6.328,6.328,0,0,0,1.855-.409,4.606,4.606,0,0,0,.78-.376.029.029,0,0,0,0-.038A.148.148,0,0,0,67.221,38.786Z" transform="translate(-60.521 -16.707)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-153" data-name="Path" d="M67.263,37.586a5.968,5.968,0,0,1-.851-.033,7.44,7.44,0,0,1-1.812-.395,5.861,5.861,0,0,1-.913-.395c-.143-.071-.271-.157-.395-.228a2.852,2.852,0,0,1-.342-.228,5.16,5.16,0,0,1-.476-.381l-.176-.152h-.029a.029.029,0,0,0,0,.029l.166.171a4.307,4.307,0,0,0,.476.423,2.377,2.377,0,0,0,.338.252,2.947,2.947,0,0,0,.395.252,5.953,5.953,0,0,0,2.8.78,4.718,4.718,0,0,0,.861-.038.038.038,0,0,0,.024-.033.033.033,0,0,0-.062-.024Z" transform="translate(-60.762 -15.416)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-154" data-name="Path" d="M64.041,38.979a.633.633,0,0,1-.181.252,1.9,1.9,0,0,1-.243.209c-.1.071-.214.128-.319.2a6.985,6.985,0,0,1-.647.309l-.3.143v.024a1.107,1.107,0,0,0,.323-.067,1.735,1.735,0,0,0,.333-.1c.114-.048.243-.1.361-.157a2.921,2.921,0,0,0,.333-.228,1.107,1.107,0,0,0,.243-.257.77.77,0,0,0,.138-.319v-.033a.029.029,0,0,0-.043.029Z" transform="translate(-57.568 -16.776)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-155" data-name="Path" d="M54.287,13.312a5.606,5.606,0,0,1-.666-.509,7.5,7.5,0,0,1-1.274-1.351,5.5,5.5,0,0,1-.533-.837c-.076-.138-.133-.281-.2-.414a3.337,3.337,0,0,1-.152-.381,4.59,4.59,0,0,1-.186-.59l-.067-.224h0l.038.233a3.844,3.844,0,0,0,.138.614,3.223,3.223,0,0,0,.133.395c.057.138.109.29.186.433a6.482,6.482,0,0,0,.528.875A6.307,6.307,0,0,0,53.527,12.9a4.759,4.759,0,0,0,.732.476.033.033,0,0,0,.038,0,.031.031,0,0,0-.01-.062Z" transform="translate(-41.443 -3.942)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-156" data-name="Path" d="M52.979,12.437a5.759,5.759,0,0,1-.428-.732A7.412,7.412,0,0,1,51.9,9.959a6.076,6.076,0,0,1-.157-.98V8.5a2.975,2.975,0,0,1,0-.414,5.244,5.244,0,0,1,.057-.614.7.7,0,0,1,.033-.233h-.024l-.052.233a3.769,3.769,0,0,0-.114.614,2.86,2.86,0,0,0-.033.419,3.117,3.117,0,0,0,0,.476A5.5,5.5,0,0,0,51.752,10a6.317,6.317,0,0,0,.709,1.765,4.392,4.392,0,0,0,.476.7.024.024,0,0,0,.038,0A.038.038,0,0,0,52.979,12.437Z" transform="translate(-40.324 -3.186)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-157" data-name="Path" d="M53.489,15.727a.593.593,0,0,1-.309,0,2.03,2.03,0,0,1-.309-.1c-.109-.038-.223-.109-.338-.162-.224-.128-.447-.262-.6-.376a2.06,2.06,0,0,0-.285-.176H51.62s.09.1.233.243a2.628,2.628,0,0,0,.262.224c.1.071.214.152.333.219a3.083,3.083,0,0,0,.366.162,1.428,1.428,0,0,0,.352.067.7.7,0,0,0,.342-.062.024.024,0,0,0,0-.033A.029.029,0,0,0,53.489,15.727Z" transform="translate(-40.867 -6.476)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-158" data-name="Path" d="M66.364,43.155a6.04,6.04,0,0,1-.766.371A7.442,7.442,0,0,1,63.81,44a5.982,5.982,0,0,1-.989.081h-.476a2.647,2.647,0,0,1-.4-.038,5.028,5.028,0,0,1-.609-.109l-.233-.048h0l.224.071a3.91,3.91,0,0,0,.609.166,3.135,3.135,0,0,0,.414.067,3.648,3.648,0,0,0,.476.033,5.71,5.71,0,0,0,1.018-.057,6.243,6.243,0,0,0,1.817-.561,5.167,5.167,0,0,0,.747-.438.022.022,0,1,0-.038-.014Z" transform="translate(-59.178 -18.569)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-159" data-name="Path" d="M63.05,43.385a.623.623,0,0,1-.162.262,1.294,1.294,0,0,1-.228.228,2.586,2.586,0,0,1-.3.224,6.552,6.552,0,0,1-.613.361l-.285.166.323-.1a2.545,2.545,0,0,0,.319-.124c.109-.062.233-.119.352-.19a3.244,3.244,0,0,0,.309-.252,1.265,1.265,0,0,0,.224-.276.619.619,0,0,0,.1-.333.038.038,0,0,0-.024-.033.032.032,0,0,0-.019.062Z" transform="translate(-56.069 -18.652)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-160" data-name="Path" d="M66.553,33.033a5.317,5.317,0,0,1-.842.124,7.341,7.341,0,0,1-1.859-.052,5.6,5.6,0,0,1-.951-.219c-.152-.043-.295-.1-.433-.147a3.076,3.076,0,0,1-.376-.162,5.7,5.7,0,0,1-.552-.281l-.2-.119.19.133a3.8,3.8,0,0,0,.533.338,3.466,3.466,0,0,0,.376.186,3.567,3.567,0,0,0,.433.171,5.84,5.84,0,0,0,.994.247,6.181,6.181,0,0,0,1.9,0,4.484,4.484,0,0,0,.842-.2.028.028,0,0,0,0-.033.033.033,0,0,0-.052.014Z" transform="translate(-59.515 -13.874)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-161" data-name="Path" d="M62.806,33.717a.69.69,0,0,1-.133.281,1.473,1.473,0,0,1-.2.247,3.458,3.458,0,0,1-.271.252c-.2.162-.409.319-.575.423a2.451,2.451,0,0,0-.271.2v.029h.024l.309-.128a2.335,2.335,0,0,0,.3-.157c.1-.071.219-.143.328-.224a3.217,3.217,0,0,0,.285-.285,1.312,1.312,0,0,0,.19-.3.609.609,0,0,0,.071-.338.029.029,0,0,0-.029-.029S62.806,33.7,62.806,33.717Z" transform="translate(-55.777 -14.52)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-162" data-name="Path" d="M64.534,29.814a6.387,6.387,0,0,1-.808.262,7.575,7.575,0,0,1-1.84.252,5.231,5.231,0,0,1-.994-.057,4.491,4.491,0,0,1-.452-.076,2.829,2.829,0,0,1-.395-.1,5.28,5.28,0,0,1-.59-.186l-.224-.081.214.1a4.025,4.025,0,0,0,.575.247,3.742,3.742,0,0,0,.4.119,4.051,4.051,0,0,0,.476.1,5.928,5.928,0,0,0,1.018.076,6.215,6.215,0,0,0,1.874-.309,5.111,5.111,0,0,0,.8-.338.024.024,0,0,0,0-.038.031.031,0,0,0-.057.024Z" transform="translate(-56.302 -12.843)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-163" data-name="Path" d="M64.581,28.433a6.263,6.263,0,0,1-.846-.076,7.558,7.558,0,0,1-1.793-.476,5.534,5.534,0,0,1-.889-.442,4.152,4.152,0,0,1-.385-.247,3.176,3.176,0,0,1-.333-.243c-.2-.157-.357-.3-.476-.4l-.171-.162h-.024l.157.181a3.691,3.691,0,0,0,.437.447,3.071,3.071,0,0,0,.319.271,3.952,3.952,0,0,0,.385.271,5.78,5.78,0,0,0,.9.476,6.267,6.267,0,0,0,1.85.447,4.431,4.431,0,0,0,.861,0,.022.022,0,1,0,0-.043Z" transform="translate(-56.554 -11.39)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-164" data-name="Path" d="M65.786,54.638a6.238,6.238,0,0,1-.709.476,7.4,7.4,0,0,1-1.7.747,5.522,5.522,0,0,1-.951.219c-.157.029-.314.033-.476.048a3.074,3.074,0,0,1-.409,0,5.611,5.611,0,0,1-.618,0h-.233l.233.038a3.516,3.516,0,0,0,.623.076,3.007,3.007,0,0,0,.418,0,4.062,4.062,0,0,0,.476-.033,5.888,5.888,0,0,0,1-.2,6.378,6.378,0,0,0,1.721-.813,4.567,4.567,0,0,0,.671-.542Z" transform="translate(-58.362 -23.503)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-165" data-name="Path" d="M66.329,54.366a5.84,5.84,0,0,1-.837.157,7.478,7.478,0,0,1-1.859,0,5.352,5.352,0,0,1-.975-.181c-.152-.033-.3-.09-.438-.133a2.812,2.812,0,0,1-.385-.143,5.386,5.386,0,0,1-.556-.262L61.07,53.7a.033.033,0,0,0-.029,0l.195.128a4.65,4.65,0,0,0,.542.314,3.228,3.228,0,0,0,.385.171,3.709,3.709,0,0,0,.442.157,5.982,5.982,0,0,0,1,.2,6.3,6.3,0,0,0,1.9-.071,4.86,4.86,0,0,0,.832-.233.02.02,0,1,0-.009,0Z" transform="translate(-59.082 -23.097)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-166" data-name="Path" d="M58.357,68.1a5.6,5.6,0,0,1-.328.785,7.2,7.2,0,0,1-1,1.565,5.783,5.783,0,0,1-.685.718c-.114.109-.238.2-.352.29a2.759,2.759,0,0,1-.328.243,5.187,5.187,0,0,1-.528.328l-.2.114v.024l.214-.1a4.337,4.337,0,0,0,.561-.281,3.368,3.368,0,0,0,.352-.228,3.226,3.226,0,0,0,.371-.285,6.048,6.048,0,0,0,.723-.718,6.33,6.33,0,0,0,.98-1.631,4.434,4.434,0,0,0,.262-.823.028.028,0,0,0-.052,0Z" transform="translate(-47.633 -29.268)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-167" data-name="Path" d="M59.706,68.43a5.616,5.616,0,0,1-.609.595,7.56,7.56,0,0,1-1.536,1.046,6.233,6.233,0,0,1-.913.385,4.127,4.127,0,0,1-.438.133,2.784,2.784,0,0,1-.4.09,4.749,4.749,0,0,1-.609.1l-.233.029H55.2a3.659,3.659,0,0,0,.628-.043,2.854,2.854,0,0,0,.414-.067,3.5,3.5,0,0,0,.476-.114,6.347,6.347,0,0,0,.951-.381,6.414,6.414,0,0,0,1.546-1.113,4.52,4.52,0,0,0,.561-.656.024.024,0,0,0,0-.038.04.04,0,0,0-.071.038Z" transform="translate(-49.054 -29.389)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-168" data-name="Path" d="M5.924,25.2a4.67,4.67,0,0,0,.866,0,6.182,6.182,0,0,0,1.836-.476,5.742,5.742,0,0,0,.894-.476,2.58,2.58,0,0,0,.376-.281,2.294,2.294,0,0,0,.319-.276,3.694,3.694,0,0,0,.423-.476l.152-.181v-.029l-.166.162a4.952,4.952,0,0,1-.476.414,3.05,3.05,0,0,1-.323.252c-.124.081-.243.176-.38.257a6.13,6.13,0,0,1-.88.476A7.243,7.243,0,0,1,6.78,25.1a5.74,5.74,0,0,1-.842.1.061.061,0,1,1-.014.01Z" transform="translate(27.973 -9.945)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-169" data-name="Path" d="M7.666,23.872a4.493,4.493,0,0,0,.785-.361,6.183,6.183,0,0,0,1.508-1.17,5.484,5.484,0,0,0,.628-.8,2.719,2.719,0,0,0,.238-.4,3.418,3.418,0,0,0,.185-.376,4.149,4.149,0,0,0,.209-.59c.043-.147.071-.228.071-.228l-.09.219a5.011,5.011,0,0,1-.257.557,3.072,3.072,0,0,1-.2.361c-.081.124-.152.257-.252.385a5.751,5.751,0,0,1-.628.766,7.29,7.29,0,0,1-1.427,1.184,6.366,6.366,0,0,1-.737.423.025.025,0,0,0-.033.038Z" transform="translate(26.474 -8.628)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-170" data-name="Path" d="M10.454,26.821a.713.713,0,0,0,.266.224,1.276,1.276,0,0,0,.338.119,2.622,2.622,0,0,0,.4.048h.395a2.707,2.707,0,0,0,.338-.062l.323-.09h-.328a6.6,6.6,0,0,1-.713,0,3.1,3.1,0,0,1-.376-.029,1.684,1.684,0,0,1-.314-.076.675.675,0,0,1-.276-.138.024.024,0,0,0-.038,0A.029.029,0,0,0,10.454,26.821Z" transform="translate(23.652 -11.572)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-171" data-name="Path" d="M41.7,6.146a5.74,5.74,0,0,1-.59-.614,7.237,7.237,0,0,1-1.041-1.541,5.438,5.438,0,0,1-.39-.913,4.088,4.088,0,0,1-.128-.438,2.649,2.649,0,0,1-.09-.4,5.631,5.631,0,0,1-.1-.609v0a3.579,3.579,0,0,0,.038.628,2.855,2.855,0,0,0,.067.414,3.56,3.56,0,0,0,.114.476,5.625,5.625,0,0,0,.38.951,6.184,6.184,0,0,0,1.108,1.546,4.622,4.622,0,0,0,.652.566.024.024,0,0,0,.038,0Z" transform="translate(-22.111 -0.68)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-172" data-name="Path" d="M40.578,5.459a6.533,6.533,0,0,1-.309-.794,7.542,7.542,0,0,1-.352-1.826,5.764,5.764,0,0,1,0-.994,4.357,4.357,0,0,1,.052-.476,3.087,3.087,0,0,1,.071-.4,5.461,5.461,0,0,1,.157-.6l.067-.224-.09.219a3.8,3.8,0,0,0-.209.59,2.45,2.45,0,0,0-.1.409,3.338,3.338,0,0,0-.076.476,6.014,6.014,0,0,0-.024,1.018,6.36,6.36,0,0,0,.414,1.86,4.622,4.622,0,0,0,.38.775A.029.029,0,0,0,40.578,5.459Z" transform="translate(-21.152 -0.142)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-173" data-name="Path" d="M41.506,8.6a.7.7,0,0,1-.3-.067,1.994,1.994,0,0,1-.285-.143c-.1-.057-.2-.143-.309-.214A6.42,6.42,0,0,1,40.07,7.7l-.247-.219h-.029s.071.109.19.276a2.054,2.054,0,0,0,.219.262c.1.086.19.185.29.271a3.371,3.371,0,0,0,.342.214,1.146,1.146,0,0,0,.333.124.651.651,0,0,0,.347,0,.029.029,0,0,0,0-.033Z" transform="translate(-22.118 -3.289)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-174" data-name="Path" d="M8.758,21.191a4.618,4.618,0,0,0,.861,0,6.181,6.181,0,0,0,1.84-.476,5.761,5.761,0,0,0,.894-.476,5.528,5.528,0,0,0,.694-.552,4.088,4.088,0,0,0,.423-.476l.152-.181h-.029l-.166.166a5.232,5.232,0,0,1-.476.409,2.636,2.636,0,0,1-.323.252c-.119.086-.243.176-.38.257a5.653,5.653,0,0,1-.875.476,7.747,7.747,0,0,1-1.783.528,6.717,6.717,0,0,1-.846.1.029.029,0,0,0-.029.029S8.743,21.191,8.758,21.191Z" transform="translate(23.537 -8.239)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-175" data-name="Path" d="M10.49,19.843a5.137,5.137,0,0,0,.789-.361A5.987,5.987,0,0,0,13.4,17.508a4.053,4.053,0,0,0,.238-.4,2.493,2.493,0,0,0,.181-.381,3.423,3.423,0,0,0,.214-.59l.067-.224h0l-.09.219c-.057.138-.143.333-.262.561a2.471,2.471,0,0,1-.2.357c-.076.124-.152.257-.247.385a5.526,5.526,0,0,1-.628.766,7.505,7.505,0,0,1-1.427,1.189,5.669,5.669,0,0,1-.742.419.029.029,0,0,0,0,.038S10.48,19.848,10.49,19.843Z" transform="translate(22.043 -6.901)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-176" data-name="Path" d="M13.29,22.75a.628.628,0,0,0,.266.224,1.308,1.308,0,0,0,.333.119,3.671,3.671,0,0,0,.4.052,1.838,1.838,0,0,0,.4-.029,1.7,1.7,0,0,0,.338-.062c.195-.048.319-.09.319-.09V22.94h-.333a6.66,6.66,0,0,1-.713,0,3.086,3.086,0,0,1-.371-.029,1.618,1.618,0,0,1-.314-.071.714.714,0,0,1-.276-.143.029.029,0,0,0-.038,0,.027.027,0,1,0-.009.052Z" transform="translate(19.214 -9.807)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-177" data-name="Path" d="M12.143,17.31A4.724,4.724,0,0,0,13,17.253,6.313,6.313,0,0,0,14.82,16.7a5.853,5.853,0,0,0,.875-.528,3.281,3.281,0,0,0,.366-.29,3.072,3.072,0,0,0,.309-.29,3.942,3.942,0,0,0,.4-.476l.147-.186H16.9l-.162.171a5.7,5.7,0,0,1-.442.428,2.968,2.968,0,0,1-.314.266c-.119.086-.238.186-.371.271a5.779,5.779,0,0,1-.861.476,7.511,7.511,0,0,1-1.764.6,5.326,5.326,0,0,1-.837.124.033.033,0,0,0-.029.033A.033.033,0,0,0,12.143,17.31Z" transform="translate(18.292 -6.48)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-178" data-name="Path" d="M14.089,15.987a4.72,4.72,0,0,0,.77-.39,6.219,6.219,0,0,0,1.427-1.227,5.705,5.705,0,0,0,.6-.828,3.468,3.468,0,0,0,.219-.414,2.993,2.993,0,0,0,.171-.385,3.615,3.615,0,0,0,.186-.595c.038-.147.062-.228.062-.228V11.9h0l-.086.219a4.7,4.7,0,0,1-.238.571,2.653,2.653,0,0,1-.186.366c-.071.124-.143.262-.233.39a5.437,5.437,0,0,1-.6.794A7.489,7.489,0,0,1,14.8,15.478a5.816,5.816,0,0,1-.723.447.032.032,0,1,0,.014.062Z" transform="translate(16.589 -5.181)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-179" data-name="Path" d="M16.509,19.043a.685.685,0,0,0,.276.214,1.279,1.279,0,0,0,.338.1,2.767,2.767,0,0,0,.4.033c.138,0,.271-.029.395-.038a2.576,2.576,0,0,0,.338-.076c.195-.057.319-.1.319-.1h-.328c-.195,0-.476.038-.713.048a3.219,3.219,0,0,1-.376,0,1.742,1.742,0,0,1-.314-.062.67.67,0,0,1-.281-.128.029.029,0,1,0-.043.033Z" transform="translate(14.136 -8.232)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-180" data-name="Path" d="M5.469,59.657a4.758,4.758,0,0,0,.514.7,6.287,6.287,0,0,0,1.427,1.232,6.033,6.033,0,0,0,.913.452,2.929,2.929,0,0,0,.447.152,2.826,2.826,0,0,0,.4.1,3.4,3.4,0,0,0,.623.086l.233.024h0L9.8,62.363a5.134,5.134,0,0,1-.6-.143,2.3,2.3,0,0,1-.39-.124,4.4,4.4,0,0,1-.428-.166,5.784,5.784,0,0,1-.88-.476,7.61,7.61,0,0,1-1.45-1.161,6.465,6.465,0,0,1-.556-.642.029.029,0,0,0-.048.029Z" transform="translate(28.999 -25.648)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-181" data-name="Path" d="M3.892,60a4.925,4.925,0,0,0,.742.438A6.386,6.386,0,0,0,6.45,61a5.7,5.7,0,0,0,1.018.057,3.639,3.639,0,0,0,.476-.033,3.146,3.146,0,0,0,.414-.067,3.992,3.992,0,0,0,.609-.162l.224-.071h0l-.233.052a5.2,5.2,0,0,1-.609.1,2.657,2.657,0,0,1-.4.038H7.468a5.888,5.888,0,0,1-.984-.081,7.412,7.412,0,0,1-1.793-.476,6.018,6.018,0,0,1-.766-.371.024.024,0,0,0-.038,0Z" transform="translate(30.728 -25.794)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-182" data-name="Path" d="M11.5,59.942a.647.647,0,0,0-.033.342,1.528,1.528,0,0,0,.1.347c.048.119.124.233.185.352a2.92,2.92,0,0,0,.495.556c.152.133.257.214.257.214h0s-.076-.109-.2-.266-.276-.362-.423-.576c-.062-.109-.138-.214-.186-.323a1.632,1.632,0,0,1-.119-.3.7.7,0,0,1-.043-.3.029.029,0,0,0-.052,0Z" transform="translate(23.1 -25.776)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-183" data-name="Path" d="M11.509,62.439a4.453,4.453,0,0,0,.271.818,6.392,6.392,0,0,0,1,1.617,5.739,5.739,0,0,0,.732.713,3.331,3.331,0,0,0,.376.281,3.285,3.285,0,0,0,.357.219,3.48,3.48,0,0,0,.561.276l.219.09h0l-.209-.109c-.133-.071-.314-.176-.528-.319a4.032,4.032,0,0,1-.333-.238c-.114-.09-.238-.181-.357-.29a5.77,5.77,0,0,1-.694-.709,7.285,7.285,0,0,1-1.022-1.551,5.916,5.916,0,0,1-.338-.78.028.028,0,0,0-.052,0Z" transform="translate(20.543 -26.847)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-184" data-name="Path" d="M9.015,62.83a4.938,4.938,0,0,0,.575.647,6.29,6.29,0,0,0,1.555,1.094,6.009,6.009,0,0,0,.951.366,3.333,3.333,0,0,0,.476.109,3.722,3.722,0,0,0,.414.067,4.553,4.553,0,0,0,.628.029h0A4.352,4.352,0,0,1,13,65.056a2.8,2.8,0,0,1-.4-.086c-.138-.038-.29-.071-.438-.124a5.769,5.769,0,0,1-.918-.381,7.423,7.423,0,0,1-1.55-1.023,5.855,5.855,0,0,1-.618-.585.024.024,0,0,0-.038,0A.038.038,0,0,0,9.015,62.83Z" transform="translate(23.138 -27.014)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-185" data-name="Path" d="M16.956,62.777a.6.6,0,0,0-.138.319,1.236,1.236,0,0,0,0,.357,2.377,2.377,0,0,0,.071.395,2.293,2.293,0,0,0,.138.371,1.8,1.8,0,0,0,.162.3c.1.176.181.285.181.285s-.038-.128-.1-.314a6.539,6.539,0,0,1-.228-.675,3.135,3.135,0,0,0-.081-.366,1.561,1.561,0,0,1,0-.323.718.718,0,0,1,.052-.3.029.029,0,0,0,0-.038S16.961,62.763,16.956,62.777Z" transform="translate(15.167 -26.99)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-186" data-name="Path" d="M6.215,47.985a4.7,4.7,0,0,0,.633.59,6.385,6.385,0,0,0,1.65.951,5.935,5.935,0,0,0,.98.276,3.436,3.436,0,0,0,.476.067,3.279,3.279,0,0,0,.418,0,3.969,3.969,0,0,0,.628,0l.233-.024h-.238a4.367,4.367,0,0,1-.613-.029,2.569,2.569,0,0,1-.409-.048,4.385,4.385,0,0,1-.476-.086,5.666,5.666,0,0,1-.951-.29A7.72,7.72,0,0,1,6.9,48.517a5.892,5.892,0,0,1-.666-.528.028.028,0,0,0-.038,0A.024.024,0,0,0,6.215,47.985Z" transform="translate(27.364 -20.649)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-187" data-name="Path" d="M5.31,48.09a4.752,4.752,0,0,0,.808.295,6.276,6.276,0,0,0,1.9.219,5.7,5.7,0,0,0,1.008-.128,3.379,3.379,0,0,0,.476-.124,2.956,2.956,0,0,0,.395-.138,3.915,3.915,0,0,0,.561-.271l.209-.114-.214.09a5,5,0,0,1-.58.219,2.691,2.691,0,0,1-.39.114c-.143.033-.29.076-.447.1a6.059,6.059,0,0,1-.989.1,7.5,7.5,0,0,1-1.85-.162,6.189,6.189,0,0,1-.823-.224.024.024,0,0,0-.033,0A.033.033,0,0,0,5.31,48.09Z" transform="translate(28.435 -20.583)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-188" data-name="Path" d="M12.4,48.216a.7.7,0,0,0,.033.347,1.316,1.316,0,0,0,.152.323c.071.109.166.2.252.314a2.181,2.181,0,0,0,.3.262,2.118,2.118,0,0,0,.285.19c.176.1.29.162.29.162h.029s-.1-.1-.243-.224a5.909,5.909,0,0,1-.523-.476c-.081-.1-.181-.186-.247-.281a2.072,2.072,0,0,1-.171-.271.671.671,0,0,1-.1-.295.038.038,0,0,0,0-.033.033.033,0,0,0-.062-.019Z" transform="translate(21.314 -20.743)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-189" data-name="Path" d="M23.061,8.375a5.074,5.074,0,0,0,.514-.7,6.376,6.376,0,0,0,.728-1.75,5.84,5.84,0,0,0,.157-1.008,3.117,3.117,0,0,0,0-.476,2.858,2.858,0,0,0-.029-.419,3.478,3.478,0,0,0-.1-.618l-.052-.233h0V3.2l.029.233a5.666,5.666,0,0,1,.043.614,2.927,2.927,0,0,1,0,.409,2.828,2.828,0,0,1-.029.476,6.077,6.077,0,0,1-.176.98,7.611,7.611,0,0,1-.68,1.731,5.8,5.8,0,0,1-.442.723.022.022,0,1,0,.038.014Z" transform="translate(4.521 -1.441)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-190" data-name="Path" d="M25.643,7.979a5,5,0,0,0,.2-.842,6.382,6.382,0,0,0,0-1.9,5.909,5.909,0,0,0-.247-.989,2.939,2.939,0,0,0-.176-.433,2.305,2.305,0,0,0-.185-.376,3.441,3.441,0,0,0-.338-.528l-.133-.2h0l.119.2a5.714,5.714,0,0,1,.281.552,3.075,3.075,0,0,1,.162.376c.052.138.109.281.152.433a5.613,5.613,0,0,1,.219.951,7.382,7.382,0,0,1,.062,1.86,6.1,6.1,0,0,1-.124.842.028.028,0,0,0,0,.033A.033.033,0,0,0,25.643,7.979Z" transform="translate(2.077 -1.244)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-191" data-name="Path" d="M22.765,10.859a.719.719,0,0,0,.338-.076,1.313,1.313,0,0,0,.3-.19c.1-.081.185-.19.285-.285a1.818,1.818,0,0,0,.224-.328,2.071,2.071,0,0,0,.157-.3c.081-.185.124-.309.124-.309h0s-.081.109-.19.271-.266.371-.423.576a3.556,3.556,0,0,1-.252.276,1.492,1.492,0,0,1-.252.2.657.657,0,0,1-.276.133.029.029,0,0,0-.029.029A.028.028,0,0,0,22.765,10.859Z" transform="translate(4.941 -4.096)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-192" data-name="Path" d="M28.154,7.4a4.679,4.679,0,0,0,.728-.476,6.22,6.22,0,0,0,1.308-1.379,5.923,5.923,0,0,0,.5-.885,3.36,3.36,0,0,0,.176-.438,2.932,2.932,0,0,0,.124-.4,3.552,3.552,0,0,0,.124-.614.7.7,0,0,1,.033-.233V2.955s-.024.081-.062.224a4.412,4.412,0,0,1-.171.595,3.023,3.023,0,0,1-.147.385,3.518,3.518,0,0,1-.19.414,5.8,5.8,0,0,1-.5.851,7.4,7.4,0,0,1-1.246,1.384,5.348,5.348,0,0,1-.671.523.029.029,0,0,0,0,.038S28.144,7.407,28.154,7.4Z" transform="translate(-5.094 -1.348)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-193" data-name="Path" d="M30.838,6.562a4.489,4.489,0,0,0,.476-.718,6.443,6.443,0,0,0,.666-1.779,5.851,5.851,0,0,0,.114-1.013,3.06,3.06,0,0,0,0-.476,2.759,2.759,0,0,0-.043-.419,3.552,3.552,0,0,0-.128-.614c-.038-.143-.057-.228-.057-.228l.038.233a4.67,4.67,0,0,1,.071.614,2.793,2.793,0,0,1,0,.409v.476a5.558,5.558,0,0,1-.133.985,7.383,7.383,0,0,1-.6,1.76,6.139,6.139,0,0,1-.409.742.029.029,0,0,0,.043.033Z" transform="translate(-7.578 -0.645)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-194" data-name="Path" d="M29.839,9.86a.623.623,0,0,0,.342.052,1.427,1.427,0,0,0,.347-.071c.124-.043.243-.114.366-.171a1.788,1.788,0,0,0,.323-.228,1.779,1.779,0,0,0,.257-.228c.143-.147.228-.247.228-.247s-.114.067-.281.181-.376.257-.594.39c-.114.057-.223.128-.333.171a2.047,2.047,0,0,1-.3.1.6.6,0,0,1-.309,0,.033.033,0,0,0-.038,0,.029.029,0,0,0,0,.052Z" transform="translate(-6.603 -3.924)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-195" data-name="Path" d="M2.389,38.856a4.606,4.606,0,0,0,.78.376,6.328,6.328,0,0,0,1.855.409,6.538,6.538,0,0,0,1.018-.029,3.4,3.4,0,0,0,.476-.076,2.953,2.953,0,0,0,.4-.1,3.748,3.748,0,0,0,.59-.214l.219-.09-.224.067a4.545,4.545,0,0,1-.6.157,2.478,2.478,0,0,1-.4.076c-.147,0-.3.048-.476.052a5.328,5.328,0,0,1-.994,0,7.252,7.252,0,0,1-1.821-.347,5.7,5.7,0,0,1-.8-.3.024.024,0,0,0-.029.019Z" transform="translate(33.045 -16.729)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-196" data-name="Path" d="M2.539,37.664A4.756,4.756,0,0,0,3.4,37.7a6.214,6.214,0,0,0,1.869-.352,6.126,6.126,0,0,0,.927-.428A3.284,3.284,0,0,0,6.6,36.67a2.376,2.376,0,0,0,.338-.252,4.3,4.3,0,0,0,.476-.423l.166-.171H7.551l-.181.152a4.463,4.463,0,0,1-.476.381,3.3,3.3,0,0,1-.342.228c-.128.071-.252.157-.4.228a5.63,5.63,0,0,1-.908.395,7.476,7.476,0,0,1-1.817.395,5.975,5.975,0,0,1-.851.033.028.028,0,0,0-.029.029Z" transform="translate(33.114 -15.437)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-197" data-name="Path" d="M8.374,39.017a.642.642,0,0,0,.133.323,1.361,1.361,0,0,0,.243.262c.1.081.219.147.333.224a2.02,2.02,0,0,0,.366.157,1.8,1.8,0,0,0,.328.1c.195.048.328.067.328.067h0s-.119-.062-.3-.143-.414-.19-.642-.309a3.333,3.333,0,0,1-.319-.195,2.38,2.38,0,0,1-.247-.209.785.785,0,0,1-.181-.252.029.029,0,0,0-.043-.024Z" transform="translate(27.25 -16.805)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-198" data-name="Path" d="M16.983,13.371a4.892,4.892,0,0,0,.737-.476,6.415,6.415,0,0,0,1.346-1.346,5.991,5.991,0,0,0,.523-.875,3.7,3.7,0,0,0,.185-.433,3.209,3.209,0,0,0,.133-.395,3.377,3.377,0,0,0,.138-.614c.029-.147.043-.233.043-.233h-.024c-.024,0,0,.081-.062.224a4.765,4.765,0,0,1-.19.59,2.44,2.44,0,0,1-.152.381c-.062.133-.119.276-.2.414a5.853,5.853,0,0,1-.528.837A7.35,7.35,0,0,1,17.653,12.8a5.829,5.829,0,0,1-.68.509.024.024,0,0,0,0,.038A.028.028,0,0,0,16.983,13.371Z" transform="translate(12.359 -3.939)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-199" data-name="Path" d="M19.779,12.474a4.781,4.781,0,0,0,.476-.7,6.441,6.441,0,0,0,.7-1.769A5.845,5.845,0,0,0,21.1,8.992a3.1,3.1,0,0,0,0-.476,2.852,2.852,0,0,0-.033-.419,3.834,3.834,0,0,0-.109-.614c-.038-.147-.057-.233-.057-.233h-.024a1.363,1.363,0,0,0,.029.233,5.244,5.244,0,0,1,.057.614,2.943,2.943,0,0,1,0,.414,3.411,3.411,0,0,1-.024.476,5.594,5.594,0,0,1-.157.98,7.637,7.637,0,0,1-.642,1.746,5.763,5.763,0,0,1-.428.733.029.029,0,0,0,.043.033Z" transform="translate(9.767 -3.189)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-200" data-name="Path" d="M18.806,15.769a.675.675,0,0,0,.342.062,1.429,1.429,0,0,0,.347-.067,3.5,3.5,0,0,0,.371-.162c.114-.067.224-.147.328-.219a2.192,2.192,0,0,0,.262-.224c.143-.143.233-.243.233-.243v-.024h-.024s-.114.067-.281.176-.385.247-.609.376a3.637,3.637,0,0,1-.338.162,2,2,0,0,1-.3.1.59.59,0,0,1-.309,0,.033.033,0,0,0-.038,0S18.791,15.764,18.806,15.769Z" transform="translate(10.717 -6.465)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-201" data-name="Path" d="M3.346,43.259a4.925,4.925,0,0,0,.742.438,6.241,6.241,0,0,0,1.817.561,5.742,5.742,0,0,0,1.018.057,3.658,3.658,0,0,0,.476-.033,3.433,3.433,0,0,0,.414-.067,3.687,3.687,0,0,0,.6-.166l.224-.071v-.024L8.411,44a5.426,5.426,0,0,1-.609.109,2.719,2.719,0,0,1-.409.038,3.169,3.169,0,0,1-.476,0,5.9,5.9,0,0,1-.989-.081,7.483,7.483,0,0,1-1.793-.476,6.473,6.473,0,0,1-.766-.371.038.038,0,0,0-.038,0,.029.029,0,0,0,.014.038Z" transform="translate(31.597 -18.606)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-202" data-name="Path" d="M9.422,43.44a.723.723,0,0,0,.109.333,1.39,1.39,0,0,0,.219.276,3.334,3.334,0,0,0,.314.252c.114.071.238.128.347.19a2.331,2.331,0,0,0,.323.124c.19.062.319.1.319.1h0l-.285-.166c-.176-.086-.4-.224-.618-.362-.1-.076-.214-.143-.3-.224a1.475,1.475,0,0,1-.228-.228.642.642,0,0,1-.157-.262.028.028,0,0,0-.029-.029A.033.033,0,0,0,9.422,43.44Z" transform="translate(25.702 -18.702)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-203" data-name="Path" d="M3.073,33.115a4.48,4.48,0,0,0,.851.209,6.181,6.181,0,0,0,1.9,0,5.9,5.9,0,0,0,.989-.247,3.639,3.639,0,0,0,.438-.171,3.947,3.947,0,0,0,.376-.186,3.692,3.692,0,0,0,.528-.338l.195-.133a.029.029,0,0,0-.029,0l-.2.119a5.543,5.543,0,0,1-.547.281,2.852,2.852,0,0,1-.38.162c-.133.048-.276.1-.428.147a5.658,5.658,0,0,1-.951.219,7.333,7.333,0,0,1-1.859.052,5.31,5.31,0,0,1-.842-.124.029.029,0,1,0,0,.052Z" transform="translate(32.032 -13.903)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-204" data-name="Path" d="M9.747,33.742a.713.713,0,0,0,.076.338,1.05,1.05,0,0,0,.19.3,2.686,2.686,0,0,0,.285.285c.1.081.224.152.328.224a1.856,1.856,0,0,0,.3.157l.309.128h0l-.266-.195a6.462,6.462,0,0,1-.575-.423,3.543,3.543,0,0,1-.276-.252,2.156,2.156,0,0,1-.2-.247.637.637,0,0,1-.128-.281.029.029,0,0,0-.029-.029A.028.028,0,0,0,9.747,33.742Z" transform="translate(25.33 -14.545)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-205" data-name="Path" d="M5.054,29.955a4.434,4.434,0,0,0,.794.338,6.272,6.272,0,0,0,1.878.309,5.84,5.84,0,0,0,1.013-.076,4.381,4.381,0,0,0,.476-.1,2.82,2.82,0,0,0,.4-.124,3.689,3.689,0,0,0,.58-.243l.209-.1-.219.081a5.632,5.632,0,0,1-.59.186,3.08,3.08,0,0,1-.4.1,4.065,4.065,0,0,1-.476.076,5.2,5.2,0,0,1-.989.057,7.541,7.541,0,0,1-1.84-.252,6.389,6.389,0,0,1-.808-.262.019.019,0,1,0-.029.014Z" transform="translate(28.853 -12.912)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-206" data-name="Path" d="M5.461,28.491a4.471,4.471,0,0,0,.866,0,6.24,6.24,0,0,0,1.845-.447,5.579,5.579,0,0,0,.9-.476A3.057,3.057,0,0,0,9.46,27.3a2.7,2.7,0,0,0,.323-.271,3.6,3.6,0,0,0,.433-.447l.157-.181v-.024h-.029l-.171.162a4.814,4.814,0,0,1-.476.4,2.671,2.671,0,0,1-.328.243c-.124.081-.247.171-.385.247a5.738,5.738,0,0,1-.889.442,7.56,7.56,0,0,1-1.793.476,6.282,6.282,0,0,1-.847.076.029.029,0,0,0-.029.029.025.025,0,1,0,.033.038Z" transform="translate(28.67 -11.387)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-207" data-name="Path" d="M4.012,54.692a4.475,4.475,0,0,0,.675.542,6.411,6.411,0,0,0,1.717.813,5.947,5.947,0,0,0,1,.2,3.977,3.977,0,0,0,.476.033,2.993,2.993,0,0,0,.418,0,3.453,3.453,0,0,0,.623-.076l.233-.038H8.92a5.552,5.552,0,0,1-.613,0,3.036,3.036,0,0,1-.409,0,1.716,1.716,0,0,1-.476-.048,5.67,5.67,0,0,1-.951-.219,7.4,7.4,0,0,1-1.7-.747,6.41,6.41,0,0,1-.7-.476.029.029,0,0,0-.038.038Z" transform="translate(30.689 -23.518)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-208" data-name="Path" d="M3.408,54.412a4.861,4.861,0,0,0,.832.233,6.287,6.287,0,0,0,1.9.071,6.1,6.1,0,0,0,1-.2,4.026,4.026,0,0,0,.442-.157,3.134,3.134,0,0,0,.38-.171,3.961,3.961,0,0,0,.542-.314l.2-.128v-.029h0l-.209.109a5.545,5.545,0,0,1-.561.262,2.421,2.421,0,0,1-.385.143c-.138.043-.281.1-.438.133a5.282,5.282,0,0,1-.975.181,7.483,7.483,0,0,1-1.859,0,5.855,5.855,0,0,1-.832-.157.024.024,0,0,0-.038.029Z" transform="translate(31.489 -23.101)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-209" data-name="Path" d="M12.76,68.133a4.939,4.939,0,0,0,.262.823,6.4,6.4,0,0,0,.984,1.631,5.433,5.433,0,0,0,.718.723,2.9,2.9,0,0,0,.376.285,3.375,3.375,0,0,0,.352.228,3.8,3.8,0,0,0,.561.281l.214.1-.2-.114a5.237,5.237,0,0,1-.523-.328,2.791,2.791,0,0,1-.333-.243c-.114-.09-.238-.181-.352-.29a5.792,5.792,0,0,1-.685-.718,7.506,7.506,0,0,1-1-1.565,6.419,6.419,0,0,1-.328-.785.029.029,0,0,0-.033,0A.033.033,0,0,0,12.76,68.133Z" transform="translate(18.622 -29.288)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-210" data-name="Path" d="M10.255,68.513a4.793,4.793,0,0,0,.566.656,6.377,6.377,0,0,0,1.55,1.094,6.559,6.559,0,0,0,.951.381,3.378,3.378,0,0,0,.476.114,2.672,2.672,0,0,0,.414.067,3.6,3.6,0,0,0,.623.043h.238l-.233-.029a4.679,4.679,0,0,1-.613-.1,2.941,2.941,0,0,1-.4-.09,4.51,4.51,0,0,1-.438-.133,6.235,6.235,0,0,1-.913-.385,7.841,7.841,0,0,1-1.536-1.046,6.236,6.236,0,0,1-.609-.595.029.029,0,0,0-.038,0A.038.038,0,0,0,10.255,68.513Z" transform="translate(21.208 -29.439)" fill="#feb701" fill-rule="evenodd"/>
                                <ellipse id="Oval-4" data-name="Oval" cx="0.59" cy="0.59" rx="0.59" ry="0.59" transform="translate(17.729 24.32)" fill="#feb701"/>
                                <path id="Path-211" data-name="Path" d="M42.274,41.519l-.119.1c-.071.067-.181.157-.3.276-.252.233-.575.552-.885.885s-.613.671-.827.951l-.257.323-.1.128h0a1.225,1.225,0,0,0,.119-.1c.076-.067.185-.162.309-.281.247-.233.566-.556.875-.889s.609-.675.823-.951c.109-.133.19-.247.252-.328l.1-.124h0Z" transform="translate(-22.867 -17.875)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-212" data-name="Path" d="M39.306,41.415l.1.119c.071.076.162.186.281.309.233.247.552.571.885.885s.671.609.951.823c.128.109.247.2.323.257l.128.1H42a.029.029,0,0,0,0-.029l-.1-.119-.281-.309c-.233-.247-.556-.566-.889-.875s-.675-.609-.951-.823c-.133-.109-.247-.19-.328-.252l-.128-.1S39.306,41.411,39.306,41.415Z" transform="translate(-22.324 -17.828)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-213" data-name="Path" d="M41.621,40.4v.152c0,.1-.024.243-.033.414,0,.342-.033.794-.029,1.251a9.964,9.964,0,0,0,.052,1.251,3.553,3.553,0,0,0,.038.409.668.668,0,0,1,0,.157h.024v-.157a2.394,2.394,0,0,1,.029-.414c0-.338.029-.794.024-1.251s-.033-.908-.062-1.246a3.536,3.536,0,0,0-.038-.414A1,1,0,0,0,41.6,40.4h0S41.621,40.39,41.621,40.4Z" transform="translate(-23.332 -17.397)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-214" data-name="Path" d="M38.505,43.629h.162a2.841,2.841,0,0,1,.409.024h1.251c.456,0,.908-.048,1.251-.081a3.261,3.261,0,0,0,.409-.048h-1.66a11.4,11.4,0,0,0-1.251.09,3.249,3.249,0,0,0-.409.048l-.157.024Z" transform="translate(-22.003 -18.738)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-215" data-name="Path" d="M24.73,19.538a.585.585,0,1,0,.17-.417A.59.59,0,0,0,24.73,19.538Z" transform="translate(2.101 -8.203)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-216" data-name="Path" d="M26.343,17.767a1.224,1.224,0,0,0-.119.1c-.076.067-.185.157-.309.276-.252.233-.575.552-.885.885s-.613.671-.827.951l-.257.323q-.048.062-.09.128h0s.048-.033.124-.1l.3-.276c.247-.238.571-.561.88-.894s.6-.675.818-.951c.109-.133.195-.247.257-.328l.09-.124Z" transform="translate(2.167 -7.693)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-217" data-name="Path" d="M23.381,17.674l.1.119c.067.076.157.186.276.309.233.247.552.571.885.885s.675.609.951.823l.323.257.128.1a.029.029,0,0,0,.033,0,1.225,1.225,0,0,0-.1-.119l-.281-.309c-.233-.247-.552-.566-.889-.875s-.675-.609-.951-.823l-.328-.252-.124-.1Z" transform="translate(2.703 -7.657)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-218" data-name="Path" d="M25.686,16.65a1.5,1.5,0,0,0,0,.157c0,.1-.029.238-.033.409,0,.342-.033.794-.033,1.251s.024.908.052,1.251a3.449,3.449,0,0,0,.038.409.672.672,0,0,1,0,.157.033.033,0,0,0,.029,0h0v-.157c0-.1.024-.243.029-.414,0-.338.029-.794.024-1.251s-.029-.908-.057-1.246a3.377,3.377,0,0,0-.043-.414.62.62,0,0,1,0-.152h0Z" transform="translate(1.711 -7.218)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-219" data-name="Path" d="M22.582,19.866H24.4a11.59,11.59,0,0,0,1.251-.081,3.141,3.141,0,0,0,.409-.048h.157v-.024H24.4a11.314,11.314,0,0,0-1.246.086,3.232,3.232,0,0,0-.414.048l-.152.029h0Z" transform="translate(3.022 -8.532)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-220" data-name="Path" d="M44.923,20.52a.585.585,0,1,0,.17-.417A.59.59,0,0,0,44.923,20.52Z" transform="translate(-29.629 -8.624)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-221" data-name="Path" d="M46.539,18.738l-.119.1-.309.276c-.247.233-.571.552-.88.885s-.613.671-.827.951l-.257.323a1.558,1.558,0,0,0-.09.128,1.225,1.225,0,0,0,.119-.1c.076-.067.185-.162.309-.281.247-.233.566-.557.875-.89s.609-.675.823-.951c.109-.133.19-.247.252-.328l.1-.128h0Z" transform="translate(-29.572 -8.107)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-222" data-name="Path" d="M43.535,18.638l.1.119c.067.076.157.186.276.309.233.247.552.571.885.885s.671.609.951.823l.323.257.128.1h.029c.029,0,0,0,0-.029a1.225,1.225,0,0,0-.1-.119c-.071-.076-.162-.186-.281-.309-.233-.247-.556-.566-.889-.875s-.675-.609-.951-.823c-.133-.109-.247-.19-.328-.252l-.124-.1h0Z" transform="translate(-28.979 -8.064)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-223" data-name="Path" d="M45.912,17.616v.157c0,.1-.024.243-.033.414,0,.342-.033.794-.029,1.251a9.962,9.962,0,0,0,.052,1.251,3.544,3.544,0,0,0,.038.409.672.672,0,0,1,0,.157h.024V21.1a2.394,2.394,0,0,1,.029-.414c0-.338.029-.794,0-1.251s-.029-.909-.057-1.246a2.646,2.646,0,0,0-.043-.414.448.448,0,0,1,0-.157Z" transform="translate(-30.062 -7.632)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-224" data-name="Path" d="M42.75,20.833h.157l.409.024h1.251c.452,0,.908-.048,1.251-.081a3.248,3.248,0,0,0,.409-.048l.157-.024H44.567a11.492,11.492,0,0,0-1.251.086,3.247,3.247,0,0,0-.409.048l-.157.024Z" transform="translate(-28.669 -8.956)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-225" data-name="Path" d="M31.3,31.285a.585.585,0,1,0,.17-.417A.59.59,0,0,0,31.3,31.285Z" transform="translate(-8.218 -13.239)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-226" data-name="Path" d="M32.909,29.513l-.119.1-.309.276c-.247.233-.571.557-.88.885s-.613.675-.827.951c-.109.133-.195.247-.257.328l-.1.124a.024.024,0,0,0,0,.033h.024l.119-.1.309-.276c.247-.233.566-.556.875-.889s.609-.68.823-.951c.109-.133.19-.247.252-.323l.1-.128Z" transform="translate(-8.156 -12.732)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-227" data-name="Path" d="M30.027,29.4l.1.119c.067.076.157.186.276.309.233.252.552.571.88.885s.675.609.951.828l.323.252.128.1a.029.029,0,0,0,0-.029l-.1-.119c-.062-.071-.157-.181-.276-.3-.233-.252-.556-.571-.889-.88s-.675-.6-.951-.823l-.328-.252-.128-.1Z" transform="translate(-7.695 -12.679)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-228" data-name="Path" d="M32.328,28.387v.157c0,.1-.024.243-.033.409,0,.343-.033.8-.029,1.251s.024.908.052,1.251a3.35,3.35,0,0,0,.038.409.686.686,0,0,1,0,.157v-.157a2.318,2.318,0,0,1,.029-.409c0-.342.029-.8,0-1.251s-.029-.908-.057-1.251a3.351,3.351,0,0,0-.038-.409,1.4,1.4,0,0,0-.024-.157h0A.27.27,0,0,1,32.328,28.387Z" transform="translate(-8.692 -12.249)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-229" data-name="Path" d="M29.149,31.58h1.821a11.59,11.59,0,0,0,1.251-.081,2.559,2.559,0,0,0,.409-.048h0a2.77,2.77,0,0,1-.409-.024H30.966a11.312,11.312,0,0,0-1.246.086l-.409.052h-.157Z" transform="translate(-7.302 -13.553)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-230" data-name="Path" d="M19.8,42.765a.585.585,0,1,0,.17-.417A.59.59,0,0,0,19.8,42.765Z" transform="translate(9.844 -18.16)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-231" data-name="Path" d="M21.429,40.993l-.119.1L21,41.369c-.247.233-.571.552-.885.885s-.609.671-.823.951l-.257.323-.1.128a.029.029,0,0,0,0,.033l.119-.1c.071-.067.185-.162.3-.281.252-.233.571-.557.88-.889s.609-.675.823-.951c.109-.133.19-.247.252-.328l.1-.124h0Z" transform="translate(9.891 -17.654)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-232" data-name="Path" d="M18.464,40.883l.1.119c.067.076.157.186.271.309.238.247.556.571.885.885s.675.609.951.823l.323.257.124.1h.033a.029.029,0,0,0,0-.029l-.1-.119c-.067-.076-.157-.181-.276-.3-.233-.252-.556-.571-.889-.88s-.68-.609-.951-.823c-.133-.109-.252-.19-.328-.252l-.128-.1Z" transform="translate(10.431 -17.6)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-233" data-name="Path" d="M20.833,39.866v.152c0,.1-.024.243-.033.414,0,.342-.033.794-.029,1.251s.024.908.052,1.251a3.542,3.542,0,0,0,.038.409.672.672,0,0,1,0,.157h0v-.157a2.4,2.4,0,0,1,.029-.414c0-.338.029-.794,0-1.251s-.029-.908-.057-1.246a3.377,3.377,0,0,0-.043-.414.62.62,0,0,1,0-.152h0S20.833,39.857,20.833,39.866Z" transform="translate(9.37 -17.169)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-234" data-name="Path" d="M17.663,43.1h.157a2.869,2.869,0,0,1,.414.024h1.251c.457,0,.908-.048,1.246-.081a3.231,3.231,0,0,0,.414-.048H19.475a11.228,11.228,0,0,0-1.246.086,3.141,3.141,0,0,0-.409.048l-.157.029Z" transform="translate(10.752 -18.51)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-235" data-name="Path" d="M22.266,64.328a.59.59,0,1,0,.173-.417A.59.59,0,0,0,22.266,64.328Z" transform="translate(5.973 -27.403)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-236" data-name="Path" d="M23.892,62.556l-.119.1-.309.276c-.247.233-.571.556-.88.885s-.613.675-.827.951c-.109.128-.195.243-.257.323l-.1.124a.033.033,0,0,0,0,.033l.119-.1c.076-.067.185-.157.3-.276.252-.233.571-.556.885-.889s.6-.68.818-.951c.109-.128.195-.247.252-.323l.1-.128h0Z" transform="translate(6.021 -26.897)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-237" data-name="Path" d="M20.978,62.432l.1.119c.067.076.157.185.276.309.233.252.552.576.885.885s.671.609.951.828c.128.109.247.19.323.252l.128.1a.029.029,0,0,0,0-.029l-.1-.119c-.067-.071-.162-.181-.281-.3-.233-.247-.556-.571-.889-.88s-.675-.6-.951-.818c-.133-.109-.247-.195-.328-.257l-.128-.09Z" transform="translate(6.509 -26.84)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-238" data-name="Path" d="M23.234,61.432v.157c0,.1-.024.243-.029.414-.024.338-.033.794-.033,1.246a9.162,9.162,0,0,0,.052,1.251,3.535,3.535,0,0,0,.038.414.62.62,0,0,1,0,.152s0,.024.024,0v-.157a2.349,2.349,0,0,1,.029-.409c0-.342.029-.8.024-1.251s-.033-.908-.062-1.251a3.354,3.354,0,0,0-.038-.409,1.383,1.383,0,0,0-.024-.157h.019Z" transform="translate(5.561 -26.415)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-239" data-name="Path" d="M20.118,64.667h.157a2.87,2.87,0,0,1,.414.024H21.94c.452,0,.908-.043,1.246-.076l.414-.052H21.94a11.494,11.494,0,0,0-1.251.086l-.409.052-.157.024h0Z" transform="translate(6.888 -27.757)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-240" data-name="Path" d="M38.58,72.107a.59.59,0,1,0,.59-.585A.59.59,0,0,0,38.58,72.107Z" transform="translate(-19.663 -30.74)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-241" data-name="Path" d="M40.172,70.331l-.119.1-.309.276c-.247.233-.571.557-.88.885s-.613.675-.827.951c-.109.128-.195.247-.257.323a1.2,1.2,0,0,0-.09.124v.033h.024l.119-.1c.076-.067.185-.157.309-.276.247-.233.566-.557.875-.89s.609-.68.823-.951c.109-.128.19-.247.252-.323l.1-.128Z" transform="translate(-19.58 -30.23)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-242" data-name="Path" d="M37.306,70.224l.1.119c.067.076.157.186.276.309.233.252.552.576.88.885s.675.609.951.828c.128.109.247.19.323.257l.128.09a.029.029,0,0,0,0-.029l-.1-.119c-.071-.071-.162-.181-.281-.3-.233-.247-.556-.571-.889-.88s-.675-.6-.951-.818c-.133-.109-.247-.195-.328-.257l-.128-.09Z" transform="translate(-19.14 -30.18)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-243" data-name="Path" d="M39.569,69.207v.157c0,.1-.024.243-.033.409,0,.342-.029.8-.029,1.251s.024.909.052,1.251a3.351,3.351,0,0,0,.038.409.686.686,0,0,1,0,.157.033.033,0,0,0,.024,0v-.157a2.317,2.317,0,0,1,.029-.409c0-.342.029-.8,0-1.251s-.029-.908-.062-1.251c0-.171-.033-.309-.038-.409a.64.64,0,0,0-.024-.157Z" transform="translate(-20.095 -29.748)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-244" data-name="Path" d="M36.433,72.424h1.821c.452,0,.908-.043,1.251-.076l.409-.052h-1.66c-.452,0-.908.052-1.251.086l-.409.052h-.157Z" transform="translate(-18.747 -31.072)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-245" data-name="Path" d="M50.225,60.232a.59.59,0,1,0,.59-.59A.59.59,0,0,0,50.225,60.232Z" transform="translate(-37.96 -25.648)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-246" data-name="Path" d="M51.838,58.451l-.119.1c-.076.067-.185.157-.309.276-.252.233-.571.552-.885.885s-.609.671-.823.951l-.257.323-.1.128v.029l.119-.1c.071-.067.181-.162.3-.281.247-.233.571-.556.88-.889s.6-.675.823-.951l.252-.328a1.2,1.2,0,0,0,.09-.124Z" transform="translate(-37.895 -25.137)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-247" data-name="Path" d="M48.875,58.342l.1.119.276.309c.233.252.556.571.885.885s.675.609.951.823c.133.109.247.195.328.257l.124.1a.022.022,0,1,0,.033-.029l-.133-.128-.276-.3c-.233-.252-.556-.571-.889-.88s-.68-.609-.951-.823L49,58.413l-.128-.1Z" transform="translate(-37.357 -25.08)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-248" data-name="Path" d="M51.194,57.336v.152a2.059,2.059,0,0,1-.033.414c0,.342-.033.8-.029,1.251s.024.908.048,1.251a3.4,3.4,0,0,0,.043.409.667.667,0,0,1,0,.157h.024a1.463,1.463,0,0,0,0-.157c0-.1.024-.243.029-.414,0-.342.029-.794.024-1.251s-.029-.908-.057-1.246a3.376,3.376,0,0,0-.043-.414.62.62,0,0,1,0-.152h0Z" transform="translate(-38.373 -24.659)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-249" data-name="Path" d="M48.077,60.527H49.9a11.333,11.333,0,0,0,1.246-.081,3.039,3.039,0,0,0,.409-.048h.157v-.024H49.889a11.23,11.23,0,0,0-1.246.086,2.407,2.407,0,0,0-.409.052,1.179,1.179,0,0,0-.157,0h0Z" transform="translate(-37.04 -25.962)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-250" data-name="Path" d="M53.172,40.293a.585.585,0,1,0,.171-.418A.59.59,0,0,0,53.172,40.293Z" transform="translate(-42.59 -17.1)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-251" data-name="Path" d="M54.768,38.514s-.048.033-.124.1-.181.157-.3.276c-.252.233-.575.552-.885.885s-.609.671-.827.951l-.257.323a1.564,1.564,0,0,0-.09.128H52.3c.024,0,.048-.033.124-.1l.3-.276c.247-.238.571-.561.88-.894s.6-.675.818-.951c.109-.133.195-.247.257-.328l.09-.124Z" transform="translate(-42.508 -16.586)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-252" data-name="Path" d="M51.831,38.421l.1.119c.067.076.157.186.276.309.233.247.552.571.885.885s.671.609.951.823c.133.109.247.2.328.257l.124.1h.029l-.1-.119-.281-.309c-.233-.247-.556-.566-.889-.875s-.675-.609-.951-.823c-.133-.109-.247-.19-.328-.252l-.124-.1Z" transform="translate(-42.002 -16.551)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-253" data-name="Path" d="M54.131,37.394v.157a2.349,2.349,0,0,1-.029.409c-.024.342-.033.794-.033,1.251s.029.909.052,1.251a3.541,3.541,0,0,0,.038.409.672.672,0,0,1,0,.157.033.033,0,0,0,.029,0v-.157a2.4,2.4,0,0,1,.029-.414c0-.338.029-.794.024-1.251s-.029-.908-.057-1.246a3.388,3.388,0,0,0-.043-.414,1,1,0,0,0-.024-.152h0S54.131,37.384,54.131,37.394Z" transform="translate(-42.994 -16.109)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-254" data-name="Path" d="M51.048,40.6h.157a2.869,2.869,0,0,1,.414.024h1.246c.452,0,.908-.048,1.251-.081a3.152,3.152,0,0,0,.409-.048l.157-.024h0a.033.033,0,0,0-.024,0H52.841a11.311,11.311,0,0,0-1.246.086,3.242,3.242,0,0,0-.414.048l-.157.029h0S51.02,40.6,51.048,40.6Z" transform="translate(-41.694 -17.431)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-255" data-name="Path" d="M30.082,55.844a.59.59,0,1,0,.59-.59A.59.59,0,0,0,30.082,55.844Z" transform="translate(-6.309 -23.767)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-256" data-name="Path" d="M31.675,54.114l-.119.1-.309.276c-.247.233-.571.557-.885.885s-.609.675-.823.951c-.109.128-.195.243-.257.323l-.1.124a.029.029,0,0,0,0,.033h.029l.119-.1c.076-.067.185-.162.3-.276.252-.233.571-.557.88-.889s.609-.68.823-.951c.1-.128.19-.247.252-.323l.1-.128Z" transform="translate(-6.224 -23.278)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-257" data-name="Path" d="M28.8,53.965l.1.119.276.309c.233.252.556.571.885.885s.675.609.951.828c.128.109.243.19.323.252l.128.1a.029.029,0,0,0,0-.029l-.1-.119c-.067-.071-.157-.181-.276-.3-.233-.247-.556-.571-.889-.88s-.68-.6-.951-.818c-.133-.109-.252-.2-.328-.257l-.128-.09Z" transform="translate(-5.773 -23.21)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-258" data-name="Path" d="M31.116,52.948v.157c0,.1-.024.243-.033.409,0,.342-.033.8-.029,1.251s.024.908.052,1.251a3.437,3.437,0,0,0,.038.409.671.671,0,0,1,0,.157h0v-.157a2.349,2.349,0,0,1,.029-.409c0-.343.024-.8,0-1.251s-.029-.908-.057-1.251a3.284,3.284,0,0,0-.043-.409.672.672,0,0,1,0-.157h.043Z" transform="translate(-6.787 -22.778)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-259" data-name="Path" d="M27.918,56.118h1.821c.452,0,.908-.043,1.246-.076l.414-.052h.152s.024,0,0-.029h-.157a2.862,2.862,0,0,1-.414-.024H29.73a11.229,11.229,0,0,0-1.246.086l-.409.052h-.157S27.913,56.118,27.918,56.118Z" transform="translate(-5.372 -24.059)" fill="#feb701" fill-rule="evenodd"/>
                                <path id="Path-260" data-name="Path" d="M8.773,95.787H37.448L41.7,76.608H5.477Z" transform="translate(-2.69 -32.921)" fill="#303d8b" fill-rule="evenodd"/>
                                <path id="Path-261" data-name="Path" d="M44.89,95.774s-20.962-1.551-24.562-7.767-7.409-11.415-7.409-11.415l3.3,19.173Z" transform="translate(-10.132 -32.914)" fill="#0a1658" fill-rule="evenodd"/>
                                <rect id="Rectangle-44" data-name="Rectangle" width="41.801" height="4.538" transform="translate(0 39.455)" fill="#0a1658"/>
                            </g>
                        </g>
                        <g id="Group_20809" data-name="Group 20809" transform="translate(89.696 255.725)">
                            <path id="table_stand" d="M233.546,537.908V805.8" transform="translate(66.744 -516.691)" fill="none" stroke="#0a1658" stroke-linecap="square" stroke-width="5" fill-rule="evenodd"/>
                            <path id="table_stand-2" d="M476.782,537.908V805.8" transform="translate(-440.497 -516.691)" fill="none" stroke="#0a1658" stroke-linecap="square" stroke-width="5" fill-rule="evenodd"/>
                            <path id="table_stand-3" d="M430.944,537.908v311.6" transform="translate(-342.362 -516.691)" fill="none" stroke="#0a1658" stroke-linecap="square" stroke-width="5" fill-rule="evenodd"/>
                            <g id="table" transform="translate(0 0)">
                                <rect id="Rectangle-45" data-name="Rectangle" width="389.077" height="15.413" fill="#c9dcf0"/>
                                <rect id="Rectangle-46" data-name="Rectangle" width="368.968" height="10.736" transform="translate(10.059 15.742)" fill="#8eaccd"/>
                            </g>
                            <path id="table_stand-4" d="M187.707,544.92V849.6" transform="translate(164.897 -516.781)" fill="none" stroke="#0a1658" stroke-linecap="square" stroke-width="5" fill-rule="evenodd"/>
                        </g>
                        <g id="Group_20810" data-name="Group 20810" transform="translate(178.255 158.776)">
                            <path id="Path_88721" data-name="Path 88721" d="M184.194,427.2h61.622a.746.746,0,0,0,.744-.744v-3.873a.746.746,0,0,0-.744-.744H184.194a.746.746,0,0,0-.744.744v3.873A.738.738,0,0,0,184.194,427.2Z" transform="translate(-21.457 -330.253)" fill="#201e60"/>
                            <path id="Path_88722" data-name="Path 88722" d="M263.206,446.2h128.5a.732.732,0,0,0,.694-.971l-32.754-95.486a.736.736,0,0,0-.694-.492h-128.5a.732.732,0,0,0-.694.972l32.754,95.486A.72.72,0,0,0,263.206,446.2Z" transform="translate(-225.718 -349.25)" fill="#201e60"/>
                            <path id="Path_88723" data-name="Path 88723" d="M266.389,446.2H394.881a.732.732,0,0,0,.694-.971l-32.754-95.486a.736.736,0,0,0-.694-.492h-128.5a.732.732,0,0,0-.694.972l32.754,95.486A.747.747,0,0,0,266.389,446.2Z" transform="translate(-232.888 -349.25)" fill="#342d7a"/>
                            <ellipse id="Ellipse_838" data-name="Ellipse 838" cx="14.724" cy="9.98" rx="14.724" ry="9.98" transform="translate(63.858 38.507)" fill="#201e60"/>
                        </g>
                    </g>
                    <g id="Group_20814" data-name="Group 20814" transform="translate(1194 81.579)">
                        <g id="Group_20813" data-name="Group 20813" transform="translate(0 0)">
                            <path id="Path-262" data-name="Path" d="M5.007,51.408h65.1a5.047,5.047,0,0,0,5.047-5.013V5.047A5.075,5.075,0,0,0,70.106,0H5.007A5.046,5.046,0,0,0,0,5.047V46.394A5.047,5.047,0,0,0,5.007,51.408Z" transform="translate(70.621 79.568) rotate(-160)" fill="#231f20" fill-rule="evenodd" opacity="0.05"/>
                            <path id="Path-263" data-name="Path" d="M5.265,53.869H73.532A5.259,5.259,0,0,0,78.764,48.6V5.265A5.26,5.26,0,0,0,73.532,0H5.265A5.26,5.26,0,0,0,0,5.265V48.6a5.259,5.259,0,0,0,5.265,5.265Z" transform="translate(79.855 77.559) rotate(-160)" fill="#ffd201" fill-rule="evenodd"/>
                            <path id="Shape" d="M.017,18.922v5.411a5.61,5.61,0,0,1,2.282.483,3.56,3.56,0,0,1,1.323,1.362A6.692,6.692,0,0,1,4.4,28.567a27.863,27.863,0,0,1,.185,3.757,32.38,32.38,0,0,0,.37,6.078,6,6,0,0,0,1.323,2.8,6.725,6.725,0,0,0,2.837,1.621,13.43,13.43,0,0,0,3.975.4h1.121V37.852a8.32,8.32,0,0,1-2.944-.291,1.912,1.912,0,0,1-1-.847,4.875,4.875,0,0,1-.292-1.952c0-.958-.073-2.725-.185-5.377a14.693,14.693,0,0,0-.516-3.611,7.8,7.8,0,0,0-1.121-2.282,9.406,9.406,0,0,0-2.063-1.839A7.208,7.208,0,0,0,8.08,19.847,7.743,7.743,0,0,0,9.3,17.38a19.683,19.683,0,0,0,.516-3.925c.107-2.467.146-4.087.146-4.749a4.764,4.764,0,0,1,.331-2.1,2.337,2.337,0,0,1,.992-.886,9.524,9.524,0,0,1,2.91-.291V.054H13.07A14.381,14.381,0,0,0,8.8.531a5.561,5.561,0,0,0-2.5,1.62A5.823,5.823,0,0,0,4.9,4.916a29.585,29.585,0,0,0-.331,5.226,26.473,26.473,0,0,1-.331,5.344,4.866,4.866,0,0,1-1.4,2.573A4.683,4.683,0,0,1,0,18.945Zm42.16,0a5.875,5.875,0,0,1-2.282-.476,3.419,3.419,0,0,1-1.329-1.363,7,7,0,0,1-.774-2.394,29.893,29.893,0,0,1-.145-3.723,36.119,36.119,0,0,0-.37-6.112A6.045,6.045,0,0,0,35.953,2.1,6.749,6.749,0,0,0,33.082.413a14.689,14.689,0,0,0-3.975-.4H27.986V5.386a9.3,9.3,0,0,1,2.9.292,2.238,2.238,0,0,1,1.032.886,4.174,4.174,0,0,1,.331,1.952c0,.919.039,2.652.151,5.231a15.143,15.143,0,0,0,.561,3.751,8.05,8.05,0,0,0,1.216,2.394,7.461,7.461,0,0,0,1.951,1.733,8.4,8.4,0,0,0-2.243,2.1,9.029,9.029,0,0,0-1.323,3.8,68.356,68.356,0,0,0-.3,6.886,6.944,6.944,0,0,1-.292,2.282,1.937,1.937,0,0,1-.919.847A10.175,10.175,0,0,1,28,37.824V43.2h1.121a14.451,14.451,0,0,0,4.306-.477,5.768,5.768,0,0,0,2.5-1.587,6.381,6.381,0,0,0,1.362-2.8,27.935,27.935,0,0,0,.37-5.192,30.965,30.965,0,0,1,.3-5.372,4.649,4.649,0,0,1,1.4-2.579,4.794,4.794,0,0,1,2.837-.886Z" transform="translate(64.503 66.324) rotate(-160)" fill="#fff"/>
                        </g>
                    </g>
                </g>
            </svg>


        </div>
    </div>


 <div class="per-8 mrl-auto saFilterWrap">
        <svg xmlns="http://www.w3.org/2000/svg" width="43" height="43" viewBox="0 0 43 43">
            <rect id="Rectangle_4809" data-name="Rectangle 4809" width="43" height="43" rx="8" fill="#f5f5f5"/>
            <g id="Filter" transform="translate(7.54 7.497)">
                <path id="Path_88608" data-name="Path 88608" d="M11.672,17.987H2.883" transform="translate(0 3.139)" fill="none" stroke="#a3a3a4" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                <path id="Path_88609" data-name="Path 88609" d="M22.356,18.606a3.5,3.5,0,1,1-3.5-3.5A3.5,3.5,0,0,1,22.356,18.606Z" transform="translate(2.681 2.52)" fill="none" stroke="#a3a3a4" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" fill-rule="evenodd"/>
                <path id="Path_88610" data-name="Path 88610" d="M13.883,6.262h8.79" transform="translate(2.364 0.619)" fill="none" stroke="#a3a3a4" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                <path id="Path_88611" data-name="Path 88611" d="M2.883,6.881a3.5,3.5,0,1,0,3.5-3.5A3.5,3.5,0,0,0,2.883,6.881Z" fill="none" stroke="#a3a3a4" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" fill-rule="evenodd"/>
            </g>
        </svg>
        <p>Filter</p>
        <div   id="arrowDropDown">
            <svg xmlns="http://www.w3.org/2000/svg" width="16.009" height="9.125" viewBox="0 0 16.009 9.125">
                <g id="arrow-down-sign-to-navigate" transform="translate(16.009 9.125) rotate(180)">
                    <path id="Path_10" data-name="Path 10" d="M8,0a1.118,1.118,0,0,0-.793.328L.328,7.212A1.121,1.121,0,0,0,1.914,8.8L8,2.706,14.095,8.8A1.121,1.121,0,1,0,15.68,7.211L8.8.328A1.118,1.118,0,0,0,8,0Z" transform="translate(0 0)"/>
                </g>
            </svg>
        </div>

        <div class="saFilterWrapOptions mrl-auto">
            <div class="saFilterWrapOptionRadio">
                <h6>Industry</h6>

                <input type="radio" id="BusinessConsulting" name="Industry" value="Business Consulting">
                <label for="BusinessConsulting">Business Consulting</label><br>

                <input type="radio" id="RetailStores" name="Industry" value="Retail Stores">
                <label for="RetailStores">Retail Stores</label><br>

                <input type="radio" id="Educational" name="Industry" value="Educational">
                <label for="Educational">Educational</label><br>

                <input type="radio" id="Sports" name="Industry" value="Sports">
                <label for="Sports">Sports</label><br>

                <input type="radio" id="MedicalDevices" name="Industry" value="Medical Devices">
                <label for="MedicalDevices">Medical Devices</label><br>

                <input type="radio" id="Restaurants" name="Industry" value="Restaurants">
                <label for="Restaurants">Restaurants</label><br>

                <input type="radio" id="LegalServices" name="Industry" value="Legal Services">
                <label for="LegalServices">Legal Services</label><br>

                <input type="radio" id="GroceryStores" name="Industry" value="Grocery Stores">
                <label for="GroceryStores">Grocery Stores</label><br>

                <input type="radio" id="VideoEditing" name="Industry" value="Video Editing">
                <label for="VideoEditing">Video Editing</label><br>

                <input type="radio" id="Dental&Medical" name="Industry" value="Dental & Medical">
                <label for="Dental&Medical">Dental & Medical</label><br>

                <input type="radio" id="MedicalFinancing" name="Industry" value="Medical Financing">
                <label for="MedicalFinancing">Medical Financing</label><br>

                <input type="radio" id="Career&Recruiting" name="Industry" value="Career & Recruiting">
                <label for="Career&Recruiting">Career & Recruiting</label><br>


            </div>
            <div class="saFilterWrapOptionType">
                <h6>Type:</h6>

                <input type="checkbox" id="OnlineShop" name="Dental&Medical" value="Online Shop">
                <label for="OnlineShop">Online Shop</label><br>

                <input type="checkbox" id="Website" name="Website" value="Website">
                <label for="Website">Website</label><br>

                <input type="checkbox" id="LandingPage" name="Career&LandingPage" value="Landing Page">
                <label for="LandingPage">Landing Page</label><br>


            </div>
            <div class="saFilterWrapOptionYear">
                <h6>Year:</h6>

                <input type="checkbox" id="2021" name="2021" value="2021">
                <label for="2021">2021</label><br>

                <input type="checkbox" id="2020" name="2020" value="2020">
                <label for="2020">2020</label><br>

                <input type="checkbox" id="2019" name="2019" value="2019">
                <label for="2019">2019</label><br>

                <input type="checkbox" id="2018" name="2018" value="2018">
                <label for="2018">2018</label><br>

                <input type="checkbox" id="2017" name="2017" value="2017">
                <label for="2017">2017</label><br>


            </div>
            <a href="#">Filter</a>
        </div>

    </div>







    <div class="saPortfolioCardWrap">
        <?php
        while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <a href="<?php the_permalink() ?>">
            <div class="saEachPortfolioCard">
                <h6><?php the_title(); ?></h6>
                <div style="margin: 22px 0" class="saEachRowPortfolio">
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="19.5" height="21.5" viewBox="0 0 19.5 21.5">
                            <g id="Calendar" transform="translate(-2.25 -1.25)">
                                <path id="Path_88550" data-name="Path 88550" d="M3.093,9.4H20.917" fill="none" stroke="#b9b9b9" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                <path id="Path_88551" data-name="Path 88551" d="M16.442,13.31h.009" fill="none" stroke="#b9b9b9" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                <path id="Path_88552" data-name="Path 88552" d="M12,13.31h.009" fill="none" stroke="#b9b9b9" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                <path id="Path_88553" data-name="Path 88553" d="M7.558,13.31h.009" fill="none" stroke="#b9b9b9" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                <path id="Path_88554" data-name="Path 88554" d="M16.442,17.2h.009" fill="none" stroke="#b9b9b9" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                <path id="Path_88555" data-name="Path 88555" d="M12,17.2h.009" fill="none" stroke="#b9b9b9" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                <path id="Path_88556" data-name="Path 88556" d="M7.558,17.2h.009" fill="none" stroke="#b9b9b9" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                <path id="Path_88557" data-name="Path 88557" d="M16.044,2V5.291" fill="none" stroke="#b9b9b9" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                <path id="Path_88558" data-name="Path 88558" d="M7.965,2V5.291" fill="none" stroke="#b9b9b9" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                <path id="Path_88559" data-name="Path 88559" d="M16.238,3.579H7.771C4.834,3.579,3,5.215,3,8.222v9.05C3,20.326,4.834,22,7.771,22h8.458C19.175,22,21,20.355,21,17.347V8.222C21.009,5.215,19.184,3.579,16.238,3.579Z" fill="none" stroke="#b9b9b9" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" fill-rule="evenodd"/>
                            </g>
                        </svg>
                        Date Of Project
                    </p>
                    <p><?php
                        $saDate = get_post_meta(get_the_ID(),'dateOfProject',true);
                        if($saDate){
                            $date = DateTime::createFromFormat("Y-m-d", $saDate);
                            echo $date->format("Y");
                        }


                        ?></p>
                </div>
                <div class="saEachRowPortfolio">
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="19.5" height="19.474" viewBox="0 0 19.5 19.474">
                            <g id="Folder" transform="translate(-1.526 -1.526)">
                                <path id="Path_88560" data-name="Path 88560" d="M20.25,14.918c0,3.355-1.977,5.332-5.332,5.332h-7.3c-3.364,0-5.341-1.977-5.341-5.332V7.608c0-3.355,1.233-5.332,4.588-5.332H8.738a2.14,2.14,0,0,1,1.712.856l.856,1.138a2.148,2.148,0,0,0,1.712.856h2.653c3.364,0,4.6,1.712,4.6,5.136Z" transform="translate(0 0)" fill="none" stroke="#b9b9b9" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" fill-rule="evenodd"/>
                                <path id="Path_88561" data-name="Path 88561" d="M7.059,14.489h9" transform="translate(-0.298 -0.761)" fill="none" stroke="#b9b9b9" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                            </g>
                        </svg>
                        Category
                    </p>
                    <p><?php
                        $saCat = get_post_meta(get_the_ID(),'categoryOfProject',true);
                        echo substr($saCat, 0, -1);
                        ?></p>

                </div>
<!--               	<img src="<?php bloginfo("template_directory"); ?>/images/homepage/home6.png" alt=""> -->
				<?php the_content() ?>
            </div>
            </a>



        <?php wp_reset_query(); endwhile; ?>

    </div>

<?php
if (function_exists("cpt_pagination")) {
    cpt_pagination($my_query->max_num_pages);
}
?>


<?php
include('templates/partial/form.php')
?>


    <script>
        if($(window).width() < 1000){
            $('.homePart1 .right svg,.homePart4 .left svg').removeAttr('width').removeAttr('height')
        }
		 $('.saFilterWrap').click(function (e){
                var i = 0;
                if(e.target === this){
                    $('.saFilterWrapOptions').slideToggle()
                }
                $('#arrowDropDown').toggleClass('rotated')
            })
    </script>

<?php
get_footer();
?>