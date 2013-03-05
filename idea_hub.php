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


                        <!--
                        <script src="js/jquery-1.9.1.js"></script> -->
                        <script src="js/jquery-ui-1.10.1.custom.js"></script>
                        <!-- jmpress plugin -->
                        <script type="text/javascript" src="js/jmpress.min.js"></script>
                        <!-- jmslideshow plugin : extends the jmpress plugin -->
                        <script type="text/javascript" src="js/jquery.jmslideshow.js"></script>
                        <script type="text/javascript" src="js/modernizr.custom.48780.js"></script>

                        <script type="text/javascript" src="fancybox/source/jquery.fancybox.js"></script>
                        <script type="text/javascript" src="fancybox/source/jquery.easing-1.3.pack.js"></script>
                        <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
                        <script type="text/javascript" src="js/jquery.quicksand.js" ></script>
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




                            <div class="headline"></div>
                                <div class="container">
                                    <?php
                                    include("includes/connect.php");
                                    ?>
                                    <link href="css/ui-lightness/jquery-ui-1.10.1.custom.css" rel="stylesheet">
                                        <form id="filter">

                                            <div id="radio">
                                                <fieldset>
                                                    <input type="radio" name="radio1" id="radio1" filters="type" value="all" checked="checked"  /><label for="radio1">Everything</label>
                                                    <input type="radio" name="radio1" id="radio2" filters="type" value="Application" /><label for="radio2">Applications</label>
                                                    <input type="radio" name="radio1" id="radio3" filters="type" value="Game" /><label for="radio3">Games</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="radio" id="radio4" name="sort" filters="sort" value="like" /><label for="radio4">Size</label>
                                                    <input type="radio" id="radio5" name="sort" filters="sort" value="name" /><label for="radio5">Name</label>
                                                </fieldset>
                                            </div>
                                            <script>
  
                                                $( "#radio" ).buttonset();
                                            </script>
                                        </form>


                                        <ul id="applications" class="image-grid clearfix ">
                                            <li data-type="Game" data-id="1">
                                                <h3 class="title">Z-Idea title</h3>
                                                <p class="idea_desc">desc..</p>
                                                <p class ="author">Author</p>
                                                <span class="like_count" data-type="like">125</span>
                                                <ul>
                                                    <li class="comment">
                                                        <p class="comment_author">author</p>
                                                        <p class="comment_content">Comment</p>
                                                    </li>
                                                    <li class="comment">
                                                        <p class="comment_author">author</p>
                                                        <p class="comment_content">Comment</p>
                                                    </li>
                                                    <li class="comment">
                                                        <p class="comment_author">author</p>
                                                        <p class="comment_content">Comment</p>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                               <li data-type="Game" data-id="2">
                                                <h3 class="title">E-Idea title</h3>
                                                <p class="idea_desc">desc..</p>
                                                <p class ="author">Author</p>
                                               <span class="like_count" data-type="like">10</span>
                                                <ul>
                                                    <li class="comment">
                                                        <p class="comment_author">author</p>
                                                        <p class="comment_content">Comment</p>
                                                    </li>
                                                    <li class="comment">
                                                        <p class="comment_author">author</p>
                                                        <p class="comment_content">Comment</p>
                                                    </li>
                                                    <li class="comment">
                                                        <p class="comment_author">author</p>
                                                        <p class="comment_content">Comment</p>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                             <li data-type="Application" data-id="3">
                                                <h3 class="title">C-Idea title</h3>
                                                <p class="idea_desc">desc..</p>
                                                <p class ="author">Author</p>
                                                <span class="like_count" data-type="like">1110</span>
                                                <ul>
                                                    <li class="comment">
                                                        <p class="comment_author">author</p>
                                                        <p class="comment_content">Comment</p>
                                                    </li>
                                                    <li class="comment">
                                                        <p class="comment_author">author</p>
                                                        <p class="comment_content">Comment</p>
                                                    </li>
                                                    <li class="comment">
                                                        <p class="comment_author">author</p>
                                                        <p class="comment_content">Comment</p>
                                                    </li>
                                                </ul>
                                            </li>
                                          
                                        </ul>
                                           
                                            </div>

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
                                                        if ($('#filter input[name="sort"]:checked').val() == "like") {
                                                            var $sortedData = $filteredData.sorted({
                                                                by: function(v) {
                                                                    return parseFloat($(v).find('.like_count[data-type=like]').text());
                                                                }
                                                            });
                                                        } else {
                                                            // if sorted by name
                                                            var $sortedData = $filteredData.sorted({
                                                                by: function(v) {
                                                                    return $(v).find('h3.title').text().toLowerCase();
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




                                            <?php
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