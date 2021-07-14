<?php


/**
 * Template Name: Contact_us Nexmark
 * Template Post Type: post, page
 */
get_header();
?>

    <style>
        .sendMessageBoxWrap{
            border:1px solid #E0E0E0;
            border-radius: 20px;
            padding: 33px 27px;
            box-shadow: 0 15px 50px rgba(0,0,0,0.02);
        }
        .inputEachRowWrap{
            display: flex;
            margin-bottom: 20px;
        }
        .inputEachRowWrap input{
            flex-grow: 1;
            height: 50px;
            border: 1px solid #E0E0E0;
            border-radius: 10px;
            padding: 10px;
            box-shadow: 0 10px 35px rgba(0,0,0,0.02);
            outline: none;
            font-size: 15px;
        }
        .inputEachRowWrap div{
            width: 100%;
            position: relative;
        }
        .inputEachRowWrap div input{
            width: 100%;
        }
        .inputEachRowWrap div svg{
            position: absolute;
            z-index: 99;
            right: 10px;
            top: 15px;
        }
        .sendMessageBoxWrap textarea{
            width: 100%;
            flex-grow: 1;
            border: 1px solid #E0E0E0;
            border-radius: 10px;
            padding: 10px;
            box-shadow: 0 10px 35px rgba(0,0,0,0.02);
            outline: none;
            font-size: 15px;
        }
        .sendMessageBoxWrap input[type="submit"]{
            width: 227px;
            height: 55px;
            background-color: #46389C;
            border-radius: 12px;
            border: 1px solid #707070;
            box-shadow: 0 15px 35px rgba(70,56,156,0.2);
            color: #fff;
            font-size: 17px;
            line-height: 20px;
            margin: 20px 0 0 auto;
            display: block;
            cursor: pointer;
            outline: none;
        }
        .sendMessageBoxWrap textarea::placeholder,.sendMessageBoxWrap input::placeholder{
            font-family: 'Rubik', sans-serif;
            font-size: 15px;
        }
        .contactusWrapper .contactusIconWrap{
            width: 65px;
            height: 65px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 100%;
            background-color:#46389C;
            margin-right: 15px;
        }
        .contactusWrapper{
            display: flex;
            align-items: center;
        }
        .contactusWrapper p{
            margin: 0;
            font-size: 17px;
            color:#000;

        }
        .contactusWrapper span{
           font-weight: 600;
        }

    </style>


    <div class="flex-grow-1 per-10 d-flex homePart1 flex-direction-column-reverse" style="min-height: 586px">
        <div class="per-5 flex-grow-1 left mw-100m paddingM-30">
            <h1>Contact Us</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Egestas purus viverra accumsan in nisl nisi Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque </p>
<!--            <a class="saBtnStyle1">Start New Project</a>-->
            <div class="contactusWrapper">
                <div class="contactusIconWrap">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26.009" height="23.408" viewBox="0 0 26.009 23.408">
                        <path id="Message" d="M21.428,3a6.576,6.576,0,0,1,6.581,6.567V19.841a6.577,6.577,0,0,1-6.581,6.567H8.581A6.576,6.576,0,0,1,2,19.841V9.567A6.568,6.568,0,0,1,8.581,3ZM23.5,11.5l.1-.1a1.006,1.006,0,0,0-.014-1.3,1.094,1.094,0,0,0-.688-.338.988.988,0,0,0-.73.26L16.305,14.7a2.037,2.037,0,0,1-2.6,0L7.852,10.022A.994.994,0,0,0,6.46,11.414l.17.169L12.547,16.2a4.095,4.095,0,0,0,5.083,0Z" transform="translate(-2 -3)" fill="#fff" fill-rule="evenodd"/>
                    </svg>

                </div>
                <p><span>E-Mail:</span> office@nexmark.io</p>
            </div>
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
            <svg xmlns="http://www.w3.org/2000/svg" width="673.377" height="673.508" viewBox="0 0 673.377 673.508">
                <g id="Group_33664" data-name="Group 33664" transform="translate(-692.623 7)">
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
                    <g id="Page-1" transform="translate(775.196 53)">
                        <g id="Artboard" transform="translate(41.668 -60)">
                            <g id="NO-CONNECTION-01" transform="translate(0)">
                                <g id="bg">
                                    <g id="Group" transform="translate(56.847 155.913)">
                                        <path id="Path" d="M104.943.833H83.493" transform="translate(-67.537 -0.833)" fill="none" stroke="#f5f5f5" stroke-linecap="round" stroke-width="5" fill-rule="evenodd"/>
                                        <path id="Path-2" data-name="Path" d="M26.029.833H.25" transform="translate(51.469 -0.833)" fill="none" stroke="#f5f5f5" stroke-linecap="round" stroke-width="5" fill-rule="evenodd"/>
                                        <path id="Path-3" data-name="Path" d="M144.428.916h8.058" transform="translate(-144.428 -0.876)" fill="none" stroke="#f5f5f5" stroke-linecap="round" stroke-width="5" fill-rule="evenodd"/>
                                    </g>
                                    <g id="Group-2" data-name="Group" transform="translate(25.339 205.216)">
                                        <path id="Path-4" data-name="Path" d="M14.7.083.666,14.166" transform="translate(-0.666 -0.083)" fill="none" stroke="#f5f5f5" stroke-linecap="round" stroke-width="5" fill-rule="evenodd"/>
                                        <path id="Path-5" data-name="Path" d="M.666.083,14.7,14.166" transform="translate(-0.666 -0.083)" fill="none" stroke="#f5f5f5" stroke-linecap="round" stroke-width="5" fill-rule="evenodd"/>
                                    </g>
                                    <g id="Group-3" data-name="Group" transform="translate(322.891 45.322)">
                                        <path id="Path-6" data-name="Path" d="M14.655.666.583,14.749" transform="translate(-0.583 -0.666)" fill="none" stroke="#f5f5f5" stroke-linecap="round" stroke-width="5" fill-rule="evenodd"/>
                                        <path id="Path-7" data-name="Path" d="M.583.666,14.655,14.749" transform="translate(-0.583 -0.666)" fill="none" stroke="#f5f5f5" stroke-linecap="round" stroke-width="5" fill-rule="evenodd"/>
                                    </g>
                                    <g id="Group-4" data-name="Group" transform="translate(372.424 565.579)">
                                        <path id="Path-8" data-name="Path" d="M14.239.75.166,14.792" transform="translate(-0.166 -0.75)" fill="none" stroke="#f5f5f5" stroke-linecap="round" stroke-width="5" fill-rule="evenodd"/>
                                        <path id="Path-9" data-name="Path" d="M.166.75,14.239,14.792" transform="translate(-0.166 -0.75)" fill="none" stroke="#f5f5f5" stroke-linecap="round" stroke-width="5" fill-rule="evenodd"/>
                                    </g>
                                    <g id="Group-5" data-name="Group" transform="translate(236.54 303.739)">
                                        <path id="Path-10" data-name="Path" d="M14.572.333.5,14.416" transform="translate(-0.499 -0.333)" fill="none" stroke="#f5f5f5" stroke-linecap="round" stroke-width="5" fill-rule="evenodd"/>
                                        <path id="Path-11" data-name="Path" d="M.5.333,14.572,14.416" transform="translate(-0.499 -0.333)" fill="none" stroke="#f5f5f5" stroke-linecap="round" stroke-width="5" fill-rule="evenodd"/>
                                    </g>
                                    <g id="Group-6" data-name="Group" transform="translate(352.025 310.781)">
                                        <path id="Path-12" data-name="Path" d="M.749,33.376A10.86,10.86,0,0,0,11.575,44.21H58.867a10.946,10.946,0,0,0,7.657-3.171,10.838,10.838,0,0,0-7.657-18.5h-.381a11.587,11.587,0,0,0,.235-2.261A10.6,10.6,0,0,0,48.1,9.684a8.8,8.8,0,0,0-1.262.088A13.422,13.422,0,0,0,21.08,9.684h-.293a10.615,10.615,0,0,0-10.62,10.6,10.027,10.027,0,0,0,.264,2.319A10.786,10.786,0,0,0,.749,33.376Z" transform="translate(-0.749 -0.083)" fill="none" stroke="#f5f5f5" stroke-width="4" fill-rule="evenodd"/>
                                    </g>
                                    <g id="Group-7" data-name="Group" transform="translate(395.342 78.521)">
                                        <path id="Path-13" data-name="Path" d="M.749,45.581a14.841,14.841,0,0,0,14.794,14.8H80.172a14.959,14.959,0,0,0,10.464-4.333A14.811,14.811,0,0,0,80.172,30.776H79.65a15.835,15.835,0,0,0,.321-3.089A14.481,14.481,0,0,0,65.458,13.2a12.031,12.031,0,0,0-1.724.12,18.342,18.342,0,0,0-35.2-.12h-.4A14.507,14.507,0,0,0,13.619,27.687a13.7,13.7,0,0,0,.361,3.17A14.74,14.74,0,0,0,.749,45.581Z" transform="translate(-0.749 -0.083)" fill="none" stroke="#f5f5f5" stroke-width="4" fill-rule="evenodd"/>
                                    </g>
                                    <g id="Group-8" data-name="Group" transform="translate(-30.161 29.044)">
                                        <path id="Path-14" data-name="Path" d="M129.1,23.552a22.3,22.3,0,0,0-8.33,1.605C116.636,10.918,104.632.666,90.4.666c-11.124,0-20.955,6.317-26.646,15.948a25.356,25.356,0,0,0-2.845-.207c-9.779,0-18.264,6.265-22.3,15.43a14.594,14.594,0,0,0-6.674-1.605c-6.105,0-11.383,3.728-14.125,9.268a12.044,12.044,0,0,0-3.622-.57C6.688,38.93.583,45.713.583,54.049a15.052,15.052,0,0,0,.673,4.608H153.061a29.961,29.961,0,0,0,.931-7.56C153.94,35.875,142.816,23.552,129.1,23.552Z" transform="translate(48.364 -0.666)" fill="#f5f5f5" fill-rule="evenodd"/>
                                        <path id="Path-15" data-name="Path" d="M261.237,121.576h-29.8a2.434,2.434,0,0,1,0-4.867h29.8a2.434,2.434,0,0,1,0,4.867Z" transform="translate(-203.288 -44.583)" fill="#f5f5f5" fill-rule="evenodd"/>
                                        <path id="Path-16" data-name="Path" d="M243.007,143.568H213.2a2.434,2.434,0,0,1,0-4.867h29.8a2.434,2.434,0,0,1,0,4.867Z" transform="translate(-173.727 -52.906)" fill="#f5f5f5" fill-rule="evenodd"/>
                                        <path id="Path-17" data-name="Path" d="M149.067,121.576H95a2.434,2.434,0,0,1,0-4.867h54.068a2.43,2.43,0,0,1,2.432,2.433A2.5,2.5,0,0,1,149.067,121.576Z" transform="translate(-6.316 -44.583)" fill="#f5f5f5" fill-rule="evenodd"/>
                                        <path id="Path-18" data-name="Path" d="M211.641,119.142a2.432,2.432,0,1,1-2.432-2.433A2.43,2.43,0,0,1,211.641,119.142Z" transform="translate(-137.445 -44.583)" fill="#f5f5f5" fill-rule="evenodd"/>
                                        <path id="Path-19" data-name="Path" d="M282.4,22.992a15.86,15.86,0,0,0-15.419,12.271A10.208,10.208,0,0,0,252.4,43.03h45.273a16.1,16.1,0,0,0,.569-4.194A15.871,15.871,0,0,0,282.4,22.992Z" transform="translate(-252.395 -9.116)" fill="#f5f5f5" fill-rule="evenodd"/>
                                        <path id="Path-20" data-name="Path" d="M192.995,141.135a2.432,2.432,0,1,1-2.431-2.434A2.43,2.43,0,0,1,192.995,141.135Z" transform="translate(-107.21 -52.906)" fill="#f5f5f5" fill-rule="evenodd"/>
                                    </g>
                                    <g id="Group-9" data-name="Group" transform="translate(-124.241 347.973)">
                                        <path id="Path-21" data-name="Path" d="M13.2,12.266a11.3,11.3,0,0,1,4.222.814C19.516,5.862,25.6.666,32.811.666A15.789,15.789,0,0,1,46.317,8.749a12.852,12.852,0,0,1,1.442-.1,12.524,12.524,0,0,1,11.3,7.82,7.4,7.4,0,0,1,3.383-.814,8.06,8.06,0,0,1,7.159,4.7,6.1,6.1,0,0,1,1.836-.289c3.8,0,6.9,3.438,6.9,7.663a7.629,7.629,0,0,1-.341,2.336H1.055a15.185,15.185,0,0,1-.472-3.831C.609,18.511,6.247,12.266,13.2,12.266Z" transform="translate(-0.583 -0.666)" fill="#f5f5f5" fill-rule="evenodd"/>
                                        <path id="Path-22" data-name="Path" d="M230.236,119.176h15.1a1.233,1.233,0,0,0,0-2.467h-15.1a1.233,1.233,0,0,0,0,2.467Z" transform="translate(-157.046 -80.153)" fill="#f5f5f5" fill-rule="evenodd"/>
                                        <path id="Path-23" data-name="Path" d="M212.005,141.168h15.1a1.233,1.233,0,0,0,0-2.467h-15.1a1.233,1.233,0,0,0,0,2.467Z" transform="translate(-144.559 -95.217)" fill="#f5f5f5" fill-rule="evenodd"/>
                                        <path id="Path-24" data-name="Path" d="M93.8,119.176h27.4a1.233,1.233,0,0,0,0-2.467H93.8a1.232,1.232,0,0,0-1.233,1.233A1.267,1.267,0,0,0,93.8,119.176Z" transform="translate(-63.59 -80.153)" fill="#f5f5f5" fill-rule="evenodd"/>
                                        <path id="Path-25" data-name="Path" d="M206.777,117.942a1.233,1.233,0,1,0,1.233-1.233A1.232,1.232,0,0,0,206.777,117.942Z" transform="translate(-141.821 -80.153)" fill="#f5f5f5" fill-rule="evenodd"/>
                                        <path id="Path-26" data-name="Path" d="M260.419,22.992a8.039,8.039,0,0,1,7.815,6.219,5.174,5.174,0,0,1,7.395,3.936H252.683a8.159,8.159,0,0,1-.288-2.126A8.044,8.044,0,0,1,260.419,22.992Z" transform="translate(-173.069 -15.959)" fill="#f5f5f5" fill-rule="evenodd"/>
                                        <path id="Path-27" data-name="Path" d="M274.058,22.992a21.7,21.7,0,0,1,21.1,16.791A13.968,13.968,0,0,1,315.119,50.41H253.173a22.032,22.032,0,0,1-.778-5.739A21.716,21.716,0,0,1,274.058,22.992Z" transform="translate(-81.072 13.302)" fill="#f5f5f5" fill-rule="evenodd"/>
                                        <path id="Path-28" data-name="Path" d="M188.131,139.935a1.233,1.233,0,1,0,1.232-1.234A1.231,1.231,0,0,0,188.131,139.935Z" transform="translate(-129.049 -95.217)" fill="#f5f5f5" fill-rule="evenodd"/>
                                    </g>
                                    <g id="Group-10" data-name="Group" transform="translate(228.426 212.587)">
                                        <g id="Group_398" data-name="Group 398" transform="translate(0 0)">
                                            <path id="Path-29" data-name="Path" d="M120.059,5.487H91.313a2.327,2.327,0,0,1,0-4.654h28.746a2.328,2.328,0,0,1,2.325,2.327A2.354,2.354,0,0,1,120.059,5.487Z" transform="translate(-88.987 -0.793)" fill="#f5f5f5" fill-rule="evenodd"/>
                                            <ellipse id="Oval" cx="2.325" cy="2.327" rx="2.325" ry="2.327" transform="translate(42.096)" fill="#f5f5f5"/>
                                            <path id="Path-30" data-name="Path" d="M86.925,42.974H58.179a2.327,2.327,0,0,1,0-4.654H86.925a2.328,2.328,0,0,1,2.325,2.327A2.278,2.278,0,0,1,86.925,42.974Z" transform="translate(-39.898 -20.225)" fill="#f5f5f5" fill-rule="evenodd"/>
                                            <ellipse id="Oval-2" data-name="Oval" cx="2.325" cy="2.327" rx="2.325" ry="2.327" transform="translate(58.294 18.095)" fill="#f5f5f5"/>
                                            <ellipse id="Oval-3" data-name="Oval" cx="2.325" cy="2.327" rx="2.325" ry="2.327" transform="translate(71.444 18.095)" fill="#f5f5f5"/>
                                        </g>
                                    </g>
                                    <path id="Path-31" data-name="Path" d="M547.149,117.736c-44.125,14.082-87.31-6.1-129.557,21.593s-42.247,97.637-13.144,125.8,63.652,12.79,88.249,0c46.941-24.409,11.266-86.841-28.164-55.86-28.705,22.554,60.554,155.844,49.757,210.765s-96.229,28.634-65.717-33.328c15.134-30.733,88.3-86.573,163.354-95.76,75.391-9.228,147.169,41.68,131.317,113.128" transform="translate(-412.437 39.659)" fill="none" stroke="#0a1658" stroke-linecap="round" stroke-width="3" fill-rule="evenodd"/>
                                    <g id="Group-11" data-name="Group" transform="translate(39.832 533.622)">
                                        <path id="Path-32" data-name="Path" d="M15.247,2.04A19.442,19.442,0,0,1,37.94,6.453l3.207-1.525-3.528,9.99-9.983-3.531L29.8,10.345a11.25,11.25,0,0,0-10.985-.8,11.042,11.042,0,0,0-6.335,10.512L4.623,23.786A19.444,19.444,0,0,1,15.247,2.04Z" transform="translate(-4.162 -0.143)" fill="#f5f5f5" fill-rule="evenodd"/>
                                        <path id="Path-33" data-name="Path" d="M13.636,44.5l-2.085,1a11.156,11.156,0,0,0,17.119-9.87l7.858-3.731a19.463,19.463,0,0,1-33.2,17.533L.125,50.963l3.528-9.99Z" transform="translate(1.939 -16.608)" fill="#f5f5f5" fill-rule="evenodd"/>
                                    </g>
                                    <g id="Group-12" data-name="Group" transform="translate(54.473 59.404)">
                                        <path id="Shape" d="M23.5,3.953a1.987,1.987,0,0,0-1.965.4L4.46,19.239a2.043,2.043,0,0,0,.722,3.491l22.171,7.222A2.065,2.065,0,0,0,30,27.544L24.947,5.438A2.314,2.314,0,0,0,23.5,3.953ZM24.546.7a5.454,5.454,0,0,1,3.648,3.972l5.052,22.107A5.468,5.468,0,0,1,26.23,33.2L4.059,25.98a5.5,5.5,0,0,1-1.884-9.348L19.254,1.746A5.51,5.51,0,0,1,24.546.7Z" transform="translate(-0.298 -0.428)" fill="#f5f5f5"/>
                                        <g id="Path-34" data-name="Path" transform="translate(15.654 8.078)">
                                            <path id="Path_1610" data-name="Path 1610" d="M.881,12.8l1.4.441a.526.526,0,0,0,.682-.361L6.855,1.925A.553.553,0,0,0,6.494,1.2L4.53.561a.558.558,0,0,0-.682.361L.52,12.076A.585.585,0,0,0,.881,12.8Z" transform="translate(0.417 -0.54)" fill="#f5f5f5" fill-rule="evenodd"/>
                                            <path id="Path_1611" data-name="Path 1611" d="M10.512,29.379a1.268,1.268,0,1,0,2.406.8,1.307,1.307,0,0,0-.8-1.6A1.225,1.225,0,0,0,10.512,29.379Z" transform="translate(-10.457 -15.035)" fill="#f5f5f5" fill-rule="evenodd"/>
                                        </g>
                                    </g>
                                    <path id="Shape-2" data-name="Shape" d="M491.471,776.249a16.915,16.915,0,0,1,1.4-6.74l-.081-.04.842-1.485a16.993,16.993,0,0,1,11.948-8.425l.642-.08a13.6,13.6,0,0,1,2.2-.16,10.938,10.938,0,0,1,1.123.04l1.082.12h.161l.12.04.281.041a18.428,18.428,0,0,1,3.327.883,16.856,16.856,0,0,1,7.738,5.978,7.519,7.519,0,0,1,.481.722,9.593,9.593,0,0,1,.521.842l.361.6.481.883h-.08a17.059,17.059,0,0,1,1.4,6.74,17.4,17.4,0,0,1-1.4,6.781h.08l-.842,1.484a17.1,17.1,0,0,1-12.308,8.506l-.24.04a13.585,13.585,0,0,1-2.2.16,10.928,10.928,0,0,1-1.123-.04l-1.083-.12-.641-.12a20.318,20.318,0,0,1-2.245-.522,16.956,16.956,0,0,1-9.181-7.061,9.507,9.507,0,0,1-.521-.843l-.361-.6-.481-.883h.08A15.86,15.86,0,0,1,491.471,776.249Zm6.054,9.268.561.6.562.562.6.561.641.482.681.482.682.441.722.4.721.361.762.321.441.161-.241.722h0l.481-.522a28.187,28.187,0,0,1-1.484-6.259,39.658,39.658,0,0,0-5.733.963Zm9.742,5.135c.04.081.08.12.12.2l-.12.08-.04.361h0l.361-.722c.281,0,.6.04.882.04a6.488,6.488,0,0,0,.882-.04l.04.762.2-.762h.12a22.319,22.319,0,0,0,1.965-6.981c-1.043-.08-2.125-.08-3.208-.08s-2.125.04-3.207.08a22.321,22.321,0,0,0,1.965,6.981h.08ZM522.7,774.925a14.129,14.129,0,0,0-1.323-4.774,43.553,43.553,0,0,1-6.856,1.2c.121,1.164.161,2.367.2,3.571Zm-7.938,2.608c-.04,1.243-.08,2.407-.2,3.571a44.3,44.3,0,0,1,6.856,1.2,14.134,14.134,0,0,0,1.323-4.775Zm4.851-10.271-.521-.6-.561-.6-.6-.562-.722-.6-.641-.481-.922-.6-.441-.241-.642-.321.321-.682h0l-.642.522-.762-.321-.641-.2a33.086,33.086,0,0,1,1.443,6.139,39.754,39.754,0,0,0,5.733-.963Zm-17.24-4.855-.04.843-.4.2-.722.4-.682.441-.682.481-.441-.6.16.843-.641.521-.6.562-.321.321-.562.6-.561-.481.321.762-.4.522a55.131,55.131,0,0,0,5.733.963,30.784,30.784,0,0,1,1.443-6.139l-.6.2-.761.321Zm-6.9,7.744a14.123,14.123,0,0,0-1.323,4.774H502.1c.04-1.2.08-2.407.2-3.571A55.837,55.837,0,0,1,495.48,770.151Zm9.262,7.382c.04,1.163.08,2.287.2,3.37,1.163-.08,2.325-.08,3.488-.08s2.325.04,3.488.121c.08-1.084.16-2.207.2-3.37h-7.377Zm7.377-2.608c-.04-1.164-.08-2.287-.2-3.37q-1.744.12-3.488.12t-3.488-.12c-.08,1.083-.16,2.206-.2,3.37Zm-9.783,6.219c-.12-1.164-.16-2.367-.2-3.571H494.2a14.113,14.113,0,0,0,1.323,4.774A42.219,42.219,0,0,1,502.336,781.144Zm5.212-19.218-.04-.763-.241.763h-.08a22.291,22.291,0,0,0-1.965,6.981c1.082.041,2.125.081,3.207.081s2.125-.04,3.208-.081a22.31,22.31,0,0,0-1.965-6.981h-.08v-.12c-.04-.04-.08-.121-.12-.161l.12-.08.04-.361-.32.722c-.24,0-.521-.041-.8-.041l-.08-.762v.762C508.149,761.885,507.869,761.926,507.548,761.926Zm12.909,23.391-.28-.6a50.074,50.074,0,0,0-5.894-1,30.8,30.8,0,0,1-1.443,6.139l.641-.2.24.722h0l.16-.882.361-.12.321.682h0l.04-.843.361-.16.721-.4.682-.441.641-.482.321-.241.6-.522.6-.562.32-.321.562-.6.521-.642.521.481Z" transform="translate(-466.132 -151.347)" fill="#f5f5f5"/>
                                </g>
                                <g id="lady_1" transform="translate(51.353 29.044)">
                                    <path id="portal" d="M115.3,441.681S24.467,473.757,3.406,459.021s83.865-56.048,111.176-66.587,78.746-25.316,83.487-10.538S143.53,432.529,115.3,441.681Z" transform="translate(123.099 -186.48)" fill="#222054" fill-rule="evenodd"/>
                                    <g id="left_hand" transform="translate(77.001 74.27)">
                                        <g id="Group-13" data-name="Group" transform="translate(0 0)">
                                            <g id="Path-35" data-name="Path" transform="translate(0 2.836)">
                                                <path id="Path_1612" data-name="Path 1612" d="M22.945,33.461C15.981,44.209.416,40.472.416,40.472L23.994,0,50.3,23.3C49.585,23.3,29.783,22.881,22.945,33.461Z" transform="translate(-0.416)" fill="#f5632c" fill-rule="evenodd"/>
                                                <path id="Path_1613" data-name="Path 1613" d="M14.513,79.147S1.549,73.311.416,63.4c0,0,15.565,3.737,22.529-7.011,6.838-10.58,26.64-10.16,27.312-10.16Z" transform="translate(-0.374 -22.931)" fill="#e2490f" fill-rule="evenodd"/>
                                            </g>
                                            <ellipse id="Oval-4" data-name="Oval" cx="17.585" cy="3.568" rx="17.585" ry="3.568" transform="translate(47.489 28.791) rotate(-138.121)" fill="#c24414"/>
                                        </g>
                                        <g id="Group-14" data-name="Group" transform="translate(22.553 21.978)">
                                            <path id="Path-36" data-name="Path" d="M4.171,25.729,14.2,16.408S-1.073,5.661.06,1.8,8.073,3.6,13.989,6.458s6.671,6.549,9.523,11.672S46.838,33.286,46.838,33.286l-6.5,13.351C36.056,43.026,24.1,33.5,14.282,30.221A55.467,55.467,0,0,1,4.171,25.729Z" transform="translate(0 -0.493)" fill="#f37777" fill-rule="evenodd"/>
                                            <path id="Path-37" data-name="Path" d="M27.124,64.168A29.268,29.268,0,0,0,12.986,53.42l2.979-2.771a56.4,56.4,0,0,0,10.069,4.492c9.817,3.275,21.732,12.805,26.053,16.416L44.535,87.049C44.493,87.007,33.124,72.522,27.124,64.168Z" transform="translate(-11.793 -25.371)" fill="#f15858" fill-rule="evenodd"/>
                                        </g>
                                        <path id="Path-38" data-name="Path" d="M107.4,24.655c1.132-.126,4.908,3.611,4.4,5.668S104.97,51.1,99.348,49.8c-5.58-1.3-3.608-6.3-3.23-7.179C96.538,41.658,106.1,24.781,107.4,24.655Z" transform="translate(-90.58 -12.33)" fill="#f37777" fill-rule="evenodd"/>
                                    </g>
                                    <g id="face" transform="translate(137.264 21.462)">
                                        <path id="Path-39" data-name="Path" d="M48.365,170.466l7.006-3.274A22.232,22.232,0,0,1,48.365,170.466Z" transform="translate(-24.889 -83.124)" fill="none" fill-rule="evenodd"/>
                                        <path id="Path-40" data-name="Path" d="M27.914,3.582s7.8,3.317,10.195,15.2,7.719,17.591,18.585,17.339,13.593,19.606,8.894,26.24c-3.9,5.542.294,16.961-9.02,23.721l-7.006,3.275c4.657-12.973-1.846-31.4-1.846-31.4a17.163,17.163,0,0,1-17.411-4.492C22.5,45.482,27.914,3.582,27.914,3.582Z" transform="translate(-26.086 -1.971)" fill="#f37777" fill-rule="evenodd"/>
                                        <path id="Path-41" data-name="Path" d="M52.1,73.495,28.731,84.453c9.314-6.759,5.118-18.137,9.02-23.721,4.657-6.633,1.972-26.492-8.894-26.24S12.663,29.076,10.272,17.153C7.88,5.271.077,1.954.077,1.954,64.559-12.152,52.1,73.495,52.1,73.495Z" transform="translate(1.75 -0.385)" fill="#f15858" fill-rule="evenodd"/>
                                    </g>
                                    <g id="body" transform="translate(96.845 86.014)">
                                        <path id="Path-42" data-name="Path" d="M46.9,49.438c5.5-6.843,17.83-14.652,28.7-20.7,0,0-6.293,17.3,13.173,20.236s22.613,17.885,24.207,29.431,58.525,4.072,71.237,40.766h0c2.769,22.251,3.9,41.4,3.9,41.4-20.641,14.443-47.911,24.645-69.516,30.774,0,0-27.521-18.85-21.438-54.159,6.125-35.308-17.7-60.121-17.7-60.121s6.5,7.809,8.559,27.5S49.8,146.924,49.8,146.924s-9.607,6.507-27.983,9.153C19.38,131.474.25,111.28.25,111.28h0C17.786,95.62,38.511,59.934,46.9,49.438Z" transform="translate(-0.25 -14.346)" fill="#fff" fill-rule="evenodd"/>
                                        <path id="Path-43" data-name="Path" d="M46.342,64.24C44.748,52.695,41.6,37.748,22.135,34.81S8.962,14.573,8.962,14.573C19.618,8.654,28.847,4.455,28.847,4.455c45.394-15.408,64.1,13.6,76.313,42.781,5.832,13.981,9.817,37.282,12.418,57.728h0C104.867,68.355,47.936,75.786,46.342,64.24Z" transform="translate(66.386 -0.179)" fill="#c9e4f6" fill-rule="evenodd"/>
                                        <path id="Path-44" data-name="Path" d="M176.53,152.122c-2.056-19.69-8.559-27.5-8.559-27.5s23.829,24.771,17.7,60.121c-6.125,35.308,21.438,54.159,21.438,54.159-16.32,4.912-28.067,7.305-28.067,7.305-8.307-22.923-40.779-51.724-40.779-51.724S178.586,171.813,176.53,152.122Z" transform="translate(-88.805 -61.906)" fill="#c9e4f6" fill-rule="evenodd"/>
                                    </g>
                                    <g id="hair" transform="translate(130.853 0)">
                                        <path id="Path-45" data-name="Path" d="M250.73,82.971a8.735,8.735,0,0,1,1.846,1.889C251.4,83.643,250.73,82.971,250.73,82.971Z" transform="translate(-198.944 -41.299)" fill="none" fill-rule="evenodd"/>
                                        <path id="Path-46" data-name="Path" d="M1.726,1.527C8.144-3.469,22.2,8.2,38.267,8.5c17.2.336,26.766,6.675,31.339,23.679,4.573,16.961,19.005,21.916,53.281,25.148s26.976,30.732,24.794,37.2-1.342,15.618,10.866,14.61,15.942-.672,13.257,7.977c-2.727,8.649-3.566,22.755,2.727,24.435s5.58,9.7-2.559,11.881,2.559,11.881,2.559,11.881c-26.976-2.225-2.559-17.675-16.781-22.252-14.264-4.576-25.466-20.362-22.235-39.213s-22.571-5.794-45.142-3.568-16.278-8.649-21.564-27.5A73.809,73.809,0,0,0,52.573,43.846a8.746,8.746,0,0,0-1.846-1.889,8.881,8.881,0,0,0-2.811-1.427c-5.286-1.511-8.139,4.534-8.726,6.843-.546,2.309-3.231,12.469-3.231,12.469l-2.643-8.481c-10.74,2.9-12.628-.84-15.9-12.6S10.41,26.885,10.41,26.885s-.755-6.549-3.9-10.916C3.278,11.645-2.3,6.859,1.726,1.527Z" transform="translate(1.101 -0.285)" fill-rule="evenodd"/>
                                        <path id="Path-47" data-name="Path" d="M102.547,203.1c-4.573-11.209-34.444-7.977-41.911-6.466s-16.613-.84-12.544-18.515S27.745,158.6,17.215,153.684s-2.224-24.435.5-33.629c2.727-9.152-8.894-18.724-8.894-18.724s7.09-1.511,9.314-5.836a8.468,8.468,0,0,0-.923-8.774A73.47,73.47,0,0,1,33.45,115.646c5.244,18.851-1.007,29.725,21.564,27.5s48.372-15.282,45.142,3.568,7.971,34.637,22.235,39.213-10.195,20.027,16.781,22.252C139.173,208.179,107.12,214.308,102.547,203.1Z" transform="translate(36.376 -43.158)" fill-rule="evenodd"/>
                                        <path id="Path-48" data-name="Path" d="M335.959,4.093a6.436,6.436,0,0,1,1.258-1.343c-3.985,5.332,1.594,10.118,4.741,14.442,3.188,4.366,3.9,10.916,3.9,10.916-2.811-8.061-4.069,4.408-4.069,4.408S330.295,12.111,335.959,4.093Z" transform="translate(-334.39 -1.507)" fill-rule="evenodd"/>
                                    </g>
                                    <g id="right_hand" transform="translate(0 148.746)">
                                        <path id="Path-49" data-name="Path" d="M154.554,111.024a80.588,80.588,0,0,1-17.368-13.141C142.22,101.619,147.926,106.405,154.554,111.024Z" transform="translate(-104.991 -48.818)" fill="none" fill-rule="evenodd"/>
                                        <path id="Path-50" data-name="Path" d="M8.645,2.74c5.077-.672,12.544,11.881,12.544,11.881S23.16,1.9,25.3.641s3.524,8.4,5.328,19.816S65.491,42.2,84.244,42.2c4.279,0,9.188-2.855,14.348-7.473h0s17.075,18.011,21.019,40.724c-.042,0-36.835,5.08-68.216-12.679-6.628-4.66-12.334-9.4-17.368-13.141h0a52.121,52.121,0,0,0-8.475-5.416C10.281,36.747,4.24,29.106,2.394,22.976.506,16.8,3.568,3.412,8.645,2.74Z" transform="translate(-1.831 -0.53)" fill="#f37777" fill-rule="evenodd"/>
                                        <path id="Path-51" data-name="Path" d="M49.793,141.758c-20.851-.672-36.583-9.069-49.044-17.8,31.381,17.759,68.174,12.679,68.216,12.679.252,1.343.42,2.687.545,4.072A106.1,106.1,0,0,1,49.793,141.758Z" transform="translate(48.814 -61.752)" fill="#f15858" fill-rule="evenodd"/>
                                    </g>
                                </g>
                                <g id="lady_2" transform="translate(64.534 374.732)">
                                    <path id="portal_1_" d="M92.012,424.161c2.31-14.824,61.881-17.862,133.094-6.8s127.069,32.051,124.759,46.875c-1.495,9.611-27.09,14.235-64.282,13.328l10.147-39.531L173.463,423.844l-2.4,38.262C123.133,450.681,90.2,435.585,92.012,424.161Z" transform="translate(-91.941 -187.503)" fill="#222054" fill-rule="evenodd"/>
                                    <g id="body_1_" transform="translate(15.984 54.787)">
                                        <g id="Group-15" data-name="Group" transform="translate(63.091 181.554)">
                                            <g id="Path-52" data-name="Path">
                                                <path id="Path_1614" data-name="Path 1614" d="M.173,46.052C.581,26.695,23.05,15.905,28.94,13.412l59.072,6.845L77.864,59.789A543.715,543.715,0,0,1,9.052,53.26L.627,51.9A29.472,29.472,0,0,1,.173,46.052Z" transform="translate(36.656 -6.113)" fill="#f37777" fill-rule="evenodd"/>
                                                <path id="Path_1615" data-name="Path 1615" d="M111.072,0l63.24,7.344c-5.889,2.493-28.359,13.328-28.766,32.64a26.807,26.807,0,0,0,.5,5.848c-13.137-2.221-25.685-4.76-37.328-7.525Z" transform="translate(-108.716)" fill="#f15858" fill-rule="evenodd"/>
                                            </g>
                                            <ellipse id="Oval-5" data-name="Oval" cx="1.993" cy="1.541" rx="1.993" ry="1.541" transform="translate(58.483 38.715)" fill="#f15858"/>
                                        </g>
                                        <g id="Group-16" data-name="Group" transform="translate(0 43.422)">
                                            <path id="Path-53" data-name="Path" d="M38.365,40.96C58.161,28.538,94.538,12.9,94.538,12.9s79.594,6.256,92.006,10.064,60.975,29.784,60.975,19.494c0-5.667-9.242-19.856-17.531-32.5L245.254.25c10.238,9.339,29.808,21.262,42.4,35.814,0,0,18.528,23.982-1.767,34.726s-67.68,8.069-71.077,11.742c-3.443,3.672-17.576,74.257-17.576,74.257-22.334,4.9-51.19,2.131-75.607-2.221L168.016,127s-71.711-1.45-79.775-10.744c-8.109-9.293-23.058-25.931-23.058-25.931s-12.277-4.216-15.4-4.216-5.119,3.128-3.85,16.5c1.042,10.744,10.691,29.285,16.716,37.99l-10.51,8.749C41.581,138.2,20.924,118.662,11.229,97.174-1.228,69.52,18.568,53.381,38.365,40.96Z" transform="translate(-7.346 -0.25)" fill="#46389c" fill-rule="evenodd"/>
                                            <path id="Path-54" data-name="Path" d="M344.278,202.45,297.89,230.013a437.715,437.715,0,0,1-50.148-11.968c.544-11.923-6.252-52.27-6.252-52.27s14.95,16.638,23.013,25.931C272.566,200.954,344.278,202.45,344.278,202.45Z" transform="translate(-183.654 -75.697)" fill="#222054" fill-rule="evenodd"/>
                                            <path id="Path-55" data-name="Path" d="M88.82,100.7c20.295-10.744,1.767-34.726,1.767-34.726,6.886,7.979,11.688,16.728,11.688,26.339,0,34.363-80.364,38.216-80.364,38.216L.166,186.7s14.18-70.585,17.577-74.257S68.571,111.492,88.82,100.7Z" transform="translate(189.677 -30.209)" fill="#222054" fill-rule="evenodd"/>
                                        </g>
                                        <path id="Path-56" data-name="Path" d="M405.28,342.446c4.394,3.49,19.253,16.32,20.159,20.717s-6.614,6.8-13.726,5.486c-7.158-1.27-10.646-6.982-14.5-14.507-.861-1.677-3.036-4.171-6.025-7.344l10.51-8.749A21.2,21.2,0,0,0,405.28,342.446Z" transform="translate(-346.356 -154.318)" fill="#f37777" fill-rule="evenodd"/>
                                        <path id="Path-57" data-name="Path" d="M99.559,31.024c0-6.845,12.458-32.958,19.978-30.419s1.948,18.678,1.223,32.867c-.136,3.037,2.492,6.483,6.75,10.381l-15.267,9.7C105.585,43.309,99.559,34.061,99.559,31.024Z" transform="translate(110.352 -0.432)" fill="#f37777" fill-rule="evenodd"/>
                                    </g>
                                    <g id="head" transform="translate(103.176 0)">
                                        <g id="Group-17" data-name="Group" transform="translate(0 81.027)">
                                            <path id="Path-58" data-name="Path" d="M38.129,21.024A108.691,108.691,0,0,0,43.021,8.33c1.314,3.264,3.171,6.664,5.527,7.888,5.028,2.629,6.614,17.272,9.83,21.216s33.749,6.437,33.749,6.437-12.186,23.12-53.319,17C11.628,56.838.166,33.853.166,33.853S34.369,29,38.129,21.024Z" transform="translate(-0.166 -3.978)" fill="#f37777" fill-rule="evenodd"/>
                                            <path id="Path-59" data-name="Path" d="M15.44,33.79c-3.216-3.944-4.8-18.542-9.83-21.216C3.254,11.349,1.4,7.949.083,4.685.944,2.056,1.4.333,1.4.333s17.8,2.176,18.483,6.8c0,0-4.394,21.126,1.223,23.8s28.087,9.293,28.087,9.293S18.657,37.734,15.44,33.79Z" transform="translate(42.817 -0.333)" fill="#f15858" fill-rule="evenodd"/>
                                        </g>
                                        <g id="Group-18" data-name="Group" transform="translate(37.299)">
                                            <path id="Path-60" data-name="Path" d="M37.839,23.963c-9.151,6.029-21.88,9.157-26.682,1.723A38.652,38.652,0,0,1,9.8,13.309C10.161,4.061,21.758,1.93,26.106,1.024,30.818.072,34.759.616,37.839,2.248,40.422,7.824,44.68,19.429,37.839,23.963Z" transform="translate(-9.769 -0.555)" fill-rule="evenodd"/>
                                            <path id="Path-61" data-name="Path" d="M35.957,23.658C35.051,36.85,17.928,35.671,9.592,35.444,4.926,35.308,2.208,31.818.759,27.1c4.8,7.435,17.531,4.307,26.682-1.723,6.84-4.533,2.582-16.139,0-21.715C33.692,7.02,36.592,14.818,35.957,23.658Z" transform="translate(0.63 -1.973)" fill-rule="evenodd"/>
                                        </g>
                                        <path id="Path-62" data-name="Path" d="M68.533,60.176s.045-2.992-5.934-2.947c-5.934.045-10.827.045-10.736,4.9C51.862,62.126,67.31,62.08,68.533,60.176Z" transform="translate(-4.704 -26.387)" fill="#f5632c" fill-rule="evenodd"/>
                                        <g id="Group-19" data-name="Group" transform="translate(38.679 33.495)">
                                            <path id="Path-63" data-name="Path" d="M10.748,6.964c2.99-3.944,22.2-11.107,33.568-2.312C46.9,8.868,51.971,18.117,50.748,24.01c-1.631,7.888-4.485,9.973-4.485,9.973s.589,2.357,1.495,5.168c-11.28,5.213-36.2-15.187-36.2-15.187S7.667,11,10.748,6.964Z" transform="translate(-9.562 -0.46)" fill-rule="evenodd"/>
                                            <path id="Path-64" data-name="Path" d="M6.969,27.6C8.192,21.666,3.164,12.463.536,8.247c.272.227.589.453.861.725C12.632,18.855,15.214,21.8,8.1,38.3a8.309,8.309,0,0,1-4.122,4.443c-.906-2.811-1.495-5.168-1.495-5.168S5.293,35.493,6.969,27.6Z" transform="translate(34.217 -4.009)" fill-rule="evenodd"/>
                                        </g>
                                        <g id="Group-20" data-name="Group" transform="translate(33.702 37.698)">
                                            <path id="Path-65" data-name="Path" d="M1.385,16.9c3.443-4.941,6.976.091,8.245,2.312C13.525,7.339,21.861-.594,29.834.857c9.015,1.587,14.36,14.507,12.231,29.2,1.9-.68,7.746-2.221,7.384,3.355-.408,6.029-5.346,7.888-10.193,7.027-4.213,10.381-11.869,17-19.208,15.685-8.2-1.45-13.364-12.285-12.639-25.3C5.371,29.236-2.33,22.3,1.385,16.9Z" transform="translate(-0.387 -0.686)" fill="#f37777" fill-rule="evenodd"/>
                                            <path id="Path-66" data-name="Path" d="M53.253,75.318c-1.721.907-2.356,3.808,0,6.936s4.213,3.128,5.21.861C59.5,80.849,56.6,73.5,53.253,75.318Z" transform="translate(-37.532 -34.574)" fill="#f15858" fill-rule="evenodd"/>
                                        </g>
                                        <path id="Path-67" data-name="Path" d="M60.122,98.27s-18.709-.952-19.706-14.643c0,0-5.074,6.891-12.73,3.853,0,0,.091-15.957,13-19.131C53.6,65.131,66.283,79.638,60.122,98.27Z" transform="translate(15.259 -31.252)" fill-rule="evenodd"/>
                                    </g>
                                    <g id="Group-21" data-name="Group" transform="translate(212.395 50.531)">
                                        <g id="Group_399" data-name="Group 399" transform="translate(0 0)">
                                            <g id="Path-68" data-name="Path" transform="translate(2.946 0.076)">
                                                <path id="Path_1616" data-name="Path 1616" d="M24.663,26.408C16.327,28.493,5.772,22.237.789,18.791L.11.25,48.627,8.818a32.546,32.546,0,0,1,1.631,16.094C45.32,24.64,33.451,24.232,24.663,26.408Z" transform="translate(-0.11 -0.25)" fill="#f5632c" fill-rule="evenodd"/>
                                                <path id="Path_1617" data-name="Path 1617" d="M1.512,53.037.832,34.4c5.028,3.445,15.538,9.7,23.874,7.616,8.788-2.176,20.657-1.768,25.55-1.5a20.609,20.609,0,0,1-.544,2.856Z" transform="translate(-0.153 -15.818)" fill="#e2490f" fill-rule="evenodd"/>
                                            </g>
                                            <ellipse id="Oval-6" data-name="Oval" cx="18.586" cy="2.854" rx="18.586" ry="2.854" transform="translate(1.541 37.377) rotate(-92.376)" fill="#c24414"/>
                                        </g>
                                        <path id="Path-69" data-name="Path" d="M60.6,52.264s-3.76-9.157-1.45-15.867S64,49.181,67.762,50.586,60.6,52.264,60.6,52.264Z" transform="translate(-46.832 -16.011)" fill="#f37777" fill-rule="evenodd"/>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </g>
            </svg>


        </div>
    </div>
    <div class="flex-grow-1 per-10 sendUsMessage paddingM-30" style="margin: 100px 0">
        <h6 class="saTitle1 titleIcon2" style="text-align: center;font-weight: 500!important;">Send Us a Message</h6>
        <form action="" class="per-7 flex-grow-1 sendMessageBoxWrap mw-100m" style="margin: 0 auto">
            <div class="inputEachRowWrap">
                <div style="margin-right: 20px;">
                    <input type="text" placeholder="First Name" name="firstNameCon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16.665" height="20.723" viewBox="0 0 16.665 20.723">
                        <g id="Profile" transform="translate(-3.25 -1.75)">
                            <circle id="Ellipse_828" data-name="Ellipse 828" cx="4.778" cy="4.778" r="4.778" transform="translate(6.801 2.5)" fill="none" stroke="#a3a3a4" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                            <path id="Path_88568" data-name="Path 88568" d="M4,18.7a2.215,2.215,0,0,1,.22-.97,4.042,4.042,0,0,1,2.819-1.62,16.778,16.778,0,0,1,2.343-.33,25.039,25.039,0,0,1,4.384,0,16.979,16.979,0,0,1,2.343.33c1.071.22,2.361.659,2.819,1.62a2.27,2.27,0,0,1,0,1.95c-.458.961-1.748,1.4-2.819,1.611a15.722,15.722,0,0,1-2.343.339,25.825,25.825,0,0,1-3.57.055,4.06,4.06,0,0,1-.815-.055,15.417,15.417,0,0,1-2.334-.339c-1.08-.211-2.362-.65-2.828-1.611A2.279,2.279,0,0,1,4,18.7Z" fill="none" stroke="#a3a3a4" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" fill-rule="evenodd"/>
                        </g>
                    </svg>
                </div>
                <div>
                    <input type="text" placeholder="Last Name" name="lastNameCon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16.665" height="20.723" viewBox="0 0 16.665 20.723">
                        <g id="Profile" transform="translate(-3.25 -1.75)">
                            <circle id="Ellipse_828" data-name="Ellipse 828" cx="4.778" cy="4.778" r="4.778" transform="translate(6.801 2.5)" fill="none" stroke="#a3a3a4" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                            <path id="Path_88568" data-name="Path 88568" d="M4,18.7a2.215,2.215,0,0,1,.22-.97,4.042,4.042,0,0,1,2.819-1.62,16.778,16.778,0,0,1,2.343-.33,25.039,25.039,0,0,1,4.384,0,16.979,16.979,0,0,1,2.343.33c1.071.22,2.361.659,2.819,1.62a2.27,2.27,0,0,1,0,1.95c-.458.961-1.748,1.4-2.819,1.611a15.722,15.722,0,0,1-2.343.339,25.825,25.825,0,0,1-3.57.055,4.06,4.06,0,0,1-.815-.055,15.417,15.417,0,0,1-2.334-.339c-1.08-.211-2.362-.65-2.828-1.611A2.279,2.279,0,0,1,4,18.7Z" fill="none" stroke="#a3a3a4" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" fill-rule="evenodd"/>
                        </g>
                    </svg>

                </div>
            </div>
            <div class="inputEachRowWrap">
                <div style="margin-right: 20px;">
                    <input type="email" placeholder="Email" name="emailCon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20.732" height="18.616" viewBox="0 0 20.732 18.616">
                        <g id="Message" transform="translate(-1.25 -2.75)">
                            <path id="Path_88569" data-name="Path 88569" d="M17.268,9.061,13,12.5a2.223,2.223,0,0,1-2.746,0l-4.3-3.434" fill="none" stroke="#a3a3a4" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                            <path id="Path_88570" data-name="Path 88570" d="M6.888,3.5h9.428A4.957,4.957,0,0,1,19.9,5.09a5.017,5.017,0,0,1,1.326,3.7v6.528a5.017,5.017,0,0,1-1.326,3.7,4.957,4.957,0,0,1-3.58,1.59H6.888C3.968,20.616,2,18.241,2,15.322V8.794C2,5.875,3.968,3.5,6.888,3.5Z" fill="none" stroke="#a3a3a4" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" fill-rule="evenodd"/>
                        </g>
                    </svg>

                </div>
                <div>
                    <input type="tel" placeholder="Phone" name="phoneCon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20.505" height="20.508" viewBox="0 0 20.505 20.508">
                        <path id="Call" d="M2.99,4.873c.316-.524,2.059-2.429,3.3-2.371a1.636,1.636,0,0,1,.967.517,16.863,16.863,0,0,1,2.468,3.34C9.971,7.526,8.578,8.2,9,9.378a9.873,9.873,0,0,0,5.619,5.616c1.177.426,1.851-.966,3.019-.723a16.892,16.892,0,0,1,3.34,2.468,1.638,1.638,0,0,1,.517.967c.046,1.309-1.977,3.077-2.371,3.3-.93.666-2.144.654-3.624-.034C11.374,19.257,4.774,12.782,3.024,8.5,2.355,7.025,2.308,5.8,2.99,4.873Z" transform="translate(-1.746 -1.748)" fill="none" stroke="#a3a3a4" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" fill-rule="evenodd"/>
                    </svg>
                </div>
            </div>

            <textarea placeholder="Message" name="messageCon" id="sendUsMessage" cols="30" rows="10"></textarea>
            <input type="submit" value="Submit" id="contactUsSubmit">
        </form>
    </div>





    <script>
        $(document).ready(function (){


            if($(window).width() < 1000){
                $('.homePart1 .right svg,.homePart4 .left svg').removeAttr('width').removeAttr('height')

            }


            if($(window).width() < 1000) {
                faqSvg1.getAnimations().forEach((animation) => {
                    animation.effect.composite = "add";
                });
                faqSvg2.getAnimations().forEach((animation) => {
                    animation.effect.composite = "accumulate";
                });

                $('.ourServicesMobile').removeClass('d-none')

            }

            $('#contactUsSubmit').click(function (e){
                e.preventDefault();
                var firstName = $('input[name=firstNameCon]').val();
                var lastName = $('input[name=lastNameCon]').val();
                var email = $('input[name=emailCon]').val();
                var phone = $('input[name=phoneCon]').val();
                var message = $('input[name=messageCon]').val();

                $.ajax({
                    type: "post",
                    dataType: "json",
                    data:{
                        action: 'contactUsForm',
                        firstName : firstName,
                        lastName : lastName,
                        email : email,
                        phone : phone,
                        message : message
                    },
                    url: window.location.origin + "/wp-admin/admin-ajax.php",
                    success: function(msg){
                        console.log(msg);
                        Swal.fire({
                            title: 'Your Project Submited!',
                            icon: 'success',
                            showClass: {
                                popup: 'animate__animated animate__fadeInDown'
                            },
                            hideClass: {
                                popup: 'animate__animated animate__fadeOutUp'
                            }
                        })
                    }
                });




            })






        })
    </script>

<?php get_footer(); ?>