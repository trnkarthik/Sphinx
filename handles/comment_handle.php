<?php

include("../includes/connect.php");

if (!empty($_POST['comment_submit'])) {

    $idea_id = $_POST['idea_id'];
    $comment = $_POST['comment']; //this wil change
    $author = $_SESSION['author_id']; //this wil change


    $query = "Insert into sp_idea_comments(idea_comment_id, idea_comment_author_id, idea_comment,idea_id, 
        idea_comment_datetime) ";
    $query .= "values(null, '$author' ,'$comment', $idea_id, now() )";
    echo $query;
    $result = mysql_query($query);
    if(!$result){
        
    }  else {
        
    }
}
?>
