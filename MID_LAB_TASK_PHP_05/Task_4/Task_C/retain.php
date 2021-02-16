<!DOCTYPE html>
<html>
    <head>
        <title>HTML Site</title>
    </head>
    <body>
        <form class="" action="" method="post">
            <fieldset>
              <legend>Grnder</legend>
              <input type="radio" name="gender" value="M"<?php if (isset($_POST['gender']) && $_POST['gender'] == "M") echo "checked"; ?>> male
              <input type="radio" name="gender" value="F"<?php if (isset($_POST['gender']) && $_POST['gender'] == "F") echo "checked";?>> Female
              <input type="radio" name="gender" value="O"<?php if (isset($_POST['gender']) && $_POST['gender'] == "O") echo "checked";?>> Other
      
            </fieldset><br>

			<input type="submit" name="submit" value="Submit"><br>
      
          </form>
    </body>
</html>
