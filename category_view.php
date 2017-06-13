<?php

require("conn.php");
require("header.php");
require("category.php");

if(!array_key_exists('sub_cat_id', $_GET))
{
$cat_id=$_GET['cat_id'];
 $select_product_category="select * from category c, product p where c.p_id = p.p_id and category_id='".$cat_id."'";
}
if(array_key_exists('sub_cat_id', $_GET))
{
$cat_id=$_GET['cat_id'];
$sub_cat_id=$_GET['sub_cat_id'];	
$select_product_category="select * from category c, product p where c.p_id = p.p_id and sub_category_id='".$sub_cat_id."' and  category_id='".$cat_id."' ";
}
$select_product_category_execute=mysqli_query($conn,$select_product_category);
$select_product_category_execute_row_count=mysqli_num_rows($select_product_category_execute);

?>

	
	<style>
div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 200px;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
div.name {
    padding: 1px;
    text-align: center;
}
</style>

		<table width="1200px"  cellpadding="0" cellspacing="0" border="2" align="center" bgcolor="white">
			<tr height="320px">
				 <td> 
				 	<?php 
				 	if($select_product_category_execute_row_count!==0)
						{	
				 	while($row=mysqli_fetch_assoc($select_product_category_execute))
				 	 { 

				 	 ?>
							<div class="gallery">
									  <a  href="product_view.php?p_id=<?php echo $row['p_id'] ?>">
									    <img src="<?php echo $row['image'] ?>" alt="<?php echo ucwords($row['p_name']) ?>" width="300" height="300">
									  </a>
									  <div class="desc"><?php echo ucwords($row['p_name']) ?></div>
									  <input type="hidden"   name="p_id" id="p_id" value="<?php echo $row['p_id'] ?>">
									  <div class="name"> <a style='text-decoration:none; color:black;' href="product_view.php?p_id=<?php echo $row['p_id'] ?>">View The Product</a></div>
							</div>

							<?php
					}
				}
				else
				{
					echo "<center><h1>No Product Under This Section<h1><center>";
				}
					?>	
							 





				</td>



			</tr>
		</table>

 




<?php
require("footer.php");
?>

					