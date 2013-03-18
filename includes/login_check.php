<?php

require_once("session.php");
require_once("connect.php");
require_once("functions.php");

// check the validation of login page and redirects to corresponding page depending on the result

$username=$_POST['login'];
$password=$_POST['password'];
$hashed_password=md5($password);
echo $username."<br/>".$hashed_password;

$query="select user_id,user_name from sp_user_login
        where password='$hashed_password' and  (user_email = '$username' OR user_name ='$username') ";
        
        //echo $query;
        
$result_set=mysql_query($query);

if(mysql_num_rows($result_set)==1)
{
    $found_user=mysql_fetch_array($result_set);
    $_SESSION[user_id]=$found_user['user_id'];
    $_SESSION[username]=$found_user['user_name'];
    //echo "<br/>".$_SESSION[user_id]."<br/>".$_SESSION[username];
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    //redirect_to("../login_failed.php");
}
else
{
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    //redirect_to("../index.php");    
}


?>