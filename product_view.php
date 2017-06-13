<?php
require("conn.php");
require("header.php");
require("category.php");
$pid=$_GET['p_id'];
if(array_key_exists('email',$_SESSION))
{
$session_email=$_SESSION['email'];	
$session_id=$_SERVER['REMOTE_ADDR'];
}
else
{
$session_id=$_SERVER['REMOTE_ADDR'];
}

$select_product_query="select * from product where p_id='".$pid."'";
$select_product_query_exe=mysqli_query($conn,$select_product_query);
$product_fetch=mysqli_fetch_assoc($select_product_query_exe);
$attribue_query="select * from attribute a, attribute_id b where a.attribute_id = b.attribute_id and a.p_id='".$pid."'";
$attribute_fetch=mysqli_query($conn,$attribue_query);

?>


		<table width="1200px"  cellpadding="0" cellspacing="0" border="0" align="center" bgcolor="white">
			<tr width="1200px" height="300px">
				 <td width="300px">
				 	 <img src="<?php echo $product_fetch['image'] ?>" alt="<?php echo ucwords($product_fetch['p_name']) ?>" width="300" height="300">
				 </td>	
				 <td width="20px">
				 </td>	
				 <td width="450px">
				 	Name : <?php echo ucwords($product_fetch['p_name']) ?><br>
				 	Description :<?php echo ucwords($product_fetch['p_desc']) ?><br>
				 	Price :<?php echo ucwords($product_fetch['p_price']) ?><br><br>
				 	<?php
				 	while ($row=mysqli_fetch_assoc($attribute_fetch)) 
				 	{
				 	?>

				  <?php echo ucwords($row['attribute_name']); ?><span>:<?php echo ucwords($row['attribute_option']); ?><br><br>
				  

				    <?php	
				 	} 
				 	?>

				 </td>	
				  <td width="450px">
				  	QTY : <br><br><input type="number" id="qty" value="1" name="qty" size="1" min="1" max="10">
				 	<br><br><br>
				  	<button name="cart" id="cart" value="Add TO Cart">Add To Cart</button>
				  	<h3 id="ajax_response" name="ajax_response">  </h3>
				 </td>	




			</tr>
		</table>


<?php
require("footer.php");
?>

<script>
  $(document).ready(function(){
	$("#cart").click(function(){
	var p_id="<?php echo $pid; ?>";
	var email_id="<?php echo $session_email; ?>";
	var s_id="<?php echo $session_id; ?>";	
	var qty=document.getElementById("qty").value;
	$.ajax({	
		url:"add_to_cart.php",
		type:"POST",
		data:{p_id:p_id,s_id:s_id,qty:qty,email:email_id},
		success:function(html){
			$("#ajax_response").html(html);
		},
		error:function(html){
			alert("error");
		}

	});

	});

});
</script>