<?php



	if(isset($_POST['submit']))
	{

		$pass = $_POST['password'];
        $newpass =$_POST['newpassword'];
        $repass = $_POST['repassword'];

		if($pass == "" and $newpass == "" and $repass == ""){
			echo "null submission";
    }elseif($pass != $newpass and $newpass == $repass){
		 	echo "Password is successfully changed!!";
		}else {
      echo "Invalid Password";
    }
	}


?>







<!DOCTYPE html>
<html>
    <head>
        <title>HTML Site</title>
    </head>
    <body>
        <fieldset>
            <legend>CHANGE PASSWORD</legend>
        <form class="" action="" method="post">
            <table>
            <tr>
            <td>Current Password:</td>
            <td><input type="password" name="password" value=""></td>
            </tr>
            <tr>
            <td>New Password:</td>
            <td><input type="password" name="newpassword" value=""></td>
            </tr>
            <tr>
            <td>Retype New Password:</td>
            <td><input type="password" name="repassword" value=""></td>
            </tr>
            </table>
            <hr>
            <input type="submit" name="submit" value="Submit"><br>
        </form>
        </fieldset>
    </body>
</html>