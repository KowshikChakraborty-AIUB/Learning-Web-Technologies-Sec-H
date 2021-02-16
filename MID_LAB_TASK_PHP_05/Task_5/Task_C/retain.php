<!DOCTYPE html>
<html>
    <head>
        <title>HTML Site</title>
    </head>
    <body>
        <form class="" action="" method="post">
            <fieldset>
              <legend>Degree</legend>
              <input type="checkbox" name="myname" value="SSC"<?php if (isset($_POST['myname']) && $_POST['myname'] == "SSC") echo "checked"; ?>> SSC
              <input type="checkbox" name="myname" value="HSC"<?php if (isset($_POST['myname']) && $_POST['myname'] == "HSC") echo "checked"; ?>> HSC
              <input type="checkbox" name="myname" value="BSc"<?php if (isset($_POST['myname']) && $_POST['myname'] == "BSc") echo "checked"; ?>> BSc
      
            </fieldset><br>
            <input type="submit" name="submit" value="Submit">
      
          </form>
    </body>
</html>
