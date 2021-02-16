<!DOCTYPE html>
<html>
    <head>
        <title>HTML Site</title>
    </head>
    <body>
        <form class="" action="" method="post">
            <fieldset>
              <legend>Blood Group<select name="myname"><option value="A+"<?php if (isset($_POST['myname']) && $_POST['myname'] == "A+") echo "selected"; ?>>A+</option><option value="O+"<?php if (isset($_POST['myname']) && $_POST['myname'] == "O+") echo "selected"; ?>>O+</option><option value="AB+"<?php if (isset($_POST['myname']) && $_POST['myname'] == "AB+") echo "selected"; ?>>AB+</option></select></legend>
              <input type="submit" name="submit" value="Submit"><br>
            </fieldset>
      
          </form>
    </body>
</html>
