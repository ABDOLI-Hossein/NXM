<?php


/**
 * Template Name: Services Nexmark
 * Template Post Type: post, page
 */
get_header();
?>
    <style>
        .ourServicesMobile{
            margin: 100px 0;
        }
        .ourServicesMobile .ourServicesMobileOwl{
            margin-top: 60px;
        }
        .ourServicesMobile .ourServicesMobileOwl .owl-dots button span{
            width: 12px;
            height: 12px;
            border: 1px solid #FFD201;
            background-color: #fff;
        }
        .ourServicesMobile .ourServicesMobileOwl .owl-dots button.active span{
            width: 24px;
            height: 12px;
            background-color: #FFD201;
        }
        .ourServicesMobile .ourServicesMobileOwl .owl-dots{
            position: absolute;
            top: -96px;
            right: 0;
        }

        .ourServicesMobile .item .eachSlideWrap{
            width: 150px;
            height: 200px;
            border-radius:15px;
            /*background-color: #fff;*/
            display: flex;
            /*justify-content: center;*/
            align-items: center;
            flex-direction: column;
            padding: 10px;

        }
        /*.ourServicesMobile .item .eachSlideWrap svg path{*/
        /*    fill: #fff;*/
        /*}*/
        .ourServicesMobile .item .eachSlideWrap h6{
            color: #000;
            font-size:15px;
            line-height: 24px;
            text-align: center;
            margin: 0;
            margin-top: 15px;
        }
        .ourServicesMobile .item{
            display: flex;
            justify-content: center;
        }
        .ourServicesMobile .titleIcon2:after{
            right: unset!important;
        }
        .ourServicesMobile .ourServicesMobileDetailWrap{
            height: 550px;
            border-radius: 20px;
            background-color: #46389C;
            margin-top: 35px;
        }
        .ourServicesMobile .ourServicesMobileDetailWrap img{
            max-width: 100%;
        }
        .ourServicesMobile .ourServicesMobileDetailWrap h6{
            font-size: 22px;
            color: #fff;
            line-height: 37px;
            margin: 0;
        }
        .ourServicesMobile .ourServicesMobileDetailWrap p{
            color: #fff;
            font-size: 17px;
            line-height: 30px;
        }
        .ourServicesMobile .ourServicesMobileDetailWrap a{
            font-size: 20px;
            line-height: 24px;
            color: #FFD201;
        }
        .selectedItemServices h6{
            color: #fff!important;
        }
/*         .ourServicesMobile .ourServicesMobileOwl  .owl-stage-outer {
            overflow: unset!important;
        } */
        .faq #faqSvg1{
            animation:
                    translate-x 5000ms infinite alternate ease-in-out,
                    translate-y 2100ms infinite alternate ease-in-out,
                    rotate 6500ms infinite linear,
                    translate-x 5000ms infinite alternate ease-in-out,
                    scale 7200ms infinite alternate ease-in-out;
        }
        .faq #faqSvg2{
            position: absolute;
            top: 500px;
            left: 10px;
            animation:
                    translate-x 5000ms infinite alternate ease-in-out,
                    translate-y 2100ms infinite alternate ease-in-out,
                    rotate 6500ms infinite linear,
                    translate-x 5000ms infinite alternate ease-in-out,
                    scale 7200ms infinite alternate ease-in-out;
        }
        .faq{
            position: relative;
        }
    </style>

    <div class="flex-grow-1 per-10 d-flex homePart1 flex-direction-column-reverse" style="min-height: 586px">
        <div class="per-5 flex-grow-1 left mw-100m paddingM-30">
            <h1>Services</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Egestas purus viverra accumsan in nisl nisi Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque </p>
            <a class="saBtnStyle1 startNewProject">Start a New Project</a>
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
            <svg xmlns="http://www.w3.org/2000/svg" width="674.001" height="673.508" viewBox="0 0 674.001 673.508">
                <g id="Group_33650" data-name="Group 33650" transform="translate(-691.999 7)">
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
                    <g id="Group_20756" data-name="Group 20756" transform="translate(105.275 -373.955)">
                        <path id="Path" d="M1028.186,535.623l.406-.076a1.438,1.438,0,0,1,1.5,1.371l.232,5.255a1.421,1.421,0,0,1-.879,1.363,31.32,31.32,0,0,0-17.612,18.419,1.392,1.392,0,0,1-1.256.929l-5.355.233a1.455,1.455,0,0,1-1.207-.551,1.426,1.426,0,0,1-.242-1.291A39.2,39.2,0,0,1,1028.186,535.623Z" transform="translate(201.475 160.606)" fill="#fff" fill-rule="evenodd"/>
                        <path id="Path-2" data-name="Path" d="M1046.092,504.536l.309-.044a1.432,1.432,0,0,1,1.492,1.367l.227,5.175a1.414,1.414,0,0,1-1.014,1.411,44.1,44.1,0,0,0-30.356,32.166,1.413,1.413,0,0,1-1.309,1.089l-5.187.225a1.442,1.442,0,0,1-1.468-1.721A52.225,52.225,0,0,1,1046.092,504.536Z" transform="translate(181.237 176.664)" fill="#fff" fill-rule="evenodd"/>
                        <path id="Path-3" data-name="Path" d="M981.749,586.069a8.3,8.3,0,1,1-8.358,8.242A8.3,8.3,0,0,1,981.749,586.069Z" transform="translate(250.939 126.081)" fill="#fff" fill-rule="evenodd"/>
                    </g>
                    <g id="Page-1" transform="translate(682.021 -1.033)">
                        <g id="Artboard" transform="translate(0.721 1.033)">
                            <g id="WEB-DEVELOPEMENT-01" transform="translate(0 0)">
                                <g id="BG" transform="translate(0 441.438)">
                                    <path id="Path-4" data-name="Path" d="M1138.58,360.743h-31.7l-4.222-61.788h40.393Z" transform="translate(-512.329 -138.799)" fill="#d5d7d8" fill-rule="evenodd"/>
                                    <path id="Path-5" data-name="Path" d="M1102.478,231.575s5.025-24.848-5.031-34.9-15.8-13.646-15.8-13.646S1062.979,212.9,1102.478,231.575Z" transform="translate(-500.527 -84.976)" fill="#ecedf1" fill-rule="evenodd"/>
                                    <path id="Path-6" data-name="Path" d="M1106.762,102.164s5.031-24.852-5.025-34.906-15.8-13.647-15.8-13.647S1067.269,83.488,1106.762,102.164Z" transform="translate(-502.518 -24.891)" fill="#ecedf1" fill-rule="evenodd"/>
                                    <path id="Path-7" data-name="Path" d="M1117.174,36.861s4.4-16.181-3.927-25.374S1095.911,0,1095.911,0,1094.765,25.468,1117.174,36.861Z" transform="translate(-509.191)" fill="#d5d7d8" fill-rule="evenodd"/>
                                    <path id="Path-8" data-name="Path" d="M1150.584,204.937s-2.009-36.053,21.975-51.132C1172.559,153.8,1172.715,196.315,1150.584,204.937Z" transform="translate(-534.56 -71.409)" fill="#ecedf1" fill-rule="evenodd"/>
                                    <path id="Path-9" data-name="Path" d="M1121.55,180.383s-2.9-25.088-21.22-32.634C1100.351,147.749,1105.258,177.068,1121.55,180.383Z" transform="translate(-511.247 -68.597)" fill="#d5d7d8" fill-rule="evenodd"/>
                                    <path id="Path-10" data-name="Path" d="M1155.833,90.565s-14.507-25.713,14.941-44.817C1170.774,45.748,1182.073,77.914,1155.833,90.565Z" transform="translate(-535.357 -21.24)" fill="#d5d7d8" fill-rule="evenodd"/>
                                    <path id="Path-11" data-name="Path" d="M1126.69,42s8.127,15.9,8.127,40.217v36.2" transform="translate(-523.486 -19.5)" fill="none" stroke="#d5d7d8" stroke-linecap="round" stroke-width="2" fill-rule="evenodd"/>
                                    <path id="Path-12" data-name="Path" d="M1112.91,108.49s6.793,12.16,8.422,19.153,3.021,29.395,3.021,52.091v49.41" transform="translate(-517.088 -50.37)" fill="none" stroke="#d5d7d8" stroke-linecap="round" stroke-width="2" fill-rule="evenodd"/>
                                    <path id="Path-13" data-name="Path" d="M1108.62,238.979s7.612,12.16,8.427,18.573,0,32.893,0,32.893" transform="translate(-515.096 -110.953)" fill="none" stroke="#d5d7d8" stroke-linecap="round" stroke-width="2" fill-rule="evenodd"/>
                                    <path id="Path-14" data-name="Path" d="M1127.97,191.74a73.9,73.9,0,0,1,6.412,9.068c1.843,3.5,3.348,16.065,3.348,21.742v42.233" transform="translate(-524.08 -89.021)" fill="none" stroke="#d5d7d8" stroke-linecap="round" stroke-width="2" fill-rule="evenodd"/>
                                    <path id="Path-15" data-name="Path" d="M1164.678,93.2s-5.748,11.205-5.748,19.394V219.035" transform="translate(-538.454 -43.273)" fill="none" stroke="#d5d7d8" stroke-linecap="round" stroke-width="2" fill-rule="evenodd"/>
                                </g>
                                <rect id="Rectangle" width="510.06" height="326.966" transform="translate(81.156 215.836)" fill="#f6f6f6"/>
                                <rect id="Rectangle-2" data-name="Rectangle" width="510.06" height="28.672" transform="translate(81.156 228.938)" fill="#d5d7d8"/>
                                <rect id="Rectangle-3" data-name="Rectangle" width="394.509" height="17.814" rx="2.6" transform="translate(142.069 234.364)" fill="#f2f2f3"/>
                                <rect id="Rectangle-4" data-name="Rectangle" width="129.978" height="5.382" transform="translate(274.332 240.581)" fill="#d5d7d8"/>
                                <path id="Shape" d="M283.311,454.687a4.016,4.016,0,1,1,3.734-2.479A4.016,4.016,0,0,1,283.311,454.687Zm0-7.586a1.486,1.486,0,1,0,0-.018Z" transform="translate(-130.068 -207.39)" fill="#2f3e8b"/>
                                <path id="Path-16" data-name="Path" d="M293.885,461.473a.227.227,0,0,1-.161-.067l-2.285-2.285a.223.223,0,0,1,.317-.312l2.285,2.285a.223.223,0,0,1-.156.379Z" transform="translate(-135.666 -213.003)" fill="#2f3e8b" fill-rule="evenodd"/>
                                <path id="Path-17" data-name="Path" d="M980.7,454.7a4.016,4.016,0,0,1,0-8.033.223.223,0,0,1,0,.446,3.57,3.57,0,1,0,3.57,3.57.223.223,0,1,1,.446,0A4.017,4.017,0,0,1,980.7,454.7Z" transform="translate(-453.84 -207.394)" fill="#2f3e8b" fill-rule="evenodd"/>
                                <path id="Shape-2" data-name="Shape" d="M983.985,447.813a.2.2,0,0,1-.1-.027.219.219,0,0,1-.121-.2v-2.735a.223.223,0,0,1,.348-.183l2.026,1.366a.227.227,0,0,1,.1.187.218.218,0,0,1-.1.183l-2.026,1.37A.24.24,0,0,1,983.985,447.813Zm.223-2.539v1.9l1.406-.946Z" transform="translate(-457.127 -206.452)" fill="#2f3e8b"/>
                                <path id="Shape-3" data-name="Shape" d="M1024.282,454.873a.219.219,0,0,1-.182-.088.225.225,0,0,1-.032-.2l1.291-3.968-3.375-2.454a.225.225,0,0,1,.129-.4h4.173l1.291-3.967a.231.231,0,0,1,.445,0l1.291,3.967h4.173a.226.226,0,0,1,.209.152.217.217,0,0,1-.081.25l-3.375,2.454,1.291,3.968a.218.218,0,0,1-.08.25.223.223,0,0,1-.263,0l-3.38-2.454-3.37,2.454A.248.248,0,0,1,1024.282,454.873Zm3.5-2.994a.236.236,0,0,1,.134.044l2.952,2.142-1.13-3.467a.227.227,0,0,1,.086-.25l2.947-2.142h-3.643a.22.22,0,0,1-.209-.156l-1.13-3.467-1.125,3.467a.222.222,0,0,1-.214.156h-3.643l2.946,2.142a.217.217,0,0,1,.081.25l-1.125,3.467,2.952-2.142a.227.227,0,0,1,.129-.044Z" transform="translate(-474.832 -205.983)" fill="#2f3e8b"/>
                                <path id="Path-18" data-name="Path" d="M1074.583,445.726H1060.43a.223.223,0,0,1,0-.446h14.154a.223.223,0,1,1,0,.446Z" transform="translate(-492.62 -206.752)" fill="#2f3e8b" fill-rule="evenodd"/>
                                <path id="Path-19" data-name="Path" d="M1074.583,454.164H1060.43a.223.223,0,0,1,0-.446h14.154a.223.223,0,1,1,0,.446Z" transform="translate(-492.62 -210.67)" fill="#2f3e8b" fill-rule="evenodd"/>
                                <path id="Path-20" data-name="Path" d="M1074.583,462.6H1060.43a.223.223,0,0,1,0-.446h14.154a.223.223,0,1,1,0,.446Z" transform="translate(-492.62 -214.587)" fill="#2f3e8b" fill-rule="evenodd"/>
                                <path id="Path-21" data-name="Path" d="M662.27,402.922V729.887H152.211" transform="translate(-71.055 -187.086)" fill="none" fill-rule="evenodd"/>
                                <rect id="Rectangle-5" data-name="Rectangle" width="510.06" height="13.098" transform="translate(81.156 215.836)" fill="#2f3e8b"/>
                                <ellipse id="Oval" cx="3.066" cy="3.066" rx="3.066" ry="3.066" transform="translate(88.314 219.321)" fill="#fdb714"/>
                                <ellipse id="Oval-2" data-name="Oval" cx="3.066" cy="3.066" rx="3.066" ry="3.066" transform="translate(96.735 219.321)" fill="#467abd"/>
                                <path id="Path-22" data-name="Path" d="M203.141,412.493a3.066,3.066,0,1,1-.9-2.169A3.071,3.071,0,0,1,203.141,412.493Z" transform="translate(-91.85 -190.106)" fill="#c955a0" fill-rule="evenodd"/>
                                <rect id="Rectangle-6" data-name="Rectangle" width="176.325" height="19.934" transform="translate(375.607 503.527)" fill="#8fadcd"/>
                                <rect id="Rectangle-7" data-name="Rectangle" width="152.558" height="7.885" transform="translate(121.773 356.606)" fill="#2f3e8b"/>
                                <rect id="Rectangle-8" data-name="Rectangle" width="112.146" height="7.885" transform="translate(121.773 368.231)" fill="#2f3e8b"/>
                                <rect id="Rectangle-9" data-name="Rectangle" width="45.432" height="7.885" transform="translate(393.069 284.96)" fill="#8fadcd"/>
                                <rect id="Rectangle-10" data-name="Rectangle" width="45.432" height="7.885" transform="translate(449.787 284.96)" fill="#8fadcd"/>
                                <rect id="Rectangle-11" data-name="Rectangle" width="430.641" height="0.536" transform="translate(120.868 326.471)" fill="#2f3e8b"/>
                                <g id="Group" transform="translate(120.868 503.527)" opacity="0.49">
                                    <g id="Rectangle-12" data-name="Rectangle" transform="translate(0.446 0.446)" opacity="0.2">
                                        <rect id="Rectangle_4797" data-name="Rectangle 4797" width="71.328" height="19.934" rx="5.95" fill="#010101"/>
                                    </g>
                                    <rect id="Rectangle-13" data-name="Rectangle" width="71.328" height="19.934" rx="5.95" transform="translate(0 0)" fill="#fdb714"/>
                                </g>
                                <g id="Group-2" data-name="Group" transform="translate(203.455 503.973)" opacity="0.2">
                                    <rect id="Rectangle-14" data-name="Rectangle" width="71.328" height="19.934" rx="5.95" transform="translate(0 0)" fill="#010101"/>
                                </g>
                                <rect id="Rectangle-15" data-name="Rectangle" width="71.328" height="19.934" rx="5.95" transform="translate(203.008 503.527)" fill="#1f2055"/>
                                <rect id="Rectangle-16" data-name="Rectangle" width="90.753" height="65.349" transform="translate(121.078 407.364)" fill="#f5632c"/>
                                <rect id="Rectangle-17" data-name="Rectangle" width="90.592" height="9.746" transform="translate(121.158 407.364)" fill="#2f3e8b"/>
                                <path id="Shape-4" data-name="Shape" d="M311.49,810.612a.928.928,0,0,1,.928.928v11.7a.928.928,0,0,1-.928.928h-4.909v9.113c0,.035,0,.054-.049.054h-.054l-7.675-8.769-.331-.384h-13.61a.933.933,0,0,1-.942-.942v-11.7a.933.933,0,0,1,.933-.928H311.49Zm-.009-1.12H284.863a2.043,2.043,0,0,0-2.048,2.049v11.7a2.048,2.048,0,0,0,2.048,2.049h13.089l7.671,8.769a1.145,1.145,0,0,0,.892.406,1.178,1.178,0,0,0,1.187-1.182v-7.992h3.8a2.049,2.049,0,0,0,2.049-2.049v-11.7a2.044,2.044,0,0,0-2.049-2.049Z" transform="translate(-131.692 -375.849)" fill="#1f2055"/>
                                <ellipse id="Oval-3" data-name="Oval" cx="8.813" cy="8.814" rx="8.813" ry="8.814" transform="translate(174.065 423.875)" fill="#1f2055"/>
                                <text id="_2" data-name="2" transform="translate(180.258 436)" fill="#f0f3bf" font-size="9" font-family="ArialMT, Arial"><tspan x="0" y="0">2</tspan></text>
                                <rect id="Rectangle-18" data-name="Rectangle" width="69.561" height="50.092" transform="translate(122.488 270.283)" fill="#c9e2f4"/>
                                <rect id="Rectangle-19" data-name="Rectangle" width="69.441" height="7.47" transform="translate(122.545 270.283)" fill="#2f3e8b"/>
                                <path id="Shape-5" data-name="Shape" d="M289.71,532.456a4.422,4.422,0,1,1-4.422,4.422A4.422,4.422,0,0,1,289.71,532.456Zm0-.857a5.267,5.267,0,1,0,3.734,1.54,5.278,5.278,0,0,0-3.734-1.54Z" transform="translate(-132.442 -246.827)" fill="#1f2055"/>
                                <path id="Shape-6" data-name="Shape" d="M286.9,555.293a7.765,7.765,0,0,1,7.765,7.76v.544h-17.06v-.544a7.77,7.77,0,0,1,7.76-7.76Zm0-.857h-1.544a8.622,8.622,0,0,0-8.617,8.617v1.384h18.774v-1.384A8.617,8.617,0,0,0,286.9,554.436Z" transform="translate(-128.872 -257.431)" fill="#1f2055"/>
                                <path id="Path-23" data-name="Path" d="M795.766,11.412l5.052,125.308" transform="translate(-369.844 -5.316)" fill="none" stroke="#bec7d2" stroke-linecap="round" stroke-width="2" fill-rule="evenodd"/>
                                <path id="Shape-7" data-name="Shape" d="M804.449,264.846a2.093,2.093,0,0,0-1.932,2.231,5.632,5.632,0,0,1-4.391,5.726,5.813,5.813,0,0,1-2.012.076,4.91,4.91,0,0,1-1.852-.584,5.651,5.651,0,0,1-2.615-2.905,5.337,5.337,0,0,1-.111-3.976c2.731-6.1,8.479-10.143,8.26-16.123a10.947,10.947,0,1,0-7.5.143c-.214,4.208-4.949,8.171-6.778,13.9a11.561,11.561,0,0,0,.589,8.176,11.336,11.336,0,0,0,5.52,5.618,11.01,11.01,0,0,0,7.515.638,10.383,10.383,0,0,0,5.877-4.181,9.989,9.989,0,0,0,1.691-6.694l-.022-.205A2.1,2.1,0,0,0,804.449,264.846Zm-8.787-30.256a4.516,4.516,0,0,1,2.923,8.1,3.779,3.779,0,0,0-5.189.2,4.512,4.512,0,0,1,2.267-8.3Z" transform="translate(-364.801 -105.935)" fill="#bec7d2"/>
                                <g id="Group-3" data-name="Group" transform="translate(291.007 240.594)" opacity="0.2">
                                    <path id="Rectangle-20" data-name="Rectangle" d="M0,0H279.9V165.119H0Z" transform="matrix(0.984, -0.176, 0.176, 0.984, 0, 49.27)" fill="#010101" fill-rule="evenodd"/>
                                    <path id="Shape-8" data-name="Shape" d="M274.922,2.221l28.426,159.032L31.334,209.867,2.912,50.84ZM276.368.15.833,49.394,29.888,211.938l275.526-49.244L276.364.15Z" transform="translate(-0.827 -0.15)" fill="#010101"/>
                                </g>
                                <path id="Rectangle-21" data-name="Rectangle" d="M0,0H279.895V165.119H0Z" transform="matrix(0.984, -0.176, 0.176, 0.984, 286.546, 282.275)" fill="#f6f6f6" fill-rule="evenodd"/>
                                <path id="Shape-9" data-name="Shape" d="M809.7,437.047l28.425,159.032L566.11,644.693,537.688,485.666Zm1.441-2.07L535.609,484.22l29.055,162.544,275.524-49.245L811.141,434.976Z" transform="translate(-249.059 -201.968)" fill="#1f2055"/>
                                <path id="Path-24" data-name="Path" d="M559.692,520.483l-10.831,42.894,13.633-43.394" transform="translate(-255.211 -241.435)" fill="none" stroke="#bec7d2" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd"/>
                                <path id="Path-25" data-name="Path" d="M997.45,442.507l34.347,38.061-37.181-38.338" transform="translate(-462.166 -205.337)" fill="none" stroke="#bec7d2" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd"/>
                                <path id="Path-26" data-name="Path" d="M799.458,381.37l-95.5-68.018a5.649,5.649,0,0,0-9.108.2L574.309,423.023" transform="translate(-267.026 -144.475)" fill="none" stroke="#bec7d2" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd"/>
                                <path id="Path-27" data-name="Path" d="M541.464.033,303.231,352.753" transform="translate(-141.17 -0.033)" fill="none" stroke="#bec7d2" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd"/>
                                <path id="Path-28" data-name="Path" d="M741.972,511.443l132.709-23.392a10.417,10.417,0,0,1,12.047,8.376l14.855,84.3a10.472,10.472,0,0,1-8.432,12.049l-132.71,23.392a10.424,10.424,0,0,1-11.986-8.452l-14.855-84.3a10.362,10.362,0,0,1,8.385-11.973Z" transform="translate(-340.91 -226.536)" fill="#231f20" fill-rule="evenodd" opacity="0.13"/>
                                <path id="Path-29" data-name="Path" d="M730.189,504.67,862.9,481.278a10.417,10.417,0,0,1,12.047,8.376l14.855,84.3a10.469,10.469,0,0,1-8.437,12.049L748.641,609.384a10.419,10.419,0,0,1-11.964-8.443l-14.855-84.3a10.361,10.361,0,0,1,8.385-11.973Z" transform="translate(-335.442 -223.392)" fill="#f5632c" fill-rule="evenodd"/>
                                <path id="Rectangle-22" data-name="Rectangle" d="M0,0H37.338V5.944H0Z" transform="translate(317.886 339.58) rotate(-9.99)" fill="#8fadcd" fill-rule="evenodd"/>
                                <path id="Rectangle-23" data-name="Rectangle" d="M0,0H26.23V5.944H0Z" transform="translate(320.008 351.607) rotate(-9.99)" fill="#8fadcd" fill-rule="evenodd"/>
                                <path id="Rectangle-24" data-name="Rectangle" d="M0,0H48.194V5.944H0Z" transform="translate(322.122 363.628) rotate(-9.99)" fill="#8fadcd" fill-rule="evenodd"/>
                                <path id="Rectangle-25" data-name="Rectangle" d="M0,0H67.379V6.007H0Z" transform="translate(324.23 375.59) rotate(-9.99)" fill="#8fadcd" fill-rule="evenodd"/>
                                <path id="Rectangle-26" data-name="Rectangle" d="M0,0H39.988V8.591H0Z" transform="translate(310.332 296.7) rotate(-9.99)" fill="#1f2055" fill-rule="evenodd"/>
                                <path id="Rectangle-27" data-name="Rectangle" d="M0,0H54.33V2.713H0Z" transform="translate(312.24 307.514) rotate(-9.99)" fill="#8fadcd" fill-rule="evenodd"/>
                                <path id="Shape-10" data-name="Shape" d="M765.586,582.488l-1.432-8.145,39.52-27.368,1.535,8.715-31.4,21.219,36.8,9.323,1.535,8.715Zm53.76,23.651,6.064-76.5,6.426-1.134-6.064,76.506ZM887.1,561.068l-39.475,27.619-1.531-8.711,31.264-21.331-36.65-9.22-1.54-8.716,46.495,12.21Z" transform="translate(-355.167 -245.392)" fill="#fff"/>
                                <g id="MAN" transform="translate(9.257 348.514)">
                                    <g id="SHOES" transform="translate(0 291.638)">
                                        <path id="Path-30" data-name="Path" d="M41.185,30.359C37.254,27.235,22.6,20.188,22.6,20.188s-9.9-1.084-11.7-4.695C9.439,17.6,3.089,26.936,1.3,30.765,9.377,31.015,34.906,31.679,41.185,30.359Z" transform="translate(-0.875 -7.434)" fill="#f5632c" fill-rule="evenodd"/>
                                        <path id="Path-31" data-name="Path" d="M41.759,44.258a2.915,2.915,0,0,0-.942-1.017C34.539,44.58,9.009,43.9.932,43.647a7.177,7.177,0,0,0-.415,1.062C-.211,47.418,42.482,46.4,41.759,44.258Z" transform="translate(-0.508 -20.317)" fill="#c9e1f2" fill-rule="evenodd"/>
                                        <path id="Path-32" data-name="Path" d="M44.525,27.181l-2.9,1.566" transform="translate(-19.597 -12.86)" fill="none" stroke="#cae2f2" stroke-linecap="round" stroke-width="1" fill-rule="evenodd"/>
                                        <path id="Path-33" data-name="Path" d="M48.218,29.03l-2.887,1.531" transform="translate(-21.318 -13.719)" fill="none" stroke="#cae2f2" stroke-linecap="round" stroke-width="1" fill-rule="evenodd"/>
                                        <path id="Path-34" data-name="Path" d="M51.2,30.454l-2.691,1.789" transform="translate(-22.796 -14.38)" fill="none" stroke="#cae2f2" stroke-linecap="round" stroke-width="1" fill-rule="evenodd"/>
                                        <path id="Path-35" data-name="Path" d="M364.594,22.437C360.216,18.13,345.53,7.264,342.241,3.542A12.432,12.432,0,0,1,340.662.45L329.894,4.671c.772,4.775-.446,12.049-.924,15.619C333.977,20.906,356.115,23.543,364.594,22.437Z" transform="translate(-153.006 -0.45)" fill="#f5632c" fill-rule="evenodd"/>
                                        <path id="Path-36" data-name="Path" d="M365.648,41.186c-.031-.281-.482-.826-1.232-1.562-8.478,1.107-30.617-1.531-35.646-2.155a16.626,16.626,0,0,0-.183,1.785C328.587,41.427,365.889,43.113,365.648,41.186Z" transform="translate(-152.828 -17.637)" fill="#c9e1f2" fill-rule="evenodd"/>
                                        <path id="Path-37" data-name="Path" d="M359.06,13.228l-2.651,2.338" transform="translate(-165.745 -6.382)" fill="none" stroke="#cae2f2" stroke-linecap="round" stroke-width="1" fill-rule="evenodd"/>
                                        <path id="Path-38" data-name="Path" d="M362.222,15.835l-2.606,2.521" transform="translate(-167.234 -7.593)" fill="none" stroke="#cae2f2" stroke-linecap="round" stroke-width="1" fill-rule="evenodd"/>
                                        <path id="Path-39" data-name="Path" d="M365.8,18.784l-2.624,2.2" transform="translate(-168.889 -8.962)" fill="none" stroke="#cae2f2" stroke-linecap="round" stroke-width="1" fill-rule="evenodd"/>
                                    </g>
                                    <g id="PANTS" transform="translate(10.036 161.126)">
                                        <path id="Path-40" data-name="Path" d="M317.287,230.658a1.793,1.793,0,0,1-.683.491l-10.045,4.257a1.785,1.785,0,0,1-.446.116c.969,1.7,1.656,2.928,1.982,3.521a8.784,8.784,0,0,1,.924,2.816l10.791-4.208C319.068,235.879,318.224,233.491,317.287,230.658Z" transform="translate(-142.167 -107.126)" fill="#f37878" fill-rule="evenodd"/>
                                        <path id="Path-41" data-name="Path" d="M295.8,221.733c-1.267-2.191-2.678-4.623-4.2-7.2C293.941,218.908,295.8,221.733,295.8,221.733Z" transform="translate(-135.43 -99.638)" fill="none" fill-rule="evenodd"/>
                                        <path id="Path-42" data-name="Path" d="M189.722,122.211l-.642-4.619a1.786,1.786,0,0,0-2.164-1.5c-5.975-19.336-13.932-48.409-17.359-55.585-5.02-10.59-44.736-53.671-48.364-57.763a12.407,12.407,0,0,1-1.5-2.678S97.849,14.445,89.906,35.3,66.652,38.016,68.651,56.112,79.317,85.622,71.614,95.2s-42.393,33.371-41.1,42.207l2.936,2.084a1.37,1.37,0,0,0,1.41.1l2.553-1.294a1.339,1.339,0,0,0,.745-1.191c16.618-8.479,44.781-23.013,49.815-27.038,7.22-5.779,19.733-54.153,19.733-54.153L111.558,41s25.994,25.146,34.9,24.482,12.758,18.1,16.368,31.238a92.442,92.442,0,0,0,7.537,18.229c1.517,2.579,2.932,5.012,4.2,7.2a1.785,1.785,0,0,0-.326,2.383l2.2,3.182a1.821,1.821,0,0,0,2.164.625l10.036-4.253a1.835,1.835,0,0,0,1.089-1.879Z" transform="translate(-14.196 -0.067)" fill="#46389c" fill-rule="evenodd"/>
                                        <path id="Path-43" data-name="Path" d="M64.941,95.233c7.7-9.577-.964-20.974-2.963-39.088s13.312.045,21.255-20.813S113.015.1,113.015.1C99.842,7.311,79.444,23.4,75.834,30.976s-17.689,13-17.689,13c.179,2.709.357,43.322.179,49.82-.125,4.462-23.129,22.727-38.15,34.567l-.071-.049a1.379,1.379,0,0,0-1.785.147l-1.812,1.816a1.388,1.388,0,0,0,.174,2.1l7.14,5.065C22.552,128.6,57.239,104.8,64.941,95.233Z" transform="translate(-7.522 -0.082)" fill="#1f2055" fill-rule="evenodd"/>
                                        <path id="Path-44" data-name="Path" d="M237.305,150.443a92.442,92.442,0,0,1-7.537-18.229c-3.61-13.12-7.462-31.894-16.368-31.238s-34.9-24.482-34.9-24.482L174.652,91.4s29.845,15.646,36.637,20.215C215.68,114.591,228.25,135.03,237.305,150.443Z" transform="translate(-81.132 -35.55)" fill="#1f2055" fill-rule="evenodd"/>
                                        <path id="Path-45" data-name="Path" d="M16.4,251.347l-7.14-5.065a1.378,1.378,0,0,1-.544-.839c-4.846,3.825-8.229,6.529-8.635,7.118,1.785,3.61,11.7,4.695,11.7,4.695C5.068,256.265,16.4,251.347,16.4,251.347Z" transform="translate(-0.083 -113.99)" fill="#f15859" fill-rule="evenodd"/>
                                        <path id="Path-46" data-name="Path" d="M27.632,258.548,24.7,256.464s-11.335,4.909-4.628,5.908c0,0,2.954-1.477,7.586-3.82Z" transform="translate(-8.377 -119.107)" fill="#f37878" fill-rule="evenodd"/>
                                        <path id="Path-47" data-name="Path" d="M37.184,159.207s46.691-28.292,47.65-39.485,6.917-53.01.21-60.021" transform="translate(-17.309 -27.754)" fill="none" stroke="#cae2f2" stroke-linecap="round" stroke-width="1" fill-rule="evenodd"/>
                                        <path id="Path-48" data-name="Path" d="M312.261,217.788l-9.688,4.695" transform="translate(-140.523 -101.15)" fill="none" stroke="#cae2f2" stroke-linecap="round" stroke-width="1" fill-rule="evenodd"/>
                                        <path id="Path-49" data-name="Path" d="M27,241.936l8.345,6.44" transform="translate(-12.579 -112.362)" fill="none" stroke="#cae2f2" stroke-linecap="round" stroke-width="1" fill-rule="evenodd"/>
                                    </g>
                                    <g id="BODY" transform="translate(31.772 54.855)">
                                        <path id="Path-50" data-name="Path" d="M13.418,171.742c-2.785-7.658-5.355-15.142-7.185-21.536C6.234,150.206,5.533,172.443,13.418,171.742Z" transform="translate(-3.247 -70.157)" fill="none" fill-rule="evenodd"/>
                                        <path id="Path-51" data-name="Path" d="M87.014,107.072C82.15,96.5,71.641,60.5,73.359,45.676c.589-5.1,4.632-14.026,9.952-23.942C83.4,5.884,72.908.783,72.908.783,62.363,10.1,39.043,29.647,39.043,29.647S36,31.927,31.688,35.381a28.253,28.253,0,0,1,5.047,5.069S10.3,62.317,6.239,80.832c1.847,6.395,4.4,13.879,7.185,21.536l6.618-7.921s7.653,37.146,38.484,33.375A163.223,163.223,0,0,1,87.01,107.072Z" transform="translate(-3.257 -0.783)" fill="#fff" fill-rule="evenodd"/>
                                        <path id="Path-52" data-name="Path" d="M26.276,175.621l-6.618,7.921c8.278,22.759,18.613,47.053,18.716,48.579,0,0,14.079-5.417,17.689-13,1.241-2.606,4.462-6.216,8.7-10.126C33.929,212.767,26.276,175.621,26.276,175.621Z" transform="translate(-9.487 -81.957)" fill="#c9e2f4" fill-rule="evenodd"/>
                                        <path id="Path-53" data-name="Path" d="M1.039,93.386c-1.031,2.548.192,9.055,2.619,17.431,4.061-18.493,30.5-40.381,30.5-40.381a28.251,28.251,0,0,0-5.047-5.069C19.594,72.988,3.882,86.3,1.039,93.386Z" transform="translate(-0.672 -30.767)" fill="#c9e2f4" fill-rule="evenodd"/>
                                    </g>
                                    <g id="HEAD" transform="translate(36.566 14.491)">
                                        <path id="Path-54" data-name="Path" d="M45.153,84.466C46.492,85.8,50.026,85.6,50.026,85.6c13.445-3.2,6.725-31.858,6.725-31.858s-3.972,5.908-10.924,6.631-1.714,5.868-7.14,7.854c0,0-4.155-5.868-7.765-1.174s4.244,6.859,4.244,6.859S34.983,92.5,37.514,95.024c2.454,2.459,5.168,9.764,5.319,10.174,5.315-.286,10.585-4.083,10.969-5.208.339-.981-1.2-6.288-2.423-10.174A26.241,26.241,0,0,1,45.153,84.466Z" transform="translate(-14.162 -25.167)" fill="#f37878" fill-rule="evenodd"/>
                                        <path id="Path-55" data-name="Path" d="M58.309,111.1a26.234,26.234,0,0,0,6.247,5.355l-1.365-4.208S59.648,112.449,58.309,111.1Z" transform="translate(-27.318 -51.798)" fill="#f15859" fill-rule="evenodd"/>
                                        <path id="Path-56" data-name="Path" d="M24.972,59.821c-.482,9.688,7.881,9.719,7.881,9.719S25,67.371,28.609,62.681s7.765,1.174,7.765,1.174c5.413-1.986.178-7.14,7.14-7.854s10.911-6.631,10.911-6.631C47.414,36.986,25.454,50.132,24.972,59.821Z" transform="translate(-11.831 -20.8)" fill="#f15859" fill-rule="evenodd"/>
                                        <path id="Path-57" data-name="Path" d="M39.276,91.388s-1.812,26.9,1.535,29.511a8.9,8.9,0,0,0,6.131,1.785c-.152-.411-2.865-7.716-5.319-10.175C39.093,109.979,39.276,91.388,39.276,91.388Z" transform="translate(-18.254 -42.648)" fill="#f15859" fill-rule="evenodd"/>
                                        <path id="Path-58" data-name="Path" d="M50.377,13.5C49.038,9.435,42.991-.672,38.381.5s-6.694,1.624-5.426,3.159.629,4.239,0,3.967-3.829-5.5-4.079-1.08c-.165,2.968-10.71,11.054-17.89,17.4,0,0-5.551,10.768.5,11.853s12.553-.852,14.53,3.472c0,0,.893,5.409,2.8,4.2s1.486-6.1,2.976-7.176,6.993-1.624,9.072-2.53a24.4,24.4,0,0,0,7.68-6.4C50.863,24.479,51.733,17.557,50.377,13.5Z" transform="translate(-4.267 -0.407)" fill-rule="evenodd"/>
                                        <path id="Path-59" data-name="Path" d="M7.674,56.185c-6.047-1.084-.5-11.853-.5-11.853-3.5,3.1-6.189,5.775-6.457,7.234C-.09,56,.994,60.045,3.792,61.959s3.07,3.7,3.07,6.408,1.892,4.239,5.413,4.15S20.99,80.1,20.99,80.1s1.7-8.925.491-10.558c0,0-6.247-2.258-7.14-6.529s3.989-5.989,7.885-3.356C20.227,55.332,13.721,57.265,7.674,56.185Z" transform="translate(-0.459 -20.801)" fill-rule="evenodd"/>
                                    </g>
                                    <g id="LEFT_HAND" transform="translate(101.423 0)">
                                        <path id="Path-60" data-name="Path" d="M11.143,75.82c12.049-22.424,30.6-49.94,30.6-49.94,6.136-1.174,7.644-4.543,8.724-5.565s3.07-9.028,3.971-11.915.21-3.1.21-3.1c.544-.446,3.793-5.868,2.169-5.239s-8.3,5.056-10.107,7.22S11.237,45.1,4.561,51.419c-.892.839-2.2,2.026-3.82,3.45C.741,54.869,11.228,59.969,11.143,75.82Z" transform="translate(-0.741 -0.014)" fill="#f37878" fill-rule="evenodd"/>
                                        <path id="Path-61" data-name="Path" d="M91.081,9.888s-7.729,4.422-7.894,5.5S78.853,25.02,81.4,24.9a31.142,31.142,0,0,1,3.851,0s-4.574,1.923-5.716.893,1.084-8.546,1.383-9.327S81.906,14.788,91.081,9.888Z" transform="translate(-37.174 -4.598)" fill="#f15859" fill-rule="evenodd"/>
                                    </g>
                                    <g id="RIGHT_ARM" transform="translate(8.965 113.188)">
                                        <path id="Path-62" data-name="Path" d="M37.272,7.162C35.362,3.02,32.992.231,30.132.575c0,0-14.133,19.283-21.469,39.864a36.647,36.647,0,0,0,10.83,9.6C23.657,30.974,36.5,8.5,37.272,7.162Z" transform="translate(-4.335 -0.546)" fill="#c9e2f4" fill-rule="evenodd"/>
                                        <path id="Path-63" data-name="Path" d="M41.281,57.66c4.431-6.493,10.857-14.883,12.049-16.065,0,0-1.932-18.488-6.658-28.716-.768,1.339-13.633,23.812-17.8,42.876A16.415,16.415,0,0,0,41.281,57.66Z" transform="translate(-13.717 -6.272)" fill="#fff" fill-rule="evenodd"/>
                                        <path id="Path-64" data-name="Path" d="M75.971,99.914a7.37,7.37,0,0,0-2.164-1.022s-.446-1.566-1.263-1.785-6.864,1.084-7.461,1.985-4.4,3.851-12.049,4.575-17.207.661-17.85-1.143c-.245-.669,1.669-3.833,4.271-7.653-4.516,1.236-8.8.085-12.428-1.892,0,0-11.433,33.023,19.064,25.593,7.448-2.316,14.9-5.458,14.9-5.458s10.264,1.022,12.633-1.339S76.279,100.334,75.971,99.914Z" transform="translate(-11.886 -43.461)" fill="#f37878" fill-rule="evenodd"/>
                                        <path id="Path-65" data-name="Path" d="M4.889,75.012A73.418,73.418,0,0,0,.829,91.75c-2.646,25.392,16.792,22.023,25.548,20.577a66.286,66.286,0,0,0,8.407-2.12C4.287,117.642,15.72,84.615,15.72,84.615A36.854,36.854,0,0,1,4.889,75.012Z" transform="translate(-0.583 -35.119)" fill="#f15859" fill-rule="evenodd"/>
                                    </g>
                                    <path id="Path-66" data-name="Path" d="M123.165,338.8V447.558" transform="translate(-57.455 -157.304)" fill="none" stroke="#bec7d2" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd"/>
                                    <path id="Path-67" data-name="Path" d="M206.5,37.852s-77.013,145.925-77.432,148.286" transform="translate(-60.193 -17.581)" fill="none" stroke="#bec7d2" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd"/>
                                </g>
                                <g id="LADY" transform="translate(375.969 293.832)">
                                    <g id="PANTS-2" transform="translate(101.893 173.428)">
                                        <path id="Path-68" data-name="Path" d="M130.526,136.279l-1.923-2.936a1.339,1.339,0,0,0-1.7-.446c-9.675-12.544-21.26-32.255-24.312-38.275-4.333-8.537-2.557-56.353,1.655-70.432,1.191-3.99,1.428-13.1,1.147-24.1,0,.643-19.733,5.168-32.728,7.68,0,0,12.718,6.6,8.385,22.121s-15.5,30.841-14.8,50.338a154.678,154.678,0,0,0,14.619,31.947c6.248,10.148,24.262,23,36.731,31.613a1.339,1.339,0,0,0,.531,1.829l3.289,1.731a1.338,1.338,0,0,0,1.294-.036,1.371,1.371,0,0,0,.357-.308l7.377-9.166a1.4,1.4,0,0,0,.205-.362A1.339,1.339,0,0,0,130.526,136.279Z" transform="translate(-31.064 -0.092)" fill="#1f2055" fill-rule="evenodd"/>
                                        <path id="Path-69" data-name="Path" d="M42.224,13.929c-1.6.308-3.088.585-4.431.821C25.516,16.919,6.738,13.411,6.738,13.411,4.926,24.121,1.017,41.735.607,70.344.2,98.856,11.035,145.489,17.037,168.967a2.079,2.079,0,0,0-1.4,2.749l1.3,3.392a2.075,2.075,0,0,0,2.048,1.339.653.653,0,0,0,.129,0L34.7,174.692a2.054,2.054,0,0,0,.616-.174,2.084,2.084,0,0,0,1.223-2.12l-.522-4.726a2.089,2.089,0,0,0-1.611-1.785c-2.138-29.1,1.4-79.433,1.4-79.433-.723-19.5,10.469-34.839,14.8-50.365S42.224,13.929,42.224,13.929Z" transform="translate(-0.595 -6.276)" fill="#46389c" fill-rule="evenodd"/>
                                        <path id="Path-70" data-name="Path" d="M163.148,259.178l8.122-9.595" transform="translate(-76.065 -115.925)" fill="none" stroke="#0e142d" stroke-linecap="round" stroke-width="1" fill-rule="evenodd"/>
                                        <path id="Path-71" data-name="Path" d="M130.065,172.521s-29.363-24.99-33.513-36.7S85.989,77.469,85.989,77.469" transform="translate(-40.242 -36.016)" fill="none" stroke="#0e142d" stroke-linecap="round" stroke-width="1" fill-rule="evenodd"/>
                                        <path id="Path-72" data-name="Path" d="M33.428,302.268l14.53-2.646" transform="translate(-15.839 -139.157)" fill="none" stroke="#cae2f2" stroke-linecap="round" stroke-width="1" fill-rule="evenodd"/>
                                        <path id="Path-73" data-name="Path" d="M36.7,166.7s-8.479-57.567-9.206-71.12,8.479-78.358,8.479-78.358" transform="translate(-13.065 -8.047)" fill="none" stroke="#cae2f2" stroke-linecap="round" stroke-width="1" fill-rule="evenodd"/>
                                    </g>
                                    <g id="BODY-2" transform="translate(23.759 21.335)">
                                        <path id="Path-74" data-name="Path" d="M179.75,47.518c2.8-8.233,4.949-29.787,5.458-42.72,0,0-8.827,16.8-10.514,29.582s-34.218,19.189-34.218,19.189a140.79,140.79,0,0,1-20.925,6.122A147.537,147.537,0,0,0,97.239,70.665c6.591,4.953,7.34,16.065-4.347,20.555C77.274,97.24,55.8,113.845,47.625,120.008s-46.151,2.86-46.151,2.86,14.619,3.432,39.89,2.678,40.983-13.887,40.983-13.887,19.666,16.851,17.5,30.792,10.429,20.256,20.857,19.635c12.995-2.513,32.746-7.037,32.728-7.68-.7-27.85-4.668-67.831-4.668-67.831S175.9,58.831,179.75,47.518Z" transform="translate(-0.962 -2.357)" fill="#c9e2f4" fill-rule="evenodd"/>
                                        <path id="Path-75" data-name="Path" d="M169.929,235.093c2.164-13.959-17.5-30.792-17.5-30.792s3.6,32.675,3.784,41.5a49.925,49.925,0,0,1-.893,8.39s18.778,3.525,31.055,1.339c1.339-.237,2.833-.513,4.431-.821C180.358,255.348,167.765,249.052,169.929,235.093Z" transform="translate(-71.047 -94.982)" fill="#fff" fill-rule="evenodd"/>
                                        <path id="Path-76" data-name="Path" d="M295.159,32.265c1.686-12.781,10.514-29.582,10.514-29.582-2-2.231-7.207-2.441-7.207-2.441S292.508,21.086,283.847,35.9c-4.016,6.841-13.669,11.982-22.906,15.539C260.941,51.431,293.476,45.046,295.159,32.265Z" transform="translate(-121.427 -0.242)" fill="#fff" fill-rule="evenodd"/>
                                        <path id="Path-77" data-name="Path" d="M47.177,177.058c8.18-6.163,29.649-22.759,45.267-28.788,11.687-4.5,10.938-15.619,4.346-20.555C75.433,140.148,53.344,157.168,47.6,161.867c-7.854,6.408-46.12,11.825-46.8,11.959a12.233,12.233,0,0,0,.228,6.092S38.993,183.22,47.177,177.058Z" transform="translate(-0.518 -59.425)" fill="#fff" fill-rule="evenodd"/>
                                    </g>
                                    <g id="HEAD-2" transform="translate(105.151 43.813)">
                                        <path id="Path-78" data-name="Path" d="M25.369,18.75S9.483,49.988,30.782,47.631,35.655,14.6,25.369,18.75Z" transform="translate(-9.141 -8.821)" fill="#f37878" fill-rule="evenodd"/>
                                        <path id="Path-79" data-name="Path" d="M76.555,99.408c.089-12.995-25.356-16-7.189-34.9s-12.754-28.4-20.081-30.926S43.863,22.18,43.863,22.18a9.278,9.278,0,0,1,.727-2.856C49.285,7.953,43.149.55,30.31.55S11.15,1.7,9.95,9.1s10.614,7.51,9.98,14.28S-1.73,49.74,5.039,52.088,2.683,65.083.452,75.1A15.591,15.591,0,0,0,.18,81.058s2.526,10.831,18.952,4.333S39.168,81.058,34.3,91.345s56.08-6.359,35.807,18.207C74.774,105.62,76.457,102.323,76.555,99.408Z" transform="translate(-0.012 -0.55)" fill-rule="evenodd"/>
                                        <path id="Path-80" data-name="Path" d="M87.071,52.328c7.341,2.526,38.266,12.049,20.081,30.926s7.278,21.9,7.189,34.9c.254-7.287-9.371-12.191-6.694-18.712,3.972-9.746,29.966-29.783,9.028-39.716C97.651,50.7,81.011,49.579,81.649,40.917,81.649,40.917,79.753,49.788,87.071,52.328Z" transform="translate(-37.812 -19.291)" fill-rule="evenodd"/>
                                        <path id="Path-81" data-name="Path" d="M34.424,161.117c4.873-10.264,1.263-12.455-15.172-5.953S.3,150.831.3,150.831c1.026,6.283,6.515,9.746,12.995,9.746,8.3,0,5.145,5.868,3.882,11.371s6.948,9.751,12.183,7.14,15.253-6.587,9.746,1.263-9.112,7.671-9.112,7.671,13.267,10.108,36.369-5.775c1.468-1.008,2.749-1.981,3.86-2.914C90.5,154.758,29.551,171.408,34.424,161.117Z" transform="translate(-0.146 -70.322)" fill-rule="evenodd"/>
                                    </g>
                                    <g id="HAND" transform="translate(0 0)">
                                        <path id="Path-82" data-name="Path" d="M375.108,24.176c.192-4.837.156-8.479-.165-9.746C373.77,9.735,364.091.4,364.091.4L366.1,11.668s-3.163-1.209-5.1-.937-1.58,1.084-.893,1.58,6.979,4.833,6.979,4.833l.816,4.587S373.1,21.945,375.108,24.176Z" transform="translate(-167.104 -0.4)" fill="#f37878" fill-rule="evenodd"/>
                                        <path id="Path-83" data-name="Path" d="M370.033,11.668l1.75-7.381S368.837,1.078,368.021.4Z" transform="translate(-171.034 -0.4)" fill="#f15859" fill-rule="evenodd"/>
                                        <path id="Path-84" data-name="Path" d="M24.583,258.282a12.233,12.233,0,0,1-.228-6.092c-.674.138-7.082-.495-7.894-.584s-7.943-2.231-6.9-.678S14.2,254,14.2,254L.317,256.631C4.752,258.452,24.583,258.282,24.583,258.282Z" transform="translate(-0.317 -116.453)" fill="#f37878" fill-rule="evenodd"/>
                                        <path id="Path-85" data-name="Path" d="M24.583,263.713s-19.831.169-24.267-1.651A74.757,74.757,0,0,0,8.88,265.7C12.129,266.69,24.583,263.713,24.583,263.713Z" transform="translate(-0.317 -121.884)" fill="#f15859" fill-rule="evenodd"/>
                                    </g>
                                    <g id="FEET" transform="translate(120.263 310.825)">
                                        <path id="Path-86" data-name="Path" d="M.862,59.471a.638.638,0,0,1-.129,0c.951,3.57,1.611,5.949,1.839,6.734a2.129,2.129,0,0,1,0,1.084l15.886-2.231c-.281-1.433-.58-2.963-.892-4.614-.174-.893-.335-1.874-.486-2.892a2.039,2.039,0,0,1-.616.174Z" transform="translate(-0.733 -26.72)" fill="#f37878" fill-rule="evenodd"/>
                                        <path id="Path-87" data-name="Path" d="M145.464,0a1.385,1.385,0,0,1-.205.361l-7.376,9.166a1.377,1.377,0,0,1-.357.308c4.36,3.008,7.3,5.105,7.555,5.8l7.02-9.751C150.32,5.034,148.026,2.914,145.464,0Z" transform="translate(-64.243)" fill="#f15859" fill-rule="evenodd"/>
                                    </g>
                                    <g id="SHOES-2" transform="translate(101.88 316.68)">
                                        <path id="Path-88" data-name="Path" d="M40.911,77.84c-.205-2.325-1.245-7.14-3.217-17.123L21.807,62.949C20.7,67.567,6.916,75.368,2.766,78.786,9.316,78.916,30.468,79.179,40.911,77.84Z" transform="translate(-1.589 -28.243)" fill="#2f3e8b" fill-rule="evenodd"/>
                                        <path id="Path-89" data-name="Path" d="M.572,94.951c-.361,2.165,35.021.179,37.726,0,1.232-.085,1.785-.054,1.593-2.271-10.442,1.339-31.6,1.075-38.145.959C1.05,94.21.621,94.661.572,94.951Z" transform="translate(-0.57 -43.083)" fill="#c9e1f2" fill-rule="evenodd"/>
                                        <path id="Path-90" data-name="Path" d="M32.37,72.829l3.213,1.865" transform="translate(-15.334 -33.867)" fill="none" stroke="#cae2f2" stroke-linecap="round" stroke-width="1" fill-rule="evenodd"/>
                                        <path id="Path-91" data-name="Path" d="M28.979,75.745l2.624,1.6" transform="translate(-13.76 -35.22)" fill="none" stroke="#cae2f2" stroke-linecap="round" stroke-width="1" fill-rule="evenodd"/>
                                        <path id="Path-92" data-name="Path" d="M25.348,78.56l3.258,1.74" transform="translate(-12.074 -36.527)" fill="none" stroke="#cae2f2" stroke-linecap="round" stroke-width="1" fill-rule="evenodd"/>
                                        <path id="Path-93" data-name="Path" d="M192.046.1l-7.033,9.764c.861,2.263-2.133,24.477-.183,29.114,3.378-4.266,18.47-23.589,22.107-32.425C204.952,4.451,199.008,3.313,192.046.1Z" transform="translate(-85.806 -0.1)" fill="#1f2055" fill-rule="evenodd"/>
                                        <path id="Path-94" data-name="Path" d="M186.345,45.393c3.61,0,21.42-27.668,21.9-31.287a2.294,2.294,0,0,0-.7-1.986c-3.637,8.836-18.742,28.159-22.107,32.425C185.671,45.089,185.966,45.393,186.345,45.393Z" transform="translate(-86.401 -5.681)" fill="#c9e1f2" fill-rule="evenodd"/>
                                        <path id="Path-95" data-name="Path" d="M185.83,28.263l3.222-.308" transform="translate(-86.582 -13.033)" fill="none" stroke="#cae2f2" stroke-linecap="round" stroke-width="1" fill-rule="evenodd"/>
                                        <path id="Path-96" data-name="Path" d="M185.58,32.311l3.057-.424" transform="translate(-86.466 -14.858)" fill="none" stroke="#cae2f2" stroke-linecap="round" stroke-width="1" fill-rule="evenodd"/>
                                        <path id="Path-97" data-name="Path" d="M185.281,36.4l3.217-.808" transform="translate(-86.327 -16.579)" fill="none" stroke="#cae2f2" stroke-linecap="round" stroke-width="1" fill-rule="evenodd"/>
                                    </g>
                                </g>
                                <g id="Group_20814" data-name="Group 20814">
                                    <g id="Group_20813" data-name="Group 20813">
                                        <path id="Path-98" data-name="Path" d="M73.845,535.768h65.1a5.047,5.047,0,0,1,5.047,5.013v41.348a5.075,5.075,0,0,1-5.047,5.047h-65.1a5.046,5.046,0,0,1-5.007-5.047V540.781A5.047,5.047,0,0,1,73.845,535.768Z" transform="translate(-175.702 -386.149) rotate(-20)" fill="#231f20" fill-rule="evenodd" opacity="0.05"/>
                                        <path id="Path-99" data-name="Path" d="M62.233,524.615H130.5a5.259,5.259,0,0,1,5.232,5.265v43.338a5.26,5.26,0,0,1-5.232,5.265H62.233a5.26,5.26,0,0,1-5.265-5.265V529.88a5.259,5.259,0,0,1,5.265-5.265Z" transform="translate(-170.809 -384.051) rotate(-20)" fill="#ffd201" fill-rule="evenodd"/>
                                        <path id="Shape-11" data-name="Shape" d="M84.123,556.836v-5.411a5.61,5.61,0,0,0,2.282-.483,3.56,3.56,0,0,0,1.323-1.362,6.692,6.692,0,0,0,.774-2.389,27.863,27.863,0,0,0,.185-3.757,32.38,32.38,0,0,1,.37-6.078,6,6,0,0,1,1.323-2.8,6.725,6.725,0,0,1,2.837-1.621,13.43,13.43,0,0,1,3.975-.4h1.121v5.378a8.32,8.32,0,0,0-2.944.291,1.912,1.912,0,0,0-1,.847A4.875,4.875,0,0,0,94.082,541c0,.958-.073,2.725-.185,5.377a14.693,14.693,0,0,1-.516,3.611,7.8,7.8,0,0,1-1.121,2.282,9.406,9.406,0,0,1-2.063,1.839,7.208,7.208,0,0,1,1.991,1.806,7.744,7.744,0,0,1,1.217,2.467,19.683,19.683,0,0,1,.516,3.925c.107,2.467.146,4.087.146,4.749a4.764,4.764,0,0,0,.331,2.1,2.337,2.337,0,0,0,.992.886,9.523,9.523,0,0,0,2.91.291V575.7H97.177a14.381,14.381,0,0,1-4.272-.477,5.561,5.561,0,0,1-2.5-1.62,5.823,5.823,0,0,1-1.4-2.765,29.585,29.585,0,0,1-.331-5.226,26.473,26.473,0,0,0-.331-5.344,4.866,4.866,0,0,0-1.4-2.573,4.683,4.683,0,0,0-2.832-.886Zm42.16,0a5.875,5.875,0,0,0-2.282.476,3.419,3.419,0,0,0-1.329,1.363,7,7,0,0,0-.774,2.394,29.893,29.893,0,0,0-.145,3.723,36.119,36.119,0,0,1-.37,6.112,6.045,6.045,0,0,1-1.323,2.759,6.749,6.749,0,0,1-2.871,1.682,14.689,14.689,0,0,1-3.975.4h-1.121v-5.377a9.3,9.3,0,0,0,2.9-.292,2.238,2.238,0,0,0,1.032-.886,4.174,4.174,0,0,0,.331-1.952c0-.919.039-2.652.151-5.231a15.143,15.143,0,0,1,.561-3.751,8.05,8.05,0,0,1,1.216-2.394,7.461,7.461,0,0,1,1.951-1.733,8.4,8.4,0,0,1-2.243-2.1,9.029,9.029,0,0,1-1.323-3.8,68.356,68.356,0,0,1-.3-6.886,6.944,6.944,0,0,0-.292-2.282,1.937,1.937,0,0,0-.919-.847,10.175,10.175,0,0,0-3.055-.292v-5.378h1.121a14.451,14.451,0,0,1,4.306.477,5.768,5.768,0,0,1,2.5,1.587,6.381,6.381,0,0,1,1.362,2.8,27.935,27.935,0,0,1,.37,5.192,30.965,30.965,0,0,0,.3,5.372,4.649,4.649,0,0,0,1.4,2.579,4.794,4.794,0,0,0,2.837.886Z" transform="translate(-180.027 -383.443) rotate(-20)" fill="#fff"/>
                                    </g>
                                </g>
                                <rect id="Rectangle-28" data-name="Rectangle" width="198.473" height="116.731" transform="translate(230.39 484.182)" fill="#231f20" opacity="0.13"/>
                                <rect id="Rectangle-29" data-name="Rectangle" width="198.473" height="15.213" transform="translate(225.637 478.894)" fill="#2f3e8b"/>
                                <rect id="Rectangle-30" data-name="Rectangle" width="198.473" height="101.518" transform="translate(225.637 494.111)" fill="#fff"/>
                                <path id="Path-100" data-name="Path" d="M722.2,902.244a4.342,4.342,0,1,1-.429,3.3A4.328,4.328,0,0,1,722.2,902.244Z" transform="translate(-335.421 -417.906)" fill="#fff" fill-rule="evenodd"/>
                                <path id="Path-101" data-name="Path" d="M764.624,902.243a4.337,4.337,0,1,1-.432,3.3A4.325,4.325,0,0,1,764.624,902.243Z" transform="translate(-355.115 -417.904)" fill="#fff" fill-rule="evenodd"/>
                                <path id="Path-102" data-name="Path" d="M743.453,902.24a4.334,4.334,0,1,1,0,4.334A4.334,4.334,0,0,1,743.453,902.24Z" transform="translate(-345.288 -417.902)" fill="#fff" fill-rule="evenodd"/>
                                <path id="Path-103" data-name="Path" d="M571.773,965.53l-56.954,57.456L477.535,985.25l-50.751,51.2,0,3.691,192.895.156.022-26.266Z" transform="translate(-198.531 -448.294)" fill="#1f2055" fill-rule="evenodd"/>
                                <ellipse id="Oval-4" data-name="Oval" cx="15.994" cy="15.994" rx="15.994" ry="15.994" transform="matrix(0.595, -0.804, 0.804, 0.595, 289.883, 527.892)" fill="#fdb714"/>
                            </g>
                        </g>
                    </g>
                </g>
            </svg>


        </div>
    </div>


    <div class="flex-grow-1 per-10 ourServices d-noneM" style="margin: 100px 0;padding: 0 177px;">
        <div class="flex-grow-1 per-10 d-flex ">
            <div data-imgSlide="services3.jpg,services9.jpg" title="text1" class="eachOurServicesCard selectedItemServices">
                <svg xmlns="http://www.w3.org/2000/svg" width="98.566" height="97.3" viewBox="0 0 98.566 97.3">
                    <g id="Group_33613" data-name="Group 33613" transform="translate(-199.933 -946.713)">
                        <circle id="Ellipse_49" data-name="Ellipse 49" cx="5" cy="5" r="5" transform="translate(199.933 946.713)" fill="#ffd201"/>
                        <circle id="Ellipse_50" data-name="Ellipse 50" cx="2.704" cy="2.704" r="2.704" transform="translate(293.09 993.286)" fill="#f5632c"/>
                        <g id="Ellipse_52" data-name="Ellipse 52" transform="translate(207.615 1036.012)" fill="none" stroke="#f5632c" stroke-width="1">
                            <circle cx="4" cy="4" r="4" stroke="none"/>
                            <circle cx="4" cy="4" r="3.5" fill="none"/>
                        </g>
                        <g id="Layer_1" transform="translate(218.251 966.242)">
                            <g id="Group_20857" data-name="Group 20857" transform="translate(0 0)">
                                <path id="Path_88765" data-name="Path 88765" d="M46.248,60.5h-31A14.265,14.265,0,0,1,1,46.25v-31A14.265,14.265,0,0,1,15.25,1h31A14.265,14.265,0,0,1,60.5,15.248v31A14.265,14.265,0,0,1,46.248,60.5Zm-31-55.532A10.3,10.3,0,0,0,4.967,15.248v31A10.3,10.3,0,0,0,15.25,56.532h31A10.294,10.294,0,0,0,56.532,46.25v-31A10.3,10.3,0,0,0,46.248,4.967Z" transform="translate(-1 -1)" fill="#000"/>
                            </g>
                            <g id="Group_20858" data-name="Group 20858" transform="translate(13.219 20.026)">
                                <path id="Path_88766" data-name="Path 88766" d="M23.057,11a1.944,1.944,0,0,0-1.945,1.945v7.779c0,3.216-2.18,5.834-4.862,5.834s-4.862-2.617-4.862-5.834V12.945a1.945,1.945,0,1,0-3.889,0v7.779c0,5.361,3.926,9.723,8.751,9.723S25,26.085,25,20.723V12.945A1.944,1.944,0,0,0,23.057,11Z" transform="translate(-7.5 -11)" fill="#000"/>
                                <path id="Path_88767" data-name="Path 88767" d="M26.6,20.723l4.218-6.748a1.944,1.944,0,1,0-3.3-2.061l-3.214,5.142-3.213-5.14a1.944,1.944,0,1,0-3.3,2.061l4.216,6.746L17.8,27.471a1.944,1.944,0,1,0,3.3,2.061l3.214-5.142,3.213,5.14a1.944,1.944,0,1,0,3.3-2.061Z" transform="translate(1.947 -11)" fill="#000"/>
                            </g>
                        </g>
                    </g>
                </svg>
                <h6>UX Research<br>
                    and UX Design
                </h6>
            </div>
            <div data-imgSlide="services1.jpg,services2.jpg" title="text2" class="eachOurServicesCard">
                <svg xmlns="http://www.w3.org/2000/svg" width="98.566" height="95.3" viewBox="0 0 98.566 95.3">
                    <g id="Group_33614" data-name="Group 33614" transform="translate(-416.933 -946.713)">
                        <circle id="Ellipse_49" data-name="Ellipse 49" cx="5" cy="5" r="5" transform="translate(416.933 946.713)" fill="#ffd201"/>
                        <circle id="Ellipse_50" data-name="Ellipse 50" cx="2.704" cy="2.704" r="2.704" transform="translate(510.09 993.286)" fill="#f5632c"/>
                        <g id="Ellipse_52" data-name="Ellipse 52" transform="translate(424.615 1034.012)" fill="none" stroke="#f5632c" stroke-width="1">
                            <circle cx="4" cy="4" r="4" stroke="none"/>
                            <circle cx="4" cy="4" r="3.5" fill="none"/>
                        </g>
                        <g id="Layer_1" transform="translate(435 965.806)">
                            <g id="Group_20859" data-name="Group 20859" transform="translate(1 1)">
                                <path id="Path_88768" data-name="Path 88768" d="M45.87,60H15.131A14.146,14.146,0,0,1,1,45.871V15.129A14.146,14.146,0,0,1,15.131,1H45.871A14.145,14.145,0,0,1,60,15.129V45.871A14.146,14.146,0,0,1,45.87,60ZM15.131,4.933a10.208,10.208,0,0,0-10.2,10.2V45.871a10.208,10.208,0,0,0,10.2,10.2H45.871a10.208,10.208,0,0,0,10.2-10.2V15.129a10.208,10.208,0,0,0-10.2-10.2Z" transform="translate(-1 -1)"/>
                            </g>
                            <g id="Group_20862" data-name="Group 20862" transform="translate(18.865 20.804)">
                                <g id="Group_20860" data-name="Group 20860">
                                    <path id="Path_88769" data-name="Path 88769" d="M18.727,30.393c-4.811,0-8.727-4.35-8.727-9.7V12.939a1.939,1.939,0,1,1,3.879,0V20.7c0,3.208,2.174,5.818,4.848,5.818s4.848-2.61,4.848-5.818V12.939a1.939,1.939,0,1,1,3.879,0V20.7C27.453,26.043,23.538,30.393,18.727,30.393Z" transform="translate(-10 -11)"/>
                                </g>
                                <g id="Group_20861" data-name="Group 20861" transform="translate(19.393)">
                                    <path id="Path_88770" data-name="Path 88770" d="M21.939,30.393A1.947,1.947,0,0,1,20,28.453V12.939a1.939,1.939,0,1,1,3.879,0V28.453A1.947,1.947,0,0,1,21.939,30.393Z" transform="translate(-20 -11)"/>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
                <h6>UI and<br>
                    Web Design
                </h6>
            </div>
            <div data-imgSlide="services6.jpg,services5.png" title="text3" class="eachOurServicesCard">
                <svg xmlns="http://www.w3.org/2000/svg" width="98.566" height="95.3" viewBox="0 0 98.566 95.3">
                    <g id="Group_33615" data-name="Group 33615" transform="translate(-634.933 -946.713)">
                        <circle id="Ellipse_49" data-name="Ellipse 49" cx="5" cy="5" r="5" transform="translate(634.933 946.713)" fill="#ffd201"/>
                        <circle id="Ellipse_50" data-name="Ellipse 50" cx="2.704" cy="2.704" r="2.704" transform="translate(728.09 993.286)" fill="#f5632c"/>
                        <g id="Ellipse_52" data-name="Ellipse 52" transform="translate(642.615 1034.012)" fill="none" stroke="#f5632c" stroke-width="1">
                            <circle cx="4" cy="4" r="4" stroke="none"/>
                            <circle cx="4" cy="4" r="3.5" fill="none"/>
                        </g>
                        <g id="coding" transform="translate(653 956.703)">
                            <path id="Path_88773" data-name="Path 88773" d="M17.383,15.564a1.924,1.924,0,0,0-2.721,0l-6.6,6.6a1.924,1.924,0,0,0,0,2.721l6.6,6.6a1.924,1.924,0,1,0,2.721-2.721l-5.238-5.236,5.238-5.238A1.924,1.924,0,0,0,17.383,15.564Z" transform="translate(6.344 15.941)"/>
                            <path id="Path_88774" data-name="Path 88774" d="M22.356,15.564a1.924,1.924,0,1,0-2.721,2.721l5.238,5.238-5.238,5.236a1.924,1.924,0,1,0,2.721,2.721l6.6-6.6a1.924,1.924,0,0,0,0-2.721Z" transform="translate(17.638 15.941)"/>
                            <path id="Path_88775" data-name="Path 88775" d="M20.3,15.075a1.924,1.924,0,0,0-2.378,1.32l-3.849,13.47a1.924,1.924,0,0,0,1.32,2.378,1.88,1.88,0,0,0,.529.075,1.924,1.924,0,0,0,1.849-1.4l3.849-13.47a1.924,1.924,0,0,0-1.32-2.378Z" transform="translate(12.652 15.948)"/>
                            <g id="Layer_1" transform="translate(1 10.103)">
                                <g id="Group_20859" data-name="Group 20859" transform="translate(0 0)">
                                    <path id="Path_88768" data-name="Path 88768" d="M45.87,60H15.131A14.146,14.146,0,0,1,1,45.871V15.129A14.146,14.146,0,0,1,15.131,1H45.871A14.145,14.145,0,0,1,60,15.129V45.871A14.146,14.146,0,0,1,45.87,60ZM15.131,4.933a10.208,10.208,0,0,0-10.2,10.2V45.871a10.208,10.208,0,0,0,10.2,10.2H45.871a10.208,10.208,0,0,0,10.2-10.2V15.129a10.208,10.208,0,0,0-10.2-10.2Z" transform="translate(-1 -1)"/>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
                <h6>Front End and<br>
                    Back End Development
                </h6>
            </div>
            <div data-imgSlide="services8.jpg,services7.jpg" title="text4" class="eachOurServicesCard">
                <svg xmlns="http://www.w3.org/2000/svg" width="98.566" height="95.3" viewBox="0 0 98.566 95.3">
                    <g id="Group_33616" data-name="Group 33616" transform="translate(-852.933 -946.713)">
                        <circle id="Ellipse_49" data-name="Ellipse 49" cx="5" cy="5" r="5" transform="translate(852.933 946.713)" fill="#ffd201"/>
                        <circle id="Ellipse_50" data-name="Ellipse 50" cx="2.704" cy="2.704" r="2.704" transform="translate(946.09 993.286)" fill="#f5632c"/>
                        <g id="Ellipse_52" data-name="Ellipse 52" transform="translate(860.615 1034.012)" fill="none" stroke="#f5632c" stroke-width="1">
                            <circle cx="4" cy="4" r="4" stroke="none"/>
                            <circle cx="4" cy="4" r="3.5" fill="none"/>
                        </g>
                        <g id="Group_33608" data-name="Group 33608" transform="translate(-197 -2766.194)">
                            <g id="Layer_1" transform="translate(1069 3733)">
                                <g id="Group_20859" data-name="Group 20859" transform="translate(0 0)">
                                    <path id="Path_88768" data-name="Path 88768" d="M45.87,60H15.131A14.146,14.146,0,0,1,1,45.871V15.129A14.146,14.146,0,0,1,15.131,1H45.871A14.145,14.145,0,0,1,60,15.129V45.871A14.146,14.146,0,0,1,45.87,60ZM15.131,4.933a10.208,10.208,0,0,0-10.2,10.2V45.871a10.208,10.208,0,0,0,10.2,10.2H45.871a10.208,10.208,0,0,0,10.2-10.2V15.129a10.208,10.208,0,0,0-10.2-10.2Z" transform="translate(-1 -1)"/>
                                </g>
                            </g>
                            <path id="search_4_" data-name="search(4)" d="M25.151,23.965,21.1,19.921A10.862,10.862,0,1,0,19.921,21.1l4.044,4.052a.839.839,0,1,0,1.186-1.186ZM12.86,22.051a9.191,9.191,0,1,1,9.191-9.191,9.191,9.191,0,0,1-9.191,9.191Z" transform="translate(1084.806 3748.806)" stroke="#000" stroke-width="2"/>
                        </g>
                    </g>
                </svg>
                <h6>Search Engine Optimization (SEO)</h6>
            </div>
            <div data-imgSlide="services9.jpg,services10.jpg" title="text5" class="eachOurServicesCard">
                <svg xmlns="http://www.w3.org/2000/svg" width="98.566" height="95.3" viewBox="0 0 98.566 95.3">
                    <g id="Group_33617" data-name="Group 33617" transform="translate(-1069.933 -946.713)">
                        <circle id="Ellipse_49" data-name="Ellipse 49" cx="5" cy="5" r="5" transform="translate(1069.933 946.713)" fill="#ffd201"/>
                        <circle id="Ellipse_50" data-name="Ellipse 50" cx="2.704" cy="2.704" r="2.704" transform="translate(1163.09 993.286)" fill="#f5632c"/>
                        <g id="Ellipse_52" data-name="Ellipse 52" transform="translate(1077.615 1034.012)" fill="none" stroke="#f5632c" stroke-width="1">
                            <circle cx="4" cy="4" r="4" stroke="none"/>
                            <circle cx="4" cy="4" r="3.5" fill="none"/>
                        </g>
                        <g id="Group_33609" data-name="Group 33609" transform="translate(19.5 -2766.509)">
                            <g id="Layer_1" transform="translate(1069 3733)">
                                <g id="Group_20859" data-name="Group 20859" transform="translate(0 0)">
                                    <path id="Path_88768" data-name="Path 88768" d="M45.87,60H15.131A14.146,14.146,0,0,1,1,45.871V15.129A14.146,14.146,0,0,1,15.131,1H45.871A14.145,14.145,0,0,1,60,15.129V45.871A14.146,14.146,0,0,1,45.87,60ZM15.131,4.933a10.208,10.208,0,0,0-10.2,10.2V45.871a10.208,10.208,0,0,0,10.2,10.2H45.871a10.208,10.208,0,0,0,10.2-10.2V15.129a10.208,10.208,0,0,0-10.2-10.2Z" transform="translate(-1 -1)"/>
                                </g>
                            </g>
                            <g id="Layer_2" data-name="Layer 2" transform="translate(1088.454 3750.215)">
                                <path id="Path_88778" data-name="Path 88778" d="M17.094,13.022a6.7,6.7,0,1,0-8.095,0A10.055,10.055,0,0,0,3,22.21a3.349,3.349,0,0,0,3.349,3.349H19.744a3.349,3.349,0,0,0,3.349-3.349,10.055,10.055,0,0,0-6-9.188ZM8.581,7.7a4.465,4.465,0,1,1,4.465,4.465A4.465,4.465,0,0,1,8.581,7.7ZM19.744,23.326H6.349A1.116,1.116,0,0,1,5.232,22.21a7.814,7.814,0,1,1,15.627,0A1.116,1.116,0,0,1,19.744,23.326Z" transform="translate(-3 -0.989)" stroke="#000" stroke-width="1"/>
                            </g>
                        </g>
                    </g>
                </svg>

                <h6>Administration and<br>
                    Maintenance
                </h6>
            </div>
        </div>
        <div class="flex-grow-1 per-10 d-flex detailOurServices" style="margin-top: 40px">
            <div class="flex-grow-1 per-4">
                <div class="flex-grow-1 left">
                    <h6 id="titleDetail">UX Research and UX Design</h6>
                    <p id="paraDetail">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                    <a href="">See Projects
                        <svg xmlns="http://www.w3.org/2000/svg" width="21.174" height="18.536" viewBox="0 0 21.174 18.536">
                            <g id="Arrow_-_Right" data-name="Arrow - Right" transform="translate(-3.5 -3.934)">
                                <path id="Path_88546" data-name="Path 88546" d="M23.424,11.726H4.75" transform="translate(0 1.475)" fill="none" stroke="#ffd201" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"/>
                                <path id="Path_88547" data-name="Path 88547" d="M13.7,5.7l7.532,7.5L13.7,20.7" transform="translate(2.192 0)" fill="none" stroke="#ffd201" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"/>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="flex-grow-1 per-6">
                <div class="flex-grow-1 right">
                    <div class="owl-carousel owl-theme detailOurServicesOwl">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex-grow-1 per-10 ourServicesMobile paddingM-30 d-none">
        <h6 class="saTitle1 titleIcon2" style="text-align: left;font-weight: 500!important;">Our Services</h6>
        <div class="owl-carousel owl-theme ourServicesMobileOwl">
            <div data-imgName="services6.jpg" class="item selectedItemServices">
                <div class="eachSlideWrap">
                    <svg xmlns="http://www.w3.org/2000/svg" width="98.566" height="95.3" viewBox="0 0 98.566 95.3">
                        <g id="Group_33615" data-name="Group 33615" transform="translate(-634.933 -946.713)">
                            <circle id="Ellipse_49" data-name="Ellipse 49" cx="5" cy="5" r="5" transform="translate(634.933 946.713)" fill="#ffd201"/>
                            <circle id="Ellipse_50" data-name="Ellipse 50" cx="2.704" cy="2.704" r="2.704" transform="translate(728.09 993.286)" fill="#f5632c"/>
                            <g id="Ellipse_52" data-name="Ellipse 52" transform="translate(642.615 1034.012)" fill="none" stroke="#f5632c" stroke-width="1">
                                <circle cx="4" cy="4" r="4" stroke="none"/>
                                <circle cx="4" cy="4" r="3.5" fill="none"/>
                            </g>
                            <g id="coding" transform="translate(653 956.703)">
                                <path id="Path_88773" data-name="Path 88773" d="M17.383,15.564a1.924,1.924,0,0,0-2.721,0l-6.6,6.6a1.924,1.924,0,0,0,0,2.721l6.6,6.6a1.924,1.924,0,1,0,2.721-2.721l-5.238-5.236,5.238-5.238A1.924,1.924,0,0,0,17.383,15.564Z" transform="translate(6.344 15.941)"/>
                                <path id="Path_88774" data-name="Path 88774" d="M22.356,15.564a1.924,1.924,0,1,0-2.721,2.721l5.238,5.238-5.238,5.236a1.924,1.924,0,1,0,2.721,2.721l6.6-6.6a1.924,1.924,0,0,0,0-2.721Z" transform="translate(17.638 15.941)"/>
                                <path id="Path_88775" data-name="Path 88775" d="M20.3,15.075a1.924,1.924,0,0,0-2.378,1.32l-3.849,13.47a1.924,1.924,0,0,0,1.32,2.378,1.88,1.88,0,0,0,.529.075,1.924,1.924,0,0,0,1.849-1.4l3.849-13.47a1.924,1.924,0,0,0-1.32-2.378Z" transform="translate(12.652 15.948)"/>
                                <g id="Layer_1" transform="translate(1 10.103)">
                                    <g id="Group_20859" data-name="Group 20859" transform="translate(0 0)">
                                        <path id="Path_88768" data-name="Path 88768" d="M45.87,60H15.131A14.146,14.146,0,0,1,1,45.871V15.129A14.146,14.146,0,0,1,15.131,1H45.871A14.145,14.145,0,0,1,60,15.129V45.871A14.146,14.146,0,0,1,45.87,60ZM15.131,4.933a10.208,10.208,0,0,0-10.2,10.2V45.871a10.208,10.208,0,0,0,10.2,10.2H45.871a10.208,10.208,0,0,0,10.2-10.2V15.129a10.208,10.208,0,0,0-10.2-10.2Z" transform="translate(-1 -1)"/>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <h6>Front End and
                        Back End Development
                    </h6>
                </div>
            </div>
            <div data-imgName="services7.jpg" class="item">
                <div class="eachSlideWrap">
                    <svg xmlns="http://www.w3.org/2000/svg" width="98.566" height="95.3" viewBox="0 0 98.566 95.3">
                        <g id="Group_33614" data-name="Group 33614" transform="translate(-416.933 -946.713)">
                            <circle id="Ellipse_49" data-name="Ellipse 49" cx="5" cy="5" r="5" transform="translate(416.933 946.713)" fill="#ffd201"/>
                            <circle id="Ellipse_50" data-name="Ellipse 50" cx="2.704" cy="2.704" r="2.704" transform="translate(510.09 993.286)" fill="#f5632c"/>
                            <g id="Ellipse_52" data-name="Ellipse 52" transform="translate(424.615 1034.012)" fill="none" stroke="#f5632c" stroke-width="1">
                                <circle cx="4" cy="4" r="4" stroke="none"/>
                                <circle cx="4" cy="4" r="3.5" fill="none"/>
                            </g>
                            <g id="Layer_1" transform="translate(435 965.806)">
                                <g id="Group_20859" data-name="Group 20859" transform="translate(1 1)">
                                    <path id="Path_88768" data-name="Path 88768" d="M45.87,60H15.131A14.146,14.146,0,0,1,1,45.871V15.129A14.146,14.146,0,0,1,15.131,1H45.871A14.145,14.145,0,0,1,60,15.129V45.871A14.146,14.146,0,0,1,45.87,60ZM15.131,4.933a10.208,10.208,0,0,0-10.2,10.2V45.871a10.208,10.208,0,0,0,10.2,10.2H45.871a10.208,10.208,0,0,0,10.2-10.2V15.129a10.208,10.208,0,0,0-10.2-10.2Z" transform="translate(-1 -1)"/>
                                </g>
                                <g id="Group_20862" data-name="Group 20862" transform="translate(18.865 20.804)">
                                    <g id="Group_20860" data-name="Group 20860">
                                        <path id="Path_88769" data-name="Path 88769" d="M18.727,30.393c-4.811,0-8.727-4.35-8.727-9.7V12.939a1.939,1.939,0,1,1,3.879,0V20.7c0,3.208,2.174,5.818,4.848,5.818s4.848-2.61,4.848-5.818V12.939a1.939,1.939,0,1,1,3.879,0V20.7C27.453,26.043,23.538,30.393,18.727,30.393Z" transform="translate(-10 -11)"/>
                                    </g>
                                    <g id="Group_20861" data-name="Group 20861" transform="translate(19.393)">
                                        <path id="Path_88770" data-name="Path 88770" d="M21.939,30.393A1.947,1.947,0,0,1,20,28.453V12.939a1.939,1.939,0,1,1,3.879,0V28.453A1.947,1.947,0,0,1,21.939,30.393Z" transform="translate(-20 -11)"/>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <h6>UI and
                        Web Design
                    </h6>
                </div>
            </div>
            <div data-imgName="services8.jpg" class="item">
                <div class="eachSlideWrap">
                    <svg xmlns="http://www.w3.org/2000/svg" width="98.566" height="97.3" viewBox="0 0 98.566 97.3">
                        <g id="Group_33613" data-name="Group 33613" transform="translate(-199.933 -946.713)">
                            <circle id="Ellipse_49" data-name="Ellipse 49" cx="5" cy="5" r="5" transform="translate(199.933 946.713)" fill="#ffd201"/>
                            <circle id="Ellipse_50" data-name="Ellipse 50" cx="2.704" cy="2.704" r="2.704" transform="translate(293.09 993.286)" fill="#f5632c"/>
                            <g id="Ellipse_52" data-name="Ellipse 52" transform="translate(207.615 1036.012)" fill="none" stroke="#f5632c" stroke-width="1">
                                <circle cx="4" cy="4" r="4" stroke="none"/>
                                <circle cx="4" cy="4" r="3.5" fill="none"/>
                            </g>
                            <g id="Layer_1" transform="translate(218.251 966.242)">
                                <g id="Group_20857" data-name="Group 20857" transform="translate(0 0)">
                                    <path id="Path_88765" data-name="Path 88765" d="M46.248,60.5h-31A14.265,14.265,0,0,1,1,46.25v-31A14.265,14.265,0,0,1,15.25,1h31A14.265,14.265,0,0,1,60.5,15.248v31A14.265,14.265,0,0,1,46.248,60.5Zm-31-55.532A10.3,10.3,0,0,0,4.967,15.248v31A10.3,10.3,0,0,0,15.25,56.532h31A10.294,10.294,0,0,0,56.532,46.25v-31A10.3,10.3,0,0,0,46.248,4.967Z" transform="translate(-1 -1)" fill="#000"/>
                                </g>
                                <g id="Group_20858" data-name="Group 20858" transform="translate(13.219 20.026)">
                                    <path id="Path_88766" data-name="Path 88766" d="M23.057,11a1.944,1.944,0,0,0-1.945,1.945v7.779c0,3.216-2.18,5.834-4.862,5.834s-4.862-2.617-4.862-5.834V12.945a1.945,1.945,0,1,0-3.889,0v7.779c0,5.361,3.926,9.723,8.751,9.723S25,26.085,25,20.723V12.945A1.944,1.944,0,0,0,23.057,11Z" transform="translate(-7.5 -11)" fill="#000"/>
                                    <path id="Path_88767" data-name="Path 88767" d="M26.6,20.723l4.218-6.748a1.944,1.944,0,1,0-3.3-2.061l-3.214,5.142-3.213-5.14a1.944,1.944,0,1,0-3.3,2.061l4.216,6.746L17.8,27.471a1.944,1.944,0,1,0,3.3,2.061l3.214-5.142,3.213,5.14a1.944,1.944,0,1,0,3.3-2.061Z" transform="translate(1.947 -11)" fill="#000"/>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <h6>UX Research
                        and UX Design
                    </h6>
                </div>
            </div>
            <div data-imgName="services9.jpg" class="item">
                <div class="eachSlideWrap">
                    <svg xmlns="http://www.w3.org/2000/svg" width="98.566" height="95.3" viewBox="0 0 98.566 95.3">
                        <g id="Group_33616" data-name="Group 33616" transform="translate(-852.933 -946.713)">
                            <circle id="Ellipse_49" data-name="Ellipse 49" cx="5" cy="5" r="5" transform="translate(852.933 946.713)" fill="#ffd201"/>
                            <circle id="Ellipse_50" data-name="Ellipse 50" cx="2.704" cy="2.704" r="2.704" transform="translate(946.09 993.286)" fill="#f5632c"/>
                            <g id="Ellipse_52" data-name="Ellipse 52" transform="translate(860.615 1034.012)" fill="none" stroke="#f5632c" stroke-width="1">
                                <circle cx="4" cy="4" r="4" stroke="none"/>
                                <circle cx="4" cy="4" r="3.5" fill="none"/>
                            </g>
                            <g id="Group_33608" data-name="Group 33608" transform="translate(-197 -2766.194)">
                                <g id="Layer_1" transform="translate(1069 3733)">
                                    <g id="Group_20859" data-name="Group 20859" transform="translate(0 0)">
                                        <path id="Path_88768" data-name="Path 88768" d="M45.87,60H15.131A14.146,14.146,0,0,1,1,45.871V15.129A14.146,14.146,0,0,1,15.131,1H45.871A14.145,14.145,0,0,1,60,15.129V45.871A14.146,14.146,0,0,1,45.87,60ZM15.131,4.933a10.208,10.208,0,0,0-10.2,10.2V45.871a10.208,10.208,0,0,0,10.2,10.2H45.871a10.208,10.208,0,0,0,10.2-10.2V15.129a10.208,10.208,0,0,0-10.2-10.2Z" transform="translate(-1 -1)"/>
                                    </g>
                                </g>
                                <path id="search_4_" data-name="search(4)" d="M25.151,23.965,21.1,19.921A10.862,10.862,0,1,0,19.921,21.1l4.044,4.052a.839.839,0,1,0,1.186-1.186ZM12.86,22.051a9.191,9.191,0,1,1,9.191-9.191,9.191,9.191,0,0,1-9.191,9.191Z" transform="translate(1084.806 3748.806)" stroke="#000" stroke-width="2"/>
                            </g>
                        </g>
                    </svg>
                    <h6>Search Engine Optimization (SEO)

                    </h6>
                </div>
            </div>
            <div data-imgName="services10.jpg" class="item">
                <div class="eachSlideWrap">
                    <svg xmlns="http://www.w3.org/2000/svg" width="98.566" height="95.3" viewBox="0 0 98.566 95.3">
                        <g id="Group_33617" data-name="Group 33617" transform="translate(-1069.933 -946.713)">
                            <circle id="Ellipse_49" data-name="Ellipse 49" cx="5" cy="5" r="5" transform="translate(1069.933 946.713)" fill="#ffd201"/>
                            <circle id="Ellipse_50" data-name="Ellipse 50" cx="2.704" cy="2.704" r="2.704" transform="translate(1163.09 993.286)" fill="#f5632c"/>
                            <g id="Ellipse_52" data-name="Ellipse 52" transform="translate(1077.615 1034.012)" fill="none" stroke="#f5632c" stroke-width="1">
                                <circle cx="4" cy="4" r="4" stroke="none"/>
                                <circle cx="4" cy="4" r="3.5" fill="none"/>
                            </g>
                            <g id="Group_33609" data-name="Group 33609" transform="translate(19.5 -2766.509)">
                                <g id="Layer_1" transform="translate(1069 3733)">
                                    <g id="Group_20859" data-name="Group 20859" transform="translate(0 0)">
                                        <path id="Path_88768" data-name="Path 88768" d="M45.87,60H15.131A14.146,14.146,0,0,1,1,45.871V15.129A14.146,14.146,0,0,1,15.131,1H45.871A14.145,14.145,0,0,1,60,15.129V45.871A14.146,14.146,0,0,1,45.87,60ZM15.131,4.933a10.208,10.208,0,0,0-10.2,10.2V45.871a10.208,10.208,0,0,0,10.2,10.2H45.871a10.208,10.208,0,0,0,10.2-10.2V15.129a10.208,10.208,0,0,0-10.2-10.2Z" transform="translate(-1 -1)"/>
                                    </g>
                                </g>
                                <g id="Layer_2" data-name="Layer 2" transform="translate(1088.454 3750.215)">
                                    <path id="Path_88778" data-name="Path 88778" d="M17.094,13.022a6.7,6.7,0,1,0-8.095,0A10.055,10.055,0,0,0,3,22.21a3.349,3.349,0,0,0,3.349,3.349H19.744a3.349,3.349,0,0,0,3.349-3.349,10.055,10.055,0,0,0-6-9.188ZM8.581,7.7a4.465,4.465,0,1,1,4.465,4.465A4.465,4.465,0,0,1,8.581,7.7ZM19.744,23.326H6.349A1.116,1.116,0,0,1,5.232,22.21a7.814,7.814,0,1,1,15.627,0A1.116,1.116,0,0,1,19.744,23.326Z" transform="translate(-3 -0.989)" stroke="#000" stroke-width="1"/>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <h6>Administration and Maintenance

                    </h6>
                </div>
            </div>
        </div>
        <div class="ourServicesMobileDetailWrap">
            <img style="border-radius: 20px 20px 0 0" src="<?php bloginfo("template_directory"); ?>/images/services/services6.jpg" alt="">
            <div style="padding: 20px 25px">
                <h6 class="mServiceTitleDetail">Front End and Back End Development</h6>
                <p class="mServiceParaDetail">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                <a class="mServiceLinkDetail">See Projects
                    <svg xmlns="http://www.w3.org/2000/svg" width="21.174" height="18.536" viewBox="0 0 21.174 18.536">
                        <g id="Arrow_-_Right" data-name="Arrow - Right" transform="translate(-3.5 -3.934)">
                            <path id="Path_88546" data-name="Path 88546" d="M23.424,11.726H4.75" transform="translate(0 1.475)" fill="none" stroke="#ffd201" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"/>
                            <path id="Path_88547" data-name="Path 88547" d="M13.7,5.7l7.532,7.5L13.7,20.7" transform="translate(2.192 0)" fill="none" stroke="#ffd201" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"/>
                        </g>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="flex-grow-1 per-10 faq paddingM-30" style="padding: 0 177px;background: url('<?php bloginfo("template_directory"); ?>/images/services/services4.png') center center no-repeat;background-size:cover">
        <svg id="faqSvg1" class="d-none d-blockM"  xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23">
            <g id="Ellipse_856" data-name="Ellipse 856" fill="#fff" stroke="#f5632c" stroke-width="2">
                <circle cx="11.5" cy="11.5" r="11.5" stroke="none"/>
                <circle cx="11.5" cy="11.5" r="10.5" fill="none"/>
            </g>
        </svg>
        <svg id="faqSvg2" class="d-none d-blockM"  xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
            <g id="Ellipse_854" data-name="Ellipse 854" fill="#fff" stroke="#ffd201" stroke-width="1.5">
                <ellipse cx="10" cy="10" rx="10" ry="10" stroke="none"/>
                <ellipse cx="10" cy="10" rx="9.25" ry="9.25" fill="none"/>
            </g>
        </svg>
        <svg id="faqSvg3" class="d-none d-blockM"  xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
            <g id="Ellipse_855" data-name="Ellipse 855" fill="#46389c" stroke="#46389c" stroke-width="1.2">
                <circle cx="4.5" cy="4.5" r="4.5" stroke="none"/>
                <circle cx="4.5" cy="4.5" r="3.9" fill="none"/>
            </g>
        </svg>


        <h6 class="saTitle1 titleIcon2" style="text-align: center;font-weight: 500!important;">FAQ</h6>
        <div class="flex-grow-1 per-10  eachFaqCardWrapper d-flex flex-direction-column-reverse">
           <div class="per-5 left flex-grow-1 mw-100m">
               <p> <h6>Does your site need support?</h6>
               <p>this is a text about item this is a text about item this is a text about item this is a text about item this is a text about item this is a text about item</p></p>
           </div>
           <div class="per-5 right flex-grow-1 mw-100m">
               <div class="imgFaqCardWrapper" style="background: url('<?php bloginfo("template_directory"); ?>/images/services/services1.jpg') center center no-repeat;background-size: cover">
               </div>
           </div>
        </div>
        <div class="flex-grow-1 per-10  eachFaqCardWrapper d-flex flex-direction-column">
            <div class="per-5 right flex-grow-1 mw-100m" style="justify-content: flex-start">
                <div class="imgFaqCardWrapper" style="background: url('<?php bloginfo("template_directory"); ?>/images/services/services2.jpg') center center no-repeat;background-size: cover">
                </div>
            </div>
            <div class="per-5 left flex-grow-1 mw-100m">
                <h6>How long does it take for my site to be ready?</h6>
                <p>this is a text about item this is a text about item this is a text about item this is a text about item this is a text about item this is a text about item</p>
            </div>

        </div>
        <div class="flex-grow-1 per-10  eachFaqCardWrapper d-flex flex-direction-column-reverse">
            <div class="per-5 left flex-grow-1 mw-100m">
                <h6>What is the difference between Professional and Premium?</h6>
                <p>this is a text about item this is a text about item this is a text about item this is a text about item this is a text about item this is a text about item</p>
            </div>
            <div class="per-5 right flex-grow-1 mw-100m">
                <div class="imgFaqCardWrapper" style="background: url('<?php bloginfo("template_directory"); ?>/images/services/services3.jpg') center center no-repeat;background-size: cover">
                </div>
            </div>
        </div>
    </div>


<?php
include('partial/form.php')
?>






    <script>
        $(document).ready(function (){
            var firstSlide = $('.eachOurServicesCard:first').attr('data-imgSlide').split(",")
            $.each(firstSlide,function (index,value){
                $('.detailOurServicesOwl').trigger('add.owl.carousel', ['<div class="item eachSlideOurServices" style="background: url(../wp-content/themes/Nexmark/images/services/'+value+')"></div>'])
                    .trigger('refresh.owl.carousel');
            })



            var svgArrowRight = '<svg xmlns="http://www.w3.org/2000/svg" width="14.647" height="12.987" viewBox="0 0 14.647 12.987"><g id="Arrow_-_Right" data-name="Arrow - Right" transform="translate(1 1.414)"><path id="Path_88546" data-name="Path 88546" d="M17.4,11.726H4.75" transform="translate(-4.75 -6.646)" fill="none" stroke="#FFD201" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/><path id="Path_88547" data-name="Path 88547" d="M13.7,5.7l5.1,5.079-5.1,5.08" transform="translate(-6.154 -5.701)" fill="none" stroke="#FFD201" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></g></svg>';
            var svgArrowLeft = '<svg xmlns="http://www.w3.org/2000/svg" width="14.647" height="12.987" viewBox="0 0 14.647 12.987"><g id="Arrow_-_Right" data-name="Arrow - Right" transform="translate(1 1.414)"><path id="Path_88546" data-name="Path 88546" d="M4.75,11.726H17.4" transform="translate(-4.75 -6.646)" fill="none" stroke="#FFD201" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/><path id="Path_88547" data-name="Path 88547" d="M18.8,5.7,13.7,10.78l5.1,5.08" transform="translate(-13.7 -5.701)" fill="none" stroke="#FFD201" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></g></svg>'

            $('.owl-nav button').children().remove();
            $('.owl-nav button:last-child').html(svgArrowRight).css('transform','rotate(90deg)');
            $('.owl-nav button:first-child').html(svgArrowLeft).css('transform','rotate(90deg)');

            $('#saHomeNext').click(function (e){
                e.preventDefault();
                    $('#saHomeForm1').hide()
                    $('#saHomeForm2').fadeIn()
            })
            $('#saHomeBack').click(function (e){
                e.preventDefault();
                $('#saHomeForm2').hide()
                $('#saHomeForm1').fadeIn()
            })

            if($(window).width() < 1000){
                $('.homePart1 .right svg,.homePart4 .left svg').removeAttr('width').removeAttr('height')

            }


            $('.eachOurServicesCard').click(function (){
                var card1 = ['services1.jpg','services2.jpg'];

                var title = $(this).children('h6').text();
                var para = $(this).attr('title')
                $('#titleDetail').html(title)
                $('#paraDetail').html(para)

                // if ($(this).hasClass('selectedItemServices')){
                //     $('.detailOurServices').slideUp();
                //     $(this).removeClass('selectedItemServices')
                // }else {
                    $('.eachOurServicesCard').removeClass('selectedItemServices');
                    $(this).addClass('selectedItemServices')
                    $('.detailOurServices').slideDown();
                    for (var i=0; i<$('.item').length; i++) {
                        $(".detailOurServicesOwl").trigger('remove.owl.carousel', [i])
                            .trigger('refresh.owl.carousel');
                    }

                    var imgName = $(this).attr('data-imgSlide').split(",");



                        $.each(imgName,function (i,v){
                            $('.detailOurServicesOwl').trigger('add.owl.carousel', ['<div class="item eachSlideOurServices" style="background: url(../wp-content/themes/Nexmark/images/services/'+v+')"></div>'])
                                .trigger('refresh.owl.carousel');
                        })



                // }

            })


            $('.ourServicesMobile .item').click(function (){
                $('.ourServicesMobile .item').removeClass('selectedItemServices')
                $(this).addClass('selectedItemServices')
                $('.ourServicesMobileDetailWrap .mServiceTitleDetail').html($(this).children().children('h6').html())
                var imgName = $(this).attr('data-imgName')
                var img = $('.ourServicesMobileDetailWrap').children('img');
                img.attr('src','../wp-content/themes/Nexmark/images/services/'+imgName)
            })

            if($(window).width() < 1000) {
                faqSvg1.getAnimations().forEach((animation) => {
                    animation.effect.composite = "add";
                });
                faqSvg2.getAnimations().forEach((animation) => {
                    animation.effect.composite = "accumulate";
                });

                $('.ourServicesMobile').removeClass('d-none')

            }






        })
    </script>

<?php get_footer(); ?>