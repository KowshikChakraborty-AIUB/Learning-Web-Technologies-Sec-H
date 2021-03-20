<?php
	session_start();

	if(isset($_POST['signup'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];

		if($username == "" || $email == "" || $password == "" || $repass == ""){
			echo "null submission...";
		}else{

			if($password == $repass){
		
				$conn = mysqli_connect('localhost', 'root', '', 'user-mgt');
				$sql = "insert into users values('', '{User_Name[$username]}', '{Password[$password]}', '{Email[$email]}')";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);
				//$_SESSION['username'] = $username;
				//$_SESSION['password'] = $password;
				//$_SESSION['current_user'] = $user;

				header('location: ../view/login.html');
			}else{
				echo "password & confirm password mismatch..";
			}
		}

	}
?>