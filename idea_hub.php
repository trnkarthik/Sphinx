<html lang="en">
    <head>
	
	<?php include("includes/meta_details.php"); ?>
        
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
        <link rel="stylesheet" type="text/css" href="css/products_support_for_quicksand.css" />

        <script type="text/javascript" src="js/jquery.quicksand.js" ></script>
        <link rel="stylesheet" type="text/css" href="css/style_alt.css" />
        
        <style>
        

/*
#search {

}

#search input[type="text"] {
    background: url(search-white.png) no-repeat 10px 6px #fcfcfc;
    border: 1px solid #d1d1d1;
    font: bold 12px Arial,Helvetica,Sans-serif;
    color: #bebebe;
    width: 150px;
    padding: 6px 15px 6px 35px;
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    border-radius: 20px;
    text-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15) inset;
    -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15) inset;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15) inset;
    -webkit-transition: all 0.7s ease 0s;
    -moz-transition: all 0.7s ease 0s;
    -o-transition: all 0.7s ease 0s;
    transition: all 0.7s ease 0s;
    }

#search input[type="text"]:focus {
    width: 200px;
    }
*/
    </style>

   </head>
	
	
	
    <body>
	
	<?php include("includes/header.php");?>
	
    <div class="container">
	<?php   include("includes/idea_hub_ideas.php");  ?>
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
    	<?php 	include("includes/home_footer.php");	?>

    </html>