  <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
    
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>	
    
    <?php include("includes/meta_details.php"); ?>
    
    <?php
    //database connection
    include("includes/connect.php");
    
    //retreiving product id
    $id= $_GET['product_id'];
    
    ?>
    
    
    <link rel="stylesheet" type="text/css" href="css/style_alt.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <!--
    <script src="js/jquery-1.9.1.js"></script> -->
    <script src="js/jquery-ui-1.10.1.custom.js"></script>
    <link rel="stylesheet" href="css/prod_desc_style.css" type="text/css" media="screen"/>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/sliding.form.js"></script>
    
    <link rel="stylesheet" type="text/css" media="screen" href="./css/coda-slider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
   
   <!--Coda slider add-ons -->
    <script src="./js/jquery-1.7.2.min.js"></script>
    <script src="./js/jquery-ui-1.8.20.custom.min.js"></script>
    <script src="./js/jquery.coda-slider-3.0.min.js"></script>
    <script>
        $(function(){
            $('#slider-id').codaSlider({
            autoSlide:false,
            autoHeight:false,
            slideEaseDuration:1500,
            dynamicArrows:false,
            dynamicTabs:false,
            //slideEaseFunction:"linear",
          });
        });
    </script>
    <style>
	#sphinx_search {
	    position: relative;
	    top: 10px;
	    }
	#slider-id{
	    -moz-box-shadow: 3px 3px 3px #ccc;
	    -webkit-box-shadow: 3px 3px 3px #ccc;
	    box-shadow: 3px 3px 3px #ccc;
	}
    </style>
    
    <!--Water wheeler add-ons -->   
    <script type="text/javascript" src="js/jquery.waterwheelCarousel.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        var carousel = $("#carousel").waterwheelCarousel({
          flankingItems: 1,
	  separation:150,
	  //sizeMultiplier:0.2,
	  opacityMultiplier:0.4,
	  autoPlay:3000,
	  //orientation:'vertical',
	  keyboardNav:true,
	  preloadImages:false,
	  forcedImageWidth:300,
	  forcedImageHeight:400,
          clickedCenter: function ($item) {
            alert("center clicked!");
            $('#callback-output').prepend('clickedCenter: ' + $item.attr('id') + '<br/>');
          }
        });

        $('#prev').bind('click', function () {
          carousel.prev();
          return false
        });

        $('#next').bind('click', function () {
          carousel.next();
          return false;
        });

        $('#reload').bind('click', function () {
          newOptions = eval("(" + $('#newoptions').val() + ")");
          carousel.reload(newOptions);
          return false;
        });

      });
    </script>

    <style type="text/css">
      body {
        font-family:Arial;
        font-size:12px;
        background:#ededed;
      }
      .example-desc {
        margin:3px 0;
        padding:5px;
      }

      #carousel {
        width:660px;
        border:0px solid #222;
        height:450px;
        position:relative;
        clear:both;
        overflow:hidden;
        background:#FFF;
	margin-left: auto;
	margin-right: auto;
      }
      #carousel img {
        visibility:hidden; /* hide images until carousel can handle them */
        cursor:pointer; /* otherwise it's not as obvious items can be clicked */
	background: white;
	border: 1px solid #ccc;
	-moz-box-shadow: 2px 2px 2px #ccc;
	-webkit-box-shadow: 2px 2px 2px #ccc;
	box-shadow: 2px 2px 2px #ccc;
      }
      .carousel-links {
	position: relative;
	left: 90%;
	}
      .split-left {
        width:450px;
        float:left;
      }
      .split-right {
        width:400px;
        float:left;
        margin-left:10px;
      }
      #callback-output {
        height:250px;
        overflow:scroll;
      }
      textarea#newoptions {
        width:430px;
      }
    </style>
    
   <script src="js/jquery.expander.min.js"></script>

   <script>
    // you can override default options globally, so they apply to every .expander() call
$.expander.defaults.slicePoint = 250;

$(document).ready(function() {
  // simple example, using all default options unless overridden globally
  //$('.comments_expand').expander();

  // *** OR ***

  // override default options (also overrides global overrides)
    $('.comments_expand').expander({
	slicePoint:       200,  // default is 100
	expandPrefix:     '...', // default is '... '
	expandText:       'show more', // default is 'read more'
	collapseTimer:    5000, // re-collapses after 5 seconds; default is 0, so no re-collapsing
	userCollapseText: 'show less',  // default is 'read less'
	preserveWords: true,
	moreClass: 'read-more',
	lessClass: 'read-less',
	});
    });

   </script>
    <style>
	.read-more,.read-less,.comments_expand a{
	    color:red;
	}
    </style>
    </head>
    <body>
    <?php include("includes/header.php");?>
          <div id="mini_topbar">
	<?php include("includes/sphinx_search.php")?>
      </div>

    <div id="main_content">    
	
	
	<div id="slider-id-wrapper" class="coda-slider-wrapper">
	    <div class="coda-nav">
		<ul>
		  <li class="tab1"><a href="#1" title="Description">Description</a></li>
		  <li class="tab2"><a href="#2" title="Screen Shots">Screen Shots</a></li>
		  <li class="tab3"><a href="#3" title="Reviews">Reviews</a></li>
		</ul>
	    </div>
         
	    <div class="coda-slider"  id="slider-id" style="min-height: 1000px">  
	     
	        <div>
		    <h2 class="title">Description</h2>
		    <p>
			
			<?php
			    $desc_query = "select sp_products.desc from sp_products where id ='$id'";
			    $desc_query_result = mysql_query($desc_query);
			    $desc_result = mysql_result($desc_query_result,0);
			    echo $desc_result;
			?>
			
		    </p>
		</div>
		
		<div>
		    <h2 class="title">Screen Shots</h2>
		    <p>
			
			<div id="carousel">
			    
			    <?php
			    $image_query = "select sp_products_media.url from sp_products_media where product_id ='$id'";
			    //echo $image_query;
			    $image_query_result = mysql_query($image_query);
			    $noofrows=mysql_numrows($image_query_result);
			    if($noofrows>0)
			    {
			    $i = 1;
			    while($image_row = mysql_fetch_array($image_query_result))
			    {
				$url = "images/".$id."/".$image_row[0];
				$item_id = "item-".$i;
				echo "<img src='$url' id='$item_id'/>";
				$i++; 
			    }
			    }
			    else
			    {
			      echo "<center><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><h3>No Images Found</h3></center>";
			    }
			    ?>
			    
			    <!--
			    <img src="images/1.png" id="item-1" />
			    <img src="images/2.png" id="item-2" />
			    -->
			    
			</div>
			<div class="carousel-links">
			    <a href="#" id="prev">Prev</a> | <a href="#" id="next">Next</a>    
			</div>
		    </p>
		</div>
		
		<div style="max-height: 950px;">
		    <h2 class="title">Reviews</h2>
		    
		    <div id="post_comment">
			<div class="">
			    <p>
				Post Comment Box Comes Here...
			    </p>
			</div>
			
		    </div>
		    
		    <div id="reviews" >
			
			<?php
			$reviews_query = "select review,review_author_id,review_datetime from sp_product_reviews where product_id ='$id'";
			$reviews_query_result = mysql_query($reviews_query);
			$no_of_reviews = mysql_numrows($reviews_query_result);
			
			//echo $no_of_reviews;
			
			while($row = mysql_fetch_array($reviews_query_result))
			{
			    $user_profile_image_query = "select user_profile_pic from sp_user_details where user_id='$row[1]'";
			    //echo $user_profile_image_query;
			    $user_profile_image_result = mysql_query($user_profile_image_query);
			    $user_profile_image = mysql_result($user_profile_image_result,0);
			    
			    $user_name_query = "select user_name from sp_user_login where user_id='$row[1]'";
			    //echo $user_name_query;
			    $user_name_result = mysql_query($user_name_query);
			    $user_name = mysql_result($user_name_result,0);
			    
			    echo "<div class='comment_data'>";
			    //echo "<img src='".$user_profile_image."' width=50px height=50px>";
			    echo "<div class='user_name_display'><b>".$user_name."</b> at $row[2] <i>wrote</i></div>";
			    echo "<div class='comments_expand'>".$row[0]."</div>";
			    echo "</div>";
			}
			?>
			
		    </div>
		    
		</div>
		
	    </div>
	
    </div>

    
    <div id="prod_desc_left_bar">
		
	<div id="left_bar_prod_image">
		    
	</div>
		
	    </div>
    </div>
    
  </body>
</html>
