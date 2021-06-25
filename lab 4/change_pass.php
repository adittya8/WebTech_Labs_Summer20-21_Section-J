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
    session_start();
    if (!empty($_SESSION['name'])) {

   
   $cpassword=$npassword=$rnpassword="";
   $cpasswordErr=$npasswordErr=$rnpasswordErr="";

   

   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
     if (empty($_POST["cpassword"])) {
       $cpasswordErr = "Current Password is required";
     }
     else {
      $cpassword = $_POST["cpassword"];

       if (strcmp($cpassword,$_SESSION['password'])) {
          $cpasswordErr = "Incorrent Password";
        }

        }

        if (empty($_POST["npassword"])) {
          $npasswordErr = "New Password is required";
        }
        else {
         $npassword = $_POST["npassword"];

          if (!strcmp($npassword,$_SESSION['password'])) {
             $npasswordErr = "Current and New Password can not be same.";
           }

           }

           if (empty($_POST["rnpassword"])) {
             $rnpasswordErr = "Retype New Password is required";
           }
           else {
            $rnpassword = $_POST["rnpassword"];

             if (strcmp($npassword,$rnpassword)) {
                $rnpasswordErr = "Retype password and New Password need to be same.";
              }

              }

     





   function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
   }
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
          
          <tr> <td colspan="2" align="left" valign="top"> </td><p><h3>Change Password</h3></p></tr>
          <tr> <td colspan="2" align="right" valign="top"><?php  echo "<br><a href='edit_profil.php'>Edit profile</a>";?> </td></tr>
          <tr> <td colspan="2" align="right" valign="top"><?php echo "<br><a href='view_profile.php'>View profile</a>";?> </td></tr>
          <tr> <td colspan="2" align="right" valign="top"><?php echo "<br><a href='profile_picture_upload.php'>Profile picture upload</a>";?> </td></tr>
          <tr> <td colspan="2" align="right" valign="top"><?php echo "<br><a href='dashboard.php'>Dashboard</a>";?> </td></tr>
           
          

         <?php } ?>

         </table>
    

 
    
    <form style="border:3px; border-style:solid; border-color:gray; padding: 1em;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Current Password: <input type="text" name="cpassword" value="<?php echo $cpassword;?>">
        <span class="error">* <?php echo $cpasswordErr;?></span>
        <br><br>
        <span style="color:green">New Password:</span>
        <input type="text" name="npassword" value="<?php echo $npassword;?>">
        <span class="error">* <?php echo $npasswordErr;?></span>
        <br><br>
        <span style="color:Red">Retype New Password:</span>
        <input type="text" name="rnpassword" value="<?php echo $rnpassword;?>">
        <span class="error">* <?php echo $rnpasswordErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
        <br><br>



    </form>

    <?php
    include('foot.php');
     ?>
  </body>
</html>