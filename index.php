<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
    <head>

        <?php include("includes/meta_details.php"); ?>

        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
            <link rel="stylesheet" type="text/css" href="css/demo.css" />
            <link rel="stylesheet" type="text/css" href="css/style_alt.css" />
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

            <script type="text/javascript" src="js/jquery.fancybox.js"></script>
            <script type="text/javascript" src="js/jquery.easing-1.3.pack.js"></script>
            <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" />
            <script src="js/modernizr.custom.63321.js"></script>
            <!--[if lte IE 7]>
	    <style>
	    .main{
		display:none;
		}
	    .support-note .note-ie{
		display:block;
		}
	    </style>
	    <![endif]-->
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

       <div class="header">
            <?php
            include("includes/page_slider.php");
            include("includes/login_register.php");
            ?>	

            <div class="middle">
                <h1>
                <!-- <img src="images/logo.png" style="width:250px;height:80px"/> -->
                </h1>
                <ul>
                    <li><a href="index.php"><div>Home</div></a></li>
                    <li><a href="products.php"><div>Products</div></a></li>
                    <li><a href="idea_hub.php"><div>Idea Hub</div></a></li>
                    <li><a href="about.php"><div>About Us</div></a></li>

                </ul>
            </div>
            <a id="inline" href="#data">Login</a>



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
                </div>
            </div>
        </div>



        <?php
        include("includes/home_products.php");
        include("includes/home_footer.php");
        ?>
      
      
        <?php
        if (isset($_GET['lookup'])) {
            $lookUp = $_GET['lookup'];
            if ($lookUp == "true") {
                ?>
        <!-- This part of the code requires a lot o change. This can only be completed only after all the elements in the page are complete.
        -->
                <link rel="stylesheet" type="text/css" href="css/joyride-2.0.3.css" />
                <script type="text/javascript" src="js/jquery.joyride-2.0.3.js"></script>

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
                    <li data-id="more" data-button="close" data-options="tipLocation:top;tipAnimation:pop;scrollSpeed:1000">
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
                <?php
            }
        }
        ?>
    </body>
</html>