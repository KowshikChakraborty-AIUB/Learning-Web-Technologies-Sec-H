<?php
	session_start();
	require_once('../model/userModel.php');

	if(isset($_POST['submit'])){

		$Id = $_POST['Id'];
		$password = $_POST['password'];

		if($Id == "" || $password == ""){
			echo "null submission...";
		}else{

			$status = validateUser($Id, $password);
			if($status){

                $_SESSION['flag'] = true;
                $_SESSION['Id'] = $Id;
                
                $user = getUserById($id);
                
                if($User['btnradio'] == 'User')
                {

				 header('location: ../view/user_home.html');

                }
                else
                {

				 header('location: ../view/admin_home.html');
                }

			}else{
				echo "invalid user";
			}
		}

	}
?>