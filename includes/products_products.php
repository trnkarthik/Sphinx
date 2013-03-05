
<?php
include("connect.php");
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
    <input type="radio" id="radio4" name="sort" filters="sort" value="size" checked="checked"/><label for="radio4">Size</label>
    <input type="radio" id="radio5" name="sort" filters="sort" value="name"/><label for="radio5">Name</label>
    </fieldset>
</div>
    <script>
  
    $( "#radio" ).buttonset();
  </script>
</form>


<ul id="applications" class="image-grid clearfix ">
<?php
	$query="SELECT * FROM sp_products where visibility=1 ";
	
	$result = mysql_query($query);
	
	for ($i=0; $row = mysql_fetch_array($result, MYSQL_NUM); $i++) {
	
	?>	
    <li data-id="id-<?php echo $i ?>" data-type="<?php echo $row[8] ?>">
    <a href="product_desc.php?product_id=<?php echo $row[0]?>"> 
    <img src="<?php echo $row[4] ?>" width="128" height="128" alt="" />
    <strong><?php echo $row[1] ?></strong>
    <span data-type="size"><?php echo $row[2] ?></span>
    </a>
    </li>
	<?php 
    }
    	?>
	

    
 
