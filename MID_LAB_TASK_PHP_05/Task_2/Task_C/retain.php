<!DOCTYPE html>
<html>
<head>
	<title>Name input</title>
</head>
<body>

	<form method="post" action="">
		<fieldset>
			<legend>NAME</legend>
			Email: <input type="email" name="myname" value="<?php if(isset($_POST['myname'])){ echo $_POST['myname']; }?> ">  <br>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>