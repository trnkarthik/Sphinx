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


    </head>

    <body>

        <?php include("includes/header.php"); ?>

        <div class="container">
            <?php include("includes/idea_hub_ideas.php"); ?>
        </ul>
        <a href="#" class="more_results" data-next="0" >More...</a>
        <!-- This code has to be copied to another JS file-->
        <script>    
      
          
            $('#filter_by_sort input[filters="sort"]')
            .add($('#sort_order input[filters="order"]'))
            .change(function(){
                $.get("handles/ajax_products.php",
                {
                    limit: $("a.more_results[data-next]").attr("data-next") ,
                    order: $("#sort_order input[type=radio]:checked").val(),
                    attr: $("#filter_by_sort input[type=radio]:checked").val(),
                    search: $("#search_box").val()
                },function(data){
                    $("#applications").quicksand($(data), {
                        duration: 800,
                        easing: 'swing'
                    });
                });
            });
            $("#search_box").keyup(function (){
                 $.get("handles/ajax_products.php",
                {
                    limit: $("a.more_results[data-next]").attr("data-next") ,
                    order: $("#sort_order input[type=radio]:checked").val(),
                    attr: $("#filter_by_sort input[type=radio]:checked").val(),
                    search: $("#search_box").val()
                },function(data){
                    $("#applications").quicksand($(data), {
                        duration: 400,
                        easing: 'swing'
                    });
                });
            });
            //            $("a.more_results[data-next]").click(function(){
            //                call;
            //                $(this).attr(data-next, $(this).attr(data-next)+ 15);
            //            });
  
    
            //    // Custom sorting plugin
            //    (function($) {
            //    $.fn.sorted = function(customOptions) {
            //    var options = {
            //      reversed: false,
            //      by: function(a) { return a.text(); }
            //    };
            //    $.extend(options, customOptions);
            //    $data = $(this);
            //    arr = $data.get();
            //    arr.sort(function(a, b) {
            //      var valA = options.by($(a));
            //      var valB = options.by($(b));
            //      if (options.reversed) {
            //        return (valA < valB) ? 1 : (valA > valB) ? -1 : 0;				
            //      } else {		
            //        return (valA < valB) ? -1 : (valA > valB) ? 1 : 0;	
            //      }
            //    });
            //    return $(arr);
            //    };
            //    })(jQuery);
            //
            //    // DOMContentLoaded
            //    $(function() {
            //
            //      // bind radiobuttons in the form
            //      var $filterType = $('#filter input[filters="type"]');
            //      var $filterSort = $('#filter input[filters="sort"]');
            //
            //      // get the first collection
            //      var $applications = $('#applications');
            //    
            //      // clone applications to get a second collection
            //      var $data = $applications.clone();
            //    
            //      // attempt to call Quicksand on every form change
            //      $filterType.add($filterSort).change(function(e) {
            //        if ($($filterType+':checked').val() == 'all') {
            //          var $filteredData = $data.find('li');
            //        } else {
            //          var $filteredData = $data.find('li[data-type=' + $($filterType+":checked").val() + ']');
            //        }
            //    /*......................Changes required here after idea hub is complete...........................*/
            //        // if sorted by size
            //        if ($('#filter input[name="sort"]:checked').val() == "rating") {
            //          var $sortedData = $filteredData.sorted({
            //            by: function(v) {
            //              return parseFloat($(v).find('span[data-type=size]').text());
            //            }
            //          });
            //        } else {
            //          // if sorted by name
            //          var $sortedData = $filteredData.sorted({
            //            by: function(v) {
            //              return $(v).find('strong').text().toLowerCase();
            //            }
            //          });
            //        }   
            //        /*......................Changes required here after idea hub is complete...........................*/
            //    
            //        // finally, call quicksand
            //        $applications.quicksand($sortedData, {
            //          duration: 800,
            //          easing: 'swing',
            //          maxWidth: 0,
            //          useScaling: false
            //        });
            //    
            //      });
            //    
            //    });
            //    
        </script>
        <br/><br/><br/>
        <form action="handles/idea_handle.php" method="post">
            <label for="idea_title">Idea Title</label>
            <input type="text" name="idea_title" />
            <textarea name="idea">Idea Description</textarea>
            <input type="submit" name="idea_submit" />
        </form>
    </div>

</body>
<?php include("includes/home_footer.php"); ?>
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

</html>