<?php
	session_start();
	if(!isset($_SESSION['flag']))
	{
		header('location: login.html');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
</head>
<body>





<center>
	<form method="post" action="../controller/ChangePassCheck.php">
		<table border="0" cellspacing="0" cellpadding="5">
			<tr>
				<td>
					<fieldset>
						<legend>CHANGE PASSWORD</legend>
						Current Password<br />
						<input type="password" name="password"/><br />
						New Password<br />
						<input type="password" name="newpassword"/><br />
						Retype New Password<br/>
						<input type="password" name="repassword"/>								
						<hr />
						<input type="submit" name="submit" value="Change" />     
						<a href="home.html">Home</a>						
					</fieldset>
				</td>
			</tr>
		</table>
	</form>
</center>
</body>
</html>