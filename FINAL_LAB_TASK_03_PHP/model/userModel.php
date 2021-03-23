<?php
	
	require_once('db.php');

	function validateUser($Id, $password){

		$conn = getConnection();

		$sql = "select * from registration where ID='{$Id}' and Password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0){
			return true;
		}else{
			return false;
		}
	}


	function insertUser($user){

		$conn = getConnection();
		$sql = "insert into registration (ID, Password, Name, Type) values ( '{$user['Id']}', '{$user['password']}', '{$user['name']}', '{$user['btnradio']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}



	function getUserById($Id){

		$conn = getConnection();

		$sql = "select * from registration where ID='{$Id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}



	function updatePassword($Id, $newpass){
		$conn = getConnection();
		$sql = "update registration set Password='{$newpass}' where ID='{$Id}'";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}



?>