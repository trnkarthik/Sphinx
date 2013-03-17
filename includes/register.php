<?php

require_once("session.php");
require_once("connect.php");
require_once("functions.php");

// get user_email and password
$user_email=$_POST['user_email'];
$user_name=$_POST['user_name'];
$password=$_POST['password'];
$hashed_password=md5($password);
//echo $user_email."<br/>".$user_name."<br/>".$password;

//Now insert the user data in the database.

$highest_id_query = "select max(user_id) from sp_user_login where mode=0";
$highest_id_result = mysql_query($highest_id_query);
$highest_id = mysql_result($highest_id_result,0);

$new_id = $highest_id+1;

$user_login_insert_query = "insert into sp_user_login(user_id,user_name,user_email,password) values($new_id,'$user_name','$user_email','$hashed_password')";
$user_details_insert_query ="insert into sp_user_details(user_id) values($new_id)";

echo $user_login_insert_query."<br/>";
echo $user_details_insert_query;

$user_login_insert_result = mysql_query($user_login_insert_query);
$user_details_insert_result = mysql_query($user_details_insert_query);

if(!$user_login_insert_result || !$user_details_insert_result)
{
      echo "Oops!Our bad...<br/>Something went wrong!Please try again!";
      echo mysql_error()."<br/>";
      redirect_to("../index.php");
}
else{
    echo $new_id;
    $_SESSION['user_id']=$new_id;
    $_SESSION['username']=$user_name;
    redirect_to("../index.php");
}

?>