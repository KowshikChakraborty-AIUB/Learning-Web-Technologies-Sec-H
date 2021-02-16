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
              <legend>Date of Birth</legend>
              <table>
                  <tr>
                      <td>dd<br><input type="text" name="myname" value=""> / </td>
                      <td>mm<br><input type="text" name="myname" value=""> / </td>
                      <td>yyyy<br><input type="text" name="myname" value=""></td>
                  </tr>
              </table>
              <input type="submit" name="submit" value="Submit"><br>
            </fieldset>
      
          </form>
    </body>
</html>