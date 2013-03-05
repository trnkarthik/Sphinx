
<?php
include("includes/connect.php");
?>
<?php
$query="SELECT * FROM sp_products where visibility=1 and id='".$_GET['product_id']."' ";
	//echo $query;
	$result = mysql_query($query);
	
	for ($i=0; $row = mysql_fetch_array($result, MYSQL_NUM); $i++) {
	
	?>	
    <li data-id="id-<?php echo $i ?>" data-type="<?php echo $row[8] ?>">
    
    <p><img src="<?php echo $row[4] ?>" width="128" height="128" alt="" /></p>
    <p><strong><?php echo $row[1] ?></strong></p>
    <p><span data-type="size"><?php echo $row[2] ?></span></p>
    
    <p><span><?php echo $row[2]?></span></p>
    <p><span><?php echo $row[3]?></span></p>
    <p><span><?php echo $row[5]?></span></p>
    <p><span><?php echo $row[6]?></span></p>
    <p><span><?php echo $row[7]?></span></p>
    
    </li>
    <?php
        }
        ?>