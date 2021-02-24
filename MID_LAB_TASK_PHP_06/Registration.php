<?php
    if(isset($_POST['submit']))
    {
        
        
        if(isset($_POST['user']) && isset($_POST['password']))
        {
            $username = $_POST['user'];
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



            for($i=0;$i<strlen($username);$i++)
            {
                
                if((ord($username[$i]) >= 97 && ord($username[$i]) <= 122) || (ord($username[$i]) >= 65 && ord($username[$i]) <= 90) || (ord($username[$i]) >= 48 && ord($username[$i]) <= 57) || ($username[$i] == '.') || ($username[$i] == '-') || ($username[$i] == '_'))
                {
                    $capitalLetters = true;
                    $smallLetters = true;
                    $numbers = true;
                    $period = true;
                    $dash = true;
                    $underScore = true;
                }
                else{
                    echo "Username must contain alphanumeric characters, period, dash or underscore only. ";
                    return;
                }

            }
            if(strlen($username)<2)
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







<!DOCTYPE html>
<html>
    <head>
        <title>HTML Site</title>
    </head>
    <body>
      <form method="post" action=""> 
      <fieldset>
          <legend>REGISTRATION</legend>
        <table width="50%" height="100px">
            <tr>
                <td width="30%" height="30px">Name</td>
                <td width="60%" height="30px">:<input type="text" name="name" value="<?php if(isset($_POST['name'])){ echo $_POST['name']; }?>"></td>
            </tr>
            <tr>
              <td><hr></td>
            </tr>
            <tr>
              <td width="30%" height="30px">Email</td>
              <td width="60%" height="30px">:<input type="email" name="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; }?>"></td>
          </tr>
          <tr>
              <td><hr></td>
          </tr>
          <tr>
              <td width="30%" height="30px">User Name</td>
              <td width="60%" height="30px">:<input type="text" name="user" value="<?php if(isset($_POST['user'])){ echo $_POST['user']; }?>"></td>
          </tr>
          <tr>
              <td><hr></td>
          </tr>
          <tr>
              <td width="30%" height="30px">Password</td>
              <td width="60%" height="30px">:<input type="password" name="password"></td>
          </tr>
          <tr>
              <td><hr></td>
          </tr>
          <tr>
              <td width="30%" height="30px">Confirm Password</td>
              <td width="60%" height="30px">:<input type="password" name="confirm"></td>
          </tr>
          <tr>
              <td><hr></td>
          </tr>
            <tr>
              <td width="30%" height="30px">
              <fieldset>
              <legend>Gender</legend>
              <input type="radio" value="M"<?php if (isset($_POST['gender']) && $_POST['gender'] == "M") echo "checked"; ?>>Male
              <input type="radio" value="F"<?php if (isset($_POST['gender1']) && $_POST['gender1'] == "F") echo "checked"; ?>>Female
              <input type="radio" value="O"<?php if (isset($_POST['gender2']) && $_POST['gender2'] == "O") echo "checked"; ?>>Other
              </fieldset>
              </td>
          </tr>
          <tr>
              <td><hr></td>
          </tr>
          <tr>
              <td width="79%">
              <fieldset>
              <legend>Date of Birth</legend>
              <input type="text" name="dob" value="<?php if(isset($_POST['dob'])){ echo $_POST['dob']; }?>"> / <input type="text" name="dob1" value="<?php if(isset($_POST['dob1'])){ echo $_POST['dob1']; }?>"> / <input type="text" name="dob2" value="<?php if(isset($_POST['dob2'])){ echo $_POST['dob2']; }?>">(dd/mm/yyyy)
              </fieldset>
              </td>
          </tr>
          <tr>
              <td><hr></td>
          </tr>
          <tr>
              <td height="30px" align="left" colspan="3"><input type="submit" name="submit" value="Submit"><input type="reset" name="reset" value="Reset"></td>
          </tr>
        </table>
      </fieldset>
      </form>
    </body>
</html>