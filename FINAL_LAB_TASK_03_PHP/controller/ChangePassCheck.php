<?php

    session_start();

    require_once('../model/userModel.php');

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


                      $status = updateUser($user);

						if($status){
							header('location: ../view/login.html');
						}else{
							echo "error";
						}
		}else {
      echo "Invalid Password";
    }
	}


?>
