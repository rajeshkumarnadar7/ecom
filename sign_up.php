<?php
require_once("conn.php");
$email=$_POST['email'];
$password=$_POST['password'];
$insert_query="insert into cust_registration(c_email,c_password)values('".$email."','".md5($password)."')";
$insert_query_execute=mysqli_query($conn,$insert_query);
if($insert_query_execute)
{
header("Location: index.php");
}
else
{
header("Location: index.php?msg=Registration Failed");
}
?>