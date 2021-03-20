<?php
	
	$title= "Edit Page";
	include('header.php');

	//echo $_GET['id'];
	//echo $_GET['email'];
?>


	<div id="page_title">
		<h1>Edit Page</h1>
	</div>

	<div id='nav_bar'>
		<a href="user_list.php"> Back</a> |
		<a href="../controller/logout.php"> logout</a>	
	</div>

	<div id="main_content">
		<form method="post" action="../controller/editCheck.php">
			<fieldset>
				<legend>Delete User</legend>
				<table>
					<tr>
						<td>Username</td>
						<td><input type="text" name="username" value="<?php echo $_SESSION['username'];?>"> </td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password" value="<?php echo $_SESSION['password'];?>"> </td>
					</tr>
				
					<tr>
						<td>Email</td>
						<td><input type="email" name="email" value="<?php echo $_SESSION['email'];?>"> </td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="delete" value="Delete">
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>

	<?php include('footer.php'); ?>