<?php
session_start();
require_once "../model/model.php";




if(isset($_POST['submit']) && isset($_SESSION['username']))
{
  $cpassword=$npassword=$rnpassword="";
  $flag=1;

  function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
  }

  
   
   $cpassword=$npassword=$rnpassword="";
   $cpasswordErr=$npasswordErr=$rnpasswordErr="";

   

   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
     if (empty($_POST["cpassword"])) {
       $cpasswordErr = "Current Password is required";
       $flag=0;
     }
   }
     else {
      $cpassword = test_input($_POST["cpassword"]);

        }
      

        if (empty($_POST["npassword"])) {
          $npasswordErr = "New Password is required";
          $flag=0;

        }
        else {
         $npassword = test_input($_POST["npassword"]);

          if (strlen($_POST["npassword"]) < '8') 
    {
        $npasswordErr = "Your Password Must Contain At Least 8 Characters!";
    }
    elseif(!preg_match("#[0-9]+#",$npassword)) 
    {
        $npasswordErr = "Your Password Must Contain At Least 1 Number!";
    }
    elseif(!preg_match("#[A-Z]+#",$npassword)) 
    {
        $npasswordErr = "Your Password Must Contain At Least 1 Capital Letter!";
    }
    elseif(!preg_match("#[a-z]+#",$npassword)) 
    {
        $npasswordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
    }
           }

           


           if (empty($_POST["rnpassword"])) {
             $rnpasswordErr = "Retype New Password is required";
           }
           else {
            $rnpassword = test_input($_POST["rnpassword"]);

          if (strlen($_POST["rnpassword"]) < '8') 
    {
        $rnpasswordErr = "Your Password Must Contain At Least 8 Characters!";
    }
    elseif(!preg_match("#[0-9]+#",$rnpassword)) 
    {
        $rnpasswordErr = "Your Password Must Contain At Least 1 Number!";
    }
    elseif(!preg_match("#[A-Z]+#",$rnpassword)) 
    {
        $rnpasswordErr = "Your Password Must Contain At Least 1 Capital Letter!";
    }
    elseif(!preg_match("#[a-z]+#",$rnpassword)) 
    {
        $rnpasswordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
    }

     }

     






  if($flag==1)
  {
    try {

      $data = searchUsername($_SESSION['username']);
      if($data!=NULL)
      {

             $passwordFromDB= $_SESSION['PASSWORD'] ;
        if($cpassword==$passwordFromDB)
        {
          if($npassword==$rnpassword){
          if (updatePasswordVolunteer($_SESSION['username'], $npassword)) {
            echo 'Successfully updated!!';
           session_destroy();
            header('Location: ../view/login_volunteer_view.php');
          }
          else {
            echo "Update unsuccessful!!";
          }
        }
        else {
          echo "New password and retype password is not same!!";
        }
        }
        else {
          echo "Incorrect Password";
        }
      }else {
        echo "Username not found";
      }


    } catch (Exception $ex) {
      echo $ex->getMessage();
    }

  }
}

else {
  echo "You are not allowed to access this page";
  
}




?>