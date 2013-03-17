<?php

require_once("session.php");
require_once("connect.php");
require_once("functions.php");

// check the validation of login page and redirects to corresponding page depending on the result

$username=$_POST['login'];
$password=$_POST['password'];
$hashed_password=sha1($password);
echo $username."<br/>".$password;



$query="select user_id,user_email from users
        where user_email='{$username}' and hashed_password='{$hashed_password}' ";
$result_set=mysql_query($query);


if(mysql_num_rows($result_set)==1)
{
    $found_user=mysql_fetch_array($result_set);
    $_SESSION[user_id]=$found_user['user_id'];
    $_SESSION[username]=$found_user['username'];
    redirect_to("../login_failed.php");
}
else
{
    redirect_to("../index.php");    
}


?>