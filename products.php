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
        
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<!--
<script src="js/jquery-1.9.1.js"></script> -->
	<script src="js/jquery-ui-1.10.1.custom.js"></script>
        
        <!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="css/style_ie.css" />
		<![endif]-->
		<!-- jQuery -->
		
		<!-- jmpress plugin -->
		<script type="text/javascript" src="js/jmpress.min.js"></script>
		<!-- jmslideshow plugin : extends the jmpress plugin -->
		<script type="text/javascript" src="js/jquery.jmslideshow.js"></script>
		<script type="text/javascript" src="js/modernizr.custom.48780.js"></script>
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
 <link rel="stylesheet" type="text/css" href="css/demo.css" />

<style>
    
    /*-------------------------
    Simple reset
--------------------------*/


*{
    margin:0;
    padding:0;
}


/*-------------------------
    General Styles
--------------------------*/


html{
    background: url('../img/bg_tile.jpg') #18222b;
}

body{
    color:#fcfcfc;
    font:14px/1.3 'Segoe UI',Arial, sans-serif;
    min-height: 930px;
   
}

a, a:visited {
    text-decoration:none;
    outline:none;
    color:#54a6de;
}

a:hover{
    text-decoration:underline;
}


/*----------------------------
    Headers & Footers
-----------------------------*/


header{
    background:url('../img/header.png') repeat-x;
    display: block;
    height: 220px;
    padding: 10px;
}

h1{
    background:url('../img/logo.png') no-repeat center center;
    height: 80px;
    margin: 75px auto;
    overflow: hidden;
    text-align: center;
    text-indent: -99999px;
}



/*----------------------------
    Green filter bar
-----------------------------*/


/*----------------------------
    Content area
-----------------------------*/


#container{
    display:block;
    overflow:hidden;
    width: 830px;
    margin:0 auto;
}

#container li{

    float: left;
    height: 96px;
    list-style: none outside none;
    margin: 6px;
    position: relative;
    width: 125px;
    
    -moz-box-shadow: 0 0 5px #000;
    -webkit-box-shadow: 0 0 5px #000;
    box-shadow: 0 0 5px #000;
}

#container ul{
    overflow:hidden;
}

#container ul.hidden{
    display:none;
}


/*----------------------------
    The Footer
-----------------------------*/


footer{
    display:block;
    background-color:#13181d;
    position:fixed;
    width:100%;
    height:70px;
    bottom:0;
    left:0;
    z-index: 100000;
}

footer h2{
    font-size:20px;
    font-weight:normal;
    left:50%;
    margin-left:-400px;
    padding:22px 0;
    position:absolute;
    width:400px;
    color:#eee;
}

footer a.tzine,a.tzine:visited{
    background:url("../img/tzine.png") no-repeat right top;
    border:none;
    text-decoration:none;
    color:#FCFCFC;
    font-size:12px;
    height:70px;
    left:50%;
    line-height:31px;
    margin:23px 0 0 110px;
    position:absolute;
    top:0;
    width:290px;
}

/*Quick sand css*/

.image-grid {
width: 840px;
}
.image-grid li {
width: 128px;
margin: 20px 0 0 35px;
float: left;
text-align: center;
font-family: "Helvetica Neue",sans-serif;
line-height: 17px;
color: #686f74;
height: 177px;
overflow: hidden;
}
.image-grid li img, .image-grid li strong {
display: block;
}
.image-grid li strong {
color: rgba(10, 0, 0, 0.78);
}
li strong {
display: block;
}
strong {
font-weight: 400;
color: #fff;
text-shadow: rgba(255,255,255,0.85) 0 0 3px;
}
.image-grid li {
text-align: center;
font-family: "Helvetica Neue",sans-serif;
line-height: 17px;
color: #686f74;
}
.clearfix:after {
	content: ".";
	display: block;
	clear: both;
	visibility: hidden;
	line-height: 0;
	height: 0;
}
 
.clearfix {
	display: inline-block;
}
 
html[xmlns] .clearfix {
	display: block;
}
 
* html .clearfix {
	height: 1%;
}


.button {
background-color: #46c5ec;
color: #282b2e;
padding: 5px 10px;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
border: 0;
text-decoration: none;
}
a{
    text-decoration: none;
    
}
    
 .button:hover, .button:focus {
background-color: #ededed;
color: #282b2e;
}
a:hover, a:focus {
    text-decoration: none;


}
fieldset {
border: 0px solid #c0c0c0;
}
.image-grid li:hover,.image-grid li:focus{
  
}
</style>


<script type="text/javascript" src="js/jquery.quicksand.js" ></script>
<link rel="stylesheet" type="text/css" href="css/style_alt.css" />
   </head>
	
	
	
    <body>
	
	
	<?php include("includes/header.php");?>
	
    <div class="container">
	<?php   include("includes/products_products.php");  ?>
</ul>

<!-- This code has to be copied to another JS file-->
<script>
    
    
    // Custom sorting plugin
(function($) {
  $.fn.sorted = function(customOptions) {
    var options = {
      reversed: false,
      by: function(a) { return a.text(); }
    };
    $.extend(options, customOptions);
    $data = $(this);
    arr = $data.get();
    arr.sort(function(a, b) {
      var valA = options.by($(a));
      var valB = options.by($(b));
      if (options.reversed) {
        return (valA < valB) ? 1 : (valA > valB) ? -1 : 0;				
      } else {		
        return (valA < valB) ? -1 : (valA > valB) ? 1 : 0;	
      }
    });
    return $(arr);
  };
})(jQuery);

// DOMContentLoaded
$(function() {

  // bind radiobuttons in the form
  var $filterType = $('#filter input[filters="type"]');
  var $filterSort = $('#filter input[filters="sort"]');

  // get the first collection
  var $applications = $('#applications');

  // clone applications to get a second collection
  var $data = $applications.clone();

  // attempt to call Quicksand on every form change
  $filterType.add($filterSort).change(function(e) {
    if ($($filterType+':checked').val() == 'all') {
      var $filteredData = $data.find('li');
    } else {
      var $filteredData = $data.find('li[data-type=' + $($filterType+":checked").val() + ']');
    }

    // if sorted by size
    if ($('#filter input[name="sort"]:checked').val() == "size") {
      var $sortedData = $filteredData.sorted({
        by: function(v) {
          return parseFloat($(v).find('span[data-type=size]').text());
        }
      });
    } else {
      // if sorted by name
      var $sortedData = $filteredData.sorted({
        by: function(v) {
          return $(v).find('strong').text().toLowerCase();
        }
      });
    }   

    // finally, call quicksand
    $applications.quicksand($sortedData, {
      duration: 800,
      easing: 'swing'
    });

  });

});

</script>
 </div>
			
	
	
    </body>
</html>