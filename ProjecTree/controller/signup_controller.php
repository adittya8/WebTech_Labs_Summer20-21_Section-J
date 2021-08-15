<?php

require_once '../model/model.php';
if (isset($_POST['submit'])) {

  $birthDate = $birthMonth = $birthYear =$id= $name = $email = $gender = $comment = $website = $birth="";
  $username=$password="";
 $confirmpassword="";
 $flag=1;
 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }


 if (empty($_POST["id"])) {
    echo "ID is required";
     $flag=0;
   }
   else {
    $id = test_input($_POST["id"]);

    if (strlen($_POST["id"]) > '3') 
    {
        $idErr = "Your id can contain maximun 3 Characters!";
    }
    elseif(!preg_match("#[0-9]+#",$id)) 
    {
        $idErr = "Your id Must Contain Number!";

   }
  }

  
  if (empty($_POST["name"])) {
    echo "Name is required";
    $flag=0;
  } else {

       $name = test_input($_POST["name"]);

      if (!preg_match("/^[a-zA-Z-. ]*$/",$name)) {
         echo "Only letters and white space allowed";
         $flag=0;
       }
    else  {
             if(str_word_count($name)<2)
          {
          echo "Name must contains at least two words ";
           $flag=0;

          }
    }
  }

  if (empty($_POST["email"])) {
    echo "Email is required";
    $flag=0;
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Invalid email format";
      $flag=0;
    }
  }

  if (empty($_POST["birthDate"]) || empty($_POST["birthMonth"]) || empty($_POST["birthYear"])) {
    echo "Date Month and Year is required";
    $flag=0;
  } else {

    $birthDate=test_input($_POST["birthDate"]);
    $birthMonth=test_input($_POST["birthMonth"]);
    $birthYear=test_input($_POST["birthYear"]);

    if(!is_numeric($birthDate))
    {
      echo "Please input Numeric Date";
      $flag=0;
    }
    else {

      if(!is_numeric($birthMonth))
      {
          echo "Please input Numeric month";
          $flag=0;
      }
      else {
        if(!is_numeric($birthYear))
        {
          echo "Please input Numeric Year";
          $flag=0;
        }
        else {
          if($birthDate>31 || $birthDate<1)
          {
              echo " Input Date between 1 to 31";
              $flag=0;
          }
          else {
              if($birthMonth>12 || $birthMonth<1)
              {
                  echo  "Input Month between 1 to 12";
                  $flag=0;
              }
              else {
                  if($birthYear>2005 || $birthYear<1953)
                  {
                    echo "Input Year between 1953 to 2005";
                    $flag=0;
                  }
                  else {
                  $birth =$birthDate."/".$birthMonth."/".$birthYear;
                  }
              }
          }

        }
      }
    }
  }



    if (empty($_POST["username"])) {
      echo "User Name is required";
      $flag=0;
    }
    else {
     $username = test_input($_POST["username"]);

      if (!preg_match("/^[a-zA-Z-. ]*$/",$username)) {
         echo "Only letters and white space allowed";
         $flag=0;
       }
       else {
         if(strlen($username)<2)
         {
            echo "Name must contains at least two character ";
            $flag=0;
         }
       }
    }

if(!empty($_POST["password"]) && ($_POST["password"] == $_POST["confirmpassword"])) 
    {
    $password = test_input($_POST["password"]);
    $confirmpassword = test_input($_POST["confirmpassword"]);
    if (strlen($_POST["password"]) < '8') 
    {
        $passwordErr = "Your Password Must Contain At Least 8 Characters!";
    }
    elseif(!preg_match("#[0-9]+#",$password)) 
    {
        $passwordErr = "Your Password Must Contain At Least 1 Number!";
    }
    elseif(!preg_match("#[A-Z]+#",$password)) 
    {
        $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
    }
    elseif(!preg_match("#[a-z]+#",$password)) 
    {
        $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
    }
    elseif(!empty($_POST["password"])) 
    {

    $confirmpasswordErr = "Please Check You've Entered Or Confirmed Your Password!";
     
     } 
}
else {
     $passwordErr = "Please enter password   ";
}


if (empty($_POST["gender"])) {
echo "Gender is required";
$flag=0;
} else {
$gender = test_input($_POST["gender"]);
}

if($flag==1)
{
  $data['id']=$id;
  $data['name']=$name;
  $data['email']=$email;
  $data['birth']=$birth;
  $data['username']=$username;
  $data['password']=$password;
  $data['gender']=$gender;

  if (addSignupInfo($data)) {
    echo 'Successfully added!!';
    
  }

  else {
    echo 'Could not add!!';
  }
}

}




else {
  echo "You can not access this page!!";
}






?>
