<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>

	<?php include("includes/meta_details.php"); ?>
	
	<link rel="stylesheet" type="text/css" href="css/style_alt.css" />

	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
        
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<!--
	<script src="js/jquery-1.9.1.js"></script> -->
	<script src="js/jquery-ui-1.10.1.custom.js"></script>
        
	
        <link rel="stylesheet" href="css/prod_desc_style.css" type="text/css" media="screen"/>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/sliding.form.js"></script>
	
    </head>
    <style>
        span.reference{
            position:fixed;
            left:5px;
            top:5px;
            font-size:10px;
            text-shadow:1px 1px 1px #fff;
        }
        span.reference a{
            color:#555;
            text-decoration:none;
			text-transform:uppercase;
        }
        span.reference a:hover{
            color:#000;
            
        }
        h1{
            color:#ccc;
            font-size:36px;
            text-shadow:1px 1px 1px #fff;
            padding:20px;
        }
	#sphinx_search {
	    position: relative;
	    top: 10px;
	    }
    </style>
    <body>
	    <?php include("includes/header.php");?>

        <div id="main_content">
	    
	    <div id="mini_topbar">
		
		<?php include("includes/sphinx_search.php")?>

		
		
	    </div>
	    
            <div id="wrapper">
		
		<div id="navigation" style="display:none;">
                    <ul>
                        <li class="selected">
                            <a href="#"
			    style = "border-bottom-left-radius: 10px;
				    border-top-left-radius: 10px;"
			    >Description</a>
                        </li>
                        <li>
                            <a href="#">Screen Shots</a>
                        </li>
                        <li>
                            <a href="#"
			    style = "border-bottom-right-radius: 10px;
				     border-top-right-radius: 10px;"
			    >Reviews</a>
                        </li>
                        
                    </ul>
                </div>
		
		
                <div id="steps">
                    <form id="formElem" name="formElem" action="" method="post">
                        <fieldset class="step_prod_desc">
			    Product description comes here.
                        </fieldset>
                        <fieldset class="step_prod_desc">
                            
			    ScreenShots comes here.Use apple view style plugin for displaying the images.
			    
                        </fieldset>
                        <fieldset class="step_prod_desc">
                            
			    User Reviews comes here
			    
                        </fieldset>
                        
                    </form>
                </div>
                
            </div>
	    
	    <div id="prod_desc_left_bar">
		
		<div id="left_bar_prod_image">
		    
		</div>
		
	    </div>
	    
	    
        </div>
	
	    <?php include("includes/home_footer.php");?>
    </body>
</html>