<?php
	session_start();

	require_once('../model/userModel.php');

	if(isset($_POST['submit'])){

		$Id = $_POST['Id'];
		$password=['password'];
		$confirm = ['confirm'];
		$username = $_POST['name'];
		$radio = $_POST['btnradio'];

		if($Id == "" || $password == "" || $confirm == "" || $username == "" || $radio == ""){
			echo "null submission...";
		}else{

			if($password == $confirm){

				$user = [	
							
					        'Id'=>$Id,
							'password'=>$password,
							'confirm'=>$confirm,
					        'name'=>$username, 
                            'btnradio'=>$radio
						];

						$status = insertUser($user);

						if($status){
							header('location: ../view/login.html');
						}else{
							echo "error";
						}
			}else{
				echo "password & confirm password mismatch..";
			}
		}

	}
?>