
<?php
include("includes/connect.php");
?>
<?php
$query="SELECT * FROM sp_ideas where idea_id='".$_GET['idea_id']."' ";
	//echo $query;
	$result = mysql_query($query);
	
	for ($i=0; $row = mysql_fetch_array($result, MYSQL_NUM); $i++) {
	
	?>	
   <li data-id="id-<?php echo $i ?>" data-type="<?php echo 'idea' ?>">
            
                <strong><?php echo $row[2] ?> 
                    <span class="idea_rating">
                        <?php // echo $row[2] ?>
                    </span>
                </strong>
                <span class="idea_author">
                    by  <?php echo $row[1] ?>
                </span>
                <span class="idea_time">
                  at  <?php echo $row[4] ?>
                </span>
                <div class="product_desc"><?php echo $row[3] ?></span>
           
        </li>
    <?php
        }
        ?>
 <br/><br/><br/>
    <form action="idea_handle.php" method="post">
        <label for="idea_title">Idea Title</label>
        <input type="text" name="idea_title" />
        <textarea name="idea">Idea Description</textarea>
        <input type="submit" name="idea_submit" />
    </form>