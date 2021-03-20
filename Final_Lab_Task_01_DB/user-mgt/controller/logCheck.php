<?php
    
	session_start();

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "" || $password == ""){
			echo "null submission...";
		}else{
			
			$conn = mysqli_connect('localhost', 'root', '', 'user-mgt');
			$sql = "select * from registration where User_Name='{$username}' and Password='{$password}'";
		    $result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);

			if(count($row) > 0){
				$_SESSION['flag'] = true;
				$_SESSION['username'] = $username;
				header('location: ../view/home.php');
			}else{
				echo "invalid user";
			}
		}

	}
?>