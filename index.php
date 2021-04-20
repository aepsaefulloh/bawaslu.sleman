<?php 
require_once 'config.php';
require_once ROOT_PATH.'/lib/dao_utility.php';
require_once ROOT_PATH.'/lib/mysqlDao.php';
// require_once ROOT_PATH.'/lib/json_utility.php';
// require_once ROOT_PATH.'/lib/init.php';
// $page = isset($_REQUEST['page'])?$_REQUEST['page']:"1";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="The official website of the Elections Department Singapore.">
    <meta name="author" content="ELD">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.eld.gov.sg">
    <meta property="og:title" content="Elections Department Singapore">
    <meta property="og:description" content="The official website of the Elections Department Singapore.">
    <meta property="og:image" content="https://www.eld.gov.sg/images/bg/hero-bg-preview.jpg">
    <script type="text/javascript" src="<?php echo ROOT_URL?>/assets/js/eldWogaa.js">
    </script>

    <link rel="apple-touch-icon" href="images/icons/touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/icons/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/icons/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/icons/touch-icon-ipad-retina.png">

    <title>Elections Department Singapore (ELD)</title>

    <!-- Bootstrap core CSS -->
    <link type="text/css" href="<?php echo ROOT_URL?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->

    <script type="text/javascript" src="<?php echo ROOT_URL?>/assets/js/ie-emulation-modes-warning.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script type="text/javascript" src="<?php echo ROOT_URL?>/assets/js/ie10-viewport-bug-workaround.min.js"></script>

    <!-- Custom styles for this template -->
    <link type="text/css" rel="stylesheet" href="<?php echo ROOT_URL?>/assets/css/mmenu.css" />

    <link type="text/css" rel="stylesheet" href="<?php echo ROOT_URL?>/assets/css/style.css?<?php echo rand()?>" />
    <!-- <link type="text/css" rel="stylesheet" href="css/w3.css" /> -->
    <link type="text/css" rel="stylesheet" href="<?php echo ROOT_URL?>/assets/css/flexslider.min.css" />
    <script type="text/javascript" src="<?php echo ROOT_URL?>/assets/js/jquery.min.js"></script>


    <!-- ELD Coding -->
    <script type="text/javascript" src="<?php echo ROOT_URL?>/assets/js/eldFrame.js">
    </script>
    <script type="text/javascript" src="<?php echo ROOT_URL?>/assets/js/appFunc.min.js">
    </script>
    <script type="text/javascript" src="<?php echo ROOT_URL?>/assets/js/fontSize.min.js">
    </script>

    <script type="text/javascript">
    function nocontext(e) {
        var clickedTag = (e == null) ? event.srcElement.tagName : e.target.tagName;
        if (clickedTag == "IMG")
            return false;
    }
    document.oncontextmenu = nocontext;

    $(document).ready(function() {
        setTimeout('$("#divNewsBanner").fadeIn()', 500);
    });
    </script>
    <!-- <style> -->
    <!-- @media (min-width: 480px) {	 -->
    <!-- .bg-hero3 .bg-borderdiv > div { -->
    <!-- padding: 5px; -->
    <!-- } -->
    <!-- .bg-hero3 .bg-borderdiv > div > div { -->
    <!-- min-height: 1900px; -->
    <!-- } -->
    <!-- } -->
    <!-- @media (min-width: 767px) {	 -->
    <!-- .bg-hero3 .bg-borderdiv > div { -->
    <!-- padding: 6px; -->
    <!-- } -->
    <!-- .bg-hero3 .bg-borderdiv > div > div { -->
    <!-- <!-- min-height: 1200px; -->
    <!-- } -->
    <!-- } -->
    <!-- @media (min-width: 992px) {	 -->
    <!-- .bg-hero3 .bg-borderdiv > div > div { -->
    <!-- <!-- min-height: 820px; -->
    <!-- } -->
    <!-- } -->
    <!-- </style> -->
    <style>
    @media (max-width: 480px) {
        .bg-hero3 .bg-borderdiv>div {
            padding-left: 15px;
            padding-right: 5px;
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .bg-hero3 .bg-borderdiv>div>div {
            padding: 15px;
        }
    }

    @media (max-width: 767px) {
        .bg-hero3 .bg-borderdiv>div {
            padding-left: 15px;
            padding-right: 5px;
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .bg-hero3 .bg-borderdiv>div>div {
            min-height: 350px;
        }
    }

    @media (min-width: 767px) {
        .bg-hero3 .bg-borderdiv>div {
            padding-left: 15px;
            padding-right: 5px;
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .bg-hero3 .bg-borderdiv>div>div {
            min-height: 750px;
        }
    }

    @media (min-width: 992px) {
        .bg-hero3 .bg-borderdiv>div>div {
            min-height: 650px;
        }
    }
    </style>
</head>

<body>

    <?php
        require_once 'include/header.php';
    ?>

    <div class="flexslider">
        <ul class="slides">
            <li>
                <div class="row bg-jumbotron m-0">
                    <div class="container">
                        <div class="container mdToLg">
                            <p class="homepageText"><br />YOUR VOTE DECIDES<br />THE FUTURE OF SINGAPORE</p>
                        </div>
                        <div class="container mdToLg">
                            <div class="bg-buttondiv col-sm-6 col-md-6 col-lg-6" style="float: right;">
                                <p class="bg-button"><a href="latestnews.html">LATEST NEWS</a></p>
                                <p class="bg-button"><a href="online.html">CHECK VOTING STATUS</a></p>
                                <p class="bg-button"><a href="online.html">RESTORE NAME TO REGISTERS OF ELECTORS</a></p>
                                <p class="bg-button"><a href="online.html">REGISTER AS OVERSEAS VOTER</a></p>
                                <p class="bg-button"><a href="candidate_parliamentary_online.html">CANDIDATE
                                        SERVICES</a></p>
                                <br /><br />
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <div class="row xsToMd">
        <div class="container">
            <p class="homepageTextAlt"><br />YOUR VOTE DECIDES<br />THE FUTURE OF SINGAPORE</p>
        </div>
        <div class="bg-buttondiv col-sm-12 col-md-12 col-lg-12" style="">
            <p class="bg-button"><a href="latestnews.html">LATEST NEWS</a></p>
            <p class="bg-button"><a href="online.html">CHECK VOTING STATUS</a></p>
            <p class="bg-button"><a href="online.html">RESTORE NAME TO REGISTERS OF ELECTORS</a></p>
            <p class="bg-button"><a href="online.html">REGISTER AS OVERSEAS VOTER</a></p>
            <p class="bg-button"><a href="candidate_parliamentary_online.html">CANDIDATE SERVICES</a></p>
            <br /><br />
        </div>
    </div>

    <!--<div id="divNewsBanner" class="row" style="display:block;">
		<div class="flexslider">
		<ul class="slides">

		<li>
		</li>

		</ul>
		</div>
	</div>-->

    <div class="row bg-hero1">
        <div class="container bg-borderdiv bg-borderdiv1">
            <h1>VOTER<br />SERVICES</h1>
            <p>
                <br />
                Check voting status<br />
                Restore name to Registers of Electors<br />
                Register as Overseas Elector<br />
            </p><br />
            <div>
                <p class="bg-button bg-button2"><a href="online.html">START</a></p>
            </div>
        </div>
    </div>
    <div class="row bg-hero2">
        <div class="container bg-borderdiv bg-borderdiv2">
            <h1>CANDIDATE<br />SERVICES</h1>
            <br />
            <p>
                Available from Writ Day
            </p><br />
            <div>
                <p class="bg-button"><a href="candidate_parliamentary_online.html">START</a></p>
            </div>
        </div>
    </div>
    <div class="row bg-hero4">
        <div class="container">
            <div class="d-flex justify-content-center flex-column flex-md-row">
                <div class="col">
                    <div class="bg-borderdiv">
                        <h3>POLLING DISTRICT MAPS</h3>
                        <div>
                            <p class="bg-button bg-button2"><a href="elections_map_pd.html">VIEW MAPS</a></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="bg-borderdiv">
                        <h3>CHECK ELECTORAL DIVISION</h3>
                        <div>
                            <p class="bg-button bg-button2"><a
                                    href="https://app.eservice.eld.gov.sg/voter/postalcodeenquiry.aspx"
                                    target="_blank">ENTER POSTAL CODE</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row bg-hero3">
        <div class="container">
            <div class="bg-borderdiv w-100" style="min-height: 0px">
                <h1>UPDATES</h1>
            </div>
            <div class="d-flex flex-column flex-md-row flex-lg-row w-100 bg-borderdiv">
                <!-- **************************************************************************************************************** -->
                <div class="w-100">
                    <div>
                        <h3>
                            Announcements
                        </h3>
                        <h3>
                            Note to overseas voters
                        </h3>
                        <h4>
                            Please apply for a <a href="https://app.eservice.eld.gov.sg/voter/LCA/TermsofUse.aspx"
                                target="_blank">Local Contact Address (LCA)</a> from ICA before restoring your name to
                            the Registers of Electors.
                        </h4>
                        <!-- start maintenance -->
                        <!-- <h3> -->
                        <!-- 09 Apr 2021 -->
                        <!-- <br/> -->
                        <!-- System Maintenance Message -->
                        <!-- </h3> -->
                        <!-- <h4> -->
                        <!-- System maintenance will be carried out on 11 Apr 2021 (Sun) 12 am to 8 am. Access to our Voter Services may be impacted during this period. We are sorry for any inconvenience caused. -->
                        <!-- </h4> -->
                        <!-- end maintenance -->

                    </div>
                </div>

                <!-- **************************************************************************************************************** -->
                <div class="w-100">
                    <div>
                        <h3>
                            <a href="media.html">Media</a>
                        </h3>

                        <!-- 					<h3>
							30 Sep 2019
							<br/>
							Press Release
							</h3>
							<h4>
							<a href="press/2019/***.pdf" target='_blank'>****Press Release Name Here****</a>
						</h4> -->
                        <!-- start PR -->
                        <h3>
                            25 Jan 2021
                            <br />
                            Press Release
                        </h3>
                        <h4>
                            <a href='press/2021/Inspection_of_List_of_Non-Voters_for_the_Polling_District_of_PN23.pdf'
                                target='_blank'>Inspection of List of Non-Voters for the Polling District of PN23</a>
                        </h4>
                        <h3>
                            11 Jan 2021
                            <br />
                            Press Release
                        </h3>
                        <h4>
                            <a href='press/2021/Destruction_of_Ballot_Papers_and_Other_Documents_Used_in_General_Election_2020.pdf'
                                target='_blank'>Destruction of Ballot Papers and Other Documents Used in General
                                Election 2020</a>
                        </h4>
                        <h3>
                            5 Jan 2021
                            <br />
                            General
                        </h3>
                        <h4>
                            <a href='press/2021/Written_Reply_to_Parliamentary_Question_on_Consideration_for_Early_Mail-in_Ballots_from_Overseas_Voters_to_Ensure_that_Overseas_Singaporeans_Are_Able_to_Participate_in_Elections.pdf'
                                target='_blank'>Written Reply to Parliamentary Question on Consideration for Early
                                Mail-in Ballots from Overseas Voters to Ensure that Overseas Singaporeans Are Able to
                                Participate in Elections</a>
                        </h4>
                        <!-- end PR -->
                    </div>
                </div>

                <!-- **************************************************************************************************************** -->
                <div class="w-100">
                    <div>
                        <h3>
                            <a href="gazettes.html">Gazettes</a>
                        </h3>
                        <!-- start GN -->
                        <h3>
                            25 Jan 2021
                        </h3>
                        <h4>
                            <a href='gazettes/2021/Inspection_of_Certified_List_of_Non-Voters_of_PN23.pdf'
                                target='_blank'>Inspection of Certified List of Non-Voters of PN23</a>
                        </h4>
                        <h3>
                            23 Dec 2020
                        </h3>
                        <h4>
                            <a href='gazettes/2020/Presidential_Elections_(Forms_and_Fees)_(Amendment)_Regulations_2020.pdf'
                                target='_blank'>Presidential Elections (Forms and Fees) (Amendment) Regulations 2020</a>
                        </h4>
                        <h3>
                            05 Oct 2020
                        </h3>
                        <h4>
                            <a href='gazettes/2020/Order_for_Retrieval_of_Registers_for_the_Polling_District_of_PN23.pdf'
                                target='_blank'>Order for Retrieval of Registers for the Polling District of PN23</a>
                        </h4>
                        <!-- end GN -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="divFooter" class="footer">
        <!--start output from Footer().-->
        <div class="container">
            <div class="d-flex justify-content-md-between flex-column flex-md-column flex-lg-row">
                <div class="text-lg-left footerInfo">
                    <div>BAWASLU KABUPATEN SLEMAN</div><br>
                    <div
                        class="d-flex justify-content-center justify-content-lg-start flex-md-row flex-column flex-lg-wrap col-lg-11 pl-lg-0">
                        <div class="footerPadRight"><a href="https://tech.gov.sg/report_vulnerability.html"
                                target="_blank">Report Vulnerability</a></div>
                        <div class="footerPadRight"><a href="privacy.html">Privacy Statement</a></div>
                        <div class="footerPadRight"><a href="terms.html">Terms of Use</a></div>
                        <div class="footerPadRight"><a
                                href="https://app.eservice.eld.gov.sg/voter/eldWebsiteePollForm.aspx" target="_blank">
                                <nobr>Rate this Service</nobr>
                            </a></div>
                        <div class="footerPadRight pt-lg-2"><a href="sitemap.html">Sitemap</a></div>
                        <div class="footerPadRight pt-lg-2"><a href="links.html">Links</a></div>
                    </div>
                </div>
                <div class="text-lg-right footerInfo footerImg">
                    <div><img src="images/SQC.svg" alt="Singapore Quality Class Logo"
                            title="Singapore Quality Class Logo"
                            style="width: 140px; margin-right: 15px;"><br><span>©2021 Government of Singapore</span><br>
                        <div style="margin-right: 0px;"> Last updated <span id="spanLastUpdated">12 Apr 2021</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end output from Footer()-->
    </div>

    <script type="text/javascript">
    lastUpdated('12 Apr 2021');
    </script>

    <!-- Bootstrap core JavaScript
	================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="<?php echo ROOT_URL?>/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo ROOT_URL?>/assets/js/mmenu.js"></script>
    <script type="text/javascript" src="<?php echo ROOT_URL?>/assets/js/mmenu.polyfills.js"></script>
    <script type="text/javascript" src="<?php echo ROOT_URL?>/assets/js/headroom.min.js"></script>
    <script type="text/javascript" src="<?php echo ROOT_URL?>/assets/js/jquery.headroom.min.js"></script>

    <!-- <script src="bxslider/jquery.bxslider.min.js"></script>
			<script>
			$(document).ready(function () {
			$('.bxslider').bxSlider({
			minSlides: 1,
			maxSlides: 2,
			slideWidth: 210,
			slideMargin: 10
			});
			});
		</script> -->

    <script defer src="<?php echo ROOT_URL?>/assets/js/jquery.flexslider.min.js"></script>
    <script type="text/javascript">
    $(window).on('load', function() {
        $('.flexslider').flexslider({
            animation: "slide",
            animationLoop: true,
            slideshow: true,
            slideshowSpeed: 6500,
            animationSpeed: 1500,
            smoothHeight: false,
            pauseOnAction: true,
            pauseOnHover: true,
            touch: true,
        });
    });
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('nav#menu').mmenu({
            extensions: ['effect-slide', 'pageshadow', 'position-right'],
            header: true,
            /*searchfield	: true,
            counters	: true,*/
            "offCanvas": {
                "position": "right"
            }

        });
    });

    $(".header").headroom({
        // vertical offset in px before element is first unpinned
        offset: 150,
        // scroll tolerance in px before state changes
        tolerance: 3,
        // or scroll tolerance per direction
        /*tolerance : {
        	down : 4,
        	up : 0
        }*/
    });

    $(".mobile-search-btn").click(function() {
        $(".mobile-search-bar").slideToggle();
    });
    </script>
</body>

</html>