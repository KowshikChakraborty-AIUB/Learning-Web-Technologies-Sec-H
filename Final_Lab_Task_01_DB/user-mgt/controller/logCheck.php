<?php
	session_start();

	require('../view/db.php');

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql ='select User Name from Registration';
		$sql1 ='select Password from Registration';

		if($username == "" || $password == ""){
			echo "null submission...";
		}else{
			$user = $_SESSION['current_user'];

			if($username == $user['username'] && $password == $user['password']){
				$_SESSION['flag'] = true;
				header('location: ../view/home.php');
			}else{
				echo "invalid user";
			}
		}

	}
?>