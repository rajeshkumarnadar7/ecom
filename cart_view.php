<?php
session_start();
require("conn.php");
require("header.php");
if(array_key_exists('email',$_SESSION))
{
$session_id=$_SESSION['email'];	
}
else
{
$session_id=$_SERVER['REMOTE_ADDR'];
}
$select_cart="SELECT * FROM cart_product INNER JOIN cart  ON cart_product.cart_id=cart.cart_id where cart.email='".$session_id."' or s_id='".$session_id."'";
$select_cart_exe=mysqli_query($conn,$select_cart);


?>

<html>
	<head>
		<title></title>
	</head>
	<body>
		<table width="1200px" height="200px" cellpadding="5" cellspacing="5" border="1" align="center" bgcolor="white">
			 <tr width="1200px" height="100px">
			 	<td width="200px" height="100px">
			 		<table width="200px" height="200px" border="0">
			 			<tr width="200px" height="5px">
			 				<td><h4>Image</h4></td>
			 	  		</tr>
			 	  		<tr width="200px" height="195px">
			 				<td>img src</td>
			 	  		</tr>
			 		</table>
			 	</td>
			 	<td width="600px" height="100px"> 	
			 		<table width="600px" height="200px" border="0">
			 			<tr width="600px" height="5px">
			 				<td><h4>Product</h4></td>
			 	  		</tr>
			 	  		<tr width="600px" height="195px">
			 				<td>img src</td>
			 	  		</tr>
			 		</table>
			 	</td>
			 	<td width="100px" height="100px">
			 		<table width="100px" height="200px" border="0">
			 			<tr width="100px" height="5px">
			 				<td><h4>QTY</h4></td>
			 	  		</tr>
			 	  		<tr width="100px" height="195px">
			 				<td>img src</td>
			 	  		</tr>
			 		</table>
				</td >
			 	<td width="100px" height="100px">
			 		<table width="100px" height="200px" border="0">
			 			<tr width="100px" height="5px">
			 				<td><h4>Price</h4></td>
			 	  		</tr>
			 	  		<tr width="100px" height="195px">
			 				<td>img src</td>
			 	  		</tr>
			 		</table>
			 	</td>
			 	<td width="100px" height="100px">
			 		<table width="100px" height="200px" border="0">
			 			<tr width="100px" height="5px">
			 				<td><h4>Price</h4></td>
			 	  		</tr>
			 	  		<tr width="100px" height="195px">
			 				<td>img src</td>
			 	  		</tr>
			 		</table>
			 	</td>
			 </tr>	
		</table>
	</body>
</html>
<?php
require("footer.php");
?>