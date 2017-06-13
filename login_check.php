<?php
require_once("conn.php");
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$select_query="select * from cust_registration where c_email='".$email."' and c_password='".md5($password)."'";
$select_query_execute=mysqli_query($conn,$select_query);
$select_query_execute_row_count=mysqli_num_rows($select_query_execute);
if($select_query_execute_row_count==1)
{
$_SESSION['email']=$email;
header("Location: index.php");
}
else
{
header("Location: login.php?msg=Login Failed");
}
?>