<?php
require("conn.php");
require("header.php");

?>

						 
					</form>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<table width="1200px" height="400px" cellpadding="5" cellspacing="5" border="1" align="center" bgcolor="white">
			
			<tr>
				<td width="600" height="300px" align="center">	
					<table width="500px" height="300px" cellpadding="5" cellspacing="5" border="1" align="center" bgcolor="white">
						<form method="post" action="login_check.php" name="login">
							<tr width="500px">								
								<th colspan="2">Login To Our Site</th>
							</tr>
							
							<tr algin="center" width="500px">
								<td  align="center" width="250px">Email</td>
								<td  align="center" width="250px"><input type="email" name="email" id="email" size="25"></td>
							</tr>
							<tr algin="center" width="500px">
								<td align="center"  width="250px">Password</td>
								<td align="center"  width="250px"><input type="password" name="password" id="password" size="25"></td>
							</tr>
							<tr algin="center" width="500px">
								<td align="center" width="250px"><input type="submit" name="login" value="Login"></td>
								<td align="center" width="250px"><input type="reset" name="clear" value="Clear"></td>
							</tr>
						</form>				
					</table>	
					
			    </td>	
				<td width="600" height="300px" align="center">
				<table width="500px" height="300px" cellpadding="5" cellspacing="5" border="1" align="center" bgcolor="white">
						<form method="post" action="sign_up.php" name="login">
							<tr width="500px">								
								<th colspan="2">Sign Up To Our Site</th>
							</tr>
							
							<tr algin="center" width="500px">
								<td  align="center" width="250px">Email</td>
								<td  align="center" width="250px"><input type="email" name="email" id="email" size="25"></td>
							</tr>
							<tr algin="center" width="500px">
								<td align="center"  width="250px">Password</td>
								<td align="center"  width="250px"><input type="password" name="password" id="password" size="25"></td>
							</tr>
							<tr algin="center" width="500px">
								<td align="center" width="250px"><input type="submit" name="signup" value="Signup"></td>
								<td align="center" width="250px"><input type="reset" name="clear" value="Clear"></td>
							</tr>
						</form>				
					</table>	
				</td>						
			</tr>
			 
		</table>
	</body>
</html>

<?php
require("footer.php");
?>