<?php
require_once("conn.php");
$select_category="select * from category_id";
$select_category_execute=mysqli_query($conn,$select_category);

?>


	<style type="text/css">
 
   ul {list-style: none;padding: 0px;margin: 0px;}
   ul li {display: block;position: relative;float: left;border:1px solid #000}
   li ul {display: none;}
   ul li a {display: block;background: #000;padding: 5px 10px 5px 10px;text-decoration: none;
           white-space: nowrap;color: #fff;}
   ul li a:hover {background: #f00;}
   li:hover ul {display: block; position: absolute;}
   li:hover li {float: none;}
   li:hover a {background: #f00;}
   li:hover li a:hover {background: #000;}

  #drop-nav li ul li {border-top: 0px;}

 

</style>
 

		<table width="1200px" height="50px" cellpadding="5" cellspacing="5" border="1" align="center" bgcolor="white">
			
			<tr>
				<td width="1200px" height="50px" align="center">
					 
			<div class="menu">					
				 <ul id="drop-nav">
				 		 <?php 
						while($row=mysqli_fetch_assoc($select_category_execute)) {
						?>
			   
			  				<li>
			  					<a href="category_view.php?cat_id=<?php echo $row['category_id'] ;?>"><?php echo $row['category_name'] ;?></a>
			  					<ul>
			  								<?php 

			  								$select_sub_category="SELECT * FROM sub_category_id INNER JOIN category_id ON sub_category_id.category_id=category_id.category_id where sub_category_id.category_id=".$row['category_id'];
											$select_sub_category_execute=mysqli_query($conn,$select_sub_category);
			  								while($row1=mysqli_fetch_assoc($select_sub_category_execute))
			  								{
			  								?>
										    
										      <li ><a href="category_view.php?cat_id=<?php echo $row['category_id'];?>&sub_cat_id=<?php echo $row1['sub_category_id'];?>"><?php echo $row1['sub_category_name'] ?></a></li>
											

										     <?php
											}
										   ?>
								 </ul>
										   
										    
							</li>

								  		
						<?php
						}
						?>

			  	 <ul>

			  	 	<div>
					
					 


					
				</td>				
			</tr>
			
		</table>
