
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
    <form action="handles/comment_handle.php" method="post">
        <input type="hidden" name="idea_id" value="<?php echo $_GET['idea_id'] ?>" />
        <textarea name="comment">Comment</textarea>
        <input type="submit" name="comment_submit" />
    </form>