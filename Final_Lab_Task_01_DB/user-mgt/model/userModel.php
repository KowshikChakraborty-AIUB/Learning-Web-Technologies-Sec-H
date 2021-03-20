<?php
	
	require_once('db.php');

	function validateUser($username, $password){

		$conn = getConnection();

		$sql = "select * from registration where User_Name='{$username}' and Password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0){
			return true;
		}else{
			return false;
		}
	}

	function getUserById($id){

		$conn = getConnection();

		$sql = "select * from registration where ID='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from registration";
		$result = mysqli_query($conn, $sql);
		echo "<table border=1> 
			<tr>
				<td>Username</td>
				<td>Email</td>
				<td>Type</td>
			</tr>";
	while ($row = mysqli_fetch_assoc($result)) {
		
		echo 	"<tr>
					<td>{$row['User_Name']}</td>
					<td>{$row['Email']}</td>
					<td>{$row['Type']}</td>
				</tr>";
	}
	echo "</table>";
	}

	function insertUser($user){

		$conn = getConnection();
		$sql = "insert into registration (User_Name, Password, Email, Type) values ( '{$user['username']}', '{$user['password']}', '{$user['email']}', '{$user['type']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateUser($user){

		$conn = getConnection();
		$sql = "update registration set User_Name='{$user['username']}', Password='{$user['password']}', Email='{$user['email']}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteUser($id){
		$conn = getConnection();
		$sql = "delete from registration where id={$id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>