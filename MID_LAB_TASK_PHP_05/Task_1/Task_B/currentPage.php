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
        <form method="post" action="">
            Name: <br>
            <input type="text" name="myname" value=""><br>
            <input type="submit" name="submit" value="Submit"><br>
        </form>
    </body>
</html>
