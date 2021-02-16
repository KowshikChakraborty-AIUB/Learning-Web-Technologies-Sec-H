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
              <legend>Blood Group<select name="myname"><option value="A+">A+</option><option value="O+">O+</option><option value="AB+">AB+</option></select></legend>
              <input type="submit" name="submit" value="Submit"><br>
            </fieldset>
      
          </form>
    </body>
</html>