<?php
	session_start();

	if(isset($_POST['submit'])){

		$username = $_POST['user'];
		$password = $_POST['password'];

		if($username == "" || $password == ""){
			echo "null submission...";
		}else{
			$userr = $_SESSION['current_user'];

			if($username == $userr['user'] && $password == $userr['password']){
				$_SESSION['flag'] = true;
				header('location: Dashboard.php');
			}else{
				echo "invalid user";
			}
		}

	}
?>