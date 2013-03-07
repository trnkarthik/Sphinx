<?php

include("../includes/connect.php");

if (!empty($_POST['idea_submit'])) {
    $title = $_POST['idea_title'];
    $idea = $_POST['idea'];
    $author = $_SESSION['author_id']; //this wil change

    $query = "Insert into sp_ideas(idea_id, idea_author_id, idea_title, idea_description, idea_datetime) ";
    $query .= "values(null, '$author' ,'$title', '$idea', now() )";
    echo $query;
    $result = mysql_query($query);
    if(!$result){
        
    }  else {
        
    }
}
?>
