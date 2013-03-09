<html>
    
    <head>
        
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<!--
	<script src="js/jquery-1.9.1.js"></script> -->
	<script src="js/jquery-ui-1.10.1.custom.js"></script>

<script src="js/jquery.roundabout.js"></script>

<script>
   $(document).ready(function() {
      $('.gallery_ul').roundabout();
   });
</script>

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
      width: 200px;
      height: 200px;
   }
   .roundabout-in-focus {
      cursor: auto;
   }
   .gallery_ul{
        padding: 0px;
        position: relative;
        top: 139px;
	margin-left: auto;
	margin-right: auto;
   }
</style>

        
    </head>
    <body>
        
    <ul class="gallery_ul">
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
    </ul>
        
        
        
    </body>
    
    
</html>

        


