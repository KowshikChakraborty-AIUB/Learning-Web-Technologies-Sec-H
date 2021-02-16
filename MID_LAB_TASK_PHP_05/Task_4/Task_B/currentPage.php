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
            <fieldset>
              <legend>Grnder</legend>
              <input type="radio" name="myname" value="myname"> male
              <input type="radio" name="myname" value="myname"> Female
              <input type="radio" name="myname" value="myname"> Other
      
            </fieldset><br>
            <input type="submit" name="submit" value="Submit"><br>
      
          </form>
    </body>
</html>