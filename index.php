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
		<script src="js/modernizr.custom.63321.js"></script>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
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
		<script type="text/javascript">
		    var x=1;
		    function doChange()
		    {
			var output="";
			if(x==0)
			{
			    x=1;
			    output="<form class=\"form-1\"><p class=\"field\"><input type=\"text\" name=\"login\" placeholder=\"Username or email\"><i class=\"icon-user icon-large\"></i></p><p class=\"field\"><input type=\"password\" name=\"password\" placeholder=\"Password\"><i class=\"icon-lock icon-large\"></i></p><p class=\"submit\"><button type=\"submit\" name=\"submit\"><i class=\"icon-arrow-right icon-large\"></i></button></p></form>";
			    document.getElementById("registrationButton").innerHTML="<img src='images/registration.gif' style=\"width:100px;height: 26px;\" />";
			    document.getElementById("headerText").innerHTML="<center><h2>Login</h2></center>";
			    
			    
			}
			else
			{
			    document.getElementById("headerText").innerHTML="<center><h2>Registration</h2></center>";
			    output="<form class=\"form-1\"><p class=\"field\"><input type=\"text\" name=\"login\" placeholder=\"Username or email\"><i class=\"icon-user icon-large\"></i></p><p class=\"field\"><input type=\"password\" name=\"password\" placeholder=\"Password\"><i class=\"icon-lock icon-large\"></i></p><p style=\"padding-top:10px\" class=\"field\"><input type=\"password\" name=\"repassword\" placeholder=\"Retype Password\"><i class=\"icon-lock icon-large\"></i></p><p class=\"submit\"><button type=\"submit\" name=\"submit\"><i class=\"icon-arrow-right icon-large\"></i></button></p></form>";
			    document.getElementById("registrationButton").innerHTML="<img src='images/loginButton.png'  style=\"width:100px;height: 26px;\"  />";
			    
			    x=0; 
			}
			document.getElementById("formButton").innerHTML=output;
		    }
		    
		</script>
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
	
	
	<div style="display:none"><div id="data">
	    <table style="margin-left: 20px;">
		<tr><td  style="padding-right:30px;"  valign="top">
		<div id="headerText"><center><h2>Login</h2></center></div>
		
		<div id="formButton">
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
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    </div>
	    <table><tr><td style="padding-right:10px;padding-left:10px"><a href="#"><img src="images/fbloginButton1.png" style="width:72px" /></a></td>
	    <td style="padding-right:10px"><a href="#"><img src="images/googleLoginButton.png" style="width:100px" /></a></td>
	    <td><a href="#" onclick="doChange()" id="registrationButton"><img src="images/registration.gif" style="width:100px;height: 26px;" /></a></td>
	    
	    </tr></table>
	   
	    </td></tr>
	    </table>
	    
	</div></div>
	<script>
		    
		    $("a#inline").fancybox({
		'openEffect'	:	'fade',
		'transitionOut'	:	'elastic',
		'openSpeed '		:	1600, 
		'speedOut'		:	1200, 
		'overlayShow'	:	true,
		'hideOnContentClick': true
	});
		$('.fancybox-inner').width(500);    
		</script>
    </body>
</html>