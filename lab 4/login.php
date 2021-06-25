<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style >
      input[type=submit]
{
  background-color: #00a3cc;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
.error {color: #FF0000;}
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


<?php
   $username=$password="";
   $usernameErr=$passwordErr="";
   $msz="";


    if (empty($_POST["username"])) {
      $usernameErr = "User Name is required";
      $flag=0;
    }
    else {
     $username = test_input($_POST["username"]);

      if (!preg_match("/^[a-zA-Z-. ]*$/",$username)) {
         $usernameErr = "Only letters and white space allowed";
         $flag=0;
       }
       else {
         if(strlen($username)<2)
         {
            $usernameErr = "Name must contains at least two character ";
            $flag=0;
         }
       }
    }


   if(empty($_POST["password"]))
     {
       $passwordErr = "Password is required";
     }
     else {
       $password=test_input($_POST["password"]);
       if(strlen($password)<8)
       {
         $passwordErr="Password must not be less than eight (8) characters";
       }
       
       }


   function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
   }
   ?>

      <?php

      $data= file_get_contents("data.json");
       $data= json_decode($data, true);

     if(isset($_POST['submit']))
    {
      foreach ($data as $row) {
        if($row["username"]==$_POST['username'] && $row["password"]==$_POST['password'])
        {session_start();
          $_SESSION['username'] = $row["username"];
          $_SESSION['password'] = $row["password"];
          $_SESSION['name'] = $row["name"];
          $_SESSION['gender'] = $row["gender"];
          $_SESSION['email'] = $row["email"];
          $_SESSION['birthday'] = $row["birthday"];

          header("location: dashboard.php");



        }
        else{
          $msg="username or password is invalid";
        }
      }
    }



     ?>

     <?php

if(!empty($_POST["remember"])) {
  setcookie ("username",$_POST["username"],time()+ 1000);
  setcookie ("password",$_POST["password"],time()+ 1000);
  echo "Cookies Set Successfuly <br>";
  echo "Welcome ". $_POST["username"];
} else {
  setcookie("username","");
  setcookie("password","");
}
  

?>


   <?php

include("head.php");
     ?>

     <form style="border:3px; border-style:solid; border-color:gray; padding: 1em;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        
        User Name: <input type="text" name="username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>">
      
  <span class="error">* <?php echo $usernameErr;?></span>
        <br><br>
        Password: <input type="text" name="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
        <span class="error">* <?php echo $passwordErr;?></span>
        <br><br>

        <table align="center">

        <?php if(isset($msg)){?>
          <tr>
           <td colspan="2" align="center" valign="top"><?php echo$msg;?> </td>
          </tr>

         <?php } ?>

         </table>
        <br>
        <input type="checkbox"  name="remember" value="remembered">
         <label for="remember">Remember Me</label>
         <br><br>
         <input type="submit" name="submit" value="Submit" class="btn btn-info" />
          <meta ><a href ="forget_password.php">Forget Password? </a></meta>
    </form>

    <?php
include("foot.php");
     ?>
  </body>
</html>