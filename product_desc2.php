<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        
	<?php include("includes/meta_details.php"); ?>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/demo.css" />

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
    </style>
    <body>
        
        <div id="prod_desc_content">
            <div id="prod_desc_wrapper">
		
		  <div id="prod_desc_navigation" style="display:none;">
                    <ul>
                        <li>
                            <a href="#">Account</a>
                        </li>
                        <li>
                            <a href="#">Personal Details</a>
                        </li>
                        <li>
                            <a href="#">Payment</a>
                        </li>
                        <li>
                            <a href="#">Settings</a>
                        </li>
						<li>
                            <a href="#">Confirm</a>
                        </li>
                    </ul>
                </div>		
		
                <div id="steps">
                    <form id="formElem" name="formElem" action="" method="post">
                        <fieldset class="step">
                            <legend>Account</legend>
                            Tab 1
                        </fieldset>
                        <fieldset class="step">
                            <legend>Personal Details</legend>
                            Tab 2
                        </fieldset>
                        <fieldset class="step">
                            <legend>Payment</legend>
                            Tab 3
                        </fieldset>
                        <fieldset class="step">
                            <legend>Settings</legend>
                            Tab 4
                        </fieldset>
			<fieldset class="step">
                            <legend>Confirm</legend>
			    Tab 5
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>