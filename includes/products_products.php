
<?php
include("connect.php");
?>
<link href="css/ui-lightness/jquery-ui-1.10.1.custom.css" rel="stylesheet">
   
   <style>
      .image-grid li{
	 background: none repeat scroll 0 0 rgba(255, 255, 255);
	 border-radius: 5px 5px 5px 5px;
	 box-shadow: 4px 4px rgba(0, 0, 0, 0.05);
	 margin-bottom: 2.8125%;
	 position: relative;
         text-align: center;
	 top: 20px;
	 width: 270px;
	 height: 272px;
   	 background: rgb(255, 255, 255);
	 border: 1px solid rgb(231, 231, 231);
      }
      .clearfix{
         display: block;
	 margin-left: auto;
	 margin-right: auto;
      }
      #filter_by_type{
	 position: relative;
	 top: 40px;
	 left: 38.5%;
	 width: 23%;
	 border: 0px;
      }
      #filter_by_sort{
	 position: relative;
	 top: 6px;
	 left: 80%;
	 width: 20%;
	 border: 0px;
      }
      .product_desc{
	 padding: 15px;
      }
      .more_desc{
	 padding: 15px;
      }
   </style>
   
 <form id="filter">
 
    <div id="radio">
      <fieldset id="filter_by_type">
	 <input type="radio" name="radio1" id="radio1" filters="type" value="all" checked="checked"  /><label for="radio1">All Products</label>
	 <input type="radio" name="radio1" id="radio2" filters="type" value="Application" /><label for="radio2">Applications</label>
	 <input type="radio" name="radio1" id="radio3" filters="type" value="Game"/><label for="radio3"
		  style="border-bottom-right-radius: 5px;
		  border-top-right-radius: 5px;"
		  >Games</label>
      </fieldset>
 
      <fieldset id="filter_by_sort">
	 <input type="radio" id="radio4" name="sort" filters="sort" value="size" checked="checked"/><label for="radio4"
		  style="border-bottom-left-radius: 5px;
		  border-top-left-radius: 5px;"
	 >Size</label>
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
	 	 <strong><?php echo $row[1] ?></strong>
	 <img src="<?php echo $row[4] ?>" width="128" height="128" alt="" />
	 <div data-type="size" class="product_desc"><?php echo $row[2] ?></span>
	 </a>
    </li>
	<?php 
    }
    	?>
	

    
 
