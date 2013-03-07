
<?php
include("connect.php");
?>
<link href="css/ui-lightness/jquery-ui-1.10.1.custom.css" rel="stylesheet">
   
   <style>
      .image-grid li{
	 background: none repeat scroll 0 0 rgba(255, 255, 255, );
	 border-radius: 5px 5px 5px 5px;
	 box-shadow: 4px 4px rgba(0, 0, 0, 0.05);
	 margin-bottom: 2.8125%;
	 position: relative;
	 text-align: center;
	 top: 0px;
	 width: 75%;
	 height: 115px;
	 background: white;
	 border: 1px solid #E9E9E9;
	 margin: 20px 0 10 35px;
	 float: left;
	 font-family: "Helvetica Neue",sans-serif;
	 color: #686F74;
	 overflow: hidden;
      }
      .clearfix{
	 display: block;
	 margin-left: auto;
	 margin-right: auto;
	 border-left: 1px solid #E9E9E9;
	 position: relative;
	 top: 25px;
	 padding-bottom: 10px;
      }
      #filter_by_type{
	 position: relative;
	 top: 40px;
	 left: 38.5%;
      }
      #filter_by_sort{
	 position: relative;
	 top: 6px;
	 left: 80%;
	 width: 23%;
	 border: 0px;
      }
      .product_desc{
	 padding: 15px;
      }
      .more_desc{
	 padding: 15px;
      }
      
      #search_box {
	 outline-width: 0;
}

#search input[type="text"] {
    background: url(./images/searchicon.png) no-repeat 10px 6px #fcfcfc;
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
    width: 250px;
    }
   </style>
   
      <div id="filter_by_type">
	<form method="get" action="/search" id="search">
		  <input name="q" type="text" size="40" placeholder="Search..." id="search_box"
		  style="-webkit-box-shadow: 3px 3px 3px #ccc;"/>
        </form>	
      </div>

    <div id="radio">
  
  <form id="filter">
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
	 <div data-type="size" class="product_desc"><?php echo $row[2] ?></span>
	 </a>
    </li>
	<?php 
    }
    	?>
	

    
 
