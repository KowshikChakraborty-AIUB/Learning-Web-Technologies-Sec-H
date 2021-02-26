<?php
	session_start();

	if(isset($_POST['submit'])){


        $userr = $_SESSION['current_user']; 


        if($email= $userr['email']){

             $userr = $_SESSION['current_user']; 
             $password= $userr['password']; 
             echo"Your password is:";
             echo "$password";

        } 


		
		}

?>