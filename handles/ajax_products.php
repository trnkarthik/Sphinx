<?php
include("../includes/connect.php");
?>
<?php
/* 
 * A get request to this file should have the "limit", "order" and "attr" attributes along with the request.
 */
    $UPPER_LIMIT=15;
    $limit=$_GET['limit'];
    $order=$_GET['order'];
    $attr=$_GET['attr'];
    $search = $_GET['search'];
    
     $query = "SELECT a.idea_id ,a.idea_author_id,a.idea_title as title,a.idea_description,
        a.idea_datetime ,count(b.idea_id) as rating
        FROM `sp_ideas` a 
        left join `sp_idea_ratings` b on  a.idea_id=b.idea_id ";
     if(isset($search)){
         $query .= " where a.idea_title like '%$search%' ";
     }
    
      $query .=  "group by b.idea_id
        order by $attr $order limit $limit,$UPPER_LIMIT";
//     echo $query;
    $result = mysql_query($query);
//    $temp = mysql_result($result, 0);
//   // echo mysql_num_rows($result);
//
//    echo $temp;
    while( $row = mysql_fetch_array($result)) {
        ?>	
        <li data-id="id-<?php echo $row[0] ?>" data-type="<?php echo 'idea' ?>">
            <a href="idea_desc.php?idea_id=<?php echo $row[0] ?>">
                <strong><?php echo $row[2] ?> 
                    <span class="idea_rating">
                        <?php echo $row[5] ?>
                    </span>
                </strong>
                <span class="idea_author">
                    by  <?php echo $row[1] ?>
                </span>
                <span class="idea_time">
                    at   <?php echo $row[4] ?>
                </span>
                <div class="idea_desc"><?php echo $row[3] ?></span>
            </a>
        </li>
        <?php
    }

?>
