<?php

    session_start();

	if(isset($_POST['submit']))
	{

		$pass = $_POST['password'];
        $newpass =$_POST['newpassword'];
        $repass = $_POST['repassword'];

		if($pass == "" and $newpass == "" and $repass == ""){
			echo "null submission";
    }elseif($pass != $newpass and $newpass == $repass){
        $userr = [	
            'password'=>$pass, 
            'newpassword'=>$newpass,
            'repassword'=> $repass
        ];

//$_SESSION['username'] = $username;
//$_SESSION['password'] = $password;
$_SESSION['current_user'] = $userr;

header('location: ChangePass.php');
		}else {
      echo "Invalid Password";
    }
	}


?>
