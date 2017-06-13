<?php 
$server_name="localhost";
$username="root";
$password="root";
$db="ecomm";
$conn=mysqli_connect($server_name,$username,$password,$db);
if($conn)
{
//echo "connected";
}
else
{
echo "not_connected";
}


?>