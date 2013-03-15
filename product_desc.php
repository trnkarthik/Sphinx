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
    
    <link rel="stylesheet" type="text/css" media="screen" href="./css/coda-slider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
   
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
	#pre_steps{
            -moz-box-shadow: 3px 3px 3px #ccc;
	    -webkit-box-shadow: 3px 3px 3px #ccc;
	    box-shadow: 3px 3px 3px #ccc;
	    border: 1px solid #E9E9E9;
	    }
	#roundabout_panel{
	    position: relative;
	    top: 10px;
	    left: 10px;
	    width: 100px;
	    height: 100px;
	    background: red;
	}

    </style>
    
    <style>
   .roundabout-holder {
      list-style: none;
      padding: 0;
      margin: 0;
      height: 5em;
      width: 5em;
   }
   .roundabout-moveable-item {
      height: 4em;
      width: 4em;
      cursor: pointer;
      background-color: #ccc;
      border: 1px solid #999;
   }
   .roundabout-in-focus {
      cursor: auto;
   }
    .gallery_ul{
        position: relative;
        top: 10px;
	left: 200px;
   }
   .roundabout_gallery_style{
    width: 0px;
height: 0px;
border: 1px solid #CCC;
position: absolute;
left: 32px;
top: 32px;
opacity: 1;
z-index: 280;
font-size: 13px;    
   }
   .roundabout-moveable-item img {
}

</style>
    
    
    
<script src="js/jquery.roundabout.js"></script>


<script>
  /*
   $(document).ready(function() {
      $('.gallery_ul').roundabout();
   });
   */
   $(document).ready(function() {
      $('.gallery_ul').roundabout({
	 shape: "lazySusan",
	 duration:900,
	 //tilt:'5',
	 focusBearing:'0.0',
	 clickToFocus : true,
	 autoplay:false,
	// autoplayDuration:2000,
	// autoplayPauseOnHover:true,
	tilt: 0,
      });
   });

</script>
    
    
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
     
     
     
     
    <div class="coda-slider"  id="slider-id">  
      <div>
        <h2 class="title">Description</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Sed volutpat ante id mauris laoreet vestibulum. Nam blandit felis non neque cursus aliquet. Morbi vel enim dignissim massa dignissim commodo vitae quis tellus. Nunc non mollis nulla. Sed consectetur elit id mi consectetur bibendum. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Etiam suscipit nisl eget lorem pellentesque quis iaculis mi mattis. Aliquam sit amet purus lectus. Maecenas tempor ornare sollicitudin.</p>
      </div>
      <div>
        <h2 class="title">Screen Shots</h2>
        <p>
	    
	    
    
		<ul class="gallery_ul" >
		<li class="roundabout_gallery_style">
		    <img src="images/1.png" style="background: red">
		</li>
		<li class="roundabout_gallery_style">
		    <img src="images/2.png" style="background: blue">
		</li>
		<li class="roundabout_gallery_style">
		    <img src="images/3.png" style="background: green">
		</li>
		
		</ul>
	
	    
	    
	</p>
      </div>
      <div>
        <h2 class="title">Reviews</h2>
        <p>Cras luctus fringilla odio vel hendrerit. Cras pulvinar auctor sollicitudin. Sed lacus quam, sodales sit amet feugiat sit amet, viverra nec augue. Sed enim ipsum, malesuada quis blandit vel, posuere eget erat. Sed a arcu justo. Integer ultricies, nunc at lobortis facilisis, ligula lacus vestibulum quam, id tincidunt sapien arcu in velit. Vestibulum consequat augue et turpis condimentum mollis sed vitae metus. Morbi leo libero, tincidunt lobortis fermentum eget, rhoncus vel sem. Morbi varius viverra velit vel tempus. Morbi enim turpis, facilisis vel volutpat at, condimentum quis erat. Morbi auctor rutrum libero sed placerat. Etiam ipsum velit, eleifend in vehicula eu, tristique a ipsum. Donec vitae quam vel diam iaculis bibendum eget ut diam. Fusce quis interdum diam. Ut urna justo, dapibus a tempus sit amet, bibendum at lectus. Sed venenatis molestie commodo.</p>
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
