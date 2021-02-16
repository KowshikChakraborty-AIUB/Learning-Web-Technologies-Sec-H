<?php

if(isset($_POST['submit']))
	{

		$name = $_POST['myname'];

		if($name == ""){
			echo "null submission";
		}else{
			echo "success...";
		}
	}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>HTML Site</title>
    </head>
    <body>
        <form class="" action="" method="post">
            Email: <br>
            <input type="email" name="myname" value="myname"><br>
            <input type="submit" name="submit" value="Submit"><br>
        </form>
    </body>
</html>