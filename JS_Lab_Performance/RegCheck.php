<?php
	session_start();

	if(isset($_POST['submit'])){

		$name = $_POST['uname'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $ID = $_POST['ID'];
		$password = $_POST['password'];
		$confirm = $_POST['confirm'];
        $gender = $_POST['gender'];
        $dd = $_POST['dob'];
        $mm = $_POST['dob1'];
        $yyyy = $_POST['dob2'];
        $address = $_POST['address'];


		if($name == "" || $email == "" || $mobile == "" || $ID == "" || $password == "" || $confirm == "" || $gender == "" || $dd == "" || $mm == "" || $yyyy == "" || $address == ""){
			echo "null submission...";
		}else{

			if($password == $confirm){

				$userr = [	
							'uname'=>$name, 
                            'mobile'=>$mobile,
                            'ID' => $ID,
                            'confirm'=>$confirm,
                            'gender'=>$gender,
							'password'=>$password, 
							'email'=> $email,
                            'dob'=>$dd,
                            'dob1'=>$mm,
                            'dob2'=>$yyyy,
                            'address' => $address
						];

				//$_SESSION['username'] = $username;
				//$_SESSION['password'] = $password;
				$_SESSION['current_user'] = $userr;

				header('location: ../View/LoginPage.php');
			}else{
				echo "password & confirm password mismatch..";
			}
		}

















        if(isset($_POST['uname']) && isset($_POST['password']))
        {
            $name = $_POST['uname'];
            $password = $_POST['password'];
            $confirm = $_POST['confirm'];
            
            $capitalLetters = false;
            $smallLetters = false;
            $numbers = false;
            $underScore = false;
            $period = false;
            $dash = false;
            
            if($password == "" and $confirm == ""){
                echo "null submission. ";
        }elseif($password == $confirm){
                 true;
            }else {
          echo "Password not matched. ";
        }



            for($i=0;$i<strlen($name);$i++)
            {
                
                if((ord($name[$i]) >= 97 && ord($name[$i]) <= 122) || (ord($name[$i]) >= 65 && ord($name[$i]) <= 90) || (ord($name[$i]) >= 48 && ord($name[$i]) <= 57) || ($name[$i] == '.') || ($name[$i] == '-') || ($name[$i] == '_'))
                {
                    $capitalLetters = true;
                    $smallLetters = true;
                    $numbers = true;
                    $period = true;
                    $dash = true;
                    $underScore = true;
                }
                else{
                    echo "Username may contain alphanumeric characters, period, dash or underscore only. ";
                    return;
                }

            }
            if(strlen($name)<2)
              {
                echo "User name is not valid. ";
              }
            else{
                  true;
            }

            if(strlen($password)<8)
              {
                echo "Password is not strong. ";
              }
            else{
                  true;
            }

            
            $Ch=false;
            
            for($j=0;$j<strlen($password);$j++)
            {
                if(($password[$j] == '@') || ($password[$j] == '#') || ($password[$j] == '$') || ($password[$j] == '%'))
                {
                  
                    $Ch=true;
                    break;
                }
                

            }

            if($Ch==false){
                echo "Password is not vaild. ";
                return;
            }
            

        }








	}
?>