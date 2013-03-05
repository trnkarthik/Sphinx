<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
    <head>

        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
            <title>Sphinx Corporation</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
                <meta name="description" content="Slideshow with jmpress.js" />
                <meta name="keywords" content="jmpress, slideshow, container, plugin, jquery, css3" />
                <meta name="author" content="for Codrops" />
                <link rel="shortcut icon" href="../favicon.ico"> 
                    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
                        <link rel="stylesheet" type="text/css" href="css/demo.css" />
                        <link rel="stylesheet" type="text/css" href="css/style_alt.css" />
                        <link rel="stylesheet" type="text/css" href="css/joyride-2.0.3.css" />
                        <!--[if lt IE 9]>
                        <link rel="stylesheet" type="text/css" href="css/style_ie.css" />
                        <![endif]-->
                        <!-- jQuery -->
                        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
                        <!-- jmpress plugin -->
                        <script type="text/javascript" src="js/jmpress.min.js"></script>
                        <!-- jmslideshow plugin : extends the jmpress plugin -->
                        <script type="text/javascript" src="js/jquery.jmslideshow.js"></script>
                        <script type="text/javascript" src="js/modernizr.custom.48780.js"></script>

                        <script type="text/javascript" src="fancybox/source/jquery.fancybox.js"></script>
                        <script type="text/javascript" src="fancybox/source/jquery.easing-1.3.pack.js"></script>
                        <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
                        <script type="text/javascript" src="js/jquery.cookie.js"></script>
                        <script type="text/javascript" src="js/jquery.joyride-2.0.3.js"></script>
                        <script type="text/javascript" src="js/modernizr.mq.js"></script>
                        <link rel="stylesheet" type="text/css" href="css/secondary.css" />
                        <noscript>
                            <style>
                                .step {
                                    width: 100%;
                                    position: relative;
                                }
                                .step:not(.active) {
                                    opacity: 1;
                                    filter: alpha(opacity=99);
                                    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(opacity=99)";
                                }
                                .step:not(.active) a.jms-link{
                                    opacity: 1;
                                    margin-top: 40px;
                                }
                            </style>
                        </noscript>
                        </head>



                        <body>

                            <div class="main_header">
                                <?php
                                include("includes/header.php");
                                ?>

                            </div>

                            <div class="container">

                                <?php
                                include("includes/home_slide_show.php");
                                ?>	

                            </div>



                            <div class="headline">
                                <div class="container">
                                    <div class="sixteen columns">
                                        Sphinx short description comes here.
                                        <a href="#">More...<div id="stop2"></div></a>
                                    </div>
                                </div>
                            </div>



                            <?php
                            include("includes/home_products.php");
                            include("includes/home_footer.php");
                            ?>


                            <div style="display:none">
                                <div id="login">
                                    <section class="main">
                                        <form class="form-1">
                                            <p class="field">
                                                <input type="text" name="login" placeholder="Username or email">
                                                    <i class="icon-user icon-large"></i>
                                            </p>
                                            <p class="field">
                                                <input type="password" name="password" placeholder="Password">
                                                    <i class="icon-lock icon-large"></i>
                                            </p>
                                            <p class="submit">
                                                <button type="submit" name="submit"><i class="icon-arrow-right icon-large"></i></button>
                                            </p>
                                        </form>
                                    </section>
                                </div>

                            </div>
                            <script>
		    
                                $("a#inline").fancybox({
                                    'openEffect'	:	'fade',
                                    'transitionOut'	:	'elastic',
                                    'openSpeed '		:	1600, 
                                    'speedOut'		:	1200, 
                                    'overlayShow'	:	true,
                                    'hideOnContentClick': true
                                });
                            </script>

                            <div id="4thstop"></div>

                            <ol id="joyRideTipContent">
                                <li data-text="Next" class="custom" data-id="stop1">
                                    <h2>Stop #1</h2>
                                    <p>We are at 1</p>
                                </li>
                                <li data-id="stop2" data-button="Next" data-options="tipLocation:top;tipAnimation:pop;scrollSpeed:1000">
                                    <h2>Stop #2</h2>
                                    <p>we are at 2</p>
                                </li>

                                <li data-id="stop3" data-button="Next" data-options="tipLocation:top;tipAnimation:pop;scrollSpeed:1000">
                                    <h2>Stop #3</h2>
                                    <p>we are at 3</p>
                                </li>
                                <li data-id="more2" data-button="Next" data-options="tipLocation:top;tipAnimation:pop;scrollSpeed:1000">
                                    <h2>Stop #4</h2>
                                    <p>we are at end of last</p>
                                </li>

                                <li data-id="4thstop" data-button="Next" data-options="tipLocation:top;tipAnimation:pop;scrollSpeed:1000">
                                    <h2>Stop #5</h2>
                                    <p>we are at end of last</p>
                                </li>
                                <li data-id="more" data-button="Next" data-options="tipLocation:top;tipAnimation:pop;scrollSpeed:1000">
                                    <h2>Stop #4</h2>
                                    <p>we are at end of last</p>
                                </li>
                            </ol>

                            <script>
                                $(window).load(function() {
                                    $('#joyRideTipContent').joyride({postStepCallback : function (index, tip) {
                                            if (index == 2) {
                                                $(this).joyride('set_li', false, 1);
                                            }
                                        }});
                                });
                            </script>
                        </body>
                        </html>
