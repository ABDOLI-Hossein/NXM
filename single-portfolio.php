<?php
get_header();
// First we need to show content from WordPress editor so use this code:
if ( have_posts() ){

    $pTitle = get_the_title( get_the_ID() );


    while ( have_posts() ) : the_post()
    ?>

        <div class="per-10 d-flex flex-grow-1 saPart1 flex-direction-column-reverse paddingM-30">
            <div class="per-5 flex-grow-1 right mw-100m">
                <h1 class="saTitle1">
                    <?php echo get_post_meta(get_the_ID(),'hero_title',true); ?>
                </h1>
                <p class="saPTag1">
                    <?php echo get_post_meta(get_the_ID(),'hero_text',true);   ?>
                </p>
                <div class="saLinkWrapper d-blockM">
                    <a class="w-100m" style="background-color:<?php echo get_post_meta(get_the_ID(),'TypefaceCodeColor1',true); ?> ">Details</a>
                    <a href="https://<?php echo get_post_meta(get_the_ID(),'site_url',true);  ?>" style="margin-left: 30px;color: <?php echo get_post_meta(get_the_ID(),'TypefaceCodeColor2',true); ?>">
                        <?php
                        echo get_post_meta(get_the_ID(),'site_url',true);
                        if(get_post_meta(get_the_ID(),'site_url',true) != ''){
                        ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="14.877" viewBox="0 0 17 14.877">
                            <g id="Group_20660" data-name="Group 20660" transform="translate(1 1.414)">
                                <g id="Group_20659" data-name="Group 20659">
                                    <path id="Path_88521" data-name="Path 88521" d="M19.25,12.274h-15" transform="translate(-4.25 -6.25)" fill="none" stroke="<?php echo get_post_meta(get_the_ID(),'TypefaceCodeColor2',true); ?>" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                </g>
                                <path id="Path_88522" data-name="Path 88522" d="M4.25,18.3l6.05-6.024L4.25,6.25" transform="translate(4.7 -6.25)" fill="none" stroke="<?php echo get_post_meta(get_the_ID(),'TypefaceCodeColor2',true); ?>" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                            </g>
                        </svg>
                            <?php
                        }
                            ?>
                    </a>
                </div>
            </div>
            <div class="per-5 flex-grow-1 left mw-100m">
                <?php echo get_post_meta(get_the_ID(),'right_SVG',true); ?>
            </div>
        </div>
        <!---- part 2 ---->
        <div class="per-10 d-flex flex-grow-1 saPart2 overflow-hidden d-blockM">
            <div class="per-5 flex-grow-1 right p-relative mw-100m">
                <img src='<?php bloginfo("template_directory"); ?>/images/<?php echo get_post_meta(get_the_ID(),'OverviewImg1',true); ?>' style="top: 115px;right: 0;z-index: 1">
                <img src='<?php bloginfo("template_directory"); ?>/images/<?php echo get_post_meta(get_the_ID(),'OverviewImg2',true); ?>' style="top: 0;right: 160px;">
            </div>
            <div class="per-5 flex-grow-1 left mw-100m" style="padding: 300px 0 200px 60px">
                <h6 class="saTitle1 titleIcon" style="--bg-color:<?php echo get_post_meta(get_the_ID(),'TypefaceCodeColor1',true); ?>;margin-left: 50px;">01 Overview</h6>
                <p class="saPTag1">
                    <?php
                        echo  get_post_meta(get_the_ID(),'Overview_text',true);
                    ?>
                </p>
                <div class="saProjectDetail">
                    Tool:  <?php echo get_post_meta(get_the_ID(),'Overview_tool',true); ?><br>
                    <?php echo get_post_meta(get_the_ID(),'Overview_feature',true); ?>

                </div>
            </div>
        </div>
        <!---- part 3---->
        <img class="d-noneM" src="<?php bloginfo("template_directory"); ?>/images/<?php echo get_post_meta(get_the_ID(),'OverviewImg3',true); ?>" style="margin-top: 100px;">
        <!---- part 4---->
        <div class="flex-grow-1 per-10 saPart4 paddingM-30" style="margin: 100px 0;padding: 0 100px">
            <div class="flex-grow-1 per-10 d-flex d-blockM">
                <div class="per-5 flex-grow-1 left mw-100m">
                    <h6 class="saTitle1 titleIcon" style="--bg-color:<?php echo get_post_meta(get_the_ID(),'TypefaceCodeColor1',true); ?>;margin-left: 55px;">02 Typeface & Colors</h6>
                    <p class="avenir" style="-webkit-text-stroke-color: <?php echo get_post_meta(get_the_ID(),'TypefaceCodeColor1',true); ?>"><?php echo get_post_meta(get_the_ID(),'TypefaceName',true); ?></p>
                </div>
                <div class="per-5 flex-grow-1 p-relative right mw-100m">
                    <p class="saPTag1">aa bb cc dd ee ff gg hh ii jj kk ll mm nn oo pp qq rr ss tt uu vv ww xx yy zz</p>
                </div>
            </div>
            <div class="saColors d-flex align-items-center justify-content-center d-blockM">
                <div class="saEachColor">
                    <div class="saEachColorInner" style="background-color: <?php echo get_post_meta(get_the_ID(),'TypefaceCodeColor1',true); ?>"></div>
                    <p style="color: <?php echo get_post_meta(get_the_ID(),'TypefaceCodeColor1',true); ?>"><?php echo get_post_meta(get_the_ID(),'TypefaceCodeColor1',true); ?></p>
                </div>
                <div class="saEachColor mM-0" style="margin:0 50px">
                    <div class="saEachColorInner" style="background-color: <?php echo get_post_meta(get_the_ID(),'TypefaceCodeColor2',true); ?>"></div>
                    <p style="color: <?php echo get_post_meta(get_the_ID(),'TypefaceCodeColor2',true); ?>"><?php echo get_post_meta(get_the_ID(),'TypefaceCodeColor2',true); ?></p>
                </div>
                <div class="saEachColor">
                    <div class="saEachColorInner" style="background-color: <?php echo get_post_meta(get_the_ID(),'TypefaceCodeColor3',true); ?>"></div>
                    <p style="color: <?php echo get_post_meta(get_the_ID(),'TypefaceCodeColor3',true); ?>"><?php echo get_post_meta(get_the_ID(),'TypefaceCodeColor3',true); ?></p>
                </div>
            </div>
        </div>
        <!---- part 5---->
        <div class="flex-grow-1 per-10 saPart5 d-noneM" style="height: 2200px">
            <h6 class="saTitle1 titleIcon  ml-170" style="--bg-color:<?php echo get_post_meta(get_the_ID(),'TypefaceCodeColor1',true); ?>;">03 Homepage / Desktop</h6>
            <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Homepage_DesktopImg1',true);  ?>" alt="" style="top: 180px;left: -62px;">
            <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Homepage_DesktopImg2',true);  ?>" alt="" style="top: 800px;left: -251px;">
            <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Homepage_DesktopImg3',true);  ?>" alt="" style="bottom: 155px;left: -441px;">
            <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Homepage_DesktopImg4',true);  ?>" alt="" style="right: -150px;top:220px">
            <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Homepage_DesktopImg5',true);  ?>" alt="" style="right: 41px;top: 838px;">
            <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Homepage_DesktopImg6',true);  ?>" alt="" style="bottom: 117px;right: 230px;">
            <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Homepage_DesktopImg7',true);  ?>" alt="" style="right: -558px;bottom: 25px;">
        </div>

        <!---- part 5 Mobile ---->
        <div class="flex-grow-1  per-10 d-none d-blockM paddingM-30"  style="margin: 60px 0;">
            <h6 class="saTitle1 titleIcon  ml-170" style="--bg-color:<?php echo get_post_meta(get_the_ID(),'TypefaceCodeColor1',true); ?>;">03 Homepage / Desktop</h6>
            <div class="owl-carousel owl-theme portfolioMobileOwl">
                <div class="item">
                    <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Homepage_DesktopImg1',true);  ?>" alt="">
                </div>
                <div class="item">
                    <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Homepage_DesktopImg2',true);  ?>" alt="">
                </div>
                <div class="item">
                    <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Homepage_DesktopImg3',true);  ?>" alt="">
                </div>
                <div class="item">
                    <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Homepage_DesktopImg4',true);  ?>" alt="">
                </div>
                <div class="item">
                    <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Homepage_DesktopImg5',true);  ?>" alt="">
                </div>
                <div class="item">
                    <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Homepage_DesktopImg6',true);  ?>" alt="">
                </div>
                <div class="item">
                    <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Homepage_DesktopImg7',true);  ?>" alt="">
                </div>
            </div>
        </div>


        <?php
        if(get_post_meta(get_the_ID(),'homepagesmobile',true) == 'true'){
        ?>
        <!---- part 6---->
        <div class="flex-grow-1 per-10 saPart6 d-noneM" style="height: 1371px;margin: 200px 0">
            <h6 class="saTitle1 titleIcon ml-170" style="--bg-color:<?php echo get_post_meta(get_the_ID(),'TypefaceCodeColor1',true); ?>;">04 Homepage / Mobile</h6>
            <img src='<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Homepage_MobileImg1',true);  ?>' alt="" style="top: 200px;">
            <img src='<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Homepage_MobileImg2',true);  ?>' alt="" style="max-width: 25%;left: 0;right: 0;margin: 0 auto;">
            <img src='<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Homepage_MobileImg3',true);  ?>' alt="" style="right: 60px;top: 0">
            <img src='<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Homepage_MobileImg4',true);  ?>' alt="" style="max-width: 25%;bottom: 0;left: -87px;">
            <img src='<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Homepage_MobileImg5',true);  ?>' alt="" style="left: 300px;bottom: 115px;">
            <img src='<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Homepage_MobileImg6',true);  ?>' alt="" style="right: 330px;top: 570px;z-index: -1;">
            <img src='<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Homepage_MobileImg7',true);  ?>' alt="" style="right: -90px;top: 405px;;z-index: 1;">
        </div>
        <!---- part 6 Mobile---->
            <div class="flex-grow-1 per-10 saPart6Mobile d-none d-blockM paddingM-30"  style="margin: 60px 0;">
                <h6 class="saTitle1 titleIcon ml-170" style="--bg-color:<?php echo get_post_meta(get_the_ID(),'TypefaceCodeColor1',true); ?>;">04 Homepage / Mobile</h6>
                <div class="owl-carousel owl-theme portfolioMobileOwl">
                    <div class="item">
                        <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Homepage_MobileImg1',true);  ?>" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Homepage_MobileImg2',true);  ?>" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Homepage_MobileImg3',true);  ?>" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Homepage_MobileImg4',true);  ?>" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Homepage_MobileImg5',true);  ?>" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Homepage_MobileImg6',true);  ?>" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Homepage_MobileImg7',true);  ?>" alt="">
                    </div>
                </div>
        </div>

        <?php
            }
            if (get_post_meta(get_the_ID(),'otherpages',true) == 'true'){
        ?>
        <!----repeat part 5---->
        <div class="flex-grow-1 per-10 saPart5 d-noneM" style="height:2200px">
            <h6 class="saTitle1 titleIcon ml-170" style="--bg-color:<?php echo get_post_meta(get_the_ID(),'TypefaceCodeColor1',true); ?>;">05 Other Pages / Desktop</h6>
            <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Otherpages_DesktopImg1',true);  ?>" alt="" style="top: 180px;left: -62px;">
            <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Otherpages_DesktopImg2',true);  ?>" alt="" style="top: 800px;left: -251px;">
            <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Otherpages_DesktopImg3',true);  ?>" alt="" style="bottom: 155px;left: -441px;">
            <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Otherpages_DesktopImg4',true);  ?>" alt="" style="right: -150px;top:220px">
            <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Otherpages_DesktopImg5',true);  ?>" alt="" style="right: 41px;top: 838px;">
            <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Otherpages_DesktopImg6',true);  ?>" alt="" style="bottom: 117px;right: 230px;">
            <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Otherpages_DesktopImg7',true);  ?>" alt="" style="right: -558px;bottom: 25px;">
        </div>
        <!----repeat part 5 Mobile---->
                <div class="flex-grow-1 per-10 saPart5Mobile d-none d-blockM paddingM-30"  style="margin: 60px 0;">
                    <h6 class="saTitle1 titleIcon ml-170" style="--bg-color:<?php echo get_post_meta(get_the_ID(),'TypefaceCodeColor1',true); ?>;">05 Other Pages / Desktop</h6>
                    <div class="owl-carousel owl-theme portfolioMobileOwl">
                        <div class="item">
                            <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Otherpages_DesktopImg1',true);  ?>" alt="">
                        </div>
                        <div class="item">
                            <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Otherpages_DesktopImg2',true);  ?>" alt="">
                        </div>
                        <div class="item">
                            <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Otherpages_DesktopImg3',true);  ?>" alt="">
                        </div>
                        <div class="item">
                            <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Otherpages_DesktopImg4',true);  ?>" alt="">
                        </div>
                        <div class="item">
                            <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Otherpages_DesktopImg5',true);  ?>" alt="">
                        </div>
                        <div class="item">
                            <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Otherpages_DesktopImg6',true);  ?>" alt="">
                        </div>
                        <div class="item">
                            <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Otherpages_DesktopImg7',true);  ?>" alt="">
                        </div>
                    </div>
                </div>
        <!----repeat part 6---->
        <div class="flex-grow-1 per-10 saPart6 d-noneM" style="height: 1371px;margin: 200px 0">
            <h6 class="saTitle1 titleIcon ml-170" style="--bg-color:<?php echo get_post_meta(get_the_ID(),'TypefaceCodeColor1',true); ?>;">06 Other Pages / Mobile</h6>
            <img src='<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Otherpages_MobileImg1',true);  ?>' alt="" style="top: 200px;">
            <img src='<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Otherpages_MobileImg2',true);  ?>' alt="" style="max-width: 25%;left: 0;right: 0;margin: 0 auto;">
            <img src='<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Otherpages_MobileImg3',true);  ?>' alt="" style="right: 60px;top: 0">
            <img src='<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Otherpages_MobileImg4',true);  ?>' alt="" style="max-width: 25%;bottom: 0;left: -87px;">
            <img src='<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Otherpages_MobileImg5',true);  ?>' alt="" style="left: 300px;bottom: 115px;">
            <img src='<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Otherpages_MobileImg6',true);  ?>' alt="" style="right: 330px;top: 570px;z-index: -1;">
            <img src='<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Otherpages_MobileImg7',true);  ?>' alt="" style="right: -90px;top: 405px;;z-index: 1;">
        </div>
        <!----repeat part 6 Mobile---->
                <div class="flex-grow-1 per-10 saPart6Mobile d-none d-blockM  paddingM-30" style="margin: 60px 0;">
                    <h6 class="saTitle1 titleIcon ml-170" style="--bg-color:<?php echo get_post_meta(get_the_ID(),'TypefaceCodeColor1',true); ?>;">06 Other Pages / Mobile</h6>
                    <div class="owl-carousel owl-theme portfolioMobileOwl">
                        <div class="item">
                            <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Otherpages_MobileImg1',true);  ?>" alt="">
                        </div>
                        <div class="item">
                            <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Otherpages_MobileImg2',true);  ?>" alt="">
                        </div>
                        <div class="item">
                            <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Otherpages_MobileImg3',true);  ?>" alt="">
                        </div>
                        <div class="item">
                            <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Otherpages_MobileImg4',true);  ?>" alt="">
                        </div>
                        <div class="item">
                            <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Otherpages_MobileImg5',true);  ?>" alt="">
                        </div>
                        <div class="item">
                            <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Otherpages_MobileImg6',true);  ?>" alt="">
                        </div>
                        <div class="item">
                            <img src="<?php bloginfo("template_directory"); ?>/images/<?php  echo get_post_meta(get_the_ID(),'Otherpages_MobileImg7',true);  ?>" alt="">
                        </div>
                    </div>
                </div>
        <?php
            }
        ?>


        <!----part 7---->
        <div class="flex-grow-1 per-10 saPart7">
            <h6 class="saTitle1 titleIcon ml-170" style="--bg-color:<?php echo get_post_meta(get_the_ID(),'TypefaceCodeColor1',true); ?>;">07 Project Details</h6>
            <div class="flex-grow-1 per-10 d-flex d-blockM" style="margin: 70px 0">
                <div class="flex-grow-1 saProjectDetailEach">
                    <div class="saProjectDetailIcon" style="border: 1px solid <?php echo get_post_meta(get_the_ID(),'TypefaceCodeColor2',true); ?>;box-shadow: 0 10px 35px <?php echo get_post_meta(get_the_ID(),'TypefaceCodeColor2',true); ?>;background-color: <?php echo get_post_meta(get_the_ID(),'TypefaceCodeColor2',true); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="30.889" viewBox="0 0 28 30.889">
                            <g id="Group_20678" data-name="Group 20678" transform="translate(-525 -11161.851)">
                                <g id="Calendar" transform="translate(523 11160.851)">
                                    <path id="Path_88531" data-name="Path 88531" d="M3.093,9.4H28.917" transform="translate(0 3.291)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                    <path id="Path_88532" data-name="Path 88532" d="M16.442,13.31h.009" transform="translate(5.977 5.027)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                    <path id="Path_88533" data-name="Path 88533" d="M12,13.31h.009" transform="translate(4.004 5.027)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                    <path id="Path_88534" data-name="Path 88534" d="M7.558,13.31h.009" transform="translate(2.027 5.027)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                    <path id="Path_88535" data-name="Path 88535" d="M16.442,17.2h.009" transform="translate(5.977 6.754)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                    <path id="Path_88536" data-name="Path 88536" d="M12,17.2h.009" transform="translate(4.004 6.754)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                    <path id="Path_88537" data-name="Path 88537" d="M7.558,17.2h.009" transform="translate(2.027 6.754)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                    <path id="Path_88538" data-name="Path 88538" d="M16.044,2V5.291" transform="translate(5.797)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                    <path id="Path_88539" data-name="Path 88539" d="M7.965,2V5.291" transform="translate(2.207)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                    <path id="Path_88540" data-name="Path 88540" d="M22.122,3.579H9.891C5.649,3.579,3,6,3,10.463V23.879c0,4.528,2.649,7.01,6.891,7.01H22.109c4.255,0,6.891-2.439,6.891-6.9V10.463C29.013,6,26.377,3.579,22.122,3.579Z" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd"/>
                                </g>
                            </g>
                        </svg>

                    </div>
                    <p>Launch date: <?php  echo get_post_meta(get_the_ID(),'ProjectDetailsLaunchdate',true);  ?></p>
                </div>
                <div class="flex-grow-1 saProjectDetailEach">
                    <div class="saProjectDetailIcon" style="border: 1px solid <?php echo get_post_meta(get_the_ID(),'TypefaceCodeColor2',true); ?>;box-shadow: 0 10px 35px <?php echo get_post_meta(get_the_ID(),'TypefaceCodeColor2',true); ?>;background-color: <?php echo get_post_meta(get_the_ID(),'TypefaceCodeColor2',true); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28.352" height="30.098" viewBox="0 0 28.352 30.098">
                            <g id="Group_20680" data-name="Group 20680" transform="translate(-894.316 -11162.246)">
                                <g id="Group_20679" data-name="Group 20679">
                                    <g id="Setting" transform="translate(892.221 11160.968)">
                                        <path id="Path_88541" data-name="Path 88541" d="M28.9,10.092l-.91-1.579a2.8,2.8,0,0,0-3.813-1.03h0a2.783,2.783,0,0,1-3.813-.99,2.677,2.677,0,0,1-.375-1.338h0a2.8,2.8,0,0,0-2.8-2.877H15.36a2.783,2.783,0,0,0-2.783,2.8h0a2.8,2.8,0,0,1-2.8,2.756,2.676,2.676,0,0,1-1.338-.375h0a2.8,2.8,0,0,0-3.813,1.03l-.977,1.606a2.8,2.8,0,0,0,1.017,3.813h0a2.8,2.8,0,0,1,0,4.843h0a2.783,2.783,0,0,0-1.017,3.8h0l.923,1.592a2.8,2.8,0,0,0,3.813,1.084h0a2.77,2.77,0,0,1,3.8,1.017,2.677,2.677,0,0,1,.375,1.338h0a2.8,2.8,0,0,0,2.8,2.8h1.833a2.8,2.8,0,0,0,2.8-2.783h0a2.783,2.783,0,0,1,2.8-2.8,2.849,2.849,0,0,1,1.338.375h0a2.8,2.8,0,0,0,3.813-1.017h0l.963-1.606a2.783,2.783,0,0,0-1.017-3.813h0a2.783,2.783,0,0,1-1.017-3.813,2.744,2.744,0,0,1,1.017-1.017h0a2.8,2.8,0,0,0,1.017-3.8h0Z" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd"/>
                                        <circle id="Ellipse_818" data-name="Ellipse 818" cx="2.636" cy="2.636" r="2.636" transform="translate(13.647 13.691)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                    </g>
                                </g>
                            </g>
                        </svg>

                    </div>
                    <p>Services: <?php  echo get_post_meta(get_the_ID(),'ProjectDetailsServices',true);  ?></p>
                </div>
                <div class="flex-grow-1 saProjectDetailEach">
                    <div class="saProjectDetailIcon" style="border: 1px solid <?php echo get_post_meta(get_the_ID(),'TypefaceCodeColor2',true); ?>;box-shadow: 0 10px 35px <?php echo get_post_meta(get_the_ID(),'TypefaceCodeColor2',true); ?>;background-color: <?php echo get_post_meta(get_the_ID(),'TypefaceCodeColor2',true); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="27.963" viewBox="0 0 28 27.963">
                            <g id="Group_20682" data-name="Group 20682" transform="translate(-1.276 -1.276)">
                                <g id="Group_20681" data-name="Group 20681">
                                    <path id="Path_88525" data-name="Path 88525" d="M28.239,20.536c0,4.846-2.856,7.7-7.7,7.7H9.991c-4.859,0-7.715-2.856-7.715-7.7V9.978c0-4.846,1.78-7.7,6.627-7.7H11.61a3.091,3.091,0,0,1,2.473,1.236l1.236,1.644a3.1,3.1,0,0,0,2.473,1.236h3.833c4.859,0,6.652,2.473,6.652,7.418Z" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd"/>
                                </g>
                            </g>
                        </svg>

                    </div>
                    <p>industry: <?php  echo get_post_meta(get_the_ID(),'ProjectDetailsIndustry',true);  ?></p>
                </div>
            </div>
            <div class="flex-grow-1 per-10 d-flex saProjectNextPrev d-blockM">
                <div class="flex-grow-1 saProjectNextPrevEach flex-direction-column mbM-40" style="border-right: 1px solid #e0e0e0;">
                    <!--<svg xmlns="http://www.w3.org/2000/svg" width="37.667" height="32.7" viewBox="0 0 37.667 32.7">
                        <g id="Group_20685" data-name="Group 20685" transform="translate(2 2.829)">
                            <g id="Group_20684" data-name="Group 20684">
                                <g id="Group_20683" data-name="Group 20683">
                                    <path id="Path_88521" data-name="Path 88521" d="M4.25,12.274H37.916" transform="translate(-4.25 1.247)" fill="none" stroke="<?php /*echo get_post_meta(get_the_ID(),'TypefaceCodeColor1',true); */?>" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
                                </g>
                            </g>
                            <path id="Path_88522" data-name="Path 88522" d="M17.829,33.293,4.25,19.772,17.829,6.25" transform="translate(-4.25 -6.25)" fill="none" stroke="<?php /*echo get_post_meta(get_the_ID(),'TypefaceCodeColor1',true); */?>" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
                        </g>
                    </svg>-->
                    <img src='<?php bloginfo("template_directory"); ?>/images/shamirza/shamirza8.png' alt="">
                    <div class="text-left text-centerM mtM-16">
                        <h6>previous project name</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur </p>
                    </div>
                </div>
                <div class="flex-grow-1 saProjectNextPrevEach flex-direction-column-reverse">
                    <div class="text-right text-centerM mtM-16">
                        <h6>Next project name</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur </p>
                    </div>
                    <img src='<?php bloginfo("template_directory"); ?>/images/shamirza/shamirza9.png' alt="">
                    <!--<svg xmlns="http://www.w3.org/2000/svg" width="37.667" height="32.7" viewBox="0 0 37.667 32.7">
                        <g id="Group_20688" data-name="Group 20688" transform="translate(2 2.829)">
                            <path id="Path_88521" data-name="Path 88521" d="M37.916,12.274H4.25" transform="translate(-4.25 1.247)" fill="none" stroke="<?php /*echo get_post_meta(get_the_ID(),'TypefaceCodeColor1',true); */?>" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
                            <path id="Path_88522" data-name="Path 88522" d="M4.25,33.293l13.579-13.52L4.25,6.25" transform="translate(15.838 -6.25)" fill="none" stroke="<?php /*echo get_post_meta(get_the_ID(),'TypefaceCodeColor1',true); */?>" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
                        </g>
                    </svg>-->

                </div>
            </div>
        </div>

<?php
    endwhile;
}
get_footer();
?>
<script>
    var portfolio_title = '<?php echo $pTitle   ?>';
    switch (portfolio_title){
        case 'GDC':
            $('.Path_88511').css('fill','#BCD38B')
            $('.footerWrap').css('backgroundColor','#BCD38B')
            $('#Rectangle_1677,#Rectangle_1679,#Ellipse_66').css('fill','#DFDDC6')
        break;
        case 'SMZ':
            $('.Path_88511').css('fill','#F79428')
            $('.footerWrap').css('backgroundColor','#F79428')
        break;
        case 'PMP':
            $('.Path_88511').css('fill','#9A1514')
            $('.footerWrap').css('backgroundColor','#9A1514')
            $('#Rectangle_1677,#Rectangle_1679,#Ellipse_66').css('fill','#003A5D')
        break;
        case 'AXT':
            $('.Path_88511').css('fill','#FF4438')
            $('.footerWrap').css('backgroundColor','#002A3A')
            $('#Rectangle_1677,#Rectangle_1679,#Ellipse_66').css('fill','#FF4438')
        break;
        case 'CFP':
            $('.Path_88511').css('fill','#F7D600')
            $('.footerWrap').css('backgroundColor','#F7D600')
            $('#Rectangle_1677,#Rectangle_1679,#Ellipse_66').css('fill','#456B80')

        break;
        case 'IOE':
            $('.Path_88511').css('fill','#DFA726')
            $('.footerWrap').css('backgroundColor','#2B3990')
            $('#Rectangle_1677,#Rectangle_1679,#Ellipse_66').css('fill','#DFA726')
        break;
        case 'FTG':
            $('.Path_88511').css('fill','#ED0F68')
            $('.footerWrap').css('backgroundColor','#94DAEC')
            $('#Rectangle_1677,#Rectangle_1679,#Ellipse_66').css('fill','#ED0F68')
        break;
        case 'FTG-Challenge':
            $('.Path_88511').css('fill','#1B8853')
            $('.footerWrap').css('backgroundColor','#1B8853')
            $('#Rectangle_1677,#Rectangle_1679,#Ellipse_66').css('fill','#D0001F')
        break;
        case 'MBE':
            $('.Path_88511').css('fill','#1FD6FE')
            $('.footerWrap').css('backgroundColor','#0434AF')
            $('#Rectangle_1677,#Rectangle_1679,#Ellipse_66').css('fill','#1FD6FE')
        break;
        case 'PRN':
            $('.Path_88511').css('fill','#CC262C')
            $('.footerWrap').css('backgroundColor','#000000')
            $('#Rectangle_1677,#Rectangle_1679,#Ellipse_66').css('fill','#CC262C')
        break;
        case 'VSA':
            $('.Path_88511').css('fill','#C7C7C7')
            $('.footerWrap').css('backgroundColor','#000000')
            $('#Rectangle_1677,#Rectangle_1679,#Ellipse_66').css('fill','#C7C7C7')
            break;
        case 'FTG-Bootcamp':
            $('.Path_88511').css('fill','#ED0F68')
            $('.footerWrap').css('backgroundColor','#94DAEC')
            $('#Rectangle_1677,#Rectangle_1679,#Ellipse_66').css('fill','#ED0F68')
            break;
        default:
            $('.footerWrap').css('backgroundColor','#46389C')
            break;
    }
	
	
    var owlColorBorder = '<?php echo get_post_meta(get_the_ID(),'TypefaceCodeColor2',true); ?>'
    var svgArrowRight = '<svg xmlns="http://www.w3.org/2000/svg" width="14.647" height="12.987" viewBox="0 0 14.647 12.987"><g id="Arrow_-_Right" data-name="Arrow - Right" transform="translate(1 1.414)"><path id="Path_88546" data-name="Path 88546" d="M17.4,11.726H4.75" transform="translate(-4.75 -6.646)" fill="none" stroke="'+owlColorBorder+'" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/><path id="Path_88547" data-name="Path 88547" d="M13.7,5.7l5.1,5.079-5.1,5.08" transform="translate(-6.154 -5.701)" fill="none" stroke="'+owlColorBorder+'" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></g></svg>';
    var svgArrowLeft = '<svg xmlns="http://www.w3.org/2000/svg" width="14.647" height="12.987" viewBox="0 0 14.647 12.987"><g id="Arrow_-_Right" data-name="Arrow - Right" transform="translate(1 1.414)"><path id="Path_88546" data-name="Path 88546" d="M4.75,11.726H17.4" transform="translate(-4.75 -6.646)" fill="none" stroke="'+owlColorBorder+'" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/><path id="Path_88547" data-name="Path 88547" d="M18.8,5.7,13.7,10.78l5.1,5.08" transform="translate(-13.7 -5.701)" fill="none" stroke="'+owlColorBorder+'" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></g></svg>'

    $('.owl-nav button').attr('style','border-color:'+owlColorBorder+"!important")
    $('.owl-nav button').children().remove();
    $('.owl-nav button:last-child').html(svgArrowRight);
    $('.owl-nav button:first-child').html(svgArrowLeft);
    if($(window).width() < 1000){
        $('.saPart1 .left svg').removeAttr('width').removeAttr('height')

    }


</script>
