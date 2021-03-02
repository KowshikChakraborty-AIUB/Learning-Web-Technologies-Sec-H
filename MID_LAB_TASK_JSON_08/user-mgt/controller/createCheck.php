<?php

	if(isset($_POST['create'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];

		if($username == "" || $email == "" || $password == "" || $repass == ""){
			echo "null submission...";
		}else{

			if($password == $repass){

				$user = [	
							'username'=>$username, 
							'password'=>$password,
                            'repass'=>$repass, 
							'email'=> $email
						];

				$data = json_encode($user);
				$userData = fopen("../model/Users.json", "w");
				fwrite($userData, $data);
				fclose($userData);


				echo "User is created!!";
			}else{
				echo "password & confirm password mismatch..";
			}
		}

	}
?>