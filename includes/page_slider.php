<style>
    
#slide_img{
width: 30px;
height: 35px;
background: #FFF;
}
#sidebar_arrow_style{
    position: fixed;
    top: 15px;
    right: 0;
    z-index: 99999;
}

</style>

    <div id="slide_div">
	<link rel="stylesheet" type="text/css" href="css/jquery.pageslide.css" />
        
	
		<div id="sidebar_arrow_style">
                <a href="includes/second.php" class="first">
		<img src="images/left_slider.png" id="slide_img">
		</a>
		</div>
           
    </div>
   
    <script src="js/jquery.pageslide.min.js"></script>
    <script>
        /* Default pageslide, moves to the right */
        $(".first").pageslide({ direction: 'left'});
        
    </script>

