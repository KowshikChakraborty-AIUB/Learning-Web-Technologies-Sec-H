<?php
	session_start();
	require_once('../model/userModel.php');

	if(isset($_POST['update'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];

		if($username == "" || $email == "" || $password == ""){
			echo "null submission...";
		}else{


				$user = [
							'username' => $username,
							'password' => $password,
							'email' => $email,
						];

				$status = updateUser($user);

				if($status){
					header('location: ../view/login.html');
				}else{
					echo "error";
				}

			
		}

	}
?>