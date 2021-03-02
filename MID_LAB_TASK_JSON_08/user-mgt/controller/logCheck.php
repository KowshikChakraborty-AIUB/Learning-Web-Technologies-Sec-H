<?php
	
	  $userData = fopen("../model/Users.json", "r");
	  $read = fread($userData, filesize('../model/Users.json'));
	
	
	   if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "" || $password == ""){
			echo "null submission...";
		}else{
			   
			
			    $data = json_decode($read, true);

			if($username == $data['username'] && $password == $data['password']){
				header('location: ../view/home.php');
			}else{
				echo "invalid user";
			}
		}

	}
?>