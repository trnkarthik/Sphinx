
<?php
include("connect.php");
?>
<link href="css/ui-lightness/jquery-ui-1.10.1.custom.css" rel="stylesheet">

<style>
    .image-grid li{
        background: none repeat scroll 0 0 rgba(255, 255, 255, 0.5);
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
   #sphinx_search{
        position: relative;
        top: 40px;
        left: 38.5%;
    }
</style>

<?php include("sphinx_search.php")?>

<div id="radio">

    <form id="filter">
        <fieldset id="filter_by_sort">
            <input type="radio" id="radio4" name="sort" filters="sort" value="rating" checked="checked"/><label for="radio4"
                                                                                                                style="border-bottom-left-radius: 5px;
                                                                                                                border-top-left-radius: 5px;"
                                                                                                                >Rating</label>
            <input type="radio" id="radio5" name="sort" filters="sort" value="name"/><label for="radio5">Name</label>
        </fieldset>
</div>
<script>
  
    $( "#radio" ).buttonset();
</script>
</form>


<ul id="applications" class="image-grid clearfix ">
    <?php
    //

    $query = "Select * from sp_ideas";
    $result = mysql_query($query);

    for ($i = 0; $row = mysql_fetch_array($result, MYSQL_NUM); $i++) {
        ?>	
        <li data-id="id-<?php echo $i ?>" data-type="<?php echo 'idea' ?>">
            <a href="idea_desc.php?idea_id=<?php echo $row[0] ?>">
                <strong><?php echo $row[2] ?> 
                    <span class="idea_rating">
                        <?php // echo $row[2] ?>
                    </span>
                </strong>
                <span class="idea_author">
                    by  <?php echo $row[1] ?>
                </span>
                <span class="idea_time">
                 at   <?php echo $row[4] ?>
                </span>
                <div class="product_desc"><?php echo $row[3] ?></span>
            </a>
        </li>
        <?php
    }

    /* 	$query="SELECT * FROM sp_products where visibility=1 ";

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
      } */
    ?>
	



