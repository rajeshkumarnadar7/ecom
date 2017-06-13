<?php
require_once("conn.php");
session_start();
$p_id=$_POST['p_id'];
$s_id=$_POST['s_id'];
$qty=$_POST['qty'];
$email=$_POST['email'];

if(empty($email))
{
	$select_query="select * from cart where s_id='".$s_id."'";
	$select_query_exe=mysqli_query($conn,$select_query);
	$insert_query="insert into cart (s_id) values ('".$s_id."')";
	
}
else
{
	$select_query="select * from cart where email='".$email."'";
	$select_query_exe=mysqli_query($conn,$select_query);
	$insert_query="insert into cart (email) values ('".$email."')";	
	
}


$select_query_exe_row=mysqli_num_rows($select_query_exe);


if($select_query_exe_row<=0)
{
		$insert_query_exe=mysqli_query($conn,$insert_query);


		if($insert_query_exe)
		{ 
		$cart_id_fetch=mysqli_query($conn,$select_query);
		$select_cart_exe=mysqli_fetch_assoc($cart_id_fetch);	
		$cart_id=$select_cart_exe['cart_id'];
		$insert_query_product="insert into cart_product (cart_id,p_id,qty) values ('".$cart_id."','".$p_id."','".$qty."')";
		$insert_query_product_exe=mysqli_query($conn,$insert_query_product);
		}
}
else
{
$select_fetch_exe=mysqli_fetch_assoc($select_query_exe);	
$cart_id=$select_fetch_exe['cart_id'];
$insert_query_product="insert into cart_product (cart_id,p_id,qty) values ('".$cart_id."','".$p_id."','".$qty."')";
$insert_query_product_exe=mysqli_query($conn,$insert_query_product);
}

?>