<?php
	session_start();

	if(isset($_POST['submit'])){

		$username = $_POST['name'];
        $email =$_POST['email'];
        $user = $_POST['user'];
		$password = $_POST['password'];
		$confirm = $_POST['confirm'];
        $gender = $_POST['gender'];
        $dd = $_POST['dob'];
        $mm = $_POST['dob1'];
        $yyyy = $_POST['dob2'];

            $userr = [	
                'name'=>$username, 
                'gender'=>$gender,
                'email'=> $email,
                'dob'=>$dd,
                'dob1'=>$mm,
                'dob2'=>$yyyy
            ];

    //$_SESSION['username'] = $username;
    //$_SESSION['password'] = $password;
    $_SESSION['current_user'] = $userr;

    header('location: ViewProfile.php');


	}
?>