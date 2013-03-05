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
	
	
	<div style="display:none"><div id="data">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div></div>
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
    </body>
</html>