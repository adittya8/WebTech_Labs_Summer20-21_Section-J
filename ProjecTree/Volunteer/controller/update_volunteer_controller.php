<?php
session_start();
require_once '../model/model.php';


if (isset($_POST['updateVolunteer']) && isset($_SESSION['username'])) {

  $birthday =$id=$name = $email = $username = $gender = $comment = $website ="";

 $flag=1;
 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
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

    if (empty($_POST["birthday"])) {
    $birthErr = "Date of birth is required";
    $flag=0;
  } else {

    $birthday=test_input($_POST["birthday"]);
  }



if (empty($_POST["gender"])) {
echo "Gender is required";
$flag=0;
} else {
$gender = test_input($_POST["gender"]);
}




if($flag==1)
{
   $data['name']=$name;
  $data['email']=$email;
  $data['birthday']=$birthday;

  $data['gender']=$gender;


  if (updateVolunteer($_SESSION['username'],$data)) {
    echo 'Successfully added!!';
  }

  else {
    echo 'Could not add!!';
  }
}


} else {
	echo 'You are not allowed to access this page.';
}


?>