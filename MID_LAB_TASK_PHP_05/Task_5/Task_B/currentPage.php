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
              <legend>Degree</legend>
              <input type="checkbox" name="myname" value="myname"> SSC
              <input type="checkbox" name="myname" value="myname"> HSC
              <input type="checkbox" name="myname" value="myname"> BSc
      
            </fieldset><br>
            <input type="submit" name="submit" value="Submit">
      
          </form>
    </body>
</html>