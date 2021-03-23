<?php

    require_once('../model/userModel.php');

	if(isset($_POST['submit']))
	{

		$pass = $_POST['password'];
        $newpass =$_POST['newpassword'];
        $repass = $_POST['repassword'];

		if($pass == "" and $newpass == "" and $repass == ""){
			echo "null submission";
    }elseif($pass != $newpass and $newpass == $repass){
        session_start();
			$User = getUserById($_SESSION['Id']);
			$Id = $User['ID'];
			$password = $User['Password'];
			$newpass = $_POST['newpassword'];
			if($_POST['password'] != $password)
			{
				echo "Your entered current password is wrong";
			}
			else
			{
				$check = updatePassword($Id, $newpass);
				if($check)
				{
					echo "Password changed!";
				}
				else
				{
					echo "Error occured!";
				}
			}
		}else {
      echo "Invalid Password";
    }
	}


?>
