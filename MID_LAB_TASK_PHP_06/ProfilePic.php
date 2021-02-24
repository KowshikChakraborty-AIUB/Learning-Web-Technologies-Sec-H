<?php



	if(isset($_POST['submit']))
	{

		$pic = $_POST['photo'];
    
    if(exif_imagetype($pic) == IMAGETYPE_JPEG || exif_imagetype($pic) == IMAGETYPE_PNG)
    {
      echo "Valid image format.  ";
    }
    else{
      echo "Image should be in jpeg or jpg or png format";
    }
    
    
    
    if(filesize($pic) < 4194304)
    {
      true;
    }else {
      echo "Image Should be less then 4 MB.";
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
              <legend>PROFILE PICTURE</legend>
              <img src="Screenshot (1272).png"><br>
              <input type="file" id="photo" name="photo"><br>
              <hr>
              <input type="submit" name="submit" value="submit">
            </fieldset>
      
          </form>
    </body>
</html>