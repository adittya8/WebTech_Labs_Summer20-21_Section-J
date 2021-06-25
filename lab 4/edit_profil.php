<!DOCTYPE HTML>
<html>
<head>
<style>
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
</head>
<body>

<?php
session_start();
if (!empty($_SESSION['name'])) {


 $birthErr = $nameErr = $emailErr = $genderErr =$error=$usernameErr="";
$name =  $email = $gender = $comment =  $username="";
$birthday=$_SESSION['birthday'];
$flag=1;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $usernameErr = "User Name is required";
    $flag=0;
  }
  else {
   $username = $_POST["username"];

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
       else {
         $_SESSION['username']=$username;
          $_SESSION['username']=$username;
       }
     }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $flag=0;
  } else {
    $email = $_POST["email"];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $flag=0;
    }
    else {
      $_SESSION['email']=$email;
       $_SESSION['email']=$email;
    }
  }

  if (empty($_POST["birthday"])) {
    $birthErr = "Date of birth is required";
    $flag=0;
  } else {

    $birthday=$_POST["birthday"];
     $_SESSION['birthday']=$birthday;
  }



    if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
      $flag=0;
    } else {
      $gender = $_POST["gender"];
      $_SESSION['gender']=$gender;
    }




    }
  



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

}
else{
    $msg="error";
    echo $msg;
    header("location:login.php");
    
  }
?>

<table align="right">

        <?php if(!empty($_SESSION['name'])){ include('head_dashboard.php');?>
          
          <tr> <td colspan="2" align="right" valign="top"> </td><p><h2>Edit Profile</h2></p><p><span class="error">* required field</span></p></tr>
          <tr> <td colspan="2" align="right" valign="top"><?php  echo "<br><a href='change_pass.php'>Change password</a>";?> </td></tr>
          <tr> <td colspan="2" align="right" valign="top"><?php echo "<br><a href='view_profile.php'>View profile</a>";?> </td></tr>
          <tr> <td colspan="2" align="right" valign="top"><?php echo "<br><a href='profile_picture_upload.php'>Profile picture upload</a>";?> </td></tr>
          <tr> <td colspan="2" align="right" valign="top"><?php echo "<br><a href='dashboard.php'>Dashboard</a>";?> </td></tr>
           
          

         <?php } ?>

         </table>





<form style="border:3px; border-style:solid; border-color:gray; padding: 1em;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

  Name: <input type="text" name="name" value="<?php echo $_SESSION['name'];?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>

  User Name: <input type="text" name="username" value="<?php echo $_SESSION['username'];?>">
  <span class="error">* <?php echo $usernameErr;?></span>
  <br><br>
   E-mail: <input type="text" name="email" value="<?php echo $_SESSION['email'];?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>



  Date of Birth: <input type="date"  name="birthday" value="<?php echo $_SESSION['birthday'];?>">
  <span class="error">* <?php echo $birthErr;?></span>

  <br><br>
  Gender: <?php if (isset($_SESSION['gender'])) echo $_SESSION['gender'];?>
  <br>
  <input type="radio" name="gender"  value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender"  value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>

 

  <input type="submit" name="submit" value="Submit">



</form>


<?php
include("foot.php");

 ?>



</body>
</html>